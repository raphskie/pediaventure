@extends('layout.layout')

@section('back-link', 'mathtopics')
@section('title', 'Standard Forms | PEDIAVENTURE')
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
        <p class="p-tutorial">You will be determining the answer of the given equation above. You may take
        your time to calculate the equation in your mind and choose the correct answer below.</p>

        <a href="mathtopictwolevels" class="home-log-reg" style="
            width: 46%;
            margin-left: auto;
            margin-right: auto;
        ">PROCEED</a>    
    </div>
</div>

@endsection
