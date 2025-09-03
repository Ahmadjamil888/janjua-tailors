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

        /* Products Section */
        .products {
            background: #fafafa;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .product-card {
            background: #fff;
            border-radius: 0;
            overflow: hidden;
            transition: all 0.4s ease;
            border: 1px solid #eee;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            border-color: #111;
        }

        .product-image {
            width: 100%;
            height: 250px;
            background: #f8f8f8;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .product-placeholder {
            font-size: 3rem;
            color: #ccc;
        }

        .product-info {
            padding: 2rem;
        }

        .product-brand {
            font-size: 0.8rem;
            color: #999;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .product-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-weight: 600;
            color: #111;
            margin-bottom: 0.5rem;
        }

        .product-price {
            font-size: 1.1rem;
            font-weight: 600;
            color: #111;
            margin-bottom: 1rem;
        }

        .product-description {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }

        .product-actions {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
            text-align: center;
            flex: 1;
        }

        .btn-primary {
            background: #111;
            color: #fff;
            border: 1px solid #111;
        }

        .btn-primary:hover {
            background: #333;
        }

        .btn-secondary {
            background: transparent;
            color: #111;
            border: 1px solid #111;
        }

        .btn-secondary:hover {
            background: #111;
            color: #fff;
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

            .products-grid {
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

    <!-- Products Section -->
    <section class="section products">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Premium Fabrics</h2>
                <p class="section-subtitle">Discover our curated collection of luxury fabrics from renowned brands</p>
            </div>
            
            <div class="products-grid">
                @php
                    $products = \App\Models\Product::active()->take(6)->get();
                @endphp
                
                @forelse($products as $product)
                    <div class="product-card">
                        <div class="product-image">
                            @if($product->images && count($product->images) > 0)
                                <img src="{{ asset('storage/' . $product->images[0]) }}" alt="{{ $product->name }}" loading="lazy">
                            @else
                                <div class="product-placeholder">
                                    <i class="fas fa-swatches"></i>
                                </div>
                            @endif
                        </div>
                        
                        <div class="product-info">
                            <div class="product-brand">{{ $product->brand ?? 'Janjua Tailors' }}</div>
                            <h3 class="product-name">{{ $product->name }}</h3>
                            <div class="product-price">Rs. {{ number_format($product->price) }}</div>
                            <p class="product-description">{{ Str::limit($product->description, 100) }}</p>
                            
                            <div class="product-actions">
                                <a href="{{ route('products.show', $product) }}" class="btn btn-primary">View Details</a>
                                <a href="{{ route('custom-order.start') }}?fabric={{ $product->id }}" class="btn btn-secondary">Order Now</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Default products when no products exist -->
                    <div class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">
                                <i class="fas fa-swatches"></i>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-brand">Janjua Tailors</div>
                            <h3 class="product-name">Premium Cotton Blend</h3>
                            <div class="product-price">Rs. 3,500</div>
                            <p class="product-description">High-quality cotton blend perfect for formal wear and business attire.</p>
                            <div class="product-actions">
                                <a href="{{ route('products.index') }}" class="btn btn-primary">View Details</a>
                                <a href="{{ route('custom-order.start') }}" class="btn btn-secondary">Order Now</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">
                                <i class="fas fa-swatches"></i>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-brand">Janjua Tailors</div>
                            <h3 class="product-name">Silk Luxury Collection</h3>
                            <div class="product-price">Rs. 8,500</div>
                            <p class="product-description">Finest silk fabric with superior finish for special occasions.</p>
                            <div class="product-actions">
                                <a href="{{ route('products.index') }}" class="btn btn-primary">View Details</a>
                                <a href="{{ route('custom-order.start') }}" class="btn btn-secondary">Order Now</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">
                                <i class="fas fa-swatches"></i>
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-brand">Janjua Tailors</div>
                            <h3 class="product-name">Royal Wool Collection</h3>
                            <div class="product-price">Rs. 12,000</div>
                            <p class="product-description">Premium wool fabric with master craftsmanship for ultimate luxury.</p>
                            <div class="product-actions">
                                <a href="{{ route('products.index') }}" class="btn btn-primary">View Details</a>
                                <a href="{{ route('custom-order.start') }}" class="btn btn-secondary">Order Now</a>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
            
            <div style="text-align: center; margin-top: 3rem;">
                <a href="{{ route('products.index') }}" class="cta-button">View All Fabrics</a>
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
                    <p class=