<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{!! $title !!}</title>
    <link rel="icon" href="coreasurbandera.ico">
    <!--cdn de Fomantic Ui-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.5/dist/semantic.min.css">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="ui attached red inverted stackable  menu">
    <div class="ui container">
        <a class="item" href="{{route('route.index')}}">
            <i class="home icon"></i> South Korea
        </a>
        <a class="item" href="{{route('route.visit')}}">
            <i class="eye outline icon"></i> Monuments
        </a>
        <a class="item" href="{{route('route.food')}}">
            <i class="drumstick bite icon"></i> Feeding
        </a>


    </div>
</div>


@yield('contenido')

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.5/dist/semantic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
