<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <title>{{ trans(Route::getCurrentRoute()->getName()) . ' | ' .
	trans('admin.title') }}</title>
 -->
 <title>@yield('title')</title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet"
	href="{{ URL::asset('admin/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('admin/css/main.css') }}">
<link rel="stylesheet"
	href="{{ URL::asset('admin/fonts/css/font-awesome.min.css') }}">
<link rel="stylesheet"
	href="{{ URL::asset('admin/css/animate.min.css') }}">
<link rel="stylesheet"
	href="{{ URL::asset('admin/css/datepicker/jquery.datetimepicker.css') }}">
<link rel="stylesheet"
	href="{{ URL::asset('admin/css/datepicker/datepicker.css') }}">
<link rel="stylesheet" href="{{ URL::asset('admin/css/custom.css') }}">
<link rel="stylesheet"
	href="{{ URL::asset('admin/css/icheck/flat/green.css') }}">
<script src="{{ URL::asset('admin/js/jquery-1.11.0.js') }}"></script>
<script src="{{ URL::asset('admin/js/datepicker/jquery.datetimepicker.js') }}"></script> 
<script src="{{ URL::asset('admin/js/dropzone/dropzone.js') }}"></script>
<script src="{{ URL::asset('admin/js/jquery.form.js') }}"></script> 
<script src="{{ URL::asset('admin/js/jquery.isloading.js') }}"></script>
<script src="{{ URL::asset('ckeditor454/ckeditor/ckeditor.js') }}"></script>


<!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>
<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			@include('partials.admin.menu') 
			@include('partials.admin.top')
			<div class="right_col" role="main">
			@yield('content')
				</div>

			<!-- /page content -->
		</div>
		<div>@include('partials.admin.footer')</div>
	</div>
	<div id="custom_notifications" class="custom-notifications dsp_none">
		<ul class="list-unstyled notifications clearfix"
			data-tabbed_notifications="notif-group">
		</ul>
		<div class="clearfix"></div>
		<div id="notif-group" class="tabbed_notifications"></div>
	</div>
	<script src="{{ URL::asset('admin/js/bootstrap.min.js') }}"></script>
	<!-- chart js -->
	<!-- <script src="{{ URL::asset('admin/js/chartjs/chart.min.js') }}"></script> -->
	<!-- bootstrap progress js -->
	<script
		src="{{ URL::asset('admin/js/progressbar/bootstrap-progressbar.min.js') }}"></script>
	<script
		src="{{ URL::asset('admin/js/nicescroll/jquery.nicescroll.min.js') }}"></script>
	<script
		src="{{ URL::asset('admin/js/fileinput.min.js') }}"></script>
	<!-- icheck -->
	<script src="{{ URL::asset('admin/js/custom.js') }}"></script>
	<!-- moris js -->
	<script src="{{ URL::asset('admin/js/moris/raphael-min.js') }}"></script>
	<script src="{{ URL::asset('admin/js/moris/morris.js') }}"></script>
	<script src="{{ URL::asset('admin/js/moris/example.js') }}"></script>
	<script src="{{ URL::asset('admin/js/icheck/icheck.min.js') }}"></script>
	<!-- Datatables -->
	<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
	$(document).on({
	     ajaxStart: function() {  $.isLoading({ text: "Loading..." ,'tpl': '<span class="isloading-wrapper %wrapper%"><img src="/admin/images/load.gif"/></span>',});  },
	     ajaxStop: function() {$.isLoading( "hide" ); }    		
});
</script>
	<script src="{{ URL::asset('admin/js/validator/jquery.validate.js') }}"></script>
</body>

</html>