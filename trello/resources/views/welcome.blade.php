<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trello</title>
        <link rel="icon" type="image/jpg" href="{{ asset('images/icon/logo.png') }}">
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height" style="background-color: #00b894;">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('projecthome.index') }}" style="color: white">Home</a>
                    @else
                        <a href="{{ route('login') }}"style="color: white">Login</a>
                        <a href="{{ route('register') }}"style="color: white">Register</a>
                    @endauth
                </div>
            @endif
            
            <div class="content">
                <div class="title m-b-md" style="color: white;font-family: 'Press Start 2P', cursive;-webkit-text-decoration-line: underline; /* Safari */
     text-decoration-line: underline; ">
                    Trello
                </div>

            </div>
        </div>
    </body>
</html>
