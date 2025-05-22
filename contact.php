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
    <style>
        :root {
            --primary-color: #4F46E5;
            --primary-light: #6366F1;
            --white: #ffffff;
            --gray-light: #f5f7fa;
            --gray-dark: #6B7280;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--gray-light);
        }

        .contact-section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
            display: inline-block;
            position: relative;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            right: 0;
            bottom: -10px;
            width: 80px;
            height: 4px;
            background-color: var(--primary-color);
            border-radius: 2px;
        }

        .section-title p {
            color: var(--gray-dark);
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .contact-form {
            background: var(--white);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--gray-dark);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
            outline: none;
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .btn {
            padding: 12px 25px;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-light);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: var(--gray-dark);
            color: white;
            margin-left: 15px;
        }

        .btn-secondary:hover {
            background-color: #4B5563;
            transform: translateY(-2px);
        }

        .contact-info {
            background: var(--white);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
        }

        .social-links {
            margin-top: 40px;
        }

        .social-links h3 {
            font-size: 1.3rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .social-icons {
            display: flex;
            gap: 20px;
        }

        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            color: white;
            border-radius: 50%;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .social-icon:hover {
            background-color: var(--primary-light);
            transform: translateY(-5px);
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
        }

        .alert-success {
            background-color: #D1FAE5;
            color: #065F46;
            border: 1px solid #A7F3D0;
        }

        .alert-danger {
            background-color: #FEE2E2;
            color: #B91C1C;
            border: 1px solid #FECACA;
        }

        @media (max-width: 768px) {
            .contact-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light premium-navbar">
        <div class="container">
            <!-- Logo Container with Space for Logo Image -->
            <div class="navbar-brand-container">
                <a class="navbar-brand" href="#">
                    <img src="assets/Untitled design.png" alt="Endevo Logo" class="logo-img">
                    <span class="logo-text"></span>
                </a>
            </div>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <div class="animated-hamburger">
                    <span class="hamburger-line top-line"></span>
                    <span class="hamburger-line middle-line"></span>
                    <span class="hamburger-line bottom-line"></span>
                </div>
            </button>

            <!-- Main Navigation -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <span class="nav-link-content">
                                <span class="nav-text">Home</span>
                                <span class="nav-underline"></span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="nav-link-content">
                                <span class="nav-text">About Us</span>
                                <span class="nav-underline"></span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="nav-link-content">
                                <span class="nav-text">Services</span>
                                <span class="nav-underline"></span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="nav-link-content">
                                <span class="nav-text">Projects</span>
                                <span class="nav-underline"></span>
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <span class="nav-link-content">
                                <span class="nav-text">Contact</span>
                                <span class="nav-underline"></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="contact-section">
        <div class="section-title">
            <h2>Contact Us</h2>
            <p>Get in touch with our team for any inquiries or collaborations</p>
        </div>

        <div class="contact-container">
            <div class="contact-form">
                <?php
                // Display success or error messages
                if (isset($_GET['status'])) {
                    if ($_GET['status'] == 'success') {
                        echo '<div class="alert alert-success">Thank you! Your message has been submitted successfully.</div>';
                    } elseif ($_GET['status'] == 'error') {
                        echo '<div class="alert alert-danger">There was an error submitting your form. Please try again.</div>';
                    }
                }
                ?>
                
                <form action="submit_contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="inquiry">Your Inquiry</label>
                        <textarea id="inquiry" name="inquiry" class="form-control" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Clear</button>
                    </div>
                </form>
            </div>
            
            <div class="contact-info">
                <h3>Connect With Us</h3>
                <p>Follow us on social media to stay updated with our latest news and offerings.</p>
                
                <div class="social-links">
                    <h3>Our Social Media</h3>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/share/1C2fVTgRpT/?mibextid=wwXIfr" class="social-icon" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/endevo.co?igsh=Zmh5dmJwa2FpYzNx&utm_source=qr" class="social-icon" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/endevo-holdings/" class="social-icon" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.tiktok.com/@endevo.co?_t=ZS-8wLvZ6UWhKi&_r=1" class="social-icon" target="_blank">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <!-- WhatsApp link would go here when you have it -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>