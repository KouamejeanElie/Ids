<!-- Start Top Bar style1 -->
        <section class="top-bar-style1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="top-style1 clearfix" style="color:white;">
                            <p>Innovation Digital Services, Basé en France et en Côte d'Ivoire... <a href="#">Retrouvez nous ici.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Top Bar style1 -->

        <!--Start Main Header-->
        <header class="main-header header-style1">

            <div class="header-upper-style1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="inner-container clearfix">
                                <div class="logo-box-style1 float-left">
                                    <a href="/">
                                        <img src="{{ asset('../images/resources/logo.png') }}">
                                    </a>
                                </div>
                                <div class="main-menu-box float-right">
                                    <nav class="main-menu clearfix">
                                        <div class="navbar-header clearfix">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        </div>
                                        <div class="navbar-collapse collapse clearfix">
                                            <ul class="navigation clearfix">
                                                <li class="{{ (request()->is('/')) ? 'current' : '' }}"><a href="/">Accueil</a>
                                                 
                                                </li>
                                                <li class="{{ (request()->is('Pages/a-propos')) ? 'current' : '' }}"><a href="{{ route('path_a-propos') }}">A propos</a>
                                                </li>
                                                <li class=""><a href="#">Nos Services</a>
                                                    <ul>
                                                        <li class="{{ (request()->is('Pages/etude-conseil')) ? 'current' : '' }}"><a href="{{ route('path_etudeconseil') }}">Etudes & Conseils</a></li>
                                                        <li class="{{ (request()->is('Pages/formation')) ? 'current' : '' }}"><a href="{{ route('path_formation') }}">La Formation</a></li>
                                                        <li class="{{ (request()->is('Pages/blockchain')) ? 'current' : '' }}"><a href="{{ route('path_blockchain') }}">Services Blockchain</a></li>
                                                        <li class="{{ (request()->is('Pages/integrateur-solution-informatique')) ? 'current' : '' }}"><a href="{{ route('path_integrateur') }}">Intégrateur  de Solutions</a></li>
                                                    </ul>
                                                </li>
                                                <li class="{{ (request()->is('Pages/contact')) ? 'current' : '' }}"><a href="{{ route('path_contact') }}">Contact</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-lower-style1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="inner-content clearfix">
                                <ul class="header-contact-info float-left">
                                    <li>
                                        <div class="single-item">
                                            <div class="icon">
                                                <span class="icon-maps-and-location"></span>
                                            </div>
                                            <div class="text">
                                                <h3>Paris, FRANCE</h3>
                                                <p>Abidjan, Côte d'Ivoire</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-item">
                                            <div class="icon">
                                                <span class="icon-phone"></span>
                                            </div>
                                            <div class="text">
                                                <h3>(+33) 01 13 41 92 87 / (+33) 06 23 96 72 26</h3>
                                                <p>Lun - Vendredi: 8h:00 - 17h:00</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-item">
                                            <div class="icon">
                                                <span class="icon-mail"></span>
                                            </div>
                                            <div class="text">
                                                <h3>infos@innovationdigitalservices.com</h3>
                                                <p>Ecrivez nous</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="header-social-links-style1 float-right">
                                    <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                                        <a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--End Main Header-->