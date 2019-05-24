<!-- BEGIN SIDEBAR -->
<div class="sidebar">
    <div class="logopanel">
        <h1><a href="{{ route('admin.index') }}">&nbsp;</a></h1>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-top big-img">
            <div class="user-image">
                @if (!is_null(Auth::user()->user_profile) and Auth::user()->user_profile->u_default_img != "")
                    <img src="/uploads/users/{{ Auth::user()->user_profile->u_default_img }}" class="img-responsive img-circle" style="height: 130px; width: 150px">
                @else
                    <img src="/assets/images/default_profile_img.png" class="img-responsive img-circle">
                @endif
            </div>
            <h4>{{ Auth::user()->name }}</h4>
        </div>

        <hr class="dark"/>

        <ul class="nav nav-sidebar">
            <li class="tm nav-active active"><a href="{{ route('admin.index') }}"><i class="icon-home"></i><span>Home</span></a></li>

            <li class="tm nav-parent">
                <a href="#"><i class="fa fa-user"></i><span>Usuários</span> <span class="fa arrow"></span></a>
                <ul class="children collapse">
                    <li><a href="{{ route('admin.users.index') }}">Usuários Cadastrados</a></li>
                    <li><a href="{{ route('admin.users.create') }}">Cadastrar Novo Usuário</a></li>
                </ul>
            </li>
            <li class="tm nav-parent">
                <a href="#"><i class="fa fa-file-image-o"></i><span>Banner Principal</span> <span class="fa arrow"></span></a>
                <ul class="children collapse">
                    <li><a href="{{ route('admin.home_banners.index') }}">Banners Cadastrados</a></li>
                    <li><a href="{{ route('admin.home_banners.create') }}">Novo Banner</a></li>
                </ul>
            </li>
            <li class="tm nav-parent">
                <a href="#"><i class="fa fa-newspaper-o"></i><span>Blog</span> <span class="fa arrow"></span></a>
                <ul class="children collapse">
                    <li><a href="{{ route('admin.blog.categories.index') }}">Categorias Cadastradas</a></li>
                    <li><a href="{{ route('admin.blog.categories.create') }}">Nova Categoria</a></li>
                    <li><a href="{{ route('admin.blog.posts.index') }}">Posts Cadastrados</a></li>
                    <li><a href="{{ route('admin.blog.posts.create') }}">Novo Post</a></li>
                </ul>
            </li>
            <li class="tm nav-parent">
                <a href="#"><i class="fa fa-gift"></i><span>Premiações</span> <span class="fa arrow"></span></a>
                <ul class="children collapse">
                    <li><a href="{{ route('admin.awards.index') }}">Premiações Cadastradas</a></li>
                    <li><a href="{{ route('admin.awards.create') }}">Nova Premiação</a></li>
                </ul>
            </li>
            <li class="tm nav-parent">
                <a href="#"><i class="fa fa-folder-open-o"></i><span>Projetos</span> <span class="fa arrow"></span></a>
                <ul class="children collapse">
                    <li><a href="{{ route('admin.projects.categories.index') }}">Categorias Cadastradas</a></li>
                    <li><a href="{{ route('admin.projects.categories.create') }}">Nova Categoria</a></li>
                    <li><a href="{{ route('admin.projects.tags.index') }}">Sub-categorias Cadastradas</a></li>
                    <li><a href="{{ route('admin.projects.tags.create') }}">Nova Sub-categoria</a></li>
                    <li><a href="{{ route('admin.projects.index') }}">Projetos Cadastrados</a></li>
                    <li><a href="{{ route('admin.projects.create') }}">Novo Projeto</a></li>
                </ul>
            </li>
        </ul>
        <div class="sidebar-widgets"></div>
        <div class="sidebar-footer clearfix" style="left: 0px;">
            <a class="pull-left footer-settings" href="#" data-rel="tooltip" data-placement="top" data-original-title="Settings">
                <i class="icon-settings"></i></a>
            <a class="pull-left toggle_fullscreen" href="#" data-rel="tooltip" data-placement="top" data-original-title="Fullscreen">
                <i class="icon-size-fullscreen"></i></a>
            <a class="pull-left" href="#" data-rel="tooltip" data-placement="top" data-original-title="Lockscreen">
                <i class="icon-lock"></i></a>
            <a class="pull-left btn-effect" href="#" data-modal="modal-1" data-rel="tooltip" data-placement="top" data-original-title="Logout">
                <i class="icon-power"></i></a>
        </div>
    </div>
</div>
<!-- END SIDEBAR -->