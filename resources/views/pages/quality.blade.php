<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quality Promise - Janjua Tailors | Excellence Guaranteed</title>
    
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

        /* Quality Tiers */
        .tiers-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            margin-top: 3rem;
        }

        .tier-card {
            background: #fff;
            padding: 3rem 2rem;
            text-align: center;
            border: 1px solid #eee;
            transition: all 0.4s ease;
            position: relative;
        }

        .tier-card.featured {
            border-color: #111;
            transform: scale(1.05);
        }

        .tier-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        }

        .tier-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: #111;
        }

        .tier-features {
            list-style: none;
            text-align: left;
            margin-bottom: 2rem;
        }

        .tier-features li {
            padding: 0.75rem 0;
            color: #666;
            border-bottom: 1px solid #f0f0f0;
        }

        .tier-features li:before {
            content: '✓';
            color: #111;
            font-weight: bold;
            margin-right: 0.75rem;
        }

        /* Standards Grid */
        .standards-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 3rem;
            margin-top: 3rem;
        }

        .standard-item {
            padding: 3rem 2rem;
            background: #f8f8f8;
            border-left: 4px solid #111;
            transition: all 0.3s ease;
        }

        .standard-item:hover {
            background: #111;
            color: #fff;
        }

        .standard-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #111;
        }

        .standard-item:hover .standard-title {
            color: #fff;
        }

        .standard-text {
            color: #666;
            line-height: 1.6;
        }

        .standard-item:hover .standard-text {
            color: #ddd;
        }

        /* Materials Section */
        .materials-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .material-item {
            text-align: center;
            padding: 2rem 1rem;
            background: #fff;
            border: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .material-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-color: #111;
        }

        .material-icon {
            font-size: 2.5rem;
            color: #111;
            margin-bottom: 1rem;
        }

        .material-name {
            font-weight: 600;
            color: #111;
            margin-bottom: 0.5rem;
        }

        .material-description {
            font-size: 0.9rem;
            color: #666;
        }

        /* Guarantee Section */
        .guarantee {
            background: #111;
            color: #fff;
        }

        .guarantee .section-title {
            color: #fff;
        }

        .guarantee .section-subtitle {
            color: #ccc;
        }

        .guarantee-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .guarantee-text {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #ddd;
            margin-bottom: 3rem;
        }

        .guarantee-points {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            text-align: center;
        }

        .guarantee-point {
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .guarantee-icon {
            font-size: 3rem;
            color: #fff;
            margin-bottom: 1rem;
        }

        .guarantee-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #fff;
        }

        .guarantee-desc {
            color: #ccc;
            line-height: 1.6;
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

            .tiers-grid,
            .standards-grid {
                grid-template-columns: 1fr;
            }

            .materials-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .guarantee-points {
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

            .materials-grid {
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
            <h1 class="hero-title">Quality Promise</h1>
            <p class="hero-subtitle">Excellence Guaranteed in Every Stitch</p>
        </div>
    </section>

    <!-- Quality Tiers Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Quality Tiers</h2>
                <p class="section-subtitle">Each tier represents our commitment to excellence at different levels</p>
            </div>
            
            <div class="tiers-grid">
                <div class="tier-card">
                    <h3 class="tier-title">Premium</h3>
                    <ul class="tier-features">
                        <li>High-quality fabric selection</li>
                        <li>Standard stitching techniques</li>
                        <li>Basic finishing details</li>
                        <li>2-week delivery timeline</li>
                        <li>Quality assurance check</li>
                        <li>Basic alterations included</li>
                    </ul>
                </div>
                
                <div class="tier-card featured">
                    <h3 class="tier-title">Luxury</h3>
                    <ul class="tier-features">
                        <li>Premium fabric collection</li>
                        <li>Enhanced stitching methods</li>
                        <li>Superior finishing details</li>
                        <li>Express delivery available</li>
                        <li>Master tailor oversight</li>
                        <li>Comprehensive alterations</li>
                    </ul>
                </div>
                
                <div class="tier-card">
                    <h3 class="tier-title">Royal</h3>
                    <ul class="tier-features">
                        <li>Finest fabric selection</li>
                        <li>Master craftsman stitching</li>
                        <li>Bespoke customization</li>
                        <li>White-glove service</li>
                        <li>Personal consultation</li>
                        <li>Lifetime alterations</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Standards Section -->
    <section class="section alt">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Standards</h2>
                <p class="section-subtitle">The benchmarks that define our commitment to excellence</p>
            </div>
            
            <div class="standards-grid">
                <div class="standard-item">
                    <h3 class="standard-title">Precision Measurement</h3>
                    <p class="standard-text">We take over 30 precise measurements to ensure every garment fits perfectly. Our master tailors use traditional techniques combined with modern precision tools.</p>
                </div>
                
                <div class="standard-item">
                    <h3 class="standard-title">Hand-Finished Details</h3>
                    <p class="standard-text">Critical elements like buttonholes, lapels, and seams are hand-finished by our master craftsmen, ensuring durability and aesthetic perfection.</p>
                </div>
                
                <div class="standard-item">
                    <h3 class="standard-title">Quality Control</h3>
                    <p class="standard-text">Every garment undergoes rigorous quality control checks at multiple stages, ensuring it meets our exacting standards before delivery.</p>
                </div>
                
                <div class="standard-item">
                    <h3 class="standard-title">Time Investment</h3>
                    <p class="standard-text">We invest 72+ hours in crafting each suit, allowing proper time for each process without rushing any detail or compromising quality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Materials Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Premium Materials</h2>
                <p class="section-subtitle">Only the finest materials make it into our workshop</p>
            </div>
            
            <div class="materials-grid">
                <div class="material-item">
                    <i class="fas fa-leaf material-icon"></i>
                    <h4 class="material-name">Natural Fibers</h4>
                    <p class="material-description">Pure wool, cotton, and silk from premium mills</p>
                </div>
                
                <div class="material-item">
                    <i class="fas fa-certificate material-icon"></i>
                    <h4 class="material-name">Certified Quality</h4>
                    <p class="material-description">All fabrics meet international quality standards</p>
                </div>
                
                <div class="material-item">
                    <i class="fas fa-globe material-icon"></i>
                    <h4 class="material-name">Global Sourcing</h4>
                    <p class="material-description">Sourced from renowned mills worldwide</p>
                </div>
                
                <div class="material-item">
                    <i class="fas fa-shield-alt material-icon"></i>
                    <h4 class="material-name">Durability Tested</h4>
                    <p class="material-description">Tested for longevity and wear resistance</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Guarantee Section -->
    <section class="section guarantee">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Guarantee</h2>
                <p class="section-subtitle">Your satisfaction is our commitment</p>
            </div>
            
            <div class="guarantee-content">
                <p class="guarantee-text">
                    We stand behind every garment we create with a comprehensive guarantee that reflects our confidence in our craftsmanship. Your satisfaction is not just our goal—it's our promise.
                </p>
                
                <div class="guarantee-points">
                    <div class="guarantee-point">
                        <i class="fas fa-redo guarantee-icon"></i>
                        <h3 class="guarantee-title">Perfect Fit</h3>
                        <p class="guarantee-desc">We guarantee the perfect fit or we'll remake your garment at no additional cost</p>
                    </div>
                    
                    <div class="guarantee-point">
                        <i class="fas fa-clock guarantee-icon"></i>
                        <h3 class="guarantee-title">Timely Delivery</h3>
                        <p class="guarantee-desc">Your garment will be ready on time, or we'll provide compensation for the delay</p>
                    </div>
                    
                    <div class="guarantee-point">
                        <i class="fas fa-star guarantee-icon"></i>
                        <h3 class="guarantee-title">Quality Assurance</h3>
                        <p class="guarantee-desc">Any quality issues will be addressed immediately with full satisfaction guarantee</p>
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