@extends('layouts.auth') @section('title') {{ trans('auth.login.title')
}} | {{ trans('admin.title') }} @stop @section('content')
<div id="login" class="animate form">
	<section class="login_content">
		{!! Form::open(['method' => 'POST', 'route' => 'auth.login']) !!}
		<h1>{{Lang::get('properties.login.system')}}</h1>
		<div>@include('errors.validation') {!! Form::text('email', null,
			['class' => 'form-control','placeholder'=>'Username']) !!}</div>
		<div>{!! Form::password('password', ['class' =>
			'form-control','placeholder'=>'Password']) !!}</div>
		<div>
			{!! Form::submit(trans('auth.login.submit'), ['class' => 'btn
			btn-default submit']) !!} 
		</div>
		<div class="clearfix"></div>
		<div class="separator">
			<div>
				<p>©2015 All Rights Reserved
				</p>
			</div>
		</div>
		{!! Form::close() !!}
		<!-- form -->
	</section>
	<!-- content -->
</div>
@endsection
