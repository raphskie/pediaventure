@extends('layout.layout')

@section('back-link', 'filipinotopics')
@section('title', 'Diptonggo | PEDIAVENTURE')
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
        <p class="p-tutorial">Para sa paksang Diptonggo sa asignaturang Filipino, 
            maaaring basahin ang katanungan na nasa itaas ng mga pagpiliang sagot sa ibaba. Piliin ang 
            tamang sagot na nasa ibaba, kung ang salitang nasa katanungan ay aakma sa pagpilian.</p>

        <a href="filipinotopiconelevels" class="home-log-reg" style="
            width: 46%;
            margin-left: auto;
            margin-right: auto;
        ">MAGPATULOY</a>    
    </div>
</div>

@endsection
