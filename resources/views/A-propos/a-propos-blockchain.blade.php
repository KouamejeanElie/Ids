<!DOCTYPE html>
<html lang="fr">


<!--   06:37:19 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Ids || A propos</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ asset('../css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('../css/responsive.css') }}">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('../images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('../images/favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('../images/favicon/favicon-16x16.png') }}" sizes="16x16">

</head>

<body>
    <div class="boxed_wrapper">

        @include('Partials.header')

        <!--Start Project Description area-->
        <section class="project-description-area">
            <div class="pattern-bg wow slideInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                <img src="{{ asset('../images/pattern/project-description-pattern.jpg') }}" alt="Pattern Bg">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="project-description-image-box">
                            <img src="{{ asset('../images/projects/project-single/project-description-1.jpg') }}" alt="Awesome Image">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="project-description-content">
                            <div class="sec-title">
                                <p>Qui sommes-nous</p>
                                <div class="title">IDS - <br> Innovation Digital Services</div>
                            </div>
                            <div class="inner-content">
                                <p>IDS est un int??grateur de solution informatique sp??cialis?? d'une part dans le conseil,
                                la gestion des projets, l'??tude et l'audit des syst??mes d'information et d'autres part dans la technologie blockchain, l'intermediation, les solutions de paiement num??rique, le g??nie logiciels, la consultance et la formation. Notre succ??s s'est largement appuy?? sur la confiance que nous avons su inspir?? ?? nos clients et partenaires (essentiellement constitu??e d'ONGs, de banques, d'administrations et d'assurances) .</p>
                                <div class="bottpm-text">
                                    <p>C???est donc notre capacit?? ?? conduire des projets d???envergure dans des environnements aussi critiques que complexes qui nous positionne aujourd???hui comme un acteur majeur du march?? de l???int??gration des solutions informatique et T??l??com. Nous avons quatres (4) grands p??les de services ?? savoir:</p>
                                </div>
                                <ul>
                                    <li>L'??tude et Le conseil</li>
                                    <li>La formation</li>
                                    <li>Service blockchain </li>
                                    <li>Int??gration de solution</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Project Description area-->

           <!--Start Single Service Area-->
        <section class="single-service-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">
                        <div class="single-service-sidebar">
                            <!--Start Single sidebar-->
                            <div class="single-sidebar">
                                <ul class="service-pages">
                                    <li>
                                        <a href="{{ route('path_a-propos') }}">
                                            <div class="title">
                                                <h3 class="static">Etude & Conseil</h3>
                                                <div class="overlay-title">
                                                    <h3>Etude & Conseil</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('path_serformation') }}">
                                            <div class="title">
                                                <h3 class="static">La formation</h3>
                                                <div class="overlay-title">
                                                    <h3>La formation</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li   class="active">
                                        <a href="{{ route('path_serblockchain') }}">
                                            <div class="title">
                                                <h3 class="static">Service blockchain</h3>
                                                <div class="overlay-title">
                                                    <h3>Service blockchain</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('path_serintegration') }}">
                                            <div class="title">
                                                <h3 class="static">Int??gration de solution</h3>
                                                <div class="overlay-title">
                                                    <h3>Int??gration de solution</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                             <div class="sidebar-contact-box text-center">
                                <div class="inner-content">
                                    <div class="icon-holder">
                                        <span class="icon-support1"></span>
                                    </div>
                                    <h3>Consulter un expert &<br> Commencer maintenant</h3>
                                    <div class="bottom-box">
                                        <h2>+225 05 64 37 4794</h2>
                                        <span>Email: infos@innovationdigitalservices.com</span>
                                    </div>
                                    <div class="button">
                                        <a class="btn-four wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms" href="tel:+2250564374794">Appellez maintenant
                                    <span class="flaticon-next"></span>
                                </a>
                                    </div>
                                </div>
                            </div>
                              <!--Start Single sidebar-->
                            <div class="single-sidebar">
                                <ul class="service-pack-download">
                                    <li class="clearfix">
                                        <div class="title-holder">
                                            <a href="#">T??l??charger notre Ebook</a>
                                        </div>
                                        <div class="icon-holder">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--End Single sidebar-->
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                        <div class="single-service-top">
                            <div class="single-service-image-box">
                                <img src="{{ asset('../images/services/service-single/single-service-3.jpg') }}" alt="Awesome Image">
                            </div>
                            <div class="text">
                                <h2>Service Blockchain</h2>
                                <div class="inner">
                                    <p>Les blockchains permettent de stocker et d'??changer de la valeur sur internet sans interm??diaire centralis??. Elles sont le moteur technologique des cryptomonnaies&nbsp; <a href="{{ route('path_blockchain') }}">Lire suite</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="advantages-content">
                            <div class="row">
                                <!--Start Single Advantages Box-->
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="single-advantages-box">
                                        <div class="inner">
                                            <div class="static-content">
                                                <div class="icon-holder">
                                                    <span class="icon-success"></span>
                                                </div>
                                                <div class="title">
                                                    <h3>Equipe<br> Experte</h3>
                                                </div>
                                            </div>
                                            <div class="overlay-text">
                                                <div class="box">
                                                    <div class="inner-text">
                                                        <p>Notre ??quipe est compos??e d'experts dans leur domaine.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Advantages Box-->
                                <!--Start Single Advantages Box-->
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="single-advantages-box">
                                        <div class="inner">
                                            <div class="static-content">
                                                <div class="icon-holder">
                                                    <span class="icon-guarantee-certificate"></span>
                                                </div>
                                                <div class="title">
                                                    <h3>Certification<br> Garantie</h3>
                                                </div>
                                            </div>
                                            <div class="overlay-text">
                                                <div class="box">
                                                    <div class="inner-text">
                                                        <p>Des certificats de formations certifi??es par l'Etat ivoirien et Fran??ais.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Advantages Box-->
                                <!--Start Single Advantages Box-->
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="single-advantages-box">
                                        <div class="inner">
                                            <div class="static-content">
                                                <div class="icon-holder">
                                                    <span class="icon-hr"></span>
                                                </div>
                                                <div class="title">
                                                    <h3>Assistance<br> 7jrs/7</h3>
                                                </div>
                                            </div>
                                            <div class="overlay-text">
                                                <div class="box">
                                                    <div class="inner-text">
                                                        <p>Nous vous assistons dans la r??alisation de vos projets de bout en bout.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Advantages Box-->
                                <!--Start Single Advantages Box-->
                                <div class="col-xl-3 col-lg-6 col-md-6">
                                    <div class="single-advantages-box">
                                        <div class="inner">
                                            <div class="static-content">
                                                <div class="icon-holder">
                                                    <span class="icon-wallet"></span>
                                                </div>
                                                <div class="title">
                                                    <h3>Prix<br> Concurrentiel</h3>
                                                </div>
                                            </div>
                                            <div class="overlay-text">
                                                <div class="box">
                                                    <div class="inner-text">
                                                        <p>Nos tarifs sont adapt??s ?? tout type de bourse.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Advantages Box-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Single Service Area-->

         <!--Start home google map area-->
        <section class="home-google-map-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="google-map-box">
                              <div id="map-container-google-1" class="z-depth-1-half map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254236.6516208995!2d-4.119751791677501!3d5.348434206446737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ea5311959121%3A0x3fe70ddce19221a6!2sAbidjan!5e0!3m2!1sfr!2sci!4v1662028375436!5m2!1sfr!2sci" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End home google map area-->

        @include('Partials.footer')
    </div>


    <div class="scroll-to-top-style2 scroll-to-target" data-target="html">
        <span class="fa fa-angle-up"></span>
    </div>



    <script src="{{ asset('../js/jquery.js') }}"></script>
    <script src="{{ asset('../js/appear.js') }}"></script>
    <script src="{{ asset('../js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('../js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('../js/isotope.js') }}"></script>
    <script src="{{ asset('../js/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('../js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('../js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('../js/jquery.enllax.min.js') }}"></script>
    <script src="{{ asset('../js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('../js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('../js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('../js/owl.js') }}"></script>
    <script src="{{ asset('../js/validation.js') }}"></script>
    <script src="{{ asset('../js/wow.js') }}"></script>

    <script src="{{ asset('../js/map-helper.js') }}"></script>

    <script src="{{ asset('../assets/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
    <script src="{{ asset('../assets/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('../assets/html5lightbox/html5lightbox.js') }}"></script>

    <!--Revolution Slider-->
    <script src="{{ asset('../plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('../plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('../js/main-slider-script.js') }}"></script>

    <!-- thm custom script -->
    <script src="{{ asset('../js/custom.js') }}"></script>



</body>


<!--   06:40:40 GMT -->
</html>