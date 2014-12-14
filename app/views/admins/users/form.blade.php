
<div class="panel panel-default">
<!--button-->
<div class="panel-heading tooltip-demo">
	<button type="submit" name="simpan" class="btn btn-default" data-toggle ='tooltip'
	    data-placement='top' title ='Menyimpan informasi admin' value="simpan"><i class="fa fa-save"></i> Simpan</button>

	<button type="submit" name="batal" class="btn btn-default" data-toggle ='tooltip'
	    data-placement='top' title ='Batal menyimpan informasi admin dan kembali ke halaman kelola admin' value="batal"><i class="fa fa-times-circle"></i> Batal</button>
	<!--<a href="{{ URL::previous() }}" class="btn btn-default">Batal</a>-->
</div>
<!--/button-->
<div class="panel-body">
    <!--username-->
    <div class="col-lg-10">
    <div class="form-group">
        {{ Form::label('Username') }}
        {{ Form::text('username',null,array('class' => 'form-control', 'placeholder' => 'Silahkan masukkan username', 'readonly'))}}
        {{ $errors->first('username', '<p class="text-warning"><i>:message</i></p>') }}
    </div>
    </div>
    <!--/username-->
    <!--name-->
    <div class="col-lg-10">
    <div class="form-group">
        {{ Form::label('Nama') }}
        {{ Form::text('name',null,array('class' => 'form-control', 'placeholder' => 'Silahkan masukkan nama admin'))}}
        {{ $errors->first('name', '<p class="text-warning"><i>:message</i></p>') }}
    </div>
    </div>
    <!--/name-->
    <hr/>
    <!--password lama-->
    <div class="col-lg-10">
    <div class="form-group">
        {{ Form::label('Password Lama') }}
        {{ Form::password('oldpassword',array('class' => 'form-control','placeholder' => 'Silahkan masukkan password lama admin ini'))}}
        {{ $errors->first('oldpassword', '<p class="text-warning"><i>:message</i></p>') }}
    </div>
    </div>
    <!--/password lama-->
    <!--password baru-->
    <div class="col-lg-10">
    <div class="form-group">
        {{ Form::label('Password Baru') }}
        {{ Form::password('password',array('class' => 'form-control','placeholder' => 'Silahkan masukkan password baru admin ini'))}}
        {{ $errors->first('password', '<p class="text-warning"><i>:message</i></p>') }}
    </div>
    </div>
    <!--/password baru-->
</div>
</div>