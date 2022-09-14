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
        <link rel="stylesheet" href={{ asset('css/calcv2.css') }}>
        <script type="text/javascript" src="{{asset('js/calc_v2.js')}}"></script>

        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>

    </head>
    <body class="container-fluid p-0 m-0">
        @include('header')
        <section class="calc_container">
            <div class="cel calc_body" >
                <form >
                    <div class="bg-secondary rounded-2 text-white" style="position: absolute; top:238px; left: 546px;">
                        <input type="checkbox" class="checkbox" value="200" name="boxtop">
                        <label for="boxtop">Антресоли</label>
                        <input type="hidden" name="boxtop" id="login" placeholder="Login" value="длинна, мм">
                    </div>
                    <div class="bg-secondary rounded-2 text-white" style="position: absolute; top:113px; left: 729px;">
                        <input type="checkbox" class="checkbox" value="200" name="boxtop">
                        <label for="boxtop">Длинна кухни B</label>
                        <input type="hidden" name="boxtop" id="login" placeholder="Login" value="длинна, мм">
                    </div>
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
