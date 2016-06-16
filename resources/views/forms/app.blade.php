<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta name="author" content="Maksim Eryomenko">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <title>Добавление в БД</title>
    </head>
    <body>
        <div class="container">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/marks">Home</a></li>
                    <li><a href="/marks/send">Send</a></li>
                    <li><a href="/marks/about">About me</a></li>
                </ul>
            </div>
</div>
        
        @yield('content')
    
    </body>
</html>
