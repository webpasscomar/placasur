#!/usr/bin/env bash
#
# Post-deploy de Placasur. Se corre desde la raiz del proyecto, despues del pull:
#
#   git pull && bash scripts/post-deploy.sh
#
# Los comandos se ejecutan dentro del contenedor de la app, porque vendor/ es un
# volumen anonimo del contenedor y no se comparte con el host.
#
# Variables opcionales:
#   APP_SERVICE    nombre del servicio en docker-compose (default: app)
#   COMPOSE_FILE   archivo de compose a usar (default: el que tome docker por defecto)
#   SKIP_MIGRATE=1 saltea las migraciones

set -euo pipefail

APP_SERVICE="${APP_SERVICE:-app}"
SKIP_MIGRATE="${SKIP_MIGRATE:-0}"

cd "$(dirname "$0")/.."

log()  { printf '\n\033[1;34m==>\033[0m %s\n' "$1"; }
warn() { printf '\n\033[1;33m[!]\033[0m %s\n' "$1"; }
die()  { printf '\n\033[1;31m[x]\033[0m %s\n' "$1" >&2; exit 1; }

# docker compose (v2) o docker-compose (v1)
if docker compose version >/dev/null 2>&1; then
  COMPOSE=(docker compose)
elif command -v docker-compose >/dev/null 2>&1; then
  COMPOSE=(docker-compose)
else
  die "No encontre 'docker compose' ni 'docker-compose' en el PATH."
fi

if [[ -n "${COMPOSE_FILE:-}" ]]; then
  COMPOSE+=(-f "$COMPOSE_FILE")
fi

# -T: sin TTY, para que ande en pipelines y por SSH no interactivo
run() { "${COMPOSE[@]}" exec -T "$APP_SERVICE" "$@"; }

artisan() { run php artisan "$@"; }

# ---------------------------------------------------------------------------
# Chequeos previos
# ---------------------------------------------------------------------------

[[ -f .env ]] || die "No existe .env en la raiz del proyecto."

log "Verificando que el contenedor '$APP_SERVICE' este levantado"
if ! run true >/dev/null 2>&1; then
  die "El servicio '$APP_SERVICE' no responde. Levantalo con: ${COMPOSE[*]} up -d"
fi

# ---------------------------------------------------------------------------
# Deploy
# ---------------------------------------------------------------------------

# Si algo falla despues del 'down', el trap saca el sitio de mantenimiento
# para no dejarlo caido.
cleanup() {
  local code=$?
  if [[ $code -ne 0 ]]; then
    warn "Fallo el deploy (exit $code). Sacando el sitio de mantenimiento."
    artisan up || true
  fi
}
trap cleanup EXIT

log "Activando modo mantenimiento"
artisan down --retry=15 || warn "No se pudo activar el modo mantenimiento, sigo igual."

log "Instalando dependencias de Composer"
run composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Los assets de Vite (public/build) se compilan en local y van versionados en el
# repo, asi que no hace falta correr npm run build aca. Si eso cambia, agregar:
#   run npm ci && run npm run build

if [[ "$SKIP_MIGRATE" == "1" ]]; then
  warn "SKIP_MIGRATE=1, salteando migraciones."
else
  log "Corriendo migraciones"
  # --force porque en produccion artisan pide confirmacion interactiva
  artisan migrate --force
fi

log "Limpiando y regenerando caches"
artisan optimize:clear
artisan config:cache
artisan route:cache
artisan view:cache

log "Verificando el symlink de storage"
artisan storage:link || warn "storage:link fallo (normal si el link ya existia)."

log "Ajustando permisos de storage y bootstrap/cache"
run chown -R www-data:www-data storage bootstrap/cache

log "Saliendo de modo mantenimiento"
artisan up

trap - EXIT
log "Deploy terminado."
