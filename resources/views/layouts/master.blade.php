<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Guests for Test Service</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Bootstrap core CSS -->
		<link href="{{ url('/') }}/public/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="{{ url('/') }}/public/css/restaurantapp.css" rel="stylesheet">
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="{{ url('/') }}/public/js/html5shiv.3.7.0.js"></script>
		  <script src="{{ url('/') }}/public/js/respond.min.1.3.0.js"></script>
		<![endif]-->
		
		<script src="{{ url('/') }}/public/js/jquery.min.1.11.1.js"></script>
		<script src="{{ url('/') }}/public/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
		<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
	</head>
	<body>
		<a class="sr-only sr-only-focusable" href="#content" tabindex="1"><div class="container"><span class="skiplink-text">Skip to main content</span></div></a>

		<div class="navbar navbar-worldskills navbar-static-top">
			<div class="cube-container">
				<div class="cube-right-bottom-blue">&nbsp;</div>
			</div>
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ url('/') }}">Test</a>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="{{ url('/member') }}">Members</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
							<li><a href="{{ url('/login') }}">Login</a></li>
							<li><a href="{{ url('/register') }}">Register</a></li>
						@else
							<li><a href="{{ url('/logout') }}">Logout</a></li>
						@endif
					</ul>
				</div>
			</div>
		</div>

		<div class="container">

			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Information</li>
			</ol>

			<div id="content">
				@yield('content')
			</div>

			<footer>
				<hr class="hr-extended" />
				<p>© 2015 Le Son</p>
			</footer>

		</div>

		<!-- Bootstrap core JS -->
		<script src="{{ url('/') }}/public/js/app.js"></script>
	</body>
</html>
