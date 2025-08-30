<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janjua Tailors - Three Generations of Excellence | Gujranwala</title>
    
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/jt-logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #111;
            background: #fff;
            overflow-x: hidden;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            height: 80px;
            background: transparent;
            z-index: 1000;
            transition: all 0.4s ease;
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid #eee;
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100%;
            padding: 0 2rem;
        }

        .nav-brand {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 600;
            color: #fff;
            text-decoration: none;
            letter-spacing: -0.5px;
            transition: color 0.4s ease;
        }

        .navbar.scrolled .nav-brand {
            color: #111;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-weight: 400;
            font-size: 15px;
            transition: all 0.4s ease;
            position: relative;
        }

        .navbar.scrolled .nav-links a {
            color: #111;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: currentColor;
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .nav-toggle span {
            width: 25px;
            height: 2px;
            background: #fff;
            margin: 3px 0;
            transition: 0.3s;
        }

        .navbar.scrolled .nav-toggle span {
            background: #111;
        }

        /* Mobile Menu */
        .mobile-menu {
            position: fixed;
            top: 80px;
            left: -100%;
            width: 100%;
            height: calc(100vh - 80px);
            background: #fff;
            transition: left 0.3s ease;
            z-index: 999;
            overflow-y: auto;
        }

        .mobile-menu.active {
            left: 0;
        }

        .mobile-menu-content {
            padding: 2rem;
        }

        .mobile-menu-links {
            list-style: none;
        }

        .mobile-menu-links li {
            margin-bottom: 1rem;
            border-bottom: 1px solid #eee;
        }

        .mobile-menu-links a {
            display: block;
            padding: 1rem 0;
            color: #111;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .mobile-menu-links a:hover {
            color: #666;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.4;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        .hero-content {
            text-align: center;
            color: #fff;
            z-index: 2;
            max-width: 800px;
            padding: 0 2rem;
            position: relative;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(3rem, 8vw, 7rem);
            font-weight: 700;
            margin-bottom: 1rem;
            letter-spacing: -2px;
            line-height: 0.9;
        }

        .hero-subtitle {
            font-size: clamp(1.2rem, 3vw, 1.8rem);
            font-weight: 300;
            margin-bottom: 3rem;
            opacity: 0.9;
            letter-spacing: 1px;
        }

        .hero-cta {
            display: inline-block;
            padding: 1rem 3rem;
            background: transparent;
            color: #fff;
            text-decoration: none;
            border: 2px solid #fff;
            font-weight: 500;
            letter-spacing: 1px;
            transition: all 0.4s ease;
            text-transform: uppercase;
            font-size: 14px;
        }

        .hero-cta:hover {
            background: #fff;
            color: #000;
        }

        /* Section Styles */
        .section {
            padding: 6rem 0;
            position: relative;
        }

        .section.alt {
            background: #fafafa;
        }

        .section.minimal {
            padding: 4rem 0;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 500;
            margin-bottom: 1rem;
            color: #111;
            letter-spacing: -0.5px;
        }

        .section-subtitle {
            font-size: 1rem;
            color: #666;
            max-width: 500px;
            margin: 0 auto;
            font-weight: 300;
            line-height: 1.5;
        }

        /* Grid Layouts */
        .grid {
            display: grid;
            gap: 3rem;
        }

        .grid-2 {
            grid-template-columns: repeat(2, 1fr);
            align-items: center;
        }

        .grid-3 {
            grid-template-columns: repeat(3, 1fr);
        }

        /* Cards */
        .card {
            background: #fff;
            padding: 3rem 2rem;
            border-radius: 0;
            transition: all 0.4s ease;
            border: 1px solid #eee;
            text-align: center;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            border-color: #111;
        }

        .card-icon {
            font-size: 3rem;
            color: #111;
            margin-bottom: 2rem;
        }

        .card-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #111;
        }

        .card-text {
            color: #666;
            line-height: 1.6;
        }

        /* Heritage Section */
        .heritage {
            background: #111;
            color: #fff;
        }

        .heritage .section-title {
            color: #fff;
        }

        .heritage .section-subtitle {
            color: #ccc;
        }

        .heritage-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 5rem;
            align-items: center;
        }

        .heritage-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #ddd;
        }

        .heritage-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            text-align: center;
        }

        .stat-number {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            color: #fff;
            display: block;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #999;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Process Section */
        .process-item {
            text-align: center;
            position: relative;
        }

        .process-number {
            display: inline-block;
            width: 60px;
            height: 60px;
            background: #111;
            color: #fff;
            border-radius: 50%;
            line-height: 60px;
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .process-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #111;
        }

        .process-text {
            color: #666;
            line-height: 1.6;
        }

        /* Quality Section */
        .quality {
            background: #f8f8f8;
        }

        .quality-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .quality-card {
            background: #fff;
            padding: 3rem 2rem;
            text-align: center;
            border: 1px solid #eee;
            transition: all 0.4s ease;
            position: relative;
        }

        .quality-card.featured {
            border-color: #111;
            transform: scale(1.05);
        }

        .quality-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .quality-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #111;
        }

        .quality-text {
            color: #666;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .quality-features {
            list-style: none;
            text-align: left;
        }

        .quality-features li {
            padding: 0.5rem 0;
            color: #666;
            border-bottom: 1px solid #f0f0f0;
        }

        .quality-features li:before {
            content: '✓';
            color: #111;
            font-weight: bold;
            margin-right: 0.5rem;
        }

        /* Testimonial Section */
        .testimonial {
            background: #111;
            color: #fff;
            text-align: center;
        }

        .testimonial .section-title {
            color: #fff;
        }

        .testimonial-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .testimonial-quote {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-style: italic;
            line-height: 1.4;
            margin-bottom: 2rem;
            color: #fff;
        }

        .testimonial-author {
            font-size: 1rem;
            color: #999;
        }

        /* CTA Section */
        .cta {
            background: #f8f8f8;
            text-align: center;
        }

        .cta-button {
            display: inline-block;
            padding: 1.2rem 3rem;
            background: #111;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            letter-spacing: 1px;
            transition: all 0.4s ease;
            text-transform: uppercase;
            font-size: 14px;
            margin-top: 2rem;
        }

        .cta-button:hover {
            background: #333;
            transform: translateY(-2px);
        }

        /* Footer */
        .footer {
            background: #111;
            color: #fff;
            padding: 4rem 0 2rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-title {
            font-weight: 600;
            margin-bottom: 1rem;
            color: #fff;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.5rem;
        }

        .footer-links a {
            color: #999;
            text-decoration: none;
            transition: color 0.3s ease;
            font-size: 0.9rem;
        }

        .footer-links a:hover {
            color: #fff;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 2rem;
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }

        /* Additional Styles for New Sections */
        .craft-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .craft-stat {
            text-align: center;
        }

        .craft-number {
            display: block;
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            color: #111;
            line-height: 1;
        }

        .craft-label {
            font-size: 0.9rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .fabric-brands {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            text-align: center;
        }

        .fabric-brand {
            padding: 2rem 1rem;
            border: 1px solid #eee;
            font-weight: 500;
            color: #111;
            transition: all 0.3s ease;
        }

        .fabric-brand:hover {
            border-color: #111;
            transform: translateY(-5px);
        }

        .innovation-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        .innovation-item {
            padding: 1.5rem;
            border-left: 3px solid #111;
            background: #f8f8f8;
            font-weight: 500;
            color: #111;
        }

        .measurements-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }

        .measurement-point {
            padding: 1rem;
            text-align: center;
            border: 1px solid #eee;
            font-weight: 500;
            color: #111;
            transition: all 0.3s ease;
        }

        .measurement-point:hover {
            border-color: #111;
            background: #111;
            color: #fff;
        }

        .timeline {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .timeline-item {
            text-align: center;
            position: relative;
        }

        .timeline-year {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: #111;
            margin-bottom: 1rem;
        }

        .timeline-content h3 {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #111;
        }

        .timeline-content p {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.5;
        }

        .services-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 3rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .service-item {
            text-align: center;
        }

        .service-item h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #111;
        }

        .service-item p {
            color: #666;
            line-height: 1.6;
        }

        .city-content {
            max-width: 700px;
            margin: 0 auto;
            text-align: center;
        }

        .city-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #666;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .nav-toggle {
                display: flex;
            }

            .grid-2,
            .grid-3 {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .heritage-content {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .heritage-stats {
                grid-template-columns: 1fr;
            }

            .quality-grid {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }

            .section {
                padding: 4rem 0;
            }

            .container {
                padding: 0 1rem;
            }

            .fabric-brands {
                grid-template-columns: repeat(2, 1fr);
            }

            .innovation-list {
                grid-template-columns: 1fr;
            }

            .measurements-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .timeline {
                grid-template-columns: 1fr;
            }

            .services-list {
                grid-template-columns: 1fr;
            }

            .craft-stats {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }

            .fabric-brands {
                grid-template-columns: 1fr;
            }

            .measurements-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="{{ url('/') }}" class="nav-brand">Janjua Tailors</a>
            
            <ul class="nav-links">
                <li><a href="{{ route('pages.heritage') }}">Heritage</a></li>
                <li><a href="{{ route('pages.craftsmanship') }}">Craftsmanship</a></li>
                <li><a href="{{ route('products.index') }}">Fabrics</a></li>
                <li><a href="{{ route('custom-order.start') }}">Custom Order</a></li>
                @auth
                    <li><a href="{{ route('my-orders') }}">My Orders</a></li>
                    <li><a href="{{ route('dashboard') }}">Account</a></li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Sign Up</a></li>
                @endauth
            </ul>
            
            <div class="nav-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-content">
            <ul class="mobile-menu-links">
                <li><a href="{{ route('pages.heritage') }}">Heritage</a></li>
                <li><a href="{{ route('pages.craftsmanship') }}">Craftsmanship</a></li>
                <li><a href="{{ route('products.index') }}">Fabrics</a></li>
                <li><a href="{{ route('custom-order.start') }}">Custom Order</a></li>
                @auth
                    <li><a href="{{ route('my-orders') }}">My Orders</a></li>
                    <li><a href="{{ route('dashboard') }}">Account</a></li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Sign Up</a></li>
                @endauth
            </ul>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <video class="hero-video" autoplay loop muted playsinline>
            <source src="{{ asset('202508291855 (1).mp4') }}" type="video/mp4">
        </video>
        <div class="hero-content">
            <h1 class="hero-title">Janjua Tailors</h1>
            <p class="hero-subtitle">Three Generations of Excellence</p>
            <a href="{{ route('custom-order.start') }}" class="hero-cta">Start Your Order</a>
        </div>
    </section>

    <!-- Heritage Section -->
    <section class="section heritage">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Legacy</h2>
                <p class="section-subtitle">From Hafiz Ahmad's vision to today's innovation</p>
            </div>
            
            <div class="heritage-content">
                <div class="heritage-text">
                    <p>Since the 1980s, Janjua Tailors has been synonymous with excellence in Gujranwala. What started as Hafiz Ahmad's vision has evolved through three generations, each adding their unique touch while preserving the timeless art of bespoke tailoring.</p>
                    
                    <p>Today, under Umair Fiaz's leadership, we continue to honor traditional craftsmanship while embracing modern techniques, ensuring every garment meets the highest standards of quality and precision.</p>
                </div>
                
                <div class="heritage-stats">
                    <div>
                        <span class="stat-number">40+</span>
                        <span class="stat-label">Years Experience</span>
                    </div>
                    <div>
                        <span class="stat-number">3</span>
                        <span class="stat-label">Generations</span>
                    </div>
                    <div>
                        <span class="stat-number">1000+</span>
                        <span class="stat-label">Happy Clients</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Process</h2>
                <p class="section-subtitle">From consultation to completion</p>
            </div>
            
            <div class="grid grid-3">
                <div class="process-item">
                    <div class="process-number">1</div>
                    <h3 class="process-title">Consultation</h3>
                    <p class="process-text">We begin with understanding your vision, style preferences, and specific requirements for your custom garment.</p>
                </div>
                
                <div class="process-item">
                    <div class="process-number">2</div>
                    <h3 class="process-title">Measurement</h3>
                    <p class="process-text">Our master tailors take precise measurements to ensure a perfect fit that complements your body type.</p>
                </div>
                
                <div class="process-item">
                    <div class="process-number">3</div>
                    <h3 class="process-title">Crafting</h3>
                    <p class="process-text">Each garment is meticulously handcrafted using traditional techniques and the finest materials available.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Section -->
    <section class="section quality">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Quality Tiers</h2>
                <p class="section-subtitle">Each garment crafted on-demand to your specifications</p>
            </div>
            
            <div class="quality-grid">
                <div class="quality-card">
                    <h3 class="quality-title">Premium</h3>
                    <p class="quality-text">High-quality fabrics with standard stitching and finishing for everyday elegance.</p>
                    <ul class="quality-features">
                        <li>Quality fabric selection</li>
                        <li>Standard stitching</li>
                        <li>Basic finishing</li>
                        <li>2-week delivery</li>
                    </ul>
                </div>
                
                <div class="quality-card featured">
                    <h3 class="quality-title">Luxury</h3>
                    <p class="quality-text">Premium fabrics with enhanced stitching and superior finishing for special occasions.</p>
                    <ul class="quality-features">
                        <li>Premium fabric collection</li>
                        <li>Enhanced stitching</li>
                        <li>Superior finishing</li>
                        <li>Express delivery</li>
                    </ul>
                </div>
                
                <div class="quality-card">
                    <h3 class="quality-title">Royal</h3>
                    <p class="quality-text">Finest fabrics with master craftsman stitching and bespoke customization.</p>
                    <ul class="quality-features">
                        <li>Finest fabric selection</li>
                        <li>Master craftsmanship</li>
                        <li>Bespoke customization</li>
                        <li>White-glove service</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Philosophy Section -->
    <section class="section alt">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Philosophy</h2>
                <p class="section-subtitle">Luxury meets reliability in every stitch</p>
            </div>
        </div>
    </section>

    <!-- Craftsmanship Section -->
    <section class="section">
        <div class="container">
            <div class="grid grid-2">
                <div>
                    <h2 class="section-title">Master Craftsmanship</h2>
                    <p class="section-subtitle">Every garment tells a story of precision and passion. Our master tailors combine traditional techniques with modern innovation.</p>
                </div>
                <div>
                    <div class="craft-stats">
                        <div class="craft-stat">
                            <span class="craft-number">15</span>
                            <span class="craft-label">Master Tailors</span>
                        </div>
                        <div class="craft-stat">
                            <span class="craft-number">72</span>
                            <span class="craft-label">Hours Per Suit</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fabrics Section -->
    <section class="section alt">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Premium Fabrics</h2>
                <p class="section-subtitle">Sourced from the world's finest mills</p>
            </div>
            
            <div class="fabric-brands">
                <div class="fabric-brand">Ermenegildo Zegna</div>
                <div class="fabric-brand">Loro Piana</div>
                <div class="fabric-brand">Holland & Sherry</div>
                <div class="fabric-brand">Dormeuil</div>
            </div>
        </div>
    </section>

    <!-- Innovation Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Modern Innovation</h2>
                <p class="section-subtitle">Traditional craftsmanship enhanced by technology</p>
            </div>
            
            <div class="innovation-list">
                <div class="innovation-item">Digital Pattern Making</div>
                <div class="innovation-item">3D Fitting Technology</div>
                <div class="innovation-item">Precision Cutting Systems</div>
                <div class="innovation-item">Quality Control Protocols</div>
            </div>
        </div>
    </section>

    <!-- Measurements Section -->
    <section class="section alt">
        <div class="container">
            <div class="grid grid-2">
                <div>
                    <h2 class="section-title">Perfect Fit</h2>
                    <p class="section-subtitle">Our master tailors take over 30 precise measurements to ensure your garment fits like a second skin.</p>
                </div>
                <div class="measurements-grid">
                    <div class="measurement-point">Chest</div>
                    <div class="measurement-point">Waist</div>
                    <div class="measurement-point">Shoulders</div>
                    <div class="measurement-point">Sleeve Length</div>
                    <div class="measurement-point">Trouser Length</div>
                    <div class="measurement-point">Hip</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Journey</h2>
                <p class="section-subtitle">Over 130 years of excellence</p>
            </div>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">1890</div>
                    <div class="timeline-content">
                        <h3>Foundation</h3>
                        <p>Our founder establishes Janjua Tailors in Gujranwala with a vision for quality</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">1960s</div>
                    <div class="timeline-content">
                        <h3>Second Generation</h3>
                        <p>Hafiz Ahmad takes leadership, expanding reputation across Punjab</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">1990s</div>
                    <div class="timeline-content">
                        <h3>Modern Innovation</h3>
                        <p>Fiaz Ahmad introduces modern techniques while preserving tradition</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2020s</div>
                    <div class="timeline-content">
                        <h3>Third Generation</h3>
                        <p>Umair Fiaz brings digital innovation to traditional craft</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section alt">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Services</h2>
            </div>
            
            <div class="services-list">
                <div class="service-item">
                    <h3>Bespoke Suits</h3>
                    <p>Fully customized suits crafted to your exact specifications</p>
                </div>
                <div class="service-item">
                    <h3>Formal Shirts</h3>
                    <p>Premium shirts with perfect collar and cuff details</p>
                </div>
                <div class="service-item">
                    <h3>Traditional Wear</h3>
                    <p>Sherwanis and kurtas for special occasions</p>
                </div>
                <div class="service-item">
                    <h3>Alterations</h3>
                    <p>Expert adjustments for the perfect fit</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gujranwala Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Gujranwala</h2>
                <p class="section-subtitle">Our home, our heritage</p>
            </div>
            
            <div class="city-content">
                <p>Nestled in the heart of Punjab, Gujranwala has been our home for over four decades. This historic city, known for its rich culture and craftsmanship, has shaped our identity and continues to inspire our work.</p>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="section testimonial">
        <div class="container">
            <div class="testimonial-content">
                <blockquote class="testimonial-quote">
                    "Three generations of excellence - you can feel the heritage in every stitch. The quality and attention to detail is unmatched."
                </blockquote>
                <cite class="testimonial-author">Ahmed Hassan, Lahore</cite>
            </div>
        </div>
    </section>

    <!-- Founder Section -->
    <section class="section minimal">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Ready to Begin?</h2>
                <p class="section-subtitle">Experience three generations of tailoring excellence</p>
                <a href="{{ route('custom-order.start') }}" class="cta-button">Start Custom Order</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h4 class="footer-title">Services</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('custom-order.start') }}">Custom Tailoring</a></li>
                        <li><a href="{{ route('products.index') }}">Premium Fabrics</a></li>
                        <li><a href="{{ route('pages.alterations') }}">Alterations</a></li>
                        <li><a href="{{ route('pages.delivery') }}">Express Delivery</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="footer-title">About</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('pages.heritage') }}">Our Heritage</a></li>
                        <li><a href="{{ route('pages.craftsmanship') }}">Craftsmanship</a></li>
                        <li><a href="{{ route('pages.quality') }}">Quality Promise</a></li>
                        <li><a href="{{ route('pages.testimonials') }}">Testimonials</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="footer-title">Support</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('pages.contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('pages.size-guide') }}">Size Guide</a></li>
                        <li><a href="{{ route('pages.faq') }}">FAQ</a></li>
                        <li><a href="{{ route('pages.care') }}">Care Instructions</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="footer-title">Connect</h4>
                    <ul class="footer-links">
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">WhatsApp</a></li>
                        <li><a href="#">Newsletter</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 Janjua Tailors. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile navigation toggle
        document.getElementById('navToggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobileMenu');
            const navToggle = document.getElementById('navToggle');
            
            if (!mobileMenu.contains(event.target) && !navToggle.contains(event.target)) {
                mobileMenu.classList.remove('active');
            }
        });

        // Smooth scrolling for internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>