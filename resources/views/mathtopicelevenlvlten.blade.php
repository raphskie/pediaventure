@extends('layout.layout')

@section('back-link', 'mathtopicelevenlevels')
@section('title', 'Fractions | Level 10 Math | PEDIAVENTURE')
@section('body-class', 'grade-two-math')
@section('content')
   
<audio id="bgMusic" src="/audios/spelling-bg1.mp3" autoplay="" loop=""></audio>

  <div class="instruction-container">
    <img class="fraction-img" src="/imgs/fractions/10.png">
  </div>

  <div class="div-choices3 float1">
    <button class="balloon-choice" onclick="showCircle('red')">4/10</button>
    <button class="balloon-choice" onclick="showCircle('red')">3/10</button>
    <button class="balloon-choice" onclick="showCircle('blue')">3/12</button>
    <button class="balloon-choice" onclick="showCircle('red')">3/15</button>
    <button class="balloon-choice" onclick="showCircle('red')">5/10</button>
    
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
      window.location.href = "mathtopicelevenlevels";
    }
  </script>

@endsection
