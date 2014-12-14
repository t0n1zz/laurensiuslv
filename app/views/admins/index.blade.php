<?php $title = "Dashboard"; ?>
@extends('admins._layouts.admin')

@section('content')
<!-- header -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-dashboard fa-fw"></i> {{$title}}</h1>
    </div>         
</div>
<!-- /header -->
<div class="row">
    <div class="col-lg-12">
	    <div class="jumbotron">
		  <h2>Hello, welcome to Laurensius Admin Site</h2>
		  <p>Here you can update article for Laurensius Site, if you feel like being in the wrong place, then please go back to</p>
		  <p><a class="btn btn-primary btn-lg" role="button" href="{{ route('admins.back') }}"><i class="fa fa-backward "></i> Laurensius Site</a></p>
		</div>
    </div>
</div>

@stop