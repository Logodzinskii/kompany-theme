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
                    <div class="bg-secondary rounded-2 text-white d-flex row" style="width: 20%; position: absolute; top:26%; right: 0%; opacity: 0.7">
                        <div class="col d-flex flex-nowrap">
                            <input type="checkbox" class="checkbox" value="200" name="Achor">
                            <label class="p-1" for="Achor">Антресоли</label>
                        </div>
                        <input type="hidden" name="Achor" id="login" placeholder="длинна, мм" value="">
                    </div>
                    <div id="parallelogram">

                    </div>
                    <div class="bg-secondary rounded-2 text-white d-flex row" style="width: 20%; position: absolute; top:36%; right: 0%; opacity: 0.7">
                        <div class="col d-flex flex-nowrap">
                            <input type="checkbox" class="checkbox" value="200" name="topBox">
                            <label class="p-1" for="topBox">Верхние мод</label>
                        </div>
                        <input type="hidden" name="topBox" id="login" placeholder="высота, мм" value="">
                    </div>
                    <div class="bg-secondary rounded-2 text-white d-flex row" style="width: 20%; position: absolute; top:46%; right: 0%; opacity: 0.7">
                        <div class="col d-flex flex-nowrap">
                            <input type="checkbox" class="checkbox" value="200" name="HTotal">
                            <label class="p-1" for="HTotal">Высота кухни</label>
                        </div>
                        <input type="hidden" name="HTotal" id="login" placeholder="высота, мм" value="">
                    </div>
                    <div class="bg-secondary rounded-2 text-white d-flex row" style="width: 20%; position: absolute; top:56%; right: 0%; opacity: 0.7">
                        <div class="col d-flex flex-nowrap">
                            <input type="checkbox" class="checkbox" value="200" name="DownH">
                            <label class="p-1" for="DownH">Нижние мод</label>
                        </div>
                        <input type="hidden" name="DownH" id="login" placeholder="высота, мм" value="">
                    </div>
                    <div class="bg-secondary rounded-2 text-white d-flex row" style="width: 20%; position: absolute; top:5%; left: 45%; opacity: 0.7">
                        <div class="col d-flex flex-nowrap">
                            <input type="checkbox" class="checkbox" value="200" name="boxtop">
                            <label class="p-1" for="boxtop">Длинна кухни B</label>
                        </div>
                        <input type="hidden" name="boxtop" id="login" placeholder="длинна, мм" value="">
                    </div>
                    <input type="checkbox" value="400" name="boxtop1" style="position: absolute; top:466px; left: 376px;">
                    <input type="checkbox" value="500" name="boxtop2" style="position: absolute; top:300px; left: 215px;">
                    <input type="radio" value="" name="q1" style="position: absolute; top:367px; left: 200px;">
                    <input type="radio" value="" name="q1" style="position: absolute; top:400px; left: 200px;">
                </form>
            </div>

        </section>
        <div id="#live">1</div>
        @include('footer')
    </body>
