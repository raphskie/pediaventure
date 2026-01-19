@extends('layout.layout')

@section('back-link', 'mathtopics')
@section('title', 'Time Measurement of Days, Weeks, Months, and Years | PEDIAVENTURE')
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
        <p class="p-tutorial">In this test, you will be determining how to convert time into days, days into weeks,
        weeks into months, and months into years.
        <br><br>
        For example: 24 hours is considered a single day, and 48 hours is considered 2 days. 7 days is a single week.

        <a href="englishtopicfifteenlevels" class="home-log-reg" style="
            width: 46%;
            margin-left: auto;
            margin-right: auto;
        ">PROCEED</a>    
    </div>
</div>

@endsection