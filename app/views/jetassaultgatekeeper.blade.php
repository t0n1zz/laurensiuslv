@extends('_layouts.public')

@section('content')
<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <span class="pull-right">
                {{ HTML::image('images/jetassaultgatekeeper.png', 'JetAssault:Gatekeeper Logo', array('class' => 'img-rounded','width' => '100')) }}
            </span>
                <h1>JetAssault:Gatekeeper <small>Version 1.1.1</small></h1>
                <p>Dive into the world where earth once again being invade by alien and to survive we build a shelter to hide us from them and the only way to enter is by going throught portal gate</p>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="center gap">
                    <h3>You once again must protect human race by protecting portal gate from alien attack and destroy every single alien that getting near the gate. You are the last stand, you are the gatekeeper.</h3>
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
                <div class="col-md-3 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Protect the gate from enemy attack</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-3 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">3 game mode</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-3 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Upgradeable part in your jet</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                 <div class="col-md-3 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Powerfull powerups</h3>
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
                    <div class="col-sm-4">
                        {{ HTML::image('images/jetassaultgatekeeper-screenshot1.png', 'Screenshots 1',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                    <div class="col-sm-4">
                        {{ HTML::image('images/jetassaultgatekeeper-screenshot2.png', 'Screenshots 2',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                    <div class="col-sm-4">
                        {{ HTML::image('images/jetassaultgatekeeper-screenshot3.png', 'Screenshots 3',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        {{ HTML::image('images/jetassaultgatekeeper-screenshot4.png', 'Screenshots 4',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                    <div class="col-sm-4">
                        {{ HTML::image('images/jetassaultgatekeeper-screenshot5.png', 'Screenshots 5',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                    <div class="col-sm-4">
                        {{ HTML::image('images/jetassaultgatekeeper-screenshot6.png', 'Screenshots 6',
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
                         <iframe class="shadow" width="100%" height="400" src="//www.youtube.com/embed/qlrrCbWsG1Q?list=UUP57_h23LP5VCFW4Jfj5axg"
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
                        <a href="http://www.windowsphone.com/en-gb/store/app/jetassault-gatekeeper/1043ab29-32c3-4c4e-ae91-63e20d84417f"
                             target="_blank">{{ HTML::image('images/wp_store.png"','WP Store Links', array('align' => 'middle')) }}</a>
                          <br />
                          <br />
                          {{ HTML::image('images/jetassaultgatekeeperQR.png', 'Download QR Code', array('align' => 'middle')) }}
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