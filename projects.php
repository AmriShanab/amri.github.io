<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Endevo - Our Projects</title>
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
    <link rel="stylesheet" href="assets/styles/projects.css" />

    <link rel="stylesheet" href="assets/styles/footer.css">
    <style>
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section class="about-hero">
        <div class="hero-shape shape-1"></div>
        <div class="hero-shape shape-2"></div>
        <div class="container">
            <div class="hero-content">
                <br><br>
                <h1 class="hero-title">Our Projects</h1>
                <p class="hero-subtitle">Explore our portfolio of successful events and website developments</p>
            </div>
        </div>
    </section>
    <section class="projects-section">
        <!-- <div class="section-title">
            <h2 class="">Our Projects</h2>
            <p>Explore our portfolio of successful events and website developments</p>
        </div> -->

        <div class="category-tabs">
            <button class="category-tab active" data-category="events">Events</button>
            <button class="category-tab" data-category="websites">Websites</button>
        </div>

        <!-- Events Category -->
        <div class="category-content active" id="events-content">
            <div class="projects-container">

            <!-- Global CEO Leadership Excellence Awards Night -->
                <div class="project-card">
                    <div class="project-image"
                        style="background-image: url('assets/images/global_ceo/global_ceo_9.jpg');">
                    </div>
                    <div class="project-content">
                        <h3>Global CEO Leadership Excellence Awards</h3>
                        <p>Prestigious awards night recognizing outstanding leadership in the corporate world.</p>
                        <a href="gallery.php?project=global-ceo-leadership-excellence-awards" class="view-btn">View Gallery</a>
                    </div>
                </div>

                <!-- YSJ Sri Lanka Engagement Summit 2025 -->
                <div class="project-card">
                    <div class="project-image"
                        style="background-image: url('assets/images/york_event/york_20.jpg');">
                    </div>
                    <div class="project-content">
                        <h3>YSJ Sri Lanka Engagement Summit 2025</h3>
                        <p>Multi-city educational tour promoting innovative learning approaches.</p>
                        <a href="gallery.php?project=ysj-summit" class="view-btn">View Gallery</a>
                    </div>
                </div>

                <!-- BIMT Graduation -->
                <div class="project-card">
                    <div class="project-image"
                        style="background-image: url('assets/Images/bimt_graduation/bimt_4.jpg');">
                    </div>
                    <div class="project-content">
                        <h3>BIMT Graduation</h3>
                        <p>Memorable graduation ceremony for BIMT students with full event management services.</p>
                        <a href="gallery.php?project=bimt-graduation" class="view-btn">View Gallery</a>
                    </div>
                </div>

                <!-- CMI Launch -->
                <div class="project-card">
                    <div class="project-image"
                        style="background-image: url('assets/images/cmi_launch/IMG_7427.jpg');">
                    </div>
                    <div class="project-content">
                        <h3>CMI Launch</h3>
                        <p>Successful product launch event with media coverage and guest management.</p>
                        <a href="gallery.php?project=cmi-launch" class="view-btn">View Gallery</a>
                    </div>
                </div>

                <!-- IFA Conference -->
                <div class="project-card">
                    <div class="project-image"
                        style="background-image: url('assets/images/ifa_conference/ifa_conference_6.jpg');">
                    </div>
                    <div class="project-content">
                        <h3>IFA Conference</h3>
                        <p>International conference with speakers from around the world and live streaming.</p>
                        <a href="gallery.php?project=ifa-conference" class="view-btn">View Gallery</a>
                    </div>
                </div>

                

                <!-- Next Education Grand Opening -->
                <div class="project-card">
                    <div class="project-image"
                        style="background-image: url('assets/images/next_edu_grand_opening/next_edu_grand_opening_17.jpg');">
                    </div>
                    <div class="project-content">
                        <h3>Next Education Grand Opening</h3>
                        <p>Grand opening ceremony for Next Education's new campus with ribbon-cutting.</p>
                        <a href="gallery.php?project=next-education-grand-opening" class="view-btn">View Gallery</a>
                    </div>
                </div>

                <!-- Next Education Edu Expo -->
                <div class="project-card">
                    <div class="project-image"
                        style="background-image: url('assets/images/next_edu_expo/next_edu_expo_15.jpg');">
                    </div>
                    <div class="project-content">
                        <h3>Next Education Edu Expo</h3>
                        <p>Educational expo showcasing innovative learning solutions and technologies.</p>
                        <a href="gallery.php?project=next-education-edu-expo" class="view-btn">View Gallery</a>
                    </div>
                </div>

                <!-- Signing Ceremony with Angelo Mathews -->
                <div class="project-card">
                    <div class="project-image"
                        style="background-image: url('assets/images/angelo_mathews/IMG_7631.jpg');">
                    </div>
                    <div class="project-content">
                        <h3>Signing Ceremony with Angelo Mathews</h3>
                        <p>Exclusive signing ceremony with cricket star Angelo Mathews as brand ambassador.</p>
                        <a href="gallery.php?project=signing-ceremony-with-angelo-mathews" class="view-btn">View Gallery</a>
                    </div>
                </div>

                <!-- Next Education City Tour 2024,2025 -->
                <div class="project-card">
                    <div class="project-image"
                        style="background-image: url('assets/images/next_edu_bus_promo/IMG_7504.JPG');">
                    </div>
                    <div class="project-content">
                        <h3>Next Education City Tour 2024,2025</h3>
                        <p>Multi-city educational tour promoting innovative learning approaches.</p>
                        <a href="gallery.php?project=next-education-city-tour" class="view-btn">View Gallery</a>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- Websites Category -->
        <section class="portfolio-section">
    <div class="category-content" id="websites-content">
        <div class="projects-grid">
            <!-- Carewells Website -->
            <div class="project-card">
                <div class="project-image" style="background-image: url('assets/Carewell.png');">
                    <div class="project-overlay">
                        <h3>Carewells Website</h3>
                        <a href="https://carewells.lk/" target="_blank" class="view-btn">Visit Website</a>
                    </div>
                </div>
                <div class="project-info">
                    <p>Modern, responsive website for healthcare services with appointment booking system.</p>
                </div>
            </div>

            <!-- BIMT Website -->
            <div class="project-card">
                <div class="project-image" style="background-image: url('assets/BIMT-NEW-LOGO.png');">
                    <div class="project-overlay">
                        <h3>BIMT Website</h3>
                        <a href="https://bimt.lk/" target="_blank" class="view-btn">Visit Website</a>
                    </div>
                </div>
                <div class="project-info">
                    <p>Educational institution website with course management and student portal.</p>
                </div>
            </div>

            <!-- IHL Website -->
            <div class="project-card">
                <div class="project-image" style="background-image: url('assets/ihl.png');">
                    <div class="project-overlay">
                        <h3>IHL Website</h3>
                        <a href="https://ihl.lk/" target="_blank" class="view-btn">Visit Website</a>
                    </div>
                </div>
                <div class="project-info">
                    <p>Corporate website for international holdings with multilingual support.</p>
                </div>
            </div>

            <!-- Asma Muftah Al-Ghanem Advocates Website -->
            <div class="project-card">
                <div class="project-image" style="background-image: url('assets/asma\ muftha.png');">
                    <div class="project-overlay">
                        <h3>Asma Muftah Al-Ghanem Advocates</h3>
                        <a href="https://asmalawfirm.com/" target="_blank" class="view-btn">Visit Website</a>
                    </div>
                </div>
                <div class="project-info">
                    <p>Professional legal services website with case management features.</p>
                </div>
            </div>

        </div>
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.category-tab');
            const contents = document.querySelectorAll('.category-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active class from all tabs and contents
                    tabs.forEach(t => t.classList.remove('active'));
                    contents.forEach(c => c.classList.remove('active'));

                    // Add active class to clicked tab and corresponding content
                    this.classList.add('active');
                    const category = this.getAttribute('data-category');
                    document.getElementById(`${category}-content`).classList.add('active');
                });
            });
        });
    </script>
</body>

</html>

<?php

include 'footer.php';
?>