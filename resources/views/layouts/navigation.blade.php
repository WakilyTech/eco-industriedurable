<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="pull-left">
                <img src="{{ asset('img/LOGO.png') }}" width="90" height="50" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->responsable }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a  class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>

                <p class="text-muted m-0">{{ Auth::user()->profil }}</p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="{{route('index.index')}}" class="waves-effect"><i class="md md-home"></i><span> Acceuil </span></a>
                </li>


                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Demandes d'inscription </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="ui-typography.html">Liste des Demandes</a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Liste des Utilisateurs </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('utilisateur.index')}}">Ajouter un Utilisateurs</a></li>
                        <li><a href="{{route('utilisateur.create')}}">Liste Utilisateurs</a></li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->