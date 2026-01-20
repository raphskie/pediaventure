@extends('layout.layout')

@section('back-link', 'mathtopictwelvelevels')
@section('title', 'Identifying the Improper Fraction | Level 6 Math | PEDIAVENTURE')
@section('body-class', 'grade-two-math')
@section('content')
   
  <audio id="bgMusic" src="/audios/spelling-bg1.mp3" autoplay="" loop=""></audio>

  <div class="instruction-container">
    <h1 class="h1-instruction" style="
        width: 69%;
        font-size: 26px;
        font-family: 'myFont';
        margin-top: 4%;
        line-height: 36px;
        font-weight: 100;
    ">WHICH ONE IS THE IMPROPER FRACTION?</h1>
  </div>

  <div class="div-choices3 float1">
    <button class="balloon-choice" onclick="showCircle('red')">15/16</button>
    <button class="balloon-choice" onclick="showCircle('red')">16/18</button>
    <button class="balloon-choice" onclick="showCircle('red')">12/14</button>
    <button class="balloon-choice" onclick="showCircle('red')">10/12</button>
    <button class="balloon-choice" onclick="showCircle('blue')">24/20</button>
    
    <audio id="pop" src="/audios/pop.mp3"></audio>
  </div>
      
      <div id="redCircle" class="msg" style="display: none; position: fixed; background-image: url('/imgs/dialogs/wrong-ans-msg.png')">
        <span class="close-btn" onclick="closeMsg('redCircle')">❌</span>
      </div>

      <div id="blueCircle" class="msg" style="display: none; position: fixed; background-image: url('/imgs/dialogs/correct-ans-msg.png">
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
      window.location.href = "mathtopictwelvelvlseven";
    }
  </script>

@endsection
