<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'NES National Public School')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        
    </head>
    <body>
        @include('inc.menu')
        <div class="container">
            @yield('content')
        </div>
        @include('inc.footer')
    </body>
</html>
