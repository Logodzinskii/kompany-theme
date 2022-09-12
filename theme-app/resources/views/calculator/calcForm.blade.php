<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <META NAME="description">
        <title>Мебель на заказ</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <link rel="icon" type="image/png" href="{{ asset('images/logo/logo.png') }}"/>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/owl.theme.default.min.css') }}>
        <script type="text/javascript" src="{{asset('js/calc_v2.js')}}"></script>

        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>

    </head>
    <body class="container-fluid p-0 m-0">
        @include('header')
        <section>
            <div class="col-12 cel" style="background-image: url({{asset('images/example.jpeg')}}); width: 700px; height: 500px; background-position: center; background-size: cover; ">
                <form>
                    <input type="checkbox" value="200" name="boxtop" style="position: absolute; top:238px; left: 546px;">
                    <input type="checkbox" value="400" name="boxtop1" style="position: absolute; top:466px; left: 376px;">
                    <input type="checkbox" value="500" name="boxtop2" style="position: absolute; top:300px; left: 215px;">
                    <input type="text" value="" style="position: absolute; top:370px; left: 584px;">
                    <input type="radio" value="" name="q1" style="position: absolute; top:367px; left: 200px;">
                    <input type="radio" value="" name="q1" style="position: absolute; top:400px; left: 200px;">
                </form>
            </div>

        </section>
        <div id="#live">1</div>
        @include('footer')
    </body>
