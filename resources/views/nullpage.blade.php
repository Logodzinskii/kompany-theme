<?php
use Illuminate\Support\Facades\Storage;
?>
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
<main class="d-flex justify-content-around row bg-image align-items-center"
style="
    background-image: url({{asset($imagePath . 'image/bg/nullPage-fon.png')}}) ;
    background-size: cover;
    height: 100vh;
    width: 100vw;
" >
        <section class="card">
            <div class="card-body">
                <h1>Ремесленники Урала</h1>
                <h2>Настраиваем детали, скоро открытие</h2>
            </div>
        </section>
</main>
</body>
</html>
