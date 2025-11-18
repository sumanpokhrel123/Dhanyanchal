<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhanyanchal Finance - Your Trusted Financial Partner</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Base Styles */
        :root {
            --primary: #8e44ad;
            --secondary: #9b59b6;
            --accent: #e67e22;
            --light: #f9f7fe;
            --dark: #2c3e50;
            --success: #27ae60;
            --text: #333;
            --text-light: #7f8c8d;
            --gradient: linear-gradient(135deg, #8e44ad 0%, #9b59b6 100%);
            --gradient-accent: linear-gradient(135deg, #e67e22 0%, #d35400 100%);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            line-height: 1.6;
            color: var(--text);
            background-color: #f9f9f9;
            overflow-x: hidden;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section {
            padding: 5rem 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 1rem;
            font-family: 'Playfair Display', serif;
        }
        
        .section-title p {
            color: var(--text-light);
            max-width: 600px;
            margin: 0 auto;
            font-size: 1.1rem;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--gradient-accent);
            border-radius: 2px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: var(--gradient);
            color: white;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(142, 68, 173, 0.3);
        }
        
        .btn:hover {
            background: var(--gradient-accent);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(230, 126, 34, 0.4);
        }
        
        .btn-accent {
            background: var(--gradient-accent);
        }
        
        .btn-accent:hover {
            background: var(--gradient);
        }
        
        /* Header Styles */
        header {
            background: white;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.2rem 0;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo h1 {
            font-size: 1.8rem;
            color: var(--primary);
            font-family: 'Playfair Display', serif;
        }
        
        .logo span {
            color: var(--accent);
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
        }
        
        .nav-menu li {
            margin-left: 2rem;
            position: relative;
        }
        
        .nav-menu a {
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }
        
        .nav-menu a:hover {
            color: var(--accent);
        }
        
        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: width 0.3s;
        }
        
        .nav-menu a:hover::after {
            width: 100%;
        }
        
        .mobile-menu-btn {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--primary);
        }
        
        /* Hero Section */
        .hero {
            position: relative;
            height: 90vh;
            overflow: hidden;
            background: linear-gradient(rgba(44, 62, 80, 0.8), rgba(44, 62, 80, 0.8)), url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1400&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            font-family: 'Playfair Display', serif;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .hero-btns {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        /* Carousel Section */
        .carousel-section {
            background: var(--light);
            position: relative;
        }
        
        .carousel-container {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .carousel {
            display: flex;
            transition: transform 0.5s ease;
        }
        
        .carousel-item {
            min-width: 100%;
            position: relative;
        }
        
        .carousel-item img {
            width: 100%;
            display: block;
            height: 500px;
            object-fit: cover;
        }
        
        .carousel-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            color: white;
            padding: 2rem;
        }
        
        .carousel-caption h3 {
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
            font-family: 'Playfair Display', serif;
        }
        
        .carousel-nav {
            display: flex;
            justify-content: center;
            margin-top: 1.5rem;
        }
        
        .carousel-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--text-light);
            margin: 0 5px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .carousel-dot.active {
            background: var(--primary);
            transform: scale(1.2);
        }
        
        /* Services Section */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .service-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            z-index: 1;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 0;
            background: var(--gradient);
            transition: height 0.3s;
            z-index: -1;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .service-card:hover::before {
            height: 100%;
        }
        
        .service-card:hover .service-icon {
            background: white;
            color: var(--primary);
        }
        
        .service-card:hover .service-content h3,
        .service-card:hover .service-content p {
            color: white;
        }
        
        .service-icon {
            background: var(--gradient);
            color: white;
            font-size: 2.5rem;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s;
        }
        
        .service-content {
            padding: 1.5rem;
            transition: all 0.3s;
        }
        
        .service-content h3 {
            margin-bottom: 1rem;
            color: var(--primary);
            transition: all 0.3s;
        }
        
        .service-content p {
            color: var(--text-light);
            transition: all 0.3s;
        }
        
        .service-image {
            height: 200px;
            overflow: hidden;
        }
        
        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .service-card:hover .service-image img {
            transform: scale(1.05);
        }
        
        /* Latest Information Section */
        .latest-info-section {
            background: var(--light);
        }
        
        .latest-info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .latest-info-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s;
        }
        
        .latest-info-card:hover {
            transform: translateY(-10px);
        }
        
        .latest-info-img {
            height: 200px;
            overflow: hidden;
            position: relative;
        }
        
        .latest-info-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .latest-info-card:hover .latest-info-img img {
            transform: scale(1.1);
        }
        
        .latest-info-content {
            padding: 1.5rem;
        }
        
        .latest-info-content h3 {
            margin-bottom: 1rem;
            color: var(--primary);
            font-family: 'Playfair Display', serif;
        }
        
        .latest-info-content p {
            margin-bottom: 1rem;
            color: var(--text-light);
        }
        
        /* News Section */
        .news-section {
            background: white;
        }
        
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .news-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s;
        }
        
        .news-card:hover {
            transform: translateY(-10px);
        }
        
        .news-img {
            height: 200px;
            overflow: hidden;
            position: relative;
        }
        
        .news-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .news-card:hover .news-img img {
            transform: scale(1.1);
        }
        
        .news-date {
            position: absolute;
            top: 15px;
            right: 15px;
            background: var(--gradient-accent);
            color: white;
            padding: 8px 15px;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 600;
        }
        
        .news-content {
            padding: 1.5rem;
        }
        
        .news-content h3 {
            margin-bottom: 1rem;
            color: var(--primary);
            font-family: 'Playfair Display', serif;
        }
        
        .news-content p {
            margin-bottom: 1rem;
            color: var(--text-light);
        }
        
        /* Notices Section */
        .notices-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            overflow: hidden;
        }
        
        .notice-item {
            padding: 1.5rem;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            transition: background 0.3s;
        }
        
        .notice-item:hover {
            background: var(--light);
        }
        
        .notice-item:last-child {
            border-bottom: none;
        }
        
        .notice-date {
            background: var(--gradient);
            color: white;
            padding: 0.8rem 1rem;
            border-radius: 8px;
            text-align: center;
            margin-right: 1.5rem;
            min-width: 80px;
            box-shadow: 0 4px 10px rgba(142, 68, 173, 0.3);
        }
        
        .notice-date .day {
            font-size: 1.5rem;
            font-weight: bold;
            display: block;
        }
        
        .notice-date .month {
            font-size: 0.9rem;
            text-transform: uppercase;
        }
        
        .notice-content h4 {
            margin-bottom: 0.5rem;
            color: var(--primary);
        }
        
        /* Stats Section */
        .stats-section {
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9)), url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1400&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }
        
        .stat-item {
            padding: 2rem;
            position: relative;
        }
        
        .stat-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--accent);
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            font-family: 'Playfair Display', serif;
        }
        
        .stat-text {
            font-size: 1.2rem;
        }
        
        /* Company Description Section */
        .company-section {
            background: var(--light);
        }
        
        .company-container {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }
        
        .company-content {
            margin-bottom: 2rem;
        }
        
        .company-content h2 {
            font-size: 2.2rem;
            color: var(--primary);
            margin-bottom: 1.5rem;
            font-family: 'Playfair Display', serif;
        }
        
        .company-content p {
            margin-bottom: 1.5rem;
            color: var(--text-light);
            text-align: left;
        }
        
        .read-more-btn {
            background: var(--gradient);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(142, 68, 173, 0.3);
            margin-top: 1rem;
            display: inline-block;
        }
        
        .read-more-btn:hover {
            background: var(--gradient-accent);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(230, 126, 34, 0.4);
        }
        
        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 4rem 0 2rem;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-col h3 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
            font-family: 'Playfair Display', serif;
        }
        
        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--accent);
        }
        
        .footer-col p {
            margin-bottom: 1rem;
            color: #bbb;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 0.8rem;
        }
        
        .footer-links a {
            color: #bbb;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--accent);
            padding-left: 5px;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }
        
        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            transition: all 0.3s;
        }
        
        .social-links a:hover {
            background: var(--accent);
            transform: translateY(-5px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #bbb;
            font-size: 0.9rem;
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.8rem;
            }
            
            .section-title h2 {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }
            
            .nav-menu {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                flex-direction: column;
                background: white;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 27px rgba(0,0,0,0.05);
                padding: 2rem 0;
            }
            
            .nav-menu.active {
                left: 0;
            }
            
            .nav-menu li {
                margin: 1.5rem 0;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
            
            .hero-btns {
                flex-direction: column;
                gap: 1rem;
            }
            
            .section {
                padding: 3rem 0;
            }
        }
        
        @media (max-width: 576px) {
            .hero h1 {
                font-size: 1.8rem;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
            
            .carousel-caption h3 {
                font-size: 1.4rem;
            }
            
            .stat-number {
                font-size: 2.5rem;
            }
            
            .notice-item {
                flex-direction: column;
                text-align: center;
            }
            
            .notice-date {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <h1>Dhanyanchal <span>Finance</span></h1>
            </div>
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#latest-info">Latest Info</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#notices">Notices</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container hero-content">
            <h1>Your Trusted Partner in Financial Growth</h1>
            <p>We provide comprehensive financial solutions to help you achieve your dreams and secure your future with personalized services and expert guidance.</p>
            <div class="hero-btns">
                <a href="#services" class="btn btn-accent">Our Services</a>
                <a href="#contact" class="btn">Get In Touch</a>
            </div>
        </div>
    </section>

    <!-- Carousel Section -->
    <section class="section carousel-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Financial Solutions</h2>
                <p>Explore our wide range of financial products designed to meet your unique needs</p>
            </div>
            <div class="carousel-container">
                <div class="carousel">
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1400&q=80" alt="Personal Loans">
                        <div class="carousel-caption">
                            <h3>Personal Loans</h3>
                            <p>Flexible loan options for all your personal needs</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=1400&q=80" alt="Business Finance">
                        <div class="carousel-caption">
                            <h3>Business Finance</h3>
                            <p>Fuel your business growth with our tailored financing solutions</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=1400&q=80" alt="Home Loans">
                        <div class="carousel-caption">
                            <h3>Home Loans</h3>
                            <p>Make your dream home a reality with our affordable home loan options</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1533750349088-cd871a92f312?ixlib=rb-4.0.3&auto=format&fit=crop&w=1400&q=80" alt="Investment Plans">
                        <div class="carousel-caption">
                            <h3>Investment Plans</h3>
                            <p>Grow your wealth with our expert-guided investment opportunities</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-nav">
                    <div class="carousel-dot active" data-index="0"></div>
                    <div class="carousel-dot" data-index="1"></div>
                    <div class="carousel-dot" data-index="2"></div>
                    <div class="carousel-dot" data-index="3"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>We offer a comprehensive range of financial services to meet all your needs</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Personal Loans">
                    </div>
                    <div class="service-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <div class="service-content">
                        <h3>Personal Loans</h3>
                        <p>Get quick and easy personal loans with competitive interest rates and flexible repayment options for all your personal needs.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Business Finance">
                    </div>
                    <div class="service-icon">
                        <i class="fas fa-business-time"></i>
                    </div>
                    <div class="service-content">
                        <h3>Business Finance</h3>
                        <p>Fuel your business growth with our tailored financing solutions, working capital loans, and business expansion funds.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Home Loans">
                    </div>
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="service-content">
                        <h3>Home Loans</h3>
                        <p>Make your dream home a reality with our affordable home loan options, low interest rates, and flexible repayment terms.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1533750349088-cd871a92f312?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Investment Plans">
                    </div>
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="service-content">
                        <h3>Investment Plans</h3>
                        <p>Grow your wealth with our expert-guided investment opportunities, mutual funds, and retirement planning solutions.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Internet Banking">
                    </div>
                    <div class="service-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="service-content">
                        <h3>Internet Banking</h3>
                        <p>Access your accounts anytime, anywhere with our secure and user-friendly internet banking platform.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="SMS Service">
                    </div>
                    <div class="service-icon">
                        <i class="fas fa-sms"></i>
                    </div>
                    <div class="service-content">
                        <h3>SMS Service</h3>
                        <p>Stay updated with real-time transaction alerts and account information through our SMS banking service.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1556656793-08538906a9f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Mobile Banking">
                    </div>
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="service-content">
                        <h3>Mobile Banking</h3>
                        <p>Bank on the go with our feature-rich mobile banking app, offering seamless transactions and account management.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="https://images.unsplash.com/photo-1579621970795-87facc2f976d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Personal Saving Account">
                    </div>
                    <div class="service-icon">
                        <i class="fas fa-piggy-bank"></i>
                    </div>
                    <div class="service-content">
                        <h3>Personal Saving Account</h3>
                        <p>Start your savings journey with our personal saving accounts that offer attractive interest rates and zero balance maintenance.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Information Section -->
    <section class="section latest-info-section" id="latest-info">
        <div class="container">
            <div class="section-title">
                <h2>Latest Information</h2>
                <p>Stay updated with the latest financial insights and market trends</p>
            </div>
            <div class="latest-info-grid">
                <div class="latest-info-card">
                    <div class="latest-info-img">
                        <img src="https://images.unsplash.com/photo-1611974789855-9c2a0a7236a3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Digital Transformation">
                    </div>
                    <div class="latest-info-content">
                        <h3>Digital Transformation in Banking</h3>
                        <p>Discover how digital transformation is reshaping the banking industry and creating new opportunities for customers.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="latest-info-card">
                    <div class="latest-info-img">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Financial Planning">
                    </div>
                    <div class="latest-info-content">
                        <h3>Smart Financial Planning Strategies</h3>
                        <p>Learn effective financial planning strategies to secure your future and achieve your financial goals.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="latest-info-card">
                    <div class="latest-info-img">
                        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Economic Growth">
                    </div>
                    <div class="latest-info-content">
                        <h3>Economic Growth Opportunities</h3>
                        <p>Explore emerging economic growth opportunities and how you can benefit from them with our expert guidance.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="section news-section" id="news">
        <div class="container">
            <div class="section-title">
                <h2>Latest News</h2>
                <p>Stay updated with the latest financial news and updates from Dhanyanchal Finance</p>
            </div>
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-img">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Financial Planning">
                        <div class="news-date">June 15, 2025</div>
                    </div>
                    <div class="news-content">
                        <h3>New Investment Opportunities in Emerging Markets</h3>
                        <p>Discover the latest investment opportunities in emerging markets and how you can benefit from them with our expert guidance.</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-img">
                        <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Business Growth">
                        <div class="news-date">June 10, 2025</div>
                    </div>
                    <div class="news-content">
                        <h3>How Small Businesses Can Access Capital in 2025</h3>
                        <p>Learn about the various financing options available for small businesses and how to choose the right one for your needs.</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-img">
                        <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Home Loans">
                        <div class="news-date">June 5, 2025</div>
                    </div>
                    <div class="news-content">
                        <h3>Home Loan Interest Rates Hit Record Low</h3>
                        <p>Take advantage of historically low home loan interest rates to make your dream of homeownership a reality.</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Notices Section -->
    <section class="section" id="notices">
        <div class="container">
            <div class="section-title">
                <h2>Important Notices</h2>
                <p>Stay informed about important announcements and updates from Dhanyanchal Finance</p>
            </div>
            <div class="notices-container">
                <div class="notice-item">
                    <div class="notice-date">
                        <span class="day">20</span>
                        <span class="month">June</span>
                    </div>
                    <div class="notice-content">
                        <h4>Branch Closure for Annual Maintenance</h4>
                        <p>Our main branch will be closed on June 25th for annual maintenance. Online services will remain available.</p>
                    </div>
                </div>
                <div class="notice-item">
                    <div class="notice-date">
                        <span class="day">15</span>
                        <span class="month">June</span>
                    </div>
                    <div class="notice-content">
                        <h4>New Mobile App Launch</h4>
                        <p>We're excited to announce the launch of our new mobile banking app with enhanced features and security.</p>
                    </div>
                </div>
                <div class="notice-item">
                    <div class="notice-date">
                        <span class="day">10</span>
                        <span class="month">June</span>
                    </div>
                    <div class="notice-content">
                        <h4>Revised Interest Rates on Fixed Deposits</h4>
                        <p>We have revised our fixed deposit interest rates effective from June 15th. Contact your branch for details.</p>
                    </div>
                </div>
                <div class="notice-item">
                    <div class="notice-date">
                        <span class="day">05</span>
                        <span class="month">June</span>
                    </div>
                    <div class="notice-content">
                        <h4>Financial Literacy Workshop</h4>
                        <p>Join our free financial literacy workshop on June 20th to learn about smart money management and investment strategies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section stats-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Achievements</h2>
                <p>Years of excellence in serving our valued customers</p>
            </div>
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">15+</div>
                    <div class="stat-text">Years of Experience</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">50,000+</div>
                    <div class="stat-text">Happy Customers</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">₹500Cr+</div>
                    <div class="stat-text">Loan Disbursed</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">25+</div>
                    <div class="stat-text">Branches</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Description Section -->
    <section class="section company-section" id="about">
        <div class="container company-container">
            <div class="company-content">
                <h2>About Dhanyanchal Finance</h2>
                <p>Dhanyanchal Finance has been a trusted name in the financial services industry for over 15 years. Our journey began with a simple mission: to provide accessible and reliable financial solutions to individuals and businesses across the region.</p>
                <p>We believe that financial empowerment is the key to personal and community growth. That's why we've dedicated ourselves to creating products and services that meet the diverse needs of our customers, from personal loans and savings accounts to comprehensive business financing solutions.</p>
                <a href="read.php" class="read-more-btn">Read More</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>Dhanyanchal Finance</h3>
                    <p>Your trusted partner for all financial needs. We are committed to helping you achieve your financial goals with our comprehensive services.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#latest-info">Latest Info</a></li>
                        <li><a href="#news">News</a></li>
                        <li><a href="#notices">Notices</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Our Services</h3>
                    <ul class="footer-links">
                        <li><a href="#">Personal Loans</a></li>
                        <li><a href="#">Business Finance</a></li>
                        <li><a href="#">Home Loans</a></li>
                        <li><a href="#">Investment Plans</a></li>
                        <li><a href="#">Internet Banking</a></li>
                        <li><a href="#">Mobile Banking</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> 123 Finance Street, Mumbai, India</p>
                    <p><i class="fas fa-phone"></i> +91 98765 43210</p>
                    <p><i class="fas fa-envelope"></i> info@dhanyanchal.com</p>
                    <p><i class="fas fa-clock"></i> Mon - fri: 10:00 AM - 4:00 PM</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Dhanyanchal Finance. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navMenu = document.querySelector('.nav-menu');
        
        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
        
        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });
        
        // Carousel Functionality
        const carousel = document.querySelector('.carousel');
        const carouselItems = document.querySelectorAll('.carousel-item');
        const dots = document.querySelectorAll('.carousel-dot');
        let currentIndex = 0;
        const totalItems = carouselItems.length;
        
        // Initialize carousel
        function initCarousel() {
            updateCarousel();
            
            // Auto slide every 5 seconds
            setInterval(() => {
                currentIndex = (currentIndex + 1) % totalItems;
                updateCarousel();
            }, 5000);
        }
        
        // Update carousel position and active dot
        function updateCarousel() {
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
            
            // Update active dot
            dots.forEach((dot, index) => {
                if (index === currentIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }
        
        // Dot click event
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                currentIndex = parseInt(dot.getAttribute('data-index'));
                updateCarousel();
            });
        });
        
        // Initialize carousel when page loads
        window.addEventListener('load', initCarousel);
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.background = 'white';
                header.style.backdropFilter = 'none';
            }
        });
    </script>
</body>
</html>