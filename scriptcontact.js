const movingText = document.querySelector('.moving-text');

function toggleAnimation() {
    movingText.classList.toggle('animate-text');
}

movingText.addEventListener('mouseenter', toggleAnimation);
movingText.addEventListener('mouseleave', toggleAnimation);
