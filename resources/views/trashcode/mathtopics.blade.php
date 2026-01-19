@extends('layout.layout')

@section('back-link', 'subsel')
@section('title', 'Math Topics | PEDIAVENTURE')
@section('body-class', 'topic-container')
@section('content')

    <div class="container-login" style="display: flex;flex-direction: column;">

    <h1 class="h1-center">SELECT A TOPIC</h1>
    <div class="topic-flex-2">

    <div class="topic-flex">
        <h1 class="h1-quarter">FIRST QUARTER</h1>
        <a href="mathtopiconetut" class="topic-button math">PLACE VALUES</a>
        <a href="mathtopictwotut" class="topic-button math">STANDARD FORMS</a>
        <a href="mathtopicthreetut" class="topic-button math">WORD FORM OF NUMBERS</a>
        <a href="mathtopicfourtut" class="topic-button math">GREATER THAN, LESS THAN, OR EQUAL</a>
        <a href="mathtopicfivetut" class="topic-button math">ROUNDING OFF</a>
        <a href="mathtopicsixtut" class="topic-button math">ORDINAL NUMBERS</a>
        <a href="mathtopicseventut" class="topic-button math">ADDITION AND SUBTRACTION</a>

        <h1 class="h1-quarter">SECOND QUARTER</h1>
        <a href="mathtopiceighttut" class="topic-button math">FIND THE PRODUCT</a>
        <a href="mathtopicninetut" class="topic-button math">COMPLETE THE MULTIPLICATION TABLE</a>
        <a href="mathtopictentut" class="topic-button math">FIND THE QUOTIENT</a>

        <h1 class="h1-quarter">THIRD QUARTER</h1>
        <a href="mathtopiceleventut" class="topic-button math">FRACTIONS</a>
        <a href="mathtopictwelvetut" class="topic-button math">IDENTIFICATION THE IMPROPER FRACTION</a>

        <h1 class="h1-quarter">FOURTH QUARTER</h1>
        <a href="mathtopicthirteentut" class="topic-button math">IDENTIFYING TIME</a>
        <a href="mathtopicfourteentut" class="topic-button math">CONVERSION OF TIME</a>
        <a href="mathtopicfifteentut" class="topic-button math">TIME MEASUREMENT OF DAYS, WEEKS, MONTHS, AND YEARS,</a>
        <a href="mathtopicsixteentut" class="topic-button math">OBJECT MEASUREMENT</a>
        <a href="mathtopicseventeentut" class="topic-button math">IDENTIFYING THE STANDARD MEASUREMENT</a>
    </div>

    </div>
</div>

@endsection
