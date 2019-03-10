@extends('admin.layout')

@section('page-content')
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="header">
            <h2>Usuários - <small>Alterar Senha</small></h2>

            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="{{ route('admin.users.index') }}"><i class="fa fa-car"></i> Usuários</a></li>
                    <li class="active"><i class="fa fa-folder-open-o"></i> Alterar Senha</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 portlets">
                <div class="panel">
                    <div class="panel-content">
                        {!! Form::open(['method' => 'PUT']) !!}

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


                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert alert-success alert-dismissible" data-dismiss="alert">
                                {!! \Illuminate\Support\Facades\Session::get('success')  !!}
                            </div>
                        @elseif(\Illuminate\Support\Facades\Session::has('danger'))
                            <div class="alert alert-danger alert-dismissible" data-dismiss="alert">
                                {!! \Illuminate\Support\Facades\Session::get('danger')  !!}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('old_password', 'Senha Atual:') !!}
                                    {!! Form::password('old_password', ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('password', 'Nova Senha:') !!}
                                    {!! Form::password('password', ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('password_confirmation', 'Confirme a Nova Senha:') !!}
                                    {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <hr/>

                        {!! Form::submit('SALVAR', ['class'=>'btn btn-success']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('extra_body')
    <script src="/assets/plugins/jquery/jquery-3.1.0.min.js"></script>
    <script src="/assets/plugins/jquery/jquery-migrate-3.0.0.min.js"></script>
    <script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/plugins/gsap/main-gsap.min.js"></script> <!-- HTML Animations -->
    <script src="/assets/plugins/jquery-block-ui/jquery.blockUI.min.js"></script> <!-- simulate synchronous behavior when using AJAX -->
    <script src="/assets/plugins/bootbox/bootbox.min.js"></script>
    <script src="/assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbar sidebar -->
    <script src="/assets/plugins/tether/js/tether.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script> <!-- Show Dropdown on Mouseover -->
    <script src="/assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> <!-- Animated Progress Bar -->
    <script src="/assets/plugins/switchery/switchery.min.js"></script> <!-- IOS Switch -->
    <script src="/assets/plugins/retina/retina.min.js"></script>  <!-- Retina Display -->
    <script src="/assets/plugins/jquery-cookies/jquery.cookies.js"></script> <!-- Jquery Cookies, for theme -->
    <script src="/assets/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script> <!-- A mobile and touch friendly input spinner component for Bootstrap -->
    <script src="/assets/plugins/icheck/icheck.min.js"></script> <!-- Icheck -->
    <script src="/assets/plugins/slick/slick.min.js"></script> <!-- Slider -->
    <script src="/assets/plugins/backstretch/backstretch.min.js"></script> <!-- Background Image -->
    <script src="/assets/plugins/charts-chartjs/Chart.min.js"></script>  <!-- ChartJS Chart -->
    <script src="/assets/plugins/bootstrap-slider/bootstrap-slider.js"></script> <!-- Bootstrap Input Slider -->
    <script src="/assets/plugins/visible/jquery.visible.min.js"></script> <!-- Visible in Viewport -->
    <script src="/assets/js/builder.js"></script>
    <script src="/assets/js/sidebar_hover.js"></script>
    <script src="/assets/js/application.js"></script> <!-- Main Application Script -->
    <script src="/assets/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
    <script src="/assets/js/quickview.js"></script> <!-- Quickview Script -->
    <script src="/assets/js/pages/search.js"></script> <!-- Search Script -->

    <!-- BEGIN PAGE SCRIPTS -->
    <script src="/assets/plugins/metrojs/metrojs.min.js"></script> <!-- Flipping Panel -->
    <script src="/assets/plugins/bootstrap-context-menu/bootstrap-contextmenu.min.js"></script> <!-- Context Menu -->
    <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script> <!-- Tables Filtering, Sorting & Editing -->
    <script src="/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="/assets/plugins/skycons/skycons.js"></script>

    <script>
        $(document).on("click", "#status", function(event) {
            window.location = '/admin/modelos/change_status/?fmodel=' + $(this).val() + '&element=status&page=home';
        });
        $(document).on("click", "#featured", function(event) {
            window.location = '/admin/modelos/change_status/?fmodel=' + $(this).val() + '&element=featured&page=home';
        });
    </script>
    <!-- END PAGE SCRIPTS -->
@stop