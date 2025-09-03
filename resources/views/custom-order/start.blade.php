<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Order - Janjua Tailors</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #000;
            min-height: 100vh;
            color: white;
            overflow-x: hidden;
            position: relative;
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

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 50px;
        }

        .header h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 500;
            margin-bottom: 1rem;
            color: #fff;
            letter-spacing: -0.5px;
        }

        .header p {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 300;
            line-height: 1.5;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(20px);
            border-radius: 0;
            padding: 2.5rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="form-grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="30" cy="30" r="0.4" fill="rgba(255,255,255,0.04)"/><circle cx="70" cy="70" r="0.4" fill="rgba(255,255,255,0.04)"/></pattern></defs><rect width="100" height="100" fill="url(%23form-grain)"/></svg>');
            opacity: 0.3;
            z-index: 0;
        }

        .form-group {
            margin-bottom: 2rem;
            position: relative;
            z-index: 2;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.75rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 0;
            background: rgba(255, 255, 255, 0.05);
            color: white;
            font-size: 16px;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.1);
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .form-group select option {
            background: #000;
            color: #fff;
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

        .submit-btn {
            width: 100%;
            padding: 12px 20px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 50px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 2;
        }

        .submit-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.6);
            transform: translateY(-2px);
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 2rem;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s ease;
            padding: 8px 16px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            backdrop-filter: blur(10px);
            font-size: 14px;
        }

        .back-link:hover {
            color: #fff;
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .form-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ url('/') }}" class="back-link">
            <i class="fas fa-arrow-left"></i> Back to Home
        </a>

        <div class="header">
            <h1>Custom Shalwar Kameez</h1>
            <p>Create your perfect fit with our luxury tailoring service</p>
        </div>

        <div class="form-container">
            <form action="{{ route('custom-order.store-details') }}" method="POST">
                @csrf
                
                <div class="form-group">
                    <label>Size Type</label>
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
                    <label>Select Size</label>
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
                    <label for="color">Preferred Color</label>
                    <input type="text" name="color" id="color" placeholder="e.g., Navy Blue, Cream, Black" required>
                </div>

                <div class="form-group">
                    <label for="quality">Quality Level</label>
                    <select name="quality" id="quality" required>
                        <option value="">Select Quality</option>
                        <option value="standard">Standard - Rs. 3,000</option>
                        <option value="premium">Premium - Rs. 5,000</option>
                        <option value="luxury">Luxury - Rs. 8,000</option>
                        <option value="royal">Royal - Rs. 12,000</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="special_instructions">Special Instructions (Optional)</label>
                    <textarea name="special_instructions" id="special_instructions" rows="4" placeholder="Any specific requirements or design preferences..."></textarea>
                </div>

                <button type="submit" class="submit-btn">
                    Continue to Next Step
                </button>
            </form>
        </div>
    </div>

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