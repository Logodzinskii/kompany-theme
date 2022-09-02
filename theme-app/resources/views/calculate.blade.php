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
        <link rel="stylesheet" href="{{asset('css/calculate.css')}}">


        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
        <script src={{ asset('js/owl.carousel.min.js')}}></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel(
                {

                    margin:0,
                    nav:true,

                    dots:false,
                    responsiveClass: true,
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
        });
    </script>
    </head>
    <body class="container-fluid p-0 m-0">
        @include('header')
        <section class="p-0 m-0 row col-lg-12 d-flex flex-wrap justify-content-start" style="min-height: 80vh">
            <div class="col-lg-9 ">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div  style="background-color: #0069d9; height: 20vh">
                            антресоли1
                        </div>
                    </div>
                    <div class="item">
                        <div  style="background-color: #aaaaaa; height: 20vh">
                            антресоли2
                        </div>
                    </div>
                    <div class="item">
                        <div  style="background-color: #aaaaaa; height: 20vh">
                            антресоли3
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div  style="background-color: #0069d9; height: 20vh">
                            антресоли1
                        </div>
                    </div>
                    <div class="item">
                        <div  style="background-color: #aaaaaa; height: 20vh">
                            антресоли2
                        </div>
                    </div>
                    <div class="item">
                        <div  style="background-color: #aaaaaa; height: 20vh">
                            антресоли3
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div  style="background-color: #0069d9; height: 20vh">
                            Нижний модуль 1
                        </div>
                    </div>
                    <div class="item">
                        <div  style="background-color: #aaaaaa; height: 20vh">
                            Нижний модуль 2
                        </div>
                    </div>
                    <div class="item">
                        <div  style="background-color: #aaaaaa; height: 20vh">
                            Нижний модуль 3
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div  style="background-color: yellow; height: 20vh">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div  style="background-color: #0069d9; height: 20vh">
                                верх 1
                            </div>
                        </div>
                        <div class="item">
                            <div  style="background-color: #aaaaaa; height: 20vh">
                                верх 2
                            </div>
                        </div>
                    </div>
                </div>
                <div  style="background-color: green; height: 40vh">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div  style="background-color: #0069d9; height: 40vh">
                                холодильник 1
                            </div>
                        </div>
                        <div class="item">
                            <div  style="background-color: #aaaaaa; height: 40vh">
                                холодильник 2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer style="min-height: 50vh; background-color: black; color: white" class="p-0 m-0">
            <div class="row">
                <h5>Контакты</h5>
            </div>
        </footer>
    </body>
</html>
