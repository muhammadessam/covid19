<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Rajdhani', sans-serif;
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

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 70%;
        }

        .circle {
            border: solid 5px #636b6f;
            border-radius: 50%;
            width: 200px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 5px;
        }

        h6 {
            margin: 0px;
            font-size: 35px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
    @endif

    <div class="container">
        <div class="circle">
            <h6>{{\App\Patient::all()->count()}}</h6>
            <h6>Total</h6>
        </div>
        <div class="circle ">
            <h6>{{\App\Patient::Active()->count()}}</h6>
            <h6>Active</h6>
        </div>
        <div class="circle">
            <h6>{{\App\Patient::Cured()->count()}}</h6>
            <h6>Cured</h6>
        </div>
        <div class="circle ">
            <h6>{{\App\Patient::Bands()->count()}}</h6>
            <h6>Banded</h6>
        </div>
    </div>
</div>
</body>
</html>
