<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Endevo - Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/style.css" />
    <link rel="stylesheet" href="assets/styles/footer.css">
    <link rel="stylesheet" href="assets/styles/contact.css">
    
</head>

<body>

<section class="about-hero">
        <div class="hero-shape shape-1"></div>
        <div class="hero-shape shape-2"></div>
        <div class="container">
            <div class="hero-content">
                <br><br>
                <h1 class="hero-title">Contact Us</h1>
                <p class="hero-subtitle">Get in touch with our team for any inquiries or collaborations</p>
            </div>
        </div>
    </section>
    <section class="contact-section py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <!-- <div class="col-lg-8 text-center">
                    <h2 class="display-5 fw-bold mb-3 top-gap">Contact Us</h2>
                    <p class="lead text-muted">Get in touch with our team for any inquiries or collaborations</p>
                </div> -->
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Contact Form Column -->
                <div class="col-lg-6">
                    <div class="card shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="h4 mb-4">Send us a message</h3>
                            <form id="contactForm" action="submit_contact.php" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inquiry" class="form-label">Your Inquiry</label>
                                    <textarea class="form-control" id="inquiry" name="inquiry" rows="4" required></textarea>
                                </div>
                                <div class="d-grid gap-2 d-md-flex">
                                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary px-4">Clear</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Contact Info Column -->
                <div class="col-lg-6">
                    <div class="card shadow-sm h-100 border-0 gradient-bg">
                        <div class="card-body p-5 d-flex flex-column text-white">
                            <h3 class="h4 mb-3">Connect With Us</h3>
                            <p class="mb-4">We'd love to hear from you! Reach out, follow us, and be a part of our growing community.</p>

                            <div class="mb-4">
                                <h5 class="mb-3">Follow Us</h5>
                                <div class="social-media-grid">
                                    <a href="https://www.facebook.com/share/1C2fVTgRpT/?mibextid=wwXIfr" class="social-icon" target="_blank">
                                        <img src="assets/facebook.svg" alt="Facebook">
                                    </a>
                                    <a href="https://www.instagram.com/endevo.co?igsh=Zmh5dmJwa2FpYzNx&utm_source=qr" class="social-icon" target="_blank">
                                        <img src="assets/instagram.svg" alt="Instagram">
                                    </a>
                                    <a href="https://www.linkedin.com/company/endevo-holdings/" class="social-icon" target="_blank">
                                        <img src="assets/linkedin.svg" alt="LinkedIn">
                                    </a>
                                    <a href="https://www.tiktok.com/@endevo.co?_t=ZS-8wLvZ6UWhKi&_r=1" class="social-icon" target="_blank">
                                        <img src="assets/tiktok.svg" alt="TikTok">
                                    </a>
                                </div>
                            </div>

                            <div class="fun-message mt-auto pt-3 border-top border-light-subtle">
                                <p class="mb-0 fw-semibold">Let’s build something great together</p>
                                <small class="text-white-50">Drop us a message or follow our journey online.</small>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    
    <!-- Make sure you have Bootstrap JS included -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Enhanced form interactions
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contactForm');
            const inputs = form.querySelectorAll('.form-control');

            // Add focus effects
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    const label = this.previousElementSibling;
                    if (label && label.tagName === 'LABEL') {
                        label.style.color = 'var(--primary-color)';
                        label.style.transform = 'translateY(-5px)';
                    }
                });

                input.addEventListener('blur', function() {
                    const label = this.previousElementSibling;
                    if (label && label.tagName === 'LABEL') {
                        label.style.color = 'var(--gray-dark)';
                        label.style.transform = 'translateY(0)';
                    }
                });
            });

            // Form submission animation
            form.addEventListener('submit', function(e) {
                const submitBtn = form.querySelector('button[type="submit"]');
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Sending...';

                // Simulate form submission (remove in production)
                setTimeout(() => {
                    submitBtn.innerHTML = '<i class="fas fa-check"></i> Sent Successfully';
                    submitBtn.style.backgroundColor = '#10B981';

                    // Reset form after delay
                    setTimeout(() => {
                        form.reset();
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = 'Submit';
                        submitBtn.style.backgroundColor = 'var(--primary-color)';
                    }, 2000);
                }, 1500);
            });

            // Floating label effect
            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    const label = this.previousElementSibling;
                    if (this.value) {
                        label.classList.add('active');
                    } else {
                        label.classList.remove('active');
                    }
                });
            });
        });
    </script>
</body>

</html>

<?php
include 'footer.php';
?>