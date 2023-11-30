    <!-- footer -->
    <div class="bg-dark bg-gradient">
      <div class="container py-4 small">
        <div class="row d-md-flex flex-md-row d-sm-flex flex-sm-column-reverse">
          <div class="col mt-md-0 mt-4">
            <img src="{{ asset('img/datafiscal-qr.png') }}">
          </div>
          <div class="col-md-3 align-content-end">
            <p class="h4 text-white">Contactanos</p>
            <ul class="list-unstyled text-white-50">
              <li class="pb-2"><i class="far fa-building"></i> Av. H. Yrigoyen 15750 <br>
                (1852) Burzaco, Buenos Aires, Argentina</li>
              <li class="pb-2"><i class="fas fa-phone-alt"></i> (5411) 4002-4400 / 4238-4000</li>
              <li class="text-white-50"><i class="far fa-envelope"></i> <a href="mailto:info@placasur.com.ar"
                  class="text-decoration-none text-white-50"> info@placasur.com.ar </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN footer -->


    <script src="js/jquery.min.js"></script>
    <!-- <script src="libs/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <script src="libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

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
    </script>
