document.addEventListener('DOMContentLoaded', function() {
    const carouselTrack = document.querySelector('.carousel-track');
    const items = document.querySelectorAll('.testimonial-item');
    const indicators = document.querySelectorAll('.indicator');
    const prevBtn = document.querySelector('.carousel-control.prev');
    const nextBtn = document.querySelector('.carousel-control.next');
    let currentIndex = 0;
    const totalItems = items.length;

    // Function to update carousel
    function updateCarousel() {
        items.forEach((item, index) => {
            item.classList.remove('active');
            if (index === currentIndex) {
                item.classList.add('active');
            }
        });
        
        indicators.forEach((indicator, index) => {
            indicator.classList.remove('active');
            if (index === currentIndex) {
                indicator.classList.add('active');
            }
        });
    }

    // Next button click
    nextBtn.addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % totalItems;
        updateCarousel();
    });

    // Previous button click
    prevBtn.addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        updateCarousel();
    });

    // Indicator click
    indicators.forEach(indicator => {
        indicator.addEventListener('click', function() {
            currentIndex = parseInt(this.getAttribute('data-index'));
            updateCarousel();
        });
    });

    // Auto-rotate (optional)
    let autoRotate = setInterval(() => {
        currentIndex = (currentIndex + 1) % totalItems;
        updateCarousel();
    }, 5000);

    // Pause on hover
    carouselTrack.addEventListener('mouseenter', () => {
        clearInterval(autoRotate);
    });

    carouselTrack.addEventListener('mouseleave', () => {
        autoRotate = setInterval(() => {
            currentIndex = (currentIndex + 1) % totalItems;
            updateCarousel();
        }, 5000);
    });
}); 