<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Janjua Tailors | Custom Tailoring & Alterations</title>
    <meta name="description" content="Discover our comprehensive tailoring services including custom shalwar kameez, suits, alterations, and premium fabric selection. Expert craftsmanship guaranteed.">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/shared-styles.css') }}">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="{{ url('/') }}" class="nav-brand">Janjua Tailors</a>
            
            <ul class="nav-links">
                <li><a href="{{ route('pages.about') }}">About</a></li>
                <li><a href="{{ route('pages.services') }}" class="active">Services</a></li>
                <li><a href="{{ route('products.index') }}">Fabrics</a></li>
                <li><a href="{{ route('pages.gallery') }}">Gallery</a></li>
                <li><a href="{{ route('pages.contact') }}">Contact</a></li>
                <li><a href="{{ route('custom-order.start') }}">Custom Order</a></li>
                @auth
                    <li><a href="{{ route('dashboard') }}">Account</a></li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
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
    <section class="page-hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="hero-title">Our Services</h1>
            <p class="hero-subtitle">Comprehensive tailoring solutions for every need</p>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">What We Offer</h2>
                <p class="section-subtitle">From custom tailoring to expert alterations, we provide complete clothing solutions</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card featured">
                    <div class="service-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3 class="service-title">Custom Shalwar Kameez</h3>
                    <p class="service-description">Traditional Pakistani formal wear tailored to perfection. Choose from our premium fabric collection and get a perfect fit that reflects your style.</p>
                    <ul class="service-features">
                        <li>Premium fabric selection</li>
                        <li>Traditional & modern designs</li>
                        <li>Perfect measurements</li>
                        <li>Expert craftsmanship</li>
                    </ul>
                    <div class="service-price">Starting from Rs. 3,500</div>
                    <a href="{{ route('custom-order.start') }}" class="service-btn">Order Now</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="service-title">Custom Suits</h3>
                    <p class="service-description">Professional business suits and formal wear crafted with precision. Perfect for corporate events, weddings, and special occasions.</p>
                    <ul class="service-features">
                        <li>Business & formal suits</li>
                        <li>Wedding suits</li>
                        <li>Luxury fabrics</li>
                        <li>Modern & classic cuts</li>
                    </ul>
                    <div class="service-price">Starting from Rs. 8,000</div>
                    <a href="{{ route('custom-order.start') }}" class="service-btn">Order Now</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h3 class="service-title">Alterations</h3>
                    <p class="service-description">Expert alterations and adjustments for all types of garments. We ensure your existing clothes fit perfectly.</p>
                    <ul class="service-features">
                        <li>Size adjustments</li>
                        <li>Length modifications</li>
                        <li>Style updates</li>
                        <li>Repair services</li>
                    </ul>
                    <div class="service-price">Starting from Rs. 500</div>
                    <a href="{{ route('pages.contact') }}" class="service-btn">Get Quote</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-swatches"></i>
                    </div>
                    <h3 class="service-title">Fabric Consultation</h3>
                    <p class="service-description">Expert guidance in selecting the perfect fabric for your garment. We help you choose based on occasion, season, and personal preference.</p>
                    <ul class="service-features">
                        <li>Fabric selection guidance</li>
                        <li>Quality assessment</li>
                        <li>Care instructions</li>
                        <li>Style recommendations</li>
                    </ul>
                    <div class="service-price">Complimentary</div>
                    <a href="{{ route('products.index') }}" class="service-btn">View Fabrics</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3 class="service-title">Express Service</h3>
                    <p class="service-description">Need your garment urgently? Our express service ensures quick turnaround without compromising on quality.</p>
                    <ul class="service-features">
                        <li>Rush orders accepted</li>
                        <li>3-5 day delivery</li>
                        <li>Same quality standards</li>
                        <li>Priority handling</li>
                    </ul>
                    <div class="service-price">Additional 30% charge</div>
                    <a href="{{ route('pages.contact') }}" class="service-btn">Contact Us</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3 class="service-title">Home Service</h3>
                    <p class="service-description">Convenient home visits for measurements and fittings. Perfect for busy professionals and special occasions.</p>
                    <ul class="service-features">
                        <li>Home measurements</li>
                        <li>Fabric samples delivery</li>
                        <li>Fitting appointments</li>
                        <li>Convenient scheduling</li>
                    </ul>
                    <div class="service-price">Additional Rs. 1,000</div>
                    <a href="{{ route('pages.contact') }}" class="service-btn">Schedule Visit</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="section alt">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Process</h2>
                <p class="section-subtitle">How we create your perfect garment</p>
            </div>
            
            <div class="process-timeline">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3 class="step-title">Consultation</h3>
                        <p class="step-description">We discuss your requirements, style preferences, and occasion needs to understand your vision.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3 class="step-title">Fabric Selection</h3>
                        <p class="step-description">Choose from our premium fabric collection with expert guidance on quality, style, and care.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3 class="step-title">Measurements</h3>
                        <p class="step-description">Precise measurements are taken by our master tailors to ensure a perfect fit.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3 class="step-title">Crafting</h3>
                        <p class="step-description">Your garment is meticulously handcrafted using traditional techniques and modern precision.</p>
                    </div>
                </div>
                
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3 class="step-title">Fitting & Delivery</h3>
                        <p class="step-description">Final fitting ensures perfect fit before delivery of your completed garment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Specialties Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Specialties</h2>
                <p class="section-subtitle">What makes us different</p>
            </div>
            
            <div class="specialties-grid">
                <div class="specialty-item">
                    <div class="specialty-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3 class="specialty-title">Master Craftsmanship</h3>
                    <p class="specialty-text">Three generations of expertise in traditional tailoring techniques combined with modern precision.</p>
                </div>
                
                <div class="specialty-item">
                    <div class="specialty-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3 class="specialty-title">Timely Delivery</h3>
                    <p class="specialty-text">We respect your time and ensure all orders are completed within the promised timeframe.</p>
                </div>
                
                <div class="specialty-item">
                    <div class="specialty-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="specialty-title">Quality Guarantee</h3>
                    <p class="specialty-text">We stand behind our work with a satisfaction guarantee and free minor adjustments.</p>
                </div>
                
                <div class="specialty-item">
                    <div class="specialty-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h3 class="specialty-title">Personal Service</h3>
                    <p class="specialty-text">Individual attention and personalized service for every client, treating you like family.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Ready to Get Started?</h2>
                <p class="section-subtitle">Experience the difference of expert tailoring</p>
                <div class="cta-buttons">
                    <a href="{{ route('custom-order.start') }}" class="cta-button primary">Start Custom Order</a>
                    <a href="{{ route('pages.contact') }}" class="cta-button secondary">Contact Us</a>
                </div>
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
                        <li><a href="{{ route('pages.about') }}">About Us</a></li>
                        <li><a href="{{ route('pages.heritage') }}">Our Heritage</a></li>
                        <li><a href="{{ route('pages.craftsmanship') }}">Craftsmanship</a></li>
                        <li><a href="{{ route('pages.testimonials') }}">Testimonials</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="footer-title">Services</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('pages.services') }}">Our Services</a></li>
                        <li><a href="{{ route('custom-order.start') }}">Custom Tailoring</a></li>
                        <li><a href="{{ route('pages.alterations') }}">Alterations</a></li>
                        <li><a href="{{ route('pages.delivery') }}">Delivery</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="footer-title">Products</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('products.index') }}">Premium Fabrics</a></li>
                        <li><a href="{{ route('pages.gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('pages.size-guide') }}">Size Guide</a></li>
                        <li><a href="{{ route('pages.care') }}">Care Instructions</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="footer-title">Support</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('pages.contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('pages.faq') }}">FAQ</a></li>
                        <li><a href="{{ route('pages.privacy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('pages.terms') }}">Terms & Conditions</a></li>
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
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle
        document.getElementById('navToggle').addEventListener('click', function() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        });
    </script>
</body>
</html>