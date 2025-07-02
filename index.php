<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon links (place BEFORE <title> tag) -->
    <link rel="icon" href="assets/favicon.ico" type="image/x-icon" sizes="any">
    <link rel="icon" href="assets/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="assets/apple-touch-icon.png">

    <title>Endevo - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Load the full Font Awesome 6 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> -->
    <link rel="stylesheet" href="assets/styles/style.css" />
    <link rel="stylesheet" href="assets/styles/heroslider.css">
    <link rel="stylesheet" href="assets/styles/services-section.css">
    <link rel="stylesheet" href="assets/styles/split-hero.css">
    <link rel="stylesheet" href="assets/styles/values-section.css">
    <link rel="stylesheet" href="assets/styles/clients-section.css">
    <link rel="stylesheet" href="assets/styles/testimonials.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
    <!-- <link rel="stylesheet" href="about_us.css"> -->
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src *; style-src 'self' 'unsafe-inline' https://cdnjs.cloudflare.com; font-src 'self' https://cdnjs.cloudflare.com" -->

    <style>
        :root {
            --primary-color: #4F46E5;
            --primary-light: #6366F1;
            --white: #ffffff;
            --gray-light: #f5f7fa;
            --gray-dark: #6B7280;
        }

        body {
            background-color: var(--gray-light) !important;
        }
    </style>
</head>

