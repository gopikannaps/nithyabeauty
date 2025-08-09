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
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="#aboutus">About</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="#courses">Courses</a>-->
                    <!--</li>-->
                    <!-- <li class="nav-item">-->
                    <!--    <a class="nav-link" href="#testimonial">Testimonials</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="#forms">Contact</a>-->
                    <!--</li>-->
                </ul>
                <a href="tel:9500999922" class="btn btn-call">
                    <i class="fas fa-phone-alt"></i> Call Us
                </a>
            </div>
        </div>
    </nav>
    
    

        
 
    
    
    <!-- Thank You Section -->
<section class="thank-you-section py-5 py-lg-8">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <!-- Success Icon -->
                <div class="success-icon mb-4">
                    <i class="fas fa-check-circle"></i>
                </div>
                
                <!-- Main Heading -->
                <h1 class="display-5 fw-bold mb-3">
                    Thank You for Connecting with Us!
                </h1>
                
                <!-- Subheading -->
                <!--<p class="lead mb-4 text-muted">-->
                <!--    Your message has been successfully received. We'll get back to you within 24 hours.-->
                <!--</p>-->
                
                
                
                <!-- Call to Action -->
                <div class="cta-buttons d-flex flex-column flex-md-row justify-content-center gap-3">
                    <a href="index.php" class="btn btn-outline-primary  btn-lg px-4">
                        <i class="fas fa-home me-2"></i> Back to Home
                    </a>
                    <a href="index.php" class="btn btn-outline-primary btn-lg px-4">
                        <i class="fas fa-book-open me-2"></i> Explore Courses
                    </a>
                </div>
                
                <!-- Contact Information -->
                <div class="contact-info mt-5 pt-4 border-top">
                    <p class="mb-2">
                        <i class="fas fa-phone-alt me-2 text-primary"></i>
                        <strong>Need immediate assistance?</strong> <a href="tel:9500999922">Call us at +91 9500999922</a> 
                    </p>
                    <p class="mb-0">
                        <i class="fas fa-envelope me-2 text-primary"></i>
                        Or email us at <a href="mailto:info@nithyabeautyacademy.com" class="text-decoration-none">info@nithyabeautyacademy.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Thank You Section Styles */
    .thank-you-section {
        background: linear-gradient(135deg, #f9f0ff 0%, #fff5fb 50%, #fff0f8 100%);
        min-height: 100vh;
        display: flex;
        align-items: center;
    }
    
    .success-icon {
        font-size: 5rem;
        color: #8a2be2;
        animation: bounceIn 1s ease;
        display: inline-block;
    }
    
    @keyframes bounceIn {
        0% { transform: scale(0.3); opacity: 0; }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); opacity: 1; }
    }
    
    .success-card {
        border-radius: 16px;
        background: white;
        position: relative;
        overflow: hidden;
    }
    
    .success-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: linear-gradient(90deg, #8a2be2, #ff2975);
    }
    
    .icon-circle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }
    
    .next-steps .step-item {
        background: white;
        border-radius: 12px;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    
    .next-steps .step-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(138, 43, 226, 0.15);
    }
    
    .step-number {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin: 0 auto;
    }
    
    .btn-primary {
        background: var(--gradient-primary) !important;
        border: none;
        border-radius: 50px !important;
        padding: 0.8rem 2rem !important;
        font-weight: 600;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        box-shadow: 0 6px 18px rgba(138, 43, 226, 0.3);
    }
    
    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(138, 43, 226, 0.4);
        background: var(--gradient-secondary) !important;
    }
    
    .btn-outline-primary {
        border: 2px solid #8a2be2 !important;
        color: #8a2be2 !important;
        border-radius: 50px !important;
        padding: 0.7rem 2rem !important;
        font-weight: 600;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    
    .btn-outline-primary:hover {
        background: #8a2be2 !important;
        color: white !important;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(138, 43, 226, 0.3);
    }
    
    .contact-info {
        color: #67338b;
    }
    
    .contact-info a {
        color: #8a2be2;
        text-decoration: underline;
        transition: all 0.3s;
    }
    
    .contact-info a:hover {
        color: #6a0dad;
    }
    
    /* Animation for the entire section */
    .thank-you-section .row > * {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.6s forwards;
    }
    
    .thank-you-section .row > *:nth-child(1) { animation-delay: 0.2s; }
    .thank-you-section .row > *:nth-child(2) { animation-delay: 0.4s; }
    .thank-you-section .row > *:nth-child(3) { animation-delay: 0.6s; }
    .thank-you-section .row > *:nth-child(4) { animation-delay: 0.8s; }
    .thank-you-section .row > *:nth-child(5) { animation-delay: 1s; }
    
    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Mobile responsive adjustments */
    @media (max-width: 767.98px) {
        .thank-you-section {
            padding: 4rem 0;
        }
        
        .success-icon {
            font-size: 4rem;
        }
        
        .display-5 {
            font-size: 2rem;
        }
        
        .next-steps .col-md-4 {
            margin-bottom: 1rem;
        }
        
        .cta-buttons {
            flex-direction: column;
        }
        
        .btn {
            width: 100%;
        }
    }
    
    @media (max-width: 575.98px) {
        .thank-you-section {
            padding: 3rem 0;
        }
        
        .success-icon {
            font-size: 3.5rem;
        }
        
        .display-5 {
            font-size: 1.8rem;
        }
        
        .success-card .card-body {
            padding: 1.5rem;
        }
        
        .icon-circle {
            width: 50px;
            height: 50px;
        }
        
        .icon-circle i {
            font-size: 1.2rem;
        }
    }
</style>

<script>
    // Animation for the thank you page
    document.addEventListener('DOMContentLoaded', function() {
        // Add animation to elements when they come into view
        const observerOptions = {
            threshold: 0.1
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        // Observe all elements that should animate
        document.querySelectorAll('.thank-you-section .row > *').forEach(el => {
            observer.observe(el);
        });
    });
</script>
    

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