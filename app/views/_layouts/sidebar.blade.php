<?php $kategories = KategoriArtikel::all(); ?>
<aside class="col-sm-4 col-sm-push-8">
    <div class="widget search">
        {{ Form::open(array('route' => array('search'),'method' => 'get')) }}
            <div class="input-group">
                <input type="text" class="form-control" autocomplete="off" placeholder="Search the blog" name="q">
                <span class="input-group-btn">
                    <button class="btn btn-danger" type="button"><i class="icon-search"></i></button>
                </span>
            </div>
        {{ Form::close() }}
    </div><!--/.search-->

    <div class="widget ads">
        <div class="row">
            <div class="col-xs-12">
                <h3>Windows Phone Apps</h3>
            </div>
            <div class="col-xs-4">
                <a href="{{ route('jetassault') }}"><img class="img-responsive img-rounded shadow" src="{{ asset('images/jetassault.png') }}" alt=""></a>
            </div>
            <div class="col-xs-4">
                <a href="{{ route('jetassaultgatekeeper') }}"><img class="img-responsive img-rounded shadow" src="{{ asset('images/jetassaultgatekeeper.png') }}" alt=""></a>
            </div>
            <div class="col-xs-4">
                <a href="{{ route('myworld') }}"><img class="img-responsive img-rounded shadow" src="{{ asset('images/myworld.png') }}" alt=""></a>
            </div>
        </div>
    </div><!--/.ads-->

    <div class="widget categories">
        <h3>Blog Categories</h3>
        <div class="row">
            <div class="col-sm-6">
                <ul class="arrow">
                    @foreach($kategories as $kategori)
                        <li>{{ link_to_route('kategori',$kategori->name, array($kategori->id)) }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div><!--/.categories-->

</aside>