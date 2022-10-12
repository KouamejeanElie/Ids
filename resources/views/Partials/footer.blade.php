<!--Start footer area-->
        <footer class="footer-area">
            <div class="footer-shape-bg wow slideInRight" data-wow-delay="300ms" data-wow-duration="2500ms"></div>
            <div class="container">
                <div class="row">
                    <!--Start single footer widget-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-footer-widget marbtm50">
                            <div class="contact-info-box">
                                <div class="footer-logo">
                                    <a href="index-2.html">
                                        <img src="{{ asset('../images/footer/footer-logo.png') }}" alt="Awesome Logo">
                                    </a>
                                </div>
                                <ul>
                                    <li>
                                        <h6>Adresse</h6>
                                        <p>France, Paris, 78, Avenue des Champs-Elysees</p>
                                    </li>
                                    <li>
                                        <h6>Téléphone</h6>
                                        <p>+33 134192876/ 0623967226<br> <span>Lun - Vendredi:</span> 8h:00 - 17h:00</p>
                                    </li>
                                    <li>
                                        <h6>Email</h6>
                                        <p>infos@innovationdigitalservices.com</p>
                                    </li>
                                     <li>
                                        <h6>Suivez Nous &nbsp;<i class="fa fa-hand-o-down"></i></h6><br /><br />
                                        <i class="fa fa-facebook-square" style="font-size:23px;" onclick="location.href='https://www.facebook.com/';"></i>&nbsp;&nbsp;
                                        <i class="fa fa-instagram" style="font-size:23px;" onclick="location.href='https://www.instagram.com/';"></i>&nbsp;&nbsp;
                                        <i class="fa fa-linkedin" style="font-size:23px;" onclick="location.href='https://www.linkedin.com/';"></i>&nbsp;&nbsp;
                                        <i class="fa fa-twitter" style="font-size:23px;" onclick="location.href='https://twitter.com/';"></i>
                                    </li>
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-footer-widget marbtm50">
                            <div class="title">
                                <h3>Plan du site</h3>
                            </div>
                            <div class="services-links">
                                <ul>
                                    <li><a href="/">Accueil</a></li>
                                    <li><a href="{{ route('path_a-propos') }}">A propos</a></li>
                                    <li><a href="{{ route('path_etudeconseil') }}">Etudes & Conseils</a></li>
                                    <li><a href="{{ route('path_formation') }}">Formation</a></li>
                                    <li><a href="{{ route('path_blockchain') }}">Services Blockchain</a></li>
                                    <li><a href="{{ route('path_integrateur') }}">Intégrateur de Solutions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-footer-widget pdbtm50">
                            <div class="title">
                                <h3>Projets Recents</h3>
                            </div>
                            <ul class="recent-news">
                             @foreach($ListeLastProjets as $ListeLastProjet)
                                <li>
                                    <div class="img-holder">
                                        <img src="{{ asset('uploads/projet/'. $ListeLastProjet->image) }}" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <a href="{{ asset('uploads/projet/'. $ListeLastProjet->image) }}"><span class="icon-next"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <p>{{ $ListeLastProjet->created_at }}</p>
                                        <h5><a href="#">{{ $ListeLastProjet->titreprojet }}</a></h5>
                                    </div>
                                </li>
                               @endforeach()
                            </ul>
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="single-footer-widget">
                            <div class="brochures-carousel-box owl-carousel owl-theme">
                                <!--Start Single Item-->
                                <div class="single-item">
                                    <div class="img-holder">
                                        <img src="{{ asset('../images/footer/catalogue.jpg') }}" alt="Awesome Image">
                                    </div>
                                    <div class="title-holder">
                                        <h3>Notre Catalogue</h3>
                                        <a class="btn-two" href="{{ asset('../uploads/docx/CATALOGUE-IDS.pdf') }}" download="Catalogue IDS">Télécharger<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                                <!--End Single Item-->
                                <!--Start Single Item-->
                                <div class="single-item">
                                    <div class="img-holder">
                                        <img src="{{ asset('../images/footer/catalogue.jpg') }}" alt="Awesome Image">
                                    </div>
                                    <div class="title-holder">
                                        <h3>Notre Catalogue</h3>
                                        <a class="btn-two" href="{{ asset('../uploads/docx/CATALOGUE-IDS.pdf') }}" download="Catalogue IDS">Télécharger<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                                <!--End Single Item-->
                                <!--Start Single Item-->
                                <div class="single-item">
                                    <div class="img-holder">
                                        <img src="{{ asset('../images/footer/catalogue.jpg') }}" alt="Awesome Image">
                                    </div>
                                    <div class="title-holder">
                                        <h3>Notre Catalogue</h3>
                                        <a class="btn-two" href="{{ asset('../uploads/docx/CATALOGUE-IDS.pdf') }}" download="Catalogue IDS">Télécharger<span class="flaticon-next"></span></a>
                                    </div>
                                </div>
                                <!--End Single Item-->
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                </div>
            </div>
        </footer>
        <!--End footer area-->

        <!--Start footer bottom area-->
        <section class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="footer-bottom-content flex-box-two">
                            <div class="copyright-text">
                                <p><a href="#">IDS - Innovation Digital Services</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End footer bottom area-->
