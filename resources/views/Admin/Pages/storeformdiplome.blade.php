<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>IDS - Valider Diplome Utilisateur || Tableau de Bord</title>
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
    <script type="text/javascript">
        function GenerateId(){
         var rac = document.getElementById('rac').value;
         var mat = document.getElementById('mat').value;
         var ref = rac.toUpperCase() + mat.toUpperCase();

         if(mat == '')
         {
            document.getElementById('ref').value = 'Aucun code généré !';
         }
         else if (mat.length<4)
         {
         document.getElementById('ref').value = 'Code trop Court !';
         }

         else if(isNaN(mat))
         {
            document.getElementById('ref').value = 'Entrez des valeurs numériques !'
         }

         else{

            document.getElementById('ref').value = ref;
         }
    }

    </script>

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
                                <h4 class="card-title"><i class="fa fa-plus"></i>&nbsp;Valider un diplome utilisateur</h4>
                                <div class="basic-form">
                                    <form action="{{ route('path_admin_store_diplome') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Libéllé du diplome</label>
                                               <input type="text" name="libellediplome" class="form-control @error('libellediplome') is-invalid @enderror" placeholder="Titre du Diplome">
                                                @error('libellediplome')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Id/Nom utilisateur</label>
                                                <select class="form-control @error('id_user') is-invalid @enderror" name="id_user">
                                                  @foreach($listeAllusers as $listeAlluser)
                                                    <option value="{{ $listeAlluser->id }}">
                                                     [{{ $listeAlluser->id }}] {{ $listeAlluser->name }}
                                                    </option>
                                                  @endforeach
                                                </select>
                                                @error('id_user')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Statut</label>
                                                <select class="form-control" name="statut">
                                                    <option>Choisir...</option>
                                                    <option>Aucun diplome</option>
                                                    <option>Diplome Disponible</option>
                                                </select>
                                            </div>
                                           <div class="form-group col-md-6">
                                                <label>Fichier</label>
                                                <input type="file" name="files" class="form-control @error('files') is-invalid @enderror">
                                                @error('files')
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                @enderror
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Rac</label>
                                                <input type="text" value="idsdip" id="rac" class="form-control" onkeyup="GenerateId();" readonly>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Mat</label>
                                                <input type="text" id="mat" class="form-control" onkeyup="GenerateId();">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>#Id généré du Diplome</label>
                                                <input type="text" name="id_diplome" id="ref" class="form-control @error('id_diplome') is-invalid @enderror" style="font-weight: bold;color: red;" readonly>
                                                @error('id_diplome')
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
                                 <p class="alert alert-warning">Liste des diplomes/utilisateurs</p>
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Libéllé</th>
                                                    <th>Id Utilisateur</th>
                                                    <th>Statut</th>
                                                    <th>#Id Diplome</th>
                                                    <th>Fichier</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach( $listeAlldiplomes as  $listeAlldiplome)

                                           <tr>
                                               <td>{{ $listeAlldiplome->libellediplome }}</td>
                                               <td>{{ $listeAlldiplome->id_user }}</td>
                                               <td>{{ $listeAlldiplome->statut }}</td>
                                                <td>{{ $listeAlldiplome->id_diplome }}</td>
                                               <td>
                                                <a href="{{ asset('uploads/diplome/'. $listeAlldiplome->files) }}">Télécharger <i class="fa fa-hand-o-right"></i>&nbsp; 
                                                {{ $listeAlldiplome->files }}
                                                </a>
                                               </td>
                                                   <td>
                                                    <a href="{{ route('path_edit_admin_storeformdiplome', $listeAlldiplome->id) }}">
                                                  <button class="btn btn-block btn-outline-info btn-sm"><i class="fa fa-edit"></i></button>
                                                  </a><br />
                                                  <form method="post" action="{{ route('path_delete_admin_store_diplome', $listeAlldiplome->id) }}" onsubmit="return confirm('Etes-vous sûre!');">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE')}}
                                                  <button class="btn btn-block btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
                                                </td>
                                           </tr>

                                           @endforeach
                                            </tbody>
                                        </table><br />
                                      {{ $listeAlldiplomes->links() }}
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