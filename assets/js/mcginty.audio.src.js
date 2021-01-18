var audio = new Audio(site_url+'assets/sound/music.mp3');
audio.volume = vol;
audio.loop = true;

//Paused state on load
var audioState = 0;

var bars = document.getElementsByClassName("audiobars")[0];

function togglePlay() {
    if (audioState == 0) {
        audio.play();
    } else {
        audio.pause();
    }
}

audio.onpause = function() {
    audioState = 0;
    for (let i=1; i<=5; i++) {
        bars.childNodes[(i-1)*2+1].classList.replace("playing","paused");
    }
    document.getElementById("playpause").checked = true;
}

audio.onplay = function() {
    audioState = 1;
    for (let i=1; i<=5; i++) {
        bars.childNodes[(i-1)*2+1].classList.replace("paused","playing");
    }
    document.getElementById("playpause").checked = false;
}