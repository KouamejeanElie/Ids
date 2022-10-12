<div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label alert alert-success"><strong>Bienvenue
                            {{ Auth::user()->name }}
                            <i class="fa fa-arrow-left"></i>
                        </strong>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Menu</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('home') }}" class="nav-link {{ (request()->is('home')) ? 'active' : '' }}">Accueil</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Infos</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('path_utilisateur_certificat') }}" class="{{ (request()->is('Utilisateurs/certificat')) ? 'active' : '' }}">Certificat Ids <span class="badge bg-success">{{ $totalCertificat }}</span></a></li>
                            <li><a href="{{ route('path_utilisateur_bourse') }}" class="{{ (request()->is('Utilisateurs/bourse')) ? 'active' : '' }}">Bourses Ids <span class="badge bg-primary">{{ $totalBourse }}</span></a></li>
                            <li><a href="{{ route('path_utilisateur_diplome') }}" class="{{ (request()->is('Utilisateurs/diplome')) ? 'active' : '' }}">Diplomes Ids <span class="badge bg-warning">{{ $totalDiplome }}</span></a></li>
                        </ul>
                    </li>
                 {{--    <li class="nav-label">Formations IDS</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Vos Formations Ids</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="" class="">Mes Formations Ids</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-label">Profil</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Mon Profil</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('path_utilisateur_profil') }}" class="">Voir profil</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>