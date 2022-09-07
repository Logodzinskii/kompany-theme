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
<section class="d-flex justify-content-around">
    <article class="card" style="width: 18rem">
        <img src={{asset($imagePath . 'image/master/iduser1.png')}} class="card-img-top" alt="...">
        <div class="card-body">
            <h3>{{$craft}}</h3>
            <h5 class="card-title">{{$nikname}}</h5>
            <p>
            @foreach($tags as $tag)
                <span class="badge rounded-pill bg-secondary">{{$tag}}</span>
            @endforeach
            </p>
            <a href="ivanov-ivan/" class="btn btn-primary">Подробнее</a>
        </div>
        </div>
    </article>
</section>


</main>
@include('layouts.footer-main');
</body>
</html>
