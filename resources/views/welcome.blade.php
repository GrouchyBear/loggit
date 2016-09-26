<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Loggit</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #263238;
            color: #f5f5f5;
            font-family: 'Raleway';
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        p {
            font-weight: 300;
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
            color: #f5f5f5;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .links > a:hover {
            color: #8e44ad;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        h3 {
            font-size: 24pt;
        }

        #about {
            position: relative;
            top: 170px;
        }

        .welcome--upper {
            text-transform: uppercase;
            color: #d2d2d2;
        }

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if(Auth::guest())
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @else
                <a href="{{ url('/help') }}">Help</a>
                <a href="{{ url('/times') }}">Timetable</a>
                <a href="{{ url('/assignments') }}">Assignments</a>
            @endif
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Loggit
        </div>
        <p class="welcome--upper">An EILP Replacement</p>



    </div>
</div>
</body>
</html>
