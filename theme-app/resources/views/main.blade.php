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
                        <a href="calculate/" class="btn btn-primary">Расчет цены</a>
                    </div>
                </div>
                <div class="card col-lg-4 ">
                    <h1 class="card-title text-center">Шкафы</h1>
                    <img src="{{asset('images/main/wardrobe.png')}}" height="290px" class="card-img-top" alt="шкаф на заказ компания-тема">
                    <div class="card-body">
                        <p style="min-height:5vh ">Изготовление шкафа от 7 рабочих дней</p>
                        <p class="card-text">Цена от </p>
                        <p><span style="font-size: xx-large">35 000</span> &#x20bd</p>
                        <a href="calculate/" class="btn btn-primary">Расчет цены</a>
                    </div>
                </div>
                <div class="card col-lg-4 ">
                    <h1 class="card-title text-center">Тумбы</h1>
                    <img src="{{asset('images/main/pedestal.png')}}" height="290px" class="card-img-top" alt="тумбы на заказ компания-тема">
                    <div class="card-body">
                        <p style="min-height:5vh ">Изготовление тумбы от 7 рабочих дней</p>
                        <p class="card-text">Цена от </p>
                        <p><span style="font-size: xx-large">20 000</span> &#x20bd</p>
                        <a href="calculate/" class="btn btn-primary">Расчет цены</a>
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
        <h1 class="text-center" style="padding: 20px">4 ПРОСТЫХ ШАГА К ВАШЕЙ НОВОЙ МЕБЕЛИ</h1>
        <section class="col-lg-12 row justify-content-around p-0 m-0" style="background-color: #95999c; min-height: 20vh">
            <div class="d-flex row justify-content-start col-lg-3 flex-wrap card" style="border: #0069d9 2px solid; border-radius: 15px">
                <div style="width:50%; align-self: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-1-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm7.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"/>
                    </svg>
                </div>
                <h3 style="width: 100%; text-align: center">ЗАМЕРЫ</h3>
                <div style="min-height: 150px">
                    <p style="text-align: center">
                        Сделаем замеры, учтём все углы
                    </p>
                </div>
            </div>
            <div class="d-flex row justify-content-start col-lg-3 flex-wrap card" style="border: #0069d9 2px solid; border-radius: 15px">
                <div style="width:50%; align-self: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-2-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm4.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306Z"/>
                    </svg>
                </div>
                <div style="min-height: 150px">
                    <h3 style="width: 100%; text-align: center">СОГЛАСОВАНИЕ</h3>
                    <p style="text-align: center">Обговорим детали по материалам,
                        покажем реалистичную картинку проекта и
                        если понадобиться, внесем правки
                    </p>
                </div>
            </div>
            <div class="d-flex row justify-content-start col-lg-3 flex-wrap card" style="border: #0069d9 2px solid; border-radius: 15px">
                <div style="width: 50%;align-self: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-3-square-fill" viewBox="0 0 16 16">
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm5.918 8.414h-.879V7.342h.838c.78 0 1.348-.522 1.342-1.237 0-.709-.563-1.195-1.348-1.195-.79 0-1.312.498-1.348 1.055H5.275c.036-1.137.95-2.115 2.625-2.121 1.594-.012 2.608.885 2.637 2.062.023 1.137-.885 1.776-1.482 1.875v.07c.703.07 1.71.64 1.734 1.917.024 1.459-1.277 2.396-2.93 2.396-1.705 0-2.707-.967-2.754-2.144H6.33c.059.597.68 1.06 1.541 1.066.973.006 1.6-.563 1.588-1.354-.006-.779-.621-1.318-1.541-1.318Z"/>
                    </svg>
                </div>
                <h3 style="width: 100%; text-align: center">ОПЛАТА</h3>
                <div style="min-height: 150px">
                    <p style="text-align: center">Примем оплату наличным
                        или безналичным расчетом
                    </p>
                </div>
            </div>
            <div class="d-flex row justify-content-start col-lg-3 flex-wrap card" style="border: #0069d9 2px solid; border-radius: 15px">

                <div style="width: 50%;align-self: center;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-4-square-fill" viewBox="0 0 16 16">
                        <path d="M6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z"/>
                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Zm5.519 5.057c.22-.352.439-.703.657-1.055h1.933v5.332h1.008v1.107H10.11V12H8.85v-1.559H4.978V9.322c.77-1.427 1.656-2.847 2.542-4.265Z"/>
                    </svg>
                </div>
                <h3 style="width: 100%; text-align: center">ДОСТАВКА И СБОРКА</h3>
                <div style="min-height: 150px">
                    <p style="text-align: center">Изготовим, привезем,
                       соберём и установим
                    </p>
                </div>
            </div>
        </section>
        <section class="col-lg-12" style="min-height: 50vh">
            <h1 class="text-center" style="padding: 20px">Отзывы</h1>
            <div class="owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            <div class="d-flex col justify-content-start" style="margin-left: 5px; margin-right: 5px; border: #0069d9 2px solid; border-radius: 15px;">
                                <div style="width: 30%">
                                    <img src="{{asset('images/avatar/user1.png')}}" style="border-radius: 50%;" />
                                </div>
                                <div style="width: 70%;">
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
            <form style="width: 50vw" method="post" action='order/'>
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
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
