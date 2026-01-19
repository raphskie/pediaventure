@extends('layout.layout')

@section('back-link', 'mathtopics')
@section('title', 'Rounding-Off | PEDIAVENTURE')
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
        <p class="p-tutorial">In this test, you will be determining whether the number is going to be
        rounded-off or not.
            
        <br><br>
        
        For example: When the number "13" is given and the instruction says that it should be rounded-off
        to the nearest tens, observe the first digit which is 3. Numbers from 0 to 4 are not rounded-off
        while numbers 5 to 9 are rounded-off and the number "13" will be promoted to "20."</p>

        <a href="englishtopicfivelevels" class="home-log-reg" style="
            width: 46%;
            margin-left: auto;
            margin-right: auto;
        ">PROCEED</a>    
    </div>
</div>

@endsection