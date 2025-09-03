<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonials - Janjua Tailors | Customer Reviews</title>
    <meta name="description" content="Read what our customers say about Janjua Tailors. Discover testimonials and reviews from satisfied clients who trust our custom tailoring services.">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/shared-styles.css') }}">
    
    <style>
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .testimonial-card {
            background: #fff;
            padding: 2.5rem 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #f0f0f0;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .testimonial-quote {
            position: absolute;
            top: -10px;
            left: 2rem;
            width: 40px;
            height: 40px;
            background: #8B4513;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.2rem;
        }

        .testimonial-text {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #444;
            margin-bottom: 2rem;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 1.5rem;
            border: 3px solid #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .author-info {
            flex: 1;
        }

        .author-name {
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 0.2rem;
        }

        .author-details {
            color: #666;
            font-size: 0.9rem;
        }

        .testimonial-rating {
            display: flex;
            gap: 0.2rem;
            margin-top: 0.5rem;
        }

        .star {
            color: #ffc107;
            font-size: 1rem;
        }

        .star.empty {
            color: #e0e0e0;
        }

        .featured-testimonial {
            grid-column: 1 / -1;
            background: linear-gradient(135deg, #8B4513 0%, #6d3410 100%);
            color: #fff;
            text-align: center;
            padding: 4rem 3rem;
        }

        .featured-testimonial .testimonial-quote {
            background: rgba(255, 255, 255, 0.2);
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 50px;
            font-size: 1.5rem;
        }

        .featured-testimonial .testimonial-text {
            font-size: 1.3rem;
            color: #fff;
            margin-bottom: 2rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .featured-testimonial .author-avatar {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            border-color: rgba(255, 255, 255, 0.3);
        }

        .featured-testimonial .author-name {
            color: #fff;
        }

        .featured-testimonial .author-details {
            color: rgba(255, 255, 255, 0.8);
        }

        .video-testimonials {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .video-testimonial {
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #f0f0f0;
        }

        .video-placeholder {
            height: 200px;
            background: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            font-size: 3rem;
            position: relative;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .video-placeholder:hover {
            background: #e8e8e8;
        }

        .play-button {
            position: absolute;
            width: 60px;
            height: 60px;
            background: rgba(139, 69, 19, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .play-button:hover {
            background: #8B4513;
            transform: scale(1.1);
        }

        .video-info {
            padding: 1.5rem;
        }

        .video-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #1a1a1a;
        }

        .video-description {
            color: #666;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .review-summary {
            background: #f8f8f8;
            padding: 3rem 2rem;
            border-radius: 12px;
            text-align: center;
            margin-bottom: 4rem;
        }

        .summary-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .summary-stat {
            text-align: center;
        }

        .stat-value {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 700;
            color: #8B4513;
            display: block;
            margin-bottom: 0.5rem;
        }

        .stat-description {
            color: #666;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        @media (max-width: 768px) {
            .featured-testimonial {
                grid-column: 1;
                padding: 3rem 2rem;
            }

            .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .video-testimonials {
                grid-template-columns: 1fr;
            }

            .summary-stats {
                grid-template-columns: repeat(2, 1fr);
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
                <li><a href="{{ route('pages.about') }}">About</a></li>
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
            <h1 class="hero-title">Customer Testimonials</h1>
            <p class="hero-subtitle">What our valued customers say about us</p>
        </div>
    </section>

    <!-- Review Summary -->
    <section class="section">
        <div class="container">
            <div class="review-summary">
                <h2 class="section-title">Trusted by Thousands</h2>
                <p class="section-subtitle">Over four decades of satisfied customers</p>
                
                <div class="summary-stats">
                    <div class="summary-stat">
                        <span class="stat-value">4.9</span>
                        <span class="stat-description">Average Rating</span>
                    </div>
                    <div class="summary-stat">
                        <span class="stat-value">5000+</span>
                        <span class="stat-description">Happy Customers</span>
                    </div>
                    <div class="summary-stat">
                        <span class="stat-value">15000+</span>
                        <span class="stat-description">Garments Delivered</span>
                    </div>
                    <div class="summary-stat">
                        <span class="stat-value">98%</span>
                        <span class="stat-description">Satisfaction Rate</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customer Testimonials -->
    <section class="section alt">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">What Our Customers Say</h2>
                <p class="section-subtitle">Real experiences from real customers</p>
            </div>
            
            <div class="testimonials-grid">
                <!-- Featured Testimonial -->
                <div class="testimonial-card featured-testimonial">
                    <div class="testimonial-quote">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">"Janjua Tailors has been our family's go-to tailor for over 20 years. The quality, attention to detail, and customer service is unmatched. Every garment is crafted with perfection, and Umair Fiaz continues the legacy of excellence started by his grandfather."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <div class="author-name">Ahmed Hassan</div>
                            <div class="author-details">Business Executive, Gujranwala</div>
                            <div class="testimonial-rating">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Regular Testimonials -->
                <div class="testimonial-card">
                    <div class="testimonial-quote">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">"The fit is absolutely perfect! I've never had a shalwar kameez that fits so well. The fabric quality is excellent and the stitching is flawless. Highly recommended!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <div class="author-name">Muhammad Ali</div>
                            <div class="author-details">Teacher, Lahore</div>
                            <div class="testimonial-rating">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-quote">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">"Outstanding service! They delivered my wedding suit exactly on time and it was perfect. The attention to detail and craftsmanship is remarkable. Thank you for making my special day even more special."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <div class="author-name">Usman Khan</div>
                            <div class="author-details">Engineer, Islamabad</div>
                            <div class="testimonial-rating">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-quote">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">"Professional service from start to finish. The consultation was thorough, fabric selection was excellent, and the final product exceeded my expectations. Will definitely return!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <div class="author-name">Fatima Sheikh</div>
                            <div class="author-details">Doctor, Karachi</div>
                            <div class="testimonial-rating">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-quote">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">"Three generations of excellence! My grandfather, father, and now I all get our clothes tailored here. The quality has remained consistently excellent throughout the years."</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <div class="author-name">Tariq Mahmood</div>
                            <div class="author-details">Businessman, Gujranwala</div>
                            <div class="testimonial-rating">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-quote">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <p class="testimonial-text">"Excellent alterations service! They fixed my suit perfectly and it looks brand new. Quick turnaround time and very reasonable prices. Highly satisfied!"</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="author-info">
                            <div class="author-name">Imran Malik</div>
                            <div class="author-details">Lawyer, Sialkot</div>
                            <div class="testimonial-rating">
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                                <i class="fas fa-star star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Testimonials -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Video Testimonials</h2>
                <p class="section-subtitle">Hear directly from our satisfied customers</p>
            </div>
            
            <div class="video-testimonials">
                <div class="video-testimonial">
                    <div class="video-placeholder" onclick="playVideo(1)">
                        <i class="fas fa-video"></i>
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="video-info">
                        <h3 class="video-title">Wedding Suit Experience</h3>
                        <p class="video-description">A groom shares his experience getting his wedding suit tailored at Janjua Tailors.</p>
                    </div>
                </div>
                
                <div class="video-testimonial">
                    <div class="video-placeholder" onclick="playVideo(2)">
                        <i class="fas fa-video"></i>
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="video-info">
                        <h3 class="video-title">Family Tradition</h3>
                        <p class="video-description">A long-time customer talks about three generations of family using our services.</p>
                    </div>
                </div>
                
                <div class="video-testimonial">
                    <div class="video-placeholder" onclick="playVideo(3)">
                        <i class="fas fa-video"></i>
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="video-info">
                        <h3 class="video-title">Business Professional</h3>
                        <p class="video-description">A business executive discusses the quality and professionalism of our service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Join Our Satisfied Customers</h2>
                <p class="section-subtitle">Experience the quality and service that has earned us thousands of loyal customers</p>
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

        // Video testimonial placeholder
        function playVideo(videoId) {
            alert(`Video testimonial ${videoId} would play here in a real implementation.`);
        }
    </script>
</body>
</html>