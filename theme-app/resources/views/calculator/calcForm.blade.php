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
        <section class="calc_container d-flex justify-content-between flex-wrap">
            <div class="cel calc_body">
                <img src="{{asset('images/k2.jpg')}}" width="700" height="500" />
            </div>
            <div class="d-flex justify-content-around row ">
                <h1>Выберите стиль кухни</h1>
                <form class="d-flex justify-content-around row flex-wrap">
                    @foreach( $items as $item)
                        <div class="bg-secondary rounded-2 text-white d-flex row" style="width: 20%; margin: 5px; opacity: 0.7">
                            <div class="col d-flex flex-nowrap">
                                <input type="checkbox" class="checkbox" value="200" name="{{$item['nameClassBox']}}">
                                <label class="p-1" for="{{$item['nameClassBox']}}">{{$item['nameBoxBottom']}}</label>
                            </div>
                            <input type="text" name="{{$item['nameClassBox']}}" id="login" placeholder="{{$item['placeholder']}}" value="">
                        </div>
                        <div class="{{$item['typeBox']}} {{$item['nameClassBox']}}"></div>
                    @endforeach
                </form>
            </div>
        </section>

        @include('footer')
    </body>
