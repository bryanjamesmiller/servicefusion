<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title','Service Fusion project')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Service Fusion Application</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/records">All Records</a></li>
                <li><a href="/records/create">Create a New Record</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" id="my_container">
    <div class="jumbotron">
        <h1>@yield('header')</h1>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session()->has('flash_message'))
        <div class="container">
            <div class="row">
                <div class="col-xs-10 alert alert-message alert-message-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4>Alert Message</h4>
                    <p id="flash_message">{!! Session::pull('flash_message') !!}</p>
                </div>
            </div>
        </div>
    @endif
    @yield('content')
</div>

<footer class="container-fluid">
    <div class="col-xs-12">
        <h3>Web app created by:</h3>
        <p>Bryan Miller<br>
            <a href="mailto:bryanjamesmiller@g.harvard.edu" target="_top">bryanjamesmiller@g.harvard.edu</a><br>
            901-605-7007</p>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/js/menu_highlight.js"></script>
@yield('extra_js')
</body>
</html>