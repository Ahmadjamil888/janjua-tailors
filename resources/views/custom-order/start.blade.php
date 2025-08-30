<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Order - Janjua Tailors</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #000 0%, #333 100%);
            min-height: 100vh;
            color: white;
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
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #fff, #ccc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .header p {
            font-size: 1.2rem;
            color: #ccc;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .form-group {
            margin-bottom: 30px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
            color: #fff;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 16px;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #fff;
            background: rgba(255, 255, 255, 0.2);
        }

        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: #ccc;
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
            padding: 15px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            background: rgba(255, 255, 255, 0.1);
        }

        .size-option input[type="radio"]:checked + label {
            border-color: #fff;
            background: rgba(255, 255, 255, 0.3);
        }

        .custom-size-toggle {
            margin-top: 20px;
        }

        .custom-size-toggle button {
            background: transparent;
            border: 2px solid rgba(255, 255, 255, 0.5);
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .custom-size-toggle button:hover,
        .custom-size-toggle button.active {
            border-color: #fff;
            background: rgba(255, 255, 255, 0.2);
        }

        .submit-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(45deg, #fff, #ccc);
            color: #000;
            border: none;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
        }

        .back-link {
            display: inline-block;
            margin-bottom: 30px;
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .back-link:hover {
            color: #fff;
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