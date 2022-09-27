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
        <canvas height='500' width='700' id='example' >Обновите браузер</canvas>
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
                start(220, 200, 0.7);
                //Глобальная позиция всей кухни
                $('input:checkbox').on("click", function () {
                        //верхние модули
                        start(220, 200, 0.7);
                });

                function start(x, y, m)
                {
                    var example = document.getElementById("example"),
                        ctx     = example.getContext('2d');
                    ctx.clearRect(0, 0, 700, 500);
                    $('.checkbox:checked').each(function (){
                        var datax= $(this).data('x');
                        var datay= $(this).data('y');
                        var dataw = $(this).data('w');
                        var datah = $(this).data('h');
                        addBox(x+datax,y+datay,dataw,datah,'active', m, 15);
                        //alert($(this).data('x'));
                    });
                    $('.checkbox:enabled').each(function (){
                        var datax= $(this).data('x');
                        var datay= $(this).data('y');
                        var dataw = $(this).data('w');
                        var datah = $(this).data('h');
                        addBox(x+datax,y+datay,dataw,datah,'deactive', m, 15);
                        //alert($(this).data('x'));
                    });
                    //верхние модули
                    if ($('.checkbox').is(":checked")) {
                        //верхние модули
                        addBox(x+100,y+35,60,80,'active', m, 15);
                    }else{
                        //верхние модули
                        addBox(x+100,y+35,60,80,'deactive', m, 15);
                    }
                    if ($('.checkbox1').is(":checked")) {
                        //антресоли
                        addBox(x+100,y,60,35,'active', m, 15);
                    }else{
                        //антресоли
                        addBox(x+100,y,60,35,'deactive', m, 15);
                    }
                    if ($('.checkbox2').is(":checked")) {
                        //антресоли
                        addBox(x+160,y+15,45,35,'active', m, 15);
                    }else{
                        //антресоли
                        addBox(x+160,y+15,45,35,'deactive', m, 15);
                    }
                    //нижние модули
                    createBoxDown(x+80,y+185,60,100,'rgba(222, 194, 124,1)', m, 35);
                    createBoxDown(x+140,y+200,60,100,'rgba(222, 194, 124,1)', m, 35);
                    //столешница
                    addBox(x+80,y+185,120,5,'rgba(105, 105, 105,1)', m, 35);
                }

                function createBoxDown(x,y,w,h,color,m,g)
                {
                    addBox(x+5,y+h-5,w,15,color, m, g-5);
                    addBox(x,y,w,h,color, m, g);
                }

                function addBox(xx,yy,ww,hh,color,mashtab,g )
                {
                    var $window = $(window);
                    var windowsize = $window.width();
                    //alert(windowsize);

                    var x = xx * mashtab;
                    var y = yy * mashtab;
                    var w = ww * mashtab;
                    var h = hh * mashtab;
                    var ang = w/4;
                    var angh = g*(mashtab);
                    var example = document.getElementById("example"),
                        ctx     = example.getContext('2d');

                    if(color == 'active')
                    {
                       var facadescolor = 'rgba(222, 194, 124,1)';
                       var boxcolor = "rgba(220, 224, 224, 1)";
                       var linecolor = "rgba(0, 0, 0, 1)";
                    }else{
                        var facadescolor = 'rgba(222, 194, 124,0.1)';
                        var boxcolor = "rgba(220, 224, 224, 0.1)";
                        var linecolor = "rgba(0, 0, 0, 0.1)";
                    }

                    ctx.strokeStyle = linecolor; // цвет линии
                    ctx.beginPath();
                    ctx.moveTo(x,y); //0,0
                    //фасад
                    ctx.lineTo(x+w, y+ang); //100, 25
                    ctx.lineTo(x+w, y+ang+h); //100, 100+25+100
                    ctx.lineTo(x, y+h); // 0, 100
                    ctx.lineTo(x, y); //0,0
                    ctx.strokeStyle = linecolor;
                    //цвет заливки фигуры
                    ctx.fillStyle = facadescolor;
                    ctx.fill();
                    ctx.closePath();
                    ctx.stroke();
                    //верхняя часть
                    ctx.beginPath();
                    ctx.moveTo(x,y); //0,0
                    ctx.lineTo(x+angh, y-angh);//20,-20
                    ctx.lineTo(x+w+angh, y+ang-angh);//0+100+20, 0+25-20
                    ctx.lineTo(x-angh+w+angh, y+ang);
                    ctx.strokeStyle = linecolor;
                    //цвет заливки фигуры
                    ctx.fillStyle = boxcolor;
                    ctx.fill();
                    ctx.closePath();
                    ctx.stroke();
                    //правая сторона по часовой стрелке рисуем линии
                    ctx.beginPath();
                    ctx.moveTo(x+w+angh, y+ang-angh); //
                    ctx.lineTo(x+w+angh, y+ang-angh+h);//0+100+20, 0+25-20
                    ctx.lineTo(x+w, y+ang+h);//0+100+20, 0+25-20
                    ctx.lineTo(x+w, y+ang);
                    //цвет заливки фигуры
                    ctx.fillStyle = boxcolor;
                    ctx.fill();
                    ctx.closePath();
                    ctx.stroke();
                }
            })


        </script>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Наименование</th>
                <th scope="col">Размер</th>
                <th scope="col">Количество</th>
                <th scope="col">Цена<span style="color:red">*</span></th>
            </tr>
            </thead>
        <tbody class="text-center tableValue">
            <tr>
                <th scope="row">
                    <input type="checkbox" class="checkbox" name="BottleMaker" data-x="100" data-y="100" data-w="60" data-h="45">
                </th>
                <td>
                    Модуль
                </td>
                <td>
                    <input type="number" min="1250" name="length" class="selectBox" >
                </td>
                <td>
                    <input type="number" class="countItems" name="count" id="login" placeholder="" value="" >
                </td>
                <td class="SumBoxPrice SumBoxPrice">
                    0
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <input type="checkbox" class="checkbox1" name="BottleMaker" data-x="100" data-y="100" data-w="60" data-h="45">
                </th>
                <td>
                    Антресоль1
                </td>
                <td>
                    <input type="number" min="1250" name="length" class="selectBox">
                </td>
                <td>
                    <input type="number" class="countItems" name="count" id="login" placeholder="" value="" >
                </td>
                <td class="SumBoxPrice SumBoxPrice">
                    0
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <input type="checkbox" class="checkbox2" name="BottleMaker" data-x="100" data-y="100" data-w="60" data-h="45">
                </th>
                <td>
                    Антресоль2
                </td>
                <td>
                    <input type="number" min="1250" name="length" class="selectBox">
                </td>
                <td>
                    <input type="number" class="countItems" name="count" id="login" placeholder="" value="" >
                </td>
                <td class="SumBoxPrice SumBoxPrice">
                    0
                </td>
            </tr>
        <tr class="table-success">
            <td></td>
            <td>Итого</td>
            <td></td>
            <td></td>
            <td class="sum">0</td>
        </tr>
        </tbody>
        </table>
        @extends('footer')
    </body>
