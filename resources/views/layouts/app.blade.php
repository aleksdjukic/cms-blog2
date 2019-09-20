<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MVC-BLOG</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body id="app-layout">
<nav class="navbar navbar-expand-lg navbar-dark rounded">
    <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">MVC-BLOG</a>
    <ul class="navbar-nav mr-auto">
        @if(Auth::check())
        @if(Auth::user())
        <li class="nav-item">
            <a href="{{ url('/home') }}" class="nav-link">Dashboard</a>
        </li>
        @endif()
        @endif
        <li class="nav-item">
            <a href="{{route('users.posts.create')}}" class="nav-link">Create post</a>
        </li>

    </ul>

    <ul class="navbar-nav ml-auto">
        @if(Auth::user())
        <li> <img class="img-profile" src="{{ \Illuminate\Support\Facades\Auth::user()->photo ? url('img/'.Auth::user()->photo->path) : 'http://placehold.it/50x50' }}"></li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('user.profile', \Illuminate\Support\Facades\Auth::user())}}">Profile</a>
                <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
            </div>

        </li>
            @else
            <li class="nav-item">
                <a href="{{ url('/login') }}" class="nav-link">Login</a>
            </li>

        @endif
    </ul>
    </div>
</nav>


@yield('content')

<!-- JavaScripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
