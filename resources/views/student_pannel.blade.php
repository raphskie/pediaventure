@extends('layout.subsellayout')

@section('back-link', 'login')
@section('title', 'Subject Selection | PEDIAVENTURE')
@section('body-class', 'login')
@section('subselcontent')

    <div class="container-login">
        <a href="settings">
            <h1 class="h1-center">SELECT A SUBJECT</h1>
        </a>
        <a href="filipinotopics" class="subject-button filipino">FILIPINO</a>
        <a href="englishtopics" class="subject-button english">ENGLISH</a>
        <a href="mathtopics" class="subject-button math">MATHEMATICS</a>
    </div>

@endsection
