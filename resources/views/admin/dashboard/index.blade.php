@extends('layouts.admin', ['no_boxes' => true]) 
@section('title',"Home"))
@section('content') {!!
Breadcrumbs::render('home') !!}
<br />
<div class="">
	<div class="row top_tiles"></div>
</div>
@endsection
