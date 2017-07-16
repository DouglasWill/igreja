<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,900,500italic' rel='stylesheet' type='text/css'>

    <!-- Normalize CSS -->
    <link href="{{ asset('../../../../style/css/normalize.css') }}" rel="stylesheet">

	<!-- font-awesome CSS -->
    <link href="{{ asset('../../../../style/css/font-awesome.min.css') }}" rel="stylesheet">
		
    <!-- flaticon Stroke CSS -->
    <link href="{{ asset('../../../../style/css/flaticon.css') }}" rel="stylesheet">
		
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('../../../../style/css/owl.carousel.css') }}" rel="stylesheet">
		
    <!-- Owl Carousel CSS -->
    <link href="{{ asset('../../../../style/css/owl.theme.css') }}" rel="stylesheet">
		
    <!-- YTPlayer CSS -->
    <link href="{{ asset('../../../../style/css/YTPlayer.css') }}" rel="stylesheet">
		
    <!-- Offcanvas CSS -->
    <link href="{{ asset('../../../../style/css/offcanvas.css') }}" rel="stylesheet">
		
    <!-- Bootstrap CSS -->
    <link href="{{ asset('../../../../style/css/bootstrap.min.css') }}" rel="stylesheet">
		
    <!-- Main CSS -->
    <link href="{{ asset('../../../../style/css/style.css') }}" rel="stylesheet">
		
    <!-- Responsive CSS -->
    <link href="{{ asset('../../../../style/css/responsive.css') }}" rel="stylesheet">
</head>
<body>
<div class="wrapper offcanvas-container" id="offcanvas-container">
			<div class="inner-wrapper offcanvas-pusher">
				<div class="header-cover-about">
					<header>
						<div class="container-fluid">
							<nav class="navbar navbar-default main-nav" role="navigation">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
							    <!-- offcanvas-trigger-effects -->
							    <div id="offcanvas-trigger-effects" class="column">
							        <button type="button" class="navbar-toggle visible-xs" data-toggle="offcanvas" data-target="navbar-collapse" data-placement="right" data-effect="offcanvas-effect">
							        <i class="fa fa-bars"></i>
							        </button>
							    </div>
							    <!-- offcanvas-trigger-effects -->
									<a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="" /></a>
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse">
									<ul class="nav navbar-nav navbar-right">
										<!-- Home Style -->
										<li class="dropdown"><a href="index.html" >Home</a></li> 
										<li><a href="about-us.html">Igreja</a></li>
										<li><a href="services.html">Fotos</a></li>
                                        <li><a href="services.html">Mensagens</a></li>
										<span class="support-btn pull-right"> <a href="#">Contato</a></span>
									</ul>
								</div><!-- /navbar-collapse -->
							</nav>
							<div class="get-in-touch brand-bg clearfix">
							</div><!-- get-in-touch -->
						</div> <!-- container-fluid -->
					</header>

        @yield('content')

    <!-- Main js -->
    <script src="{{ asset('../../../../style/js/jquery-1.11.1.min.js') }}"></script>
		
    <!-- Modernizr js -->
    <script src="{{ asset('../../../../style/js/modernizr-2.8.1.min.js') }}"></script>
		
    <!-- Bootstrap js -->
    <script src="{{ asset('../../../../style/js/bootstrap.min.js') }}"></script>
		
    <!-- owl.carousel js -->
    <script src="{{ asset('../../../../style/js/owl.carousel.min.js') }}"></script>
		
    <!-- countTo js -->
    <script src="{{ asset('../../../../style/js/jquery.countTo.js') }}"></script>
		
    <!-- stellar js -->
    <script src="{{ asset('../../../../style/js/stellar.js') }}"></script>
		
    <!-- YTPlayer js -->
    <script src="{{ asset('../../../../style/js/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ asset('../../../../style/js/sidebarEffects.js') }}"></script>
    <script src="{{ asset('../../../../style/js/classie.js') }}"></script>
		
    <!-- smoothscroll js -->
    <script src="{{ asset('../../../../style/js/smoothscroll.min.js') }}"></script>
		
    <!-- viewport js -->
    <script src="{{ asset('../../../../style/js/jquery.inview.min.js') }}"></script>
		
    <!-- Scripts js -->
    <script src="{{ asset('../../../../style/js/scripts.js') }}"></script>
	
</body>
</html>
