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
                            <input type="checkbox" class="checkbox" value="200" name="BoxTop">
                            <label class="p-1" for="BoxTop">Антресоли</label>
                        </div>
                        <input type="hidden" name="BoxTop" id="login" placeholder="длинна, мм" value="">
                    </div>
                    <div class="parallelogram BoxTop"></div>
                    <div class="bg-secondary rounded-2 text-white d-flex row" style="width: 20%; position: absolute; top:36%; right: 0%; opacity: 0.7">
                        <div class="col d-flex flex-nowrap">
                            <input type="checkbox" class="checkbox" value="200" name="BoxMiddle">
                            <label class="p-1" for="BoxMiddle">Верхние мод</label>
                        </div>
                        <input type="hidden" name="BoxMiddle" id="login" placeholder="высота, мм" value="">
                    </div>
                    <div class="parallelogram BoxMiddle"></div>
                    <div class="bg-secondary rounded-2 text-white d-flex row" style="width: 20%; position: absolute; top:46%; right: 0%; opacity: 0.7">
                        <div class="col d-flex flex-nowrap">
                            <input type="checkbox" class="checkbox" value="200" name="HTotal">
                            <label class="p-1" for="HTotal">Высота кухни</label>
                        </div>
                        <input type="hidden" name="HTotal" id="login" placeholder="высота, мм" value="">
                    </div>
                    <div class="bg-secondary rounded-2 text-white d-flex row" style="width: 20%; position: absolute; top:56%; right: 0%; opacity: 0.7">
                        <div class="col d-flex flex-nowrap">
                            <input type="checkbox" class="checkbox" value="200" name="BoxDown">
                            <label class="p-1" for="BoxDown">Нижние мод</label>
                        </div>
                        <input type="hidden" name="BoxDown" id="login" placeholder="высота, мм" value="">
                    </div>
                    <div class="modules BoxDown"></div>
                    <div class="bg-secondary rounded-2 text-white d-flex row" style="width: 20%; position: absolute; top:5%; left: 45%; opacity: 0.7">
                        <div class="col d-flex flex-nowrap">
                            <input type="checkbox" class="checkbox" value="200" name="boxtop">
                            <label class="p-1" for="boxtop">Длинна кухни B</label>
                        </div>
                        <input type="hidden" name="boxtop" id="login" placeholder="длинна, мм" value="">
                    </div>
                </form>
            </div>

        </section>
        <div id="#live">1</div>
        @include('footer')
    </body>
