    <!-- footer -->
    <div class="bg-dark">
      <div class="container py-4 small">
        <div class="row">
          <!-- contacto -->
          <div class="col-md-3 mb-3">
            <p class="h6 fw-bold text-white">Contacto</p>
            <ul class="list-unstyled light text-light">
              <li> Av. H. Yrigoyen 15750 (1852) <br>
                Burzaco, Buenos Aires, Argentina</li>
              <li class="pt-3 pb-2 fw-bold h5 text-white"> +54 11 4002-4400<br>
                +54 11 2206-4000</li>
            </ul>
            <p class="h6 fw-bold text-white">Horarios</p>
            <span class="text-light light"> lun a vier 8 a 12 hs. y de 13:30 a 17:30 hs.</span>
          </div>
          <!-- categorias -->
          <div class="col-md-3 mb-3">
            <p class="h6 fw-bold text-white">Menú</p>
            <ul class="list-unstyled text-white-50 light">
              <li><a href="{{ route('empresa') }}" class="text-decoration-none link-light"
                  title="Saber más sobre la Empresa"> Empresa
                </a></li>
              <li><a href="{{ route('servicios') }}" class="text-decoration-none link-light"
                  title="Todos los servicios"> Servicios
                </a></li>
              <li><a href="{{ route('productos') }}" class="text-decoration-none link-light"
                  title="Todos nuestros productos">
                  Productos </a></li>
              <li><a href="{{ route('novedades') }}" class="text-decoration-none link-light"
                  title="Todas la últimas novedades">
                  Novedades </a></li>
              <li><a href="{{ route('contacto') }}" class="text-decoration-none link-light" title="Nuestros contactos">
                  Contacto </a>
              </li>
            </ul>
          </div>
          <!-- data fiscal -->
          <div class="col-md-3 mb-3">
            <p class="h6 fw-bold text-white">Data fiscal</p>
            <img src="{{ asset('img/datafiscal-qr.png') }}" title="Imagen de data fiscal de la empresa">
          </div>
          <!-- redes -->
          <div class="col-md-3">
            <p class="h6 fw-bold text-white">Nuestras redes</p>
            <ul class="list-group list-group-horizontal">
              <li class="list-group-item bg-transparent ps-0 border-0 light text-light">
                <a href="https://www.youtube.com/channel/UCI2gWFwLRoyDDzkdpd-qAXA" target="_blank"
                  class="text-decoration-none link-light" title="Mirá nuestro canal de youtube"> <i
                    class="fa-brands fa-youtube"></i> </a>
              </li>
              <li class="list-group-item bg-transparent ps-0 border-0 light text-light">
                <a href="https://www.instagram.com/placasur_distribuidora/" target="_blank"
                  class="text-decoration-none link-light" title="Nuestro Instagram"> <i
                    class="fa-brands fa-instagram"></i> </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN footer -->


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- <script src="libs/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script type="text/javascript" charset="utf-8">
      // tooltip
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      });

      // menú dropdown hover
      const $dropdown = $(".dropdown");
      const $dropdownToggle = $(".dropdown-toggle");
      const $dropdownMenu = $(".dropdown-menu");
      const showClass = "show";

      $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 768px)").matches) {
          $dropdown.hover(
            function() {
              const $this = $(this);
              $this.addClass(showClass);
              $this.find($dropdownToggle).attr("aria-expanded", "true");
              $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
              const $this = $(this);
              $this.removeClass(showClass);
              $this.find($dropdownToggle).attr("aria-expanded", "false");
              $this.find($dropdownMenu).removeClass(showClass);
            }
          );
        } else {
          $dropdown.off("mouseenter mouseleave");
        }
      });

      // search animado
      const searchBtn = document.querySelector('#searchBtn');
      const animatedInput = document.querySelector('#animated-input');

      searchBtn.addEventListener('click', openSearch);

      function openSearch(e) {
        animatedInput.focus();
      }
      // Check if there is text in input every 50ms
      setInterval(function() {
        if (animatedInput.value) {
          animatedInput.style.width = '225px';
        }
      }, 50);
    </script>
