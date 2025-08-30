<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Fabrics - Janjua Tailors</title>
    
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

        /* Main Content */
        .main-content {
            margin-top: 60px;
            padding: 60px 0;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #1d1d1f 0%, #333 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Filter Section */
        .filter-section {
            background: white;
            padding: 2rem 0;
            border-bottom: 1px solid #e9ecef;
            position: sticky;
            top: 60px;
            z-index: 100;
        }

        .filter-container {
            display: flex;
            gap: 2rem;
            align-items: center;
            flex-wrap: wrap;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .filter-label {
            font-size: 0.875rem;
            font-weight: 600;
            color: #495057;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .filter-select {
            padding: 0.75rem 1rem;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            background: white;
            font-size: 0.875rem;
            min-width: 150px;
            transition: all 0.3s ease;
        }

        .filter-select:focus {
            outline: none;
            border-color: #1d1d1f;
        }

        .filter-actions {
            margin-left: auto;
            display: flex;
            gap: 1rem;
        }

        .filter-btn {
            padding: 0.75rem 1.5rem;
            border: 2px solid #1d1d1f;
            background: transparent;
            color: #1d1d1f;
            border-radius: 8px;
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: #1d1d1f;
            color: white;
        }

        .clear-filters {
            background: transparent;
            border: none;
            color: #6c757d;
            font-size: 0.875rem;
            cursor: pointer;
            text-decoration: underline;
        }

        /* Products Grid */
        .products-section {
            padding: 3rem 0;
        }

        .products-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .products-count {
            font-size: 0.875rem;
            color: #6c757d;
        }

        .sort-select {
            padding: 0.5rem 1rem;
            border: 1px solid #e9ecef;
            border-radius: 6px;
            background: white;
            font-size: 0.875rem;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }

        /* Premium Product Cards */
        .product-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            position: relative;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .product-image {
            position: relative;
            width: 100%;
            height: 280px;
            overflow: hidden;
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

        .product-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .product-badge.premium { background: linear-gradient(45deg, #ffd700, #ffed4e); color: #1d1d1f; }
        .product-badge.luxury { background: linear-gradient(45deg, #8b5cf6, #a78bfa); }
        .product-badge.royal { background: linear-gradient(45deg, #1d1d1f, #4a5568); }

        .placeholder-image {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #adb5bd;
            font-size: 3rem;
        }

        .product-info {
            padding: 2rem;
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
        }

        .product-brand {
            font-size: 0.75rem;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .product-name {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1d1d1f;
            margin-bottom: 0.5rem;
            line-height: 1.3;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1d1d1f;
        }

        .product-description {
            font-size: 0.875rem;
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .product-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .detail-item {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .detail-label {
            font-size: 0.75rem;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        .detail-value {
            font-size: 0.875rem;
            color: #1d1d1f;
            font-weight: 500;
        }

        .product-actions {
            display: flex;
            gap: 1rem;
        }

        .btn-primary {
            flex: 1;
            background: #1d1d1f;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-size: 0.875rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
        }

        .btn-primary:hover {
            background: #333;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background: transparent;
            color: #1d1d1f;
            border: 2px solid #1d1d1f;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            font-size: 0.875rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-secondary:hover {
            background: #1d1d1f;
            color: white;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: #6c757d;
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            opacity: 0.5;
        }

        .empty-state h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: #1d1d1f;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .filter-container {
                flex-direction: column;
                align-items: stretch;
                gap: 1rem;
            }

            .filter-actions {
                margin-left: 0;
                justify-content: center;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            .product-details {
                grid-template-columns: 1fr;
            }

            .product-actions {
                flex-direction: column;
            }

            .nav-auth-links {
                display: none;
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

    <!-- Main Content -->
    <main class="main-content">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <h1 class="hero-title">Premium Fabrics</h1>
                <p class="hero-subtitle">Discover our curated collection of luxury fabrics from renowned brands, each piece selected for its exceptional quality and craftsmanship.</p>
            </div>
        </section>

        <!-- Filter Section -->
        <section class="filter-section">
            <div class="container">
                <div class="filter-container">
                    <div class="filter-group">
                        <label class="filter-label">Brand</label>
                        <select class="filter-select" id="brandFilter">
                            <option value="">All Brands</option>
                            <option value="pasha">Pasha</option>
                            <option value="gul-ahmed">Gul Ahmed</option>
                            <option value="khaadi">Khaadi</option>
                            <option value="sana-safinaz">Sana Safinaz</option>
                            <option value="alkaram">Alkaram</option>
                        </select>
                    </div>

                    <div class="filter-group">
                        <label class="filter-label">Quality</label>
                        <select class="filter-select" id="qualityFilter">
                            <option value="">All Qualities</option>
                            <option value="premium">Premium</option>
                            <option value="luxury">Luxury</option>
                            <option value="royal">Royal</option>
                        </select>
                    </div>

                    <div class="filter-group">
                        <label class="filter-label">Price Range</label>
                        <select class="filter-select" id="priceFilter">
                            <option value="">All Prices</option>
                            <option value="0-2000">Under Rs. 2,000</option>
                            <option value="2000-5000">Rs. 2,000 - 5,000</option>
                            <option value="5000-10000">Rs. 5,000 - 10,000</option>
                            <option value="10000+">Above Rs. 10,000</option>
                        </select>
                    </div>

                    <div class="filter-group">
                        <label class="filter-label">Fabric Type</label>
                        <select class="filter-select" id="typeFilter">
                            <option value="">All Types</option>
                            <option value="cotton">Cotton</option>
                            <option value="silk">Silk</option>
                            <option value="linen">Linen</option>
                            <option value="wool">Wool</option>
                            <option value="blend">Blend</option>
                        </select>
                    </div>

                    <div class="filter-actions">
                        <button class="filter-btn" id="applyFilters">Apply Filters</button>
                        <button class="clear-filters" id="clearFilters">Clear All</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section class="products-section">
            <div class="container">
                <div class="products-header">
                    <div class="products-count">
                        <span id="productCount">{{ $products->count() }}</span> products found
                    </div>
                    <select class="sort-select" id="sortSelect">
                        <option value="name">Sort by Name</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="brand">Sort by Brand</option>
                        <option value="newest">Newest First</option>
                    </select>
                </div>

                <div class="products-grid" id="productsGrid">
                    @forelse($products as $product)
                        <div class="product-card" data-brand="{{ strtolower($product->brand ?? '') }}" data-price="{{ $product->price }}" data-type="{{ strtolower($product->fabric_type ?? 'cotton') }}">
                            <div class="product-image">
                                @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy">
                                @else
                                    <div class="placeholder-image">
                                        <i class="fas fa-swatches"></i>
                                    </div>
                                @endif
                                <div class="product-badge {{ strtolower($product->quality ?? 'premium') }}">
                                    {{ ucfirst($product->quality ?? 'Premium') }}
                                </div>
                            </div>
                            
                            <div class="product-info">
                                <div class="product-header">
                                    <div>
                                        <div class="product-brand">{{ $product->brand ?? 'Janjua Tailors' }}</div>
                                        <h3 class="product-name">{{ $product->name }}</h3>
                                    </div>
                                    <div class="product-price">Rs. {{ number_format($product->price) }}</div>
                                </div>
                                
                                <p class="product-description">{{ Str::limit($product->description, 100) }}</p>
                                
                                <div class="product-details">
                                    <div class="detail-item">
                                        <span class="detail-label">Stock</span>
                                        <span class="detail-value">{{ $product->stock ?? $product->stock_quantity ?? 0 }} yards</span>
                                    </div>
                                    <div class="detail-item">
                                        <span class="detail-label">Type</span>
                                        <span class="detail-value">{{ ucfirst($product->fabric_type ?? 'Cotton') }}</span>
                                    </div>
                                </div>
                                
                                <div class="product-actions">
                                    <a href="{{ route('products.show', $product) }}" class="btn-primary">View Details</a>
                                    <a href="{{ route('custom-order.start') }}?fabric={{ $product->id }}" class="btn-secondary">
                                        <i class="fas fa-cut"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="empty-state">
                            <i class="fas fa-swatches"></i>
                            <h3>No fabrics available</h3>
                            <p>Check back soon for our latest fabric collection.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
    </main>

    <script>
        // Filter and Sort Functionality
        const products = document.querySelectorAll('.product-card');
        const productCount = document.getElementById('productCount');
        const brandFilter = document.getElementById('brandFilter');
        const qualityFilter = document.getElementById('qualityFilter');
        const priceFilter = document.getElementById('priceFilter');
        const typeFilter = document.getElementById('typeFilter');
        const sortSelect = document.getElementById('sortSelect');
        const applyFilters = document.getElementById('applyFilters');
        const clearFilters = document.getElementById('clearFilters');

        function filterProducts() {
            const brandValue = brandFilter.value.toLowerCase();
            const qualityValue = qualityFilter.value.toLowerCase();
            const priceValue = priceFilter.value;
            const typeValue = typeFilter.value.toLowerCase();

            let visibleCount = 0;

            products.forEach(product => {
                const productBrand = product.dataset.brand;
                const productPrice = parseInt(product.dataset.price);
                const productType = product.dataset.type;
                const productQuality = product.querySelector('.product-badge').textContent.toLowerCase();

                let show = true;

                // Brand filter
                if (brandValue && !productBrand.includes(brandValue)) {
                    show = false;
                }

                // Quality filter
                if (qualityValue && !productQuality.includes(qualityValue)) {
                    show = false;
                }

                // Price filter
                if (priceValue) {
                    const [min, max] = priceValue.split('-').map(p => p.replace('+', ''));
                    const minPrice = parseInt(min) || 0;
                    const maxPrice = max ? parseInt(max) : Infinity;
                    
                    if (productPrice < minPrice || productPrice > maxPrice) {
                        show = false;
                    }
                }

                // Type filter
                if (typeValue && !productType.includes(typeValue)) {
                    show = false;
                }

                product.style.display = show ? 'block' : 'none';
                if (show) visibleCount++;
            });

            productCount.textContent = visibleCount;
        }

        function sortProducts() {
            const sortValue = sortSelect.value;
            const productsArray = Array.from(products);
            const container = document.getElementById('productsGrid');

            productsArray.sort((a, b) => {
                switch (sortValue) {
                    case 'price-low':
                        return parseInt(a.dataset.price) - parseInt(b.dataset.price);
                    case 'price-high':
                        return parseInt(b.dataset.price) - parseInt(a.dataset.price);
                    case 'brand':
                        return a.dataset.brand.localeCompare(b.dataset.brand);
                    case 'name':
                        return a.querySelector('.product-name').textContent.localeCompare(
                            b.querySelector('.product-name').textContent
                        );
                    default:
                        return 0;
                }
            });

            // Re-append sorted products
            productsArray.forEach(product => container.appendChild(product));
        }

        function clearAllFilters() {
            brandFilter.value = '';
            qualityFilter.value = '';
            priceFilter.value = '';
            typeFilter.value = '';
            sortSelect.value = 'name';
            
            products.forEach(product => {
                product.style.display = 'block';
            });
            
            productCount.textContent = products.length;
        }

        // Event listeners
        applyFilters.addEventListener('click', filterProducts);
        clearFilters.addEventListener('click', clearAllFilters);
        sortSelect.addEventListener('change', sortProducts);

        // Real-time filtering
        [brandFilter, qualityFilter, priceFilter, typeFilter].forEach(filter => {
            filter.addEventListener('change', filterProducts);
        });

        // Mobile menu toggle
        document.getElementById('menuToggle').addEventListener('click', function() {
            // Add mobile menu functionality here
        });

        // Product card hover effects
        products.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>