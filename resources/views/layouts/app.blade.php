<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Loggit</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="/css/custom.css">



    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,600" rel="stylesheet" type="text/css">


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- style over-ride -->
    <style>
        html, body {
            background-color: #263238;
            color: #f5f5f5;
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

        .top-left {
            position: absolute;
            left: 10px;
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
            font-family: 'Raleway';
        }

        .links > a:hover {
            color: #8e44ad;
            transition: linear 0.3s;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        h3 {
            font-size: 24pt;
            font-family: 'Raleway';
        }

        label {
            font-family: 'Roboto';
            font-weight: 300;
        }

        /* label underline focus color */
        .input-field input[type=text]:focus {
            border-bottom: 1px solid #F44336 !important;
            box-shadow: 0 1px 0 0 #F44336 !important;
        }

        .register--container{
            width: 50%;
            position: absolute;
            left: 360px !important;
            top: 150px;
        }


    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="top-left links">
        @if(Auth::guest())
            <a href="{{ url('/') }}">Loggit</a>
        @else
            <a href="{{ url('/home') }}">Loggit</a>
        @endif
    </div>
    @if (Route::has('login'))
        <div class="top-right links">
            @if(Auth::guest())
                <a class="log--act" href="{{ url('/login') }}">Login</a>
                <a class="reg--act" href="{{ url('/register') }}">Register</a>
            @else
                <a class="ass--act" href="{{ url('/assignments') }}">

                        Assignments
                </a>
                <a class="help--act" href="{{ url('/help') }}">Help</a>
                <a class="time--act" href="{{ url('/timetable') }}">Timetable</a>

            @endif
        </div>
    @endif


    @yield('content')


</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<!-- Scripts -->
<script src="/js/app.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
</body>
</html>
