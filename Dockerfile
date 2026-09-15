# Imagen base
FROM php:8.2-apache

# Instalar dependencias
RUN apt-get update && apt-get install -y \
  curl \
  gnupg \
  libzip-dev \
  zip \
  unzip \
  && docker-php-ext-configure zip \
  && docker-php-ext-install zip pdo_mysql bcmath

# Configurar Apache
COPY ./apache.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

# Configurar PHP
# COPY .docker/php.ini /usr/local/etc/php/

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Directorio de trabajo
WORKDIR /var/www/html

# Copiar código fuente
COPY . /var/www/html

# Instalar dependencias de Composer
RUN cd /var/www/html && composer install --ignore-platform-reqs --optimize-autoloader --no-dev

# Generar key de Laravel
RUN php artisan key:generate

RUN php artisan storage:link

RUN composer dump-autoload

# Permiso a carpetas de almacenamiento
RUN chown -R www-data:www-data \
  /var/www/html/storage \
  /var/www/html/bootstrap/cache

RUN mkdir -p /etc/apt/keyrings \
  && curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg \
  && echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_20.x nodistro main" > /etc/apt/sources.list.d/nodesource.list \
  && apt-get update \
  && apt-get install -y --no-install-recommends nodejs \
  && rm -rf /var/lib/apt/lists/* \
  && npm install --include=dev --no-fund --no-audit

# Puerto expuesto
EXPOSE 80 443 5173

# Comando para ejecutar el servidor Apache
CMD ["apache2-foreground"]
