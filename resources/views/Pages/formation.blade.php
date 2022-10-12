<!DOCTYPE html>
<html lang="fr">


<!--   06:37:19 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Ids || Formation</title>

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

    {{-- Bloc modal demande de formation --}}

        <div class="modal fade" id="formation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header" style="margin-left: 30px;">
                    <h5 class="modal-title alert alert-primary" id="exampleModalCenterTitle"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Inscription IDS Formation&nbsp;<i class="fa fa-arrow-down fleche"></i></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <form action="{{ route('path_send_service_formation') }}" method="POST">

                        {{ csrf_field() }}

                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nom & Prenoms:</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" placeholder="Nom & Prenoms / Société...">
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
                            <label for="recipient-name" class="col-form-label">Formation souhaitée:</label>
                             <select class="form-control" name="formations">
                                <option>Choisir votre formation...</option>
                                 <option>Gestion des projets informatique</option>
                                 <option>Mise en oeuvre de catalogue de service</option>
                                 <option>Mise en oeuvre de schéma directeur</option>
                                 <option>Certfication Informatique & Divers</option>
                                 <option>Microsoft Office (Word, Excel, Powerpoint...)</option>
                             </select>
                          </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Fermer&nbsp;<i class="fa fa-close"></i></button>
                    <button type="submit" class="btn btn-outline-primary">Valider&nbsp;<i class="fa fa-user-plus"></i></button>
                  </div>
                </form>
                </div>
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
                                    <h3>Besoin de formation ?<br> Inscrivez vous !</h3>
                                    <div class="bottom-box">
                                        <h2>+225 05 64 37 4794</h2>
                                        <span>Email: infos@innovationdigitalservices.com</span>
                                    </div>
                                    <div class="button">
                                        <button type="button" class="btn-four wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms" data-toggle="modal" data-target="#formation">S'inscrire ici
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
                                <img src="{{ asset('../images/services/service-single/single-service-2.jpg') }}" alt="Awesome Image">
                            </div>
                            <div class="text">
                                <h2>Formation</h2>
                                <div class="inner">
                                    <p><strong>IDS</strong> (<strong>I</strong>nnovation <strong>D</strong>igitale <strong>S</strong>ervices) est une structure qui offre des formations dans divers domaines d'activités.</p>
                                    <p>Notre objectif est de vous offrir une formation de qualité en vous donnant les rudiments néccessaire à l'avancement de votre activité.</p>
                                </div>
                            </div>

                              <div class="text">
                                <h3><i class="fa fa-asterisk" style="color:#06569d"></i>&nbsp;Les différentes formations que offre IDS </h3>
                                <div class="inner">
                                    <p>Nous offrons des formations dans les domaines suivants:
                                    <ul class="list-group">
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;Gestion des projets informatique</li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;Les formations sur la mise en œuvre de catalogue de service</li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;Les formations sur la mise en œuvre de Schéma Directeur SI</li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;Les certifications informatiques et divers</li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;Les formations Microsoft Office (Word, Excel, PowerPoint)</li>
                                    </ul>
                                    </p>
                                    <p>
                                        Contacter <strong>IDS (Innovation Digital Services) </strong> pour plus d'informations sur nos formations <br />
                                         &nbsp;<i class="fa fa-arrow-right" style="color:#06569d"></i> <a href="tel:+2250564374794" style="font-size:17px;font-weight: bold">Contactez nous maintenant.</a>
                                    </p>
                                </div>

                               
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
        <!--Start Similar projects Area-->
        <section class="similar-projects-area">
            <div class="container-fluid similar-projects-content">
                <div class="similar-project-title text-center">
                    <h2>Les formations IDS</h2>
                </div>
                <div class="row">
                    <!--Start Single Similar Project-->
                 @foreach($ListeLastFormations as $ListeLastFormation)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="single-similar-project">
                            <div class="img-holder">
                                <img src="{{ asset('uploads/formation/'. $ListeLastFormation->image) }}" alt="Awesome Image">
                            </div>
                            <div class="title-holder">
                                <span>{{ $ListeLastFormation->soustitre }}</span>
                                <h3><a href="{{ route('path_formation_single',$ListeLastFormation->id) }}">{{$ListeLastFormation->titre }}</a></h3>
                            </div>
                        </div>
                    </div>
                  @endforeach
                    <!--End Single Similar Project-->
                </div>
                {{ $ListeLastFormations->links() }}
            </div>
        </section>
        <!--End Similar projects Area-->

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