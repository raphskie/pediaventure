<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ asset('css/overallcss.css') }}">
        <link rel="stylesheet" href="{{ asset('css/gamecss.css') }}">
    </head>
    <body>
        <nav>
    <div class="nav-left">


            <a class="nav-item" href="javascript:history.back()"><img class="nav-img" src="{{ asset('imgs/back-button.png') }}" style="transform: scaleX(-1);">
</a>
    </div>
    <a class="nav-item" href="settings" style="
    display: flex;
    flex-wrap: wrap;
    flex-direction: row-reverse;
    align-content: center;
    align-items: center;
">
    <img class="nav-img" src="{{ asset('imgs/settings-button.png') }}" style="
    width: 16%;
"></a>
        </nav>
        @yield('content')
    </body>
</html>



