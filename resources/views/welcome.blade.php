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
            opacity: 0.6;
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
            position: absolute;
            bottom: 4rem;
            left: 2rem;
            color: #fff;
            z-index: 2;
            max-width: 500px;
        }

        .hero-description {
            font-size: 1rem;
            font-weight: 300;
            opacity: 0.9;
            letter-spacing: 0.5px;
            line-height: 1.6;
        }

        .hero-button {
            position: absolute;
            bottom: 4rem;
            right: 4rem;
            z-index: 2;
        }

        .minimal-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: transparent;
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 12px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 400;
            transition: all 0.3s ease;
        }

        .minimal-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.6);
            transform: translateX(5px);
        }

        .minimal-btn i {
            font-size: 12px;
            transition: transform 0.3s ease;
        }

        .minimal-btn:hover i {
            transform: translateX(3px);
        }

        /* Section Styles */
        .section {
            padding: 6rem 0;
            position: relative;
            background: #000;
            color: #fff;
            overflow: hidden;
        }

        .section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="0.5" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .section.alt {
            background: #111;
        }

        .section.alt::before {
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain2" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="0.3" fill="rgba(255,255,255,0.03)"/><circle cx="75" cy="75" r="0.3" fill="rgba(255,255,255,0.03)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain2)"/></svg>');
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
            color: #fff;
            letter-spacing: -0.5px;
            position: relative;
            z-index: 2;
        }

        .section-subtitle {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
            max-width: 500px;
            margin: 0 auto;
            font-weight: 300;
            line-height: 1.5;
            position: relative;
            z-index: 2;
        }

        /* Products Section */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
            position: relative;
            z-index: 2;
        }

        .product-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 0;
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            border-color: rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.08);
        }

        .product-image {
            width: 100%;
            height: 300px;
            overflow: hidden;
            position: relative;
            background: rgba(0, 0, 0, 0.3);
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .product-placeholder {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: rgba(255, 255, 255, 0.3);
            font-size: 3rem;
        }

        .product-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 0.5rem 1rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .product-info {
            padding: 2rem;
        }

        .product-brand {
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.6);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .product-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #fff;
        }

        .product-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 1rem;
        }

        .product-description {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.6;
            margin-bottom: 2rem;
            font-size: 0.9rem;
        }

        .product-actions {
            display: flex;
            gap: 1rem;
        }

        .btn-primary {
            flex: 1;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 0.75rem 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            text-decoration: none;
            font-weight: 500;
            text-align: center;
            transition: all 0.3s ease;
            font-size: 0.9rem;
            backdrop-filter: blur(10px);
        }

        .btn-primary:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.4);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background: transparent;
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 0.75rem 1rem;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
        }

        /* Heritage Section */
        .heritage {
            background: #111;
            color: #fff;
        }

        .heritage::before {
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain3" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="30" cy="30" r="0.4" fill="rgba(255,255,255,0.04)"/><circle cx="70" cy="70" r="0.4" fill="rgba(255,255,255,0.04)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain3)"/></svg>');
        }

        .heritage .section-title {
            color: #fff;
        }

        .heritage .section-subtitle {
            color: rgba(255, 255, 255, 0.8);
        }

        .heritage-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 5rem;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .heritage-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.9);
        }

        .heritage-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            text-align: center;
            position: relative;
            z-index: 2;
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
            color: rgba(255, 255, 255, 0.6);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Process Section */
        .process-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
            position: relative;
            z-index: 2;
        }

        .process-item {
            text-align: center;
            position: relative;
        }

        .process-number {
            display: inline-block;
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            line-height: 60px;
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 2rem;
            backdrop-filter: blur(10px);
        }

        .process-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #fff;
        }

        .process-text {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
        }

        /* CTA Section */
        .cta {
            background: #000;
            text-align: center;
        }

        .cta::before {
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain4" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="0.3" fill="rgba(255,255,255,0.06)"/><circle cx="80" cy="80" r="0.3" fill="rgba(255,255,255,0.06)"/><circle cx="50" cy="50" r="0.2" fill="rgba(255,255,255,0.04)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain4)"/></svg>');
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1.2rem 3rem;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            letter-spacing: 1px;
            transition: all 0.4s ease;
            text-transform: uppercase;
            font-size: 14px;
            margin-top: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 2;
        }

        .cta-button:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.4);
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

            .hero-content {
                bottom: 2rem;
                left: 1rem;
                right: 1rem;
                max-width: none;
            }

            .hero-button {
                bottom: 2rem;
                right: 2rem;
            }

            .products-grid {
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

            .process-grid {
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

            .hero-description {
                font-size: 0.9rem;
            }

            .minimal-btn {
                padding: 10px 16px;
                font-size: 13px;
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
            <p class="hero-description">Three generations of excellence in bespoke tailoring, serving Gujranwala and beyond with uncompromising quality and timeless craftsmanship.</p>
        </div>
        
        <div class="hero-button">
            <a href="{{ route('custom-order.start') }}" class="minimal-btn">
                Explore <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>

    <!-- Products Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Premium Fabrics</h2>
                <p class="section-subtitle">Discover our curated collection of luxury fabrics from renowned brands worldwide</p>
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
                            <div class="product-badge">{{ ucfirst($product->category ?? 'Premium') }}</div>
                        </div>
                        
                        <div class="product-info">
                            <div class="product-brand">{{ $product->brand ?? 'Janjua Tailors' }}</div>
                            <h3 class="product-name">{{ $product->name }}</h3>
                            <div class="product-price">Rs. {{ number_format($product->price) }}</div>
                            <p class="product-description">{{ Str::limit($product->description, 100) }}</p>
                            
                            <div class="product-actions">
                                <a href="{{ route('products.show', $product) }}" class="btn-primary">View Details</a>
                                <a href="{{ route('custom-order.start') }}?fabric={{ $product->id }}" class="btn-secondary">Order</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Sample products when no products exist -->
                    <div class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">
                                <i class="fas fa-swatches"></i>
                            </div>
                            <div class="product-badge">Premium</div>
                        </div>
                        <div class="product-info">
                            <div class="product-brand">Janjua Tailors</div>
                            <h3 class="product-name">Premium Cotton Blend</h3>
                            <div class="product-price">Rs. 3,500</div>
                            <p class="product-description">High-quality cotton blend perfect for formal wear and business attire with superior comfort.</p>
                            <div class="product-actions">
                                <a href="{{ route('products.index') }}" class="btn-primary">View Details</a>
                                <a href="{{ route('custom-order.start') }}" class="btn-secondary">Order</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">
                                <i class="fas fa-swatches"></i>
                            </div>
                            <div class="product-badge">Luxury</div>
                        </div>
                        <div class="product-info">
                            <div class="product-brand">Janjua Tailors</div>
                            <h3 class="product-name">Silk Luxury Collection</h3>
                            <div class="product-price">Rs. 8,500</div>
                            <p class="product-description">Finest silk fabric with superior finish for special occasions and formal events.</p>
                            <div class="product-actions">
                                <a href="{{ route('products.index') }}" class="btn-primary">View Details</a>
                                <a href="{{ route('custom-order.start') }}" class="btn-secondary">Order</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="product-card">
                        <div class="product-image">
                            <div class="product-placeholder">
                                <i class="fas fa-swatches"></i>
                            </div>
                            <div class="product-badge">Royal</div>
                        </div>
                        <div class="product-info">
                            <div class="product-brand">Janjua Tailors</div>
                            <h3 class="product-name">Royal Wool Collection</h3>
                            <div class="product-price">Rs. 12,000</div>
                            <p class="product-description">Premium wool fabric with master craftsmanship for the ultimate luxury experience.</p>
                            <div class="product-actions">
                                <a href="{{ route('products.index') }}" class="btn-primary">View Details</a>
                                <a href="{{ route('custom-order.start') }}" class="btn-secondary">Order</a>
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
            
            <div class="process-grid">
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

    <!-- CTA Section -->
    <section class="section cta">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Ready to Create Your Perfect Garment?</h2>
                <p class="section-subtitle">Start your custom order today and experience the luxury of bespoke tailoring</p>
                <a href="{{ route('custom-order.start') }}" class="cta-button">Start Custom Order</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h4 class="footer-title">Janjua Tailors</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('pages.heritage') }}">Our Heritage</a></li>
                        <li><a href="{{ route('pages.craftsmanship') }}">Craftsmanship</a></li>
                        <li><a href="{{ route('pages.quality') }}">Quality</a></li>
                        <li><a href="{{ route('pages.testimonials') }}">Testimonials</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="footer-title">Services</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('custom-order.start') }}">Custom Tailoring</a></li>
                        <li><a href="{{ route('pages.alterations') }}">Alterations</a></li>
                        <li><a href="{{ route('pages.delivery') }}">Delivery</a></li>
                        <li><a href="{{ route('pages.care') }}">Garment Care</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="footer-title">Products</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('products.index') }}">Premium Fabrics</a></li>
                        <li><a href="{{ route('products.index') }}">Luxury Collection</a></li>
                        <li><a href="{{ route('products.index') }}">Royal Series</a></li>
                        <li><a href="{{ route('pages.size-guide') }}">Size Guide</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="footer-title">Support</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('pages.contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('pages.faq') }}">FAQ</a></li>
                        <li><a href="{{ route('pages.privacy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('pages.terms') }}">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Janjua Tailors. All rights reserved. | Crafted with excellence in Gujranwala, Pakistan</p>
            </div>
        </div>
    </footer>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        document.getElementById('navToggle').addEventListener('click', function() {
            // Add mobile menu functionality here if needed
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>