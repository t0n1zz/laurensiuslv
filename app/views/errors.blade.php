<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Laurensius</title>
        <link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		{{ HTML::style('css/bootstrap.min.css') }}
        {{ HTML::style('css/font-awesome.min.css') }}
        {{ HTML::style('css/animate.min.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::style('css/mystyle.css') }}

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
	</head>
	<body>
	    <!--header-->
        <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner" >
            <div class="container">
                <div class="navbar-header" >
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand shadow" href="http://www.laurensius.esy.es/}"><img src="{{ asset('images/logo2.png') }}"  alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav navbar-right">
                        <li class="shadow"><a href="http://www.laurensius.esy.es/">Blog</a></li>
                        <li class="shadow"><a href="http://www.laurensius.esy.es/jetassault">JetAssault</a></li>
                        <li class="shadow"><a href="http://www.laurensius.esy.es/jetassaultgatekeeper">JetAssault:Gatekeeper</a></li>
                        <li class="shadow"><a href="http://www.laurensius.esy.es/myworld">MYWorld</a></li>
                        <li class="shadow"><a href="http://www.laurensius.esy.es/about">About Me</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <!--/header-->

        <section id="error" class="container">
            <h1><i class="icon-frown icon-2x"></i></h1>
            <h1>404, Page not found</h1>
            <p>The Page you are looking for doesn't exist or an other error occurred.</p>
            <a class="btn btn-success" href="http://www.laurensius.esy.es/">GO BACK TO THE HOMEPAGE</a>
        </section><!--/#error-->

        <!--footer-->
        <footer id="footer" class="midnight-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        &copy; <?php echo date("Y") ?> Laurensius • Developed by <a
                            href="http://www.laurensius.esy.es/about" target="_blank">Laurensius Tony</a> with base template by <a target="_blank"
                            href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>.
                    </div>
                    <div class="col-sm-4">
                        <ul class="pull-right">
                            <li><a href="https://github.com/t0n1zz" target="_blank"><i class="icon-github"></i> Github</a></li>
                            <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--/#footer-->
	<!-- script references -->
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/main.js') }}
	{{ HTML::script('js/myscript.js') }}
	</body>
</html>