<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Boilerplate</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{url('')}}/limitless/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="{{url('')}}/limitless/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('')}}/limitless/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('')}}/limitless/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('')}}/limitless/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="{{url('')}}/limitless/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{url('')}}/limitless/global_assets/js/main/jquery.min.js"></script>
	<script src="{{url('')}}/limitless/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="{{url('')}}/limitless/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{url('')}}/limitless/assets/js/app.js"></script>
    <!-- /theme JS files -->

    <script src="{{url('')}}/limitless/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    {{-- <script src="{{url('')}}/limitless/global_assets/js/plugins/notifications/sweet_alert.min.js"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


    @stack('before-styles')

    @stack('after-styles')

</head>

<body class="navbar-top">

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-light fixed-top">

		<!-- Header with logos -->
		<div class="navbar-header navbar-dark d-none d-md-flex align-items-md-center">
			<div class="navbar-brand navbar-brand-md">
				<a href="../full/index.html" class="d-inline-block">
					{{-- <img src="{{url('')}}/limitless//global_assets/images/logo_light.png" alt=""> --}}

                </a>

			</div>

			<div class="navbar-brand navbar-brand-xs">
				<a href="../full/index.html" class="d-inline-block">
					{{-- <img src="{{url('')}}/limitless//global_assets/images/logo_icon_light.png" alt=""> --}}
				</a>
			</div>
		</div>
		<!-- /header with logos -->


		<!-- Mobile controls -->
		<div class="d-flex flex-1 d-md-none">
			<div class="navbar-brand mr-auto">
				<a href="../full/index.html" class="d-inline-block">
					{{-- <img src="{{url('')}}/limitless//global_assets/images/logo_dark.png" alt=""> --}}
				</a>
			</div>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>

			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>
		<!-- /mobile controls -->


		<!-- Navbar content -->
		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				{{-- <li class="nav-item">
					<a href="#" class="navbar-nav-link">Text link</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">Menu</a>

					<div class="dropdown-menu">
						<a href="#" class="dropdown-item">Action</a>
						<a href="#" class="dropdown-item">Another action</a>
						<a href="#" class="dropdown-item">One more action</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">Separate action</a>
					</div>
				</li> --}}
			</ul>

			<ul class="navbar-nav ml-auto">
				{{-- <li class="nav-item">
					<a href="#" class="navbar-nav-link">Text link</a>
				</li> --}}

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link">
						<i class="icon-bell2"></i>
						<span class="d-md-none ml-2">Notificações</span>
						<span class="badge badge-mark border-white"></span>
					</a>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<img src="{{url('')}}/limitless//global_assets/images/image.png" class="rounded-circle" alt="">
						<span>{{Auth::User()->first_name}}</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="{{ route('frontend.user.account') }}" class="dropdown-item"><i class="icon-user-plus"></i> Meu Perfil</a>

						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Mensagens <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Configurações</a>
						<a href="{{ route('frontend.auth.logout') }}" class="dropdown-item"><i class="icon-switch2"></i> Sair</a>
					</div>
				</li>
			</ul>
		</div>
		<!-- /navbar content -->

	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="{{ $logged_in_user->picture }}" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">{{Auth::User()->first_name}}</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Brasília, DF
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->



				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Menu Principal</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link @if( \Request::route()->getName() == 'admin.dashboard') active @endif">
								<i class="icon-home4"></i>
								<span>Dashboard</span>
							</a>
						</li>

                        <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Sistema</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item nav-item-submenu @if( \Request::route()->getName() == 'admin.auth.user.index' or \Request::route()->getName() == 'admin.auth.role.index' ) nav-item-expanded @endif">
							<a href="#" class="nav-link"><i class="icon-stack"></i> <span>Usuários</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">

								<li class="nav-item"><a href="{{ route('admin.auth.user.index') }}" class="nav-link @if( \Request::route()->getName() == 'admin.auth.user.index') active @endif">Gestão de Usuários</a></li>
								<li class="nav-item"><a href="{{ route('admin.auth.role.index') }}" class="nav-link @if( \Request::route()->getName() == 'admin.auth.role.index') active @endif">Gestão de Papeis</a></li>

							</ul>
                        </li>
                        <li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-stack"></i> <span>Logs</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">

								<li class="nav-item"><a href="{{ route('log-viewer::dashboard') }}" class="nav-link">Painel de Controle</a></li>
								<li class="nav-item"><a href="{{ route('log-viewer::logs.list') }}" class="nav-link">Logs</a></li>

							</ul>
                        </li>
						<!-- /main -->

                    </ul>

				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->

		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">
            @include('includes.partials.read-only')
            @include('includes.partials.logged-in-as')

			<!-- Page header -->
			<div class="page-header">
                @yield('page-header')
                {{-- <div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Starters</span> - Navbar Fixed Main</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
						<a href="#" class="btn btn-labeled btn-labeled-right bg-primary">Button <b><i class="icon-menu7"></i></b></a>
					</div>
				</div> --}}
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content pt-10">

                @include('includes.partials.messages')
                @yield('content')
				<!-- Basic card -->
				{{-- <div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Basic card</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<h6 class="font-weight-semibold">Start your development with no hassle!</h6>
						<p class="mb-3">Common problem of templates is that all code is deeply integrated into the core. This limits your freedom in decreasing amount of code, i.e. it becomes pretty difficult to remove unnecessary code from the project. Limitless allows you to remove unnecessary and extra code easily just by removing the path to specific LESS file with component styling. All plugins and their options are also in separate files. Use only components you actually need!</p>

						<h6 class="font-weight-semibold">What is this?</h6>
						<p class="mb-3">Starter kit is a set of pages, useful for developers to start development process from scratch. Each layout includes base components only: layout, page kits, color system which is still optional, bootstrap files and bootstrap overrides. No extra CSS/JS files and markup. CSS files are compiled without any plugins or components. Starter kit was moved to a separate folder for better accessibility.</p>

						<h6 class="font-weight-semibold">How does it work?</h6>
						<p>You open one of the starter pages, add necessary plugins, uncomment paths to files in components.less file, compile new CSS. That's it. I'd also recommend to open one of main pages with functionality you need and copy all paths/JS code from there to your new page, it's just faster and easier.</p>
					</div>
				</div> --}}
				<!-- /basic card -->




			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Desenvolvido</a> por <a href="#" target="_blank">John Glauber</a>
					</span>

					<ul class="navbar-nav ml-lg-auto">
						{{-- <li class="nav-item">
							<a href="#" class="navbar-nav-link">Text link</a>
						</li> --}}

						<li class="nav-item">
							<a href="#" class="navbar-nav-link">
								<i class="icon-lifebuoy"></i>
							</a>
						</li>

						{{-- <li class="nav-item">
							<a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold">
								<span class="text-pink-400">
									<i class="icon-cart2 mr-2"></i>
									Purchase
								</span>
							</a>
						</li> --}}
					</ul>
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


    <!-- Scripts -->
    @yield('before-scripts')

    @yield('after-scripts')

</body>
</html>


{{-- <!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>
    <meta name="description" content="@yield('meta_description', 'Laravel Boilerplate')">
    <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
    @yield('meta')


    @stack('before-styles')


    {{ style(mix('css/backend.css')) }}

    @stack('after-styles')
</head>


<body class="app header-fixed sidebar-fixed aside-menu-off-canvas sidebar-lg-show">
    @include('backend.includes.header')

    <div class="app-body">
        @include('backend.includes.sidebar')

        <main class="main">
            @include('includes.partials.read-only')
            @include('includes.partials.logged-in-as')
            {!! Breadcrumbs::render() !!}

            <div class="container-fluid">
                <div class="animated fadeIn">
                    <div class="content-header">
                        @yield('page-header')
                    </div><!--content-header-->

                    @include('includes.partials.messages')
                    @yield('content')
                </div><!--animated-->
            </div><!--container-fluid-->
        </main><!--main-->

        @include('backend.includes.aside')
    </div><!--app-body-->

    @include('backend.includes.footer')

    <!-- Scripts -->
    @stack('before-scripts')
    {!! script(mix('js/manifest.js')) !!}
    {!! script(mix('js/vendor.js')) !!}
    {!! script(mix('js/backend.js')) !!}
    @stack('after-scripts')
</body>
</html>
 --}}
