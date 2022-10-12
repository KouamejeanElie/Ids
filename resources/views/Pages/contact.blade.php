<!DOCTYPE html>
<html lang="fr">


<!--   06:37:19 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Ids || Contact</title>

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

    <link href="//netdna.bootstrapcdn.com/bootstrap/5.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>

<body>
     @include('Partials.header')
     
    <div class="boxed_wrapper">


             <!--Start Project Info Area-->
        <section class="project-info-area">
            <div class="pattern-bg wow slideInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                <img src="{{ asset('../images/pattern/project-info-patten.jpg')}}" alt="Pattern Bg">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="project-info-content">
                            <div class="project-info-title">
                                <h3>IDS Info</h3>
                            </div>
                            <div class="inner-content">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-maps-and-location"></span>
                                        </div>
                                        <div class="title">
                                            <h4>Ville/Pays</h4>
                                            <span>Abidjan Côte d'Ivoire<br />Paris France</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-phone"></span>
                                        </div>
                                        <div class="title">
                                            <h4>Mobile</h4>
                                            <span>+33 134192876/ 0623967226</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-maps-and-location1"></span>
                                        </div>
                                        <div class="title">
                                            <h4>Adresse</h4>
                                            <span>France, Paris, 78, Avenue des Champs-Elysees</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-mail"></span>
                                        </div>
                                        <div class="title">
                                            <h4>Email</h4>
                                            <span>infos@innovationdigitalservices.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-group"></span>
                                        </div>
                                        <div class="title">
                                            <h4>CEO</h4>
                                            <span>Mr. Mgbo</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="project-info-image-box">
                            <img src="{{ asset('../images/projects/project-single/project-info-1.jpg')}}" alt="Awesome Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Project Info Area-->
       
       <div class="container">
         <fieldset class="form-group border p-3">
            <legend class="form-group border p-2">Contactez IDS en quelques clics&nbsp;<i class="fa fa-arrow-down fleche"></i></legend>
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step">
                            <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                            <p>Etape 1</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                            <p>Etape 2</p>
                        </div>
                        <div class="stepwizard-step">
                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                            <p>Etape 3</p>
                        </div>
                    </div>
                </div>
                <form role="form" action="{{ route('path_send_contact') }}" method="POST">

                    {{ csrf_field() }}

                    <div class="row setup-content" id="step-1">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <h3> Information personnelles</h3>
                                <div class="form-group">
                                    <label class="control-label"></label>
                                    <input  type="text" name="identite" class="form-control champs @error('identite') is-invalid @enderror" placeholder="Entrez votre nom / nom société..."  />
                                    @error('identite')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                    @enderror
                                </div>
                                <button class="btn-one nextBtn btn-lg pull-right" type="button" >Suivant <span class="flaticon-next"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-2">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <h3> Adresses</h3>
                                <div class="form-group">
                                    <label class="control-label"></label>
                                    <input type="text" name="contact" class="form-control champs @error('contact') is-invalid @enderror" placeholder="Entrez le(s) contact(s)..." />
                                    @error('contact')
                                     <span class="invalid-feedback" role="alert">
                                         <strong>{{ $message }}</strong>
                                     </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="control-label"></label>
                                    <input type="email" name="mailcontact" class="form-control champs @error('mailcontact') is-invalid @enderror" placeholder="Votre adresse email..."  />
                                    @error('mailcontact')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                                 <button class="btn-one nextBtn btn-lg pull-right" type="button" >Suivant <span class="flaticon-next"></span></button>
                            </div>
                        </div>
                    </div>
                    <div class="row setup-content" id="step-3">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <h3> Votre message</h3>
                                <textarea cols="20" rows="4" name="message" class="form-control champs" placeholder="Tapez votre texte ici..."></textarea><br /><br />
                                <button class="btn-one nextBtn btn-lg pull-right" type="submit" >Envoyer <span class="flaticon-next"></span></button>
                            </div>
                        </div>
                    </div>
                </form>
         </div>
         </fieldset>
    </div>
    
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

    <!-- custom wizard -->
    <script type="text/javascript">
        
        $(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});
    </script>
    @include('flashy::message')



</body>

</html>