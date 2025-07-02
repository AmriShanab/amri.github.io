<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Gallery - Endevo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4F46E5;
            --primary-light: #6366F1;
            --white: #ffffff;
            --gray-light: #f5f7fa;
            --gray-dark: #6B7280;
        }

        body {
            font-family: "Nunito Sans", sans-serif;
            background-color: var(--gray-light);
            padding-top: 80px;
        }

        .gallery-header {
            text-align: center;
            margin-bottom: 40px;
            margin-top: 150px !important;
            padding: 0 20px;
        }

        .gallery-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            margin-bottom: 30px;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            color: var(--primary-light);
            transform: translateX(-5px);
        }

        .back-btn i {
            margin-right: 8px;
        }

        .gallery-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .gallery-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            aspect-ratio: 4/3;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(79, 70, 229, 0.2);
        }

        .gallery-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
            
            .gallery-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .gallery-grid {
                grid-template-columns: 1fr;
            }
            
            body {
                padding-top: 60px;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div class="container">
        <!-- <a href="project.php" class="back-btn">
            <i class="fas fa-arrow-left"></i> Back to Projects
        </a> -->
        
        <div class="gallery-header">
            <h1 class="gallery-title" id="galleryTitle">Project Gallery</h1>
        </div>
        
        <div class="gallery-container">
            <div class="gallery-grid" id="galleryGrid">
                <!-- Images will be loaded here via JavaScript -->
            </div>
        </div>
    </div>



    <script>
        // Gallery data for each project
        const galleries = {
            'bimt-graduation': {
                title: 'BIMT Graduation',
                images: [
                    'assets/images/bimt_graduation/bimt_1.jpg',
                    'assets/images/bimt_graduation/bimt_2.jpg',
                    'assets/images/bimt_graduation/bimt_3.jpg',
                    'assets/images/bimt_graduation/bimt_4.jpg',
                    'assets/images/bimt_graduation/bimt_5.jpg',
                    'assets/images/bimt_graduation/bimt_6.jpg',
                    'assets/images/bimt_graduation/bimt_7.jpg',
                    'assets/images/bimt_graduation/bimt_8.jpg',
                    'assets/images/bimt_graduation/bimt_9.jpg',
                    'assets/images/bimt_graduation/bimt_10.jpg',
                    'assets/images/bimt_graduation/bimt_11.jpg',
                    'assets/images/bimt_graduation/bimt_12.jpg',
                    'assets/images/bimt_graduation/bimt_13.jpg',
                    'assets/images/bimt_graduation/bimt_14.jpg',
                    'assets/images/bimt_graduation/bimt_15.jpg',
                    'assets/images/bimt_graduation/bimt_16.jpg',
                    'assets/images/bimt_graduation/bimt_17.jpg',
                    'assets/images/bimt_graduation/bimt_18.jpg',
                    'assets/images/bimt_graduation/bimt_19.jpg',
                    'assets/images/bimt_graduation/bimt_20.jpg',
                ]
            },
            'cmi-launch': {
                title: 'CMI Launch',
                images: [
                    'assets/images/cmi_launch/cmi_launch_1.jpg',
                    'assets/images/cmi_launch/cmi_launch_2.jpg',
                    'assets/images/cmi_launch/cmi_launch_3.jpg',
                    'assets/images/cmi_launch/cmi_launch_4.jpg',
                    'assets/images/cmi_launch/cmi_launch_5.jpg',
                    'assets/images/cmi_launch/cmi_launch_6.jpg',
                    'assets/images/cmi_launch/cmi_launch_7.jpg',
                    'assets/images/cmi_launch/cmi_launch_8.jpg',
                    'assets/images/cmi_launch/cmi_launch_9.jpg',
                    'assets/images/cmi_launch/cmi_launch_10.jpg',
                    'assets/images/cmi_launch/cmi_launch_11.jpg',
                    'assets/images/cmi_launch/cmi_launch_12.jpg',
                    'assets/images/cmi_launch/cmi_launch_13.jpg',
                    'assets/images/cmi_launch/cmi_launch_14.jpg',
                    'assets/images/cmi_launch/cmi_launch_15.jpg',
                    'assets/images/cmi_launch/cmi_launch_16.jpg',
                    'assets/images/cmi_launch/cmi_launch_17.jpg',
                    'assets/images/cmi_launch/cmi_launch_18.jpg',
                    'assets/images/cmi_launch/cmi_launch_19.jpg',
                    'assets/images/cmi_launch/cmi_launch_20.jpg',
                ]
            },
            'ifa-conference': {
                title: 'IFA Conference',
                images: [
                    'assets/images/ifa_conference/ifa_conference_1.jpg',
                    'assets/images/ifa_conference/ifa_conference_2.jpg',
                    'assets/images/ifa_conference/ifa_conference_3.jpg',
                    'assets/images/ifa_conference/ifa_conference_4.jpg',
                    'assets/images/ifa_conference/ifa_conference_5.jpg',
                    'assets/images/ifa_conference/ifa_conference_6.jpg',
                    'assets/images/ifa_conference/ifa_conference_7.jpg',
                    'assets/images/ifa_conference/ifa_conference_8.jpg',
                    'assets/images/ifa_conference/ifa_conference_9.jpg',
                    'assets/images/ifa_conference/ifa_conference_10.jpg',
                    'assets/images/ifa_conference/ifa_conference_11.jpg',
                    'assets/images/ifa_conference/ifa_conference_12.jpg',
                    'assets/images/ifa_conference/ifa_conference_13.jpg',
                    'assets/images/ifa_conference/ifa_conference_14.jpg',
                    'assets/images/ifa_conference/ifa_conference_15.jpg',
                    'assets/images/ifa_conference/ifa_conference_16.jpg',
                    'assets/images/ifa_conference/ifa_conference_17.jpg',
                    'assets/images/ifa_conference/ifa_conference_18.jpg',
                    'assets/images/ifa_conference/ifa_conference_19.jpg',
                    'assets/images/ifa_conference/ifa_conference_20.jpg',
                ]
            },
            'global-ceo-leadership-excellence-awards': {
                title: 'Global CEO Leadership Excellence Awards',
                images: [
                    'assets/images/global_ceo/global_ceo_1.jpg',
                    'assets/images/global_ceo/global_ceo_2.jpg',
                    'assets/images/global_ceo/global_ceo_3.jpg',
                    'assets/images/global_ceo/global_ceo_4.jpg',
                    'assets/images/global_ceo/global_ceo_5.jpg',
                    'assets/images/global_ceo/global_ceo_6.jpg',
                    'assets/images/global_ceo/global_ceo_7.jpg',
                    'assets/images/global_ceo/global_ceo_8.jpg',
                    'assets/images/global_ceo/global_ceo_9.jpg',
                    'assets/images/global_ceo/global_ceo_10.jpg',
                    'assets/images/global_ceo/global_ceo_11.jpg',
                    'assets/images/global_ceo/global_ceo_12.jpg',
                    'assets/images/global_ceo/global_ceo_13.jpg',
                    'assets/images/global_ceo/global_ceo_14.jpg',
                    'assets/images/global_ceo/global_ceo_15.jpg',
                    'assets/images/global_ceo/global_ceo_16.jpg',
                    'assets/images/global_ceo/global_ceo_17.jpg',
                    'assets/images/global_ceo/global_ceo_18.jpg',
                    'assets/images/global_ceo/global_ceo_19.jpg',
                    'assets/images/global_ceo/global_ceo_20.jpg',
                ]
            },
            'next-education-grand-opening': {
                title: 'Next Education Grand Opening',
                images: [
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_1.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_2.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_3.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_4.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_5.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_6.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_7.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_8.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_9.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_10.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_11.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_12.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_13.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_14.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_15.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_16.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_17.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_18.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_19.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_20.jpg',
                    'assets/images/next_edu_grand_opening/next_edu_grand_opening_21.jpg'
                ]
            },
            'signing-ceremony-with-angelo-mathews': {
                title: 'Signing Ceremony with Angelo Mathews',
                images: [
                    'assets/images/angelo_mathews/angelo_mathews_1.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_2.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_3.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_4.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_5.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_6.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_7.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_8.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_9.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_10.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_11.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_12.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_13.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_14.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_15.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_16.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_17.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_18.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_19.jpg',
                    'assets/images/angelo_mathews/angelo_mathews_20.jpg',
                ]
            },
            'next-education-edu-expo': {
                title: 'Next Education Edu Expo',
                images: [
                    'assets/images/next_edu_expo/next_edu_expo_1.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_2.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_3.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_4.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_5.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_6.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_7.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_8.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_9.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_10.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_11.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_12.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_13.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_14.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_15.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_16.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_17.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_18.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_19.jpg',
                    'assets/images/next_edu_expo/next_edu_expo_20.jpg',
                ]
            },
            'next-education-city-tour': {
                title: 'Next Education City Tour 2024,2025',
                images: [
                    'assets/images/next_edu_bus_promo/IMG_7490.JPG',
                    'assets/images/next_edu_bus_promo/IMG_7491.JPG',
                    'assets/images/next_edu_bus_promo/IMG_7492.JPG',
                    'assets/images/next_edu_bus_promo/IMG_7493.JPG',
                    'assets/images/next_edu_bus_promo/IMG_7494.JPG',
                    'assets/images/next_edu_bus_promo/IMG_7495.JPG',
                    'assets/images/next_edu_bus_promo/IMG_7496.JPG',
                    'assets/images/next_edu_bus_promo/IMG_7497.JPG',
                    'assets/images/next_edu_bus_promo/IMG_7498.JPG',
                    'assets/images/next_edu_bus_promo/IMG_7499.JPG',
                    'assets/images/next_edu_bus_promo/IMG_7500.JPG',
                    'assets/images/next_edu_bus_promo/IMG_7501.JPG',
                    'assets/images/next_edu_bus_promo/IMG_7502.JPG',
                    'assets/images/next_edu_bus_promo/IMG_7503.JPG',
                    'assets/images/next_edu_bus_promo/IMG_7504.JPG',
                    'assets/images/next_edu_bus_promo/IMG_7505.JPG',
                ]
            },
            'ysj-summit': {
                title: 'YSJ Sri Lanka Engagement Summit 2025',
                images: [
                    'assets/images/york_event/york_1.jpg',
                    'assets/images/york_event/york_2.jpg',
                    'assets/images/york_event/york_3.jpg',
                    'assets/images/york_event/york_4.jpg',
                    'assets/images/york_event/york_5.jpg',
                    'assets/images/york_event/york_6.jpg',
                    'assets/images/york_event/york_7.jpg',
                    'assets/images/york_event/york_8.jpg',
                    'assets/images/york_event/york_9.jpg',
                    'assets/images/york_event/york_10.jpg',
                    'assets/images/york_event/york_11.jpg',
                    'assets/images/york_event/york_12.jpg',
                    'assets/images/york_event/york_13.jpg',
                    'assets/images/york_event/york_14.jpg',
                    'assets/images/york_event/york_15.jpg',
                    'assets/images/york_event/york_16.jpg',
                    'assets/images/york_event/york_17.jpg',
                    'assets/images/york_event/york_18.jpg',
                    'assets/images/york_event/york_19.jpg',
                    'assets/images/york_event/york_20.jpg',
                    'assets/images/york_event/york_21.jpg',
                    'assets/images/york_event/york_22.jpg',
                    
                ]
            }
        };

        document.addEventListener('DOMContentLoaded', function() {
            // Get project ID from URL parameter
            const urlParams = new URLSearchParams(window.location.search);
            const projectId = urlParams.get('project');
            
            if (projectId && galleries[projectId]) {
                const project = galleries[projectId];
                
                // Set page title
                document.getElementById('galleryTitle').textContent = project.title;
                document.title = `${project.title} - Endevo`;
                
                // Load images
                const galleryGrid = document.getElementById('galleryGrid');
                
                project.images.forEach(image => {
                    const galleryItem = document.createElement('div');
                    galleryItem.className = 'gallery-item';
                    
                    const img = document.createElement('img');
                    img.src = image;
                    img.alt = project.title;
                    img.className = 'gallery-img';
                    
                    galleryItem.appendChild(img);
                    galleryGrid.appendChild(galleryItem);
                });
            } else {
                // Redirect back to projects if invalid project ID
                window.location.href = 'projects.php';
            }
        });
    </script>
</body>
</html>