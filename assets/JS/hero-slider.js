document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });

    // Slider message animations
    const carousel = document.getElementById('heroCarousel');
    
    carousel.addEventListener('slide.bs.carousel', function (e) {
        const activeSlide = e.relatedTarget;
        const message = activeSlide.querySelector('.slide-message');
        
        // Reset animation
        gsap.set(message, { y: 30, opacity: 0 });
        
        // Animate in
        gsap.to(message, {
            y: 0,
            opacity: 1,
            duration: 0.8,
            delay: 0.3,
            ease: "power2.out"
        });
    });

    // Welcome note animation
    gsap.from(".welcome-note h2", {
        scrollTrigger: {
            trigger: ".welcome-note-section",
            start: "top 80%"
        },
        y: 50,
        opacity: 0,
        duration: 1
    });

    gsap.from(".welcome-content p", {
        scrollTrigger: {
            trigger: ".welcome-note-section",
            start: "top 70%"
        },
        y: 30,
        opacity: 0,
        stagger: 0.2,
        duration: 0.8
    });
});