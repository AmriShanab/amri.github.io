<?php
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endevo Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
    <link rel="stylesheet" href="assets/styles/testPage.css">
</head>

<body>

      <section class="about-hero">
        <div class="hero-shape shape-1"></div>
        <div class="hero-shape shape-2"></div>
        <div class="container">
            <div class="hero-content">
                <br><br>
                <h1 class="hero-title">Our Services</h1>
                <p class="hero-subtitle">Comprehensive solutions designed to elevate your brand and maximize your digital potential</p>
            </div>
        </div>
    </section>

    <div class="services-container">
        <!-- <div class="section-header maargin-top">
            <h2>Our Premium Services</h2>
            <p>Comprehensive solutions designed to elevate your brand and maximize your digital potential</p>
        </div> -->

        <div class="services-grid">
            <!-- Web Development -->
            <div class="service-card">
                <div class="hover-shape shape-1"></div>
                <div class="hover-shape shape-2"></div>
                <div class="service-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="service-title">Web Development</h3>
                <p class="service-desc">We build dynamic, scalable, and user-centric websites that create lasting
                    impressions. From landing pages to complex eCommerce platforms, we ensure your web presence is
                    responsive and secure.</p>
                <ul class="service-features">
                    <li>Custom Website Development</li>
                    <li>Responsive Web Design</li>
                    <li>E-commerce Solutions</li>
                    <li>Content Management Systems</li>
                    <!-- <li>SEO Optimized Websites</li> -->
                    <li>Website Maintenance</li>
                </ul>
            </div>

            <!-- Digital Marketing -->
            <div class="service-card">
                <div class="hover-shape shape-1"></div>
                <div class="hover-shape shape-2"></div>
                <div class="service-icon">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3 class="service-title">Digital Marketing</h3>
                <p class="service-desc">Maximize your online presence with our result-driven strategies. We leverage
                    social media, SEO, and content marketing to boost your visibility and grow your business.</p>
                <ul class="service-features">
                    <li>Social Media Marketing</li>
                    <li>Paid Advertising Campaigns</li>
                    <li>Influencer Marketing</li>
                    <!-- <li>Search Engine Optimization</li> -->
                    <li>Content Marketing Strategy</li>
                    <li>Email & SMS Campaigns</li>
                    
                </ul>
            </div>

            <!-- Event Management -->
            <div class="service-card">
                <div class="hover-shape shape-1"></div>
                <div class="hover-shape shape-2"></div>
                <div class="service-icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <h3 class="service-title">Event Management</h3>
                <p class="service-desc">We bring your vision to life with creativity and precision. From concept to
                    execution, we handle every detail to create experiences that resonate with your audience.</p>
                <ul class="service-features">
                    <li>Event Planning & Consultation</li>
                    <li>Venue Selection & Booking</li>
                    <li>Theme & Concept Development</li>
                    <li>Corporate Event Management</li>
                    <li>Vendor Coordination</li>
                    <li>Brand Launches</li>
                </ul>
            </div>

            <!-- UI/UX Design -->
            <div class="service-card">
                <div class="hover-shape shape-1"></div>
                <div class="hover-shape shape-2"></div>
                <div class="service-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h3 class="service-title">UI/UX Design</h3>
                <p class="service-desc">We craft intuitive and visually stunning interfaces that enhance user
                    engagement. Our human-centered approach ensures seamless navigation and memorable experiences.</p>
                <ul class="service-features">
                    <li>User Research & Analysis</li>
                    <li>Wireframing & Prototyping</li>
                    <li>Interaction Design</li>
                    <li>Visual Design Systems</li>
                    <li>Usability Testing</li>
                    <li>Mobile App Design</li>
                </ul>
            </div>

            <!-- Search Engine Optimization -->
            <div class="service-card">
                <div class="hover-shape shape-1"></div>
                <div class="hover-shape shape-2"></div>
                <div class="service-icon">
                    <i class="fas fa-search-plus"></i>
                </div>
                <h3 class="service-title">SEO Services</h3>
                <p class="service-desc">Improve your search rankings and organic traffic with our comprehensive SEO
                    strategies. We optimize every aspect of your online presence to increase visibility.</p>
                <ul class="service-features">
                    <li>Keyword Research & Strategy</li>
                    <li>On-Page Optimization</li>
                    <li>Technical SEO Audits</li>
                    <li>Link Building & Outreach</li>
                    <li>Local SEO Optimization</li>
                    <li>SEO Analytics & Reporting</li>
                </ul>
            </div>

            <!-- Photography & Videography -->
            <div class="service-card">
                <div class="hover-shape shape-1"></div>
                <div class="hover-shape shape-2"></div>
                <div class="service-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <h3 class="service-title">Photography & Videography</h3>
                <p class="service-desc">We capture compelling visual content that tells your brand story. From product
                    shots to cinematic videos, we create assets that engage your audience.</p>
                <ul class="service-features">
                    <li>Product Photography</li>
                    <li>Corporate Photography</li>
                    <li>Event Coverage</li>
                    <li>Commercial Videography</li>
                    <li>Drone Photography</li>
                    <li>Animation & Motion Graphics</li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/d9ae2b2f6b.js" crossorigin="anonymous"></script>
    <script src="assets/JS/hero-slider.js"></script>
    <script src="assets/JS/split-hero.js"></script>
    <script src="assets/JS/services-section.js"></script>
    <script src="assets/JS/values-section.js"></script>
    <script src="assets/JS/testimonials.js"></script>
    <script src="assets/JS/clients-section.js"></script>
    <script src="assets/JS/footer.js"></script>
    <script>
        const burger = document.getElementById('burger');
        const navLinks = document.querySelector('.main-nav');

        burger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>
</body>

</html>

<?php
include 'footer.php';
?>