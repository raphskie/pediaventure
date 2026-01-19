@extends('layout.layout')

@section('back-link', 'mathtopicthreelevels')
@section('title', 'Word Form of Numbers | Level 8 Math | PEDIAVENTURE')
@section('body-class', 'grade-one-english')
@section('content')
    
<audio id="bgMusic" src="/audios/spelling-bg1.mp3" autoplay="" loop=""></audio>

  <div class="instruction-container">
    
    <h1 class="h1-instruction">
    WHAT IS THE WORD FORM OF 173?</h1>
  </div>

  <div class="div-choices1" style="
    display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: center;
    flex-wrap: wrap;
">
    <button class="choice2" onclick="showCircle('blue')" style="
    background: #c38543;
    border: solid 7px #57370a;
    ">One-hundred seventy-three</button>
    <button class="choice2" onclick="showCircle('red')" style="
    background: #c38543;
    border: solid 7px #57370a;
    ">One-hundred seven three</button>
    <button class="choice2" onclick="showCircle('red')" style="
    background: #c38543;
    border: solid 7px #57370a;
    ">One-hundred sevethree</button>
    
    <audio id="pop" class="sfx" src="/audios/pop.mp3"></audio>

    <div id="redCircle" class="msg" style="display: none; position: fixed;">
      <span class="close-btn" onclick="closeMsg('redCircle')">❌</span>
    </div>

    <div id="blueCircle" class="msg" style="display: none; position: fixed;">
      <button class="next-btn" onclick="nextLevel()">NEXT LEVEL</button>
    </div>
  </div>

  <script>
    function showCircle(color) {
      const popSound = document.getElementById("pop");
      popSound.currentTime = 0;
      popSound.play();

      document.getElementById("redCircle").style.display = "none";
      document.getElementById("blueCircle").style.display = "none";

      if (color === "red") {
        document.getElementById("redCircle").style.display = "block";
      } else if (color === "blue") {
        document.getElementById("blueCircle").style.display = "block";
      }
    }

    function closeMsg(id) {
      document.getElementById(id).style.display = "none";
    }

    function nextLevel() {
      window.location.href = "mathtopicthreelvlnine";
    }

    document.addEventListener("DOMContentLoaded", () => {
      const musicVolume = parseFloat(localStorage.getItem("musicVolume") || 0.5);
      const sfxVolume = parseFloat(localStorage.getItem("sfxVolume") || 0.5);

      document.querySelectorAll("audio.music").forEach(a => a.volume = musicVolume);
      document.querySelectorAll("audio.sfx").forEach(a => a.volume = sfxVolume);
    });
    </script>

@endsection
