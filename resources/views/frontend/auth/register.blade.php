<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cadastro</title>

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
					<a href="{{route('frontend.auth.login')}}" class="navbar-nav-link">
						<i class="icon-display4"></i>
                        <span class="d-md-none ml-2">lOGIN</span>
                        LOGIN
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

            @include('includes.partials.messages')

            <!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Registration form -->
				<form action="{{route('frontend.auth.register.post')}}" class="flex-fill" method="POST">
                    @csrf
                    <div class="row">
						<div class="col-lg-6 offset-lg-3">
							<div class="card mb-0">
								<div class="card-body">
									<div class="text-center mb-3">
										<i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
										<h5 class="mb-0">Criar uma Conta</h5>
										<span class="d-block text-muted">Todos os campos são obrigatórios</span>
									</div>


									<div class="row">
										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="text" name="first_name" class="form-control" placeholder="Nome" value="{{old('first_name')}}" required>
												<div class="form-control-feedback">
													<i class="icon-user-check text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="text" name="last_name" class="form-control" placeholder="Sobrenome" value="{{old('last_name')}}" required>
												<div class="form-control-feedback">
													<i class="icon-user-check text-muted"></i>
												</div>
											</div>
										</div>
                                    </div>

                                    <div class="row">
										<div class="col-md-12">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="email" name="email" class="form-control" placeholder="E-mail"  value="{{old('email')}}" required>
												<div class="form-control-feedback">
													<i class="icon-mention text-muted"></i>
												</div>
											</div>
										</div>


									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="password" name="password" class="form-control" placeholder="Senha" required>
												<div class="form-control-feedback">
													<i class="icon-user-lock text-muted"></i>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group form-group-feedback form-group-feedback-right">
												<input type="password" name="password_confirmation" class="form-control" placeholder="Reinsira a Senha" required>
												<div class="form-control-feedback">
													<i class="icon-user-lock text-muted"></i>
												</div>
											</div>
										</div>
									</div>



									<div class="form-group">

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												Concordo <a href="#">com os termos e politica</a>
											</label>
										</div>
									</div>

									<button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> Criar Conta</button>
								</div>
							</div>
						</div>
					</div>
				</form>
				<!-- /registration form -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			{{-- <div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul>
				</div>
			</div> --}}
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>



{{-- @extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.register_box_title'))

@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col col-sm-8 align-self-center">
            <div class="card">
                <div class="card-header">
                    <strong>
                        @lang('labels.frontend.auth.register_box_title')
                    </strong>
                </div><!--card-header-->

                <div class="card-body">
                    {{ html()->form('POST', route('frontend.auth.register.post'))->open() }}
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.first_name'))->for('first_name') }}

                                    {{ html()->text('first_name')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.first_name'))
                                        ->attribute('maxlength', 191)
                                        ->required()}}
                                </div><!--col-->
                            </div><!--row-->

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.frontend.last_name'))->for('last_name') }}

                                    {{ html()->text('last_name')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.last_name'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

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
                                    {{ html()->label(__('validation.attributes.frontend.password_confirmation'))->for('password_confirmation') }}

                                    {{ html()->password('password_confirmation')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.frontend.password_confirmation'))
                                        ->required() }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->

                        @if(config('access.captcha.registration'))
                            <div class="row">
                                <div class="col">
                                    @captcha
                                    {{ html()->hidden('captcha_status', 'true') }}
                                </div><!--col-->
                            </div><!--row-->
                        @endif

                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-0 clearfix">
                                    {{ form_submit(__('labels.frontend.auth.register_button')) }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->
                    {{ html()->form()->close() }}

                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                @include('frontend.auth.includes.socialite')
                            </div>
                        </div><!--/ .col -->
                    </div><!-- / .row -->
                </div><!-- card-body -->
            </div><!-- card -->
        </div><!-- col-md-8 -->
    </div><!-- row -->
@endsection

@push('after-scripts')
    @if(config('access.captcha.registration'))
        @captchaScripts
    @endif
@endpush

--}}
