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
        <script type="text/javascript">
            $(document).ready(function (){
                $('input').on('change',function() {
                    var price = $(this).parent().parent().children().eq('2').find('span').text();
                    $(this).parent().parent().children().last().find('span').text(parseInt($(this).val()) * parseInt(price));

                });
                $('.btn').on('click', function (e){
                    var first = $("#tatalpriceId1").text();
                    var second = $("#tatalpriceId2").text();
                    var three = $("#tatalpriceId3").text();
                    var four = $("#tatalpriceId4").text();
                    var five = $("#tatalpriceId5").text();

                    $("#totalPrice").text(parseInt(first) + parseInt(second) + parseInt(three) + parseInt(four) + parseInt(five));
                    e.preventDefault();
                });
            })
        </script>
    </head>
    <body class="container-fluid p-0 m-0">
        @include('header')
        @include('calculateSelf')
        <h1 class="text-center">ШАГ 3 - Оформите заявку и мы свяжемся с вами</h1>
        @include('calculateForm')
        <footer style="min-height: 50vh; background-color: black; color: white" class="p-0 m-0">
            <div class="row">
                <h5>Контакты</h5>
            </div>
        </footer>
    </body>
</html>
