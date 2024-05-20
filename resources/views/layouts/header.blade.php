<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('assests/plugins/slim.min.js')}}"></script>
    <script src="{{ asset('assests/plugins/umd/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assests/plugins/bootstrap.min.js')}}"></script>
    <script src="https://kit.fontawesome.com/50556b7bc1.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assests/plugins/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('title')
</head>
<body>
    @if (Route::has('')) 
        <x-header title="Home"/>
    @endif
    <nav
        class="nav justify-content-center  "
    >
        <a class="nav-link active" href="{{url('/')}}" aria-current="page">Home</a>
        <a class="nav-link" href="{{url('/userLists')}}">UserList</a>
        <a class="nav-link disabled" href="#">Disabled link</a>
    </nav>
    