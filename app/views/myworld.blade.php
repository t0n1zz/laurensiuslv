@extends('_layouts.public')

@section('content')
<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <span class="pull-right">
                {{ HTML::image('images/myworld.png', 'MYWorld Logo', array('class' => 'img-rounded','width' => '100')) }}
            </span>
                <h1>MYWorld <small>Version 1.1.7</small></h1>
                <p>MYWorld is an app for discovering places around you and around the world, you can find place to eat, to hang out, public transportation and so on.</p>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <h3>MYWorld will provide you with complete places information from address to opening hours or a picture or a review from people, that can give you an idea "what's in there", and if you want to go there? </h3>
                    <h3>MYWorld provide with a the best navigation suite in windows phone devices with here maps, here drive and here transit.</h3>
                    <h3>MYWorld also giving you ability to add your own data about places (address,phone,email,opening hours, etc), so there will be no more outdated information.</h3>
                    <h3>And now MYWorld also support discovering event within location powered by eventbrite, so you can discover more interesting thing!</h3>
                </div>
            </div>
            <div class="col-md-12">
                <div class="center gap">
                    <hr/>
                    <h1>Main Features</h1>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">View nearby places from pushpin map or augmented reality view</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">View nearby taken picture from flickr</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">View nearby event from eventbrite</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Rich public transportation data powered by here.com</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Navigation powered by here suite</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                 <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Add places information powered by windows azure</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Pin to start location or places for quick access</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Recent location and favorite places</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                 <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Search location or search nearby places</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Share location or places to social network with elegant picture</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <div class="center">
                        <h2>Screenshots</h2>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-2">
                        {{ HTML::image('images/myworld-screenshot1.png', 'Screenshots 1',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                    <div class="col-sm-2">
                        {{ HTML::image('images/myworld-screenshot2.png', 'Screenshots 2',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                    <div class="col-sm-2">
                        {{ HTML::image('images/myworld-screenshot3.png', 'Screenshots 3',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                    <div class="col-sm-2">
                        {{ HTML::image('images/myworld-screenshot4.png', 'Screenshots 4',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                    <div class="col-sm-2">
                        {{ HTML::image('images/myworld-screenshot5.png', 'Screenshots 5',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                    <div class="col-sm-2">
                        {{ HTML::image('images/myworld-screenshot6.png', 'Screenshots 6',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <div class="center">
                        <h2>Videos</h2>
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-md-push-3 col-md-6">
                         <iframe class="shadow" width="100%" height="400" src="//www.youtube.com/embed/IRDoMOrHrzA?list=UUP57_h23LP5VCFW4Jfj5axg"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <div class="center">
                        <h2>Download</h2>
                    </div>
                </div>
                <hr/>
                <div class="col-md-12">
                    <div class="center">
                        <a href="http://www.windowsphone.com/en-gb/store/app/myworld/c49186f5-2161-4875-a3a9-89538a066605"
                             target="_blank">{{ HTML::image('images/wp_store.png"','WP Store Links', array('align' => 'middle')) }}</a>
                          <br />
                          <br />
                          {{ HTML::image('images/myworldQR.png', 'Download QR Code', array('align' => 'middle')) }}
                    </div>
                </div>
             </div>
             <hr>
             <div class="row">
                 <div class="col-lg-12">
                     <div class="center">
                         <h2>Updates Information</h2>
                     </div>
                     <div class="gap"></div>
                     <div class="row">
                        @if(!empty($posts))
                            <div class="col-sm-12">
                                @foreach($posts as $post)
                                <blockquote>
                                    <?php $date = new Date($post->created_at); ?>
                                    <h3>{{ link_to_route('post', $post->judul, array($post->id)) }} <small>{{ $date->format('l, j F Y, H:i:s') }}</small></h3>
                                    <p style="font-size: small">{{{ str_limit(preg_replace('/(<.*?>)|(&.*?;)/', '', $post->content),600) }}}</p>
                                    <hr/>
                                    <a class="btn btn-sm btn-default" href="{{ route('post', array($post->id)) }}">Read More <i class="icon-angle-right"></i></a>
                                 <blockquote>
                                @endforeach
                            </div>
                        @else
                            <div class="col-sm-12">
                                <blockquote>
                                    <p>No update yet...</p>
                                <blockquote>
                            </div>
                        @endif
                     </div>
                 </div>
             </div>
        </div>
    </div>
</section>

@stop