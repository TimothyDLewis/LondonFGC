<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		London FGC
		@yield("title")
	</title>
	<link href="//fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
	<link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet"/>
	<link href="{{ asset("css/grayscale.min.css") }}" rel="stylesheet"/>
	<link href="{{ asset("css/custom.css") }}" rel="stylesheet"/>
	<style type="text/css">

	</style>
	@yield("styles")
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body id="page-top">
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">London FGC</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#weeklies">Weeklies</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#applications">Applications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
					</li>
					<li class="nav-item">
						<span class="nav-link d-block d-sm-block d-md-block d-lg-none d-xl-none">
							<hr/>
						</span>
						<span class="nav-link separator d-none d-sm-none d-md-none d-lg-block d-xl-block">|</span>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url("/register") }}">Register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ url("/login") }}">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	@yield("content")
	<script src="{{ asset("js/jquery.3.2.1.min.js") }}" type="text/javascript"></script>
	<script src="{{ asset("js/jquery.easing.min.js") }}" type="text/javascript"></script>
	<script src="{{ asset("js/bootstrap.min.js") }}" type="text/javascript"></script>
	<script src="{{ asset("js/grayscale.min.js") }}" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){

		});
	</script>
	@yield("scripts")
</body>
</html>