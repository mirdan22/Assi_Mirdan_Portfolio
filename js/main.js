
// Video custume 
const video = document.querySelector('#demoVideo');
const playPauseButton = document.querySelector('#playPauseButton');
const volumeButton = document.querySelector('#volumeButton');

playPauseButton.addEventListener('click', togglePlay);
volumeButton.addEventListener('click', toggleVolume);

function togglePlay() {
    if (video.paused) {
        video.play();
        playPauseButton.textContent = 'Pause';
    } else {
        video.pause();
        playPauseButton.textContent = 'Play';
    }
}

function toggleVolume() {
    if (video.muted) {
        video.muted = false;
        volumeButton.textContent = 'Mute';
    } else {
        video.muted = true;
        volumeButton.textContent = 'Unmute';
    }
};