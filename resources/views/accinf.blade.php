<html>
<head>
    <title>Account Information | PEDIAVENTURE</title>
    <link rel="stylesheet" href="{{ asset('css/overallcss.css') }}">
</head>
<body class="login" style="background-image: url('{{ asset('bgs/bg1.png') }}');">

    <div class="nav-left">
        <a class="nav-item" href="subselone">
            <img class="nav-img" src="{{ asset('imgs/back-button.png') }}" style="transform: scaleX(-1);width: 7%;">
        </a>
    </div>

    <div class="container-login">
        <h1 class="h1-center" style="padding: 13px;">ACCOUNT INFORMATION</h1>

        <input class="acc-inf-input" 
               value="FIRST NAME: {{ Auth::user()->first_name }}" 
               disabled style="background:white;">
        
        <input class="acc-inf-input" 
               value="LAST NAME: {{ Auth::user()->last_name }}" 
               disabled style="background:white;">
        
        <input class="acc-inf-input" 
               value="STUDENT AGE: {{ Auth::user()->age }}"
               disabled style="background:white;">

        <input class="acc-inf-input" 
               value="PARENT'S EMAIL: {{ Auth::user()->email }}"
               disabled style="background:white;">

        <a href="{{ route('logout') }}" class="logout-button">LOG OUT</a>
    </div>
</body>
</html>
