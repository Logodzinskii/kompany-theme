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
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body class="container-fluid p-0 m-0">
        @include('header')
        <section class="calc_container d-flex col justify-content-between flex-wrap">
            <div class="cel calc_body">

            </div>
            <div class="d-flex justify-content-around row col-lg-4 col-xs-12 col-md-12">
                <h4>Выберите комплектацию кухни</h4>
                <form class="d-flex justify-content-around flex-wrap">
                    @foreach( $items as $item)
                        <div class="bg-secondary rounded-2 text-white d-flex col " style="margin: 5px; opacity: 0.7" data-box="{{$item['nameClassBox']}}">
                            <div class="col d-flex flex-nowrap">
                                <input type="checkbox" class="checkbox" value="200" name="{{$item['nameClassBox']}}">
                                <label class="p-1" for="{{$item['nameClassBox']}}">{{$item['nameBoxBottom']}}</label>
                            </div>
                            <input type="number" name="{{$item['nameClassBox']}}" id="login" placeholder="{{$item['placeholder']}}" value="" disabled>
                        </div>
                        <div class="{{$item['typeBox']}} {{$item['nameClassBox']}}"></div>
                    @endforeach
                </form>
            </div>
        </section>
        <section class="d-flex justify-content-center row">
            <h2 class="text-center">Предварительная стоимость составляет</h2>
            <p class="text-center">250 000</p>
            <button type="submit" class="btn btn-primary w-25" >Отправить</button>
        </section>
        @include('footer')
    </body>
