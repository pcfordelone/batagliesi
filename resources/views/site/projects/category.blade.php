@extends('site.layout')

@section('content')
    <div class="container py-2">
        <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
            <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Todos</a></li>
			@foreach($category->project_tags as $tag)
            	<li class="nav-item" data-option-value=".{{ $tag->slug }}"><a class="nav-link text-1 text-uppercase" href="#">{{ $tag->name }}</a></li>
			@endforeach

        </ul>
    </div>

    <div class="ml-4 mr-4 mt-4 pt-2">
        <div class="sort-destination-loader sort-destination-loader-showing">
            <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
				@foreach($data as $project)
					<div class="col-md-6 col-lg-1-5 isotope-item {{ implode(' ', $project->project_tags->lists('slug')->toArray()) }}">
						<div class="portfolio-item">
							<a href="{{ route('site.projects.detail', ['slug' => $project->slug]) }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									@if ($project->default_img != '')
										<img src="/uploads/projects/{{ $project->default_img }}" class="img-fluid border-radius-0" alt="">
									@else
										<img src="/images/projects/no-image.jpg" class="img-fluid border-radius-0" alt="">
									@endif

									<span class="thumb-info-title">
										<span class="thumb-info-inner">{{ $project->name }}</span>
										<span class="thumb-info-type yellow-background">Urbanismo</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
							</a>
						</div>
					</div>
				@endforeach
            </div>
        </div>

    </div>
@stop