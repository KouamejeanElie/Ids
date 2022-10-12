<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>IDS - Ajout de Solution Développées || Tableau de Bord</title>
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
                                <h4 class="card-title"><i class="fa fa-plus"></i>&nbsp;Ajouter une Solution web développée à votre plateforme</h4>
                                <div class="basic-form">
                                    <form action="{{ route('path_admin_store_integration') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Titre de la solution</label>
                                                <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" placeholder="Entrer le titre de la solution">
                                                @error('titre')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Sous Titre</label>
                                                <input type="text" name="soustitre" class="form-control @error('soustitre') is-invalid @enderror" placeholder="Entrer le sous titre de la solution">
                                                @error('soustitre')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Catégorie</label>
                                                <select class="form-control" name="categorie">
                                                    <option>Choisir...</option>
                                                    <option>Logiciels</option>
                                                    <option>Site web</option>
                                                    <option>Hébergement web</option>
                                                    <option>Marketing digitale</option>
                                                </select>
                                            </div>
                                           <div class="form-group col-md-6">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                                @error('image')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-info">Ajouter la solution&nbsp;<i class="fa fa-plus"></i></button>
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
                                 <p class="alert alert-warning">Liste des solution web Ajoutées</p>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Titre</th>
                                                    <th>Sous Titre</th>
                                                    <th>Catégorie</th>
                                                    <th>Image</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($listeTotalAjoutIntegrations as $listeTotalAjoutIntegration)
                                                <tr>
                                                    <td>{{ $listeTotalAjoutIntegration->titre }}</td>
                                                    <td>{{ $listeTotalAjoutIntegration->soustitre }}</td>
                                                     <td>{{ $listeTotalAjoutIntegration->categorie }}</td>
                                                    <td>
                                                    <img src="{{ asset('uploads/integration/'. $listeTotalAjoutIntegration->image) }}">
                                                    </td>
                                                     <td>
                                                    <a href="{{ route('path_edit_admin_storeintegration', $listeTotalAjoutIntegration->id )}}">
                                                  <button class="btn btn-block btn-outline-info btn-sm"><i class="fa fa-edit"></i></button>
                                                  </a><br />
                                                  <form method="post" action="{{ route('path_delete_admin_store_integration', $listeTotalAjoutIntegration->id) }}" onsubmit="return confirm('Etes-vous sûre!');">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE')}}
                                                  <button class="btn btn-block btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
                                                </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table><br />
                                        {{ $listeTotalAjoutIntegrations->links() }}
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