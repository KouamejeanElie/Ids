<!DOCTYPE html>
<html lang="fr">


<!--   06:37:19 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Ids || Etude et Conseil</title>

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

      {{-- Bloc modal etude & conseil --}}

        <div class="modal fade" id="etude" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header" style="margin-left: 30px;">
                    <h5 class="modal-title alert alert-primary" id="exampleModalCenterTitle"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Inscription IDS Audit&nbsp;<i class="fa fa-arrow-down fleche"></i></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <form action="{{ route('path_send_formation_etude') }}" method="POST">

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
                                 <option>Etude & mise en oeuvre catalogue de service</option>
                                 <option>Etude & la réalisation de schéma directeurs des SI</option>
                                 <option>Audit du système d'information</option>
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
                            <h3 style="text-align: center">Le Triangle d'or de projet &nbsp;<i class="fa fa-arrow-down fleche" style="color:#06569d"></i></h3><br />
                             <img src="{{ asset('../images/services/service-single/how-work.jpg')}}"><br /><br />
                             <h3 style="text-align: center;">Schema Directeur des SI
                             &nbsp;<i class="fa fa-arrow-down fleche" style="color:#06569d"></i></h3><br /><br />
                             <img src="{{ asset('../images/services/service-single/picss.jpg')}}"><br /><br /><br /><br /><br />

                                 
                               <div class="sidebar-contact-box2 text-center">
                                <div class="inner-content">
                                    <div class="icon-holder">
                                        <span class="icon-support1"></span>
                                    </div>
                                    <h3>Effectuez un Audit ?<br> Inscrivez vous !</h3>
                                    <div class="bottom-box">
                                        <h2>+225 05 64 37 4794</h2>
                                        <span>Email: infos@innovationdigitalservices.com</span>
                                    </div>
                                    <div class="button">
                                        <button type="button" class="btn-four wow slideInUp" data-wow-delay="0ms" data-wow-duration="1500ms" data-toggle="modal" data-target="#etude">S'inscrire ici
                                          <span class="flaticon-next"></span>
                                        </button>
                                    </div>
                                </div>
                            </div><br /><br /><br />
                              <div class="single-sidebar">
                                <ul class="service-pack-download">
                                    <li class="clearfix">
                                        <div class="title-holder">
                                            <a href="#">Télécharger exemplaire d'audit</a> 
                                        </div>
                                        <div class="icon-holder">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                        <div class="single-service-top">
                            <div class="single-service-image-box">
                                <img src="{{ asset('../images/services/service-single/single-service-1.jpg') }}" alt="Awesome Image">
                            </div>
                            <div class="text">
                                <h2>Etude & Conseil</h2>
                                <div class="inner">
                                    <p>Notre rôle principal en matière de gestion de projet est de conduire le projet dans le respect de la triple contrainte : <strong>coût</strong>, <strong>qualité</strong>, <strong>délais.</strong>.</p>
                                    <p>Notre objectif est que le projet atteigne sa finalité qui n'est autre que la création de la valeur, et ce, en faisant passer l'organisation d'un état actuel à un état futur désiré.</p>
                                </div>
                            </div>
                              <div class="text">
                                <h3><i class="fa fa-asterisk" style="color:#06569d"></i>&nbsp;Etude & Mise en oeuvre de catalogue de service</h3>
                                <div class="inner">
                                    <p>Un catalogue de services a pour objet de structurer et de présenter l’offre de services mise à disposition de ses « clients » qui peuvent être des Directions Métier au sein de l’entreprise ou des entités juridiques externes bénéficiant de la mise à disposition de ces services.<br /> <strong>C’est un outil d’optimisation et de création de la valeur.</strong></p>
                                    <p>Contacter IDS (Innovation Digital Services) pour vous accompagner dans la mise en œuvre de vos différents <br />&nbsp;<i class="fa fa-arrow-right" style="color:#06569d"></i> <a href="" style="font-size:17px;font-weight: bold">catalogues de services.</a> &nbsp;<i class="fa fa-smile-o" style="color:#06569d"></i></p>
                                </div>
                            </div>

                              <div class="text">
                                <h3><i class="fa fa-asterisk" style="color:#06569d"></i>&nbsp;Etude & la Réalisation de Schéma Directeurs des SI </h3>
                                <div class="inner">
                                    <p>Le Schéma Directeurs décrit <strong>l’évolution souhaitée des systèmes d’information</strong> et et des ressources (individus, logiciels, matériels, règles d’organisation) nécessaires pour réaliser cette stratégie de l’entreprise.</p>
                                    <p>Les objectifs du <strong>Schéma Directeur SI</strong>, sont multiples et définis en un nombre limité de projets. Ce plan stratégique prospectif permet d’anticiper et de prévoir les évolutions du SI, même en environnement instable et incertain.</p>
                                    <p>Les avantages de notre étude et la réalisation du schéma directeur sont multiples :
                                    <ul class="list-group">
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;La réduction des coûts informatiques</li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;Un déploiement multi-sites</li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;list-group-item list-group-item-action</li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;La mise en œuvre d’une gouvernance, la création d’indicateurs de pilotage</li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;L’urbanisation du système d’information</li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;La création d’une démarche processus</li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;list-group-item list-group-item-action</li>
                                    </ul>
                                    </p>
                                    <p>
                                        Contacter <strong>IDS (Innovation Digital Services) </strong> pour vous accompagner dans la mise en œuvre de votre <br />
                                         &nbsp;<i class="fa fa-arrow-right" style="color:#06569d"></i> <a href="" style="font-size:17px;font-weight: bold">schéma directeur SI.</a>
                                    </p>
                                </div>

                                 <div class="text">
                                <h3><i class="fa fa-asterisk" style="color:#06569d"></i>&nbsp;Audit du système d'information </h3>
                                <div class="inner">
                                    <p>L’audit de système d’information est la première brique d’une démarche de rationalisation de la gestion de son SI. Car pour mieux gérer ses équipements et prendre les bonnes décisions, il importe avant tout de connaître l’ensemble des éléments qui composent le SI, leurs interactions, les besoins et les pratiques des utilisateurs, ou encore les enjeux et les risques du SI pour l’entreprise</p>
                                    <p><strong>Les objectifs de l’audit de système d’information peuvent être multiples :</strong>
                                    <ul class="list-group">
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;<strong>Évaluer l’efficacité et la performance</strong> du système au regard des objectifs stratégique de l’entreprise</li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;Évaluer la <strong>sécurité du système</strong>, <strong>sécurité des équipements, stockage et intégrité des données</strong>, en comparaison avec les risques pour l’entreprise en cas de sinistre ou de perte d’intégrité de ces données</li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;Effectuer des <strong>recommandations</strong> pour <strong>l’adaptation du système d’information</strong>, en fonction des besoins de l’entreprise, <strong>à la hausse ou à la baisse</strong></li>
                                      <li class="list-group-item list-group-item-action"><i class="fa fa-check" style="color:green"></i>&nbsp;<strong>Se mettre en conformité</strong> avec une <strong>législation</strong>, <strong>une norme</strong> ou <strong>une évolution technologique</strong> </li>
                                    </ul>
                                    </p>
                                    <p>
                                        Contacter <strong>IDS (Innovation Digital Services) </strong> pour vous accompagner dans la mise en œuvre de <br />
                                         &nbsp;<i class="fa fa-arrow-right" style="color:#06569d"></i> <a href="tel:+2250564374794" style="font-size:17px;font-weight: bold">L’audit de votre système d’information SI.</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--End Single Service Area-->
    </div>

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