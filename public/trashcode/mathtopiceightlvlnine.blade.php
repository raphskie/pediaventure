@extends('layout.layout')

@section('back-link', 'mathtopiceightlevels')
@section('title', 'Find the Product | Level 9 Math | PEDIAVENTURE')
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
    ">2 X 4 = ?</h1>
  </div>

  <div class="div-choices3 float1">
    <button class="balloon-choice" onclick="showCircle('red')">26</button>
    <button class="balloon-choice" onclick="showCircle('red')">4</button>
    <button class="balloon-choice" onclick="showCircle('red')">6</button>
    <button class="balloon-choice" onclick="showCircle('red')">0</button>
    <button class="balloon-choice" onclick="showCircle('blue')">8</button>
    
    <audio id="pop" src="/audios/pop.mp3"></audio>
  </div>

  <div class="div-choices3 float2">
    
    <button class="balloon-choice" onclick="showCircle('red')">1</button>
    <button class="balloon-choice" onclick="showCircle('red')">2</button>
    <button class="balloon-choice" onclick="showCircle('red')">7</button>
    <button class="balloon-choice" onclick="showCircle('red')">3</button>
    
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
      window.location.href = "mathtopiceightlvlten";
    }
  </script>

@endsection
