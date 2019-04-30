@extends('site.layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 m-0 p-0">
                <img src="/images/projects/project_detail01.png" class="m-0 p-0 img-fluid" width="100%" alt="" />
            </div>
            <div class="col-lg-4 m-0 p-5 bg-color-dark-scale-9">
                <h2 class="text-color-light">Citibank Barra</h2>
                <p class="text-light opacity-7 text-md-4">
                    <strong>Cliente: </strong> Citibank<br/>
                    <strong>Data: </strong> 2015<br/>
                </p>
            </div>
        </div>
    </div>


    <div class="lightbox mb-0 pb-0" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
        <div class="owl-carousel owl-theme full-width" data-plugin-options="{'items': 5, 'loop': false, 'nav': true, 'dots': false}">
            @for($i = 0; $i < 8; $i++)
                <div>
                    <a href="/img/projects/project.jpg">
                        <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                            <span class="thumb-info-wrapper">
                                <img src="/img/projects/project.jpg" class="img-fluid" alt="">
                                <span class="thumb-info-action">
                                    <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            @endfor
        </div>
    </div>
@stop