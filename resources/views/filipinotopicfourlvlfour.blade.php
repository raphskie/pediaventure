@extends('layout.layout')

@section('back-link', 'filipinotopicfourlevels')
@section('title', 'Wastong Paggamit ng Dayalogo | Antas 4 Filipino | PEDIAVENTURE')
@section('body-class', 'grade-one-english')
@section('content')
    
<audio id="bgMusic" src="http://127.0.0.1:8000/audios/spelling-bg1.mp3" autoplay="" loop=""></audio>

  <div class="instruction-container">
    
    <h1 class="h1-instruction" style="
    font-size: 22px;
    font-weight: lighter;
">NAKITA MO ANG IYONG KAKLASE NA MAY MAGANDANG LARUAN AT IYON AY NAIS MONG HIRAMIN. 
      ANO ANG WASTONG DAYALOGO O KASABIHAN PARA DITO?
    </h1>
  </div>

  <div class="div-choices1" style="
    display: flex;
    align-content: center;
    flex-direction: column;
    flex-wrap: wrap;
">
    <button class="choice2" onclick="showCircle('red')">AKIN NA IYANG LARUAN MO!</button>
    <button class="choice2" onclick="showCircle('blue')">PWEDE KO BA HIRAMIN ANG IYONG LARUAN?</button>
    <button class="choice2" onclick="showCircle('red')">KAMUSTA NA ANG IYONG INA?</button>
    
    <audio id="pop" class="sfx" src="http://127.0.0.1:8000/audios/pop.mp3"></audio>

    <div id="redCircle" class="msg" style="display: none; position: fixed;">
      <span class="close-btn" onclick="closeMsg('redCircle')">❌</span>
    </div>

    <div id="blueCircle" class="msg" style="display: none; position: fixed;">
      <button class="next-btn" onclick="nextLevel()">MAGPATULOY</button>
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
      window.location.href = "filipinotopicfourlvlfive";
    }

    document.addEventListener("DOMContentLoaded", () => {
      const musicVolume = parseFloat(localStorage.getItem("musicVolume") || 0.5);
      const sfxVolume = parseFloat(localStorage.getItem("sfxVolume") || 0.5);

      document.querySelectorAll("audio.music").forEach(a => a.volume = musicVolume);
      document.querySelectorAll("audio.sfx").forEach(a => a.volume = sfxVolume);
    });
    </script>

@endsection