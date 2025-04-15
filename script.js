document.addEventListener('DOMContentLoaded', function () {
    /* Efek Typing Text */
    const typingText = document.querySelector('.typing-text span');
    const textContent = "Informatics engineering student";
    let index = 0;
    
    function typeText() {
        if (index < textContent.length) {
            typingText.innerHTML += textContent.charAt(index);
            index++;
            setTimeout(typeText, 150);
        } else {
            setTimeout(() => {
                typingText.innerHTML = "";
                index = 0;
                typeText();
            }, 2000); 
        }
    }
    
    if (typingText) {
        typeText();
    }
    

    /* Efek Animasi saat Scroll (Fade-in) */
    const sections = document.querySelectorAll('section');
    const observerOptions = {
        root: null,
        threshold: 0.2
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            } else {
                entry.target.classList.remove('fade-in');
            }
        });
    }, observerOptions);

    sections.forEach(section => {
        observer.observe(section);
    });

    /* Hamburger Menu */
    const hamburger = document.getElementById('hamburger');
    const nav = document.querySelector('header nav');

    if (hamburger && nav) {
        hamburger.addEventListener('click', function () {
            nav.classList.toggle('active');
        });
    }
});
