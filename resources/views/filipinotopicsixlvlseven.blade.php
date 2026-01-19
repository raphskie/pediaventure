@extends('layout.layout')

@section('back-link', 'filipinotopicsixlevels')
@section('title', 'Wastong Paggalang, Pagbati, Pakiki-usap, at Paghingi ng Paumanhin | Antas 7 Filipino | PEDIAVENTURE')
@section('body-class', 'grade-one-english')
@section('content')
    
<audio id="bgMusic" src="http://127.0.0.1:8000/audios/spelling-bg1.mp3" autoplay="" loop=""></audio>

  <div class="instruction-container">
    
    <h1 class="h1-instruction">
    NAKITA MO ANG IYONG MATALIK NA KAIBIGAN NA UMIIYAK SA ISANG SULOK, AT NILAPITAN MO SIYA PARA MAGTANONG.
    ALIN ANG WASTONG PANGUNGUSAP PARA DITO?</h1>
  </div>

  <div class="div-choices1">
    <button class="choice" onclick="showCircle('red')">ANONG INIIYAK MO DYAN?</button>
    <button class="choice" onclick="showCircle('red')">HALIKA NA.</button>
    <button class="choice" onclick="showCircle('blue')">BAKIT KA UMIIYAK?</button>
    
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
      window.location.href = "filipinotopicsixlvleight";
    }

    document.addEventListener("DOMContentLoaded", () => {
      const musicVolume = parseFloat(localStorage.getItem("musicVolume") || 0.5);
      const sfxVolume = parseFloat(localStorage.getItem("sfxVolume") || 0.5);

      document.querySelectorAll("audio.music").forEach(a => a.volume = musicVolume);
      document.querySelectorAll("audio.sfx").forEach(a => a.volume = sfxVolume);
    });
    </script>

@endsection