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
                    navText: ["<img src='images/arrows/arrow-left-square-fill.svg'>", "<img src='images/arrows/arrow-right-square-fill.svg'>"],
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
                    },
                    onTranslate: callback,
                }
            );

            function callback(event) {
                // По основным
                // DOM элемент, например .owl-carousel
                var element = event.target;
                // Имя события, например dragged
                var name = event.type;
                // Пространство имен события, например owl.carousel
                var namespace = event.namespace;
                // Количество элементов
                var items = event.item.count;
                // Позиция текущего элемента
                var item = event.item.index;

                // Плагин навигации карусели
                // Количество страниц
                var pages = event.page.count;
                // Положение текущей страницы
                var page = event.page.index;
                // Количество элементов на странице
                var size = event.page.size;
                var p, z, childrens;
                p = document.getElementById('info');
                z = document.getElementById('info_hol');
                let output = "Attributes of first paragraph:\n";
                let price ='';
                let parentElement = '';
                let parentElemChildNodes ='';
                for (const attr of element.attributes) {
                    if(`${attr.name}` == 'data-id')
                    {
                        parentElement = document.getElementById(attr.value); //куда записываю

                        parentElemChildNodes = parentElement.getAttribute('data-price');
                        price = parentElemChildNodes;
                    }
                    output += `${attr.name} -> ${attr.value}\n` + price + 'позиция' + item;
                }
                childrens = element.firstChild;
                childrens = childrens.textContent;
                parentElement.innerHTML = output + childrens;
            }
        });
    </script>
    </head>
    <body class="container-fluid p-0 m-0">
        @include('header')
        <section class="p-0 m-0 row col-lg-12 d-flex flex-wrap justify-content-start" style="min-height: 90vh">
            <div class="col-lg-9 p-0 m-0">
                <div class="owl-carousel owl-theme" data-id="1">
                    <div class="item" id="d1" data-price="25000">
                        <div  style="background-color: #0069d9; height: 30vh">
                            антресоли до потолка 1 - цена от 25 000 руб.
                        </div>
                    </div>
                    <div class="item" data-price="35000">
                        <div  style="background-color: #aaaaaa; height: 30vh">
                            Без антресолей до потолка - цена 0 руб.
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" data-id="2">
                    <div class="item" data-id="1">
                        <div  style="background-color: #0069d9; height: 30vh">
                            антресоли до холодильника - 1 - цена от 25 000 руб.
                        </div>
                    </div>
                    <div class="item" data-id="2">
                        <div  style="background-color: #aaaaaa; height: 30vh">
                            антресоли до холодильника - 2 - цена от 45 000 руб.
                        </div>
                    </div>
                    <div class="item">
                        <div  style="background-color: #aaaaaa; height: 30vh">
                            антресоли до холодильника - 3 - цена от 55 000 руб.
                        </div>
                    </div>
                    <div class="item">
                        <div  style="background-color: #aaaaaa; height: 30vh">
                           без антресолей до холодильника - цена 0 руб.
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" data-id="3">
                    <div class="item">
                        <div  style="background-color: #0069d9; height: 30vh">
                            Нижний модуль 1 - цена от 150 000 руб.
                        </div>
                    </div>
                    <div class="item">
                        <div  style="background-color: #aaaaaa; height: 30vh">
                            Нижний модуль 2 - цена от 250 000 руб.
                        </div>
                    </div>
                    <div class="item">
                        <div  style="background-color: #aaaaaa; height: 30vh">
                            Нижний модуль 3 - цена от 350 000 руб.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 p-0 m-0">
                <div  style="background-color: yellow; height: 30vh">
                    <div class="owl-carousel owl-theme" data-id="4">
                        <div class="item">
                            <div  style="background-color: #0069d9; height: 30vh">
                                антресоль над холодильником 1 - цена 20 000 руб.
                            </div>
                        </div>
                        <div class="item">
                            <div  style="background-color: #aaaaaa; height: 30vh">
                                антресоль над холодильником 2 - цена 25 000 руб.
                            </div>
                        </div>
                    </div>
                </div>
                <div  style="background-color: green; height: 60vh">
                    <div class="owl-carousel owl-theme" data-id="5">
                        <div class="item">
                            <div  style="background-color: #0069d9; height: 60vh">
                                холодильник 1 цена - от 100 000 руб.
                            </div>
                        </div>
                        <div class="item">
                            <div  style="background-color: #aaaaaa; height: 60vh">
                                холодильник 2 цена - от 200 000 руб.
                            </div>
                        </div>
                        <div class="item">
                            <div  style="background-color: #aaaaaa; height: 60vh">
                                без холодильника цена - 0 руб.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <p class="info" id="1">0</p>
        <p class="info" id="2">0</p>
        <p class="info" id="3">0</p>
        <p class="info" id="4">0</p>
        <p class="info" id="5">0</p>
        <footer style="min-height: 50vh; background-color: black; color: white" class="p-0 m-0">
            <div class="row">
                <h5>Контакты</h5>
            </div>
        </footer>
    </body>
</html>
