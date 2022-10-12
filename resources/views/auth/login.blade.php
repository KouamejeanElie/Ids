<!DOCTYPE html>
<html lang="fr">


<!--   06:37:19 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Ids || Utilisateur IDS</title>

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
       
       <!--Start login register area-->
        <section class="login-register-area">
            <div class="container">
                <div class="row">
                 <fieldset class="form-group border p-3 field">
                    <legend class="form-group border p-2" style="text-align:center;"><i class="fa fa-user"></i>&nbsp;Authentification IDS</legend>
                    <div class="space">
                        <div class="form">
                            <div class="shop-page-title">
                                <div class="title">Se <span>Connecter</span></div>
                            </div>
                            <div class="row">
                                <form action="{{ route('login') }}" method="POST">

                                    {{csrf_field() }}

                                      @if(session('error'))
                                          <div class="container">
                                            <div class="alert alert-danger">
                                              {{ session('error') }}
                                            </div>
                                          </div>
                                      @endif

                                    <div class="col-xl-12">
                                        <div class="input-field">
                                            <input type="text" id="email" name="email" placeholder="Votre Email..." class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                            @error('email')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                            <div class="icon-holder">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="input-field">
                                            <input type="password" id="password" name="password" placeholder="Votre mot de passe..." class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                                            @error('password')
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong> 
                                             </span>
                                            @enderror
                                            <div class="icon-holder">
                                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-sm-12">
                                                <button class="btn-one" type="submit">Se connecter &nbsp;<i class="fa fa-unlock-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </fieldset>
                </div>
            </div>
        </section>
        <!--End login register area-->
        
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