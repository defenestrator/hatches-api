<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hatch.es</title>
    <!-- Bootstrap -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<section class="content-body container-fluid">
    <div class="row">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img alt="Brand" src="/img/fly.png"/></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="/auth/login">Login</a></li>
                        <li><a href="/auth/register">Register</a></li>
                    @else
                        <li><a href="/trip-reports/">Trips</a></li>
                        <li><a href="/hatch-reports/">Hatches</a></li>
                        {{--<li><a href="fisheries/">Fisheries</a></li>--}}
                        {{--<li><a href="flyboxes/">Boxes</a></li>--}}
                        {{--<li><a href="fly-patterns/">Patterns</a></li>--}}
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/auth/logout">Logout</a></li>
                                <li><a href="profile">Profile</a></li>
                            </ul>

                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
    <section class="content-main">
        {{--<div class="row">--}}
        {{--<div class="col-md-10 col-md-offset-2 action-strip">--}}
        {{--<div class="btn-block">--}}
        {{--<div class="btn-group" role="group">--}}
        {{--<button type="button" class="btn btn-primary"><a href="trip-reports">Trips</a></button>--}}
        {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"--}}
        {{--aria-expanded="false">--}}
        {{--<span class="caret"></span>--}}
        {{--<span class="sr-only">Toggle Dropdown</span>--}}
        {{--</button>--}}
        {{--<ul class="dropdown-menu" role="menu">--}}
        {{--<li></li>--}}
        {{--<li><a href="trip-reports/new">New Report</a></li>--}}
        {{--<li class="divider"></li>--}}
        {{--<li><a href="Related">Related Reports</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="btn-group" role="group">--}}
        {{--<button type="button" class="btn btn-primary">Hatch Reports</button>--}}
        {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"--}}
        {{--aria-expanded="false">--}}
        {{--<span class="caret"></span>--}}
        {{--<span class="sr-only">Toggle Dropdown</span>--}}
        {{--</button>--}}
        {{--<ul class="dropdown-menu" role="menu">--}}
        {{--<li><a href="#">Action</a></li>--}}
        {{--<li><a href="#">Another action</a></li>--}}
        {{--<li><a href="#">Something else here</a></li>--}}
        {{--<li class="divider"></li>--}}
        {{--<li><a href="#">Separated link</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="btn-group" role="group">--}}
        {{--<button type="button" class="btn btn-primary">Fisheries</button>--}}
        {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"--}}
        {{--aria-expanded="false">--}}
        {{--<span class="caret"></span>--}}
        {{--<span class="sr-only">Toggle Dropdown</span>--}}
        {{--</button>--}}
        {{--<ul class="dropdown-menu" role="menu">--}}
        {{--<li><a href="#">Action</a></li>--}}
        {{--<li><a href="#">Another action</a></li>--}}
        {{--<li><a href="#">Something else here</a></li>--}}
        {{--<li class="divider"></li>--}}
        {{--<li><a href="#">Separated link</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="btn-group" role="group">--}}
        {{--<button type="button" class="btn btn-primary">Fly Patterns</button>--}}
        {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"--}}
        {{--aria-expanded="false">--}}
        {{--<span class="caret"></span>--}}
        {{--<span class="sr-only">Toggle Dropdown</span>--}}
        {{--</button>--}}
        {{--<ul class="dropdown-menu" role="menu">--}}
        {{--<li><a href="#">Action</a></li>--}}
        {{--<li><a href="#">Another action</a></li>--}}
        {{--<li><a href="#">Something else here</a></li>--}}
        {{--<li class="divider"></li>--}}
        {{--<li><a href="#">Separated link</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="btn-group" role="group">--}}
        {{--<button type="button" class="btn btn-primary">Fly Boxes</button>--}}
        {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"--}}
        {{--aria-expanded="false">--}}
        {{--<span class="caret"></span>--}}
        {{--<span class="sr-only">Toggle Dropdown</span>--}}
        {{--</button>--}}
        {{--<ul class="dropdown-menu" role="menu">--}}
        {{--<li><a href="#">Action</a></li>--}}
        {{--<li><a href="#">Another action</a></li>--}}
        {{--<li><a href="#">Something else here</a></li>--}}
        {{--<li class="divider"></li>--}}
        {{--<li><a href="#">Separated link</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="btn-group" role="group">--}}
        {{--<button type="button" class="btn btn-primary">Fish Species</button>--}}
        {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"--}}
        {{--aria-expanded="false">--}}
        {{--<span class="caret"></span>--}}
        {{--<span class="sr-only">Toggle Dropdown</span>--}}
        {{--</button>--}}
        {{--<ul class="dropdown-menu" role="menu">--}}
        {{--<li><a href="#">Action</a></li>--}}
        {{--<li><a href="#">Another action</a></li>--}}
        {{--<li><a href="#">Something else here</a></li>--}}
        {{--<li class="divider"></li>--}}
        {{--<li><a href="#">Separated link</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="btn-group" role="group">--}}
        {{--<button type="button" class="btn btn-primary">Uploads</button>--}}
        {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"--}}
        {{--aria-expanded="false">--}}
        {{--<span class="caret"></span>--}}
        {{--<span class="sr-only">Toggle Dropdown</span>--}}
        {{--</button>--}}

        {{--</div>--}}
        {{--<div class="btn-group" role="group">--}}
        {{--<button type="button" class="btn btn-primary">Profile</button>--}}
        {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"--}}
        {{--aria-expanded="false">--}}
        {{--<span class="caret"></span>--}}
        {{--<span class="sr-only">Toggle Dropdown</span>--}}
        {{--</button>--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--</div>--}}
        <hr class="top-separator"/>
        <div class="row">
            @yield('content')
        </div>
</section>
<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
