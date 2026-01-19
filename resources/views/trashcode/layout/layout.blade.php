<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{ asset('css/overallcss.css') }}">
        <title>@yield('title', 'PEDIAVENTURE')</title>
    </head>
    <body class="@yield('body-class')">

        @unless (View::hasSection('hide-navbar'))
        <nav>
            <a class="nav-item" href="javascript:history.back()">
                    <img class="nav-img" src="/imgs/back-button.png" style="transform: scaleX(-1);width: 15%;">
                </a>

            <a class="nav-item" href="settings" style="display: flex; flex-wrap: wrap; flex-direction: row-reverse; align-content: center; align-items: center;">
                <img class="nav-img" src="/imgs/settings-button.png" style="width: 16%;">
            </a>
        </nav>
        @endunless

        @yield('content')
    </body>
</html>

