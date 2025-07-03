console.log("Theme JS Loaded");

// Example Smooth Animation (Bonus)
document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.hero').style.opacity = 1;
});
document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menu-toggle');
    const mainNav = document.querySelector('.main-nav');

    menuToggle.addEventListener('click', () => {
        mainNav.style.display = (mainNav.style.display === 'block') ? 'none' : 'block';
    });
});
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});


