<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Style -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="position-ref full-height">
        <div class="row mb-3 mt-3 mr-5 justify-content-end">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>

        <div class="content">
            <div class="container">
                <div class="row justify-content-center">
                    <h2 class="color_blue ">
                        Who is Federico Borsci?
                    </h2>
                    <a href="{{route('about')}}">About</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>