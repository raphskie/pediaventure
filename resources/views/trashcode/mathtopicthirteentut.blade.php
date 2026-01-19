@extends('layout.layout')

@section('back-link', 'mathtopics')
@section('title', 'Identifying Time | PEDIAVENTURE')
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
        <p class="p-tutorial">Learning to identify the time is very essential in our life because identifying it is
        used everyday. The shorter arrow determines the hour and the longer arrow determines the minute.
        <br><br>
        For example: The 1:30 is given, therefore the 1 determines the hour, so the shorter arrow is pointed at "1",
        and the shorter arrow is pointed at "6" but why 6? The minute always starts at 00, and then the "12" in the
        clock is the starting point of the minute. 

        <a href="englishtopicthirteenlevels" class="home-log-reg" style="
            width: 46%;
            margin-left: auto;
            margin-right: auto;
        ">PROCEED</a>    
    </div>
</div>

@endsection
