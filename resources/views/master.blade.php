<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">Navbar</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{route('about')}}" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="{{route('contact')}}" class="nav-link">Contact</a>
            </li>

        </ul>
    </div>
</nav>
<section class="py-5 bg-danger-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4 text-center text-white">Welcome to Laravel</h1>
            </div>
        </div>
    </div>

</section>
<script src="{{asset('/')}}js/bootstrap.js"></script>
</body>
</html>
