<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="limitless/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="limitless/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="limitless/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="limitless/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="limitless/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="limitless/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="limitless/global_assets/js/main/jquery.min.js"></script>
	<script src="limitless/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="limitless/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="limitless/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="limitless/assets/js/app.js"></script>
	<script src="limitless/global_assets/js/demo_pages/login.js"></script>
	<!-- /theme JS files -->

</head>

<body>

    <!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
                {{-- <img src="limitless/global_assets/images/logo_light.png" alt=""> --}}

            </a>

		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a href="{{route('frontend.auth.register')}}" class="navbar-nav-link">
						<i class="icon-display4"></i>
                        <span class="d-md-none ml-2">lOGIN</span>
                        Registrar
					</a>
				</li>


			</ul>
		</div>
	</div>
	<!-- /main navbar -->

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

                <!-- Login card -->

				<form class="login-form" method="POST" action="{{route('frontend.auth.login.post')}}">
                    @csrf
                    <div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Login</h5>

							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="email" name="email" class="form-control" placeholder="email" required>
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input type="password" name="password" class="form-control" placeholder="Senha" required>
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group d-flex align-items-center">
								<div class="form-check mb-0">
									<label class="form-check-label">
										<input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
										Lembrar
									</label>
								</div>

								<a href="{{ route('frontend.auth.password.reset') }}" class="ml-auto">Esqueceu a Senha?</a>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Login <i class="icon-circle-right2 ml-2"></i></button>
							</div>

							<div class="form-group text-center text-muted content-divider">
								<span class="px-2">logar com </span>
							</div>

							<div class="form-group text-center">
								<button type="button" class="btn btn-outline bg-indigo border-indigo text-indigo btn-icon rounded-round border-2"><i class="icon-facebook"></i></button>
								<button type="button" class="btn btn-outline bg-pink-300 border-pink-300 text-pink-300 btn-icon rounded-round border-2 ml-2"><i class="icon-google"></i></button>
								<button type="button" class="btn btn-outline bg-slate-600 border-slate-600 text-slate-600 btn-icon rounded-round border-2 ml-2"><i class="icon-github"></i></button>

							</div>

							<div class="form-group text-center text-muted content-divider">
								<span class="px-2">Não tem conta?</span>
							</div>

							<div class="form-group">
								<a href="{{ route('frontend.auth.register') }}" class="btn btn-light btn-block">Cadastrar</a>
							</div>

							<span class="form-text text-center text-muted">Para continuar você precisar concordar com os <a href="#">Termos &amp; Condições</a> e <a href="#">Politica de Cookie</a></span>
						</div>
					</div>
				</form>
				<!-- /login card -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>




{{-- @extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col col-sm-8 align-self-center">
            <div class="card">
                <div class="card-header">
                    <strong>
                        @lang('labels.frontend.auth.login_box_title')
                    </strong>
                </div><!--card-header-->

                <div class="card-body">
                    {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                                    {{ html()->email('email')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.email'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}

                                    {{ html()->password('password')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.password'))
                                        ->required() }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="checkbox">
                                        {{ html()->label(html()->checkbox('remember', true, 1) . ' ' . __('labels.frontend.auth.remember_me'))->for('remember') }}
                                    </div>
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

                        <div class="row">
                            <div class="col">
                                <div class="form-group clearfix">
                                    {{ form_submit(__('labels.frontend.auth.login_button')) }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

                        @if(config('access.captcha.login'))
                            <div class="row">
                                <div class="col">
                                    @captcha
                                    {{ html()->hidden('captcha_status', 'true') }}
                                </div><!--col-->
                            </div><!--row-->
                        @endif

                        <div class="row">
                            <div class="col">
                                <div class="form-group text-right">
                                    <a href="{{ route('frontend.auth.password.reset') }}">@lang('labels.frontend.passwords.forgot_password')</a>
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->
                    {{ html()->form()->close() }}

                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                @include('frontend.auth.includes.socialite')
                            </div>
                        </div><!--col-->
                    </div><!--row-->
                </div><!--card body-->
            </div><!--card-->
        </div><!-- col-md-8 -->
    </div><!-- row -->
@endsection --}}

@push('after-scripts')
    @if(config('access.captcha.login'))
        @captchaScripts
    @endif
@endpush
