<!DOCTYPE html>
<html lang="fr">


<!--   06:37:19 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Ids || Intégrateur de solution informatique</title>

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


      {{-- Bloc modal service intégration web --}}

        <div class="modal fade" id="integration" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header" style="margin-left: 30px;">
                    <h5 class="modal-title alert alert-primary" id="exampleModalCenterTitle"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Inscription IDS Services Web&nbsp;<i class="fa fa-arrow-down fleche"></i></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <form action="{{ route('path_send_formation_integration') }}" method="POST">

                        {{ csrf_field() }}
                        
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nom & Prenoms:</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" placeholder="Nom & Prenoms / Nom société...">
                            @error('nom')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="text" class="form-control @error('emailformation') is-invalid @enderror" name="emailformation" placeholder="Email...">
                            @error('emailformation')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div>
                           <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Contact:</label>
                            <input type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" placeholder="Téléphone...">
                            @error('contact')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                            @enderror
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Services souhaités:</label>
                             <select class="form-control" name="formations">
                                <option>Choisir votre service...</option>
                                 <option>Conception de sites Web</option>
                                 <option>Hébergement de sites web</option>
                                 <option>Génies logiciels</option>
                                 <option>Marketing digital</option>
                             </select>
                          </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Fermer&nbsp;<i class="fa fa-close"></i></button>
                    <button type="submit" class="btn btn-outline-primary">Valider&nbsp;<i class="fa fa-user-plus"></i></button>
                  </div>
                </div>
                </form>
              </div>
        </div>


    {{-- Fin du Modal --}}


  @include('Partials.header')

    <div class="boxed_wrapper">

       <!--Start Single Service Area-->
        <section class="single-service-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">
                        <div class="single-service-sidebar">
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
                             
                            </div>
                            <!--End Single sidebar-->
                               <div class="sidebar-contact-box2 text-center">
                                <div class="inner-content">
                                    <div class="icon-holder">
                                        <span class="icon-support1"></span>
                                    </div>
                                    <h3>Besoin de logiciel / site web ?<br> Contactez nous !</h3>
                                    <div class="bottom-box">
                                        <h2>+225 05 64 37 4794</h2>
                                        <span>Email: infos@innovationdigitalservices.com</span>
                                    </div>
                                    <div class="button">
                                        <button type="button" class="btn-four wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms" data-toggle="modal" data-target="#integration">S'inscrire ici
                                          <span class="flaticon-next"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                        <div class="single-service-top">
                            <div class="single-service-image-box">
                                <img src="{{ asset('../images/services/service-single/single-service-4.jpg') }}" alt="Awesome Image">
                            </div>
                            <div class="text">
                                <h2>Intégration de solutions</h2>
                                <div class="inner">
                                    <p>Le génie logiciel est <strong>« l'ensemble des activités de conception et de mise en œuvre des produits et des procédures tendant à rationaliser la production du logiciel et son suivi »</strong><br />
                                    Nous pouvons automatiser chacun de vos processus métiers.
                                    </p>
                                </div>
                            </div>

                              <div class="text">
                                <h3><i class="fa fa-asterisk" style="color:#06569d"></i>&nbsp;La vente de matériels informatique et Télécom </h3>
                                <div class="inner">
                                    <p>Sur commande en nous soumettant vos besoins en matériels bureautique, informatique, Télécom. Notre service support est prêt a vous apporter notre aide à tous les niveaux (installation, configuration et assistance).
                                    </p>
                                    <p>Nos différents services:
                                    <ul class="list-group">
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;Conception de sites Web</li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;Hébergement de sites web</li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;Génies logiciels</li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;Marketing digital</li>
                                    </ul>
                                    </p>
                                    <p>
                                        Contacter <strong>IDS (Innovation Digital Services) </strong> pour vous accompagner dans la mise en œuvre de  <br />
                                         &nbsp;<i class="fa fa-arrow-right" style="color:#06569d"></i> <a href="tel:+2250564374794" style="font-size:17px;font-weight: bold">Vos logiciels</a>&nbsp;taillés sur mesure et répondant totalement au besoin métier.
                                    </p>
                                </div>    
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


        <!--Start Main project area-->
        <section class="main-project-area">
            <div class="container">
                <h2 style="text-align: center;">Nos différentes solutions développées</h2><br /><br />
                <div class="row filter-layout masonary-layout">
                    <!--Start single project item-->
                    @foreach($listeAllIntegrations as $listeAllIntegration)
                    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 filter-item contem">
                        <div class="single-project-style4">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{ asset('uploads/integration/'. $listeAllIntegration->image) }}" alt="Awesome Image">
                                    <div class="overlay-box">
                                        <div class="box">
                                            <div class="link">
                                                <a href="{{ asset('uploads/integration/'. $listeAllIntegration->image) }}"><span class="icon-out"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overlay-content">
                                    <div class="title">
                                        <span>{{ $listeAllIntegration->soustitre }}</span>
                                        <h3><a href="{{ asset('uploads/integration/'. $listeAllIntegration->image) }}">{{$listeAllIntegration->titre }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End single project item-->
                </div>
                 <div class="link">
                   {{ $listeAllIntegrations->links() }}
                </div>
            </div>
        </section>
        <!--End Main project area-->

     @include('Partials.footer')
     
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

    @include('flashy::message')



</body>


<!--   06:40:40 GMT -->
</html>