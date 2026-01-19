@extends('layout.layout')

@section('back-link', 'mathtopics')
@section('title', 'Place Values | PEDIAVENTURE')
@section('body-class', 'topic-container')
@section('content')
  
<div class="container-login" 
     style="margin-top: 6%;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;">
    
    <h1 class="h1-center">HOW TO PLAY:</h1>
    
    <div class="topic-flex">    
        <p class="p-tutorial">You will be determining what place or digit is the colored number above. Choose
        the correct answer from the birds below. Remember that the first digit starts with ones, the second
        digit is tens, the third digit is hundreds, the fourth digit is thousands, and so on. Go, adventurer!</p>

        <img src="/imgs/tutorials/mathone.png" class="img-tutorial">
        <a href="mathtopiconelevels" class="home-log-reg" style="
            width: 46%;
            margin-left: auto;
            margin-right: auto;
        ">PROCEED</a>    
    </div>
</div>

@endsection
