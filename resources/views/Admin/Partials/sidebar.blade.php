<div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label alert alert-warning"><strong>Bienvenue
                            {{ Auth::user()->name }}
                            <i class="fa fa-arrow-left"></i>
                        </strong>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Menu</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('path_admin_home') }}" class="nav-link {{ (request()->is('admin/adminhome')) ? 'active' : '' }}">Accueil</a></li>
                        </ul>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('path_admin_rdv') }}" class="{{ (request()->is('Admin/formsrdv')) ? 'active' : '' }}">Les Rendez vous</a></li>
                            <li><a href="{{ route('path_admin_formation') }}" class="{{ (request()->is('Admin/formsformation')) ? 'active' : '' }}">Formation</a></li>
                            <li><a href="{{ route('path_admin_contact') }}" class="{{ (request()->is('Admin/formscontact')) ? 'active' : '' }}">Les Contacts</a></li>
                            <li><a href="{{ route('path_admin_etudeconseil')}}" class="{{ (request()->is('Admin/formsetudeconseil')) ? 'active' : '' }}">Etude & Conseils</a></li>
                            <li><a href="{{ route('path_admin_integration')}}" class="{{ (request()->is('Admin/formsintegration')) ? 'active' : '' }}">Intégration web</a></li>
                            <li><a href="{{ route('path_admin_utilisateur')}}" class="{{ (request()->is('Admin/formsutilisateur')) ? 'active' : '' }}">Utilisateurs Ids</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Formation</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Ajout de Formation</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('path_admin_storeformation') }}" class="{{ (request()->is('Admin/storeformformation')) ? 'active' : '' }}">Ajouter des formations recentes</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Projets</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Ajout de Projets</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('path_admin_storeprojet') }}" class="{{ (request()->is('Admin/storeformprojet')) ? 'active' : '' }}">Ajouter des projets</a></li>
                            <li><a href="{{ route('path_admin_storetemoignage') }}" class="{{ (request()->is('Admin/storeformtemoignage')) ? 'active' : '' }}">Ajouter des Témoignages</a></li>
                            <li class="{{ (request()->is('Admin/storeformintegration')) ? 'active' : '' }}">
                                <a href="{{ route('path_admin_storeintegration')}}">
                                    Ajouter Service Intégration web
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-label">Utilisateurs / Ids</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Validation demandes</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('path_admin_storecertificat') }}" class="{{ (request()->is('Admin/storeformcertificat')) ? 'active' : '' }}">Valider Certificat</a></li>
                            <li><a href="{{ route('path_admin_storebourse') }}" class="{{ (request()->is('Admin/storeformbourse')) ? 'active' : '' }}">Valider Bourse</a></li>
                            <li class="{{ (request()->is('Admin/storeformdiplome')) ? 'active' : '' }}">
                                <a href="{{ route('path_admin_storediplome')}}">
                                    Valider Diplome
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>