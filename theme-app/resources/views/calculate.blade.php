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
                var parentElement ;
                let parentElemChildNodes ='';

                for (const attr of element.attributes) {
                    parentElement = document.getElementById(attr.value); //куда записываю

                    if(`${attr.name}` == 'data-id')
                    {
                        parentElement = document.getElementById(attr.value); //куда записываю

                        parentElemChildNodes = parentElement.getAttribute('data-price');
                        price = parentElemChildNodes;
                        const elem = element.children;
                        console.log(elem[0].children[0].children[item].children[0].dataset.price)
                        parentElement.innerHTML = elem[0].children[0].children[item].children[0].dataset.price;
                        sumTotal();
                    }

                }

            }

            function sumTotal()
            {
                let first = document.getElementById("1").innerText;
                let second = document.getElementById("2").innerText;
                let three = document.getElementById("3").innerText;
                let four = document.getElementById("4").innerText;
                let five = document.getElementById("5").innerText;

                document.getElementById("totalPrice").innerText = (Number(first) + Number(second) + Number(three) + Number(four) + Number(five));

            }

        });
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
