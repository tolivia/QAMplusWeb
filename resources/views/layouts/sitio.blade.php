<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<title>Qamplus</title>

		<!-- Bootstrap CSS -->
		<link href="css/sitio.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
	
		<nav id="navbar" class="clearfix">
			<div class="col-xs-7 col-md-4">
				<h1><a href="{{url('')}}" id="logo">Qamplus</a></h1>
			</div>

			<div class="col-xs-5 visible-xs-block visible-sm-block text-right">
				<a href="#" id="bt-cel"><i class="glyphicon glyphicon-align-justify"></i></a>
			</div>
			<div class="clearfix visible-xs-block visible-sm-block"></div>

			<div class="col-md-8 col-lg-8 menu">
				<div class="links">
					<a href="{{url('')}}">Home</a>
					<a href="{{url('/#features')}}" class="features">Features</a>
					<a href="{{url('company')}}">Company</a>
					<a href="{{url('prices')}}">Pricing</a>
					<a href="#contact" class="contact">Contact</a>
				</div>
				<div class="redes">
					<a href="" class="icon"><i class="icon icon-facebook"></i></a>
					<a href="" class="icon"><i class="icon icon-twitter"></i></a>
					<a href="" class="icon"><i class="icon icon-instagram"></i></a>
				</div>
			</div>
		</nav>
		
		@yield('main')

		<footer class="container-fluid">
			<div class="row">
				<div class="col-md-5 col-md-push-7" id="contact">
					<div class="row">
						<div class="col-md-9">
							<h5>TRY QAMplus <span>FREE <span>TODAY!</span></span></h5>
							<div id="errors"></div>
							<form action="{{url('contact')}}">
								<input type="text" id="name" name="name" class="form-control" placeholder="Name">
								<input type="email" id="email" name="email" class="form-control" placeholder="E-mail">
								<textarea name="message" id="message" class="form-control" rows="5"></textarea>
								
								<div>
									<div id="captchaError"></div>
									<div class="g-recaptcha" data-size="normal" data-sitekey="6LdtRhMTAAAAALQtf_92mefWB7mJ20CRCmeNMSY-"></div>
								</div>
								<br>
								
								<div>
									<span class="pull-left">All fields are required.</span>
									<button type="submit" class="boton bt-blue pull-right">Send <i class="glyphicon glyphicon-log-out"></i></button>
								</div>
							</form>
							<a name="contact" id="a-contact"></a>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-md-pull-5" id="foot">
					<div class="row">
						<div class="col-md-offset-2 col-md-10">
							<nav class="menu">
								<a href="{{url('/')}}">Home</a>
								<a href="{{url('/#features')}}" class="features">Features</a>
								<a href="{{url('company')}}">Company</a>
								<a href="{{url('prices')}}">Pricing</a>
								<a href="#contact" class="features">Contact</a>
							</nav>

							<div class="contact">
								<i></i> -> contact@qamplus.com
							</div>
							<span>&copy; Copyright QAMplus 2015</span>
						</div>
					</div>
				</div>
			</div>
		</footer>

		@if ($app->environment() == "local")
			<script src="{{url('vendor/requirejs/require.js')}}" type="text/javascript" data-main="{{url('assets/js/common')}}"></script>
			<script type="text/javascript">
				require.config({
					baseUrl: '/assets/js'
				});
			</script>
		@else
			<script src="{{url('js/require.js')}}" type="text/javascript" data-main="{{url('js/common')}}"></script>
			<script type="text/javascript">
				require.config({
					baseUrl: 'js'
				});
			</script>
		@endif

		@section('scripts')
		@show
	</body>
</html>