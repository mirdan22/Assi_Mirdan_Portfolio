export function skills() {


    // Video custume 
    const video = document.querySelector('#demoVideo');
    const playPauseButton = document.querySelector('#playPauseButton');
    const volumeButton = document.querySelector('#volumeButton');

    const categoryLinks = document.querySelectorAll('.skills-link');
    const allContent = document.querySelectorAll('.content');

    function handleCategoryClick(event) {
        event.preventDefault();
        const category = event.currentTarget.dataset.category;
        showContent(category);
    }

    function showContent(category) {
        allContent.forEach(content => {
            content.style.display = 'none';
        });

        const selectedContent = document.querySelector(`#${category}`);
        if (selectedContent) {
            selectedContent.style.display = 'block';
        }
    }

    categoryLinks.forEach(link => {
        link.addEventListener('click', handleCategoryClick);
    });

}
// playPauseButton.addEventListener('click', togglePlay);
// volumeButton.addEventListener('click', toggleVolume);

// function togglePlay() {
//     if (video.paused) {
//         video.play();
//         playPauseButton.textContent = 'Pause';
//     } else {
//         video.pause();
//         playPauseButton.textContent = 'Play';
//     }
// }

// function toggleVolume() {
//     if (video.muted) {
//         video.muted = false;
//         volumeButton.textContent = 'Mute';
//     } else {
//         video.muted = true;
//         volumeButton.textContent = 'Unmute';
//     }
// };