@extends('_layouts.public')

@section('content')
<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
            <span class="pull-right">
                {{ HTML::image('images/jetassault.png', 'JetAssault Logo', array('class' => 'img-rounded','width' => '100')) }}
            </span>
                <h1>JetAssault <small>Version 2.1</small></h1>
                <p>Be ready to navigate high tech jet to save the earth and destroy as many as alien jet that you can destroy</p>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="center gap">
                    <h3>Jet Assault is an arcade shooter game where player will control high tech alien jet with touching screen using fingger or using accelerometer input to fight against alien jet that trying to invade earth</h3>
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
                            <h3 class="media-heading">Drive high tech jet with your finger or using accelerometer</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Upgradeable health and projectile level</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Upgradeable special weapon and shieldl</h3>
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
                            <h3 class="media-heading">One against hundred of alien jets</h3>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-star icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Many challenging level</h3>
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
                        {{ HTML::image('images/jetassault-screenshoot1.png', 'Screenshots 1',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                    <div class="col-sm-4">
                        {{ HTML::image('images/jetassault-screenshoot2.png', 'Screenshots 2',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                    <div class="col-sm-4">
                        {{ HTML::image('images/jetassault-screenshoot3.png', 'Screenshots 3',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        {{ HTML::image('images/jetassault-screenshoot4.png', 'Screenshots 4',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                    <div class="col-sm-4">
                        {{ HTML::image('images/jetassault-screenshoot5.png', 'Screenshots 5',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                    <div class="col-sm-4">
                        {{ HTML::image('images/jetassault-screenshoot6.png', 'Screenshots 6',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        {{ HTML::image('images/jetassault-screenshoot7.png', 'Screenshots 7',
                            array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                    </div>
                    <div class="col-sm-4">
                        {{ HTML::image('images/jetassault-screenshoot8.png', 'Screenshots 8',
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
                    <div class="col-md-4">
                         <iframe class="shadow" width="100%" height="300" src="//www.youtube.com/embed/5sNPag59PPM?list=UUP57_h23LP5VCFW4Jfj5axg"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4">
                        <iframe class="shadow" width="100%" height="300" src="//www.youtube.com/embed/lJ5sEn9xVWk?list=UUP57_h23LP5VCFW4Jfj5axg"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-4">
                        <iframe class="shadow" width="100%" height="300" src="//www.youtube.com/embed/Dvpfcf1w9gc?list=UUP57_h23LP5VCFW4Jfj5axg"
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
                        <a href="http://www.windowsphone.com/en-gb/store/app/jetassault/3e03678f-5d29-4196-8860-843c04fae817"
                             target="_blank">{{ HTML::image('images/wp_store.png"','WP Store Links',
                             array('align'=>'middle')) }}</a>
                          <br />
                           <br />
                          {{ HTML::image('images/jetassaultQR.jpg', 'Download QR Code', array('align'=>'middle')) }}
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