@extends('layout.layout')

@section('back-link', 'mathtopics')
@section('title', 'Find the Product | PEDIAVENTURE')
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
        <p class="p-tutorial">Finding the product is based on the third mathematical operation learned in
        elementary, which is multiplication. The operation is linked to addition and it may skip numbers. 
        <br><br>
        For example: 2 may skip 3 because the first number adds up to the recent number, therefore 2 plus 2 is equals
        to four, and 4 plus the very first number is equals to 6, and then 6 plus the very first number is equals
        to 8.
        <br><br>
        Choose the correct answer from the choices below. You can do this, adventurer!

        <a href="englishtopiceightlevels" class="home-log-reg" style="
            width: 46%;
            margin-left: auto;
            margin-right: auto;
        ">PROCEED</a>    
    </div>
</div>

@endsection