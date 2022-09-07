
<h1 class="text-center"> 1 ШАГ - Выберите конфигурацию кухни </h1>
<section class="p-0 m-0 row col-12 col-md-12 col-lg-12 col-xl-12 d-flex flex-nowrap justify-content-center" style="min-height: 50vh">
            <div class="col-8 col-md-5 col-lg-5 col-xl-5 p-0 m-0">
                <div class="owl-carousel owl-theme" data-id="1">
                    <div class="myitem" id="antr0|1" data-price="25000">
                        <img src="{{asset('images/projects/p1/item/ai11.png')}} " alt="ai11"  height="112" />
                    </div>
                    <div class="myitem" id="antr1|1" data-price="45000">
                        <img src="{{asset('images/projects/p1/item/ai12.png')}} " alt="ai12" height="112"/>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" data-id="2">
                    <div class="myitem" data-id="1" data-price="35000">
                        <div>
                            <img src="{{asset('images/projects/p1/item/ai21.png')}} " alt="ai21" height="160"/>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel owl-theme" data-id="3">
                    <div class="item" data-price="35000">
                        <div>
                            <img src="{{asset('images/projects/p1/item/ai31.png')}} " alt="ai31" height="160"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 col-md-3 col-lg-3 col-xl-3 p-0 m-0">
                <div>
                    <div class="owl-carousel owl-theme" data-id="4">
                        <div class="item" data-price="15000">
                            <div  >
                                <img src="{{asset('images/projects/p1/item/ai41.png')}} " alt="ai41" height="90" />
                            </div>
                        </div>
                        <div class="item" data-price="25000">
                            <div >
                                <img src="{{asset('images/projects/p1/item/ai42.png')}} " alt="ai42" height="90" />
                            </div>
                        </div>
                        <div class="item" data-price="0">
                            <div >

                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="owl-carousel owl-theme" data-id="5">
                        <div class="item" data-price="15000">
                            <div>
                                <img src="{{asset('images/projects/p1/item/ai51.png')}} " alt="ai51"  height="339"/>
                            </div>
                        </div>
                        <div class="item" data-price="25000">
                            <div>
                                <img src="{{asset('images/projects/p1/item/ai52.png')}} " alt="ai52" height="339" />
                            </div>
                        </div>
                        <div class="item" data-price="0">
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<h1 class="text-center"> 2 ШАГ - Укажите размеры вашей кухни </h1>
        <section class="col-12 col p-0 m-0 col-lg-12 d-flex justify-content-around flex-wrap">
            <div class="col-12 col-lg-8 d-flex justify-content-around flex-wrap">
                @foreach($parametrs as $param)
                    <div class="card d-flex row justify-content-center flex-wrap" style="min-width: 30vw">
                        <h5 class="card-title">{{ $param['titleCard'] }}&nbsp;</h5>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">м</span>
                            <input type="number" name="param" class="form-control" placeholder="{{ $param['placeholderInput'] }}" aria-label="Длинна, мм" aria-describedby="basic-addon1">
                        </div>
                        <div>цена за погонный метр - <span class="info card-text" id="{{ $param['id'] }}">{{ $param['initPrice'] }}</span></div>
                        <div>цена с учетом размеров - <span id="tatalpriceId{{ $param['id'] }}">0</span></div>
                    </div>
                @endforeach
                <div class="card d-flex row justify-content-center flex-wrap">
                    <h5 class="card-title" style="min-width: 50vw">Итоговая цена</h5>
                    <h1 id="totalPrice" class="info card-text">0</h1>
                    <a href="#" class="btn btn-secondary">Сохранить</a>
                </div>
            </div>
        </section>
