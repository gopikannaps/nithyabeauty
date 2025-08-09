<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nithya Beauty Academy - Authorized Institute of Naturals</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #67338b;
            --primary-light: #8a56b3;
            --primary-dark: #4a2563;
            --accent-color: #e91e63;
            --dark-color: #2c3e50;
            --light-color: #f8f9fa;
            --text-color: #5a5c69;
            --authorized-color: #4caf50;
        }
        
        /* Navbar Styles */
        .navbar {
            background: white !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            padding: 0.3rem 1rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand img {
            max-height: 50px;
            transition: transform 0.3s ease;
        }
        
        .navbar-brand:hover img {
            transform: scale(1.05);
        }

        .franchise-logo img {
            padding-left:20px;
            max-height: 50px;
            transition: transform 0.3s ease;
        }
        
        .franchise-logo:hover img {
            transform: scale(1.05);
        }

        .franchise-text {
            font-size: 0.7rem;
            color: #67338b;
            font-weight: 600;
            line-height: 1;
            letter-spacing: 0.5px;
        }
        
        /* Desktop layout - logo above text */
        .franchise-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
        }
        
        .nav-link {
            color: #333 !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            margin: 0 0.15rem !important;
            border-radius: 6px;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: #67338b !important;
            background: rgba(103, 51, 139, 0.1);
        }
        
        .nav-link.active {
            color: white !important;
            background: #67338b !important;
        }
        
        .nav-link.active:hover {
            background: var(--primary-dark) !important;
        }
        
        .btn-call {
            background: #67338b;
            color: white;
            border: none;
            padding: 0.5rem 1.25rem;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-call:hover {
            background: var(--primary-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(103, 51, 139, 0.3);
        }
        
        .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }
        
        .navbar-toggler:focus {
            box-shadow: 0 0 0 3px rgba(103, 51, 139, 0.3);
        }
        
        /* Mobile styles */
        @media (max-width: 768px) {
            .navbar-brand {
                flex-direction: row !important;
                gap: 10px;
                align-items: center !important;
            }

            /* Mobile layout - logo after text */
            .franchise-group {
                flex-direction: column;
                align-items: flex-start;
            }

            .franchise-text {
                text-align: left;
            }
            
            .navbar-collapse {
                padding: 1rem 0;
                background: white;
                margin-top: 0.5rem;
                border-radius: 8px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }
            
            .nav-link {
                margin: 0.25rem 0 !important;
                padding: 0.75rem 1rem !important;
            }
            
            .btn-call {
                width: 100%;
                justify-content: center;
                margin-top: 0.5rem;
            }
        }

    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <!-- Logo Section -->
            <a class="navbar-brand d-flex align-items-center gap-3" href="#">
                <img src="nithya-logo.png" alt="Main Logo">
                <div class="franchise-group">
                    <div class="franchise-logo">
                        <div class="franchise-text">Authorized Franchise Partner</div>
                        <img src="nimg.png" alt="Franchise Logo">
                    </div>
                </div>
            </a>

            <!-- Toggle for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Items + Call Button -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">Courses</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#testimonial">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#forms">Contact</a>
                    </li>
                </ul>
                <a href="tel:9500999922" class="btn btn-call">
                    <i class="fas fa-phone-alt"></i> Call Us
                </a>
            </div>
        </div>
    </nav>
    
    
    <style>
        
        
        /* Banner Section Styles */
        .banner-section {
            position: relative;
            padding: 5rem 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            color: white;
        }
        .banner-content {
            padding: 2rem;
        }
        .banner-heading {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        .banner-text {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            line-height: 1.6;
        }
        .banner-btn {
            background: #67338b;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0.8rem 2.5rem;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(233, 30, 99, 0.3);
        }
        .banner-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(233, 30, 99, 0.4);
            color: white;
        }
        /* Authorized Badge */
        .authorized-badge {
            display: inline-block;
            background: linear-gradient(135deg, var(--authorized-color) 0%, #2e7d32 100%);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
            margin-left: 1rem;
            box-shadow: 0 2px 8px rgba(76, 175, 80, 0.3);
        }
        /* Compact Form Styles */
        .compact-form-container {
            max-width: 380px;
            margin-left: auto;
        }
        .compact-form {
            padding: 1.5rem 1.25rem;
            border-radius: 10px;
            background: white;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }
        .compact-form .form-heading {
            font-size: 1.25rem;
            margin-bottom: 1.25rem;
            color: var(--dark-color);
            font-weight: 600;
            text-align: center;
        }
        .compact-form .form-control, 
        .compact-form .form-select {
            padding: 0.6rem 0.8rem;
            font-size: 0.9rem;
            margin-bottom: 0.7rem;
            border-radius: 6px;
            border: 1px solid #e0e0e0;
        }
        .compact-form .form-control:focus, 
        .compact-form .form-select:focus {
            border-color: #67338b;
            box-shadow: 0 0 0 0.2rem rgba(156, 39, 176, 0.25);
        }
        .compact-form .submit-btn {
            padding: 0.65rem;
            font-size: 0.95rem;
            margin-top: 0.5rem;
            background: linear-gradient(135deg, #67338b 0%, var(--secondary-color) 100%);
            border: none;
            border-radius: 6px;
            transition: all 0.3s;
        }
        .compact-form .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(156, 39, 176, 0.3);
        }
        
        
/* Responsive Adjustments */
        @media (max-width: 991.98px) {
           
            .banner-section {
                padding: 3rem 0;
            }
            .banner-heading {
                font-size: 2.2rem;
                text-align: center;
            }
            .banner-text {
                text-align: center;
            }
            .banner-content {
                margin-bottom: 2rem;
                padding: 1rem;
            }
            .banner-btn-container {
                text-align: center;
            }
            .compact-form-container {
                max-width: 100%;
                margin: 0 auto;
            }
        }
        @media (max-width: 767.98px) {
            .banner-heading {
                font-size: 1.8rem;
            }
            .compact-form {
                padding: 1.25rem 1rem;
            }
            .compact-form .form-heading {
                font-size: 1.2rem;
            }
        }
    </style>



    <!-- Banner Section with Compact Form -->
    <section class="banner-section"><br><br>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner-content">
                        <h1 class="banner-heading">Nithya Beauty Academy <span class="authorized-badge">Authorized Franchise Partner of Naturals</span></h1>
                        <p class="banner-text">
                            Premier training for creative beauty careers with internationally recognized diplomas. 
                            Learn from industry experts and transform your passion into a successful career.
                        </p>
                        <!--<button class="banner-btn">-->
                        <!--    <i class="fas fa-scissors me-2"></i> Explore Courses-->
                        <!--</button>-->
                        
                            <a href="#forms">
                                <button class="banner-btn">
                                    <i class="fas fa-scissors me-2"></i> Explore Courses
                                </button>
                            </a>
                    </div>
                </div>
                <div class="col-lg-5" id="forms" >
                    <div class="compact-form-container" >
                        <div class="compact-form">
                            <h3 class="form-heading">Book a Free Demo Class</h3>
                            <form action="mailer.php" method="post">
                                <div class="mb-2">
                                    <input type="text" class="form-control" placeholder="Your Name" name="name">
                                </div>
                                <div class="mb-2">
                                    <input type="tel" class="form-control" placeholder="Phone Number*" name="mobile" required>
                                </div>
                                <div class="mb-2">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email" >
                                </div>
                                <div class="mb-2">
                                    <select class="form-select" name="courses" required>
                                        <option value="" disabled selected>Select Course</option>
                                        <option value="makeup">Diploma in Pro Makeup Artistry</option>
                                        <option value="beauty">Diploma in Beauty Therapy</option>
                                        <option value="hair">Diploma in Hair Dressing</option>
                                        <option value="artistry">Diploma – The Artistry Program</option>
                                        <option value="cosmetology">Diploma in Cosmetology</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn submit-btn w-100">Book Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section> 
    
    
    
    <style>
        .alert-section {
            background: linear-gradient(135deg, #f5d6e6 0%, #e2b4d8 50%, #c491c4 100%);
            color: #67338b;
            padding: 2rem 1rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .alert-content {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 0 auto;
        }
        .academy-name {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            line-height: 1.2;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .academy-tagline {
            font-size: 1.4rem;
            font-weight: 500;
            margin-bottom: 1rem;
        }
        .highlight-text {
            color: #8a2be2;
            font-weight: 600;
        }
        .authorized-badge-large {
            display: inline-block;
            background: linear-gradient(135deg, #4caf50 0%, #2e7d32 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            margin: 1rem 0;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
        }
        .alert-btn {
            background-color: #9c27b0;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0.7rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            margin-top: 1rem;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(156, 39, 176, 0.3);
        }
        .alert-btn:hover {
            background-color: #7b1fa2;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(156, 39, 176, 0.4);
        }
        .sparkle {
            position: absolute;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
            pointer-events: none;
        }
        @media (max-width: 768px) {
            .academy-name {
                font-size: 1.8rem;
            }
            .academy-tagline {
                font-size: 1.1rem;
            }
            .alert-section {
                padding: 1.5rem 1rem;
            }
        }
        @media (max-width: 576px) {
            .academy-name {
                font-size: 1.5rem;
            }
            .academy-tagline {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    
    <!-- Beauty Academy Alert Section -->
    <section class="alert-section">
        <div class="container">
            <div class="alert-content">
                <div class="academy-name">Nithya Beauty Academy</div>
                <div class="authorized-badge-large">Authorized Franchise Partner of Naturals</div>
                <div class="academy-tagline">Premier Training Institute For Beauty Courses</div>
                <!--<button class="alert-btn">-->
                <!--    <i class="fas fa-scissors me-2"></i> Enroll Now-->
                <!--</button>-->
                
                                    <a href="#forms">
                        <button class="alert-btn">
                            <i class="fas fa-scissors me-2"></i> Explore Courses
                        </button>
                    </a>
            </div>
        </div>
    </section>
    
    <script>
        // Create sparkle effect
        document.addEventListener('DOMContentLoaded', function() {
            const alertSection = document.querySelector('.alert-section');
            function createSparkle() {
                const sparkle = document.createElement('div');
                sparkle.classList.add('sparkle');
                // Random size between 3px and 8px
                const size = Math.random() * 5 + 3;
                sparkle.style.width = `${size}px`;
                sparkle.style.height = `${size}px`;
                // Random position
                sparkle.style.left = `${Math.random() * 100}%`;
                sparkle.style.top = `${Math.random() * 100}%`;
                // Random opacity
                sparkle.style.opacity = Math.random() * 0.7 + 0.3;
                alertSection.appendChild(sparkle);
                // Remove sparkle after animation
                setTimeout(() => {
                    sparkle.remove();
                }, 2000);
            }
            // Create sparkles periodically
            setInterval(createSparkle, 300);
        });
    </script>
 <style>
        .stats-section {
            background-color: #fdf2f5;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }
        .stat-item {
            text-align: center;
            padding: 1.5rem;
            position: relative;
            z-index: 2;
        }
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: #d63384;
            margin-bottom: 0.5rem;
            line-height: 1;
        }
        .stat-label {
            font-size: 1.1rem;
            color: #67338b;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .stat-icon {
            font-size: 2.5rem;
            color: rgba(214, 51, 132, 0.2);
            margin-bottom: 1rem;
        }
        .decoration-circle {
            position: absolute;
            border-radius: 50%;
            background-color: rgba(214, 51, 132, 0.08);
            z-index: 1;
        }
        @media (max-width: 991.98px) {
            .stat-item {
                margin-bottom: 1.5rem;
            }
            .stat-number {
                font-size: 2.5rem;
            }
        }
        @media (max-width: 767.98px) {
            .stats-section {
                padding: 2.5rem 0;
            }
            .stat-number {
                font-size: 2.2rem;
            }
            .stat-label {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Statistics Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <!-- Decorative circles -->
                <div class="decoration-circle" style="width: 200px; height: 200px; top: -50px; left: -50px;"></div>
                <div class="decoration-circle" style="width: 150px; height: 150px; bottom: -30px; right: 10%;"></div>
                <!-- Courses Offered -->
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="stat-number">25+</div>
                        <div class="stat-label">Diploma Courses</div>
                    </div>
                </div>
                <!-- Years of Experience -->
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="stat-number">10+</div>
                        <div class="stat-label">Years of Experience</div>
                    </div>
                </div>
                <!-- Total Graduates -->
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="stat-number">5K+</div>
                        <div class="stat-label">Total Graduates</div>
                    </div>
                </div>
                <!-- Faculty Experts -->
                <div class="col-md-3 col-6">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="stat-number">25+</div>
                        <div class="stat-label">Faculty Experts</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <style>
        .image-content-section {
            padding: 5rem 0;
            background-color: #fff;
        }
        .content-img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            object-fit: cover;
        }
        .content-wrapper {
            padding: 0 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }
        .content-heading {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        .content-text {
            font-size: 1.1rem;
            color: #5a5c69;
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        .content-btn {
            background: #67338b;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0.8rem 2.5rem;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(196, 145, 196, 0.3);
            align-self: flex-start;
        }
        .content-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(196, 145, 196, 0.4);
            color: white;
        }
        @media (max-width: 991.98px) {
            .image-content-section {
                padding: 3rem 0;
            }
            .content-wrapper {
                padding: 2rem 0;
                text-align: center;
            }
            .content-heading {
                font-size: 2rem;
            }
            .content-btn {
                align-self: center;
            }
        }
        @media (max-width: 767.98px) {
            .content-heading {
                font-size: 1.8rem;
            }
            .content-text {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Image & Content Section -->
    <section class="image-content-section" id="aboutus">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side - Image -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Beauty Academy Students" 
                         class="content-img">
                </div>
                <!-- Right Side - Content -->
                <div class="col-lg-6">
                    <div class="content-wrapper">
                        <h2 class="content-heading">Transform Your Passion Into a Career</h2>
                        <p class="content-text">
                            At <strong>Nithya Beauty Academy</strong>, an authorized institute of <strong>Naturals</strong>, we provide premier training for creative beauty and design careers. 
                            Our expert faculty with 10+ years of experience will guide you through hands-on training in our comprehensive diploma programs. 
                            Join our community of 5,000+ successful graduates and start your journey in the beauty industry today.
                        </p>
                        <button class="content-btn">
                            <i class="fas fa-scissors me-2"></i> Explore Courses
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <style>
        .grid-section {
            padding: 5rem 0;
            background-color: #fafafa;
        }
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            font-weight: 700;
            color: #2c3e50;
            font-size: 2.5rem;
        }
        .grid-item {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            margin-bottom: 1.5rem;
        }
        .grid-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        .grid-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .grid-content {
            padding: 1.5rem;
        }
        .grid-heading {
            font-size: 1.4rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 1rem;
        }
        .grid-text {
            color: #5a5c69;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        .grid-btn {
            background: #67338b;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.3s;
        }
        .grid-btn:hover {
            background: linear-gradient(135deg, #c491c4 0%, #a571b1 100%);
            color: white;
            transform: translateY(-2px);
        }
        @media (max-width: 991.98px) {
            .grid-section {
                padding: 3rem 0;
            }
            .section-title {
                font-size: 2rem;
                margin-bottom: 2rem;
            }
            .grid-item {
                margin-bottom: 1.5rem;
            }
        }
        @media (max-width: 767.98px) {
            .section-title {
                font-size: 1.8rem;
            }
            .grid-img {
                height: 180px;
            }
        }
        @media (max-width: 575.98px) {
            .grid-section {
                padding: 2rem 0;
            }
            .section-title {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>
    <!-- 4-Grid Feature Section -->
    <section class="grid-section" id="courses">
        <div class="container">
            <h2 class="section-title">Our Diploma Programs</h2>
            <div class="row">
                <!-- Grid Item 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="grid-item">
                        <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="Diploma in Pro Makeup Artistry" 
                             class="grid-img">
                        <div class="grid-content">
                            <h3 class="grid-heading">Diploma in Pro Makeup Artistry</h3>
                            <p class="grid-text">
                                Master professional makeup techniques for bridal, fashion, editorial, and special effects applications.
                            </p>
                            <button class="grid-btn">Learn More</button>
                        </div>
                    </div>
                </div>
                <!-- Grid Item 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="grid-item">
                        <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="Diploma in Beauty Therapy" 
                             class="grid-img">
                        <div class="grid-content">
                            <h3 class="grid-heading">Diploma in Beauty Therapy</h3>
                            <p class="grid-text">
                                Comprehensive training in facials, body treatments, waxing, and advanced skincare techniques.
                            </p>
                            <button class="grid-btn">Learn More</button>
                        </div>
                    </div>
                </div>
                <!-- Grid Item 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="grid-item">
                        <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="Diploma in Hair Dressing" 
                             class="grid-img">
                        <div class="grid-content">
                            <h3 class="grid-heading">Diploma in Hair Dressing</h3>
                            <p class="grid-text">
                                Complete training in cutting, coloring, styling, and salon management for hair professionals.
                            </p>
                            <button class="grid-btn">Learn More</button>
                        </div>
                    </div>
                </div>
                <!-- Grid Item 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="grid-item">
                        <img src="https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="Diploma in Cosmetology" 
                             class="grid-img">
                        <div class="grid-content">
                            <h3 class="grid-heading">Diploma in Cosmetology</h3>
                            <p class="grid-text">
                                Comprehensive program covering all aspects of beauty including hair, skin, makeup, and nails.
                            </p>
                            <button class="grid-btn">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
        </div>
    </section>
    
    
     <style>
        :root {
            --primary-color: #9c27b0;
            --secondary-color: #7b1fa2;
            --accent-color: #e91e63;
            --dark-color: #2c3e50;
            --light-color: #f8f9fa;
        }
        .mission-vision-section {
            padding: 5rem 0;
            background-color: #fdf2f8;
            position: relative;
            overflow: hidden;
        }
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #67338b;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }
        .section-title:after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #67338b, var(--accent-color));
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        .section-subtitle {
            color: var(--text-color);
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }
        .mv-card {
            background: white;
            border-radius: 15px;
            padding: 2.5rem;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            border: none;
        }
        .mv-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        .mv-card.mission {
            border-top: 4px solid #67338b;
        }
        .mv-card.vision {
            border-top: 4px solid var(--accent-color);
        }
        .card-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 1.8rem;
        }
        .mission .card-icon {
            background: rgba(156, 39, 176, 0.1);
            color: #67338b;
        }
        .vision .card-icon {
            background: rgba(233, 30, 99, 0.1);
            color: var(--accent-color);
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--dark-color);
        }
        .card-text {
            color: var(--text-color);
            line-height: 1.7;
            font-size: 1rem;
        }
        .shape-decoration {
            position: absolute;
            opacity: 0.05;
            z-index: 0;
        }
        .shape-1 {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: #67338b;
            top: -50px;
            right: -50px;
        }
        .shape-2 {
            width: 150px;
            height: 150px;
            background: var(--accent-color);
            bottom: -50px;
            left: -50px;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        }
        @media (max-width: 991.98px) {
            .mission-vision-section {
                padding: 3rem 0;
            }
            .section-title {
                font-size: 2rem;
            }
            .mv-card {
                padding: 2rem;
            }
        }
        @media (max-width: 767.98px) {
            .section-title {
                font-size: 1.8rem;
            }
            .mv-card {
                margin-bottom: 1.5rem;
            }
            .card-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Mission & Vision Section -->
    <section class="mission-vision-section">
        <div class="shape-decoration shape-1"></div>
        <div class="shape-decoration shape-2"></div>
        <div class="container position-relative" style="z-index: 1;">
            <div class="section-header">
                <h2 class="section-title">Our Core Values</h2>
                <p class="section-subtitle">Driving excellence in beauty education through innovation and passion</p>
            </div>
            <div class="row">
                <!-- Mission Card -->
                <div class="col-lg-6">
                    <div class="mv-card mission">
                        <div class="card-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="card-title">Our Mission</h3>
                        <p class="card-text">
                            To empower aspiring beauty professionals with world-class training, innovative techniques, 
                            and business skills that transform passion into successful careers. As an authorized institute of Naturals, 
                            we are committed to fostering creativity, professionalism, and excellence in every student through our 
                            comprehensive curriculum and hands-on learning approach in our diploma programs.
                        </p>
                    </div>
                </div>
                <!-- Vision Card -->
                <div class="col-lg-6">
                    <div class="mv-card vision">
                        <div class="card-icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 class="card-title">Our Vision</h3>
                        <p class="card-text">
                            To be recognized as the premier beauty academy globally, setting industry standards 
                            through exceptional education. We envision a world where our graduates lead the beauty 
                            industry with innovation, ethics, and artistic excellence, creating beauty trends 
                            that inspire confidence and self-expression across cultures and communities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <style>
        :root {
            --primary-color: #9c27b0;
            --secondary-color: #7b1fa2;
            --accent-color: #e91e63;
            --dark-color: #2c3e50;
            --light-color: #f8f9fa;
        }
        .why-choose-us {
            padding: 5rem 0;
            background: linear-gradient(135deg, #fdf2f8 0%, #f8f4ff 100%);
            position: relative;
            overflow: hidden;
        }
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #67338b;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }
        .section-title:after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #67338b, var(--accent-color));
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        .section-subtitle {
            color: var(--text-color);
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            border: none;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        .feature-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            background: rgba(156, 39, 176, 0.1);
            color: #67338b;
            transition: all 0.3s ease;
        }
        .feature-card:hover .feature-icon {
            background: #67338b;
            color: white;
            transform: rotate(15deg) scale(1.1);
        }
        .feature-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--dark-color);
        }
        .feature-text {
            color: var(--text-color);
            line-height: 1.7;
            font-size: 0.95rem;
        }
        .shape-decoration {
            position: absolute;
            opacity: 0.05;
            z-index: 0;
        }
        .shape-1 {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: #67338b;
            top: -100px;
            right: -100px;
        }
        .shape-2 {
            width: 200px;
            height: 200px;
            background: var(--accent-color);
            bottom: -80px;
            left: -80px;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        }
        @media (max-width: 991.98px) {
            .why-choose-us {
                padding: 3rem 0;
            }
            .section-title {
                font-size: 2rem;
            }
            .feature-card {
                padding: 1.5rem;
            }
            .feature-icon {
                width: 70px;
                height: 70px;
                font-size: 1.8rem;
            }
        }
        @media (max-width: 767.98px) {
            .section-title {
                font-size: 1.8rem;
            }
            .feature-card {
                max-width: 400px;
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>
</head>
<body>
    <!-- Why Choose Us Section -->
    <section class="why-choose-us">
        <div class="shape-decoration shape-1"></div>
        <div class="shape-decoration shape-2"></div>
        <div class="container position-relative" style="z-index: 1;">
            <div class="section-header">
                <h2 class="section-title">Why Choose Us</h2>
                <p class="section-subtitle">Discover what makes Nithya Beauty Academy the premier choice for beauty education</p>
            </div>
            <div class="row">
                <!-- Feature 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3 class="feature-title">Naturals Certification</h3>
                        <p class="feature-text">
                            Our diploma courses are accredited by Naturals, ensuring your qualifications are respected worldwide and recognized across the beauty industry.
                        </p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <h3 class="feature-title">Expert Faculty</h3>
                        <p class="feature-text">
                            Learn from industry veterans with 10+ years of experience in top salons and beauty brands. All faculty are certified by Naturals.
                        </p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3 class="feature-title">Hands-On Training</h3>
                        <p class="feature-text">
                            80% practical training with real clients in our state-of-the-art salon studio, following the Naturals curriculum.
                        </p>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3 class="feature-title">Career Support</h3>
                        <p class="feature-text">
                            Dedicated placement cell with 95% job placement rate in top salons and spas, with access to Naturals' industry network.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        :root {
            --primary-color: #9c27b0;
            --secondary-color: #7b1fa2;
            --accent-color: #e91e63;
            --dark-color: #2c3e50;
            --light-color: #f8f9fa;
        }
        .testimonials-section {
            padding: 5rem 0;
            background-color: white;
            position: relative;
            overflow: hidden;
        }
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #67338b;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }
        .section-title:after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #67338b, var(--accent-color));
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }
        .section-subtitle {
            color: var(--text-color);
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }
        .testimonial-card {
            background: #fdf2f8;
            border-radius: 15px;
            padding: 2rem;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            transition: all 0.4s ease;
            position: relative;
            margin: 1rem;
            border: none;
        }
        .testimonial-card:before {
            content: '\201C';
            font-family: Georgia, serif;
            font-size: 4rem;
            color: rgba(156, 39, 176, 0.1);
            position: absolute;
            top: 1rem;
            left: 1rem;
            line-height: 1;
        }
        .testimonial-content {
            position: relative;
            z-index: 1;
            padding-top: 1.5rem;
        }
        .testimonial-text {
            font-style: italic;
            color: var(--dark-color);
            line-height: 1.7;
            font-size: 1rem;
            margin-bottom: 1.5rem;
        }
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            margin-right: 1rem;
        }
        .author-info h4 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.2rem;
            color: var(--dark-color);
        }
        .author-info p {
            font-size: 0.9rem;
            color: #67338b;
            margin-bottom: 0;
        }
        .rating {
            color: #ffc107;
            margin-top: 0.3rem;
        }
        /* Testimonial Carousel */
        .testimonial-carousel .carousel-indicators {
            bottom: -50px;
        }
        .testimonial-carousel .carousel-indicators button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: rgba(156, 39, 176, 0.3);
            border: none;
        }
        .testimonial-carousel .carousel-indicators button.active {
            background-color: #67338b;
        }
        @media (max-width: 991.98px) {
            .testimonials-section {
                padding: 3rem 0;
            }
            .section-title {
                font-size: 2rem;
            }
            .testimonial-card {
                padding: 1.5rem;
            }
        }
        @media (max-width: 767.98px) {
            .section-title {
                font-size: 1.8rem;
            }
            .testimonial-card {
                margin: 0.5rem;
            }
            .author-avatar {
                width: 50px;
                height: 50px;
            }
        }
    </style>
</head>
<body>
    <!-- Testimonials Section -->
    <section class="testimonials-section" id="testimonial">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Student Testimonials</h2>
                <p class="section-subtitle">Hear what our graduates say about their experience at Nithya Beauty Academy</p>
            </div>
            <div id="testimonialCarousel" class="carousel slide testimonial-carousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Testimonial 1 -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="testimonial-card">
                                    <div class="testimonial-content">
                                        <p class="testimonial-text">
                                            "The Diploma in Pro Makeup Artistry at Nithya Beauty Academy, authorized by Naturals, transformed my career. The hands-on approach and expert guidance helped me land a job at a top salon immediately after graduation."
                                        </p>
                                        <div class="testimonial-author">
                                            <!--<img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Priya K." class="author-avatar">-->
                                            <div class="author-info">
                                                <h4>Priya K.</h4>
                                                <p>Diploma in Pro Makeup Artistry Graduate</p>
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonial-card">
                                    <div class="testimonial-content">
                                        <p class="testimonial-text">
                                            "I completed the Diploma in Beauty Therapy and now run my own successful beauty studio! The Naturals certification gave me credibility with clients and employers."
                                        </p>
                                        <div class="testimonial-author">
                                            <!--<img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Ananya S." class="author-avatar">-->
                                            <div class="author-info">
                                                <h4>Ananya S.</h4>
                                                <p>Diploma in Beauty Therapy Graduate</p>
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="testimonial-card">
                                    <div class="testimonial-content">
                                        <p class="testimonial-text">
                                            "The Diploma in Hair Dressing program was comprehensive and the industry connections are incredible. I got placed at a luxury spa before even completing my course. Being part of the Naturals network was a game-changer."
                                        </p>
                                        <div class="testimonial-author">
                                            <!--<img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Meera P." class="author-avatar">-->
                                            <div class="author-info">
                                                <h4>Meera P.</h4>
                                                <p>Diploma in Hair Dressing Graduate</p>
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testimonial-card">
                                    <div class="testimonial-content">
                                        <p class="testimonial-text">
                                            "The Diploma – The Artistry Program was challenging but worth it. The curriculum covers all aspects of beauty with a focus on creativity and business skills. The Naturals certification has opened many doors for me."
                                        </p>
                                        <div class="testimonial-author">
                                            <!--<img src="https://randomuser.me/api/portraits/women/76.jpg" alt="Divya R." class="author-avatar">-->
                                            <div class="author-info">
                                                <h4>Divya R.</h4>
                                                <p>Diploma – The Artistry Program Graduate</p>
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <i class="fas fa-chevron-left text-primary"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <i class="fas fa-chevron-right text-primary"></i>
                    <span class="visually-hidden">Next</span>
                </button>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
                </div>
            </div>
        </div>
    </section>
     <style>
        :root {
            --primary-color: #9c27b0;
            --secondary-color: #7b1fa2;
            --accent-color: #e91e63;
            --dark-color: #2c3e50;
            --light-color: #f8f9fa;
        }
        .footer {
            background-color: var(--dark-color);
            color: white;
            padding: 4rem 0 2rem;
            position: relative;
        }
        .footer h4 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            position: relative;
            color: white;
        }
        .footer h4:after {
            content: '';
            position: absolute;
            width: 40px;
            height: 2px;
            background: #67338b;
            bottom: -8px;
            left: 0;
        }
        .about-content {
            padding-right: 2rem;
        }
        .about-content p {
            color: #b5b5b5;
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }
        .footer-logo {
            width: 180px;
            margin-bottom: 1.5rem;
        }
        .quick-links {
            list-style: none;
            padding: 0;
        }
        .quick-links li {
            margin-bottom: 0.8rem;
        }
        .quick-links a {
            color: #b5b5b5;
            text-decoration: none;
            transition: all 0.3s;
            display: inline-block;
        }
        .quick-links a:hover {
            color: white;
            transform: translateX(5px);
        }
        .quick-links i {
            color: #67338b;
            margin-right: 8px;
            width: 20px;
            text-align: center;
        }
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 1.5rem;
        }
        .social-icons a {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }
        .social-icons a:hover {
            background: #67338b;
            transform: translateY(-3px);
        }
        .contact-info {
            list-style: none;
            padding: 0;
            color: #b5b5b5;
        }
        .contact-info li {
            margin-bottom: 1rem;
            display: flex;
            align-items: flex-start;
        }
        .contact-info i {
            color: #67338b;
            margin-right: 10px;
            margin-top: 3px;
        }
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 2rem;
            margin-top: 3rem;
            text-align: center;
            color: #b5b5b5;
            font-size: 0.9rem;
        }
        @media (max-width: 991.98px) {
            .footer {
                padding: 3rem 0 2rem;
            }
            .footer-column {
                margin-bottom: 2rem;
            }
            .footer h4:after {
                left: 50%;
                transform: translateX(-50%);
            }
            .about-content {
                padding-right: 0;
                text-align: center;
            }
            .quick-links {
                text-align: center;
            }
            .social-icons {
                justify-content: center;
            }
            .contact-info {
                text-align: center;
            }
            .contact-info li {
                justify-content: center;
            }
        }
        @media (max-width: 767.98px) {
            .footer h4 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Footer Section -->
    <footer class="footer" id="footer">
        <div class="container">
            <div class="row">
                <!-- Left Column - About Us -->
                <div class="col-lg-4 col-md-6 footer-column">
                    <img src="nithya-logo.png" alt="Nithya Beauty Academy Logo" class="footer-logo">
                    <div class="about-content">
                        <p>
                            <strong>Nithya Beauty Academy</strong> is an authorized institute of <strong>Naturals</strong>, 
                            dedicated to transforming passionate individuals into skilled beauty professionals through 
                            world-class education and hands-on training in our comprehensive diploma programs.
                        </p>
                    </div>
                </div>
                <!-- Center Column - Quick Links -->
                <div class="col-lg-4 col-md-6 footer-column">
                    <h4>Quick Links</h4>
                    <ul class="quick-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="#aboutus"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="#courses"><i class="fas fa-chevron-right"></i> Courses</a></li>
                        <!--<li><a href="#"><i class="fas fa-chevron-right"></i> Gallery</a></li>-->
                        <li><a href="#testimonial"><i class="fas fa-chevron-right"></i> Testimonials</a></li>
                        <li><a href="#forms"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
                    </ul>
                </div>
                <!-- Right Column - Contact & Social -->
                <div class="col-lg-4 col-md-12 footer-column">
                    <h4>Contact Us</h4>
                    <ul class="contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>10, Ayyasamy St, off Rajaji Road, next to Girias, West Tambaram, Tambaram, Chennai, Tamil Nadu 600045</span>
                        </li>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <span> <a href="tel:9500999922">9500999922</a></span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>info@nithyabeautyacademy.com</span>
                        </li>
                    </ul>
                    <h4 class="mt-4">Follow Us</h4>
                    <div class="social-icons">
                        <!--<a href="#"><i class="fab fa-facebook-f"></i></a>-->
                        <a href="https://www.instagram.com/naturalsacademy_tambaram?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw== " target="_blank"><i class="fab fa-instagram"></i></a>
                        <!--<a href="#"><i class="fab fa-twitter"></i></a>-->
                        <!--<a href="#"><i class="fab fa-youtube"></i></a>-->
                        <!--<a href="#"><i class="fab fa-linkedin-in"></i></a>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        &copy; 2025 Nithya Beauty Academy. Authorized Franchise Institute of Naturals. All Rights Reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
<style>
        :root {
            --whatsapp-color: #25D366;
            --call-color: #075E54;
            --button-size: 56px;
            --mobile-button-size: 50px;
        }
        .floating-buttons {
            position: fixed;
            right: 30px;
            bottom: 30px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .floating-btn {
            width: var(--button-size);
            height: var(--button-size);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            position: relative;
            border: none;
            cursor: pointer;
        }
        .floating-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.3);
        }
        .floating-btn.whatsapp {
            background-color: var(--whatsapp-color);
        }
        .floating-btn.call {
            background-color: var(--call-color);
        }
        .floating-btn .tooltip {
            position: absolute;
            right: calc(var(--button-size) + 10px);
            top: 50%;
            transform: translateY(-50%);
            background: white;
            color: #333;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 0.9rem;
            font-weight: 500;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .floating-btn:hover .tooltip {
            opacity: 1;
            right: calc(var(--button-size) + 15px);
        }
        /* Pulse Animation */
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7); }
            70% { box-shadow: 0 0 0 12px rgba(37, 211, 102, 0); }
            100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
        }
        .pulse-animation {
            animation: pulse 1.5s infinite;
        }
        @media (max-width: 768px) {
            .floating-buttons {
                right: 20px;
                bottom: 20px;
                gap: 12px;
            }
            .floating-btn {
                width: var(--mobile-button-size);
                height: var(--mobile-button-size);
                font-size: 1.3rem;
            }
            .floating-btn .tooltip {
                display: none;
            }
            /* Horizontal layout on mobile */
            .floating-buttons {
                flex-direction: row;
                bottom: 15px;
                right: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Floating Action Buttons -->
    <div class="floating-buttons">
        <!-- WhatsApp Button -->
        <a href="https://wa.me/919500999922" class="floating-btn whatsapp pulse-animation" target="_blank">
            <i class="fab fa-whatsapp"></i>
            <span class="tooltip">Chat on WhatsApp</span>
        </a>
        <!-- Call Button -->
        <a href="tel:+919500999922" class="floating-btn call">
            <i class="fas fa-phone-alt"></i>
            <span class="tooltip">Call Us Now</span>
        </a>
    </div>
  
    <script>
        // Remove pulse animation after first click
        document.querySelector('.whatsapp').addEventListener('click', function() {
            this.classList.remove('pulse-animation');
        });
    </script>
    
    

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
    
        <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>