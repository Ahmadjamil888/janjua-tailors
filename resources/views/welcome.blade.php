<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janjua Tailors - Three Generations of Excellence | Gujranwala</title>
    
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/jt-logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #1a1a1a;
            --secondary-color: #f8f9fa;
            --accent-color: #d4af37;
            --text-light: #6c757d;
            --border-color: #e9ecef;
            --shadow-light: 0 4px 20px rgba(0, 0, 0, 0.08);
            --shadow-medium: 0 8px 30px rgba(0, 0, 0, 0.12);
            --shadow-heavy: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: var(--primary-color);
            background: #ffffff;
            overflow-x: hidden;
        }

        /* Modern Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            height: 80px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: saturate(180%) blur(20px);
            border-bottom: 1px solid var(--border-color);
            z-index: 1000;
            transition: all 0.3s ease;
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
            font-size: 32px;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
            letter-spacing: -1px;
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent-color);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-cta {
            background: var(--primary-color);
            color: white;
            padding: 12px 24px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .nav-cta:hover {
            background: var(--accent-color);
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="0.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            text-align: center;
            color: white;
            z-index: 2;
            max-width: 900px;
            padding: 0 2rem;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(212, 175, 55, 0.2);
            color: var(--accent-color);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 2rem;
            border: 1px solid rgba(212, 175, 55, 0.3);
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(3.5rem, 8vw, 8rem);
            font-weight: 800;
            margin-bottom: 1.5rem;
            letter-spacing: -3px;
            line-height: 0.9;
        }

        .hero-subtitle {
            font-size: clamp(1.2rem, 3vw, 2rem);
            font-weight: 300;
            margin-bottom: 3rem;
            opacity: 0.9;
            letter-spacing: 0.5px;
        }

        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-primary {
            background: var(--accent-color);
            color: var(--primary-color);
            padding: 16px 32px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 16px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            background: #f4d03f;
            transform: translateY(-3px);
            box-shadow: var(--shadow-medium);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            padding: 16px 32px;
            border: 2px solid white;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: white;
            color: var(--primary-color);
        }

        /* Section Styles */
        .section {
            padding: 120px 0;
            position: relative;
        }

        .section.light {
            background: var(--secondary-color);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-header {
            text-align: center;
            margin-bottom: 80px;
        }

        .section-badge {
            display: inline-block;
            background: var(--accent-color);
            color: var(--primary-color);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            letter-spacing: -1px;
        }

        .section-subtitle {
            font-size: 1.25rem;
            color: var(--text-light);
            max-width: 600px;
            margin: 0 auto;
            font-weight: 400;
            line-height: 1.6;
        }

        /* Products Section */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
            margin-top: 4rem;
        }

        .product-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: var(--shadow-light);
            transition: all 0.4s ease;
            position: relative;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-12px);
            box-shadow: var(--shadow-heavy);
        }

        .product-image {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: hidden;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .product-placeholder {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            color: var(--text-light);
            font-size: 4rem;
        }

        .product-badge {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            background: var(--accent-color);
            color: var(--primary-color);
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .product-info {
            padding: 2.5rem;
        }

        .product-brand {
            font-size: 12px;
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .product-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1rem;
            line-height: 1.3;
        }

        .product-price {
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--accent-color);
            margin-bottom: 1.5rem;
        }

        .product-description {
            font-size: 15px;
            color: var(--text-light);
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .product-actions {
            display: flex;
            gap: 1rem;
        }

        .btn-product {
            flex: 1;
            background: var(--primary-color);
            color: white;
            padding: 14px 20px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .btn-product:hover {
            background: var(--accent-color);
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        .btn-product.secondary {
            background: transparent;
            color: var(--primary-color);
            border: 2px solid var(--border-color);
        }

        .btn-product.secondary:hover {
            border-color: var(--primary-color);
            background: var(--primary-color);
            color: white;
        }

        /* Features Section */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .feature-card {
            text-align: center;
            padding: 3rem 2rem;
            background: white;
            border-radius: 24px;
            box-shadow: var(--shadow-light);
            transition: all 0.4s ease;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-medium);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--accent-color), #f4d03f);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            font-size: 2rem;
            color: var(--primary-color);
        }

        .feature-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .feature-description {
            color: var(--text-light);
            line-height: 1.6;
        }

        /* Stats Section */
        .stats {
            background: var(--primary-color);
            color: white;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            text-align: center;
        }

        .stat-number {
            font-family: 'Playfair Display', serif;
            font-size: 4rem;
            font-weight: 800;
            color: var(--accent-color);
            display: block;
            line-height: 1;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }

        /* CTA Section */
        .cta {
            background: linear-gradient(135deg, var(--accent-color), #f4d03f);
            color: var(--primary-color);
            text-align: center;
        }

        .cta .section-title {
            color: var(--primary-color);
        }

        /* Footer */
        .footer {
            background: var(--primary-color);
            color: white;
            padding: 80px 0 40px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-brand {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--accent-color);
        }

        .footer-description {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .footer-title {
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: white;
            font-size: 1.1rem;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--accent-color);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 2rem;
            text-align: center;
            color: rgba(255, 255, 255, 0.6);
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .section {
                padding: 80px 0;
            }

            .container {
                padding: 0 1rem;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-on-scroll {
            animation: fadeInUp 0.6s ease forwards;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="{{ url('/') }}" class="nav-brand">Janjua Tailors</a>
            
            <ul class="nav-links">
                <li><a href="{{ route('pages.heritage') }}">Heritage</a></li>
                <li><a href="{{ route('pages.craftsmanship') }}">Craftsmanship</a></li>
                <li><a href="{{ route('products.index') }}">Fabrics</a></li>
                <li><a href="{{ route('pages.quality') }}">Quality</a></li>
                @auth
                    <li><a href="{{ route('my-orders') }}">My Orders</a></li>
                    <li><a href="{{ route('dashboard') }}">Account</a></li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                @endauth
            </ul>
            
            <a href="{{ route('custom-order.start') }}" class="nav-cta">Start Order</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-badge">Since 1980s • Three Generations</div>
            <h1 class="hero-title">Janjua Tailors</h1>
            <p class="hero-subtitle">Where luxury meets reliability in every stitch</p>
            <div class="hero-buttons">
                <a href="{{ route('custom-order.start') }}" class="btn-primary">Start Custom Order</a>
                <a href="{{ route('products.index') }}" class="btn-secondary">Explore Fabrics</a>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">Premium Collection</div>
                <h2 class="section-title">Featured Fabrics</h2>
                <p class="section-subtitle">Discover our curated selection of luxury fabrics from renowned brands worldwide</p>
            </div>
            
            <div class="products-grid">
                @php
                    $featuredProducts = \App\Models\Product::take(6)->get();
                @endphp
                
                @forelse($featuredProducts as $product)
                    <div class="product-card">
                        <div class="product-image">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy">
                            @else
                                <div class="product-placeholder">
                                    <i class="fas fa-swatches"></i>
                                </div>
                            @endif
                            <div class="product-badge">{{ ucfirst($product->quality ?? 'Premium') }}</div>
                        </div>
                        
                        <div class="product-info">
                            <div class="product-brand">{{ $product->brand ?? 'Janjua Tailors' }}</div>
                            <h3 class="product-name">{{ $product->name }}</h3>
                            <div class="product-price">Rs. {{ number_format($product->price) }}</div>
                            <p class="product-description">{{ Str::limit($product->description, 80) }}</p>
                            
                            <div class="product-actions">
                                <a href="{{ route('products.show', $product) }}" class="btn-product">View Details</a>
                                <a href="{{ route('custom-order.start') }}?fabric={{ $product->id }}" class="btn-product secondary">Order Now</a>
                            </div>
                        </div>
                    </div>
                @empty
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
                            <p class="product-description">High-quality cotton blend perfect for formal wear and business attire.</p>
                            <div class="product-actions">
                                <a href="{{ route('products.index') }}" class="btn-product">View Details</a>
                                <a href="{{ route('custom-order.start') }}" class="btn-product secondary">Order Now</a>
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
                                <a href="{{ route('products.index') }}" class="btn-product">View Details</a>
                                <a href="{{ route('custom-order.start') }}" class="btn-product secondary">Order Now</a>
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
                                <a href="{{ route('products.index') }}" class="btn-product">View Details</a>
                                <a href="{{ route('custom-order.start') }}" class="btn-product secondary">Order Now</a>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
            
            <div style="text-align: center; margin-top: 3rem;">
                <a href="{{ route('products.index') }}" class="btn-primary">View All Fabrics</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section light">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">Why Choose Us</div>
                <h2 class="section-title">Excellence in Every Detail</h2>
                <p class="section-subtitle">Three generations of expertise combined with modern innovation</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <h3 class="feature-title">Premium Quality</h3>
                    <p class="feature-description">Only the finest fabrics from renowned brands worldwide, ensuring exceptional quality in every garment.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3 class="feature-title">Master Craftsmanship</h3>
                    <p class="feature-description">Three generations of tailoring expertise with traditional techniques and modern precision.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-ruler"></i>
                    </div>
                    <h3 class="feature-title">Perfect Fit</h3>
                    <p class="feature-description">Precise measurements and multiple fittings ensure every garment fits perfectly to your body.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3 class="feature-title">Timely Delivery</h3>
                    <p class="feature-description">Reliable delivery schedules with express options for urgent requirements.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="feature-title">Custom Design</h3>
                    <p class="feature-description">Personalized designs tailored to your style preferences and specific requirements.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="feature-title">Quality Guarantee</h3>
                    <p class="feature-description">Complete satisfaction guarantee with free alterations and quality assurance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section stats">
        <div class="container">
            <div class="stats-grid">
                <div>
                    <span class="stat-number">40+</span>
                    <span class="stat-label">Years Experience</span>
                </div>
                <div>
                    <span class="stat-number">3</span>
                    <span class="stat-label">Generations</span>
                </div>
                <div>
                    <span class="stat-number">5000+</span>
                    <span class="stat-label">Happy Clients</span>
                </div>
                <div>
                    <span class="stat-number">15</span>
                    <span class="stat-label">Master Tailors</span>
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
                <div style="margin-top: 2rem;">
                    <a href="{{ route('custom-order.start') }}" class="btn-primary" style="background: var(--primary-color); color: white;">Start Custom Order</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <div class="footer-brand">Janjua Tailors</div>
                    <p class="footer-description">Three generations of excellence in bespoke tailoring, serving Gujranwala and beyond with luxury and reliability.</p>
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
                    <h4 class="footer-title">Company</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('pages.heritage') }}">Our Heritage</a></li>
                        <li><a href="{{ route('pages.craftsmanship') }}">Craftsmanship</a></li>
                        <li><a href="{{ route('pages.quality') }}">Quality</a></li>
                        <li><a href="{{ route('pages.testimonials') }}">Testimonials</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="footer-title">Support</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('pages.contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('pages.faq') }}">FAQ</a></li>
                        <li><a href="{{ route('pages.size-guide') }}">Size Guide</a></li>
                        <li><a href="{{ route('pages.privacy') }}">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Janjua Tailors. All rights reserved. | Crafted with excellence in Gujranwala, Pakistan</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(255, 255, 255, 0.98)';
                navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
                navbar.style.boxShadow = 'none';
            }
        });

        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-on-scroll');
                }
            });
        }, observerOptions);

        // Observe all cards and sections
        document.querySelectorAll('.product-card, .feature-card, .section-header').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>