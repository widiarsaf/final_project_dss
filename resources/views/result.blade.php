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
	<section class="page-section" id="services">
		<div class="container">
			<h1 class="mb-5">MOORA Calculation Result</h1>
			<table style="font-size: 30px" class="table">
				<thead>
					<tr>
						<th>Rank</th>
						<th>University Name</th>
					</tr>
				</thead>
				<tbody>
					@php $no = 1; @endphp
					@foreach ($results as $result)
					<tr>
						<td># {{$no++}}</td>
						<td>{{$result->university}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<a type="submit" class="btn btn-primary btn-xl mt-5" style="background: rgb(23, 23, 23); border:none;"
				href="{{route('welcome')}}">Back</a>

		</div>
	</section>
</body>

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




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
</html>