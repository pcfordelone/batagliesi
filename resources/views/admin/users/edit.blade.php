@extends('admin.layout')

@section('page-content')
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="header">
            <h2>
                Usuários - <small>Editar Usuário</small>
            </h2>

            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="{{ route('admin.users.index') }}"><i class="fa fa-user"></i> Usuários</a></li>
                    <li class="active"><i class="fa fa-user-plus"></i> Editar {{ $data->name }}</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 portlets">
                <div class="panel">
                    <div class="panel-content">
                        {!! Form::open(['method' => 'put']) !!}

                        {!! Form::submit('SALVAR', ['class'=>'btn btn-success']) !!}

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('name', 'Nome:') !!}
                                    {!! Form::text('name', $data->name, [
                                        'class'=>'form-control',
                                        'placeholder'=>'Insira o nome do usuário',
                                        'required'
                                        ])
                                    !!}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('email', 'E-mail:') !!}
                                    {!! Form::text('email', $data->email, [
                                        'class'=>'form-control',
                                        'placeholder'=>'Insira o e-mail que servirá de login',
                                        'required'
                                        ])
                                    !!}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('role', 'Tipo de Usuário:') !!}
                                    {!! Form::select('role', $role, $data->role, ['class'=>'form-control', 'required']) !!}
                                </div>
                            </div>

                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-md-12">
                                {!! Form::submit('SALVAR', ['class'=>'btn btn-success']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT -->
@stop

@section('extra_body')
    <script src="/assets/plugins/jquery/jquery-3.1.0.min.js"></script>
    <script src="/assets/plugins/jquery/jquery-migrate-3.0.0.min.js"></script>
    <script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/plugins/gsap/main-gsap.min.js"></script>
    <script src="/assets/plugins/tether/js/tether.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/jasny-bootstrap.min.js"></script>
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
    <!-- BEGIN PAGE SCRIPT -->
    <script src="/assets/plugins/switchery/switchery.min.js"></script> <!-- IOS Switch -->
    <script src="/assets/plugins/bootstrap-tags-input/bootstrap-tagsinput.min.js"></script> <!-- Select Inputs -->
    <script src="/assets/plugins/dropzone/dropzone.min.js"></script>  <!-- Upload Image & File in dropzone -->
    <script src="/assets/js/pages/form_icheck.js"></script>  <!-- Change Icheck Color - DEMO PURPOSE - OPTIONAL -->
    <script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script> <!-- >Bootstrap Date Picker -->
    <script src="/assets/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js"></script> <!-- >Bootstrap Date Picker in Spanish (can be removed if not use) -->
    <script src="/assets/js/builder.js"></script> <!-- Theme Builder -->
    <script src="/assets/js/sidebar_hover.js"></script> <!-- Sidebar on Hover -->
    <script src="/assets/js/application.js"></script> <!-- Main Application Script -->
    <script src="/assets/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
    <script src="/assets/js/widgets/notes.js"></script> <!-- Notes Widget -->
    <script src="/assets/js/quickview.js"></script> <!-- Chat Script -->
    <script src="/assets/js/pages/search.js"></script> <!-- Search Script -->
    <!-- END PAGE SCRIPTS -->
@stop