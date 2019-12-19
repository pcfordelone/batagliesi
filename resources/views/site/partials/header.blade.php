<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': false}" style="margin: 20px 100px 0 0">
    <div class="header-body border-top-0">
        <div class="header-container container-fluid px-lg-4">
            <div class="header-row" style="padding-right: 40px">
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-logo" style="margin-bottom: 0 !important; padding-bottom: 0 !important;">
                            <a href="{{ route('site.index') }}">
                                <img alt="Batagliesi" width="250" data-sticky-width="82" data-sticky-height="40" src="/images/logotipo.png">
                            </a>
                        </div>
                    </div>
                    <div class="header-row">
                        <div class="header-nav" style="margin-top: 0 !important; padding-top: 0 !important;">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1" style="margin-top: 0 !important; padding-top: 0 !important;">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li><a class="dropdown-item btn-custom btn-custom-green perfil" href="{{ route('site.about') }}">Perfil</a></li>
                                        <li><a class="dropdown-item btn-custom btn-custom-yellow arquitetura" href="{{ route('site.projects.category', ['slug' => 'arquitetura']) }}">Arquitetura</a></li>
                                        <li><a class="dropdown-item btn-custom btn-custom-blue sistemas-ambientais" href="{{ route('site.projects.category', ['slug' => 'sistemas-ambientais']) }}">Sistemas Ambientais</a></li>
                                        <li><a class="dropdown-item btn-custom btn-custom-red design" href="{{ route('site.projects.category', ['slug' => 'design']) }}">Design</a></li>
                                        <li><a class="dropdown-item btn-custom publicacoes" href="{{ route('site.blog.index') }}">Publicações</a></li>
                                        <li><a class="dropdown-item btn-custom premiacoes" href="{{ route('site.awards') }}">Premiações</a></li>
                                        <li><a class="dropdown-item btn-custom" href="#">Operacional</a></li>
                                        <li><a class="dropdown-item btn-custom contato" href="{{ route('site.contact') }}">Contato</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{--
<header id="header" data-plugin-options="{'stickyEnabled': false}" style="border: 1px solid blue;">
    <div class="header-body border-top-0">
        <div class="header-container container" style="border: 1px solid red;">
            <div class="header-row">
                <div class="header-column justify-content-right">
                    <div class="header-logo">
                        <a href="{{ route('site.index') }}">
                            <img alt="Batagliesi" width="250" data-sticky-width="82" data-sticky-height="40" src="/images/logotipo.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="header-row">
                <div class="header-column justify-content-right">

                        <div class="header-nav">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li><a class="dropdown-item btn-custom btn-custom-green" href="{{ route('site.about') }}">Perfil</a></li>
                                        <li><a class="dropdown-item btn-custom btn-custom-yellow" href="{{ route('site.projects.category', ['slug' => 'arquitetura']) }}">Arquitetura</a></li>
                                        <li><a class="dropdown-item btn-custom btn-custom-blue" href="{{ route('site.projects.category', ['slug' => 'sistemas-ambientais']) }}">Sistemas Ambientais</a></li>
                                        <li><a class="dropdown-item btn-custom btn-custom-red" href="{{ route('site.projects.category', ['slug' => 'design']) }}">Design</a></li>
                                        <li><a class="dropdown-item btn-custom" href="{{ route('site.blog.index') }}">Publicações</a></li>
                                        <li><a class="dropdown-item btn-custom" href="#">Premiações</a></li>
                                        <li><a class="dropdown-item btn-custom" href="#">Clientes</a></li>
                                        <li><a class="dropdown-item btn-custom" href="{{ route('site.contact') }}">Contato</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</header>--}}
