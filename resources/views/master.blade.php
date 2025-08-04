<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <style>
        .active{
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">Navbar</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link {{\Request::route()->getName()=='home' ? 'active':''}}">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{route('about')}}" class="nav-link {{\Request::route()->getName()=='about' ? 'active':''}}">About</a>
            </li>
            <li class="nav-item">
                <a href="{{route('contact')}}" class="nav-link {{\Request::route()->getName()=='contact' ? 'active':''}}">Contact</a>
            </li>
            <li class="nav-item">
                <a href="{{route('calculator.form')}}" class="nav-link {{\Request::route()->getName()=='calculator' ? 'active':''}}">Calculator</a>
            </li>

        </ul>
    </div>
</nav>
@yield('content')
<script src="{{asset('/')}}js/bootstrap.js"></script>
</body>
</html>
