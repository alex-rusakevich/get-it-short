<!doctype html>
<html lang="ru">
    <head>
        <title>Get It Short! - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css" rel="stylesheet">
        
        <link rel="icon" type="image/png" href="{{ Vite::asset('resources/img/favicon.png') }}"/>

        @vite(['resources/css/app.css'])
        @yield('resources')
    </head>
    <body>
        <div id="content">
            <div id="content-panel" class="panel panel-default">
                <a href="/" class="brand">Get It Short!</a>
            
                @yield('content')
            </div>
        </div>
    </body>
</html>
