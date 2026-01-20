@extends('layout.layout')

@section('back-link', 'mathtopicfivelevels')
@section('title', 'Rounding-Off | Level 2 Math | PEDIAVENTURE')
@section('body-class', 'grade-two-math')
@section('content')
   
  <audio id="bgMusic" src="/audios/spelling-bg1.mp3" autoplay="" loop=""></audio>

  <div class="instruction-container" style="
    margin-top: 3%;
">
    <h1 class="h1-instruction" style="
        width: 69%;
        font-size: 38px;
        font-family: 'myFont';
        margin-top: 4%;
        line-height: 36px;
        font-weight: 100;
    ">ROUND-OFF 59 TO THE NEAREST TEN.</h1>
  </div>

  <div class="div-choices3 float1">
    <button class="balloon-choice" onclick="showCircle('red')">10</button>
    <button class="balloon-choice" onclick="showCircle('red')">20</button>
    <button class="balloon-choice" onclick="showCircle('red')">30</button>
    <button class="balloon-choice" onclick="showCircle('red')">40</button>
    <button class="balloon-choice" onclick="showCircle('red')">50</button>
    
    <audio id="pop" src="/audios/pop.mp3"></audio>
  </div>

  <div class="div-choices3 float1">
    <button class="balloon-choice" onclick="showCircle('blue')">60</button>
    <button class="balloon-choice" onclick="showCircle('red')">70</button>
    <button class="balloon-choice" onclick="showCircle('red')">80</button>
    <button class="balloon-choice" onclick="showCircle('red')">90</button>
    
    <audio id="pop" src="/audios/pop.mp3"></audio>
  </div>
      
      <div id="redCircle" class="msg" style="display: none; position: fixed;">
        <span class="close-btn" onclick="closeMsg('redCircle')">❌</span>
      </div>

      <div id="blueCircle" class="msg" style="display: none; position: fixed;">
        <button class="next-btn" onclick="nextLevel()">NEXT LEVEL</button>
      </div>
      
    <script>
    function showCircle(answer) {
      const popSound = document.getElementById("pop");
      popSound.currentTime = 0;
      popSound.play();

      document.getElementById("redCircle").style.display = "none";
      document.getElementById("blueCircle").style.display = "none";

      if (answer === "red") {
        document.getElementById("redCircle").style.display = "block";
      } else if (answer === "blue") {
        document.getElementById("blueCircle").style.display = "block";
      }
    }

    function closeMsg(id) {
      document.getElementById(id).style.display = "none";
    }

    function nextLevel() {
      window.location.href = "mathtopicfivelvlthree";
    }
  </script>

@endsection
