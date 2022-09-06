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
                let output = "";
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
                    //`${attr.name} -> ${attr.value}\n`
                    output = 'Вариант' + item;
                }
                childrens = element.firstChild;
                childrens = childrens.textContent;
                parentElement.innerHTML = output;
            }
        });
    </script>
    </head>
    <body class="container-fluid p-0 m-0">
        @include('header')
        <section class="p-0 m-0 row col-sm-12 d-flex flex-nowrap justify-content-center" style="min-height: 50vh">
            <div class="col-2 p-0 m-0">
                <div class="card d-flex row justify-content-center flex-wrap">
                    <p>Размеры антресолей &nbsp;</p>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">мм</span>
                        <input type="number" class="form-control" placeholder="Длинна, мм" aria-label="Длинна, мм" aria-describedby="basic-addon1">
                    </div>
                    <p class="info" id="1">0</p>
                </div>
                <div class="card d-flex row justify-content-center">
                    <p>Размеры верхнего модуля</p>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">мм</span>
                        <input type="number" class="form-control" placeholder="Длинна, мм" aria-label="Длинна, мм" aria-describedby="basic-addon1">
                    </div>
                    <p class="info" id="2">0</p>
                </div>
                <div class="card d-flex row justify-content-center">
                    <p>Размеры нижних модулей</p>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">мм</span>
                        <input type="number" class="form-control" placeholder="Длинна, мм" aria-label="Длинна, мм" aria-describedby="basic-addon1">
                    </div>
                    <p class="info" id="3">0</p>
                </div>
            </div>
            <div class="col-5 p-0 m-0">
                <div class="owl-carousel owl-theme" data-id="1">
                    <div class="item" id="d1" data-price="25000">
                        <img src="{{asset('images/projects/p1/item/ai11.png')}} " alt="ai11"  height="112" />
                    </div>
                    <div class="item" id="d1" data-price="25000">
                        <img src="{{asset('images/projects/p1/item/ai12.png')}} " alt="ai12" height="112"/>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" data-id="2">
                    <div class="item" data-id="1">
                        <div>
                            <img src="{{asset('images/projects/p1/item/ai21.png')}} " alt="ai21" height="160"/>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" data-id="3">
                    <div class="item">
                        <div>
                            <img src="{{asset('images/projects/p1/item/ai31.png')}} " alt="ai31" height="160"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 p-0 m-0">
                <div>
                    <div class="owl-carousel owl-theme" data-id="4">
                        <div class="item">
                            <div  >
                                <img src="{{asset('images/projects/p1/item/ai41.png')}} " alt="ai41" height="90" />
                            </div>
                        </div>
                        <div class="item">
                            <div >
                                <img src="{{asset('images/projects/p1/item/ai42.png')}} " alt="ai42" height="90" />
                            </div>
                        </div>
                        <div class="item">
                            <div >

                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="owl-carousel owl-theme" data-id="5">
                        <div class="item">
                            <div  >
                                <img src="{{asset('images/projects/p1/item/ai51.png')}} " alt="ai51"  height="339"/>
                            </div>
                        </div>
                        <div class="item">
                            <div>
                                <img src="{{asset('images/projects/p1/item/ai52.png')}} " alt="ai52" height="339" />
                            </div>
                        </div>
                        <div class="item">
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 p-0 m-0">
                <div class="card" style="height: 22vh;">
                    <p>Информация 1</p>
                    <p class="info" id="4">0</p>
                </div>
                <div class="card" style="height: 40vh;">
                    <p>Информация 1</p>
                    <p class="info" id="5">0</p>
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
