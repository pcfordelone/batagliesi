@extends('site.layout')

@section('content')
    <div class="container py-4">

        <div class="row">
            <div class="col-lg-3 order-lg-2">
                @include('site.blog.partials.blog_aside')
            </div>
            <div class="col-lg-9 order-lg-1">
                <div class="blog-posts">

                    @foreach($posts as $post)
                        <article class="post post-large">
                            <div class="post-image">
                                <a href="{{ route('site.blog.post', ['slug' => $post->slug]) }}">
                                    @if ($post->default_img == '')
                                        <img src="/images/blog-default_img.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="{{ $post->title }}" />
                                    @else
                                        <img src="/uploads/blog/{{ $post->default_img }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="{{ $post->title }}" />
                                    @endif
                                </a>
                            </div>

                            <div class="post-date">
                                <span class="day">{{ Date::parse($post->created_at)->format('d') }}</span>
                                <span class="month">{{ Date::parse($post->created_at)->format('M') }}</span>
                            </div>

                            <div class="post-content">

                                <h2 class="custom-font-size-5 text-color-primary mt-5 mb-3">
                                    <a href="{{ route('site.blog.post', ['slug' => $post->slug]) }}">
                                        {{ $post->title }}
                                    </a>
                                </h2>
                                <p>
                                    {!! str_limit(strip_tags($post->html_content), $limit = 500, $end = ' ...') !!}
                                </p>

                                <div class="post-meta">
                                    <span><i class="far fa-user"></i> Por: <a href="{{ route('site.blog.post', ['slug' => $post->slug]) }}">{{ $post->author }}</a> </span>
                                    <span class="d-block d-sm-inline-block float-sm-right mt-3 mt-sm-0"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Leia Mais</a></span>
                                </div>

                            </div>
                        </article>
                    @endforeach


                    <ul class="pagination float-right">
                        @if(($posts->total()/$posts->perPage()) > 1)
                            <li class="page-item"><a class="page-link" href="{{ $posts->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a></li>
                            @for($i = 1; $i < (($posts->total()/$posts->perPage())+1); $i++)
                                <li class="page-item active"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
                            @endfor
                            <a class="page-link" href="{{ $posts->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a>
                        @endif
                    </ul>

                </div>
            </div>
        </div>

    </div>
@stop