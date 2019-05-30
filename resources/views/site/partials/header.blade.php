<header id="header" data-plugin-options="{'stickyEnabled': false}">
    <div class="header-body border-top-0">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column justify-content-left">
                    <div class="header-row">
                        <div class="header-nav">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li><a class="dropdown-item btn-custom btn-custom-green" href="{{ route('site.about') }}">Perfil</a></li>
                                        <li><a class="dropdown-item btn-custom btn-custom-yellow" href="{{ route('site.projects.category', ['slug' => 'arquitetura']) }}">Arquitetura</a></li>
                                        <li><a class="dropdown-item btn-custom btn-custom-blue" href="{{ route('site.projects.category', ['slug' => 'sistemas-ambientais']) }}">Sistemas Ambientais</a></li>
                                        <li><a class="dropdown-item btn-custom btn-custom-red" href="{{ route('site.projects.category', ['slug' => 'design']) }}">Design</a></li>
                                        <li><a class="dropdown-item btn-custom" href="{{ route('site.blog.index') }}">Publicações</a></li>
                                        <li><a class="dropdown-item btn-custom" href="{{ route('site.contact') }}">Contato</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-column">
                <div class="header-row">
                    <div class="header-logo ml-5">
                        <a href="{{ route('site.index') }}">
                            <img alt="Batagliesi" width="250" data-sticky-width="82" data-sticky-height="40" src="/images/logotipo.png">
                        </a>
                        <p class="mt-2 mb-0 pb-0" style="line-height: 15px">
                            + 55 11 3813 1999<br/>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>