@extends('auth.layout')

@section('content')
	<!-- BEGIN LOGIN BOX -->
	<div class="container" id="login-block">
		<div class="row">

			<div class="col-md-12">
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> Houve problemas com os dados inseridos.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				@if (\Illuminate\Support\Facades\Session::has('msg'))
					<div class="col-md-12 alert alert-danger">
						<span class="alert">{!! \Illuminate\Support\Facades\Session::get('msg') !!}</span>
					</div>
					<hr/>
				@endif
			</div>

			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="account-wall">
					<i class="user-img icons-faces-users-03"></i>
					<form class="form-signin" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="append-icon">
							<input type="text" name="email" id="username" class="form-control form-white username" placeholder="Insira seu e-mail" required>
							<i class="icon-user"></i>
						</div>
						<div class="append-icon m-b-20">
							<input type="password" name="password" class="form-control form-white password" placeholder="Insira sua senha" required>
							<i class="icon-lock"></i>
						</div>
						<button type="submit" id="submit-form" class="btn btn-lg btn-danger btn-block ladda-button" data-style="expand-left">Entrar</button>
						<div class="clearfix">
							<p class="pull-left m-t-20"><a id="password" href="#">Esqueceu sua senha?</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
		<p class="account-copyright">
			<span>Copyright © 2017 </span><span>FRD Solutions</span>.<span>Todos os direitos reservados.</span>
		</p>
	</div>
	<!-- END LOGIN BOX -->
@stop
