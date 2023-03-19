<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@include('admin.include.css')
	<title>Rukada - Responsive Bootstrap 5 Admin Template</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		
		@include('admin.include.sidebar')
		@include('admin.include.header')
		<!-- start page wrapper -->
	    <div class="page-wrapper">
		    <div class="page-content">

					@yield('admin')

            </div>
	    </div>
		<!--end page wrapper -->
		
	@include('admin.include.footer')
	@include('admin.include.js')
</body>

</html>