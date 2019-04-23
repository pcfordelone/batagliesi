@extends('site.layout')

@section('content')
    {{-- Banner Principal --}}
    <div class="slider-container rev_slider_wrapper">
        <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 550, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
            <ul>
                <li data-transition="fade">
                    <img src="/images/banner01.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">
                </li>
                <li data-transition="fade">
                    <img src="/images/banner02.jpg"
                         alt=""
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">
                </li>
            </ul>
        </div>
    </div>

    {{-- Clientes --}}
    <div class="container-fluid mb-0 pb-0">
        <div class="row mb-0 pb-0">
            <div class="col pt-5 pb-3 home-clients">
                <div class="owl-carousel owl-theme full-width" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 6}, '1200': {'items': 6}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                    <div>
                        <p class="text-uppercase text-center mb-0 pb-0"><strong>Qualix</strong></p>
                    </div>
                    <div>
                        <p class="text-uppercase text-center mb-0 pb-0"><strong>Quinta Santa Maria</strong></p>
                    </div>
                    <div>
                        <p class="text-uppercase text-center mb-0 pb-0"><strong>Receita Federal</strong></p>
                    </div>
                    <div>
                        <p class="text-uppercase text-center mb-0 pb-0"><strong>Santander</strong></p>
                    </div>
                    <div>
                        <p class="text-uppercase text-center mb-0 pb-0"><strong>Abatex</strong></p>
                    </div>
                    <div>
                        <p class="text-uppercase text-center mb-0 pb-0"><strong>Arquitetura Brutalista</strong></p>
                    </div>
                    <div>
                        <p class="text-uppercase text-center mb-0 pb-0"><strong>Arquishow</strong></p>
                    </div>
                    <div>
                        <p class="text-uppercase text-center mb-0 pb-0"><strong>Banco 24 horas</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Blog --}}
    <section class="section section-default bg-color-dark-scale-3 mt-0">
        <div class="container-fluid">
            <div class="row mt-0">
                <div class="col">
                    <h2 class="text-uppercase font-weight-normal text-center text-light">Publicações</h2>
                </div>
            </div>
            <div class="row recent-posts pb-5 mb-4">
                @foreach($posts as $key => $post)
                    @if ($key < 4)
                        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                            <article>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        @if ($post->default_img == '')
                                            <img src="/images/blog-default_img.jpg" width="100%" alt="{{ $post->title }}" />
                                        @else
                                            <img src="/uploads/blog/{{ $post->default_img }}" width="100%" alt="{{ $post->title }}" />
                                        @endif
                                    </div>
                                    <div class="col-auto pr-0">
                                        <div class="date">
                                            <span class="day text-color-dark font-weight-extra-bold">{{ Date::parse($post->created_at)->format('d') }}</span>
                                            <span class="month text-1">{{ Date::parse($post->created_at)->format('M') }}</span>
                                        </div>
                                    </div>
                                    <div class="col pl-1">
                                        <h4 class="line-height-3 text-4">
                                            <a href="{{ route('site.blog.post', ['slug' => $post->slug]) }}" class="text-color-light">
                                                {{ $post->title }}
                                            </a>
                                        </h4>
                                        <p class="line-height-5 pr-4 mb-1">
                                            {!! str_limit(strip_tags($post->html_content), $limit = 100, $end = ' ...') !!}
                                        </p>
                                        <a href="{{ route('site.blog.post', ['slug' => $post->slug]) }}" class="read-more text-color-light font-weight-bold text-2">Leia Mais <i class="fas fa-chevron-right text-1 ml-1"></i></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- Premiações --}}
    <div class="container mb-0 pb-0">
        <div class="row">
            <div class="col">
                <h2 class="text-uppercase font-weight-normal text-center">Premiações</h2>
            </div>
        </div>
    </div>
    <div class="image-gallery sort-destination full-width">
        <div class="isotope-item">
            <div class="image-gallery-item">
                <a href="#">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <span class="thumb-info-wrapper">
                            <img src="/images/award01.jpg" class="img-fluid" alt="">
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="isotope-item">
            <div class="image-gallery-item">
                <a href="#">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <span class="thumb-info-wrapper">
                            <img src="/images/award02.jpg" class="img-fluid" alt="">
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="isotope-item">
            <div class="image-gallery-item">
                <a href="#">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <span class="thumb-info-wrapper">
                            <img src="/images/award03.jpg" class="img-fluid" alt="">
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="isotope-item">
            <div class="image-gallery-item">
                <a href="#">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <span class="thumb-info-wrapper">
                            <img src="/images/award04.jpg" class="img-fluid" alt="">
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="image-gallery sort-destination full-width">
        <div class="isotope-item">
            <div class="image-gallery-item">
                <a href="#">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <span class="thumb-info-wrapper">
                            <img src="/images/award05.jpg" class="img-fluid" alt="">
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="isotope-item">
            <div class="image-gallery-item">
                <a href="#">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <span class="thumb-info-wrapper">
                            <img src="/images/award06.jpg" class="img-fluid" alt="">
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="isotope-item">
            <div class="image-gallery-item">
                <a href="#">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <span class="thumb-info-wrapper">
                            <img src="/images/award07.jpg" class="img-fluid" alt="">
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="isotope-item">
            <div class="image-gallery-item">
                <a href="#">
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten">
                        <span class="thumb-info-wrapper">
                            <img src="/images/award08.jpg" class="img-fluid" alt="">
                            <span class="thumb-info-action">
                                <span class="thumb-info-action-icon"><i class="fas fa-plus"></i></span>
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </div>
@stop