@extends('layout.layout')

@section('back-link', 'mathtopics')
@section('title', 'Find the Quotient | PEDIAVENTURE')
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
        <p class="p-tutorial">Finding the quotient is based on the fourth operation learned in elementary, which is
        division. The operation may be linked to multiplication and subtraction.
        <br><br>
        For example: 10 divided by two is equals to 5. Why? Because 5 is the multiplier to 2 to reach the number 10,
        and then the number 10 is subtracted to the 10, and when they are subtracted, 0 shows up.

        <a href="englishtopictenlevels" class="home-log-reg" style="
            width: 46%;
            margin-left: auto;
            margin-right: auto;
        ">PROCEED</a>    
    </div>
</div>

@endsection