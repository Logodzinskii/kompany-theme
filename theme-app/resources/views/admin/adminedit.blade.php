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
        <link rel="stylesheet" href="{{asset('css/calculate.css')}}">


        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <script type="text/javascript" src="{{asset('js/bootstrap.bundle.js')}}"></script>
        <script type="text/javascript" src={{ asset('js/owl.carousel.min.js')}}></script>
        <script type="text/javascript" src="{{asset('js/calculate_slider.js')}}"></script>

    </head>
    <body class="container-fluid p-0 m-0">
        @include('header')
        <section class="p-0 m-0 col-12 d-flex flex-wrap justify-content-start " style="min-height: 80vh">
            <table class="table xs-auto" >
                <thead>
                <tr>
                    <th scope="col">№</th>
                    <th scope="col" class="d-none d-lg-block">Модель</th>
                    <th scope="col">Фасад</th>
                    <th scope="col" class="d-none d-lg-block">Тип</th>
                    <th scope="col">Редактировать</th>
                    <th scope="col">Удалить</th>
                </tr>
                </thead>
                <tbody>
                <div style="display: none">{{$i=1}}</div>
                @foreach( $facades as $item)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td><input name="" value="{{$item['nameFacades']}}"></td>
                        <td><input name="" value="{{$item['imageFacades']}}"></td>
                        <td>
                            @foreach(json_decode($item['typeFacades'],true) as $type)
                            <p><input name="" value="{{$type['nameFacades']}}"/> -  <input name="" value="{{$type['priceFacades']}}"/><a href="#" class="btn btn-success">V</a><a href="#" class="btn btn-danger">Х</a></p>
                            @endforeach
                        </td>
                        <td><a href="#" class="btn btn-info">Обновить</a> </td>
                        <td><a href="#" class="btn btn-danger">Удалить</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </section>

        @extends('footer')
    </body>
