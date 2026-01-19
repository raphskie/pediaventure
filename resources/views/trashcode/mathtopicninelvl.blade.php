@extends('layout.layout')

@section('back-link', 'mathtopiceightlevels')
@section('title', 'Complete the Multiplication Table | Grade 3 Math | PEDIAVENTURE')
@section('body-class', 'grade-two-math')
@section('content')

<audio id="bgMusic" src="http://127.0.0.1:8000/audios/spelling-bg1.mp3" autoplay="" loop=""></audio>

  <div class="instruction-container">
    <h1 class="h1-instruction" style="
        width: 69%;
        font-size: 26px;
        font-family: 'myFont';
        margin-top: 4%;
        line-height: 36px;
        font-weight: 100;
    ">COMPLETE THE MULTIPLICATION TABLE</h1>
  </div>

  <table class="multiplication">
  <thead>
    <tr>
      <th>×</th>

      <script>
        for (let i = 1; i <= 10; i++) {
          document.write(`<th>${i}</th>`);
        }
      </script>
    </tr>
  </thead>
  <tbody>
    <script>
      for (let row = 1; row <= 10; row++) {
        document.write("<tr>");
        document.write(`<th>${row}</th>`);
        for (let col = 1; col <= 10; col++) {
          document.write(`
            <td  class="multiplication-table">
              <input type="number"
                     data-answer="${row * col}">
            </td>
          `);
        }
        document.write("</tr>");
      }
    </script>
  </tbody>
</table>

<button class="next-btn" onclick="checkAnswers()" style="display:block;margin:20px auto;">
  CHECK ANSWERS
</button>


<div id="blueCircle" class="msg"
     style="display:none; position:fixed;
     background-image:url('http://127.0.0.1:8000/imgs/dialogs/correct-ans-msg.png');">
  <button class="next-btn" onclick="nextLevel()">NEXT LEVEL</button>
</div>


<div id="redCircle" class="msg"
     style="display:none; position:fixed;
     background-image:url('http://127.0.0.1:8000/imgs/dialogs/wrong-ans-msg.png');">
  <span class="close-btn" onclick="closeMsg('redCircle')">❌</span>
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
      window.location.href = "mathtopiceightlvltwo";
    }
      
    function checkAnswers() {
    const inputs = document.querySelectorAll("input");
    let allCorrect = true;

    inputs.forEach(input => {
      const correct = Number(input.dataset.answer);
      const user = Number(input.value);

      if (user !== correct) {
        allCorrect = false;
      }
    });

    if (allCorrect) {
      document.getElementById("blueCircle").style.display = "block";
    } else {
      document.getElementById("redCircle").style.display = "block";
    }
  }
  </script>

@endsection