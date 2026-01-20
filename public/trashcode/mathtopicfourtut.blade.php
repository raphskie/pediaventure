@extends('layout.layout')

@section('back-link', 'mathtopics')
@section('title', 'Greater Than, Less Than, or Equal | PEDIAVENTURE')
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
        <p class="p-tutorial">In this mathematical test, you will be determining or comparing whether one
        of the numbers are less than or greater than. Choose the correct answer from the choices below. You
        can do this, adventurer!</p>

        <a href="englishtopicfourlevels" class="home-log-reg" style="
            width: 46%;
            margin-left: auto;
            margin-right: auto;
        ">PROCEED</a>    
    </div>
</div>

@endsection
