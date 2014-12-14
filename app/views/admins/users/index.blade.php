<?php 
	$title = "Kelola Admin";
?>

@extends('admins._layouts.admin')

@section('content')
<!-- header -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-user fa-fw"></i> {{$title}}</h1>
    </div>         
</div>
<!-- /header -->
<div class="row">
    <div class="col-lg-12 ">
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
		<div class="panel panel-default">
		    <div class="panel-heading tooltip-demo">

		    </div>
		    <!-- /.panel-heading -->
		    <div class="panel-body tooltip-demo">
		    <div class="table-responsive">
		    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
		        <thead>
		            <tr>
		                <th>No.</th>
		                <th>Nama</th>
		                <th>Username</th>
		            </tr>
		        </thead>
		        <tbody>
		        <?php $i=0; ?>
		        @foreach($users as $user)
		        <?php $i++ ?>
		        <tr>
		        	<td><a data-toggle="tooltip" data-placement="top"
                            title="Tekan untuk mengubah informasi user ini"
                            href="{{route('admins.users.edit', array($user->id))}}"
                            >{{ $i }}</a></td>

				    @if(!is_null($user->name))
                        <td><a data-toggle="tooltip" data-placement="top"
                            title="Tekan untuk mengubah informasi user ini"
                            href="{{route('admins.users.edit', array($user->id))}}"
                            >{{ $user->name }}</a></td>
                    @else
                        <td><a data-toggle="tooltip" data-placement="top"
                            title="Tekan untuk mengubah informasi user ini"
                            href="{{route('admins.users.edit', array($user->id))}}"
                            >-</a></td>
                    @endif

                    @if(!is_null($user->username))
                        <td><a data-toggle="tooltip" data-placement="top"
                            title="Tekan untuk mengubah informasi user ini"
                            href="{{route('admins.users.edit', array($user->id))}}"
                            >{{ $user->username }}</a></td>
                    @else
                        <td><a data-toggle="tooltip" data-placement="top"
                            title="Tekan untuk mengubah informasi user ini"
                            href="{{route('admins.users.edit', array($user->id))}}"
                            >-</a></td>
                    @endif
		        </tr>
				@endforeach

		        </tbody>
		    </table>
		    </div>
		    </div>
		    <!-- /.panel-body -->
		</div>
	</div>
</div>
@stop