@extends('layout.layout')

@section('back-link', 'mathtopics')
@section('title', 'Place Values | Math Levels | PEDIAVENTURE')
@section('body-class', 'levels')
@section('content')      
        
<h1 class="h1-center" style="padding: 29px;">SELECT A LEVEL</h1>
    <div class="container-levels" style="margin-top: 5%;">
        <a href="mathtopiconelvlone" class="level-button">1</a>
        <a href="mathtopiconelvltwo" class="level-button">2</a>
        <a href="mathtopiconelvlthree" class="level-button">3</a>
        <a href="mathtopiconelvlfour" class="level-button">4</a>
        <a href="mathtopiconelvlfive" class="level-button">5</a>
    </div>
    <div class="container-levels" style="margin-top: 5%;">
        <a href="mathtopiconelvlsix" class="level-button">6</a>
        <a href="mathtopiconelvlseven" class="level-button">7</a>
        <a href="mathtopiconelvleight" class="level-button">8</a>
        <a href="mathtopiconelvlnine" class="level-button">9</a>
        <a href="mathtopiconelvlten" class="level-button">10</a>
    </div>
    
@endsection
