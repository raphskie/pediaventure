@extends('layout.layout')

@section('back-link', 'mathtopiceightlevels')
@section('title', 'Find the Product | Level 2 Math | PEDIAVENTURE')
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
    ">2 X 40 = ?</h1>
  </div>

  <div class="div-choices3 float1">
    <button class="balloon-choice" onclick="showCircle('red')">89</button>
    <button class="balloon-choice" onclick="showCircle('red')">83</button>
    <button class="balloon-choice" onclick="showCircle('blue')">80</button>
    <button class="balloon-choice" onclick="showCircle('red')">56</button>
    <button class="balloon-choice" onclick="showCircle('red')">59</button>
    
    <audio id="pop" src="/audios/pop.mp3"></audio>
  </div>

  <div class="div-choices3 float2">
    
    <button class="balloon-choice" onclick="showCircle('red')">74</button>
    <button class="balloon-choice" onclick="showCircle('red')">48</button>
    <button class="balloon-choice" onclick="showCircle('red')">69</button>
    <button class="balloon-choice" onclick="showCircle('red')">37</button>
    
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
      window.location.href = "mathtopiceightlvlthree";
    }
  </script>

@endsection
