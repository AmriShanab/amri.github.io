<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Endevo - Services</title>
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
    <link rel="stylesheet" href="assets/styles/heroslider.css">
    <!-- <link rel="stylesheet" href="assets/styles/about_us.css"> -->
    <link rel="stylesheet" href="assets/styles/footer.css">
    <link rel="stylesheet" href="assets/styles/services-page.css">

</head>

<body>
    <br><br><br><br>
    <div class="vector-bg vector-splash"></div>
    <div class="vector-bg vector-2"></div>
    <div class="vector-bg vector-3"></div>

    <section class="services-section">
        <div class="section-title">
            <h2>Our Services</h2>
            <p>We offer comprehensive solutions to help your business grow in the digital world.</p>
        </div>

        <div class="services-container">
            <!-- Web Development -->
            <div class="service-card" data-service="web-development">
                <div class="card-image"
                    style="background-image: url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80');">
                </div>
                <div class="card-content">
                    <h3>Web Development</h3>
                    <p>Custom websites that create lasting impressions with responsive design and optimal performance.
                    </p>
                    <a class="read-more">Read More >></a>
                </div>
            </div>

            <!-- Digital Marketing -->
            <div class="service-card" data-service="digital-marketing">
                <div class="card-image"
                    style="background-image: url('https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');">
                </div>
                <div class="card-content">
                    <h3>Digital Marketing</h3>
                    <p>Strategic campaigns to increase your online visibility and drive targeted traffic.</p>
                    <a class="read-more">Read More  >></a>
                </div>
            </div>

            <!-- Event Management -->
            <div class="service-card" data-service="event-management">
                <div class="card-image"
                    style="background-image: url('https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');">
                </div>
                <div class="card-content">
                    <h3>Event Management</h3>
                    <p>Memorable events perfectly planned and executed from conception to completion.</p>
                    <a class="read-more">Read More  >></a>
                </div>
            </div>

            <!-- UI/UX Design -->
            <div class="service-card" data-service="ui-ux-design">
                <div class="card-image"
                    style="background-image: url('https://images.unsplash.com/photo-1541462608143-67571c6738dd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');">
                </div>
                <div class="card-content">
                    <h3>UI/UX Design</h3>
                    <p>Intuitive interfaces and seamless user experiences that delight your customers.</p>
                    <a class="read-more">Read More  >></a>
                </div>
            </div>

            <!-- Search Engine Optimization -->
            <div class="service-card" data-service="seo">
                <div class="card-image"
                    style="background-image: url('https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');">
                </div>
                <div class="card-content">
                    <h3>Search Engine Optimization</h3>
                    <p>Improve your search rankings and organic traffic with our proven SEO strategies.</p>
                    <a class="read-more">Read More  >></a>
                </div>
            </div>

            <!-- Photography and Videography -->
            <div class="service-card" data-service="photography-videography">
                <div class="card-image"
                    style="background-image: url('https://images.unsplash.com/photo-1516035069371-29a1b244cc32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1528&q=80');">
                </div>
                <div class="card-content">
                    <h3>Photography & Videography</h3>
                    <p>High-quality visual content that tells your brand's story and engages your audience.</p>
                    <a class="read-more">Read More  >></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Overlay -->
    <div class="modal-overlay" id="serviceModal">
        <div class="modal-container">
            <span class="modal-close" id="modalClose">&times;</span>
            <div class="modal-header">
                <h2 id="modalTitle">Service Title</h2>
            </div>
            <div class="modal-content">
                <p id="modalDescription">Service description will appear here.</p>
                <div class="service-features">
                    <h3>What We Offer</h3>
                    <ul class="features-list" id="modalFeatures">
                        <!-- Features will be added dynamically -->
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <footer class="premium-footer">
        <div class="footer-wave">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    opacity=".25" class="shape-fill"></path>
                <path
                    d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                    opacity=".5" class="shape-fill"></path>
                <path
                    d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="footer-brand">
                            <h3 class="footer-logo">Endevo</h3>
                            <p class="footer-tagline">Innovating digital experiences for tomorrow's world.</p>
                            <div class="social-links">
                                <a href="https://www.facebook.com/profile.php?id=61564148454268&mibextid=wwXIfr&rdid=RokhX2XvDpODHrFN&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1C2fVTgRpT%2F%3Fmibextid%3DwwXIfr#" class="social-link"><img src="assets/facebook.svg" alt="Facebook"></a>
                                <a href="https://www.linkedin.com/company/endevo-holdings/" class="social-link"><img src="assets/linkedin.svg" alt="LinkedIn"></a>
                                <a href="https://www.instagram.com/endevo.co?igsh=Zmh5dmJwa2FpYzNx&utm_source=qr" class="social-link"><img src="assets/instagram.svg" alt="Instagram"></a>
                                <a href="#" class="social-link"><img src="assets/whatsapp.svg" alt="Whatsapp"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                        <h4 class="footer-heading">Company</h4>
                        <ul class="footer-links">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about_us.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="projects.php">Projects</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-4 mb-4 mb-md-0">
                        <h4 class="footer-heading">Contact Us</h4>
                        <ul class="footer-contact-info">
                            <li class="contact-item">
                                <img src="assets/phone.svg" alt="Phone Icon" class="contact-icon">
                                <a href="tel:+94771234567">+94 77 123 4567</a>
                            </li>
                            <li class="contact-item">
                                <img src="assets/mail.svg" alt="Phone Icon" class="contact-icon">
                                <a href="mailto:info@endevo.com">info@endevo.com</a>
                            </li>
                            <li class="contact-item">
                                <img src="assets/house.svg" alt="Phone Icon" class="contact-icon">
                                <span>123 Tech Street, Colombo 05, Sri Lanka</span>
                            </li>
                            <li class="contact-item">
                                <img src="assets/time.svg" alt="Phone Icon" class="contact-icon">
                                <span>Mon-Fri: 9:00 AM - 6:00 PM</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <h4 class="footer-heading">Newsletter</h4>
                        <p class="footer-text">Subscribe to our newsletter for the latest updates.</p>
                        <form class="newsletter-form">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Your email" required>
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="copyright">&copy; 2025 Endevo. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-legal-links">
                            <a href="#">Privacy Policy</a>
                            <a href="#">Terms of Service</a>
                            <a href="#">Cookie Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/JS/hero-slider.js"></script>
    <script src="assets/JS/split-hero.js"></script>
    <!-- <script src="assets/JS/services-section.js"></script> -->
    <script src="assets/JS/values-section.js"></script>
    <script src="assets/JS/testimonials.js"></script>
    <script src="assets/JS/clients-section.js"></script>
    <script src="assets/JS/footer.js"></script>
    <script>
        // Service data
        const services = {
            'web-development': {
                title: 'Web Development',
                description: 'At Endevo, we build dynamic, scalable, and user-centric websites that create a lasting impression. Whether you need an engaging landing page, a corporate website, or an eCommerce platform, our team of expert developers ensures that your web presence is responsive, optimized, and secure.',
                features: [
                    'Custom Website Design & Development',
                    'Responsive Web Development',
                    'E-commerce Solutions',
                    'Content Management Systems (CMS)',
                    'SEO Optimized Websites',
                    'Website Maintenance & Support'
                ]
            },
            'digital-marketing': {
                title: 'Digital Marketing',
                description: `Maximize your online presence and generate qualified leads with our result-driven digital marketing strategies.
    Our team leverages the power of social media, SEO, SEM, and content marketing to boost your visibility and
    grow your business in the digital space.`,

                features: [
                    'Social Media Marketing',
                    'Paid Advertising Campaigns',
                    'Search Engine Optimization (SEO)',
                    'Email Marketing and SMS Campaigns',
                    'Digital PR & Outreach',
                    'Content Creation & Copywriting',
                    'Influencer Marketing'
                ]
            },
            'event-management': {
                title: 'Event Management',
                description: `At Endevo, event management is about bringing your vision to life with creativity and precision. We handle
every detail, from conceptualizing themes to coordinating logistics, ensuring seamless execution. Our goal
is to create experiences that resonate with your audience and leave lasting impressions.`,
                features: [
                    'Event Planning & Consultation',
                    'Venue Selection & Booking',
                    'Theme & Concept Development',
                    'Award Ceremonies',
                    'Food Festivals',
                    'Vendor Coordination & Management',
                    'Event Design & Décor',
                    'Corporate Event Management',
                    'Audio-Visual & Technical Support',
                    'Catering & Menu Planning',
                    'Security & Event Staffing',
                    'Graduation Ceremonies',
                    'Brand Launches',
                    'Team-Building & Corporate Retreats',
                    'Expos & Trade Fairs',
                    'Networking & Business Events'
                ]

            },
            'ui-ux-design': {
                title: 'UI/UX Design',
                description: 'We create intuitive and visually appealing interfaces that enhance user satisfaction and improve usability. Our design process focuses on understanding user behavior to deliver exceptional digital experiences.',
                features: [
                    'User Research & Personas',
                    'Wireframing & Prototyping',
                    'Interactive UI Design',
                    'Usability Testing',
                    'Design Systems Creation',
                    'Accessibility Compliance'
                ]
            },
            'seo': {
                title: 'Search Engine Optimization',
                description: 'Improve your website\'s visibility in search engine results with our comprehensive SEO services. We use ethical, white-hat techniques to help you rank higher and attract more organic traffic.',
                features: [
                    'Keyword Research & Strategy',
                    'On-Page SEO Optimization',
                    'Technical SEO Audits',
                    'Link Building Campaigns',
                    'Local SEO Services',
                    'SEO Performance Reporting'
                ]
            },
            'photography-videography': {
                title: 'Photography & Videography',
                description: 'Our professional photography and videography services capture your brand\'s essence with high-quality visuals. We create compelling content that tells your story and resonates with your audience.',
                features: [
                    'Product Photography',
                    'Corporate Videography',
                    'Drone Photography',
                    'Event Coverage',
                    'Commercial Photo Shoots',
                    'Video Editing & Post-Production'
                ]
            }
        };

        // Modal functionality
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('serviceModal');
            const modalTitle = document.getElementById('modalTitle');
            const modalDescription = document.getElementById('modalDescription');
            const modalFeatures = document.getElementById('modalFeatures');
            const modalClose = document.getElementById('modalClose');
            const serviceCards = document.querySelectorAll('.service-card');

            // Open modal when a service card is clicked
            serviceCards.forEach(card => {
                card.addEventListener('click', function() {
                    const serviceId = this.getAttribute('data-service');
                    const service = services[serviceId];

                    modalTitle.textContent = service.title;
                    modalDescription.textContent = service.description;

                    // Clear previous features
                    modalFeatures.innerHTML = '';

                    // Add new features
                    service.features.forEach(feature => {
                        const li = document.createElement('li');
                        li.textContent = feature;
                        modalFeatures.appendChild(li);
                    });

                    // Show modal
                    modal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                });
            });

            // Close modal when X is clicked
            modalClose.addEventListener('click', function() {
                modal.classList.remove('active');
                document.body.style.overflow = 'auto';
            });

            // Close modal when clicking outside the modal content
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    modal.classList.remove('active');
                    document.body.style.overflow = 'auto';
                }
            });

            // Close modal with Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modal.classList.contains('active')) {
                    modal.classList.remove('active');
                    document.body.style.overflow = 'auto';
                }
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.premium-navbar');
            const navLinks = document.querySelectorAll('.nav-link');
            const logoImg = document.querySelector('.logo-img');
            const logoText = document.querySelector('.logo-text');

            // Scroll effect (without logo resizing)
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Hover effect for nav links
            navLinks.forEach(link => {
                link.addEventListener('mouseenter', function() {
                    const underline = this.querySelector('.nav-underline');
                    gsap.to(underline, {
                        width: '100%',
                        duration: 0.4,
                        ease: "power2.out"
                    });
                    gsap.to(this.querySelector('.nav-text'), {
                        y: -2,
                        color: '#4F46E5',
                        duration: 0.3
                    });
                });

                link.addEventListener('mouseleave', function() {
                    if (!this.classList.contains('active')) {
                        const underline = this.querySelector('.nav-underline');
                        gsap.to(underline, {
                            width: '0%',
                            duration: 0.3,
                            ease: "power2.out"
                        });
                        gsap.to(this.querySelector('.nav-text'), {
                            y: 0,
                            color: '#1f1f2e',
                            duration: 0.3
                        });
                    }
                });
            });

            // Logo hover effect
            const navbarBrand = document.querySelector('.navbar-brand');
            navbarBrand.addEventListener('mouseenter', function() {
                gsap.to(logoImg, {
                    rotate: 10,
                    duration: 0.3
                });
                gsap.to(logoText, {
                    letterSpacing: '1.5px',
                    duration: 0.3
                });
            });

            navbarBrand.addEventListener('mouseleave', function() {
                gsap.to(logoImg, {
                    rotate: 0,
                    duration: 0.3
                });
                gsap.to(logoText, {
                    letterSpacing: '0.5px',
                    duration: 0.3
                });
            });

            // Mobile menu close on click
            const mobileLinks = document.querySelectorAll('#navbarNav .nav-link');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    const navbarCollapse = document.getElementById('navbarNav');
                    if (navbarCollapse.classList.contains('show')) {
                        bootstrap.Collapse.getInstance(navbarCollapse).hide();
                    }
                });
            });
        });

        // Theme switcher
        const themeSwitcher = document.querySelector('.theme-switcher');
        if (themeSwitcher) {
            themeSwitcher.addEventListener('click', function() {
                document.body.classList.toggle('dark-theme');
                this.classList.toggle('active');
            });
        }
    </script>


</body>

</html>