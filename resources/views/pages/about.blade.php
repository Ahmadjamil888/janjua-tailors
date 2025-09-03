<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Janjua Tailors | Three Generations of Excellence</title>
    <meta name="description" content="Learn about Janjua Tailors' rich heritage spanning three generations of master tailors in Gujranwala. Discover our story, values, and commitment to excellence.">
    
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
                <li><a href="{{ route('pages.about') }}" class="active">About</a></li>
                <li><a href="{{ route('pages.services') }}">Services</a></li>
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
            <h1 class="hero-title">About Janjua Tailors</h1>
            <p class="hero-subtitle">Three generations of excellence in bespoke tailoring</p>
        </div>
    </section>

    <!-- Story Section -->
    <section class="section">
        <div class="container">
            <div class="content-grid">
                <div class="content-text">
                    <h2 class="section-title">Our Story</h2>
                    <p class="lead-text">Since the 1980s, Janjua Tailors has been synonymous with excellence in Gujranwala, Pakistan. What began as Hafiz Ahmad's vision has evolved through three generations, each adding their unique touch while preserving the timeless art of bespoke tailoring.</p>
                    
                    <p>Founded on the principles of quality, precision, and customer satisfaction, our family business has grown from a small local shop to a renowned tailoring house serving clients across Pakistan and beyond.</p>
                    
                    <p>Today, under the leadership of Umair Fiaz, we continue to honor traditional craftsmanship while embracing modern techniques, ensuring every garment meets the highest standards of quality and precision.</p>
                </div>
                <div class="content-image">
                    <div class="image-placeholder">
                        <i class="fas fa-store"></i>
                        <p>Historic Shop Front</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section alt">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Our Values</h2>
                <p class="section-subtitle">The principles that guide everything we do</p>
            </div>
            
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3 class="value-title">Quality</h3>
                    <p class="value-text">We never compromise on quality, using only the finest materials and time-tested techniques to create garments that last.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="value-title">Trust</h3>
                    <p class="value-text">Built over decades, our reputation is founded on trust, reliability, and consistent delivery of exceptional results.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="value-title">Passion</h3>
                    <p class="value-text">Our love for the craft drives us to continuously improve and innovate while respecting traditional methods.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="value-title">Family</h3>
                    <p class="value-text">As a family business, we treat every client as part of our extended family, providing personalized care and attention.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Meet Our Team</h2>
                <p class="section-subtitle">The master craftsmen behind every perfect stitch</p>
            </div>
            
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-image">
                        <div class="image-placeholder">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <h3 class="member-name">Hafiz Ahmad</h3>
                    <p class="member-role">Founder (1980s)</p>
                    <p class="member-bio">The visionary who started it all, establishing the foundation of excellence that continues today.</p>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <div class="image-placeholder">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <h3 class="member-name">Umair Fiaz</h3>
                    <p class="member-role">Current Owner & Master Tailor</p>
                    <p class="member-bio">Leading the third generation with innovation while preserving traditional craftsmanship.</p>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <div class="image-placeholder">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <h3 class="member-name">Master Craftsmen</h3>
                    <p class="member-role">Skilled Artisans</p>
                    <p class="member-bio">Our team of experienced tailors who bring decades of expertise to every garment.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section premium">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">40+</div>
                    <div class="stat-label">Years of Excellence</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">3</div>
                    <div class="stat-label">Generations</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">5000+</div>
                    <div class="stat-label">Happy Clients</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">15000+</div>
                    <div class="stat-label">Garments Crafted</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Ready to Experience Excellence?</h2>
                <p class="section-subtitle">Join thousands of satisfied customers who trust Janjua Tailors</p>
                <a href="{{ route('custom-order.start') }}" class="cta-button">Start Your Custom Order</a>
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