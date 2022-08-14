<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <META NAME="description" CONTENT="{{$meta}}">
    <title>{{$webTitle}}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Styles -->
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
</head>
<body class="container">
<header >
    <nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false" >
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<main>
    <section class="vh-100" >
        <div class="card mb-3" >
            <img src="{{asset('storage/image/bg/img_3.png')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h1 class="card-title">Telegram bot для мастеров ручной работы</h1>
                <p class="card-text">Ваши изделия ручной работы пользуются спросом на ярмарках?</p>
                <p class="card-text">Для продажи вы привлекаете помощников?</p>
                <p class="card-text">Контролировать продавцов и количество проданного товара становиться сложнее?</p>
                <p class="card-text">Ведете несколько социальных сетей?</p>
                <p class="card-text">Есть свой телеграм канал?</p>
                <h2>
                    Упростите себе работу
                </h2>
                <p>
                    Телеграм бот поможет:
                    <ul>
                    <li>
                        Записать продажи в электронном виде
                    </li>
                    <li>
                        Контролировать ваших продавцов в реальном
                    </li>
                    <li>
                        Строить аналитику продаж по точкам и продавцам
                    </li>
                    <li>
                        Репостить записи из социальной сети VK в телеграм канал
                    </li>
                </ul>
                </p>
            </div>
        </div>
    </section>
    <section class="bg-light" style="min-height: 100vh">
        <div class="card">
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <h1>Telegram-Бот прост в использовании</h1>
                    <h2>Преимущества использования бота</h2>
                    <ul>
                        <li>Можно использовать как с мобильного телефона, так и с персонального компьютера</li>
                        <li>Социальная сеть telegram имеется почти у каждого</li>
                        <li>Вашим продавцам понадобиться только отправлять сообщения боту с информациями о продажах</li>
                        <li>Вы можете принимать и увольнять продавцов при помощи бота</li>
                        <li>Минимальный функционал, все только самое основное, что нужно для работы</li>
                    </ul>
                </blockquote>
            </div>
        </div>

        <h1>Готовы приступить?</h1>
        <article class=" container d-flex justify-content-between p-2 flex-wrap" >
            <div class="card  " style="height: 50vh; max-width: 33%; min-width: 330px" >
                <img src="{{asset('storage/image/card_main_page/img.png')}}" class="card-img-top" alt="..." height="50%" >
                <div class="card-body">
                    <h5 class="card-title">Как подключиться?</h5>
                    <p class="card-text">Коротко, что нужно сделать для подключения бота</p>
                    <a href="{{ url('registration') }}" class="btn btn-primary">Настроить бота</a>
                </div>
            </div>
            <div class="card " style="height: 50vh; max-width: 33%; min-width: 330px">
                <img src="{{asset('storage/image/card_main_page/img_1.png')}}" class="card-img-top" alt="..." height="50%">
                <div class="card-body">
                    <h5 class="card-title">Тестовый период</h5>
                    <p class="card-text">Тестовый период в подарок на 6 месяцев</p>
                    <a href="#" class="btn btn-primary">Получить</a>
                </div>
            </div>
            <div class="card" style="height: 50vh; max-width: 33%; min-width: 330px">
                <img src="{{asset('storage/image/card_main_page/img_2.png')}}" class="card-img-top" alt="..." height="50%">
                <div class="card-body">
                    <h5 class="card-title">Тарифы</h5>
                    <p class="card-text">Выберите удобный тариф для вас и пользуйтесь без ограничений</p>
                    <a href="#" class="btn btn-primary">Выбрать</a>
                </div>
            </div>
        </article>
    </section>
</main>
<footer class="footer bg-light row align-items-start" >
    <div class="col">
        <p>e-mail: example.com</p>
    </div>
    <div class="col">
        <p>social</p>
    </div>
    <div class="col">
        <p>adres</p>
    </div>
</footer>
</body>
</html>
