<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Order - Janjua Tailors</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/shared-styles.css') }}">
    <style>

        .main-content {
            margin-top: 80px;
            padding: 40px 0;
        }

        .size-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 15px;
            margin-top: 10px;
        }

        .size-option {
            position: relative;
        }

        .size-option input[type="radio"] {
            display: none;
        }

        .size-option label {
            display: block;
            padding: 12px 16px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 0;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            font-size: 0.875rem;
        }

        .size-option input[type="radio"]:checked + label {
            border-color: rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.1);
        }

        .custom-size-toggle {
            margin-top: 1.25rem;
            display: flex;
            gap: 1rem;
        }

        .custom-size-toggle button {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.8);
            padding: 8px 16px;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.875rem;
            backdrop-filter: blur(10px);
        }

        .custom-size-toggle button:hover,
        .custom-size-toggle button.active {
            border-color: rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
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

    <main class="main-content">
        <div class="container">
            <a href="{{ url('/') }}" class="btn-secondary btn-rounded mb-8">
                <i class="fas fa-arrow-left"></i> Back to Home
            </a>

            <div class="section-header">
                <h1 class="section-title">Custom Shalwar Kameez</h1>
                <p class="section-subtitle">Create your perfect fit with our luxury tailoring service</p>
            </div>

            <div class="card">
                <div class="card-content">
                    <form action="{{ route('custom-order.store-details') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label class="form-label">Size Type</label>
                            <div class="custom-size-toggle">
                                <button type="button" onclick="toggleSizeType('standard')" class="size-toggle active" id="standard-btn">
                                    Standard Sizes
                                </button>
                                <button type="button" onclick="toggleSizeType('custom')" class="size-toggle" id="custom-btn">
                                    Custom Measurements
                                </button>
                            </div>
                            <input type="hidden" name="size_type" id="size_type" value="standard">
                        </div>

                        <div class="form-group" id="standard-sizes">
                            <label class="form-label">Select Size</label>
                            <div class="size-options">
                                <div class="size-option">
                                    <input type="radio" name="standard_size" value="S" id="size-s">
                                    <label for="size-s">Small</label>
                                </div>
                                <div class="size-option">
                                    <input type="radio" name="standard_size" value="M" id="size-m">
                                    <label for="size-m">Medium</label>
                                </div>
                                <div class="size-option">
                                    <input type="radio" name="standard_size" value="L" id="size-l">
                                    <label for="size-l">Large</label>
                                </div>
                                <div class="size-option">
                                    <input type="radio" name="standard_size" value="XL" id="size-xl">
                                    <label for="size-xl">X-Large</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="color" class="form-label">Preferred Color</label>
                            <input type="text" name="color" id="color" placeholder="e.g., Navy Blue, Cream, Black" required class="form-input">
                        </div>

                        <div class="form-group">
                            <label for="quality" class="form-label">Quality Level</label>
                            <select name="quality" id="quality" required class="form-select">
                                <option value="">Select Quality</option>
                                <option value="standard">Standard - Rs. 3,000</option>
                                <option value="premium">Premium - Rs. 5,000</option>
                                <option value="luxury">Luxury - Rs. 8,000</option>
                                <option value="royal">Royal - Rs. 12,000</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="special_instructions" class="form-label">Special Instructions (Optional)</label>
                            <textarea name="special_instructions" id="special_instructions" rows="4" placeholder="Any specific requirements or design preferences..." class="form-textarea"></textarea>
                        </div>

                        <button type="submit" class="btn-primary btn-rounded w-full">
                            Continue to Next Step
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ asset('js/shared-scripts.js') }}"></script>
    <script>
        function toggleSizeType(type) {
            const standardBtn = document.getElementById('standard-btn');
            const customBtn = document.getElementById('custom-btn');
            const standardSizes = document.getElementById('standard-sizes');
            const sizeTypeInput = document.getElementById('size_type');

            if (type === 'standard') {
                standardBtn.classList.add('active');
                customBtn.classList.remove('active');
                standardSizes.style.display = 'block';
                sizeTypeInput.value = 'standard';
            } else {
                customBtn.classList.add('active');
                standardBtn.classList.remove('active');
                standardSizes.style.display = 'none';
                sizeTypeInput.value = 'custom';
            }
        }
    </script>
</body>
</html>