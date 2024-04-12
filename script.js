const title = document.querySelector('.title');

document.addEventListener('DOMContentLoaded', function() {
    title.classList.add('animate-title');
});

document.addEventListener('DOMContentLoaded', function() {
    const movingText = document.querySelector('.moving-text');
    movingText.addEventListener('mouseenter', function() {
        movingText.classList.add('hovered');
    });
    movingText.addEventListener('mouseleave', function() {
        movingText.classList.remove('hovered');
    });
});
