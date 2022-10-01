<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <META NAME="description">
        <title>Мебель на заказ</title>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="icon" type="image/png" href="{{ asset('images/logo/logo.png') }}"/>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/owl.theme.default.min.css') }}>

        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
        <script src={{ asset('js/owl.carousel.min.js')}}></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $(".owl-carousel:eq(0)").owlCarousel(
                {

                    margin:10,

                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:1
                        },
                        1000:{
                            items:1
                        }
                    }
                }
            );
            $(".owl-carousel:eq(1)").owlCarousel(
                {

                    margin:10,

                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:1
                        },
                        1000:{
                            items:1
                        }
                    }
                }
            );
            $(".owl-carousel:eq(2)").owlCarousel(
                {

                    margin:10,

                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:2
                        },
                        1000:{
                            items:3
                        }
                    }
                }
            );
        });
    </script>
    </head>
    <body class="container-fluid p-0 m-0">
        @include('header')
        <div>
            <h1 class="text-center">Расчитайте кухню вашей мечты</h1>
        </div>
        <div class="owl-carousel owl-theme owl-loaded side" style="min-height: 100vh">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item">
                        <img src="{{asset('images/main/kitchen_1_main.jpg')}}" height="600"  class="card-img-top" alt="шкаф на заказ компания-тема">
                    </div>
                    <div class="owl-item">
                        <img src="{{asset('images/main/kitchen_2_main.jpg')}}"  height="600" class="card-img-top" alt="шкаф на заказ компания-тема">
                    </div>
                    <div class="owl-item">
                        <img src="{{asset('images/main/kitchen_3_main.jpg')}}"  height="600" class="card-img-top" alt="шкаф на заказ компания-тема">
                    </div>
                </div>
            </div>
        </div>

        <section class="p-0 m-0 d-flex justify-content-around flex-wrap">
                <div class="card" style="max-width: 400px;">
                    <div class="owl-carousel owl-theme owl-loaded side">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item">
                                    <img src="{{asset('images/main/kitchen.png')}}" height="300" class="card-img-top" alt="шкаф на заказ компания-тема">
                                    <div class="card-body d-flex justify-content-center">
                                        <h2>Кухни</h2>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <img src="{{asset('images/main/pedestal.png')}}" height="300" class="card-img-top" alt="шкаф на заказ компания-тема">
                                    <div class="card-body d-flex justify-content-center">
                                        <h2>Тумбы</h2>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <img src="{{asset('images/main/wardrobe.png')}}" height="300" class="card-img-top" alt="шкаф на заказ компания-тема">
                                    <div class="card-body d-flex justify-content-center">
                                        <h2>Шкафы</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <div class="card" style="max-width: 400px;">
                <h1 class="card-title text-center">Онлайн калькулятор кухни</h1>
                <img src="{{asset('images/k3.jpg')}}"  class="card-img-top" alt="кухня на заказ компания-тема">
                <div class="card-body d-flex justify-content-center">
                    <a href="/calculate/modelfirst" class="btn btn-primary">Расчитать</a>
                </div>
            </div>

        </section>

        <h1 class="text-center" style="padding: 20px">4 ПРОСТЫХ ШАГА К ВАШЕЙ НОВОЙ МЕБЕЛИ</h1>
        <section class="col-lg-12 row justify-content-around p-0 m-0" style="min-height: 20vh">
            <div class="d-flex row justify-content-start col-lg-3 flex-wrap card" style="border: #0069d9 2px solid; border-radius: 15px">

                <h3 style="width: 100%; text-align: center">ЗАМЕРЫ</h3>
                <div style="min-height: 150px">
                    <p style="text-align: center">
                        Сделаем замеры, учтём все углы
                    </p>
                </div>
            </div>
            <div class="d-flex row justify-content-start col-lg-3 flex-wrap card" style="border: #0069d9 2px solid; border-radius: 15px">

                <div style="min-height: 150px">
                    <h3 style="width: 100%; text-align: center">СОГЛАСОВАНИЕ</h3>
                    <p style="text-align: center">Обговорим детали по материалам,
                        покажем реалистичную картинку проекта и
                        если понадобиться, внесем правки
                    </p>
                </div>
            </div>
            <div class="d-flex row justify-content-start col-lg-3 flex-wrap card" style="border: #0069d9 2px solid; border-radius: 15px">

                <h3 style="width: 100%; text-align: center">ОПЛАТА</h3>
                <div style="min-height: 150px">
                    <p style="text-align: center">Примем оплату наличным
                        или безналичным расчетом
                    </p>
                </div>
            </div>
            <div class="d-flex row justify-content-start col-lg-3 flex-wrap card" style="border: #0069d9 2px solid; border-radius: 15px">

                <h3 style="width: 100%; text-align: center">ДОСТАВКА И СБОРКА</h3>
                <div style="min-height: 150px">
                    <p style="text-align: center">Изготовим, привезем,
                       соберём и установим
                    </p>
                </div>
            </div>
        </section>

        @extends('footer')
    </body>
