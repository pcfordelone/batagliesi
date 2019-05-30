@extends('admin.layout')

@section('page-content')
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="header">
            <h2>
                Blog - <small>Editar Postagem</small>
            </h2>

            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('admin.index') }}"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="{{ route('admin.blog.posts.index') }}"><i class="fa fa-journal"></i> Blog</a></li>
                        <li class="active"><i class="fa fa-edit"></i> Editar Postagem</li>
                    </ol>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 portlets">
                <div class="panel">
                    <div class="panel-content">
                        {!! Form::open(['enctype' => 'multipart/form-data', 'method' => 'put', 'role' => 'form']) !!}

                        <a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-default" >VOLTAR</a>
                        {!! Form::submit('SALVAR', ['class'=>'btn btn-success']) !!}
                        <hr/>

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
                                    <label for="status">Ativo:</label>
                                    {!! Form::select('status', [0 => 'Não', 1 => 'Sim'], $data->status, [
                                            'class'=>'form-control',
                                            'style' => "width:100%;",
                                            'data-search' => 'true',
                                            'required'
                                        ])
                                    !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="featured">Destaque:</label>
                                    {!! Form::select('featured', [0 => 'Não', 1 => 'Sim'], $data->featured, [
                                            'class'=>'form-control',
                                            'style' => "width:100%;",
                                            'data-search' => 'true',
                                            'required'
                                        ])
                                    !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="featured">Categoria:</label>
                                    {!! Form::select('project_category_id', $categories, $data->project_category_id, [
                                            'class'=>'form-control',
                                            'style' => "width:100%;",
                                            'data-search' => 'true',
                                            'required'
                                        ])
                                    !!}
                                </div>
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <p><strong>Sub-categorias</strong></p>
                                    <div class="input-group">
                                        <div class="icheck-inline">
                                            @foreach($tags as $tag)
                                                <label><input name="tags[]" type="checkbox" data-checkbox="icheckbox_flat-blue" value="{{ $tag->id }}"> {{ $tag->name }}</label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('name', 'Nome:') !!}
                                    {!! Form::text('name', $data->name, [
                                        'class'=>'form-control',
                                        'placeholder'=>'Insira o nome do projeto',
                                        'required'
                                        ])
                                    !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('client', 'Cliente:') !!}
                                    {!! Form::text('client', $data->name, [
                                        'class'=>'form-control',
                                        'placeholder'=>'Insira o nome do cliente',
                                        'required'
                                        ])
                                    !!}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('project_date', 'Data do Projeto:') !!}
                                    {!! Form::text('project_date', $data->name, [
                                        'class'=>'form-control',
                                        'placeholder'=>'Insira a data do projeto',
                                        'required'
                                        ])
                                    !!}
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::label('keywords', 'Palavras-chave: (SEO)') !!}
                                    {!! Form::text('keywords', $data->keywords, [
                                        'class'=>'form-control',
                                        'placeholder'=>'Insira as palavras-chave (SEO)',
                                        ])
                                    !!}
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    {!! Form::label('description', 'Descrição:') !!}
                                    {!! Form::text('description', $data->description, [
                                        'class' => 'form-control',
                                        'placeholder' => 'Insira a descrição da postagem (SEO)'
                                        ])
                                    !!}
                                </div>
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-md-12">
                                <h2>Imagem Principal Cadastrada</h2>
                                <div class="row">
                                    <div class="col-md-12" style="margin: 20px 0 20px 0">
                                        @if (isset($data->default_img) and $data->default_img != "")
                                            <img src="/uploads/projects/{{ $data->default_img }}" style="max-height: 100px; border: 1px solid darkgrey;" />
                                        @else
                                            <p>Nenhuma imagem foi cadastrada.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('default_img', 'Cadastrar nova Imagem Principal:') !!}
                                    {!! Form::file('default_img', [
                                        'class'=>'form-control',
                                        ])
                                    !!}
                                </div>
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-md-12">
                                <h2>Imagem de Capa Cadastrada</h2>
                                <div class="row">
                                    <div class="col-md-12" style="margin: 20px 0 20px 0">
                                        @if (isset($data->cover_img) and $data->cover_img != "")
                                            <img src="/uploads/projects/{{ $data->cover_img }}" style="max-height: 100px; border: 1px solid darkgrey;" />
                                        @else
                                            <p>Nenhuma imagem foi cadastrada.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('cover_img', 'Nova Imagem de Capa:') !!}
                                    {!! Form::file('cover_img', [
                                        'class'=>'form-control',
                                        ])
                                    !!}
                                </div>
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-md-12">
                                <h2>Imagens Secundárias Cadastradas</h2>
                                @if (count($data->project_images) > 0 and $data->project_images[0]->url != "")
                                    <div class="row">
                                        @foreach($data->project_images as $photo)
                                            <div class="col-md-2" style="margin: 20px 0 20px 0; text-align: center;">
                                                <img src="/uploads/projects/{{ $photo->url }}" style="max-height: 100px; max-width: 95%; border: 1px solid darkgrey; margin-bottom: 5px" /><br/>
                                                <a href="{{ route('admin.projects.rm_photo', ['post_id' => $data->id, 'photo_id' => $photo->id]) }}" class="btn btn-sm btn-danger">Apagar</a>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <p>Nenhuma imagem foi cadastrada.</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('images', 'Imagens Secundárias:') !!}
                                    {!! Form::file('images[]', ['class'=>'form-control', 'multiple' => 'multiple']) !!}
                                </div>
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-md-10">
                                {!! Form::label('content', 'Conteúdo:') !!}
                                {!! Form::textarea('content', $data->content, [
                                    'class'=>'form-control',
                                    'placeholder' => 'Conteúdo do projeto.',
                                    'rows' => 10,
                                    'id' => 'cke-editor'
                                    ])
                                !!}
                            </div>
                        </div>

                        <hr/>

                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ redirect()->back()->getTargetUrl() }}" class="btn btn-default" >VOLTAR</a>
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
    <script src="/assets/plugins/cke-editor/ckeditor.js"></script> <!-- Advanced HTML Editor -->
    <script src="/assets/js/builder.js"></script> <!-- Theme Builder -->
    <script src="/assets/js/sidebar_hover.js"></script> <!-- Sidebar on Hover -->
    <script src="/assets/js/application.js"></script> <!-- Main Application Script -->
    <script src="/assets/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
    <script src="/assets/js/widgets/notes.js"></script> <!-- Notes Widget -->
    <script src="/assets/js/quickview.js"></script> <!-- Chat Script -->
    <script src="/assets/js/pages/search.js"></script> <!-- Search Script -->
    <!-- END PAGE SCRIPTS -->
@stop