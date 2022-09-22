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
        <script type="text/javascript" src="{{asset('js/calc_v2.js')}}"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-submit").click(function (e) {

                e.preventDefault();

                var _token = $('meta[name="csrf-token"]').attr('content');
                var formData =$('#orderForm').serialize();

                $.ajax({
                    url: "{{ route('order.user.store') }}",
                    type: 'POST',
                    data: formData,
                    success: function (data) {
                        $('.result').text('Мы приняли вашу заявку, свяжемся с вами в ближайшее время');
                    }
                });

            });

            $('input[name="facadesPrice"]').on('change', function (){

               alert($(this).val());

            });

            $('.selectBox').on('change', function(){
                var formData =$('#orderForm').serialize();
                $.ajax({
                    url: "{{ route('update.price.facadesBoxModules') }}",
                    type: 'POST',
                    data: formData,
                    success: function (data) {
                        alert(data);
                        //$('.result').text('Мы приняли вашу заявку, свяжемся с вами в ближайшее время');
                    }
                });
            });

            /*$('.selectBox').on('change', function(){
                var length = $(this).val();
                var count = $(this).parent().parent().children().eq(3).children().val();
                var nameBox = $(this).parent().parent().children().eq(0).children().last().attr('name');
                var facadesPrice = $('input[name="facadesPrice"]:checked').val();
                sendAjax(length, count, nameBox, facadesPrice);

            })*/
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
                    }
                });
            }

            function sumTotal()
            {
                var sum = 0;
                $('.SumBoxPrice').each(function() {
                    sum += Number($(this).text());
                });
                $(".sum").text(sum);
                $(".sumForm").val(sum);
            }
        });
        </script>
            <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>

    </head>
    <body class="container-fluid p-0 m-0">
        @include('header')
        <form id="orderForm" class="was-validated" novalidate>
            @csrf
            <input type="hidden" id="_token" value="{{ csrf_token() }}">
            <section class="calc_container d-flex col col-lg-11 justify-content-between flex-wrap">
                <div class="cel calc_body col-lg-6">
                    @foreach( $items as $item)
                        <div class="{{$item['typeBox']}} {{$item['nameClassBox']}}"></div>
                    @endforeach
                    <div class="d-flex col justify-content-around choiceFacades col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <div class="p-2">
                            <h5>Фрезеровка</h5>
                            <img src="{{asset('images/frez.png')}}" height="80" />
                            <div>
                                <input type="radio" name="facadesPrice" value="16250"/>
                                <label name="facadesPrice">Пленка</label>
                            </div>
                            <div>
                                <input type="radio" name="facadesPrice" value="16250"/>
                                <label name="facadesPrice">Эмаль</label>
                            </div>
                        </div>
                        <div class="p-2">
                            <h5>3D Фрезеровка</h5>
                            <img src="{{asset('images/3dfrez.png')}}" height="80" />
                            <div>
                                <input type="radio" name="facadesPrice" value="20000"/>
                                <label name="facadesPrice">Пленка</label>
                            </div>
                            <div>
                                <input type="radio" name="facadesPrice" value="20000"/>
                                <label name="facadesPrice">Эмаль</label>
                            </div>
                        </div>
                        <div class="p-2">
                            <h5>Прямой</h5>
                            <img src="{{asset('images/prjam.png')}}" height="80" />
                            <div>
                                <input type="radio" name="facadesPrice" value="22000"/>
                                <label name="facadesPrice">Пленка</label>
                            </div>
                            <div>
                                <input type="radio" name="facadesPrice" value="22000"/>
                                <label name="facadesPrice">Эмаль</label>
                            </div>
                            <div>
                                <input type="radio" name="facadesPrice" value="22000"/>
                                <label name="facadesPrice">Пластик</label>
                            </div>
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
                            <tbody class="text-center">
                            @foreach( $items as $item)
                                <tr>
                                    <th scope="row">
                                        <input type="checkbox" class="checkbox" name="{{$item['nameClassBox']}}" data-price="{{$item['price']}}">
                                    </th>
                                    <td>
                                        {{$item['nameBoxBottom']}}
                                    </td>
                                    <td>
                                        @if(count($item['defaultLen']) == 0 )
                                            <input type="number" min="1250" name="length{{$item['nameClassBox']}}" class="selectBox" placeholder="{{$item['placeholder']}}" disabled>
                                        @else
                                            <select class="selectBox" name="length{{$item['nameClassBox']}}" disabled>
                                                @foreach($item['defaultLen'] as $len)
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
                                <td></td>
                                <td></td>
                                <td class="sum">0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <div class="col-12 d-flex justify-content-center row result">
                <section class="d-flex justify-content-center row col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h2 class="text-center">Предварительная стоимость составляет</h2>
                    <p class="text-center sum">0</p>
                    <input type="hidden" class="sumForm" name="sumForm" />
                    <div class="mb-3">
                        <label for="InputName" class="form-label">Ваше имя</label>
                        <input type="text" name="firstname" class="form-control" id="InputName" value="" required>
                        <div class="valid-feedback">
                            ok
                        </div>
                        <div class="invalid-feedback">
                            Пожалуйста, выберите имя пользователя.
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
                        <input type="tel" name="tel" class="form-control" id="InputTel" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">+79XXXXXXXXXX</div>
                        <div class="valid-feedback">
                            ok
                        </div>
                        <div class="invalid-feedback">
                            Пожалуйста, укажите ваш номер телефона для связи с вами.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Textarea" class="form-label">Дополнительная информация</label>
                        <textarea class="form-control" name="body" id="Textarea" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-25 btn-submit" >Отправить</button>
                </section>
            </div>
        </form>
        @include('footer')
    </body>
