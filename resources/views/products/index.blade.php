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
            color: #fff;
            background: #000;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="0.5" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
            z-index: -1;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            height: 60px;
            background: rgba(0, 0, 0, 0.95);
            backdrop-filter: saturate(180%) blur(20px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
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
            color: #fff;
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
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 600;
            color: #fff;
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
            font-family: 'Inter', sans-serif;
            color: #fff;
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
            background: #000;
            color: white;
            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="hero-grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="0.5" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23hero-grain)"/></svg>');
            opacity: 0.3;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            margin-bottom: 1rem;
            letter-spacing: -0.02em;
            position: relative;
            z-index: 2;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        /* Layout */
        .products-layout {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 3rem;
            margin-top: 2rem;
        }

        /* Sidebar Filters */
        .filters-sidebar {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0;
            padding: 2.5rem;
            backdrop-filter: blur(20px);
            height: fit-content;
            position: sticky;
            top: 80px;
            overflow: hidden;
            position: relative;
        }

        .filters-sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="filter-grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="0.5" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23filter-grain)"/></svg>');
            opacity: 0.3;
            z-index: -1;
        }

        .filters-title {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 2.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            letter-spacing: -0.5px;
            position: relative;
            z-index: 2;
        }

        .filters-title i {
            font-size: 1.25rem;
            opacity: 0.8;
        }

        .filter-group {
            margin-bottom: 2.5rem;
            position: relative;
            z-index: 2;
        }

        .filter-label {
            font-size: 0.75rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 1.25rem;
            display: block;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .filter-select {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 0;
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .filter-select:focus {
            outline: none;
            border-color: rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.1);
        }

        .filter-options {
            display: flex;
            flex-direction: column;
            gap: 0.875rem;
        }

        .filter-option {
            display: flex;
            align-items: center;
            gap: 0.875rem;
            padding: 0.75rem 0;
            cursor: pointer;
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .filter-option:last-child {
            border-bottom: none;
        }

        .filter-option:hover {
            background: rgba(255, 255, 255, 0.05);
            padding-left: 0.5rem;
        }

        .filter-option input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: rgba(255, 255, 255, 0.8);
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .filter-option label {
            font-size: 0.875rem;
            color: rgba(255, 255, 255, 0.8);
            cursor: pointer;
            flex: 1;
            font-weight: 400;
            transition: color 0.3s ease;
        }

        .filter-option:hover label {
            color: #fff;
        }

        .filter-count {
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.5);
            background: rgba(255, 255, 255, 0.08);
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-weight: 500;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .price-range {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .price-inputs {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            gap: 0.75rem;
            align-items: center;
        }

        .price-input {
            padding: 12px 16px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 0;
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            font-size: 0.875rem;
            text-align: center;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .price-input:focus {
            outline: none;
            border-color: rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.1);
        }

        .price-input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .price-separator {
            color: rgba(255, 255, 255, 0.6);
            font-weight: 400;
            font-size: 0.875rem;
        }

        .filter-actions {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: 2.5rem;
            padding-top: 2.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 2;
        }

        .filter-btn {
            width: 100%;
            padding: 12px 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .filter-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.6);
            transform: translateY(-2px);
        }

        .clear-filters {
            width: 100%;
            padding: 12px 20px;
            background: transparent;
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.8);
            border-radius: 50px;
            font-size: 14px;
            font-weight: 400;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .clear-filters:hover {
            border-color: rgba(255, 255, 255, 0.4);
            color: #fff;
            background: rgba(255, 255, 255, 0.05);
            transform: translateY(-2px);
        }

        /* Products Content */
        .products-content {
            flex: 1;
        }

        .products-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1.5rem 2rem;
            border-radius: 0;
            backdrop-filter: blur(20px);
            position: relative;
            overflow: hidden;
        }

        .products-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="header-grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="0.4" fill="rgba(255,255,255,0.04)"/></pattern></defs><rect width="100" height="100" fill="url(%23header-grain)"/></svg>');
            opacity: 0.3;
            z-index: 0;
        }

        .products-count {
            font-size: 0.875rem;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 400;
            position: relative;
            z-index: 2;
        }

        .products-count strong {
            color: #fff;
            font-weight: 600;
        }

        .sort-controls {
            display: flex;
            align-items: center;
            gap: 1rem;
            position: relative;
            z-index: 2;
        }

        .sort-label {
            font-size: 0.875rem;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 500;
        }

        .sort-select {
            padding: 0.75rem 1rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 0;
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            font-size: 0.875rem;
            min-width: 180px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .sort-select:focus {
            outline: none;
            border-color: rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.1);
        }

        .sort-select option {
            background: #000;
            color: #fff;
        }

        .view-toggle {
            display: flex;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0;
            padding: 0.25rem;
            backdrop-filter: blur(10px);
        }

        .view-btn {
            padding: 0.5rem 0.75rem;
            border: none;
            background: transparent;
            color: rgba(255, 255, 255, 0.7);
            border-radius: 0;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.875rem;
        }

        .view-btn.active {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .view-btn:hover {
            background: rgba(255, 255, 255, 0.08);
            color: #fff;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 2rem;
        }

        .products-grid.list-view {
            grid-template-columns: 1fr;
        }

        .products-grid.list-view .product-card {
            display: grid;
            grid-template-columns: 200px 1fr;
            gap: 2rem;
        }

        .products-grid.list-view .product-image {
            height: 200px;
        }

        /* Premium Product Cards */
        .product-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0;
            overflow: hidden;
            transition: all 0.4s ease;
            position: relative;
            cursor: pointer;
            backdrop-filter: blur(10px);
        }

        .product-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="card-grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="0.3" fill="rgba(255,255,255,0.03)"/></pattern></defs><rect width="100" height="100" fill="url(%23card-grain)"/></svg>');
            opacity: 0.5;
            z-index: 0;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            border-color: rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.08);
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
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 0.5rem 1rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            z-index: 3;
        }

        .product-badge.premium { 
            background: rgba(255, 215, 0, 0.2); 
            border-color: rgba(255, 215, 0, 0.3);
            color: #ffd700;
        }
        .product-badge.luxury { 
            background: rgba(139, 92, 246, 0.2); 
            border-color: rgba(139, 92, 246, 0.3);
            color: #a78bfa;
        }
        .product-badge.royal { 
            background: rgba(255, 255, 255, 0.15); 
            border-color: rgba(255, 255, 255, 0.3);
            color: #fff;
        }

        .placeholder-image {
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.3);
            font-size: 3rem;
        }

        .product-info {
            padding: 2rem;
            position: relative;
            z-index: 2;
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1rem;
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
            color: #fff;
            margin-bottom: 1rem;
            line-height: 1.3;
        }

        .product-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 1rem;
        }

        .product-description {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.6;
            margin-bottom: 2rem;
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
            color: rgba(255, 255, 255, 0.6);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        .detail-value {
            font-size: 0.875rem;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
        }

        .product-actions {
            display: flex;
            gap: 1rem;
        }

        .btn-primary {
            flex: 1;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 0.75rem 1.5rem;
            border-radius: 0;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            text-align: center;
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
            border-radius: 0;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: rgba(255, 255, 255, 0.7);
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            opacity: 0.5;
            color: rgba(255, 255, 255, 0.3);
        }

        .empty-state h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: #fff;
            font-weight: 600;
        }

        /* Mobile Filters Toggle */
        .mobile-filters-toggle {
            display: none;
            width: 100%;
            padding: 12px 20px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 50px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .mobile-filters-toggle:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.6);
            transform: translateY(-2px);
        }

        .mobile-filters-toggle i {
            margin-right: 0.5rem;
            font-size: 12px;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .products-layout {
                grid-template-columns: 280px 1fr;
                gap: 2rem;
            }

            .filters-sidebar {
                padding: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .products-layout {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .mobile-filters-toggle {
                display: block;
            }

            .filters-sidebar {
                position: fixed;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100vh;
                z-index: 1000;
                overflow-y: auto;
                transition: left 0.3s ease;
                border-radius: 0;
            }

            .filters-sidebar.active {
                left: 0;
            }

            .filters-sidebar::before {
                content: '';
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.5);
                z-index: -1;
            }

            .filters-close {
                display: block;
                position: absolute;
                top: 1rem;
                right: 1rem;
                background: none;
                border: none;
                font-size: 1.5rem;
                color: #1d1d1f;
                cursor: pointer;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            .products-header {
                flex-direction: column;
                gap: 1rem;
                align-items: stretch;
            }

            .sort-controls {
                justify-content: space-between;
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

            .products-grid.list-view .product-card {
                grid-template-columns: 1fr;
            }

            .products-grid.list-view .product-image {
                height: 250px;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .container {
                padding: 0 1rem;
            }

            .filters-sidebar {
                padding: 1rem;
            }

            .products-header {
                padding: 1rem;
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

        <!-- Products Layout -->
        <div class="container">
            <!-- Mobile Filters Toggle -->
            <button class="mobile-filters-toggle" id="mobileFiltersToggle">
                <i class="fas fa-filter"></i>
                Filters & Sort
            </button>

            <div class="products-layout">
                <!-- Sidebar Filters -->
                <aside class="filters-sidebar" id="filtersSidebar">
                    <button class="filters-close" id="filtersClose" style="display: none;">
                        <i class="fas fa-times"></i>
                    </button>
                    <h3 class="filters-title">
                        <i class="fas fa-filter"></i>
                        Filters
                    </h3>

                    <!-- Brand Filter -->
                    <div class="filter-group">
                        <label class="filter-label">Brand</label>
                        <div class="filter-options">
                            <div class="filter-option">
                                <input type="checkbox" id="brand-all" value="" checked>
                                <label for="brand-all">All Brands</label>
                                <span class="filter-count">{{ $products->count() }}</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="brand-pasha" value="pasha">
                                <label for="brand-pasha">Pasha</label>
                                <span class="filter-count">12</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="brand-gul-ahmed" value="gul-ahmed">
                                <label for="brand-gul-ahmed">Gul Ahmed</label>
                                <span class="filter-count">8</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="brand-khaadi" value="khaadi">
                                <label for="brand-khaadi">Khaadi</label>
                                <span class="filter-count">15</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="brand-sana-safinaz" value="sana-safinaz">
                                <label for="brand-sana-safinaz">Sana Safinaz</label>
                                <span class="filter-count">6</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quality Filter -->
                    <div class="filter-group">
                        <label class="filter-label">Quality</label>
                        <div class="filter-options">
                            <div class="filter-option">
                                <input type="checkbox" id="quality-premium" value="premium">
                                <label for="quality-premium">Premium</label>
                                <span class="filter-count">18</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="quality-luxury" value="luxury">
                                <label for="quality-luxury">Luxury</label>
                                <span class="filter-count">12</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="quality-royal" value="royal">
                                <label for="quality-royal">Royal</label>
                                <span class="filter-count">8</span>
                            </div>
                        </div>
                    </div>

                    <!-- Price Range Filter -->
                    <div class="filter-group">
                        <label class="filter-label">Price Range</label>
                        <div class="price-range">
                            <div class="price-inputs">
                                <input type="number" class="price-input" id="minPrice" placeholder="Min" min="0">
                                <span class="price-separator">-</span>
                                <input type="number" class="price-input" id="maxPrice" placeholder="Max" min="0">
                            </div>
                            <div class="filter-options">
                                <div class="filter-option">
                                    <input type="checkbox" id="price-0-2000" value="0-2000">
                                    <label for="price-0-2000">Under Rs. 2,000</label>
                                    <span class="filter-count">5</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="price-2000-5000" value="2000-5000">
                                    <label for="price-2000-5000">Rs. 2,000 - 5,000</label>
                                    <span class="filter-count">15</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="price-5000-10000" value="5000-10000">
                                    <label for="price-5000-10000">Rs. 5,000 - 10,000</label>
                                    <span class="filter-count">12</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="price-10000+" value="10000+">
                                    <label for="price-10000+">Above Rs. 10,000</label>
                                    <span class="filter-count">6</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fabric Type Filter -->
                    <div class="filter-group">
                        <label class="filter-label">Fabric Type</label>
                        <div class="filter-options">
                            <div class="filter-option">
                                <input type="checkbox" id="type-cotton" value="cotton">
                                <label for="type-cotton">Cotton</label>
                                <span class="filter-count">20</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="type-silk" value="silk">
                                <label for="type-silk">Silk</label>
                                <span class="filter-count">8</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="type-linen" value="linen">
                                <label for="type-linen">Linen</label>
                                <span class="filter-count">6</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="type-wool" value="wool">
                                <label for="type-wool">Wool</label>
                                <span class="filter-count">4</span>
                            </div>
                            <div class="filter-option">
                                <input type="checkbox" id="type-blend" value="blend">
                                <label for="type-blend">Blend</label>
                                <span class="filter-count">10</span>
                            </div>
                        </div>
                    </div>

                    <div class="filter-actions">
                        <button class="filter-btn" id="applyFilters">Apply Filters</button>
                        <button class="clear-filters" id="clearFilters">Clear All Filters</button>
                    </div>
                </aside>

                <!-- Products Content -->
                <main class="products-content">
                    <div class="products-header">
                        <div class="products-count">
                            <strong id="productCount">{{ $products->count() }}</strong> products found
                        </div>
                        <div class="sort-controls">
                            <span class="sort-label">Sort by:</span>
                            <select class="sort-select" id="sortSelect">
                                <option value="name">Name</option>
                                <option value="price-low">Price: Low to High</option>
                                <option value="price-high">Price: High to Low</option>
                                <option value="brand">Brand</option>
                                <option value="newest">Newest First</option>
                            </select>
                            <div class="view-toggle">
                                <button class="view-btn active" id="gridView">
                                    <i class="fas fa-th"></i>
                                </button>
                                <button class="view-btn" id="listView">
                                    <i class="fas fa-list"></i>
                                </button>
                            </div>
                        </div>
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
                </main>
            </div>
        </div>
    </main>

    <script>
        // Filter and Sort Functionality
        const products = document.querySelectorAll('.product-card');
        const productCount = document.getElementById('productCount');
        const sortSelect = document.getElementById('sortSelect');
        const applyFilters = document.getElementById('applyFilters');
        const clearFilters = document.getElementById('clearFilters');
        const mobileFiltersToggle = document.getElementById('mobileFiltersToggle');
        const filtersSidebar = document.getElementById('filtersSidebar');
        const filtersClose = document.getElementById('filtersClose');
        const gridView = document.getElementById('gridView');
        const listView = document.getElementById('listView');
        const productsGrid = document.getElementById('productsGrid');

        function filterProducts() {
            // Get selected filters
            const selectedBrands = Array.from(document.querySelectorAll('input[id^="brand-"]:checked')).map(cb => cb.value).filter(v => v);
            const selectedQualities = Array.from(document.querySelectorAll('input[id^="quality-"]:checked')).map(cb => cb.value);
            const selectedTypes = Array.from(document.querySelectorAll('input[id^="type-"]:checked')).map(cb => cb.value);
            const selectedPriceRanges = Array.from(document.querySelectorAll('input[id^="price-"]:checked')).map(cb => cb.value);
            
            const minPrice = parseInt(document.getElementById('minPrice').value) || 0;
            const maxPrice = parseInt(document.getElementById('maxPrice').value) || Infinity;

            let visibleCount = 0;

            products.forEach(product => {
                const productBrand = product.dataset.brand;
                const productPrice = parseInt(product.dataset.price);
                const productType = product.dataset.type;
                const productQuality = product.querySelector('.product-badge').textContent.toLowerCase();

                let show = true;

                // Brand filter
                if (selectedBrands.length > 0 && !selectedBrands.some(brand => productBrand.includes(brand))) {
                    show = false;
                }

                // Quality filter
                if (selectedQualities.length > 0 && !selectedQualities.some(quality => productQuality.includes(quality))) {
                    show = false;
                }

                // Type filter
                if (selectedTypes.length > 0 && !selectedTypes.some(type => productType.includes(type))) {
                    show = false;
                }

                // Price range filter
                if (selectedPriceRanges.length > 0) {
                    let priceMatch = false;
                    selectedPriceRanges.forEach(range => {
                        const [min, max] = range.split('-').map(p => p.replace('+', ''));
                        const rangeMin = parseInt(min) || 0;
                        const rangeMax = max ? parseInt(max) : Infinity;
                        
                        if (productPrice >= rangeMin && productPrice <= rangeMax) {
                            priceMatch = true;
                        }
                    });
                    if (!priceMatch) show = false;
                }

                // Custom price range
                if (productPrice < minPrice || productPrice > maxPrice) {
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
            // Clear all checkboxes
            document.querySelectorAll('input[type="checkbox"]').forEach(cb => {
                cb.checked = false;
            });
            
            // Check "All Brands"
            document.getElementById('brand-all').checked = true;
            
            // Clear price inputs
            document.getElementById('minPrice').value = '';
            document.getElementById('maxPrice').value = '';
            
            // Reset sort
            sortSelect.value = 'name';
            
            // Show all products
            products.forEach(product => {
                product.style.display = 'block';
            });
            
            productCount.textContent = products.length;
        }

        // Mobile filters toggle
        function toggleMobileFilters() {
            filtersSidebar.classList.toggle('active');
            document.body.style.overflow = filtersSidebar.classList.contains('active') ? 'hidden' : '';
        }

        // View toggle
        function toggleView(viewType) {
            if (viewType === 'list') {
                productsGrid.classList.add('list-view');
                listView.classList.add('active');
                gridView.classList.remove('active');
            } else {
                productsGrid.classList.remove('list-view');
                gridView.classList.add('active');
                listView.classList.remove('active');
            }
        }

        // Event listeners
        applyFilters.addEventListener('click', filterProducts);
        clearFilters.addEventListener('click', clearAllFilters);
        sortSelect.addEventListener('change', sortProducts);
        mobileFiltersToggle.addEventListener('click', toggleMobileFilters);
        filtersClose.addEventListener('click', toggleMobileFilters);
        gridView.addEventListener('click', () => toggleView('grid'));
        listView.addEventListener('click', () => toggleView('list'));

        // Real-time filtering
        document.querySelectorAll('input[type="checkbox"], input[type="number"]').forEach(input => {
            input.addEventListener('change', filterProducts);
        });

        // Handle "All Brands" checkbox
        document.getElementById('brand-all').addEventListener('change', function() {
            if (this.checked) {
                document.querySelectorAll('input[id^="brand-"]:not(#brand-all)').forEach(cb => {
                    cb.checked = false;
                });
            }
        });

        // Handle individual brand checkboxes
        document.querySelectorAll('input[id^="brand-"]:not(#brand-all)').forEach(cb => {
            cb.addEventListener('change', function() {
                if (this.checked) {
                    document.getElementById('brand-all').checked = false;
                }
                
                // If no brands selected, check "All Brands"
                const anyBrandSelected = Array.from(document.querySelectorAll('input[id^="brand-"]:not(#brand-all)')).some(cb => cb.checked);
                if (!anyBrandSelected) {
                    document.getElementById('brand-all').checked = true;
                }
            });
        });

        // Close mobile filters when clicking outside
        document.addEventListener('click', function(e) {
            if (filtersSidebar.classList.contains('active') && 
                !filtersSidebar.contains(e.target) && 
                !mobileFiltersToggle.contains(e.target)) {
                toggleMobileFilters();
            }
        });

        // Mobile menu toggle
        document.getElementById('menuToggle')?.addEventListener('click', function() {
            // Add mobile menu functionality here
        });
    </script>
</body>
</html>