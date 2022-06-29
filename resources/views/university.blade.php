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
					<li class="nav-item"><a class="nav-link" href="{{route('welcome')}}" style="color: grey">Home</a></li>
				</ul>
				<ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
					<li class="nav-item"><a class="nav-link" href="{{route('university')}}" style="color: grey">List of University</a></li>
				</ul>
				<ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
					<li class="nav-item"><a class="nav-link" href="{{route('login')}}" style="color: grey">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Form-->
	<section class="page-section" id="services">
		<div class="container">
		<h5 class="card-header">Alternatives Table</h5>
		<div class="table-responsive text-nowrap">
			<table class="table">
				<thead>
					<tr>
						<th>University Name</th>
						@foreach ($criteria as $c )
						<th>{{$c}}</th>
						@endforeach
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					@foreach ($alternative as $altv)
					<tr>
						<td>{{$altv->university}}</td>
						@foreach ($criteria as $c )
						@if ($c == 'location')
						<th>{{$altv->$c->location_name}}</th>
						@else
						<th>{{$altv->$c}}</th>
						@endif
						@endforeach
					</tr>
					@endforeach
				</tbody>
			</table>
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