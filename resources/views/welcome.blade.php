<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Agency - Start Bootstrap Theme</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link href="{{asset('assets/assetUser/css/styles.css')}}" rel="stylesheet" />
</head>

<body id="">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="#page-top">Best University Selection</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
				aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars ms-1"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
					<li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Masthead-->
	<header class="masthead" style='background-image: url("{{asset('assets/assetUser/img/background.jpg')}}");'>
		<div class="container">
			<div class="masthead-subheading">Decision Support System for Best University Selection using MOORA Method
			</div>
			<a class="btn btn-primary btn-xl text-uppercase" href="#services">Get Recommendation</a>
		</div>
	</header>
	<!-- Form-->
	<section class="page-section" id="services">



		<div class="container">

			<form method="POST" action="{{ route('process') }}">
				<div style="display: flex;justify-content: center; gap: 40px">
					<div class="col-md-5">
						@csrf
						<h1>Weight Criteria</h1>
						@foreach ($criteria as $c)
						<div class="mb-2">
							<label for="">{{$c->criteria_name}}</label>
							<br>
							<input type="text" name="weight[{{$c->criteria_name}}]" class="form-control" required>
						</div>
						@endforeach
					</div>
					<div class="col-md-5">
						<h1>Location Choose</h1>
						<div>
							@php $val = 3 @endphp
							@for ($i = 0; $i<5; $i++) <label for="">Option {{$i+1}}</label>
								<select id="defaultSelect" class="form-select form-select mb-3" name="option[{{$i+1}}]" required>
									@foreach($location as $loc)
									<option value="{{$loc->id}}">{{$loc->location_name}}</option>
									@endforeach
								</select>
								@endfor
						</div>
					</div>
					
				</div>
				<center><button type="submit" class="btn btn-primary btn-xl mt-5" style="background: rgb(23, 23, 23); border:none;">Process</button></center>
			</form>
		</div>
	</section>

	<!-- Footer-->
	<footer class="footer py-4">
		<hr>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 text-lg-start">Copyright &copy; urank 2022</div>
				<div class="col-lg-4 my-3 my-lg-0">
					<a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
					<a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<div class="col-lg-4 text-lg-end">
					<a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
					<a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
				</div>
			</div>
		</div>
	</footer>
	<!-- Bootstrap core JS-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Core theme JS-->
	<script src="{{asset('assets/assetUser/js/scripts.js')}}"></script>
	<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>