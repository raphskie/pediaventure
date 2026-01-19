@extends('layout.layout')

@section('back-link', 'mathtopiconelevels')
@section('title', 'Place Values | Level 7 Math | PEDIAVENTURE')
@section('body-class', 'placevalues-body')
@section('content')
   
<audio id="bgMusic" src="/audios/spelling-bg1.mp3" autoplay="" loop=""></audio>

  <div class="instruction-container" style="
    margin-top: 3%;
">
    <h1 class="h1-instruction" style="
        width: 69%;
        font-size: 39px;
        font-family: 'myFont';
        margin-top: 0%;
        line-height: 36px;
        font-weight: 100;
        background-image: url('/imgs/sign2.png');
        background-size: cover;
        background-position: center;
        height: 18vh;
        text-align: center;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: center;
        align-content: flex-start;
        align-items: center;
    ">4<u>2</u>6,462</h1>
  </div>

  <div class="div-choices3 float1">
      <button class="bird-choice" onclick="showCircle('red')" style="
        background-image: url('/imgs/birds/1.png');
      "></button> <!-- Millions -->
        <button class="bird-choice" onclick="showCircle('red')" style="
        background-image: url('/imgs/birds/2.png');
    "></button> <!-- Hundred Thousands -->
        <button class="bird-choice" onclick="showCircle('blue')" style="
        background-image: url('/imgs/birds/3.png');
    "></button> <!-- Ten Thousands -->
      <button class="bird-choice" onclick="showCircle('red')" style="
        background-image: url('/imgs/birds/4.png');
    "></button> <!-- Thousands -->
    
    <audio id="pop" src="/audios/pop.mp3"></audio>
  </div>

  <div class="div-choices3 float2">
    <button class="bird-choice" onclick="showCircle('red')" style="
        background-image: url('/imgs/birds/5.png');
    "></button> <!-- Hundreds -->
    <button class="bird-choice" onclick="showCircle('red')" style="
        background-image: url('/imgs/birds/6.png');
    "></button> <!-- Tens -->
    <button class="bird-choice" onclick="showCircle('red')" style="
        background-image: url('/imgs/birds/7.png');
    "></button> <!-- Ones --> 
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
      window.location.href = "mathtopiconelvleight";
    }
  </script>

@endsection
