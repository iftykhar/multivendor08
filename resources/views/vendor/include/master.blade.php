<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('vendor.include.css')
	<title>Rukada - Responsive Bootstrap 5 Admin Template</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		
		@include('vendor.include.sidebar')
		@include('vendor.include.header')
		<!-- start page wrapper -->
	    <div class="page-wrapper">
		    <div class="page-content">

					@yield('vendor')

            </div>
	    </div>
		<!--end page wrapper -->
		
	@include('vendor.include.footer')
	@include('vendor.include.js')
</body>

</html>