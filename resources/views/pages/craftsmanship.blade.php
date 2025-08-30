<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Craftsmanship - Janjua Tailors | Master Tailoring Excellence</title>
    
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

        /* Process Steps */
        .process-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            margin-top: 3rem;
        }

        .process-step {
            text-align: center;
            padding: 3rem 2rem;
            background: #fff;
            border: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .process-step:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            border-color: #111;
        }

        .step-number {
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

        .step-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #111;
        }

        .step-text {
            color: #666;
            line-height: 1.6;
        }

        /* Techniques Grid */
        .techniques-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 3rem;
            margin-top: 3rem;
        }

        .technique-item {
            padding: 3rem 2rem;
            background: #f8f8f8;
            border-left: 4px solid #111;
            transition: all 0.3s ease;
        }

        .technique-item:hover {
            background: #111;
            color: #fff;
        }

        .technique-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #111;
        }

        .technique-item:hover .technique-title {
            color: #fff;
        }

        .technique-text {
            color: #666;
            line-height: 1.6;
        }

        .technique-item:hover .technique-text {
            color: #ddd;
        }

        /* Tools Section */
        .tools-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .tool-item {
            text-align: center;
            padding: 2rem 1rem;
            background: #fff;
            border: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .tool-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-color: #111;
        }

        .tool-icon {
            font-size: 2.5rem;
            color: #111;
            margin-bottom: 1rem;
        }

        .tool-name {
            font-weight: 600;
            color: #111;
            margin-bottom: 0.5rem;
        }

        .tool-description {
            font-size: 0.9rem;
            color: #666;
        }

        /* Quality Standards */
        .quality-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            margin-top: 3rem;
        }

        .quality-item {
            text-align: center;
            padding: 3rem 2rem;
            background: #fff;
            border: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .quality-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            border-color: #111;
        }

        .quality-icon {
            font-size: 3rem;
            color: #111;
            margin-bottom: 2rem;
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
        }

        /* Master Tailors Section */
        .masters {
            background: #111;
            color: #fff;
        }

        .masters .section-title {
            color: #fff;
        }

        .masters .section-subtitle {
            color: #ccc;
        }

        .masters-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .masters-text {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #ddd;
            margin-bottom: 3rem;
        }

        .masters-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            text-align: center;
        }

        .master-stat {
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-number {
            font-family: 'Playfair Display', serif;
            font-size: 3rem;
            font-weight: 700;
            color: #fff;
            display: block;
            line-height: 1;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #ccc;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 0.5rem;
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

            .process-grid,
            .techniques-grid,
            .quality-grid {
                grid-template-columns: 1fr;
            }

            .tools-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .masters-stats {
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

            .tools-grid {
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
            <h1 class="hero-title">Craftsmanship</h1>
            <p class="hero-subtitle">The Art of Perfect Tailoring</p>
        </div>
    </section>

    <!-- Process Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Crafting Process</h2>
                <p class="section-subtitle">Every garment follows a meticulous process perfected over generations</p>
            </div>
            
            <div class="process-grid">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3 class="step-title">Consultation</h3>
                    <p class="step-text">We begin with understanding your style, preferences, and the occasion for your garment through detailed consultation.</p>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3 class="step-title">Measurement</h3>
                    <p class="step-text">Our master tailors take over 30 precise measurements to ensure a perfect fit that complements your body type.</p>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3 class="step-title">Pattern Creation</h3>
                    <p class="step-text">A unique pattern is created specifically for you, ensuring every curve and contour is perfectly captured.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Techniques Section -->
    <section class="section alt">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Traditional Techniques</h2>
                <p class="section-subtitle">Time-honored methods passed down through generations</p>
            </div>
            
            <div class="techniques-grid">
                <div class="technique-item">
                    <h3 class="technique-title">Hand Stitching</h3>
                    <p class="technique-text">Every critical seam is hand-stitched using techniques that have been perfected over 130 years, ensuring durability and a perfect finish.</p>
                </div>
                
                <div class="technique-item">
                    <h3 class="technique-title">Canvas Construction</h3>
                    <p class="technique-text">We use traditional canvas construction methods that allow the garment to mold to your body over time, creating a truly personalized fit.</p>
                </div>
                
                <div class="technique-item">
                    <h3 class="technique-title">Buttonhole Crafting</h3>
                    <p class="technique-text">Each buttonhole is meticulously hand-sewn, a mark of true bespoke tailoring that ensures both beauty and functionality.</p>
                </div>
                
                <div class="technique-item">
                    <h3 class="technique-title">Pressing Techniques</h3>
                    <p class="technique-text">Our master pressers use traditional methods and tools to shape each garment, creating the perfect silhouette and drape.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tools Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Tools of the Trade</h2>
                <p class="section-subtitle">The finest instruments for creating masterpieces</p>
            </div>
            
            <div class="tools-grid">
                <div class="tool-item">
                    <i class="fas fa-cut tool-icon"></i>
                    <h4 class="tool-name">Shears</h4>
                    <p class="tool-description">Precision cutting tools for perfect fabric preparation</p>
                </div>
                
                <div class="tool-item">
                    <i class="fas fa-ruler tool-icon"></i>
                    <h4 class="tool-name">Measuring Tools</h4>
                    <p class="tool-description">Traditional tape measures and rulers for accurate measurements</p>
                </div>
                
                <div class="tool-item">
                    <i class="fas fa-fire tool-icon"></i>
                    <h4 class="tool-name">Pressing Irons</h4>
                    <p class="tool-description">Professional irons for shaping and finishing</p>
                </div>
                
                <div class="tool-item">
                    <i class="fas fa-circle tool-icon"></i>
                    <h4 class="tool-name">Needles & Thread</h4>
                    <p class="tool-description">Finest quality materials for hand-stitching perfection</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Standards Section -->
    <section class="section alt">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Quality Standards</h2>
                <p class="section-subtitle">The benchmarks that define our excellence</p>
            </div>
            
            <div class="quality-grid">
                <div class="quality-item">
                    <i class="fas fa-eye quality-icon"></i>
                    <h3 class="quality-title">Attention to Detail</h3>
                    <p class="quality-text">Every stitch, every seam, every detail is inspected to ensure it meets our exacting standards of perfection.</p>
                </div>
                
                <div class="quality-item">
                    <i class="fas fa-clock quality-icon"></i>
                    <h3 class="quality-title">Time Investment</h3>
                    <p class="quality-text">We invest 72+ hours in crafting each suit, ensuring no detail is rushed and every element is perfect.</p>
                </div>
                
                <div class="quality-item">
                    <i class="fas fa-certificate quality-icon"></i>
                    <h3 class="quality-title">Master Approval</h3>
                    <p class="quality-text">Every garment must pass the approval of our master tailors before it reaches your hands.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Master Tailors Section -->
    <section class="section masters">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Master Tailors</h2>
                <p class="section-subtitle">The artisans behind every masterpiece</p>
            </div>
            
            <div class="masters-content">
                <p class="masters-text">
                    Our team of 15 master tailors represents the finest craftsmanship in Gujranwala. Each brings decades of experience and an unwavering commitment to excellence. They are not just tailors; they are artists who transform fabric into wearable masterpieces.
                </p>
                
                <div class="masters-stats">
                    <div class="master-stat">
                        <span class="stat-number">15</span>
                        <span class="stat-label">Master Tailors</span>
                    </div>
                    <div class="master-stat">
                        <span class="stat-number">25+</span>
                        <span class="stat-label">Years Average Experience</span>
                    </div>
                    <div class="master-stat">
                        <span class="stat-number">72</span>
                        <span class="stat-label">Hours Per Suit</span>
                    </div>
                </div>
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