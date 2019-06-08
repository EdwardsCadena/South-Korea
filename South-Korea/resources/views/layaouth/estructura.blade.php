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

</head>
<body>
<div class="ui attached red inverted stackable  menu">
    <div class="ui container">
        <a class="item" href="{{route('route.index')}}">
            <i class="home icon"></i> South Korea
        </a>
        <a class="item" href="">
            <i class="eye outline icon"></i> Monuments
        </a>
        <a class="item" href="">
            <i class="drumstick bite icon"></i> Feeding
        </a>


    </div>
</div>


@yield('contenido')

<script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.5/dist/semantic.min.css">
<script src="https://cdn.jsdelivr.net/npm/fomantic-ui@2.7.5/dist/semantic.min.js"></script>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.parallax');
        var instances = M.Parallax.init(elems, options);
    });</script>
<script>
    $(document).ready(function(){
        $('.parallax').parallax();
    });
</script>
</body>
</html>
