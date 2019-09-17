<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="pull-left">
                <img src="{{ asset('img/mouhamed.jpg') }}" width="90" height="50" class="thumb-md img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->responsable }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('index.edit',Auth::user()->id)}}" class="waves-effect"><span> Modifier_Compte </span></a>
                        </li>
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
                    <a href="{{route('adhesion.index')}}" class="waves-effect"><i class="md md-home"></i><span> Acceuil </span></a>
                </li>

                <li>
                    <a href="#" class="waves-effect"><i class="md md-event"></i><span> Adhesion </span><span class="pull-right"><i class="md md-add"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('adhesion.create')}}">Nouvelle Adhesion</a></li>
                    </ul>
                </li>

                <li >
                    <a href="{{route('AccepterEntreprise.create')}}" class="waves-effect"><i class="md md-palette"></i> <span> Mes Demandes </span> </a>
                </li>
            </ul>

        </div>

    </div>
</div>
<!-- Left Sidebar End -->