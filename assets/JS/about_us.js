// Intersection Observer for scroll animations
const aboutObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
        }
    });
}, { 
    threshold: 0.2,
    rootMargin: '0px 0px -100px 0px'
});

document.querySelectorAll('.about-text, .about-image, .vision-image, .mission-image, .values-image').forEach(el => {
    aboutObserver.observe(el);
});



// Intersection Observer for vision section animations
const visionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
        }
    });
}, { 
    threshold: 0.2,
    rootMargin: '0px 0px -100px 0px'
});

document.querySelectorAll('.vision-text, .vision-image').forEach(el => {
    visionObserver.observe(el);
});


// Intersection Observer for mission section animations
const missionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
        }
    });
}, { 
    threshold: 0.2,
    rootMargin: '0px 0px -100px 0px'
});

document.querySelectorAll('.mission-text, .mission-image').forEach(el => {
    missionObserver.observe(el);
});

// Intersection Observer for values section animations
const valuesObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
        }
    });
}, { 
    threshold: 0.2,
    rootMargin: '0px 0px -100px 0px'
});

document.querySelectorAll('.values-text, .values-image').forEach(el => {
    valuesObserver.observe(el);
});

// Initialize AOS for value items
AOS.init({
    duration: 600,
    easing: 'ease-out-sine',
    once: true
});