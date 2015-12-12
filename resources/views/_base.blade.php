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

<div class="container">
    <div class="jumbotron">
        <h1>@yield('header')</h1>
    </div>
    @yield('content')
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="/js/custom.js"></script>
</body>
</html>