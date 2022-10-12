<!DOCTYPE html>
<html lang="fr">


<!--   06:37:19 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Ids || Formation Single</title>

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
      @include('Partials.header')
      
         <!--Start Single Post Info Area-->
        <section class="single-post-info-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-post-info-content text-center">
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>Par <a href="#">@foreach($ListeLastFormations as $ListeLastFormation)
                                        {{ $ListeLastFormation->nomformateur }}
                                        @endforeach</a></li>
                                    <li>Date <a href="#">@foreach($ListeLastFormations as $ListeLastFormation)
                                        {{ $ListeLastFormation->dateformation->format('d/m/Y') }}
                                        @endforeach</a></li>
                                    <li>Sur <a href="#">@foreach($ListeLastFormations as $ListeLastFormation)
                                        {{ $ListeLastFormation->categorieformation }}
                                        @endforeach</a></li>
                                </ul>
                            </div>
                            <h1 class="blog-title">@foreach($ListeLastFormations as $ListeLastFormation)
                                        {!! $ListeLastFormation->titre !!}
                                        @endforeach</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Single Post Info Area-->



         <!--Start blog single area-->
        <section id="blog-area" class="blog-single-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-post">
                            <div class="single-blog-post">
                             @foreach($ListeLastFormations as $ListeLastFormation)
                                <div class="main-image-box">
                                    <img src="{{ asset('uploads/formation/'. $ListeLastFormation->image) }}" alt="Awesome Image">
                                </div>
                                <div class="top-text-box">
                                    <p>{!! $ListeLastFormation->descriptifformation !!}</p>
                                </div> 
                            @endforeach    
                            </div>
                        </div>
                    </div>
                    <!--Start single sidebar-->
                            <div class="single-sidebar">
                                <div class="sidebar-title">
                                    <div class="title">Formation recentes</div>
                                </div>
                                <ul class="recent-post">
                                 @foreach($RecentesFormations as $RecentesFormation)
                                    <li>
                                        <div class="img-holder">
                                            <img src="{{ asset('uploads/formation/'. $RecentesFormation->image) }}" alt="Awesome Image">
                                            <div class="overlay-style-one">
                                                <div class="box">
                                                    <div class="content">
                                                        <a href="{{ asset('uploads/formation/'. $RecentesFormation->image) }}"><span class="icon-link"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title-holder">
                                            <span>{{ $RecentesFormation->dateformation->format('d:m:Y')}}</span>
                                            <h5 class="post-title"><a href="{{ route('path_formation_single',$RecentesFormation->id) }}">{{ $RecentesFormation->titre }}</a></h5>
                                        </div>
                                    </li>
                                  @endforeach
                                </ul>
                            </div>
                            <!--End single sidebar-->
                </div>
            </div>

        </section>
        <!--End blog single area-->

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



</body>


<!--   06:40:40 GMT -->
</html>