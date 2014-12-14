<?php $title="Tambah Artikel"; ?>
@extends('admins._layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-plus"></i> {{$title}}</h1>
    </div>         
</div>
<div class="row">
    <div class=" col-lg-12">
	@if($errors->has())
	    <div class="alert alert-warning alert-dismissible" role="alert">
	    <button type="button" class="close" data-dismiss="alert"><span 
	                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <p>Oops terjadi kesalahan!</p>
	    </div>
	@endif

    @if(Session::has('message'))
        <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif

    @if(Session::has('errormessage'))
        <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p>{{ Session::get('errormessage') }}</p>
        </div>
    @endif

	{{ Form::open(array('route' => array('admins.artikels.store'), 'files' => true)) }}
		@include('admins.artikels.form')
	{{ Form::close() }}
	
	</div>
</div>
@stop