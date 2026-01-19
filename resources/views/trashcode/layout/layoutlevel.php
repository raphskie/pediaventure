<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ asset('css/overallcss.css') }}">
    </head>
    <body>
        <nav>
    <div class="nav-left">
            
            
            <a class="nav-item" href="achievements"><img class="nav-img" src="http://127.0.0.1:8000/imgs/achievements-button.png"></a>
            <a class="nav-item" href="education"><img class="nav-img" src="http://127.0.0.1:8000/imgs/back-button.png" <="" a="" style="transform: scaleX(-1);">
</a>
    </div>
    <a class="nav-item" href="settings" style="
    display: flex;
    flex-wrap: wrap;
    flex-direction: row-reverse;
    align-content: center;
    align-items: center;
">
    <img class="nav-img" src="http://127.0.0.1:8000/imgs/settings-button.png" <="" a="" style="
    width: 16%;
"></a>
        </nav>
        @yield('content')
    </body>
</html>



