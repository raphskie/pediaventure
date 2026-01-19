@extends('layout.layout')

@section('back-link', 'mathtopics')
@section('title', 'Complete the Multiplication Table | PEDIAVENTURE')
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
        <p class="p-tutorial">Now that you've learned the basics of multiplication, let's see if you can
        complete the multiplication table. Fill the blanks with the correct answers and click the green button
        below when you're done. You can do this, adventurer!

        <a href="englishtopicninelevels" class="home-log-reg" style="
            width: 46%;
            margin-left: auto;
            margin-right: auto;
        ">PROCEED</a>    
    </div>
</div>

@endsection