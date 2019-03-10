@extends('admin.layout')

@section('page-content')
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="header">
            <h2>
                Blog - <small>Categorias Cadastradas</small>
            </h2>

            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="{{ route('admin.projects.index') }}"><i class="fa fa-folder-open-o"></i> Projetos</a></li>
                        <li class="active"><i class="fa fa-tag"></i> Categorias Cadastradas</li>
                    </ol>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 portlets">
                <div class="panel">
                    <div class="panel-content">
                        <a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-default" >VOLTAR</a>
                        <a href="{{ route('admin.projects.categories.create') }}">
                            <button class="btn btn-blue">NOVA CATEGORIA</button>
                        </a>

                        <hr/>

                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {!! \Illuminate\Support\Facades\Session::get('success')  !!}
                            </div>
                        @elseif(\Illuminate\Support\Facades\Session::has('warning'))
                            <div class="alert alert-danger">
                                {!! \Illuminate\Support\Facades\Session::get('warning')  !!}
                            </div>
                        @endif

                        <div class="pagination2 table-responsive">
                            <table id="example" class="table table-hover table-dynamic">
                                <thead>
                                <tr>
                                    <th>ID #</th>
                                    <th width="30%">Nome</th>
                                    <th>Status</th>
                                    <th>Data de Criação</th>
                                    <th>Última Alteração</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($data as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <label class="switch m-r-20">
                                                <input type="checkbox" name="status" id="status" value="{{ $item->id }}" class="switch-input" @if ($item->status == 1) checked @endif>
                                                <span class="switch-label" data-on="Sim" data-off="Não"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </td>
                                        <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
                                        <td>{{ date('d/m/Y', strtotime($item->updated_at)) }}</td>
                                        <td>
                                            <a href="{{ route('admin.projects.categories.edit', ['id' => $item->id]) }}" class="btn btn-sm btn-warning" title="Editar Categoria">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>
                                            <a href="{{ route('admin.projects.categories.delete', ['id' => $item->id]) }}" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <hr/>

                        <a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-default" >VOLTAR</a>
                        <a href="{{ route('admin.projects.categories.create') }}">
                            <button class="btn btn-blue">NOVA CATEGORIA</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('extra_body')
    <!-- END PRELOADER -->
    <script src="/assets/plugins/jquery/jquery-3.1.0.min.js"></script>
    <script src="/assets/plugins/jquery/jquery-migrate-3.0.0.min.js"></script>
    <script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/plugins/gsap/main-gsap.min.js"></script>
    <script src="/assets/plugins/tether/js/tether.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/appear/jquery.appear.js"></script>
    <script src="/assets/plugins/jquery-cookies/jquery.cookies.min.js"></script> <!-- Jquery Cookies, for theme -->
    <script src="/assets/plugins/jquery-block-ui/jquery.blockUI.min.js"></script> <!-- simulate synchronous behavior when using AJAX -->
    <script src="/assets/plugins/bootbox/bootbox.min.js"></script> <!-- Modal with Validation -->
    <script src="/assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbar sidebar -->
    <script src="/assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script> <!-- Show Dropdown on Mouseover -->
    <script src="/assets/plugins/charts-sparkline/sparkline.min.js"></script> <!-- Charts Sparkline -->
    <script src="/assets/plugins/retina/retina.min.js"></script> <!-- Retina Display -->
    <script src="/assets/plugins/select2/dist/js/select2.full.min.js"></script> <!-- Select Inputs -->
    <script src="/assets/plugins/icheck/icheck.min.js"></script> <!-- Checkbox & Radio Inputs -->
    <script src="/assets/plugins/backstretch/backstretch.min.js"></script> <!-- Background Image -->
    <script src="/assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> <!-- Animated Progress Bar -->
    <script src="/assets/plugins/charts-chartjs/Chart.min.js"></script>
    <script src="/assets/js/builder.js"></script> <!-- Theme Builder -->
    <script src="/assets/js/sidebar_hover.js"></script> <!-- Sidebar on Hover -->
    <script src="/assets/js/application.js"></script> <!-- Main Application Script -->
    <script src="/assets/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
    <script src="/assets/js/widgets/notes.js"></script> <!-- Notes Widget -->
    <script src="/assets/js/quickview.js"></script> <!-- Chat Script -->
    <script src="/assets/js/pages/search.js"></script> <!-- Search Script -->
    <!-- BEGIN PAGE SCRIPTS -->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script> <!-- Tables Filtering, Sorting & Editing -->
    <script src="/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="/assets/js/pages/table_dynamic.js"></script>
    <!-- END PAGE SCRIPTS -->

    <script>
        $(document).on("click", "#status", function(event) {
            window.location = '/admin/blog/categorias/change_status/?item=' + $(this).val() + '&element=status';
        });
    </script>
@stop