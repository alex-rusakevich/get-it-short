<html>
    <head>
        <title>Get It Short! - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        
        @vite(['resources/css/app.css'])

        @yield('resources')
    </head>
    <body>
        <div id="content">
            <div id="content-panel" class="panel panel-default">
                <span class="brand">Get It Short!</span>
            
                @yield('content')
            </div>
        </div>
    </body>
</html>