<body>

    <section class="video-hero">
        <div class="video-background">
            <video autoplay muted loop playsinline id="heroVideo">
                <!-- Small screen (mobile) version -->
                <source src="assets/website video final-copy.mp4" media="(max-width: 768px)" type="video/mp4" />
                <!-- Default / large screen version -->
                <source src="assets/website video final.mp4" type="video/mp4" />
                Your browser does not support the video tag.
            </video>
            <div class="video-overlay"></div>
        </div>
    </section>


    <!-- Welcome Note Section -->
    <section class="welcome-note-section">
        <div class="container">
            <div class="welcome-card" data-aos="fade-up">
                <div class="welcome-header">
                    <!-- <div class="welcome-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div> -->
                    <h2>Welcome to Endevo</h2>
                    <div class="welcome-divider"></div>
                </div>

                <div class="welcome-content">
                    <p class="welcome-text">At Endevo, we bridge the gap between technology and human experience. Our team combines technical expertise with creative vision to deliver solutions that drive real business impact, from strategy to execution, we're your partners in digital innovation.</p>
                    <!-- <p class="welcome-text">From strategy to execution, we're your partners in digital innovation.</p> -->
                </div>

                <div class="welcome-actions">
                    <a href="services.php" class="btn btn-primary">
                        <span>Our Services</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="projects.php" class="btn btn-outline">
                        <span>Our Valuable Projects</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Do -->
    <section class="services-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title-services">Our Services</h2>
                <p class="section-subtitle">Comprehensive solutions tailored to your digital needs</p>
            </div>

            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="assets/code-solid.svg" alt="">
                        </div>
                        <h3 class="service-title">Web Development</h3>
                        <p class="service-description">Custom websites and web applications built with cutting-edge
                            technologies.</p>
                        <a href="services.php" class="service-link">
                            Learn More
                            <img src="assets/arrow-right-solid.svg" alt="Arrow Right" class="arrow-icon">
                        </a>

                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="assets/calendar-days-solid.svg" alt="">
                        </div>
                        <h3 class="service-title">Event Management</h3>
                        <p class="service-description">Memorable events with flawless execution and creative concepts.
                        </p>
                        <a href="services.php" class="service-link">
                            Learn More
                            <img src="assets/arrow-right-solid.svg" alt="Arrow Right" class="arrow-icon">
                        </a>

                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="assets/bullseye-solid.svg" alt="">
                        </div>
                        <h3 class="service-title">Digital Marketing</h3>
                        <p class="service-description">Data-driven strategies to grow your online presence and
                            conversions.</p>
                        <a href="services.php" class="service-link">
                            Learn More
                            <img src="assets/arrow-right-solid.svg" alt="Arrow Right" class="arrow-icon">
                        </a>

                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="assets/paintbrush-solid.svg" alt="">
                        </div>
                        <h3 class="service-title">UI/UX Design</h3>
                        <p class="service-description">Beautiful interfaces with intuitive user experiences that
                            convert.</p>
                        <a href="services.php" class="service-link">
                            Learn More
                            <img src="assets/arrow-right-solid.svg" alt="Arrow Right" class="arrow-icon">
                        </a>

                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="assets/magnifying-glass-solid.svg" alt="">
                        </div>
                        <h3 class="service-title">SEO</h3>
                        <p class="service-description">Organic growth strategies to dominate search engine rankings.</p>
                        <a href="services.php" class="service-link">
                            Learn More
                            <img src="assets/arrow-right-solid.svg" alt="Arrow Right" class="arrow-icon">
                        </a>

                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="assets/mobile-screen-button-solid.svg" alt="">
                        </div>
                        <h3 class="service-title">App Development</h3>
                        <p class="service-description">Native and cross-platform mobile applications for all devices.
                        </p>
                        <a href="services.php" class="service-link">
                            Learn More
                            <img src="assets/arrow-right-solid.svg" alt="Arrow Right" class="arrow-icon">
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="values-section py-5">
        <div class="container">
            <div class="section-intro text-center mb-5">
                <h2 class="section-title-values">At Endevo, We Cultivate</h2>
                <p class="section-subtitle">The core principles that guide our work and relationships</p>
            </div>

            <div class="row g-4">
                <!-- Value 1 -->
                <div class="col-md-4">
                    <div class="value-card" data-value="fearless-curiosity">
                        <div class="value-icon">
                            <img src="assets/compass-solid.svg" alt="Compass Icon">
                        </div>
                        <h3 class="value-title">Fearless Curiosity</h3>
                        <div class="value-content">
                            <p>We explore new tech, trends, and territories, because innovation begins where comfort ends.</p>
                        </div>
                        <div class="value-overlay"></div>
                    </div>
                </div>


                <!-- Value 2 -->
                <div class="col-md-4">
                    <div class="value-card" data-value="transparent-communication">
                        <div class="value-icon">
                            <img src="assets/comments-solid.svg" alt="comments Icon">
                        </div>
                        <h3 class="value-title">Transparent Communication</h3>
                        <div class="value-content">
                            <p>No filters, no fluff. Just honest conversations that move ideas forward and teams closer.
                            </p>
                        </div>
                        <div class="value-overlay"></div>
                    </div>
                </div>

                <!-- Value 3 -->
                <div class="col-md-4">
                    <div class="value-card" data-value="peer-led-growth">
                        <div class="value-icon">
                            <img src="assets/people-arrows-solid.svg" alt="Compass Icon">

                        </div>
                        <h3 class="value-title">Peer-Led Growth</h3>
                        <div class="value-content">
                            <p>We grow by teaching and learning from each other. Every interaction is a chance to level
                                up.</p>
                        </div>
                        <div class="value-overlay"></div>
                    </div>
                </div>

                <!-- Value 4 -->
                <div class="col-md-4">
                    <div class="value-card" data-value="tech-heart">
                        <div class="value-icon">
                            <img src="assets/heart-pulse-solid.svg" alt="Compass Icon">

                        </div>
                        <h3 class="value-title">Tech + Heart</h3>
                        <div class="value-content">
                            <p>We blend cutting-edge solutions with human-first thinking. Because real impact happens at
                                that intersection.</p>
                        </div>
                        <div class="value-overlay"></div>
                    </div>
                </div>

                <!-- Value 5 -->
                <div class="col-md-4">
                    <div class="value-card" data-value="purpose-driven">
                        <div class="value-icon">
                            <img src="assets/bullseye-solid.svg" alt="Target Icon">
                        </div>
                        <h3 class="value-title">Purpose-Driven Action</h3>
                        <div class="value-content">
                            <p>Beyond profits, we focus on progress — through ethical practices, community work, and
                                digital responsibility.</p>
                        </div>
                        <div class="value-overlay"></div>
                    </div>
                </div>

                <!-- Value 6 -->
                <div class="col-md-4">
                    <div class="value-card" data-value="celebration-culture">
                        <div class="value-icon">
                            <img src="assets/champagne-glasses-solid.svg" alt="Target Icon">
                        </div>
                        <h3 class="value-title">Celebration Culture</h3>
                        <div class="value-content">
                            <p>From big wins to tiny breakthroughs, we make space to pause, smile, and celebrate our
                                grind.</p>
                        </div>
                        <div class="value-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section class="clients-section py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title-clients">Our Clients</h2>
                <p class="section-subtitle">Collaborations That Matter</p>
            </div>

            <div class="client-logos-container">
                <div class="client-logos-track">
                    <!-- Client Logos - Duplicate this block for more logos -->
                    <div class="client-logo-item">
                        <img src="assets/york_uni.jpg" alt="BIMT" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/cmi.png" alt="Client 2" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/BIMT-NEW-LOGO.png" alt="Client 3" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/thenextlogo.webp" alt="Client 4" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/asma muftha.png" alt="Client 5" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/Ipa.png" alt="Client 6" class="client-logo-img cmi-logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/IFA.png" alt="Client 7" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/Carewell.png" alt="Client 8" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/ihl.png" alt="Client 9" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/global ceo forum.jpg" alt="Client 9" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/Rte_logo.jpg" alt="Client 9" class="client-logo-img">
                    </div>
                    <!-- Duplicate these for infinite scroll effect -->
                    <div class="client-logo-item">
                        <img src="assets/york_uni.jpg" alt="BIMT" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/cmi.png" alt="Client 2" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/BIMT-NEW-LOGO.png" alt="Client 3" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/thenextlogo.webp" alt="Client 4" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/asma muftha.png" alt="Client 5" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/Ipa.png" alt="Client 6" class="client-logo-img cmi-logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/IFA.png" alt="Client 7" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/Carewell.png" alt="Client 8" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/ihl.png" alt="Client 9" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/global ceo forum.jpg" alt="Client 9" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/Rte_logo.jpg" alt="Client 9" class="client-logo-img">
                    </div>
                    <!-- 3rd Section -->
                    <div class="client-logo-item">
                        <img src="assets/york_uni.jpg" alt="BIMT" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/cmi.png" alt="Client 2" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/BIMT-NEW-LOGO.png" alt="Client 3" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/thenextlogo.webp" alt="Client 4" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/asma muftha.png" alt="Client 5" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/Ipa.png" alt="Client 6" class="client-logo-img cmi-logo">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/IFA.png" alt="Client 7" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/Carewell.png" alt="Client 8" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/ihl.png" alt="Client 9" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/global ceo forum.jpg" alt="Client 9" class="client-logo-img">
                    </div>
                    <div class="client-logo-item">
                        <img src="assets/Rte_logo.jpg" alt="Client 9" class="client-logo-img">
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section  -->

    <!-- Our Expertise Section -->
    <section class="expertise-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column - Description -->
                <div class="col-lg-6">
                    <div class="expertise-content">
                        <h2 class="section-title-testimoonials">Our Technical Expertise</h2>
                        <br><br>
                        <!-- <p class="section-subtitle">Mastering the tools that power digital innovation</p> -->
                        <div class="expertise-description">
                            <p>We combine cutting-edge technologies with creative problem-solving to deliver exceptional
                                digital experiences. Our team stays ahead of industry trends to implement the most
                                effective solutions for your business needs.</p>
                            <!-- <div class="tech-stats">
                                <div class="stat-item">
                                    <div class="stat-number" data-count="10">0</div>
                                    <div class="stat-label">Projects Completed</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-number" data-count="10">0</div>
                                    <div class="stat-label">Client Satisfaction</div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

                <!-- Right Column - Technology Logos -->
                <div class="col-lg-6">
                    <div class="tech-showcase">
                        <div class="tech-grid">
                            <!-- Web Technologies -->
                            <div class="tech-item" data-tech="wordpress">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/98/WordPress_blue_logo.svg" alt="WordPress">
                                <div class="tech-tooltip">WordPress</div>
                            </div>

                            <div class="tech-item" data-tech="html5">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" alt="HTML5">
                                <div class="tech-tooltip">HTML5</div>
                            </div>

                            <div class="tech-item" data-tech="css3">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="CSS3">
                                <div class="tech-tooltip">CSS3</div>
                            </div>

                            <div class="tech-item" data-tech="javascript">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Unofficial_JavaScript_logo_2.svg" alt="JavaScript">
                                <div class="tech-tooltip">JavaScript</div>
                            </div>

                            <!-- Backend Technologies -->
                            <div class="tech-item" data-tech="laravel">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="Laravel">
                                <div class="tech-tooltip">Laravel</div>
                            </div>

                            <div class="tech-item" data-tech="python">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="Python">
                                <div class="tech-tooltip">Python</div>
                            </div>

                            <div class="tech-item" data-tech="nodejs">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d9/Node.js_logo.svg" alt="Node.js">
                                <div class="tech-tooltip">Node.js</div>
                            </div>

                            <!-- MERN Stack Components -->
                            <div class="tech-item" data-tech="mongodb">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/93/MongoDB_Logo.svg" alt="MongoDB">
                                <div class="tech-tooltip">MongoDB</div>
                            </div>

                            <div class="tech-item" data-tech="express">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/6/64/Expressjs.png" alt="Express.js">
                                <div class="tech-tooltip">Express.js</div>
                            </div>

                            <div class="tech-item" data-tech="react">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg" alt="React">
                                <div class="tech-tooltip">React</div>
                            </div>

                            <!-- Additional Technologies -->
                            <!-- <div class="tech-item" data-tech="zapier">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Zapier_logo.png" alt="Zapier">
                                <div class="tech-tooltip">Zapier</div>
                            </div> -->

                            <div class="tech-item" data-tech="docker">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Docker_%28container_engine%29_logo.svg" alt="Docker">
                                <div class="tech-tooltip">Docker</div>
                            </div>

                            <div class="tech-item" data-tech="aws">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/93/Amazon_Web_Services_Logo.svg" alt="AWS">
                                <div class="tech-tooltip">AWS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What Our Clients Say -->
    <section class="client-testimonials">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">What Our Clients Say</h2>
                <p class="section-subtitle">Hear from those who've experienced our services</p>
            </div>

            <div class="testimonial-carousel">
                <!-- Carousel Controls -->
                <button class="carousel-control prev" aria-label="Previous testimonial">
                    <img src="assets/chevron-left-solid.svg" alt="" style="width: 25px; height: 15px;">
                </button>

                <div class="carousel-track">
                    <!-- Testimonial Items -->
                    <div class="testimonial-item active" data-index="0">
                        <div class="testimonial-content">
                            <div class="user-info">
                                <img src="assets/testimonial_4.png" alt="Sarah J." class="user-avatar">
                                <div class="user-details">
                                    <h4>Mohsin Ramzan</h4>
                                    <p>Founder/ Managing Director, RTE Global</p>
                                    <!-- <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div> -->
                                </div>
                            </div>
                            <div class="testimonial-text">
                                <p>"A special thanks to Endevo for all the fantastic work they've done at this event. It wouldn’t have gone as smoothly without their excellent support. They bring a huge amount of expertise not just in event management, but also in putting together press releases, handling AV, and managing communications. It's been a real privilege, and I personally recommend them for any future events that any institution may have. They have truly made this event a memorable moment for York St John University."</p>
                                <!-- <div class="message-time">2 days ago</div> -->
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item" data-index="1">
                        <div class="testimonial-content">
                            <div class="user-info">
                                <img src="assets/testimonial_1.jpg" alt="Michael T." class="user-avatar">
                                <div class="user-details">
                                    <h4>Prof. Rob Morter</h4>
                                    <p>Pro Vice Chancellor, York St John University</p>
                                    <!-- <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div> -->
                                </div>
                            </div>
                            <div class="testimonial-text">
                                <p>"Hi, I'm Professor Rob Morter, the Pro Vice Chancellor of York St John University. I’d like to recommend Endevo for event management services. They’ve done a fantastic job with our York St John University engagement event this evening in Colombo."</p>
                                <!-- <div class="message-time">1 week ago</div> -->
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-item" data-index="2">
                        <div class="testimonial-content">
                            <div class="user-info">
                                <img src="assets/testimonial_3.png" alt="Emily R." class="user-avatar">
                                <div class="user-details">
                                    <h4>Dr. Deepal Perera</h4>
                                    <p>Head of Sales</p>
                                    <!-- <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div> -->
                                </div>
                            </div>
                            <div class="testimonial-text">
                                <p>"Hi, I’m Dr. Deepal Perera. York St John University’s local summit in Sri Lanka has been very well organized, and a wonderful job has been done by Endevo Private Limited, the event management company. The young team did a fabulous job organizing this event in a very professional and magnificent manner. I wish them all the very best."</p>
                                <!-- <div class="message-time">3 weeks ago</div> -->
                            </div>
                        </div>
                    </div>

                    <!-- <div class="testimonial-item" data-index="3">
                    <div class="testimonial-content">
                        <div class="user-info">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="David K." class="user-avatar">
                            <div class="user-details">
                                <h4>David Kim</h4>
                                <p>Founder & CEO</p> -->
                    <!-- <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div> -->
                    <!-- </div>
                        </div>
                        <div class="testimonial-text">
                            <p>"Endevo's mobile app development exceeded our expectations. They delivered on time and within budget, and the app has significantly boosted our customer engagement."</p> -->
                    <!-- <div class="message-time">1 month ago</div> -->
                    <!-- </div>
                    </div>
                </div> -->

                    <!-- <div class="testimonial-item" data-index="4">
                    <div class="testimonial-content">
                        <div class="user-info">
                            <img src="https://randomuser.me/api/portraits/women/25.jpg" alt="Lisa M." class="user-avatar">
                            <div class="user-details">
                                <h4>Lisa Martinez</h4>
                                <p>Director of Operations</p> -->
                    <!-- <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div> -->
                    <!-- </div>
                        </div>
                        <div class="testimonial-text">
                            <p>"The custom software solution Endevo built for us streamlined our operations and saved us countless hours. Their team was professional, responsive, and truly understood our needs."</p> -->
                    <!-- <div class="message-time">2 months ago</div> -->
                    <!-- </div>
                    </div>
                </div> -->
                </div>

                <button class="carousel-control next" aria-label="Next testimonial">
                    <img src="assets/chevron-right-solid.svg" alt="" style="width: 25px; height: 15px;">
                </button>

                <!-- Carousel Indicators -->
                <div class="carousel-indicators">
                    <button class="indicator active" data-index="0"></button>
                    <button class="indicator" data-index="1"></button>
                    <button class="indicator" data-index="2"></button>
                    <!-- <button class="indicator" data-index="3"></button> -->
                    <!-- <button class="indicator" data-index="4"></button> -->
                </div>

            </div>
        </div>
    </section>


    <!-- Make sure you have Bootstrap JS included -->
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

<?php include 'footer.php'; ?>