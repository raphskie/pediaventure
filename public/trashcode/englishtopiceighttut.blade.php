@extends('layout.layout')

@section('back-link', 'englishtopics')
@section('title', 'Identifying the Subject and Predicate | PEDIAVENTURE')
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
        <p class="p-tutorial">You will be identifying the subject and the predicate in
        the question above. Choose the correct answer below. You can do it, adventurer!</p>
        
        <a href="englishtopiceightlevels" class="home-log-reg" style="
            width: 46%;
            margin-left: auto;
            margin-right: auto;
        ">PROCEED</a>    
    </div>
</div>

@endsection
