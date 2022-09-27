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

    </script>
    </head>
    <body class="container-fluid p-0 m-0">
        @include('header')
        <canvas height='500' width='500' id='example'>Обновите браузер</canvas>
        <script>
            $(document).ready(function (){
                $("#example").on('click', function (e) {

                    alert(getPosition(e));

                });
                function getPosition(e) {
                    var x = y = 0;

                    if (!e) {
                        var e = window.event;
                    }

                    if (e.pageX || e.pageY) {
                        x = e.pageX;
                        y = e.pageY;
                    } else if (e.clientX || e.clientY) {
                        x = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
                        y = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
                    }

                    return x + "|" + y;
                }

                $('.add a').on('click',function(){
                    alert(e);

                });
                $('.mydel a').on('click',function(){
                    alert('d');
                    addBox(160,115,45,100,'rgba(100,150,185,0.2)');
                });
                start(1);
                function start(m)
                {
                    addBox(100,20,60,100,'red', m, 15);
                    addBoxFacades(160,35,45,100,'red', m, 15);
                    addBox(80,185,60,100,'green', m, 35);
                    addBoxFacades(140,196,45,100,'green', m, 35);
                }
                function addBox(xx,yy,ww,hh,color,mashtab, g)
                {
                    var x = xx * mashtab;
                    var y = yy * mashtab;
                    var w = ww * mashtab;
                    var h = hh * mashtab;
                    var ang = w/4;
                    var angh = g*(mashtab);
                    var example = document.getElementById("example"),
                        ctx     = example.getContext('2d');
                    ctx.strokeStyle = color; // цвет линии
                    ctx.beginPath();
                    ctx.moveTo(x,y); //0,0
                    ctx.lineTo(x+w, y+ang); //100, 25
                    ctx.lineTo(x+w, y+ang+h); //100, 100+25+100
                    ctx.lineTo(x, y+h); // 0, 100
                    ctx.lineTo(x, y); //0,0
                    ctx.lineTo(x+angh, y-angh);//20,-20
                    ctx.lineTo(x+w+angh, y+ang-angh);//0+100+20, 0+25-20
                    ctx.lineTo(x-angh+w+angh, y+ang);
                    ctx.lineTo(x-angh+w+angh, y+ang+h);
                    ctx.stroke();
                }

                function addBoxFacades(xx,yy,ww,hh,color,mashtab,g )
                {
                    var x = xx * mashtab;
                    var y = yy * mashtab;
                    var w = ww * mashtab;
                    var h = hh * mashtab;
                    var ang = w/4;
                    var angh = g*(mashtab);
                    var example = document.getElementById("example"),
                        ctx     = example.getContext('2d');

                    ctx.strokeStyle = color; // цвет линии
                    ctx.beginPath();
                    ctx.moveTo(x,y); //0,0
                    ctx.lineTo(x+w, y+ang); //100, 25
                    ctx.lineTo(x+w, y+ang+h); //100, 100+25+100
                    ctx.lineTo(x, y+h); // 0, 100
                    ctx.lineTo(x, y); //0,0
                    ctx.lineTo(x+angh, y-angh);//20,-20
                    ctx.lineTo(x+w+angh, y+ang-angh);//0+100+20, 0+25-20
                    ctx.lineTo(x-angh+w+angh, y+ang);
                    ctx.lineTo(x-angh+w+angh, y+ang+h);
                    ctx.lineTo(x+w+angh, y+ang-angh+h);//0+100+20, 0+25-20
                    ctx.lineTo(x+w+angh, y+ang-angh);//0+100+20, 0+25-20
                    ctx.stroke();
                }
            })


        </script>
        <div class="add"><a href="#">Добавить</a></div>
        <div class="mydel"><a href="#">Удалить</a></div>
        @extends('footer')
    </body>
