@extends('layout.layout')

@section('back-link', 'mathtopics')
@section('title', 'Addition and Subtraction | PEDIAVENTURE')
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
        <p class="p-tutorial">From 1st grade to 2nd grade, we have learned about addition and subtraction in the 
        previous grade levels. This quiz will test your knowledge on adding numbers and subtracting them. Choose
        the correct answer from the choices below. You can do this, adventurer!

        <a href="englishtopicsevenlevels" class="home-log-reg" style="
            width: 46%;
            margin-left: auto;
            margin-right: auto;
        ">PROCEED</a>    
    </div>
</div>

@endsection
