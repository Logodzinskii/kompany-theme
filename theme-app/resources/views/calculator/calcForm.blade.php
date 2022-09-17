<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <META NAME="description">
        <title>Мебель на заказ</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <link rel="icon" type="image/png" href="{{ asset('images/logo/logo.png') }}"/>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/owl.theme.default.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/calcv2.css') }}>
        <script type="text/javascript" src="{{asset('js/calc_v2.js')}}"></script>

        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body class="container-fluid p-0 m-0">
        @include('header')
        <section class="calc_container d-flex col col-lg-11 justify-content-between flex-wrap">
            <div class="cel calc_body col-lg-6">
                @foreach( $items as $item)
                <div class="{{$item['typeBox']}} {{$item['nameClassBox']}}"></div>
                @endforeach
                    <div class="d-flex col justify-content-around choiceFacades">
                        <div class="p-2">
                            <h5>Фрезеровка</h5>
                            <img src="{{asset('images/frez.png')}}" height="80" />
                            <div>
                                <input type="radio" name="frezer" value="plen"/>
                                <label name="frezer">Пленка</label>
                            </div>
                            <div>
                                <input type="radio" name="frezer" value="emal"/>
                                <label name="frezer">Эмаль</label>
                            </div>
                        </div>
                        <div class="p-2">
                            <h5>3D Фрезеровка</h5>
                            <img src="{{asset('images/3dfrez.png')}}" height="80" />
                            <div>
                                <input type="radio" name="frezer" value="plen"/>
                                <label name="frezer">Пленка</label>
                            </div>
                            <div>
                                <input type="radio" name="frezer" value="emal"/>
                                <label name="frezer">Эмаль</label>
                            </div>
                        </div>
                        <div class="p-2">
                            <h5>Прямой</h5>
                            <img src="{{asset('images/prjam.png')}}" height="80" />
                            <div>
                                <input type="radio" name="frezer" value="plen"/>
                                <label name="frezer">Пленка</label>
                            </div>
                            <div>
                                <input type="radio" name="frezer" value="emal"/>
                                <label name="prfrezer">Эмаль</label>
                            </div>
                            <div>
                                <input type="radio" name="frezer" value="past"/>
                                <label name="frezer">Пластик</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="d-flex justify-content-around row col-lg-5 col-xs-12 col-md-12 parametrs">
                <h4>Выберите комплектацию кухни</h4>
                <form class="d-flex justify-content-between flex-wrap">
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
                                    <input type="checkbox" class="checkbox" value="200" name="{{$item['nameClassBox']}}" data-price="{{$item['price']}}">
                                </th>
                                <td>
                                    {{$item['nameBoxBottom']}}
                                </td>
                                <td>
                                    @if(count($item['defaultLen']) == 0 )
                                        -
                                        @else
                                    <select disabled>
                                        @foreach($item['defaultLen'] as $len)
                                        <option value="{{$len}}">{{$len}} мм</option>
                                        @endforeach
                                    </select>
                                    @endif
                                </td>
                                <td>
                                    <input type="number" class="countItems" name="{{$item['nameClassBox']}}" id="login" placeholder="{{$item['placeholder']}}" value="{{$item['defaultNum']}}" disabled>
                                </td>
                                <td class="SumBoxPrice">
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
                </form>
            </div>
        </section>
        <section>

        </section>
        <section class="d-flex justify-content-center row">
            <h2 class="text-center">Предварительная стоимость составляет</h2>

            <p class="text-center sum">0</p>
            <button type="submit" class="btn btn-primary w-25" >Отправить</button>
        </section>
        @include('footer')
    </body>
