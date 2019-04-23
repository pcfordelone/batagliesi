<aside class="sidebar">
    <form action="/novidades/busca" method="get">
        <div class="input-group mb-3 pb-1">
            <input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text">
            <span class="input-group-append">
                <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
            </span>
        </div>
    </form>
    <h5 class="font-weight-bold pt-4">Categorias</h5>
    <ul class="nav nav-list flex-column mb-5">
        @foreach($categories as $category)
            <li class="nav-item"><a class="nav-link" href="{{ route('site.blog.category', ['slug' => $category->slug]) }}">{{ $category->name }} ({{ count($category->blog_posts) }})</a></li>
        @endforeach
    </ul>

    <div class="tabs tabs-dark mb-4 pb-2">
        <ul class="nav nav-tabs">
            <li class="nav-item active"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#recentPosts" data-toggle="tab">Recentes</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="recentPosts">
                <ul class="simple-post-list">
                    @foreach($posts as $key => $post)
                        <li>
                            <div class="post-image">
                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                    <a href="{{ route('site.blog.post', ['slug' => $post->slug]) }}">
                                        @if ($post->default_img == '')
                                            <img src="/images/blog-default_img.jpg" width="50" height="50" alt="{{ $post->title }}">
                                        @else
                                            <img src="/uploads/blog/{{ $post->default_img }}" width="50" height="50" alt="{{ $post->title }}">
                                        @endif
                                    </a>
                                </div>
                            </div>
                            <div class="post-info">
                                <a href="{{ route('site.blog.post', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                <div class="post-meta">
                                    {{ Date::parse($post->created_at)->format('d/m/Y') }}
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</aside>