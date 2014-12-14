@extends('_layouts.public')

@section('content')
<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>About Me</h1>
                <p>A little information about myself</p>
            </div>
        </div>
    </div>
</section>

<section id="services" class="container">
    <div class="row">
        <div class="row">
            <div class="col-sm-5">
                <div id="meet-the-team" class="row">
                    <div class="center">
                        <p><img class="img-responsive img-thumbnail img-circle" src="{{ asset('images/me.jpg') }}" alt="" ></p>
                        <h5>Laurensius Tony<small class="designation muted">Publication IT, Unity3D Game Developer & Windows Phone Developer</small></h5>
                        <a class="btn btn-social btn-facebook" href="https://www.facebook.com/tony.doangzz" target="_blank">
                            <i class="icon-facebook"></i></a>
                        <a class="btn btn-social btn-google-plus" href="https://plus.google.com/u/0/108100311371354375575" target="_blank">
                            <i class="icon-google-plus"></i></a>
                        <a class="btn btn-social btn-twitter" href="https://twitter.com/t0n1zz" target="_blank">
                            <i class="icon-twitter"></i></a>
                        <a class="btn btn-social btn-linkedin" href="https://www.linkedin.com/in/t0n1zz" target="_blank">
                            <i class="icon-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <h2>Skills</h2>
                <div>
                    <div class="progress shadow">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                            <span>HTML/CSS</span>
                        </div>
                    </div>
                    <div class="progress shadow">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span>PHP</span>
                        </div>
                    </div>
                    <div class="progress shadow">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            <span>Adobe Photoshop, Illustrator & Indesign</span>
                        </div>
                    </div>
                    <div class="progress shadow">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                            <span>Unity 3D & Windows Phone Development (c#)</span>
                        </div>
                    </div>
                    <div class="progress shadow">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                            <span>Laravel & Bootstrap Framework</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="center gap">
                <hr/>
                <h1>Education History</h1>
                <hr/>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-book icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Gembala Baik Kindergarden <small>1996 - 1998</small></h3>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-book icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Gembala Baik Elementary School <small>1998 - 2004</small></h3>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-book icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Gembala Baik Junior High School <small>2004 - 2007</small></h3>
                    </div>
                </div>
            </div><!--/.col-md-4-->
        </div>
        <div class="gap"></div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-book icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Gembala Baik Senior High School <small>2007 - 2010</small></h3>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-book icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">Widya Dharma College Information Systems Majors <small>2010 - 2014</small></h3>
                    </div>
                </div>
            </div><!--/.col-md-4-->
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                <div class="center">
                    <h2>Achievement</h2>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            {{ HTML::image('images/lumiaappsolympiad.jpg', 'LumiaAppsOlympiad',
                                array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><a href="http://nice.or.id/niceevents/2012/12/18/inilah-pemenang-lumia-apps-olympiad/"
                                                         target="_blank"
                                                         >3rd Place LumiaAppOlympiad <br/><small>18 December 2012</small></a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                              {{ HTML::image('images/bizspark_startup.jpg', 'Bizspark',
                                    array('class' => 'img-responsive img-thumbnail shadow','width' => '100%')) }}
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading"><a href="https://www.microsoft.com/bizspark/startup/profile.aspx?startup=281888"
                                                              target="_blank"
                                                              >Member Of BizSpark Startup <br/><small>11 December 2013</small></a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop