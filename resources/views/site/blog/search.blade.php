@extends('site.layout')

@section('content')
    <div class="container py-4">

        <div class="row">
            <div class="col-lg-3 order-lg-2">
                @include('site.blog.partials.blog_aside')
            </div>

            <div class="col-lg-9 order-lg-1">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-normal text-7 mb-0">Mostrando os resultados para <strong class="font-weight-extra-bold">{{ $_GET['s'] }}</strong></h2>
                        <p class="lead mb-0">Mostrando {{ count($posts) }} de {{ $posts->total() }} resultados.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col pt-2 mt-1">
                        <hr class="my-4">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <ul class="simple-post-list m-0">
                            @foreach($posts as $post)
                                <li>
                                    <div class="post-info">
                                        <a href="{{ route('site.blog.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                        <div class="post-meta">
                                            <span class="text-dark text-uppercase font-weight-semibold">Por: {{ $post->author }}</span> | {{ Date::parse($post->created_at)->format('d/m/Y') }}
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        @if(($posts->total()/$posts->perPage()) > 1)
                            <ul class="pagination float-right">
                                <li class="page-item"><a class="page-link" href="{{ $posts->previousPageUrl() }}"><i class="fas fa-angle-left"></i></a></li>
                                @for($i = 1; $i < (($posts->total()/$posts->perPage())+1); $i++)
                                    <li class="page-item @if($i == $posts->currentPage()) active @endif"><a class="page-link" href="?s={{ $_GET['s'] }}&page={{ $i }}">{{ $i }}</a></li>
                                @endfor
                                <a class="page-link" href="{{ $posts->nextPageUrl() }}"><i class="fas fa-angle-right"></i></a>
                            </ul>
                        @endif

                    </div>
                </div>
            </div>
        </div>

    </div>
@stop