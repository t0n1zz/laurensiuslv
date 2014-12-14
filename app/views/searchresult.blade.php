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
                <div class="blog-item shadow">
                    <div class="blog-content">
                         <h3>search result for <i>{{ $key }}</i></h3>
                    </div>
                </div>
                @if($posts->isEmpty())
                    <div class="blog-item shadow">
                        <div class="blog-content">
                             <h2>No article found, please try another keyword...</h2>
                        </div>
                    </div>
                @else
                    @foreach($posts as $post)
                        <div class="blog-item shadow">
                            @if(!empty($post->gambar))
                                <a href="{{ route('post', array($post->id)) }}">
                                    {{ HTML::image('images_artikel/'.$post->gambar, $post->gambar,array('class' => 'img-responsive img-blog')) }}
                                </a>
                            @endif
                            <div class="blog-content">
                                <a href="blog-item.html"><h3>{{ link_to_route('post', $post->judul, array($post->id)) }}</h3></a>
                                <div class="entry-meta">
                                    <?php $date = new Date($post->created_at); ?>
                                    <span><i class="icon-calendar"></i> {{ $date->format('l, j F Y, H:i:s') }}</span>
                                    <span><i class="icon-folder-close"></i> <a
                                             href="{{ route('kategori', array($post->kategoriartikel->id)) }}">{{$post->kategoriartikel->name}}</a>
                                    </span>
                                </div>
                                <p>{{{ str_limit(preg_replace('/(<.*?>)|(&.*?;)/', '', $post->content),600) }}}</p>
                                <hr/>
                                <a class="btn btn-default" href="{{ route('post', array($post->id)) }}">Read More <i class="icon-angle-right"></i></a>
                            </div>
                        </div><!--/.blog-item-->
                    @endforeach
                @endif
                <!-- pagination -->
                {{ $posts->links() }}
                <!-- /pagination -->
            </div>
        </div><!--/.col-md-8-->
    </div><!--/.row-->
</section>
<!--stories-->
@stop