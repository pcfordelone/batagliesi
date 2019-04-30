@extends('site.layout')

@section('content')
    <div class="container py-2">
        <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
            <li class="nav-item active" data-option-value="*"><a class="nav-link text-1 text-uppercase active" href="#">Todos</a></li>
            <li class="nav-item" data-option-value=".arquitetura"><a class="nav-link text-1 text-uppercase" href="#">Arquitetura</a></li>
            <li class="nav-item" data-option-value=".varejo-e-servicos"><a class="nav-link text-1 text-uppercase" href="#">Varejo e Serviços</a></li>
			<li class="nav-item" data-option-value=".urbanismo"><a class="nav-link text-1 text-uppercase" href="#">Urbanismo</a></li>
			<li class="nav-item" data-option-value=".interiores"><a class="nav-link text-1 text-uppercase" href="#">Interiores</a></li>
			<li class="nav-item" data-option-value=".ideias-e-concursos"><a class="nav-link text-1 text-uppercase" href="#">Ideias e Concursos</a></li>
			<li class="nav-item" data-option-value=".educacional"><a class="nav-link text-1 text-uppercase" href="#">Educacional</a></li>

        </ul>
    </div>

    <div class="ml-4 mr-4 mt-4 pt-2">

        <div class="sort-destination-loader sort-destination-loader-showing">
            <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

				<div class="col-md-6 col-lg-1-5 isotope-item urbanismo">
                    <div class="portfolio-item">
                        <a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project01.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">Via Atlântica</span>
										<span class="thumb-info-type">Urbanismo</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
                        </a>
                    </div>
                </div>
				<div class="col-md-6 col-lg-1-5 isotope-item urbanismo">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project02.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">São Paulo Utópico</span>
										<span class="thumb-info-type">Urbanismo</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item interiores">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project03.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">Otto</span>
										<span class="thumb-info-type">Interiores</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item arquitetura">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project04.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">City Barra</span>
										<span class="thumb-info-type">Arquitetura</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item arquitetura">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project05.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">Bank Boston</span>
										<span class="thumb-info-type">Arquitetura</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item educacional">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project06.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">CONFEA</span>
										<span class="thumb-info-type">Educacional</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item urbanismo">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project01.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">Via Atlântica</span>
										<span class="thumb-info-type">Urbanismo</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item urbanismo">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project02.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">São Paulo Utópico</span>
										<span class="thumb-info-type">Urbanismo</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item interiores">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project03.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">Otto</span>
										<span class="thumb-info-type">Interiores</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item arquitetura">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project04.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">City Barra</span>
										<span class="thumb-info-type">Arquitetura</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item arquitetura">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project05.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">Bank Boston</span>
										<span class="thumb-info-type">Arquitetura</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item educacional">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project06.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">CONFEA</span>
										<span class="thumb-info-type">Educacional</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item urbanismo">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project01.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">Via Atlântica</span>
										<span class="thumb-info-type">Urbanismo</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item urbanismo">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project02.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">São Paulo Utópico</span>
										<span class="thumb-info-type">Urbanismo</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item interiores">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project03.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">Otto</span>
										<span class="thumb-info-type">Interiores</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item arquitetura">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project04.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">City Barra</span>
										<span class="thumb-info-type">Arquitetura</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item arquitetura">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project05.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">Bank Boston</span>
										<span class="thumb-info-type">Arquitetura</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-1-5 isotope-item educacional">
					<div class="portfolio-item">
						<a href="{{ route('site.projects.detail') }}">
							<span class="thumb-info thumb-info-centered-info thumb-info-no-borders border-radius-0 m-0">
								<span class="thumb-info-wrapper border-radius-0">
									<img src="/images/projects/project06.jpg" class="img-fluid border-radius-0" alt="">

									<span class="thumb-info-title">
										<span class="thumb-info-inner">CONFEA</span>
										<span class="thumb-info-type">Educacional</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>

            </div>
        </div>

    </div>
@stop