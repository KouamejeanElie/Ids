<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>IDS - Modification de Formation || Tableau de Bord</title>
      <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('../images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('../images/favicon/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('../images/favicon/favicon-16x16.png') }}" sizes="16x16">

    <!-- Pignose Calender -->
    <link href="{{ asset('../dashboard/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('../dashboard/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../dashboard/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('../dashboard/css/style.css') }}" rel="stylesheet">

</head>

<body>

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header" style="background-color:black !important;">
            <div class="brand-logo">
                <a href="#">
                    <b class="logo-abbr"><img src="{{ asset('../dashboard/images/logo.png') }}" alt=""> </b>
                    <span class="logo-compact"><img src="{{ asset('../dashboard/images/logo-compact.png') }}" alt=""></span>
                    <span class="brand-title">
                        <img src="{{ asset('../dashboard/images/logo-text-2.png') }}" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
         @include('Admin.Partials.header');
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->


        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('Admin.Partials.sidebar');
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fa fa-edit"></i>&nbsp;Modification de la Formation #{{ $ajoutformation->id }}</h4>
                                <div class="basic-form">
                                    <form action="{{ action('AdminController@updateformformation',$ajoutformation->id) }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                         @method('PATCH')
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Titre du bouton</label>
                                                <input type="text" value="{{ $ajoutformation->titrebouton }}" name="titrebouton" class="form-control @error('titrebouton') is-invalid @enderror" placeholder="Entrer le titre du projet">
                                                @error('titrebouton')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                             <div class="form-group col-md-6">
                                                <label>Sous Titre</label>
                                                <input type="text" value="{{ $ajoutformation->soustitre }}" name="soustitre" class="form-control @error('soustitre') is-invalid @enderror" placeholder="Entrer le sous titre du projet">
                                                @error('soustitre')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Date de la formation</label>
                                                <input type="date" name="dateformation" class="form-control @error('dateformation') is-invalid @enderror" value="{{ $ajoutformation->dateformation }}">
                                                @error('dateformation')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                           <div class="form-group col-md-6">
                                                <label>Image de la formation</label>
                                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                             @error('image')
                                              <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                             @enderror
                                            </div>
                                        </div>
                                     
                                        <img src="{{ asset('uploads/formation/'. $ajoutformation->image)}}"><br /><br />
                                        <div class="form-group">
                                            <label>Titre de la Formation</label>
                                             <input type="text" value="{{ $ajoutformation->titre }}" name="titre" class="form-control @error('titre') is-invalid @enderror" placeholder="Entrer le titre de la formation">
                                            @error('titre')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Formation donnée Par</label>
                                             <input type="text" name="nomformateur" class="form-control @error('nomformateur') is-invalid @enderror" value="{{ $ajoutformation->nomformateur }}" placeholder="Entrer le nom du formateur">
                                            @error('nomformateur')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Catégorie de la formation</label>
                                             <select class="form-control" name="categorieformation">
                                                <option>{{ $ajoutformation->categorieformation }}</option>
                                                 <option>Gestion des projets informatique</option>
                                                 <option>Les formations sur la mise en œuvre de catalogue de service</option>
                                                 <option>Les certifications informatiques et divers</option>
                                                 <option>Les formations Microsoft Office (Word, Excel, PowerPoint)</option>
                                             </select>
                                            @error('categorieformation')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Descriptif de la Formation</label>
                                             <textarea class="form-control @error('descriptifformation') is-invalid @enderror" name="descriptifformation" placeholder="Ecrire..." cols="40" rows="10">
                                                 {{ $ajoutformation->descriptifformation }}
                                             </textarea>
                                            @error('descriptifformation')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-info">Valider la Modification&nbsp;<i class="fa fa-edit"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>

            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Tous droits reservés &copy; Developé par <a href="#">Inovexial</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('../dashboard/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('../dashboard/js/custom.min.js') }}"></script>
    <script src="{{ asset('../dashboard/js/settings.js') }}"></script>
    <script src="{{ asset('../dashboard/js/gleek.js') }}"></script>
    <script src="{{ asset('../dashboard/js/styleSwitcher.js') }}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('../dashboard/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('../dashboard/plugins/circle-progress/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{ asset('../dashboard/plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('../dashboard/plugins/topojson/topojson.min.js') }}"></script>
    <script src="{{ asset('../dashboard/plugins/datamaps/datamaps.world.min.js') }}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('../dashboard/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('../dashboard/plugins/morris/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('../dashboard/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('../dashboard/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('../dashboard/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('../dashboard/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>



    <script src="{{ asset('../dashboard/js/dashboard/dashboard-1.js') }}"></script>

        @include('flashy::message')

</body>

</html>