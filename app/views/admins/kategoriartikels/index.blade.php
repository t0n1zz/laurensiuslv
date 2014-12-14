<?php 
	$title = "Kelola Kategori Artikel";
?>

@extends('admins._layouts.admin')

@section('content')
<!-- header -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-archive"></i> {{$title}}</h1>
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
	    @if($errors->has())
            <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <p>Oops terjadi kesalahan!</p>
            </div>
        @endif
		<div class="panel panel-default">
		    <div class="panel-heading tooltip-demo">
		    <form class="form-inline" role="form" action="tampil_artikel.php">
		        <div class="form-group">
		            <a type="button" data-toggle="tooltip" data-placement="top" 
		                title="Tekan untuk menambah kategori artikel baru"
		                class="btn btn-default modal1" href="#"><i class="fa fa-plus"></i> Tambah Kategori Artikel</a>
		        </div>
		    </form>
		    </div>
		    <!-- /.panel-heading -->
		    <div class="panel-body tooltip-demo">
		    <div class="table-responsive">
		    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
		        <thead>
		            <tr>
		                <th>No.</th>
		                <th>Nama Kategori </th>
		                <th>Jumlah Artikel</th>
		                <th>Hapus</th>
		            </tr>
		        </thead>
		        <tbody>
		        <?php $i=0; ?>
		        @foreach($kategori_artikels as $kategori_artikel)
		        <?php $i++ ?>
		        <tr>
		        	<td><a data-toggle="tooltip" data-placement="top"
                            title="Tekan untuk mengubah nama kategori artikel ini"
                            href="{{route('admins.kategoriartikels.edit', array($kategori_artikel->id))}}"
                            >{{ $i }}</a></td>

				    @if(!is_null($kategori_artikel->name))
                        <td><a data-toggle="tooltip" data-placement="top"
                            title="Tekan untuk mengubah nama kategori artikel ini"
                            href="#" class="modal3" name={{ $kategori_artikel->id }}
                            >{{ $kategori_artikel->name }}</a></td>
                    @else
                        <td><a data-toggle="tooltip" data-placement="top"
                            title="Tekan untuk mengubah nama kategori artikel ini"
                            href="#" class="modal3" name={{ $kategori_artikel->id }}
                            >-</a></td>
                    @endif

                    @if($kategori_artikel->jumlah > 0)
                        <td><a data-toggle="tooltip" data-placement="top"
                                title="Tekan untuk melihat aritkel pada kategori ini"
                                href="{{route('admins.artikels.index_kategori', array($kategori_artikel->id))}}"
                                >{{ $kategori_artikel->jumlah }}</a></td>
                    @else
                        <td>{{ $kategori_artikel->jumlah }}</td>
                    @endif

			        @if(!empty($kategori_artikel->id))
			            <td><button class="btn btn-default modal2"
		                    name="{{ $kategori_artikel->id }}"
		                    data-toggle="tooltip" data-placement="top" 
		                    title="Tekan untuk menghapus kategori artikel ini" ><span
		                    class="glyphicon glyphicon-trash"></span></button></td>
		            @else
		                <td><button class="btn btn-default modal2"
                            name="{{ $kategori_artikel->id }}"
                            data-toggle="tooltip" data-placement="top"
                            title="Tekan untuk menghapus kategori artikel ini" disabled><span
                            class="glyphicon glyphicon-trash"></span></button></td>
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

    <!-- modal -->
    <!-- tambah -->
    <div class="modal fade" id="modal1show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       {{ Form::model($kategori_artikels, array('route' => array('admins.kategoriartikels.store'), 'method' => 'post')) }}
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title ">Status Artikel</h4>
            </div>
            <div class="modal-body">
              <strong>Mengubah status artikel</strong>
              <br />
              <br />
                    <input type="text" name="id" value="" id="modal1id" hidden>
                    {{ Form::text('name',null,array('class' => 'form-control', 'placeholder' => 'Silahkan masukkan nama kategori artikel'))}}
               <br />
               <br />
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" name="btnstatus"
                    id="modalbutton">Ok</button>
              <button type="button" class="btn btn-default" data-dismiss="modal"> Batal</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
       {{ Form::close() }}
    </div>
    <!-- /tambah -->
    <!-- Hapus -->
    <div class="modal fade" id="modal2show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       {{ Form::model($kategori_artikels, array('route' => array('admins.kategoriartikels.destroy'), 'method' => 'delete')) }}
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Hapus Kategori Artikel</h4>
            </div>
            <div class="modal-body">
              <strong style="font-size: 16px">Menghapus kategori artikel ini?</strong>
              <blockquote>
                <p class="text-warning" style="font-size: 16px">
                    <span class="fa fa-warning"
                    ></span> Peringatan : anda harus memastikan tidak terdapat artikel yang menggunakan kategori artikel ini.
                </p>
              </blockquote> 
              <input type="text" name="id" value="" id="modal2id" hidden>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-danger" name="btnhapus"
                    id="modalbutton">Ok</button>
              <button type="button" class="btn btn-default" data-dismiss="modal"> Batal</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
       {{ Form::close() }}
    </div>
    <!-- /Hapus -->
    <!-- ubah -->
    <div class="modal fade" id="modal3show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    {{ Form::model($kategori_artikels, array('route' => array('admins.kategoriartikels.update'), 'method' => 'put')) }}
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title ">Ubah Kategori Artikel</h4>
            </div>
            <div class="modal-body">
              <strong>Mengubah kategori artikel</strong> 
              <br />
              <br />
                    <input type="text" name="id" value="" id="modal3id" hidden>
                    {{ Form::text('name',null,array('class' => 'form-control', 'placeholder' => 'Silahkan masukkan nama kategori artikel baru'))}}
               <br />
               <br />
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary" name="btnkategori"
                    id="modalbutton">Ok</button>
              <button type="button" class="btn btn-default" data-dismiss="modal"> Batal</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
       {{ Form::close() }}
    </div>
    <!-- /ubah -->
    <!-- /.modal -->

@stop