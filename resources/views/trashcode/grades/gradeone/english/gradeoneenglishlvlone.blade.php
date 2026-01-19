@extends('layout.layout')

@section('back-link', 'oneenglishlevels')
@section('content')

<head>
  <title>Level 1 | Grade 1 English | PEDIAVENTURE</title>
</head>
<body class="grade-one-english">
  <audio id="bgMusic" src="http://127.0.0.1:8000/audios/spelling-bg1.mp3" autoplay loop></audio>

  <div class="instruction-container">
    <button class="audio-button" onclick="playSound()">
      <img src="http://127.0.0.1:8000/imgs/speaker.png" style="width: 16%;">
    </button>
    <h1 class="h1-instruction">
      HOW IS THE WORD SPELLED BASED ON THE AUDIO? CHOOSE THE CORRECT SPELLING BELOW.
    </h1>
  </div>

  <div class="div-choices1">
    <button class="choice" onclick="showCircle('red')">Wohking</button>
    <button class="choice" onclick="showCircle('blue')">Walking</button>
    <button class="choice" onclick="showCircle('red')">Wuking</button>
    
    <audio id="pop" src="http://127.0.0.1:8000/audios/pop.mp3"></audio>

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

    function playSound() {
      let audio = new Audio('http://127.0.0.1:8000/audios/gradeoneenglish/1.mp3');
      audio.play();
    }

    function nextLevel() {
      window.location.href = "gradeoneenglishlvltwo";
    }
  </script>

</body>
@endsection
