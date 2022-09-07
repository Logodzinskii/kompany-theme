<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <META NAME="description" CONTENT="{{$meta}}">
    <title>{{$webTitle}}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Styles -->
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>

</head>
<body>
@include('layouts.header-nav')
<main>
    <section  class="d-flex justify-content-around row bg-image align-items-center"
              style="
                background-image: url({{asset($imagePath . 'image/bg/master-fon.png')}});
                min-height: 100vh;
                " >
        <article class="d-flex justify-content-around flex-wrap bg-secondary" style="opacity: 0.7">
            <div class="card-body " style="min-width: 33%; min-height: 48px; size: 1.5em; text-align: center">
                <a href="#person" class="link-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="94" height="94" fill="#FFFFFF" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    <h5>О себе</h5>
                    <p>Информация о мастере</p>
                </a>
            </div>
                <div class="card-body" style="min-width: 33%; min-height: 48px; size: 1.5em; text-align: center;">
                    <a href="#portfolio" class="link-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="94" fill="#FFFFFF" class="bi bi-flower1" viewBox="0 0 16 16">
                            <path d="M6.174 1.184a2 2 0 0 1 3.652 0A2 2 0 0 1 12.99 3.01a2 2 0 0 1 1.826 3.164 2 2 0 0 1 0 3.652 2 2 0 0 1-1.826 3.164 2 2 0 0 1-3.164 1.826 2 2 0 0 1-3.652 0A2 2 0 0 1 3.01 12.99a2 2 0 0 1-1.826-3.164 2 2 0 0 1 0-3.652A2 2 0 0 1 3.01 3.01a2 2 0 0 1 3.164-1.826zM8 1a1 1 0 0 0-.998 1.03l.01.091c.012.077.029.176.054.296.049.241.122.542.213.887.182.688.428 1.513.676 2.314L8 5.762l.045-.144c.248-.8.494-1.626.676-2.314.091-.345.164-.646.213-.887a4.997 4.997 0 0 0 .064-.386L9 2a1 1 0 0 0-1-1zM2 9l.03-.002.091-.01a4.99 4.99 0 0 0 .296-.054c.241-.049.542-.122.887-.213a60.59 60.59 0 0 0 2.314-.676L5.762 8l-.144-.045a60.59 60.59 0 0 0-2.314-.676 16.705 16.705 0 0 0-.887-.213 4.99 4.99 0 0 0-.386-.064L2 7a1 1 0 1 0 0 2zm7 5-.002-.03a5.005 5.005 0 0 0-.064-.386 16.398 16.398 0 0 0-.213-.888 60.582 60.582 0 0 0-.676-2.314L8 10.238l-.045.144c-.248.8-.494 1.626-.676 2.314-.091.345-.164.646-.213.887a4.996 4.996 0 0 0-.064.386L7 14a1 1 0 1 0 2 0zm-5.696-2.134.025-.017a5.001 5.001 0 0 0 .303-.248c.184-.164.408-.377.661-.629A60.614 60.614 0 0 0 5.96 9.23l.103-.111-.147.033a60.88 60.88 0 0 0-2.343.572c-.344.093-.64.18-.874.258a5.063 5.063 0 0 0-.367.138l-.027.014a1 1 0 1 0 1 1.732zM4.5 14.062a1 1 0 0 0 1.366-.366l.014-.027c.01-.02.021-.048.036-.084a5.09 5.09 0 0 0 .102-.283c.078-.233.165-.53.258-.874a60.6 60.6 0 0 0 .572-2.343l.033-.147-.11.102a60.848 60.848 0 0 0-1.743 1.667 17.07 17.07 0 0 0-.629.66 5.06 5.06 0 0 0-.248.304l-.017.025a1 1 0 0 0 .366 1.366zm9.196-8.196a1 1 0 0 0-1-1.732l-.025.017a4.951 4.951 0 0 0-.303.248 16.69 16.69 0 0 0-.661.629A60.72 60.72 0 0 0 10.04 6.77l-.102.111.147-.033a60.6 60.6 0 0 0 2.342-.572c.345-.093.642-.18.875-.258a4.993 4.993 0 0 0 .367-.138.53.53 0 0 0 .027-.014zM11.5 1.938a1 1 0 0 0-1.366.366l-.014.027c-.01.02-.021.048-.036.084a5.09 5.09 0 0 0-.102.283c-.078.233-.165.53-.258.875a60.62 60.62 0 0 0-.572 2.342l-.033.147.11-.102a60.848 60.848 0 0 0 1.743-1.667c.252-.253.465-.477.629-.66a5.001 5.001 0 0 0 .248-.304l.017-.025a1 1 0 0 0-.366-1.366zM14 9a1 1 0 0 0 0-2l-.03.002a4.996 4.996 0 0 0-.386.064c-.242.049-.543.122-.888.213-.688.182-1.513.428-2.314.676L10.238 8l.144.045c.8.248 1.626.494 2.314.676.345.091.646.164.887.213a4.996 4.996 0 0 0 .386.064L14 9zM1.938 4.5a1 1 0 0 0 .393 1.38l.084.035c.072.03.166.064.283.103.233.078.53.165.874.258a60.88 60.88 0 0 0 2.343.572l.147.033-.103-.111a60.584 60.584 0 0 0-1.666-1.742 16.705 16.705 0 0 0-.66-.629 4.996 4.996 0 0 0-.304-.248l-.025-.017a1 1 0 0 0-1.366.366zm2.196-1.196.017.025a4.996 4.996 0 0 0 .248.303c.164.184.377.408.629.661A60.597 60.597 0 0 0 6.77 5.96l.111.102-.033-.147a60.602 60.602 0 0 0-.572-2.342c-.093-.345-.18-.642-.258-.875a5.006 5.006 0 0 0-.138-.367l-.014-.027a1 1 0 1 0-1.732 1zm9.928 8.196a1 1 0 0 0-.366-1.366l-.027-.014a5 5 0 0 0-.367-.138c-.233-.078-.53-.165-.875-.258a60.619 60.619 0 0 0-2.342-.572l-.147-.033.102.111a60.73 60.73 0 0 0 1.667 1.742c.253.252.477.465.66.629a4.946 4.946 0 0 0 .304.248l.025.017a1 1 0 0 0 1.366-.366zm-3.928 2.196a1 1 0 0 0 1.732-1l-.017-.025a5.065 5.065 0 0 0-.248-.303 16.705 16.705 0 0 0-.629-.661A60.462 60.462 0 0 0 9.23 10.04l-.111-.102.033.147a60.6 60.6 0 0 0 .572 2.342c.093.345.18.642.258.875a4.985 4.985 0 0 0 .138.367.575.575 0 0 0 .014.027zM8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg>
                        <h5>Примеры работ</h5>
                        <p>Галерея работ мастера</p>
                    </a>
                </div>
            <div class="card-body" style="min-width: 33%; min-height: 48px; size: 1.5em; text-align: center">
                <a href="#contact" class="link-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="94" height="94" fill="#FFFFFF" class="bi bi-phone" viewBox="0 0 16 16">
                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    <h5>Контакты мастера</h5>
                    <p>Перейти к форме обратной связи</p>
                </a>
            </div>
        </article>
    </section>
        <section id="person" class="card-body d-flex justify-content-around row flex-wrap" style="min-height: 100vh;">
            <div class="card" style="width: 500px; min-width: 45%">
                <h2><img src={{asset($imagePath . 'image/assets/ico/file-person.svg')}} width="56px"/>Иванов Иван</h2>
                <h4><img src={{asset($imagePath . 'image/assets/ico/check2-square.svg')}} width="56px"/>Изделия из дерева</h4>
                <p>
                    <img src={{asset('storage/image/assets/ico/info-square.svg')}} width="48px"/>
                    <span class="badge rounded-pill bg-secondary">Дерево</span>
                    <span class="badge rounded-pill bg-secondary">Метал</span>
                    <span class="badge rounded-pill bg-secondary">Кожа</span>
                </p>
                <p>
                    <h2>Что говорит о себе?</h2>
                    Производит резные изделия из различных сортов дерева.
                    Делает столешницы, и прочее... Лишь активно развивающиеся страны третьего мира, инициированные исключительно синтетически, разоблачены.
                    Равным образом, внедрение современных методик создаёт необходимость включения
                    в производственный план целого ряда внеочередных мероприятий с учётом комплекса
                    приоретизации разума над эмоциями.
                    <h2>Где ищет вдохновение?</h2>
                    Разнообразный и богатый опыт говорит нам,
                    что дальнейшее развитие различных форм деятельности играет определяющее значение
                    для форм воздействия. В своём стремлении улучшить пользовательский опыт мы упускаем,
                    что непосредственные участники технического прогресса рассмотрены исключительно в разрезе
                    маркетинговых и финансовых предпосылок.
                    <h2>Любит делиться опытом и мастерством?</h2>
                    Следует отметить, что высокотехнологичная
                    концепция общественного уклада предполагает независимые способы реализации модели развития.
                </p>

            </div>
            <div class="card" style="width: 500px; min-width: 45%">

                <img src={{asset($imagePath . 'image/bg/img_1.png')}} width="100%">
                <h2>
                    Дополнительная информация
                </h2>
                <p>
                    <span class="badge bg-secondary">Участвует в ярмарках</span>
                    <span class="badge bg-secondary">Офлайн продажи</span>
                    <span class="badge bg-secondary">Самозанятый</span>
                    <span class="badge bg-secondary">Изделия на маркетплейсах</span>
                    <span class="badge bg-secondary">Свой интернет магазин</span>
                    <span class="badge bg-secondary">Есть в соцсетях</span>
                <h2>
                    Статистика
                </h2>
                    <div class="d-flex justify-content-around ">
                        <div class="card" style="width: 30%">
                            <div class="card-body">
                                <div class="card-title"><h3>100 штук</h3></div>
                                <div class="card-text">выполненных работ</div>
                            </div>
                        </div>
                        <div class="card" style="width: 30%">
                            <div class="card-body">
                                <div class="card-title"><h3>20 раз</h3></div>
                                <div class="card-text">принято участи в ярмарках</div>
                            </div>
                        </div>
                        <div class="card" style="width: 30%">
                            <div class="card-body">
                                <div class="card-title"><h3>1200 руб</h3></div>
                                <div class="card-text">средняя стоимость изделия</div>
                            </div>
                        </div>
                    </div>
                </h2>
            </div>

        </section>
        <section id="portfolio" class="card-body bg-secondary align-items-center" style="min-height: 100vh;">
            <h1 class="text-white">
                Работы мастера
            </h1>
            <section class="d-flex justify-content-around flex-wrap row ">
                @foreach($imageContainer as $image)
                    <article class="card" style="width: 18rem">
                        <img src={{asset($imagePath . 'image/master/'.$rootMaster.'/portfolio/'. $image)}} class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="{{$rootMaster}}/" class="btn btn-primary">Подробнее</a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </section>
        </section>

    <section id="contact" class="d-flex justify-content-center row" style=" min-height: 100vh;">
        <div class="card" style="width: 40vw">
            <h1>Обратиться к мастеру</h1>
            <p>Если вы хотите обратиться к мастеру для заказа или сотрудничества, пожалуйста заполните форму обратной связи</p>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ваш Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Телефон</label>
                    <input type="tel" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Сообщение</label>
                    <textarea class="form-control" id="exampleInputPassword1" name="subject" rows="10">

                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
    </section>
</main>
@include('layouts.footer-main');
</body>
</html>
