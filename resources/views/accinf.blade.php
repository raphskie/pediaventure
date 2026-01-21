<html>
<head>
    <title>Account Information | PEDIAVENTURE</title>
    <link rel="stylesheet" href="{{ asset('css/overallcss.css') }}">
</head>
<body class="login" style="background-image: url('{{ asset('bgs/bg1.png') }}');">

    <div class="nav-left">
        <a class="nav-item" href="javascript:history.back()"><img class="nav-img" src="{{ asset('imgs/back-button.png') }}" style="transform: scaleX(-1);">
</a>
    </div>

    <div class="container-login">
        <h1 class="h1-center" style="padding: 13px;">ACCOUNT INFORMATION</h1>

        <input class="acc-inf-input"
               value="STUDENT ID: {{ Auth::user()->id }}"
               disabled style="background:white;">

        <input class="acc-inf-input"
               value="FIRST NAME: {{ Auth::user()->fname }}"
               disabled style="background:white;">

        <input class="acc-inf-input"
               value="LAST NAME: {{ Auth::user()->lname }}"
               disabled style="background:white;">

        @if(Auth::user()->mname)
            <input class="acc-inf-input"
                   value="MIDDLE NAME: {{ Auth::user()->mname }}"
                   disabled style="background:white;">
        @endif

        <input class="acc-inf-input"
               value="AGE: {{ Auth::user()->age }}"
               disabled style="background:white;">

        <input class="acc-inf-input"
               value="SEX: {{ Auth::user()->sex }}"
               disabled style="background:white;">

        <input class="acc-inf-input"
               value="ADDRESS: {{ Auth::user()->address }}"
               disabled style="background:white;">

        <input class="acc-inf-input"
               value="GUARDIAN: {{ Auth::user()->guardian_name }}"
               disabled style="background:white;">

        <input class="acc-inf-input"
               value="GRADE & SECTION: {{ Auth::user()->grade_and_section }}"
               disabled style="background:white;">

        @if(Auth::user()->email)
            <input class="acc-inf-input"
                   value="EMAIL: {{ Auth::user()->email }}"
                   disabled style="background:white;">
        @endif

        @if(Auth::user()->name)
            <input class="acc-inf-input"
                   value="DISPLAY NAME: {{ Auth::user()->name }}"
                   disabled style="background:white;">
        @endif

        @if(Auth::user()->points)
            <input class="acc-inf-input"
                   value="POINTS: {{ Auth::user()->points }} pts"
                   disabled style="background:white;">
        @endif

        <form method="POST" action="{{ route('logout') }}" style="margin-top: 20px;">
            @csrf
            <button type="submit" class="logout-button" style="background-color: red; border-radius: 8px;">LOG OUT</button>
        </form>
    </div>
</body>
</html>
