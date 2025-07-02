document.addEventListener('DOMContentLoaded', function() {
    const messages = document.querySelectorAll('.message');
    const indicators = document.querySelectorAll('.indicator');
    let currentIndex = 0;
    let messageInterval;
    
    function showMessage(index) {
        // Hide all messages
        messages.forEach(msg => msg.classList.remove('active'));
        indicators.forEach(ind => ind.classList.remove('active'));
        
        // Show selected message
        messages[index].classList.add('active');
        indicators[index].classList.add('active');
        currentIndex = index;
    }
    
    function nextMessage() {
        const nextIndex = (currentIndex + 1) % messages.length;
        showMessage(nextIndex);
    }
    
    // Start rotation (every 5 seconds)
    function startRotation() {
        showMessage(0);
        messageInterval = setInterval(nextMessage, 5000);
    }
    
    // Click handler for indicators
    indicators.forEach(indicator => {
        indicator.addEventListener('click', function() {
            clearInterval(messageInterval);
            showMessage(parseInt(this.dataset.index));
            messageInterval = setInterval(nextMessage, 5000);
        });
    });
    
    // Pause on hover
    const container = document.querySelector('.animated-message-container');
    container.addEventListener('mouseenter', () => {
        clearInterval(messageInterval);
    });
    
    container.addEventListener('mouseleave', () => {
        messageInterval = setInterval(nextMessage, 5000);
    });
    
    // Initialize
    startRotation();
    
    // Video play handling
    const video = document.getElementById('heroVideo');
    if (video) {
        const playPromise = video.play();
        if (playPromise !== undefined) {
            playPromise.catch(error => {
                document.querySelector('.fallback-image').style.display = 'block';
                video.style.display = 'none';
            });
        }
    }
});