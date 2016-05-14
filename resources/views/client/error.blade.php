@extends('layouts.client') 
@section('content')
<div class="text-left">
	<div class="box-content hidden-phone">
		<div class="box-product row-fluid">
			@if(Session::has('error'))
			<div>{{Session::get('error')}}</div>
			@endif 
		</div>
	</div>
</div>
@endsection