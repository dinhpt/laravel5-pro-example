<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<!-- Bootstrap core CSS -->

<link rel="stylesheet"
	href="{{ URL::asset('admin/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('client/css/main.css') }}">
<link rel="stylesheet"
	href="{{ URL::asset('admin/fonts/css/font-awesome.min.css') }}">
<link rel="stylesheet"
	href="{{ URL::asset('admin/css/datepicker/jquery.datetimepicker.css') }}">
<script src="{{ URL::asset('admin/js/datepicker/jquery.datetimepicker.js') }}"></script> 
<link rel="stylesheet"
	href="{{ URL::asset('admin/css/datepicker/datepicker.css') }}">
<link rel="stylesheet" href="{{ URL::asset('client/css/custom.css') }}">

<link rel="stylesheet" href="{{ URL::asset('client/css/style-s.css') }}"
	media="only screen and (max-width:320px)" type="text/css" />
<!-- Samsung  -->
<link rel="stylesheet" href="{{ URL::asset('client/css/style-ms.css') }}"
	media="only screen and (min-width:321px) and (max-width:480px)" type="text/css" />
	<!-- Iphone 5 ngang  -->
<link rel="stylesheet" href="{{ URL::asset('client/css/style-iphone5.css') }}"
	media="only screen and (min-width:481px) and (max-width:568px)" type="text/css" />
<!-- Samsung ngang  -->
	<link rel="stylesheet" href="{{ URL::asset('client/css/style-samsung.css') }}"
	media="only screen and (min-width:569px) and (max-width:640px)" type="text/css" />
<!-- Iphone6 ngang ngang  -->
	<link rel="stylesheet" href="{{ URL::asset('client/css/style-iphone6.css') }}"
	media="only screen and (min-width:641px) and (max-width:700px)" type="text/css" />
<!--Ipad  -->	
<link rel="stylesheet" href="{{ URL::asset('client/css/style-m.css') }}"
	media="only screen and (min-width:641px) and (max-width:800px)"
	type="text/css" />
	
<link rel="stylesheet" href="{{ URL::asset('client/css/resmenu.css') }}">
<script src="{{ URL::asset('client/js/jquery-1.11.0.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('client/css/resmenu.css') }}">
<script src="{{ URL::asset('client/js/jquery.resmenu.js') }}"></script>
<script src="{{ URL::asset('client/js/writer.js') }}"></script>
<script src="{{ URL::asset('client/js/customer.js') }}"></script>

</head>
<body class="nav-md">
	<div id="wrapper">
		<!-- Page Content -->
		<div id="page-content-wrapper">

			<center>
				@include('partials.client.header')
				<div id="home">
					<div class="container row">@yield('content')
						@include('partials.client.rightbar')</div>
				</div>
				@include('partials.client.footer')
				<script src="{{ URL::asset('admin/js/bootstrap.min.js') }}"></script>
			</center>
		</div>
		<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<div class="nav_menu">
				<div class="main-nav">
					
				</div>
			</div>
		</div>
		<!-- /#sidebar-wrapper -->
	</div>
</body>
</html>