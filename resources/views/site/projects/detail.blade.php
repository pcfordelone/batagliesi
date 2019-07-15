@extends('site.layout')

@section('content')
    @if ($data->project_category->slug != 'design')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 m-0 p-0">
                    @if ($data->cover_img != '')
                        <img src="/uploads/projects/{{ $data->cover_img }}" class="m-0 p-0 img-fluid" width="100%" alt="" />
                    @else
                        <img src="/images/projects/no-image.png" class="m-0 p-0 img-fluid" width="100%" alt="" />
                    @endif
                </div>
                <div class="col-lg-4 m-0 p-5 bg-color-dark-scale-9">
                    <h2 class="text-color-light">{{ $data->name }}</h2>
                    <p class="text-light opacity-7 text-md-4">
                        <strong>Cliente: </strong> {{ $data->name }}<br/>
                        <strong>Data: </strong> 2015<br/>
                    </p>
                </div>
            </div>
        </div>


        <div class="lightbox mb-0 pb-0 pt-1" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
            <div class="owl-carousel owl-theme full-width" data-plugin-options="{'items': 5, 'loop': false, 'nav': true, 'dots': false}">
                @foreach($data->project_images as $image)
                    <div class="pr-1">
                        <a href="/uploads/projects/{{ $image->url }}">
                            <span class="thumb-info thumb-info-centered-info thumb-info-no-borders">
                                <span class="thumb-info-wrapper">
                                    <img src="/uploads/projects/{{ $image->url }}" class="img-fluid" alt="">
                                    <span class="thumb-info-action">
                                        <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <h2 class="text-center text-color-dark mt-2">{{ $data->name }}</h2>
                    <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                        <div class="row">
                            @foreach($data->project_images as $image)
                                <div class="col-md-4 mb-3">
                                    <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon" href="/uploads/projects/{{ $image->url }}">
                                        <img class="img-fluid" src="/uploads/projects/{{ $image->url }}" alt="{{ $data->name }}">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@stop