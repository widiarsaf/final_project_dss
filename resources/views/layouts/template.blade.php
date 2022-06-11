<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
	data-template="vertical-menu-template-free">

<head>
	@include('layouts.assets-top')
</head>

<body>
	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar">
		<div class="layout-container">
			<!-- Menu -->

			@include('layouts.sidebar')
			<!-- / Menu -->
			<!-- Layout container -->
			<div class="layout-page">
				<!-- Navbar -->

				@include('layouts.navbar')

				<!-- / Navbar -->

				<!-- Content wrapper -->
				<div class="content-wrapper">
					<!-- Content -->

					<div class="container-xxl flex-grow-1 container-p-y">
						@yield('content')

					</div>
					<!-- / Content -->

					<!-- Footer -->
					<footer class="content-footer footer bg-footer-theme">
						<div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
							<div class="mb-2 mb-md-0">
								©
								<script>
									document.write(new Date().getFullYear());
								</script>
								, made with ❤️ by
								<a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
								Edited By Widiareta and Daffa
							</div>
						</div>
					</footer>
					<!-- / Footer -->

					<div class="content-backdrop fade"></div>
				</div>
				<!-- Content wrapper -->
			</div>
			<!-- / Layout page -->
		</div>

		<!-- Overlay -->
		<div class="layout-overlay layout-menu-toggle"></div>
	</div>
	<!-- / Layout wrapper -->


	@include('layouts.assets-bottom')
</body>

</html>