<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>Janjua Tailors - Best Custom Tailor in Gujranwala | Bespoke Shalwar Kameez | Three Generations of Excellence</title>
    <meta name="description" content="Janjua Tailors - Premier custom tailoring in Gujranwala since 1980s. Three generations of master tailors crafting bespoke shalwar kameez, suits & formal wear. Expert alterations, premium fabrics, perfect fit guaranteed.">
    <meta name="keywords" content="tailor Gujranwala, custom tailor, bespoke tailoring, shalwar kameez, suit tailoring, master tailor, clothing alterations, premium fabrics, custom suits, traditional tailoring, Pakistani tailor, best tailor Gujranwala, Janjua Tailors">
    <meta name="author" content="Janjua Tailors">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url('/') }}">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Janjua Tailors - Best Custom Tailor in Gujranwala | Three Generations of Excellence">
    <meta property="og:description" content="Premier custom tailoring in Gujranwala since 1980s. Master tailors crafting bespoke shalwar kameez, suits & formal wear with perfect fit guaranteed.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('images/janjua-tailors-og.jpg') }}">
    <meta property="og:site_name" content="Janjua Tailors">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Janjua Tailors - Best Custom Tailor in Gujranwala">
    <meta name="twitter:description" content="Three generations of master tailors crafting bespoke clothing with premium fabrics and perfect fit.">
    <meta name="twitter:image" content="{{ asset('images/janjua-tailors-twitter.jpg') }}">
    
    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => 'Janjua Tailors',
        'description' => 'Premier custom tailoring service in Gujranwala offering bespoke shalwar kameez, suits, and formal wear with three generations of expertise.',
        'url' => url('/'),
        'telephone' => '+92-300-1234567',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Main Bazaar',
            'addressLocality' => 'Gujranwala',
            'addressRegion' => 'Punjab',
            'postalCode' => '52250',
            'addressCountry' => 'PK',
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => 32.1877,
            'longitude' => 74.1945,
        ],
        'openingHours' => 'Mo-Sa 09:00-20:00',
        'priceRange' => '$',
        'image' => asset('images/janjua-tailors-logo.jpg'),
        'sameAs' => [
            'https://www.facebook.com/janjuatailors',
            'https://www.instagram.com/janjuatailors',
        ],
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.9',
            'reviewCount' => '150',
        ],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => 'Tailoring Services',
            'itemListElement' => [
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Custom Shalwar Kameez',
                        'description' => 'Bespoke traditional Pakistani formal wear',
                    ],
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Custom Suits',
                        'description' => 'Tailored business and formal suits',
                    ],
                ],
                [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => 'Alterations',
                        'description' => 'Professional clothing alterations and adjustments',
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}
    </script>
    
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/jt-logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            border-bottom: none;
            z-index: 1000;
            transition: all 0.4s ease;
        }

        .navbar.scrolled {
            background: #ffffff;
            border-bottom: 1px solid #eaeaea;
            box-shadow: 0 2px 14px rgba(0,0,0,0.06);
        }

        .navbar.scrolled .nav-brand,
        .navbar.scrolled .nav-links a { color: #1a1a1a; }
        .navbar.scrolled .nav-links a::after { background: #1a1a1a; }
        .navbar .nav-toggle span { background: #ffffff; }
        .navbar.scrolled .nav-toggle span { background: #1a1a1a; }

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
            color: #ffffff;
            text-decoration: none;
            letter-spacing: -0.5px;
            transition: color 0.4s ease;
        }

        .nav-brand:hover {
            color: #8B4513;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            transition: all 0.4s ease;
            position: relative;
            padding: 0.5rem 0;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #ffffff;
            transition: width 0.3s ease;
        }

        .nav-links a:hover {
            color: #ffffff;
            opacity: 0.9;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
            background: none;
            border: none;
            padding: 0.5rem;
        }

        .nav-toggle span {
            width: 25px;
            height: 2px;
            background: #ffffff;
            margin: 3px 0;
            transition: 0.3s;
            border-radius: 2px;
        }

        .nav-toggle.active span:nth-child(1) {
            transform: rotate(-45deg) translate(-5px, 6px);
        }

        .nav-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .nav-toggle.active span:nth-child(3) {
            transform: rotate(45deg) translate(-5px, -6px);
        }

        /* Mobile Navigation */
        .mobile-nav {
            position: fixed;
            top: 80px;
            left: -100%;
            width: 100%;
            height: calc(100vh - 80px);
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            z-index: 999;
            transition: left 0.3s ease;
            padding: 2rem;
        }

        .mobile-nav.active {
            left: 0;
        }

        .mobile-nav-links {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            list-style: none;
        }

        .mobile-nav-links a {
            color: #1a1a1a;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .mobile-nav-links a:hover {
            color: #8B4513;
            padding-left: 1rem;
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
            gap: 0.75rem;
            background: #8B4513;
            color: #fff;
            border: none;
            padding: 14px 28px;
            border-radius: 9999px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.4s ease;
        }

        .minimal-btn:hover {
            background: #6d3410;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        .minimal-btn i {
            font-size: 14px;
            transition: transform 0.3s ease;
        }

        .minimal-btn:hover i {
            transform: translateX(4px);
        }

        /* Section Styles */
        .section {
            padding: 8rem 0;
            position: relative;
            background: #fff;
            color: #1a1a1a;
            overflow: hidden;
        }

        .section.alt {
            background: #f8f8f8;
        }

        .section.premium {
            background: linear-gradient(135deg, #f5f5f5 0%, #ffffff 100%);
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
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
            font-weight: 700;
            margin-bottom: 1rem;
            color: #282828;
            letter-spacing: -0.5px;
        }

        .section-subtitle {
            font-size: 1rem;
            color: #676767;
            max-width: 500px;
            margin: 0 auto;
            font-weight: 400;
            line-height: 1.5;
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
            background: #fff;
            border-radius: 12px;
            transition: all 0.4s ease;
            border: 1px solid #e0e0e0;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            border-color: #cacaca;
        }

        .product-image {
            width: 100%;
            height: 300px;
            overflow: hidden;
            position: relative;
            background: #f7f7f7;
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
            color: #b1b1b1;
            font-size: 3rem;
        }

        .product-badge { display: none; }

        .product-info {
            padding: 2rem;
        }

        .product-brand {
            font-size: 0.75rem;
            color: #7f7f7f;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .product-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #282828;
        }

        .product-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: #8B4513;
            margin-bottom: 1rem;
        }

        .product-description {
            color: #676767;
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
            background: #8B4513;
            color: #fff;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 9999px;
            text-decoration: none;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .btn-primary:hover { background: #6d3410; transform: translateY(-1px); }

        .btn-secondary {
            background: transparent;
            color: #8B4513;
            border: 2px solid #8B4513;
            padding: 0.75rem 1rem;
            border-radius: 9999px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .btn-secondary:hover { background: #8B4513; color: #fff; }

        /* Heritage Section */
        .heritage {
            background: #eeeeee;
            color: #464646;
        }

        .heritage .section-title {
            color: #282828;
        }

        .heritage .section-subtitle {
            color: #676767;
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
            color: #545454;
        }

        .heritage-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            text-align: center;
        }

        .stat-number { font-family: 'Playfair Display', serif; font-size: 3rem; font-weight: 700; color: #8B4513; display: block; }

        .stat-label {
            font-size: 0.9rem;
            color: #7f7f7f;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Process Section */
        .process-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
        }

        .process-item {
            text-align: center;
        }

        .process-number { display: inline-block; width: 60px; height: 60px; background: #8B4513; color: #fff; border-radius: 50%; line-height: 60px; font-weight: 700; font-size: 1.2rem; margin-bottom: 2rem; }

        .process-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #282828;
        }

        .process-text {
            color: #676767;
            line-height: 1.6;
        }

        /* CTA Section */
        .cta {
            background: #f7f7f7;
            text-align: center;
        }

        .cta-button { display:inline-flex; align-items:center; gap:.5rem; padding:1.1rem 2.25rem; background:#8B4513; color:#fff; text-decoration:none; font-weight:600; letter-spacing:.5px; transition:all .3s ease; text-transform:uppercase; font-size:13px; margin-top:2rem; border-radius:9999px; }

        .cta-button:hover { background:#6d3410; transform:translateY(-1px); }

        /* Footer */
        .footer { background:#ffffff; color:#1a1a1a; padding:4rem 0 2rem; border-top:1px solid #eaeaea; }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-title { font-family:'Playfair Display',serif; font-weight:700; margin-bottom:1rem; color:#1a1a1a; text-transform:uppercase; font-size:0.9rem; letter-spacing:1px; }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.5rem;
        }

        .footer-links a { color:#555; text-decoration:none; transition:color .3s ease; font-size:.9rem; }

        .footer-links a:hover { color:#000; }

        .footer-bottom { border-top:1px solid #eaeaea; padding-top:2rem; text-align:center; color:#777; font-size:.9rem; }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links { display: none; }
            .nav-toggle { display: flex; }

            .hero { height: 80vh; }
            .hero-content { bottom: 2rem; left: 1rem; right: 1rem; max-width: none; }
            .hero-description { font-size: 0.95rem; }
            .hero-button { bottom: 2rem; right: 1rem; }

            .products-grid { grid-template-columns: 1fr; gap: 1.5rem; }
            .product-image { height: 240px; }

            .heritage-content { grid-template-columns: 1fr; gap: 2rem; }
            .heritage-stats { grid-template-columns: repeat(3, 1fr); gap: 1rem; }
            .stat-number { font-size: 2.2rem; }

            .process-grid { grid-template-columns: 1fr; }

            .footer-grid { grid-template-columns: repeat(2, 1fr); gap: 1.5rem; }

            .section { padding: 3rem 0; }
            .container { padding: 0 1rem; }
        }

        @media (max-width: 480px) {
            .footer-grid { grid-template-columns: 1fr; }
            .hero { height: 70vh; }
            .hero-description { font-size: 0.9rem; }
            .minimal-btn { padding: 12px 18px; font-size: 13px; }
            .product-image { height: 200px; }
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
            
            <button class="nav-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Mobile Navigation -->
    <div class="mobile-nav" id="mobileNav">
        <ul class="mobile-nav-links">
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

    <!-- Signature Fabrics (Old-money minimal) -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Signature Fabrics</h2>
                <p class="section-subtitle">A considered selection of refined cloths, chosen for drape, handle and longevity</p>
            </div>
            @php
                $products = \App\Models\Product::active()->take(6)->get();
            @endphp
            <div class="products-grid">
                @forelse($products as $product)
                    <div class="product-card" style="border-radius:12px; border:1px solid #e6e6e6; box-shadow:none;">
                        <div class="product-image" style="background:#fafafa; height:280px;">
                            @if($product->images && count($product->images) > 0)
                                <img src="{{ asset('storage/' . $product->images[0]) }}" alt="{{ $product->name }}" loading="lazy">
                            @else
                                <div class="product-placeholder">
                                    <i class="fas fa-fabric"></i>
                                </div>
                            @endif
                        </div>
                        <div class="product-info" style="padding:1.5rem;">
                            <div class="product-brand" style="color:#777;">{{ $product->brand ?? 'Janjua Tailors' }}</div>
                            <h3 class="product-name" style="font-family:'Playfair Display',serif; font-weight:700; color:#1a1a1a;">{{ $product->name }}</h3>
                            <div class="product-price" style="color:#8B4513; font-weight:700;">Rs. {{ number_format($product->price) }}</div>
                            <div class="product-actions" style="gap:.5rem;">
                                <a href="{{ route('products.show', $product) }}" class="cta-button" style="padding:.7rem 1.25rem; font-size:.85rem;">View</a>
                                <a href="{{ route('custom-order.start') }}?fabric={{ $product->id }}" class="cta-button secondary" style="padding:.7rem 1.25rem; font-size:.85rem;">Order</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center" style="padding:3rem 1rem; color:#666;">Our latest fabrics are being prepared. Please check back shortly.</div>
                @endforelse
            </div>
            <div style="text-align:center; margin-top:2.5rem;">
                <a href="{{ route('products.index') }}" class="cta-button">Browse All Fabrics</a>
            </div>
        </div>
    </section>

    <!-- Atelier Services -->
    <section class="section premium" style="background:#fff;">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Atelier Services</h2>
                <p class="section-subtitle">Quiet luxury, measured carefully – from first fitting to final pressing</p>
            </div>
            <div class="values-grid">
                <div class="value-card" style="border:1px solid #eee; box-shadow:none;">
                    <div class="value-title">Custom Tailoring</div>
                    <div class="value-text">Made-to-measure garments with emphasis on proportion, balance and lasting comfort.</div>
                    <div style="margin-top:1.25rem;">
                        <a href="{{ route('custom-order.start') }}" class="cta-button" style="padding:.7rem 1.25rem; font-size:.85rem;">Start Order</a>
                    </div>
                </div>
                <div class="value-card" style="border:1px solid #eee; box-shadow:none;">
                    <div class="value-title">Alterations</div>
                    <div class="value-text">Refinements and adjustments to restore clean lines and superior fit.</div>
                    <div style="margin-top:1.25rem;">
                        <a href="{{ route('pages.alterations') }}" class="cta-button secondary" style="padding:.7rem 1.25rem; font-size:.85rem;">Learn More</a>
                    </div>
                </div>
                <div class="value-card" style="border:1px solid #eee; box-shadow:none;">
                    <div class="value-title">Consultation</div>
                    <div class="value-text">Considered advice on fabric, finish and occasion – at your pace.</div>
                    <div style="margin-top:1.25rem;">
                        <a href="{{ route('pages.consultation') }}" class="cta-button secondary" style="padding:.7rem 1.25rem; font-size:.85rem;">Book</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Heritage (quiet and minimal) -->
    <section class="section" style="background:#fafafa;">
        <div class="container">
            <div class="content-grid">
                <div>
                    <h2 class="section-title" style="margin-bottom:.5rem;">Heritage</h2>
                    <p class="section-subtitle" style="margin:0;">Three generations devoted to cut, cloth and craftsmanship</p>
                    <p class="lead-text" style="margin-top:1.5rem;">
                        Founded in the 1980s by Hafiz Ahmad, refined today by Umair Fiaz. Our approach values restraint over noise and quality over haste.
                    </p>
                </div>
                <div class="stats-grid">
                    <div class="stat-item">
                        <span class="stat-number">40+</span>
                        <span class="stat-label">Years</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">3</span>
                        <span class="stat-label">Generations</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">1000+</span>
                        <span class="stat-label">Clients</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gentle CTA -->
    <section class="section" style="text-align:center;">
        <div class="container">
            <h2 class="section-title">Begin With a Fitting</h2>
            <p class="section-subtitle">A quiet conversation, precise measurements, considered details</p>
            <div class="cta-buttons" style="margin-top:1.5rem;">
                <a href="{{ route('custom-order.start') }}" class="cta-button">Start Custom Order</a>
                <a href="{{ route('products.index') }}" class="cta-button secondary">Explore Fabrics</a>
            </div>
        </div>
    </section>

    <!-- Footer (white, simple) -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h4 class="footer-title">Janjua Tailors</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('pages.heritage') }}">Heritage</a></li>
                        <li><a href="{{ route('pages.craftsmanship') }}">Craftsmanship</a></li>
                        <li><a href="{{ route('pages.quality') }}">Quality</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-title">Atelier</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('custom-order.start') }}">Custom Order</a></li>
                        <li><a href="{{ route('pages.alterations') }}">Alterations</a></li>
                        <li><a href="{{ route('pages.consultation') }}">Consultation</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-title">Fabrics</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('products.index') }}">All Fabrics</a></li>
                        <li><a href="{{ route('products.index') }}">Seasonal</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="footer-title">Contact</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('pages.contact') }}">Get in touch</a></li>
                        <li><a href="{{ route('pages.privacy') }}">Privacy</a></li>
                        <li><a href="{{ route('pages.terms') }}">Terms</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Janjua Tailors. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/shared-scripts.js') }}"></script>
    <script>
        // Additional animations for welcome page
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.product-card, .process-item, .heritage-stats > div').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>