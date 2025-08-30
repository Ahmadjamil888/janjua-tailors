<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Janjua Tailors</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: #1d1d1f;
            background: #fbfbfd;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            height: 60px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: saturate(180%) blur(20px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 100%;
            padding: 0 24px;
        }

        .nav-left {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .nav-menu-icon,
        .nav-cart-icon {
            font-size: 20px;
            color: #1d1d1f;
            cursor: pointer;
            transition: opacity 0.3s ease;
        }

        .nav-menu-icon:hover,
        .nav-cart-icon:hover {
            opacity: 0.7;
        }

        .nav-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-family: "Didot", "Bodoni MT", "Garamond", "Palatino Linotype", "Times New Roman", Georgia, serif;
            font-size: 24px;
            font-weight: 600;
            color: #1d1d1f;
            text-decoration: none;
            letter-spacing: -0.5px;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .nav-auth-links {
            display: flex;
            gap: 20px;
        }

        .nav-auth-links a {
            font-family: 'Arial', sans-serif;
            color: #1d1d1f;
            text-decoration: none;
            font-size: 14px;
            font-weight: 400;
            transition: opacity 0.3s ease;
        }

        .nav-auth-links a:hover {
            opacity: 0.7;
        }

        /* Mobile Menu */
        .mobile-menu {
            position: fixed;
            top: 60px;
            left: -100%;
            width: 100%;
            height: calc(100vh - 60px);
            background: white;
            transition: left 0.3s ease;
            z-index: 999;
        }

        .mobile-menu.active {
            left: 0;
        }

        .mobile-menu-content {
            padding: 40px 24px;
        }

        .mobile-menu-links {
            list-style: none;
            margin-bottom: 40px;
        }

        .mobile-menu-links li {
            margin-bottom: 24px;
        }

        .mobile-menu-links a {
            font-size: 18px;
            color: #1d1d1f;
            text-decoration: none;
            font-weight: 500;
        }

        /* Main Content */
        .main-content {
            margin-top: 60px;
            min-height: calc(100vh - 60px);
        }

        .hero-section {
            background: linear-gradient(135deg, #1d1d1f 0%, #2d2d30 100%);
            color: white;
            padding: 120px 0 80px;
            text-align: center;
        }

        .hero-container {
            max-width: 1024px;
            margin: 0 auto;
            padding: 0 22px;
        }

        .hero-title {
            font-size: 56px;
            font-weight: 700;
            margin-bottom: 24px;
            letter-spacing: -0.005em;
        }

        .hero-subtitle {
            font-size: 21px;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.8);
            max-width: 600px;
            margin: 0 auto;
        }

        .content-section {
            padding: 80px 0;
        }

        .content-container {
            max-width: 1024px;
            margin: 0 auto;
            padding: 0 22px;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        .content-text h2 {
            font-size: 40px;
            font-weight: 600;
            color: #1d1d1f;
            margin-bottom: 24px;
            letter-spacing: -0.003em;
        }

        .content-text p {
            font-size: 19px;
            color: #86868b;
            line-height: 1.47;
            margin-bottom: 24px;
        }

        .content-image {
            width: 100%;
            height: 400px;
            background-size: cover;
            background-position: center;
            border-radius: 18px;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            background: #1d1d1f;
            color: white;
            padding: 12px 24px;
            border-radius: 980px;
            text-decoration: none;
            font-size: 17px;
            font-weight: 400;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #424245;
        }

        .btn-secondary {
            display: inline-flex;
            align-items: center;
            color: #06c;
            font-size: 17px;
            font-weight: 400;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            text-decoration: underline;
        }

        .btn-secondary::after {
            content: '→';
            margin-left: 8px;
            transition: transform 0.3s ease;
        }

        .btn-secondary:hover::after {
            transform: translateX(4px);
        }

        /* Footer */
        .footer {
            background: #f5f5f7;
            padding: 80px 0 40px;
            margin-top: 80px;
        }

        .footer-container {
            max-width: 1024px;
            margin: 0 auto;
            padding: 0 22px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-section h4 {
            font-size: 12px;
            font-weight: 600;
            color: #1d1d1f;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 16px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section li {
            margin-bottom: 8px;
        }

        .footer-section a {
            color: #424245;
            font-size: 12px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: #1d1d1f;
        }

        .footer-bottom {
            border-top: 1px solid #d2d2d7;
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            color: #86868b;
        }

        .footer-links {
            display: flex;
            gap: 20px;
        }

        .footer-links a {
            color: #86868b;
            text-decoration: none;
        }

        .footer-links a:hover {
            color: #1d1d1f;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-brand {
                font-size: 20px;
            }

            .nav-auth-links {
                display: none;
            }

            .mobile-menu-content {
                padding: 40px 24px;
            }

            .mobile-menu-links a {
                padding: 16px 0;
                border-bottom: 1px solid #e5e5e7;
            }

            .hero-title {
                font-size: 32px;
            }

            .content-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .content-text h2 {
                font-size: 28px;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 16px;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-left">
                <i class="fas fa-bars nav-menu-icon" id="menuToggle"></i>
                <i class="fas fa-shopping-cart nav-cart-icon"></i>
            </div>
            
            <a href="{{ url('/') }}" class="nav-brand">Janjua Tailors</a>
            
            <div class="nav-right">
                <div class="nav-auth-links">
                    @auth
                        <a href="{{ route('my-orders') }}">My Orders</a>
                        <a href="{{ route('dashboard') }}">Account</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Sign Up</a>
                    @endauth
                </div>
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

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="{{ route('custom-order.start') }}">Custom Tailoring</a></li>
                        <li><a href="{{ route('products.index') }}">Premium Fabrics</a></li>
                        <li><a href="{{ route('pages.alterations') }}">Alterations</a></li>
                        <li><a href="{{ route('pages.delivery') }}">Express Delivery</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4>About</h4>
                    <ul>
                        <li><a href="{{ route('pages.heritage') }}">Our Heritage</a></li>
                        <li><a href="{{ route('pages.craftsmanship') }}">Craftsmanship</a></li>
                        <li><a href="{{ route('pages.quality') }}">Quality Promise</a></li>
                        <li><a href="{{ route('pages.testimonials') }}">Testimonials</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="{{ route('pages.contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('pages.size-guide') }}">Size Guide</a></li>
                        <li><a href="{{ route('pages.faq') }}">FAQ</a></li>
                        <li><a href="{{ route('pages.care') }}">Care Instructions</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h4>Connect</h4>
                    <ul>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">WhatsApp</a></li>
                        <li><a href="#">Newsletter</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <div>© 2024 Janjua Tailors. All rights reserved.</div>
                <div class="footer-links">
                    <a href="{{ route('pages.privacy') }}">Privacy Policy</a>
                    <a href="{{ route('pages.terms') }}">Terms of Service</a>
                    <a href="{{ route('pages.sitemap') }}">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('menuToggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuToggle = document.getElementById('menuToggle');
            
            if (!mobileMenu.contains(event.target) && !menuToggle.contains(event.target)) {
                mobileMenu.classList.remove('active');
            }
        });
    </script>
</body>
</html>