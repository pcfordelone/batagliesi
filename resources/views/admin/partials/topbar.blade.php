<!-- BEGIN TOPBAR -->
<div class="topbar">
    <div class="header-left">
        <div class="topnav">
            <a class="menutoggle" href="#" data-toggle="sidebar-collapsed"><span class="menu__handle"><span>Menu</span></span></a>
            <ul class="nav nav-horizontal">
                <li><a href="#"><i class="icon-settings"></i><span>Configurações</span></a></li>
            </ul>
        </div>
    </div>

    <div class="header-right">
        <ul class="header-menu nav navbar-nav">

            <!-- BEGIN USER DROPDOWN -->
            <li class="dropdown" id="user-header">
                <a href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    @if (!is_null(Auth::user()->user_profile) and Auth::user()->user_profile->u_default_img != "")
                        <img src="/uploads/users/{{ Auth::user()->user_profile->u_default_img }}" class="img-responsive img-circle" style="height: 40px; width: 40px">
                    @else
                        <img src="/assets/images/default_profile_img.png" class="img-responsive img-circle">
                    @endif
                    <span class="username">Olá, {{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('admin.users.profiles.create') }}"><i class="icon-user"></i><span>Meu Perfil</span></a>
                    </li>
                    <li>
                        <a href="{{ route('admin.users.change_password') }}"><i class="icon-key"></i><span>Alterar Senha</span></a>
                    </li>
                    <li>
                        <a href="{{ route('auth.logout') }}"><i class="icon-logout"></i><span>Sair</span></a>
                    </li>
                </ul>
            </li>
            <!-- END USER DROPDOWN -->
        </ul>
    </div>
    <!-- header-right -->
</div>
<!-- END TOPBAR -->