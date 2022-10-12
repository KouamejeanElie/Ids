<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>IDS - Demande de Bourse || Tableau de Bord</title>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><i class="fa fa-hand-o-right"></i>&nbsp;Effectuer une Demande de Bourse</h4>
                                <div class="basic-form">
                                    <form action="{{ route('path_utilisateur_store_bourse') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="form-row">
                                            <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                                              <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                                            <div class="form-group col-md-6">
                                                <label>Nom & Prenoms</label>
                                                <input type="text" name="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="Entrer le Nom...">
                                                @error('nom')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Avez vous dejà participer à une formation IDS ?</label>
                                                <select class="form-control @error('participation') is-invalid @enderror" name="participation">
                                                  <option>Choisir...</option>
                                                  <option>Oui</option>
                                                  <option>Non</option>
                                                </select>
                                                @error('participation')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Type de Bourse souhaitée</label>
                                                <select class="form-control" name="choixbourse">
                                                    <option>Choisir...</option>
                                                    <option>Bourse1</option>
                                                    <option>Bourse2</option>
                                                </select>
                                            </div>
                                           <div class="form-group col-md-6">
                                                <label>Votre Message</label>
                                                <textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Ecrire..." cols="20" rows="5">
                                                    
                                                </textarea>
                                                @error('message')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info">Envoyer&nbsp;<i class="fa fa-plus"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                 <p class="alert alert-success">Vous avez [{{ $totalBourse}}] demande(s) de Bourse(s) Acceptée(s)</p>
                                <div class="active-member">
                                    <div class="table-responsive">
                                     @if($totalBourse>0)
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Nom & Prenoms</th>
                                                    <th>Type de Bourse</th>
                                                    <th>Détails</th>
                                                    <th>Statut</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($listeBoursesAcceptees as $listeBoursesAcceptee)
                                              <tr>
                                                  <td>{{ $listeBoursesAcceptee->nom }}</td>
                                                  <td>{{ $listeBoursesAcceptee->choixbourse }}</td>
                                                  <td><textarea class="form-control" readonly>{{ $listeBoursesAcceptee->message }}</textarea></td>
                                                  <td class="badge bg-success" style="color:white;">{{ $listeBoursesAcceptee->statut }}</td>
                                              </tr>
                                             @endforeach
                                            </tbody>
                                        </table><br />
                                       @else
                                        <p class="alert alert-success alert-dismissible" style="text-align:center;"><i class="fa fa-info-circle" style="font-size: 24px;"></i>&nbsp;Oops!! Vous n'avez aucune Bourse(s) Acceptée(s) disponible !
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                             </p>
                                       @endif
                                       {{ $listeBoursesAcceptees->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                 <p class="alert alert-primary">Vous avez [{{ $totalBourseEncours}}] Demande(s) de Bourse(s) En cours</p>
                                <div class="active-member">
                                    <div class="table-responsive">
                                     @if($totalBourseEncours>0)
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Nom & Prenoms</th>
                                                    <th>Type de Bourse</th>
                                                    <th>Détails</th>
                                                    <th>Statut</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($listeBoursesEncours as $listeBoursesEncour)
                                              <tr>
                                                  <td>{{ $listeBoursesEncour->nom }}</td>
                                                  <td>{{ $listeBoursesEncour->choixbourse }}</td>
                                                  <td><textarea class="form-control" readonly>{{ $listeBoursesEncour->message }}</textarea></td>
                                                  <td class="badge bg-primary" style="color:white;">{{ $listeBoursesEncour->statut }}</td>
                                              </tr>
                                             @endforeach
                                            </tbody>
                                        </table><br />
                                       @else
                                        <p class="alert alert-primary alert-dismissible" style="text-align:center;"><i class="fa fa-info-circle" style="font-size: 24px;"></i>&nbsp;Oops!! Vous n'avez aucune demande de Bourse(s) en cours !
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                             </p>
                                       @endif
                                       {{ $listeBoursesEncours->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>


                 <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                 <p class="alert alert-danger">Vous avez [{{ $totalBourseRefusee}}] demande(s) de  Bourse(s) refusée(s)</p>
                                <div class="active-member">
                                    <div class="table-responsive">
                                     @if($totalBourseRefusee>0)
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Nom & Prenoms</th>
                                                    <th>Type de Bourse</th>
                                                    <th>Détails</th>
                                                    <th>Statut</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($listeBoursesRefusees as $listeBoursesRefusee)
                                              <tr>
                                                  <td>{{ $listeBoursesRefusee->nom }}</td>
                                                  <td>{{ $listeBoursesRefusee->choixbourse }}</td>
                                                  <td><textarea class="form-control" readonly>{{ $listeBoursesRefusee->message }}</textarea></td>
                                                  <td class="badge bg-danger" style="color:white;">{{ $listeBoursesRefusee->statut }}</td>
                                              </tr>
                                             @endforeach
                                            </tbody>
                                        </table><br />
                                       @else
                                        <p class="alert alert-danger alert-dismissible" style="text-align:center;"><i class="fa fa-info-circle" style="font-size: 24px;"></i>&nbsp;Oops!! Aucune Bourse Refusées actuellement !
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                             </p>
                                       @endif
                                       {{ $listeBoursesRefusees->links() }}
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

        @include('flashy::message')

</body>

</html>