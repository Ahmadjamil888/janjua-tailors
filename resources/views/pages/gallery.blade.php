<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Janjua Tailors | Our Work Showcase</title>
    <meta name="description" content="Explore our gallery showcasing custom shalwar kameez, suits, and tailoring work. See the quality and craftsmanship of Janjua Tailors.">
    
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
                <li><a href="{{ route('pages.gallery') }}" class="active">Gallery</a></li>
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
            <h1 class="hero-title">Our Gallery</h1>
            <p class="hero-subtitle">Showcasing our finest work and craftsmanship</p>
        </div>
    </section>

    <!-- Gallery Filters -->
    <section class="section">
        <div class="container">
            <div class="gallery-filters">
                <button class="filter-btn active" data-filter="all">All Work</button>
                <button class="filter-btn" data-filter="shalwar-kameez">Shalwar Kameez</button>
                <button class="filter-btn" data-filter="suits">Suits</button>
                <button class="filter-btn" data-filter="formal">Formal Wear</button>
                <button class="filter-btn" data-filter="wedding">Wedding</button>
                <button class="filter-btn" data-filter="fabrics">Fabrics</button>
            </div>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="section">
        <div class="container">
            <div class="gallery-grid">
                <!-- Shalwar Kameez -->
                <div class="gallery-item" data-category="shalwar-kameez">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3 class="gallery-title">Premium Shalwar Kameez</h3>
                                <p class="gallery-description">Custom tailored with premium cotton fabric</p>
                            </div>
                            <button class="gallery-zoom" onclick="openLightbox(this)">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="shalwar-kameez">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3 class="gallery-title">Traditional Design</h3>
                                <p class="gallery-description">Classic cut with modern finishing</p>
                            </div>
                            <button class="gallery-zoom" onclick="openLightbox(this)">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Suits -->
                <div class="gallery-item" data-category="suits formal">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3 class="gallery-title">Business Suit</h3>
                                <p class="gallery-description">Professional 3-piece suit</p>
                            </div>
                            <button class="gallery-zoom" onclick="openLightbox(this)">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="suits wedding">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3 class="gallery-title">Wedding Suit</h3>
                                <p class="gallery-description">Elegant wedding attire</p>
                            </div>
                            <button class="gallery-zoom" onclick="openLightbox(this)">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Formal Wear -->
                <div class="gallery-item" data-category="formal wedding">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-crown"></i>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3 class="gallery-title">Formal Sherwani</h3>
                                <p class="gallery-description">Traditional formal wear</p>
                            </div>
                            <button class="gallery-zoom" onclick="openLightbox(this)">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="shalwar-kameez formal">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3 class="gallery-title">Formal Kameez</h3>
                                <p class="gallery-description">Office wear shalwar kameez</p>
                            </div>
                            <button class="gallery-zoom" onclick="openLightbox(this)">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Fabrics -->
                <div class="gallery-item" data-category="fabrics">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-swatches"></i>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3 class="gallery-title">Premium Cotton</h3>
                                <p class="gallery-description">High-quality cotton collection</p>
                            </div>
                            <button class="gallery-zoom" onclick="openLightbox(this)">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="fabrics">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-swatches"></i>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3 class="gallery-title">Silk Collection</h3>
                                <p class="gallery-description">Luxury silk fabrics</p>
                            </div>
                            <button class="gallery-zoom" onclick="openLightbox(this)">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- More items -->
                <div class="gallery-item" data-category="shalwar-kameez">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3 class="gallery-title">Casual Wear</h3>
                                <p class="gallery-description">Comfortable daily wear</p>
                            </div>
                            <button class="gallery-zoom" onclick="openLightbox(this)">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="suits formal">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3 class="gallery-title">Executive Suit</h3>
                                <p class="gallery-description">Premium business attire</p>
                            </div>
                            <button class="gallery-zoom" onclick="openLightbox(this)">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="wedding formal">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-crown"></i>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3 class="gallery-title">Groom's Outfit</h3>
                                <p class="gallery-description">Special occasion wear</p>
                            </div>
                            <button class="gallery-zoom" onclick="openLightbox(this)">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item" data-category="fabrics">
                    <div class="gallery-image">
                        <div class="image-placeholder">
                            <i class="fas fa-swatches"></i>
                        </div>
                        <div class="gallery-overlay">
                            <div class="gallery-info">
                                <h3 class="gallery-title">Wool Collection</h3>
                                <p class="gallery-description">Winter fabric selection</p>
                            </div>
                            <button class="gallery-zoom" onclick="openLightbox(this)">
                                <i class="fas fa-search-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="gallery-load-more">
                <button class="load-more-btn">
                    <i class="fas fa-plus"></i>
                    Load More
                </button>
            </div>
        </div>
    </section>

    <!-- Process Showcase -->
    <section class="section alt">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Behind the Scenes</h2>
                <p class="section-subtitle">See our craftsmanship process</p>
            </div>
            
            <div class="process-showcase">
                <div class="process-item">
                    <div class="process-image">
                        <div class="image-placeholder">
                            <i class="fas fa-ruler"></i>
                        </div>
                    </div>
                    <h3 class="process-title">Precision Measuring</h3>
                    <p class="process-text">Every measurement is taken with utmost precision to ensure perfect fit.</p>
                </div>
                
                <div class="process-item">
                    <div class="process-image">
                        <div class="image-placeholder">
                            <i class="fas fa-cut"></i>
                        </div>
                    </div>
                    <h3 class="process-title">Expert Cutting</h3>
                    <p class="process-text">Master tailors cut each piece with years of experience and skill.</p>
                </div>
                
                <div class="process-item">
                    <div class="process-image">
                        <div class="image-placeholder">
                            <i class="fas fa-sewing-machine"></i>
                        </div>
                    </div>
                    <h3 class="process-title">Careful Stitching</h3>
                    <p class="process-text">Each stitch is placed with care, ensuring durability and elegance.</p>
                </div>
                
                <div class="process-item">
                    <div class="process-image">
                        <div class="image-placeholder">
                            <i class="fas fa-check-circle"></i>
                        </div>
                    </div>
                    <h3 class="process-title">Quality Check</h3>
                    <p class="process-text">Final inspection ensures every garment meets our high standards.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="lightbox">
        <div class="lightbox-content">
            <span class="lightbox-close" onclick="closeLightbox()">&times;</span>
            <div class="lightbox-image">
                <div class="image-placeholder">
                    <i class="fas fa-image"></i>
                </div>
            </div>
            <div class="lightbox-info">
                <h3 class="lightbox-title">Gallery Item</h3>
                <p class="lightbox-description">Description of the gallery item</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <section class="section cta">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Inspired by Our Work?</h2>
                <p class="section-subtitle">Let us create something special for you</p>
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

        // Gallery filtering
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Update active button
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                // Filter gallery items
                const filter = this.getAttribute('data-filter');
                const items = document.querySelectorAll('.gallery-item');
                
                items.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category').includes(filter)) {
                        item.style.display = 'block';
                        setTimeout(() => item.style.opacity = '1', 10);
                    } else {
                        item.style.opacity = '0';
                        setTimeout(() => item.style.display = 'none', 300);
                    }
                });
            });
        });

        // Lightbox functionality
        function openLightbox(element) {
            const galleryItem = element.closest('.gallery-item');
            const title = galleryItem.querySelector('.gallery-title').textContent;
            const description = galleryItem.querySelector('.gallery-description').textContent;
            
            document.getElementById('lightbox').style.display = 'flex';
            document.querySelector('.lightbox-title').textContent = title;
            document.querySelector('.lightbox-description').textContent = description;
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            document.getElementById('lightbox').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close lightbox on outside click
        document.getElementById('lightbox').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLightbox();
            }
        });

        // Load more functionality
        document.querySelector('.load-more-btn').addEventListener('click', function() {
            // In a real implementation, this would load more images from the server
            alert('More images would be loaded here in a real implementation.');
        });
    </script>
</body>
</html>