@extends('site.layout')

@section('content')
    <div class="container py-2" style="display: none;">
        <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
            <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Todos</a></li>
        </ul>
    </div>

    <div class="ml-4 mr-4 mt-4 pt-2">
        <div class="sort-destination-loader sort-destination-loader-showing">
            <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                @foreach($data as $item)
                    <div class="col-md-6 col-lg-1-5 isotope-item general">
                        <div class="portfolio-item">
                            <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="/uploads/awards/{{ $item->default_img }}" data-plugin-options="{'type':'image'}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">

									<img src="/uploads/awards/{{ $item->default_img }}" class="img-fluid border-radius-0" alt="">

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