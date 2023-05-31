<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container__header">
       @include('Layout.header')
    </div>
    <div class="container__slide">
        <div class="container__grid">
            <div class="grid__slide">
               @include('Layout.slide')
            </div>
            <div class="grid__content">
                @yield('content')
            </div>
        </div>
       
    </div>
</body>
</html>