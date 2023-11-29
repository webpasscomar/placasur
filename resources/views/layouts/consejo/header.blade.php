<!-- Header
============================================= -->
<header id="header" class="full-header">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
    ============================================= -->
                <div id="logo">
                    <a href="{{ route('home') }}">
                        <img class="logo-default" srcset="img/logo.png, img/logo.png 2x" src="img/logo.png" alt="logo"
                            width="250" height="37">
                        <img class="logo-dark" srcset="img/logo.png, img/logo.png 2x" src="img/logo.png" alt="Logo"
                            width="250" height="37">
                    </a>
                </div><!-- #logo end -->


                <div class="primary-menu-trigger">
                    <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                        <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                    </button>
                </div>

                @include('layouts.consejo.nav')

                <form class="top-search-form" action="search.html" method="get">
                    <input type="text" name="q" class="form-control" value=""
                        placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form>

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->
