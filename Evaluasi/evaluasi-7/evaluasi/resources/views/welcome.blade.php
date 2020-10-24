<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


</html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
    html,
    body {
        background-color: #ebe6df;
        color: #636b6f;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .navbar {
        color: #636b6f;
        font-family: Arial, Helvetica, sans-serif;
    }

    .ayam {
        color: #001489;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>




<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="/image/favicon.ico" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        <a class="navbar-brand" href="/">all</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">News<span class="sr-only"></span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Biografy</a>
                        <a class="dropdown-item" href="#">Bundesliga</a>
                        <a class="dropdown-item" href="#">Champions</a>
                        <a class="dropdown-item" href="#">Eredivise</a>
                        <a class="dropdown-item" href="#">La Liga</a>
                        <a class="dropdown-item" href="#">Ligue 1</a>
                        <a class="dropdown-item" href="#">Seria A</a>
                        <a class="dropdown-item" href="#">Timnas</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <div>
                    @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                        <a href="{{ url('/home') }}">Admin</a>
                        @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                    @section('content')
                </div>
            </form>

        </div>
    </nav>

    <div class="container">
        <div class="row">
            @foreach($articles as $article)
            <div class="col-8">
                <div class="card mt-3 mb-3">
                    <img src="/image/{{$article->thumbnail}}" class="card-img-top" alt="card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->category }}</h5>
                        <p class="card-text">{{ ucfirst($article->title) }}.</p>
                        <a href="/{{$article->slug}}" class=" stretched-link float-sm-left"></a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h1>Iklan</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>