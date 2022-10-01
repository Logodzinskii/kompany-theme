<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <META NAME="description">
        <title>Мебель на заказ</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <link rel="icon" type="image/png" href="{{ asset('images/logo/logo.png') }}"/>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/owl.theme.default.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/calcv2.css') }}>
        <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(90538515, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/90538515" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#orderForm input:radio:first").attr('checked', true);
            $(".btn-submit").click(function (e) {
                var sum = $('.sum').text();
                if(sum == '00')
                {
                    $('.summError').text('Вы не выбрали конфигурацию кухни');
                    return false;
                }else{
                    $('.summError').text('');
                    var formData =$('#orderForm').serialize();

                    $.ajax({
                        url: "{{ route('order.user.store') }}",
                        type: 'POST',
                        data: formData,
                        success: function (data) {
                            $('.result').text('Мы приняли вашу заявку, свяжемся с вами в ближайшее время');
                        }
                    });
                }
                e.preventDefault();
            });
            $('input[name="facadesPrice"]').on('change', function (){
                //alert($(this).val());
                $('.tableValue input:checked').each(function (){
                    var length = $(this).parent().parent().children().eq(2).children().val();
                    var count = $(this).parent().parent().children().eq(3).children().val();
                    var nameBox = $(this).parent().parent().children().eq(0).children().last().attr('name');
                    var facadesPrice = $('input[name="facadesPrice"]:checked').val();
                    sendAjax(length, count, nameBox, facadesPrice);
                });
            });
            $('.selectBox').on('change', function(){
                var length = $(this).val();
                var count = $(this).parent().parent().children().eq(3).children().val();
                var nameBox = $(this).parent().parent().children().eq(0).children().last().attr('name');
                var facadesPrice = $('input[name="facadesPrice"]:checked').val();
                sendAjax(length, count, nameBox, facadesPrice);
            })
            $('.countItems').on("change", function () {
                var count = $(this).val();
                var length = $(this).parent().parent().children().eq(2).children().val();
                var nameBox = $(this).parent().parent().children().eq(0).children().last().attr('name');
                var facadesPrice = $('input[name="facadesPrice"]:checked').val();
                sendAjax(length, count, nameBox, facadesPrice);
            })
            function sendAjax(lengthBox, countBox, typeBox, facadesPrice){
                var _token = $('meta[name="csrf-token"]').attr('content');
                var length = lengthBox;
                var count = countBox;
                var type = typeBox;
                var facades = facadesPrice;
                $.ajax({
                    url: "{{ route('ajax.data.resp') }}",
                    type: 'POST',
                        data: {_token: _token, length: length, count: count, type: type, facadesPrice: facades},
                    success: function (data) {
                        $('.SumBoxPrice'+ type).text(data);
                        sumTotal();
                        start();
                    }
                });
            }

            function sumTotal()
            {
                var sum = 0;
                var sumCount = 0;
                var sumLength = 0;
                $('.SumBoxPrice').each(function() {
                    sum += Number($(this).text());
                });
                $('.countItems').each(function() {
                    sumCount += Number($(this).val());
                });
                $('.selectBox').each(function() {

                    if($(this).parent().parent().children().children().is(':checked') && $(this).attr('name').indexOf('BoxTop') < 0 && $(this).attr('name').indexOf('BoxMiddle') <0 && $(this).attr('name').indexOf('StolBoxTop') <0 && $(this).attr('name').indexOf('BoxApronsTop') <0 && $(this).attr('name').indexOf('BoxDown') < 0 && $(this).attr('name').indexOf('BoxDownFf') <0 ){

                        var c = $(this).parent().parent().children().eq(3).children().val();
                        var l = $(this).val();
                        sumLength += Number(l*c);
                    }
                });

                $(".sum").text(sum);
                $(".sumForm").val(sum);
                $(".summError").text('');
                $('.sumCount').text(sumCount);
                $('.sumLength').text(sumLength);
            }

            /**
             *
             * Первоначальная отрисовка модулей кухни по умолчанию
             *
             **/
            start();

            /**
             *
             * Функции для отслеживания позиции мышки и перемещения всех модулей
             *
             **/
            $("#example").on('mousedown', function (e) {

                var target = this.getBoundingClientRect();
                var x = e.clientX - target.left;
                var y = e.clientY - target.top;

                //$('.navigationCanvas input[name=zoomTop]').val(x);
                //$('.navigationCanvas input[name=zoomRight]').val(y);
                //start();
                //alert(getPosition(e));

            });

            /**
             *
             * Отслеживаем значения инпутов для навигации увеличение и смещение
             *
             **/

            $('.navigationCanvas input').on('change', function (){
                start();
            })

            $('input:checkbox').on("click", function () {

                if ($(this).is(":checked")) {
                    var  attr = $(this).parent().parent().children().children().eq(2);

                    if(!$(this).parent().parent().children().children().eq(2).length > 0)
                    {
                        //alert($(this).parent().parent().children().children().eq(2).length);
                        $(this).parent().parent().children().eq(3).children().attr('disabled', false);
                    }else {
                        $(this).parent().parent().children().children().eq(2).attr('disabled', false);
                        $(this).parent().parent().children().eq(2).children().attr('disabled', false);
                    }

                    var price = $(this).data('price');
                    var count = $(this).parent().parent().children().eq(3).children().val();
                    //$(this).parent().parent().children().eq(4).text(parseInt(price) * parseInt(count));


                    var sum = 0;
                    $('.SumBoxPrice').each(function() {
                        sum += Number($(this).text());
                    });
                    $(".sum").text(sum);
                } else {
                    // checkbox unchecked
                    if(!$(this).parent().parent().children().children().eq(2).length > 0)
                    {
                        //alert($(this).parent().parent().children().children().eq(2).length);
                        $(this).parent().parent().children().eq(3).children().attr('disabled', true);
                        $(this).parent().parent().children().eq(3).children().val(0);
                        $(this).parent().parent().children().eq(4).text(0);
                    }else {
                        $(this).parent().parent().children().eq(2).children().attr('disabled', true);
                        $(this).parent().parent().children().children().eq(2).attr('disabled', true);
                        $(this).parent().parent().children().children().eq(2).val(0);
                        $(this).parent().parent().children().eq(4).text(0);
                    }

                    $(this).parent().parent().children().children().eq(2).attr('disabled', true);
                    $(this).parent().parent().children().eq(2).children().attr('disabled', true);
                    //$(this).parent().parent().children().eq(4).text(0);


                    var sum = 0;
                    $('.SumBoxPrice').each(function() {
                        sum += Number($(this).text());
                    });
                    $(".sum").text(sum);
                }
                start();
            });
            /**
             *
             * Фунции для добавления в таблицу блока модуля
             *
             **/

            $('.add').on('click', function(){
                $('.tableValue').append('<tr><th scope="row"><input type="checkbox" class="checkbox" name="BottleMaker" data-x="200" data-y="90" data-w="60" data-h="60" data-type="top"></th><td>Средний модуль</td><td><input type="number" min="1250" name="length" class="selectBox"></td><td><input type="number" class="countItems" name="count" id="login" placeholder="" value="" ></td><td class="SumBoxPrice SumBoxPrice">0</td></tr>');
                start()
            });

            /**
             *
             * Функции для отрисовки модулей и их позиционирования
             *
             **/

            function start()
            {
                var ma = parseInt($('.navigationCanvas input').val())/10;
                var xa = parseInt($('.navigationCanvas input[name=zoomTop]').val());
                var ya = parseInt($('.navigationCanvas input[name=zoomRight]').val());

                var example = document.getElementById("example"),
                    ctx     = example.getContext('2d');
                    ctx.clearRect(0, 0, 700, 500);
                //размеры
                ctx.beginPath();
                ctx.fillStyle = 'rgba(0,0,0,1)';
                ctx.font = '18px vardana';
                ctx.fillText('Расчетная стоимость - ' + $(".canvasSum" ).text() + ' руб', 100,30);
                ctx.fillText('Расчетная длинна кухни - ' + $(".sumLength").text() + ' мм', 100,50);
                //ctx.fillText('Общее количество модулей - ' + $(".sumCount").text() + ' мм', 100,70);
                ctx.closePath();
                ctx.stroke();
                var kitchenLength = 0;
                $('.checkbox').each(function (){
                    var inputWidth = $(this).parent().parent().children().eq(2).children().val();

                    var datax= $(this).data('x');
                    var datay= $(this).data('y');
                    var dataw = $(this).data('w');
                    var datah = $(this).data('h');
                    var datag = $(this).data('g');
                    var typeb = $(this).data('type');


                    //$(this).parent().parent().children().eq(2).children().val(kitchenLength);
                    if($(this).is(':checked')){
                        if( typeb == 'BoxTop' || typeb == 'BoxMiddle' || typeb == 'StolBoxTop' || typeb == 'BoxApronsTop')
                        {
                            $(this).parent().parent().children().eq(2).children().val($('.sumLength').attr('data-kitchenLens'));
                            addBox(xa+datax,ya+datay,dataw,datah,'active', ma, datag);

                        }
                        if(typeb == 'BoxOven' || typeb == 'BottleMaker' || typeb == 'BoxShelves' || typeb == 'BoxDishwasher' || typeb == 'BoxWashing' || typeb == 'PenalFridge' || typeb == 'PenalMicrowave' || typeb == 'PenalShelves')
                        {

                            kitchenLength += Number(($(this).parent().parent().children().eq(2).children().val()) * ($(this).parent().parent().children().eq(3).children().val()));

                            $('.sumLength').attr('data-kitchenLens', kitchenLength);
                            createBoxDown(xa+datax,ya+datay,dataw,datah,'active', ma, datag);
                        }
                    }else{
                        if( typeb == 'BoxTop' || typeb == 'BoxMiddle' || typeb == 'StolBoxTop' || typeb == 'BoxApronsTop')
                        {

                            //var count = $(this).parent().parent().children().eq(3).children().val(1);
                            //count.attr();
                            $(this).parent().parent().children().eq(2).children().attr('type','hidden');
                            $(this).parent().parent().children().eq(2).children().val($('.sumLength').attr('data-kitchenLens'));

                            addBox(xa+datax,ya+datay,dataw,datah,'deactive', ma, datag);
                        }
                        if(typeb == 'BoxOven' || typeb == 'BottleMaker' || typeb == 'BoxShelves' || typeb == 'BoxDishwasher' || typeb == 'BoxWashing' || typeb == 'PenalFridge' || typeb == 'PenalMicrowave' || typeb == 'PenalShelves')
                        {
                            createBoxDown(xa+datax,ya+datay,dataw,datah,'deactive', ma, datag);
                        }
                    }

                });

            }

            function createBoxDown(x,y,w,h,color,m,g)
            {
                addBox(x+5,y+h-5,w,15,color, m, g-5);
                addBox(x,y,w,h,color, m, g);
            }

            function addBox(xx,yy,ww,hh,color,mashtab,g )
            {
                var x = xx * mashtab;
                var y = yy * mashtab;
                var w = ww * mashtab;
                var h = hh * mashtab;
                var ang = w/4;
                var angh = g*(mashtab);
                var example = document.getElementById("example"),
                    ctx     = example.getContext('2d');

                var facadescolor = '';
                var boxcolor = "";
                var linecolor = "";
                var textcolor = "";
                if(color == 'active')
                {
                    facadescolor = "rgba(222, 194, 124,1)";
                    boxcolor = "rgba(220, 224, 224, 1)";
                    linecolor = "rgba(0, 0, 0, 1)";
                    textcolor = "green";
                }else{
                    facadescolor = "rgba(105, 105, 105,1)";
                    boxcolor = "rgba(220, 224, 224, 1)";
                    linecolor = "rgba(0, 0, 0, 1)";
                    textcolor = "rgba(0,0,0,1)";
                }
                //левая сторона
                ctx.beginPath();
                ctx.setLineDash([2, 2]);
                ctx.moveTo(x,y); //0,0
                ctx.lineTo(x+angh, y-angh);//20,-20
                ctx.lineTo(x+angh, y-angh+h);//20,-20
                ctx.lineTo(x, y+h);//20,-20
                //цвет заливки фигуры
                ctx.fillStyle = boxcolor;
                ctx.fill();
                ctx.closePath();
                ctx.stroke();
                //задняя сторона
                ctx.beginPath();
                ctx.moveTo(x+angh, y-angh); //0,0
                ctx.lineTo(x+angh+w, y-angh+ang);//20,-20
                ctx.lineTo(x+angh+w, y-angh+ang+h);//20,-20
                ctx.lineTo(x+angh, y+h-angh);//20,-20
                //цвет заливки фигуры
                //ctx.fillStyle = boxcolor;
                //ctx.fill();
                ctx.closePath();
                ctx.stroke();
                //фасад
                ctx.strokeStyle = linecolor; // цвет линии
                ctx.beginPath();
                ctx.setLineDash([]);
                ctx.moveTo(x,y); //0,0
                ctx.lineTo(x, y); //0, 0
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
                ctx.setLineDash([]);
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
                ctx.setLineDash([]);
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
            <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>

    </head>
    <body class="container-fluid p-0 m-0">
        @include('header')
        <form id="orderForm" class="was-validated" >
            @csrf
            <input type="hidden" id="_token" value="{{ csrf_token() }}">
            <section class="calc_container d-flex row col-lg-12 justify-content-around flex-wrap" style="width: 95%">
                <div class="col-lg-6 col-12 row">
                    <canvas height='500' width='580' id='example' class="shadow">Обновите браузер</canvas>

                    <div class="navigationCanvas d-flex row">
                        <label for="zoom">увеличение<em>*</em></label>
                        <input type="range" min="2" max="10" value="5" name="zoom">
                        <input type="range" name="zoomTop" value="0" min="-500" max="500" value="25"/>
                        <input type="range" name="zoomRight" value="0" min="-500" max="700" value="25"/>
                        <div class="add" style="display: block; width: 100px; height: 50px">Добавить</div>

                        <div class="d-flex row-cols-3 flex-wrap">
                            @foreach($facades as $facade)
                                <div class="col">
                                    <h5>{{$facade['nameFacades']}}</h5>
                                    <img src="{{asset($facade['imageFacades'])}}" height="80" width="60" />
                                    @foreach(json_decode($facade['typeFacades'], true) as $type)
                                        <div>
                                            <input type="radio" name="facadesPrice" value="{{$type['priceFacades']}}"/>
                                            <label name="facadesPrice">{{$type['nameFacades']}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                    <div class="d-flex justify-content-around row col-lg-5 col-xs-12 col-md-12 parametrs">
                    <h4>Выберите комплектацию кухни</h4>
                    <div class="d-flex justify-content-between flex-wrap">
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
                            @foreach( $items as $item)
                                <tr>
                                    <th scope="row">
                                        <input type="checkbox" class="checkbox" name="{{$item['nameClassBox']}}" data-price="{{$item['price']}}" data-x="{{$item['x']}}" data-y="{{$item['y']}}" data-w="{{$item['w']}}" data-h="{{$item['h']}}" data-g="{{$item['g']}}" data-type="{{$item['nameClassBox']}}">
                                    </th>
                                    <td>
                                        {{$item['nameBoxBottom']}}
                                    </td>
                                    <td>
                                        @if(count(json_decode($item['defaultLen']),true) == 0 )
                                            <input type="number" min="1250" name="length{{$item['nameClassBox']}}" class="selectBox" placeholder="{{$item['placeholder']}}" disabled>
                                        @else
                                            <select class="selectBox" name="length{{$item['nameClassBox']}}" disabled>
                                                @foreach(json_decode($item['defaultLen'],true) as $len)
                                                    <option value="{{$len}}">{{$len}} мм</option>
                                                @endforeach
                                            </select>
                                        @endif
                                    </td>
                                    <td>
                                        <input type="number" class="countItems" name="count{{$item['nameClassBox']}}" id="login" placeholder="{{$item['placeholder']}}" value="{{$item['defaultNum']}}" disabled>
                                    </td>
                                    <td class="SumBoxPrice{{$item['nameClassBox']}} SumBoxPrice">
                                        0
                                    </td>
                                </tr>
                            @endforeach
                            <tr class="table-success">
                                <td></td>
                                <td>Итого</td>
                                <td class="sumLength" data-kitchenLens="">0</td>
                                <td class="sumCount">0</td>
                                <td class="sum canvasSum">0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <div class="col-12 d-flex justify-content-center row result">
                <section class="d-flex justify-content-center row col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="mb-3">
                        <label for="InputName" class="form-label">Ваше имя</label>
                        <input type="text" name="firstname" class="form-control" id="InputName" value="" required>
                        <div class="valid-feedback">
                            ok
                        </div>
                        <div class="invalid-feedback">
                            Пожалуйста, сообщите ваше имя и фамилию.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email для связи с вами</label>
                        <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">Мы не присылаем рекламу и спам</div>
                        <div class="valid-feedback">
                            ok
                        </div>
                        <div class="invalid-feedback">
                            Пожалуйста, укажите вашу почту.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="InputTel" class="form-label">Ваш контактный телефон</label>
                        <input type="tel" name="tel" class="form-control" id="InputTel" aria-describedby="telHelp" required>
                        <div id="telHelp" class="form-text">+79XXXXXXXXXX</div>
                        <div class="valid-feedback">
                            ok
                        </div>
                        <div class="invalid-feedback">
                            Пожалуйста, укажите ваш номер телефона для связи с вами.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Textarea" class="form-label">Дополнительная информация</label>
                        <textarea class="form-control" name="body" id="Textarea" rows="3" placeholder="Например: уточнение по параметрам кухни, или необходимости индивидуального расчета" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-25 btn-submit" >Отправить</button>
                    <div class="mb-3">
                        <h2 class="summError bg-danger"></h2>
                    </div>
                    <h2 class="text-center bg-light">Предварительная стоимость составляет</h2>
                    <h2 class="text-center sum bg-light">0</h2>
                    <input type="hidden" class="sumForm" name="sumForm" />
                </section>
            </div>
        </form>
        <script>
            // Custom JavaScript for Validation
            (function() {
                "use strict";
                window.addEventListener("load", function() {
                    var form = document.getElementById("orderForm");
                    form.addEventListener("submit", function(event) {
                        if (form.checkValidity() == false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add("was-validated");
                    }, false);
                }, false);
            }());
        </script>
        @include('footer')
    </body>
