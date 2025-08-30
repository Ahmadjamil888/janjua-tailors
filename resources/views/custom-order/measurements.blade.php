<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Measurements - Janjua Tailors</title>
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
            max-width: 1000px;
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

        .form-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .measurements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }

        .measurement-section {
            background: rgba(255, 255, 255, 0.05);
            padding: 25px;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .measurement-section h3 {
            margin-bottom: 20px;
            color: #fff;
            font-size: 1.3rem;
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #fff;
            font-size: 14px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 16px;
            transition: all 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #fff;
            background: rgba(255, 255, 255, 0.2);
        }

        .measurement-guide {
            background: rgba(255, 255, 255, 0.05);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            border-left: 4px solid #fff;
        }

        .measurement-guide h4 {
            margin-bottom: 15px;
            color: #fff;
        }

        .measurement-guide ul {
            list-style: none;
            padding-left: 0;
        }

        .measurement-guide li {
            margin-bottom: 8px;
            color: #ccc;
            font-size: 14px;
        }

        .measurement-guide li:before {
            content: "• ";
            color: #fff;
            font-weight: bold;
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
            .measurements-grid {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="{{ route('custom-order.start') }}" class="back-link">
            <i class="fas fa-arrow-left"></i> Back to Previous Step
        </a>

        <div class="header">
            <h1>Custom Measurements</h1>
            <p>Please provide your accurate measurements in inches</p>
        </div>

        <div class="measurement-guide">
            <h4>Measurement Guidelines</h4>
            <ul>
                <li>Use a flexible measuring tape</li>
                <li>Wear fitted clothing while measuring</li>
                <li>Ask someone to help you for accurate measurements</li>
                <li>Measure over your undergarments</li>
                <li>Keep the tape snug but not tight</li>
            </ul>
        </div>

        <div class="form-container">
            <form action="{{ route('custom-order.store-measurements') }}" method="POST">
                @csrf
                <input type="hidden" name="order_id" value="{{ $order->id }}">
                
                <div class="measurements-grid">
                    <!-- Kameez Measurements -->
                    <div class="measurement-section">
                        <h3><i class="fas fa-tshirt"></i> Kameez Measurements</h3>
                        
                        <div class="form-group">
                            <label for="chest">Chest (inches) *</label>
                            <input type="number" name="chest" id="chest" step="0.5" min="20" max="60" required>
                        </div>

                        <div class="form-group">
                            <label for="waist">Waist (inches) *</label>
                            <input type="number" name="waist" id="waist" step="0.5" min="20" max="60" required>
                        </div>

                        <div class="form-group">
                            <label for="hip">Hip (inches) *</label>
                            <input type="number" name="hip" id="hip" step="0.5" min="20" max="60" required>
                        </div>

                        <div class="form-group">
                            <label for="shoulder">Shoulder (inches) *</label>
                            <input type="number" name="shoulder" id="shoulder" step="0.5" min="10" max="30" required>
                        </div>

                        <div class="form-group">
                            <label for="sleeve_length">Sleeve Length (inches) *</label>
                            <input type="number" name="sleeve_length" id="sleeve_length" step="0.5" min="15" max="40" required>
                        </div>

                        <div class="form-group">
                            <label for="kameez_length">Kameez Length (inches) *</label>
                            <input type="number" name="kameez_length" id="kameez_length" step="0.5" min="30" max="60" required>
                        </div>

                        <div class="form-group">
                            <label for="neck">Neck (inches) *</label>
                            <input type="number" name="neck" id="neck" step="0.5" min="10" max="25" required>
                        </div>

                        <div class="form-group">
                            <label for="armhole">Armhole (inches)</label>
                            <input type="number" name="armhole" id="armhole" step="0.5" min="10" max="25">
                        </div>
                    </div>

                    <!-- Shalwar Measurements -->
                    <div class="measurement-section">
                        <h3><i class="fas fa-user"></i> Shalwar Measurements</h3>
                        
                        <div class="form-group">
                            <label for="shalwar_length">Shalwar Length (inches) *</label>
                            <input type="number" name="shalwar_length" id="shalwar_length" step="0.5" min="30" max="50" required>
                        </div>

                        <div class="form-group">
                            <label for="shalwar_waist">Shalwar Waist (inches) *</label>
                            <input type="number" name="shalwar_waist" id="shalwar_waist" step="0.5" min="20" max="60" required>
                        </div>

                        <div class="form-group">
                            <label for="thigh">Thigh (inches)</label>
                            <input type="number" name="thigh" id="thigh" step="0.5" min="15" max="40">
                        </div>

                        <div class="form-group">
                            <label for="bottom">Bottom (inches)</label>
                            <input type="number" name="bottom" id="bottom" step="0.5" min="10" max="30">
                        </div>

                        <div class="form-group">
                            <label for="height">Height (inches) *</label>
                            <input type="number" name="height" id="height" step="0.5" min="140" max="200" required>
                        </div>

                        <div class="form-group">
                            <label for="notes">Additional Notes</label>
                            <textarea name="notes" id="notes" rows="4" style="width: 100%; padding: 12px; border: 2px solid rgba(255, 255, 255, 0.3); border-radius: 8px; background: rgba(255, 255, 255, 0.1); color: white; resize: vertical;" placeholder="Any specific fitting preferences..."></textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" class="submit-btn">
                    Continue to Address
                </button>
            </form>
        </div>
    </div>
</body>
</html>