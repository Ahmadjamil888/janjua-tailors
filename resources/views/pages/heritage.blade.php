<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Heritage - Janjua Tailors | Three Generations of Excellence</title>
    
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
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid #eee;
            z-index: 1000;
            transition: all 0.4s ease;
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
            color: #111;
            text-decoration: none;
            letter-spacing: -0.5px;
            transition: color 0.4s ease;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: #111;
            text-decoration: none;
            font-weight: 400;
            font-size: 15px;
            transition: all 0.4s ease;
            position: relative;
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
            background: #111;
            margin: 3px 0;
            transition: 0.3s;
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
            height: 60vh;
            background: #111;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            margin-top: 80px;
        }

        .hero-content {
            text-align: center;
            color: #fff;
            z-index: 2;
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(3rem, 6vw, 5rem);
            font-weight: 700;
            margin-bottom: 1rem;
            letter-spacing: -2px;
            line-height: 0.9;
        }

        .hero-subtitle {
            font-size: clamp(1.2rem, 2vw, 1.5rem);
            font-weight: 300;
            opacity: 0.9;
            letter-spacing: 1px;
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

        /* Timeline */
        .timeline {
            display: grid;
            grid-template-columns: 1fr;
            gap: 4rem;
            margin-top: 3rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .timeline-item {
            display: grid;
            grid-template-columns: 150px 1fr;
            gap: 3rem;
            align-items: center;
            position: relative;
        }

        .timeline-year {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            color: #111;
            text-align: right;
        }

        .timeline-content {
            padding: 2rem;
            background: #f8f8f8;
            border-left: 4px solid #111;
        }

        .timeline-content h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #111;
        }

        .timeline-content p {
            color: #666;
            line-height: 1.6;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
            text-align: center;
            margin-top: 3rem;
        }

        .stat-item {
            padding: 2rem;
            background: #f8f8f8;
            border: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-color: #111;
        }

        .stat-number {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            color: #111;
            display: block;
            line-height: 1;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #666;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 0.5rem;
        }

        /* Values Section */
        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            margin-top: 3rem;
        }

        .value-item {
            text-align: center;
            padding: 3rem 2rem;
            background: #fff;
            border: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .value-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            border-color: #111;
        }

        .value-icon {
            font-size: 3rem;
            color: #111;
            margin-bottom: 2rem;
        }

        .value-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #111;
        }

        .value-text {
            color: #666;
            line-height: 1.6;
        }

        /* Heritage Story */
        .heritage-story {
            background: #111;
            color: #fff;
        }

        .heritage-story .section-title {
            color: #fff;
        }

        .heritage-story .section-subtitle {
            color: #ccc;
        }

        .story-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .story-text {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #ddd;
            margin-bottom: 2rem;
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

            .timeline-item {
                grid-template-columns: 1fr;
                gap: 1rem;
                text-align: center;
            }

            .timeline-year {
                text-align: center;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .values-grid {
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
        }

        @media (max-width: 480px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
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
        <div class="hero-content">
            <h1 class="hero-title">Our Heritage</h1>
            <p class="hero-subtitle">Three Generations of Excellence Since 1890</p>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Journey Through Time</h2>
                <p class="section-subtitle">Over 130 years of dedication to the art of tailoring</p>
            </div>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">1890</div>
                    <div class="timeline-content">
                        <h3>The Foundation</h3>
                        <p>Our story begins in Gujranwala when our founder established the first Janjua Tailors workshop, setting the foundation for what would become a legacy of excellence in bespoke tailoring.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">1920s</div>
                    <div class="timeline-content">
                        <h3>Building Reputation</h3>
                        <p>The first generation establishes a reputation for quality and craftsmanship, serving the elite of Punjab with meticulously crafted garments that set new standards in the region.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">1960s</div>
                    <div class="timeline-content">
                        <h3>Second Generation</h3>
                        <p>Hafiz Ahmad takes the helm, bringing fresh perspectives while honoring traditional methods. The business expands its reach and refines its techniques under his visionary leadership.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">1990s</div>
                    <div class="timeline-content">
                        <h3>Modern Innovation</h3>
                        <p>Fiaz Ahmad introduces modern techniques and equipment while preserving the hand-crafted quality that defines our brand. The workshop modernizes without losing its artisanal soul.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2020s</div>
                    <div class="timeline-content">
                        <h3>Third Generation</h3>
                        <p>Umair Fiaz brings digital innovation and contemporary design sensibilities, ensuring Janjua Tailors remains at the forefront of bespoke tailoring for the modern gentleman.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section alt">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Legacy in Numbers</h2>
            </div>
            
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number">130+</span>
                    <span class="stat-label">Years of Excellence</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">3</span>
                    <span class="stat-label">Generations</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">5000+</span>
                    <span class="stat-label">Happy Clients</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">15</span>
                    <span class="stat-label">Master Tailors</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Values</h2>
                <p class="section-subtitle">The principles that have guided us for over a century</p>
            </div>
            
            <div class="values-grid">
                <div class="value-item">
                    <i class="fas fa-gem value-icon"></i>
                    <h3 class="value-title">Quality</h3>
                    <p class="value-text">We never compromise on quality. Every stitch, every detail is executed with precision and care that has defined our craft for generations.</p>
                </div>
                
                <div class="value-item">
                    <i class="fas fa-handshake value-icon"></i>
                    <h3 class="value-title">Integrity</h3>
                    <p class="value-text">Honest craftsmanship and transparent dealings have built the trust that spans three generations of loyal clientele.</p>
                </div>
                
                <div class="value-item">
                    <i class="fas fa-lightbulb value-icon"></i>
                    <h3 class="value-title">Innovation</h3>
                    <p class="value-text">While respecting tradition, we embrace innovation to enhance our craft and serve our clients better with each passing generation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Heritage Story Section -->
    <section class="section heritage-story">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">The Janjua Legacy</h2>
                <p class="section-subtitle">A story of passion, dedication, and unwavering commitment to excellence</p>
            </div>
            
            <div class="story-content">
                <p class="story-text">
                    In the bustling streets of Gujranwala in 1890, our founder laid the cornerstone of what would become a legendary tailoring house. With nothing but skill, passion, and an unwavering commitment to quality, the first generation of Janjua Tailors began crafting garments that would set new standards in the region.
                </p>
                
                <p class="story-text">
                    Through the decades, each generation has added their unique touch while preserving the essence of our craft. From the traditional techniques passed down through generations to the modern innovations that enhance our precision, we have evolved while staying true to our roots.
                </p>
                
                <p class="story-text">
                    Today, as we enter our fourth decade under the third generation's leadership, we continue to honor the legacy of our founders while embracing the future of bespoke tailoring. Every garment we create carries within it 130 years of expertise, passion, and dedication to the art of fine tailoring.
                </p>
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
    </script>
</body>
</html>