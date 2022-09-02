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
            $(".owl-carousel").owlCarousel(
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
        <section style="min-height: 100vh" class="p-0 m-0">
            <div class="row p-0 m-0">
                <div class="card col-lg-4 ">
                    <h1 class="card-title text-center">Кухни</h1>
                    <img src="{{asset('images/main/kitchen.png')}}" height="290px" class="card-img-top" alt="кухня на заказ компания-тема">
                    <div class="card-body">
                        <p style="min-height:5vh ">Изготовление кухонь по индивидуальным размерам</p>
                        <p class="card-text">Цена от </p>
                        <p><span style="font-size: xx-large">65 000</span> &#x20bd</p>
                        <a href="#" class="btn btn-primary">Расчет цены</a>
                    </div>
                </div>
                <div class="card col-lg-4 ">
                    <h1 class="card-title text-center">Шкафы</h1>
                    <img src="{{asset('images/main/wardrobe.png')}}" height="290px" class="card-img-top" alt="шкаф на заказ компания-тема">
                    <div class="card-body">
                        <p style="min-height:5vh ">Изготовление шкафа от 7 рабочих дней</p>
                        <p class="card-text">Цена от </p>
                        <p><span style="font-size: xx-large">35 000</span> &#x20bd</p>
                        <a href="#" class="btn btn-primary">Расчет цены</a>
                    </div>
                </div>
                <div class="card col-lg-4 ">
                    <h1 class="card-title text-center">Тумбы</h1>
                    <img src="{{asset('images/main/pedestal.png')}}" height="290px" class="card-img-top" alt="тумбы на заказ компания-тема">
                    <div class="card-body">
                        <p style="min-height:5vh ">Изготовление тумбы от 7 рабочих дней</p>
                        <p class="card-text">Цена от </p>
                        <p><span style="font-size: xx-large">20 000</span> &#x20bd</p>
                        <a href="#" class="btn btn-primary">Расчет цены</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-lg-12" style="background-color: #95999c; min-height: 100vh">
           <h1 class="text-center" style="padding: 20px">Материалы мебели</h1>
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <div class="d-flex row justify-content-center" style="margin-left: 5px; margin-right: 5px">
                                <h5 style="height: 75px;" class="text-center">Название материала 1</h5>
                                <div style="height: 30vh; width: 100%; background-color: #6f42c1"></div>
                                <p class="text-center">Увеличение стоимости на</p>
                                <p class="text-center"><span style="font-size: xx-large">5</span>%</p>
                                <a href="#" class="btn btn-secondary">Подробнее...</a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="d-flex row justify-content-center" style="margin-left: 5px; margin-right: 5px">
                                <h5 style="height: 75px;" class="text-center">Название материала 2</h5>
                                <div style="height: 30vh; width: 100%; background-color: #80bdff"></div>
                                <p class="text-center">Увеличение стоимости на</p>
                                <p class="text-center"><span style="font-size: xx-large">15</span>%</p>
                                <a href="#" class="btn btn-secondary">Подробнее...</a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="d-flex row justify-content-center" style="margin-left: 5px; margin-right: 5px">
                                <h5 style="height: 75px;" class="text-center">Название материала 3</h5>
                                <div style="height: 30vh; width: 100%; background-color: #70a6fd"></div>
                                <p class="text-center">Увеличение стоимости на</p>
                                <p class="text-center"><span style="font-size: xx-large">25</span>%</p>
                                <a href="#" class="btn btn-secondary">Подробнее...</a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="d-flex row justify-content-center" style="margin-left: 5px; margin-right: 5px">
                                <h5 style="height: 75px;" class="text-center">Название материала 4</h5>
                                <div style="height: 30vh; width: 100%; background-color: #523e02"></div>
                                <p class="text-center">Увеличение стоимости на</p>
                                <p class="text-center"><span style="font-size: xx-large">35</span>%</p>
                                <a href="#" class="btn btn-secondary">Подробнее...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-lg-12" style="min-height: 100vh">
            <h1 class="text-center" style="padding: 20px">Мебельная фурнитура</h1>
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <div class="d-flex row justify-content-center" style="margin-left: 5px; margin-right: 5px;">
                                <h5 style="height: 75px;" class="text-center">Фурнитура 1</h5>
                                <div style="height: 30vh; width: 100%; background-color: #6f42c1;  border-radius: 15px"></div>
                                <p class="text-center">Увеличение стоимости на</p>
                                <p class="text-center"><span style="font-size: xx-large">5</span>%</p>
                                <a href="#" class="btn btn-secondary">Подробнее...</a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="d-flex row justify-content-center" style="margin-left: 5px; margin-right: 5px">
                                <h5 style="height: 75px;" class="text-center">Фурнитура материала 2</h5>
                                <div style="height: 30vh; width: 100%; background-color: #80bdff;  border-radius: 15px"></div>
                                <p class="text-center">Увеличение стоимости на</p>
                                <p class="text-center"><span style="font-size: xx-large">15</span>%</p>
                                <a href="#" class="btn btn-secondary">Подробнее...</a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="d-flex row justify-content-center" style="margin-left: 5px; margin-right: 5px">
                                <h5 style="height: 75px;" class="text-center">Фурнитура материала 3</h5>
                                <div style="height: 30vh; width: 100%; background-color: #70a6fd;  border-radius: 15px"></div>
                                <p class="text-center">Увеличение стоимости на</p>
                                <p class="text-center"><span style="font-size: xx-large">25</span>%</p>
                                <a href="#" class="btn btn-secondary">Подробнее...</a>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="d-flex row justify-content-center" style="margin-left: 5px; margin-right: 5px">
                                <h5 style="height: 75px;" class="text-center">Фурнитура материала 4</h5>
                                <div style="height: 30vh; width: 100%; background-color: #523e02;  border-radius: 15px"></div>
                                <p class="text-center">Увеличение стоимости на</p>
                                <p class="text-center"><span style="font-size: xx-large">35</span>%</p>
                                <a href="#" class="btn btn-secondary">Подробнее...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-lg-12" style="min-height: 50vh">
            <h1 class="text-center" style="padding: 20px">Отзывы</h1>
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <div class="d-flex col justify-content-start" style="margin-left: 5px; margin-right: 5px; border: #0069d9 2px solid; border-radius: 15px">
                                <div style="width: 30%">
                                    <img src="{{asset('images/avatar/user1.png')}}" style="border-radius: 50%;" />
                                </div>
                                <div style="width: 70%">
                                    <h5>Пользователь 1</h5>
                                    <p>Содержание отзыва, несколько слов или длинный текст</p>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="d-flex col justify-content-start" style="margin-left: 5px; margin-right: 5px; border: #0069d9 2px solid; border-radius: 15px">
                                <div style="width: 30%">
                                    <img src="{{asset('images/avatar/user2.png')}}" style="border-radius: 50%;" />
                                </div>
                                <div style="width: 70%">
                                    <h5>Пользователь 2</h5>
                                    <p>Содержание отзыва, несколько слов или длинный текст</p>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="d-flex col justify-content-start" style="margin-left: 5px; margin-right: 5px; border: #0069d9 2px solid; border-radius: 15px">
                                <div style="width: 30%">
                                    <img src="{{asset('images/avatar/user3.png')}}" style="border-radius: 50%;" />
                                </div>
                                <div style="width: 70%">
                                    <h5>Пользователь 3</h5>
                                    <p>Содержание отзыва, несколько слов или длинный текст</p>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="d-flex col justify-content-start" style="margin-left: 5px; margin-right: 5px; border: #0069d9 2px solid; border-radius: 15px">
                                <div style="width: 30%">
                                    <img src="{{asset('images/avatar/user4.png')}}" style="border-radius: 50%;" />
                                </div>
                                <div style="width: 70%">
                                    <h5>Пользователь 4</h5>
                                    <p>Содержание отзыва, несколько слов или длинный текст</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="min-height: 50vh;" class="d-flex justify-content-center row">
            <h1 class="text-center">Форма обратной связи</h1>
            <form style="width: 50vw">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <p></p>
        </section>
        <footer style="min-height: 50vh; background-color: black; color: white" class="p-0 m-0">
            <div class="row">
                <h5>Контакты</h5>
            </div>
        </footer>
    </body>
</html>
