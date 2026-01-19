@extends('layout.layout')

@section('back-link', 'filipinotopics')
@section('title', 'Patinig at Katinig | PEDIAVENTURE')
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
    
        
    <p class="p-tutorial">
        Para sa pag-aaral ng Patinig at Katinig asignaturang Filipino, maaaring basahin
        ang katanungan sa itaas. Suriin ang ika-unang letra ng nakulayang salita at piliin kung ito'y patinig 
        na nagsisimula sa a, e, i, o, u, o katinig na nagsisimula sa b, k, d, f, at iba pang letra.
        </p>
        
    <a href="filipinotopictwolevels" class="home-log-reg" style="
        width: 46%;
        margin-left: auto;
        margin-right: auto;
    ">MAGPATULOY</a>   
    </div>
</div>

@endsection