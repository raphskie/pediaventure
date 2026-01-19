<html><head>
        <title>Settings | PEDIAVENTURE</title>
        <link rel="stylesheet" href="{{ asset('css/overallcss.css') }}">
    </head>
    <body class="login" style="background-image: url('{{ asset('bgs/gradetwomathbg.png') }}');">
        <div class="nav-left">
                <a class="nav-item" href="javascript:history.back()">
                    <img class="nav-img" src="{{ asset('imgs/back-button.png') }}" style="transform: scaleX(-1);width: 7%;">
                </a>
            </div>
        <div class="container-login">
        <h1 class="h1-center">SETTINGS</h1>
            <div>
                <a class="account-inf-a" href="accinf">
                   ACCOUNT INFORMATION
                </a>

                <div class="centered-a green-a button-a" style="margin: 10px auto;background-color: #6c5030;border: solid #4a3412 10px;width: 81%;padding: 10px;">
                   <label for="musicVolume" style="
    font-family: 'myFont2';
    font-size: 26px;
">🎵 MUSIC VOLUME</label>
                   <input type="range" id="musicVolume" min="0" max="1" step="0.01">
                </div>

                <div class="centered-a green-a button-a" style="margin: 10px auto;background-color: #6c5030;border: solid #4a3412 10px;width: 81%;padding: 10px;">
                   <label for="sfxVolume" style="
    font-family: 'myFont2';
    font-size: 26px;
">🔊 SFX VOLUME</label>
                   <input type="range" id="sfxVolume" min="0" max="1" step="0.01">
                </div>
            </div>
        </div>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const musicSlider = document.getElementById("musicVolume");
        const sfxSlider = document.getElementById("sfxVolume");

        const savedMusicVolume = localStorage.getItem("musicVolume") || 0.5;
        const savedSfxVolume = localStorage.getItem("sfxVolume") || 0.5;
        musicSlider.value = savedMusicVolume;
        sfxSlider.value = savedSfxVolume;

        musicSlider.addEventListener("input", () => {
            localStorage.setItem("musicVolume", musicSlider.value);
            updateAllAudio();
        });
        sfxSlider.addEventListener("input", () => {
            localStorage.setItem("sfxVolume", sfxSlider.value);
            updateAllAudio();
        });

        function updateAllAudio() {
            const musicVolume = parseFloat(localStorage.getItem("musicVolume") || 0.5);
            const sfxVolume = parseFloat(localStorage.getItem("sfxVolume") || 0.5);

            document.querySelectorAll("audio.music").forEach(a => a.volume = musicVolume);
            document.querySelectorAll("audio.sfx").forEach(a => a.volume = sfxVolume);
        }

        updateAllAudio();
    });
    </script>


</body></html>

