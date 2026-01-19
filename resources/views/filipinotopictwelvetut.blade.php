@extends('layout.layout')

@section('back-link', 'filipinotopics')
@section('title', 'Kaantasan ng Pang-uri | PEDIAVENTURE')
@section('body-class', 'topic-container')
@section('content')
  
<div class="container-login" 
     style="margin-top: 6%;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;">
    
    <h1 class="h1-center">PAANO MAGLARO:</h1>
    <div class="topic-flex">
    
        
    <p class="p-tutorial">Para sa pag-aaral ng Kaantasan ng Pang-uri
        sa asignaturang Filipino, maaaring basahin ang katanungan sa itaas at piliin ang tamang sagot na nasa 
        ibaba nito.</p>

    <a href="filipinotopictwelvelevels" class="home-log-reg" style="
        width: 46%;
        margin-left: auto;
        margin-right: auto;
    ">MAGPATULOY</a>   
    </div>
</div>

@endsection