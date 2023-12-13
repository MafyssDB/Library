<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Document</title>
</head>
<body id="body">
<nav class="nav">
    <div class="nav__item">
        <div class="nav__title">Сменить цвет фона</div>
        <div class="nav__button">
            <button id="bodyWhite" class="button button__white"></button>
            <button id="bodyGrey" class="button button__grey"></button>
            <button id="bodyBlack" class="button button__black"></button>
            <button id="bodyYellow" class="button button__yellow"></button>
        </div>
    </div>
    <div class="nav__item">
        <div class="nav__title">Сменить цвет шрифта</div>
        <div class="nav__button">
            <button id="fontWhite" class="button button__white"></button>
            <button id="fontGrey" class="button button__grey"></button>
            <button id="fontBlack" class="button button__black"></button>
            <button id="fontYellow" class="button button__yellow"></button>
        </div>
    </div>
    <div class="nav__item">
        <div class="nav__title">Сменить размер шрифта</div>
        <div class="nav__button">
            <button id="fontSize1" class="button">28</button>
            <button id="fontSize2" class="button">32</button>
            <button id="fontSize3" class="button">36</button>
            <button id="fontSize4" class="button">40</button>
        </div>
    </div>
</nav>
<div>
    <div style="padding-left: 30px;" id="font">
        <div id="size">
            {{ $file }}
        </div>
    </div>
</div>
</body>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
</html>
