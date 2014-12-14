@extends('_layouts.public')

@section('content')
<div class="col-sm-12" id="stories">
  <h1>Creation</h1>
</div>

<div class="col-sm-12" id="stories">
  <div class="page-header text-muted divider">
    These are some of my creation
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <a href="{{ route('jetassault') }}">
    <div class="media">
      <span class="pull-left">
        <img src="{{ asset('images/jetassault.png') }}" alt="JetAssault Logo" class="img-rounded" width="100">
      </span>
      <div class="media-body">
        <hr />
        <h1 class="media-heading">JetAssault <small>XNA Windows Phone Game</small></h1>
      </div>
   </div>
   </a>
  </div>
</div>
<br />
<div class="row">
  <div class="col-sm-12">
  <a href="{{ route('jetassaultgatekeeper') }}">
    <div class="media">
      <span class="pull-left">
        <img src="{{ asset('images/jetassaultgatekeeper.png') }}" alt="JetAssault Logo" class="img-rounded" width="100">
      </span>
      <div class="media-body">
        <hr />
        <h1 class="media-heading">JetAssault:Gatekeeper <small>Unity3D Windows Phone Game</small></h1>
      </div>
   </div>
    </a>
  </div>
</div>
<br />
<div class="row">
  <div class="col-sm-12">
    <a href="{{ route('myworld') }}">
    <div class="media">
      <span class="pull-left">
        <img src="{{ asset('images/myworld.png') }}" alt="JetAssault Logo" class="img-rounded" width="100">
      </span>
      <div class="media-body">
        <hr />
        <h1 class="media-heading">MYWorld <small>Places Discovery App For Windows Phone</small></h1>
      </div>
   </div>
   </a>
  </div>
</div>

@stop