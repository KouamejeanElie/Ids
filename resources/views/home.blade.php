<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>IDS - Utilisateur Tableau de Bord</title>
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
         @include('layouts.header');
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->


        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('layouts.sidebar');
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Certificats</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{ $totalCertificat }}</h2>
                                    <p class="text-white mb-0">{{date('m-d H:i:s') }}</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-list-alt"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Bourses</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{ $totalBourse }}</h2>
                                    <p class="text-white mb-0">{{date('m-d H:i:s') }}</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-book"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Diplomes</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{ $totalDiplome }}</h2>
                                    <p class="text-white mb-0">{{date('m-d H:i:s') }}</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-graduation-cap"></i></span>
                            </div>
                        </div>
                    </div>
                   

                {{--      <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Formations</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"></h2>
                                    <p class="text-white mb-0">{{date('m-d H:i:s') }}</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-file"></i></span>
                            </div>
                        </div>
                    </div> --}}

                   
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                 <p class="alert alert-primary"><i class="fa fa-list-alt"></i>&nbsp;Les dernières demandes de Bourse</p>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        @if($TotalLastbourses>0)
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Nom</th>
                                                    <th>Type de bourse</th>
                                                    <th>Statut</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($ListeLastBourses as $ListeLastBourse)
                                              <tr>
                                                  <td>
                                                      {{ $ListeLastBourse->nom }}
                                                  </td>
                                                   <td>
                                                      {{ $ListeLastBourse->choixbourse }}
                                                  </td>
                                                  <td class="badge bg-primary" style="color:white;">
                                                      {{ $ListeLastBourse->statut }}
                                                  </td>
                                              </tr>
                                             @endforeach
                                            </tbody>
                                        </table><br />
                                        @else
                                          <p class="alert alert-primary alert-dismissible" style="text-align:center;"><i class="fa fa-info-circle" style="font-size: 24px;"></i>&nbsp;Oops!! Vous n'avez aucune demande de Bourse(s) en cours !
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                             </p>
                                        @endif
                                        {{ $ListeLastBourses->links() }}
                                    </div>
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

</body>

</html>
