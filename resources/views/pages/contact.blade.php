<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Janjua Tailors | Get in Touch</title>
    <meta name="description" content="Contact Janjua Tailors for custom tailoring services. Visit our shop in Gujranwala or get in touch for consultations, measurements, and inquiries.">
    
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
                <li><a href="{{ route('pages.services') }}">Services</a></li>
                <li><a href="{{ route('products.index') }}">Fabrics</a></li>
                <li><a href="{{ route('pages.gallery') }}">Gallery</a></li>
                <li><a href="{{ route('pages.contact') }}" class="active">Contact</a></li>
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
            <h1 class="hero-title">Contact Us</h1>
            <p class="hero-subtitle">Get in touch for consultations and inquiries</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Information -->
                <div class="contact-info">
                    <h2 class="section-title">Get in Touch</h2>
                    <p class="contact-intro">We'd love to hear from you. Visit our shop, give us a call, or send us a message.</p>
                    
                    <div class="contact-methods">
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="method-content">
                                <h3 class="method-title">Visit Our Shop</h3>
                                <p class="method-text">Main Bazaar, Gujranwala<br>Punjab, Pakistan 52250</p>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="method-content">
                                <h3 class="method-title">Call Us</h3>
                                <p class="method-text">
                                    <a href="tel:+923001234567">+92 300 123 4567</a><br>
                                    <a href="tel:+92551234567">+92 55 123 4567</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="method-content">
                                <h3 class="method-title">Email Us</h3>
                                <p class="method-text">
                                    <a href="mailto:info@janjuatailors.com">info@janjuatailors.com</a><br>
                                    <a href="mailto:orders@janjuatailors.com">orders@janjuatailors.com</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="method-content">
                                <h3 class="method-title">Business Hours</h3>
                                <p class="method-text">
                                    Monday - Saturday: 9:00 AM - 8:00 PM<br>
                                    Sunday: 10:00 AM - 6:00 PM
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <h3 class="social-title">Follow Us</h3>
                        <div class="social-icons">
                            <a href="#" class="social-icon facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon whatsapp"><i class="fab fa-whatsapp"></i></a>
                            <a href="#" class="social-icon youtube"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="contact-form-container">
                    <form class="contact-form" action="#" method="POST">
                        @csrf
                        <h3 class="form-title">Send us a Message</h3>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">First Name *</label>
                                <input type="text" id="first_name" name="first_name" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name *</label>
                                <input type="text" id="last_name" name="last_name" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" id="phone" name="phone">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="custom_order">Custom Order Inquiry</option>
                                <option value="alterations">Alterations</option>
                                <option value="fabric_consultation">Fabric Consultation</option>
                                <option value="appointment">Schedule Appointment</option>
                                <option value="general">General Inquiry</option>
                                <option value="complaint">Complaint</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="5" required placeholder="Tell us about your requirements, preferred appointment time, or any questions you have..."></textarea>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="newsletter" value="1">
                                <span class="checkmark"></span>
                                Subscribe to our newsletter for updates and special offers
                            </label>
                        </div>
                        
                        <button type="submit" class="submit-btn">
                            <i class="fas fa-paper-plane"></i>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="section alt">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Find Us</h2>
                <p class="section-subtitle">Located in the heart of Gujranwala's main bazaar</p>
            </div>
            
            <div class="map-container">
                <div class="map-placeholder">
                    <i class="fas fa-map-marked-alt"></i>
                    <h3>Interactive Map</h3>
                    <p>Main Bazaar, Gujranwala, Punjab, Pakistan</p>
                    <a href="https://maps.google.com/?q=Gujranwala+Main+Bazaar" target="_blank" class="map-link">
                        <i class="fas fa-external-link-alt"></i>
                        Open in Google Maps
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <p class="section-subtitle">Quick answers to common questions</p>
            </div>
            
            <div class="faq-grid">
                <div class="faq-item">
                    <h3 class="faq-question">How long does a custom order take?</h3>
                    <p class="faq-answer">Typically 7-14 days depending on the complexity of the garment and current workload. Express service available for urgent orders.</p>
                </div>
                
                <div class="faq-item">
                    <h3 class="faq-question">Do you offer home visits?</h3>
                    <p class="faq-answer">Yes, we provide home visits for measurements and consultations within Gujranwala city limits for an additional fee.</p>
                </div>
                
                <div class="faq-item">
                    <h3 class="faq-question">What payment methods do you accept?</h3>
                    <p class="faq-answer">We accept cash, bank transfers, and mobile payments. A 50% advance is required to start work on custom orders.</p>
                </div>
                
                <div class="faq-item">
                    <h3 class="faq-question">Do you provide fabric or should I bring my own?</h3>
                    <p class="faq-answer">We have a wide selection of premium fabrics available, or you can bring your own fabric. We'll advise on fabric suitability for your design.</p>
                </div>
            </div>
            
            <div class="faq-cta">
                <p>Have more questions? <a href="{{ route('pages.faq') }}">Visit our FAQ page</a> or contact us directly.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section cta">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Ready to Start Your Order?</h2>
                <p class="section-subtitle">Let's create something amazing together</p>
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

        // Contact form handling
        document.querySelector('.contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic form validation
            const requiredFields = this.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.style.borderColor = '#e74c3c';
                } else {
                    field.style.borderColor = '#ddd';
                }
            });
            
            if (isValid) {
                // Show success message (in real implementation, submit to server)
                alert('Thank you for your message! We will get back to you soon.');
                this.reset();
            } else {
                alert('Please fill in all required fields.');
            }
        });
    </script>
</body>
</html>