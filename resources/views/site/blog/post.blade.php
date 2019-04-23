@extends('site.layout')

@section('content')
    <div class="container py-4">

        <div class="row">
            <div class="col-lg-3 order-lg-2">
                @include('site.blog.partials.blog_aside')
            </div>

            <div class="col-lg-9 order-lg-1">
                <div class="blog-posts single-post">

                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        <div class="post-image ml-0">
                            <a href="{{ route('site.blog.post', ['slug' => $data->slug]) }}">
                                @if ($data->default_img == '')
                                    <img src="/images/blog-default_img.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="{{ $data->title }}" />
                                @else
                                    <img src="/uploads/blog/{{ $data->default_img }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="{{ $data->title }}" />
                                @endif

                            </a>
                        </div>

                        <div class="post-date ml-0">
                            <span class="day">{{ Date::parse($data->created_at)->format('d') }}</span>
                            <span class="month">{{ Date::parse($data->created_at)->format('M') }}</span>
                        </div>

                        <div class="post-content ml-0">

                            <h2 class="font-weight-bold">
                                <a href="{{ route('site.blog.post', ['slug' => $data->slug]) }}">
                                    {{ $data->title }}
                                </a>
                            </h2>

                            <div class="post-meta">
                                <span><i class="far fa-user"></i> By <a href="#">{{ $data->author }}</a> </span>
                                <span><i class="far fa-folder"></i> <a href="#">{{ $data->blog_category->name }}</a></span>
                            </div>

                            {!! $data->html_content !!}
                        </div>
                    </article>

                </div>
            </div>
        </div>

    </div>
@stop