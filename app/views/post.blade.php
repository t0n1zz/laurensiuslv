@extends('_layouts.public')

@section('content')
<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Blog</h1>
                <p>Welcome to my blog, here i will post my apps updates and some other stuff <i class="icon-smile"></i></p>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="container">
    <div class="row">
        @include('_layouts.sidebar')
        <div class="col-sm-8 col-sm-pull-4">
            <div class="blog">
                <div class="blog-item">
                    @if(is_null($post))
                        <div class="blog-content">
                           <h3>No article in this category, please check another article...</h3>
                        </div>
                    @else
                        @if(!empty($post->gambar))
                            {{ HTML::image('images_artikel/'.$post->gambar, $post->gambar, array('class' => 'img-responsive img-blog')) }}
                        @endif
                        <div class="blog-content">
                            <h3>{{ $post->judul }}</h3>
                            <div class="entry-meta">
                                <?php $date = new Date($post->created_at); ?>
                                <span><i class="icon-calendar"></i> {{ $date->format('l, j F Y, H:i:s') }}</span>
                                @if(!empty($post->kategoriartikel->id))
                                <span><i class="icon-folder-close"></i> <a
                                         href="{{ route('kategori', array($post->kategoriartikel->id)) }}">{{$post->kategoriartikel->name}}</a>
                                </span>
                                @endif
                            </div>
                            <p>{{$post->content}}</p>
                            <hr />
                        </div>
                    @endif
                </div><!--/.blog-item-->
            </div>
        </div><!--/.col-md-8-->
    </div><!--/.row-->
</section>
@stop