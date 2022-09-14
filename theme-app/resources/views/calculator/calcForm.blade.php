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
        <section class="calc_container">
            <div class="cel calc_body" >
                <form >
                    @foreach( $items as $item)
                        <div class="bg-secondary rounded-2 text-white d-flex row" style="width: 20%; position: absolute; top:{{$item['topPositionBottom']}}; left: {{$item['leftPositionBottom']}}; opacity: 0.7">
                            <div class="col d-flex flex-nowrap">
                                <input type="checkbox" class="checkbox" value="200" name="{{$item['nameClassBox']}}">
                                <label class="p-1" for="{{$item['nameClassBox']}}">{{$item['nameBoxBottom']}}</label>
                            </div>
                            <input type="hidden" name="{{$item['nameClassBox']}}" id="login" placeholder="{{$item['placeholder']}}" value="">
                        </div>
                        <div class="{{$item['typeBox']}} {{$item['nameClassBox']}}"></div>
                    @endforeach
                </form>
            </div>

        </section>
        <div id="#live">1</div>
        @include('footer')
    </body>
