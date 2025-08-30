<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product - Janjua Tailors Admin</title>
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
            background: #f5f5f5;
            color: #333;
        }

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            height: 100vh;
            background: #2c3e50;
            color: white;
            padding: 20px 0;
            z-index: 1000;
        }

        .sidebar .logo {
            text-align: center;
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 30px;
        }

        .sidebar .logo h2 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .sidebar-menu {
            list-style: none;
        }

        .sidebar-menu li {
            margin-bottom: 5px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 15px 25px;
            color: #bdc3c7;
            text-decoration: none;
            transition: all 0.3s;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background: #34495e;
            color: white;
        }

        .sidebar-menu i {
            margin-right: 15px;
            width: 20px;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 2rem;
            color: #2c3e50;
        }

        .form-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
        }

        .form-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group label {
            font-weight: 500;
            color: #2c3e50;
            font-size: 14px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 12px;
            border: 2px solid #ecf0f1;
            border-radius: 8px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #3498db;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .colors-input {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }

        .color-tag {
            background: #ecf0f1;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .color-tag .remove {
            cursor: pointer;
            color: #e74c3c;
        }

        .add-color {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .add-color input {
            flex: 1;
        }

        .add-color button {
            padding: 8px 15px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .image-upload {
            border: 2px dashed #bdc3c7;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .image-upload:hover {
            border-color: #3498db;
            background: #f8f9fa;
        }

        .image-upload i {
            font-size: 2rem;
            color: #bdc3c7;
            margin-bottom: 15px;
        }

        .image-preview {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            gap: 10px;
            margin-top: 15px;
        }

        .preview-item {
            position: relative;
            width: 100px;
            height: 100px;
            border-radius: 8px;
            overflow: hidden;
        }

        .preview-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .preview-item .remove {
            position: absolute;
            top: 5px;
            right: 5px;
            background: #e74c3c;
            color: white;
            border: none;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            cursor: pointer;
            font-size: 12px;
        }

        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: #3498db;
            color: white;
        }

        .btn-secondary {
            background: #95a5a6;
            color: white;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .form-actions {
            display: flex;
            gap: 15px;
            justify-content: flex-end;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ecf0f1;
        }

        .error {
            color: #e74c3c;
            font-size: 12px;
            margin-top: 5px;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <h2>Janjua Tailors</h2>
            <p>Admin Panel</p>
        </div>
        <ul class="sidebar-menu">
            <li><a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="{{ route('admin.orders') }}"><i class="fas fa-shopping-bag"></i> Orders</a></li>
            <li><a href="{{ route('admin.products.index') }}" class="active"><i class="fas fa-box"></i> Products</a></li>
            <li><a href="{{ route('admin.customers.index') }}"><i class="fas fa-users"></i> Customers</a></li>
            <li><a href="{{ url('/') }}"><i class="fas fa-globe"></i> View Website</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>Add New Product</h1>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Back to Products
            </a>
        </div>

        <div class="form-container">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-grid">
                    <div class="form-section">
                        <div class="form-group">
                            <label for="name">Product Name *</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description *</label>
                            <textarea name="description" id="description" required>{{ old('description') }}</textarea>
                            @error('description')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="price">Price (Rs.) *</label>
                                <input type="number" name="price" id="price" step="0.01" min="0" value="{{ old('price') }}" required>
                                @error('price')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="stock_quantity">Stock Quantity *</label>
                                <input type="number" name="stock_quantity" id="stock_quantity" min="0" value="{{ old('stock_quantity') }}" required>
                                @error('stock_quantity')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="brand">Brand</label>
                                <input type="text" name="brand" id="brand" value="{{ old('brand') }}" placeholder="e.g., Pasha, Gul Ahmed">
                                @error('brand')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="category">Category *</label>
                                <select name="category" id="category" required>
                                    <option value="">Select Category</option>
                                    <option value="unstitched" {{ old('category') == 'unstitched' ? 'selected' : '' }}>Unstitched Fabric</option>
                                    <option value="accessories" {{ old('category') == 'accessories' ? 'selected' : '' }}>Accessories</option>
                                    <option value="fabric" {{ old('category') == 'fabric' ? 'selected' : '' }}>Premium Fabric</option>
                                </select>
                                @error('category')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="material">Material</label>
                                <input type="text" name="material" id="material" value="{{ old('material') }}" placeholder="e.g., Cotton, Silk, Lawn">
                                @error('material')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="weight">Weight (kg)</label>
                                <input type="number" name="weight" id="weight" step="0.01" min="0" value="{{ old('weight') }}">
                                @error('weight')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Available Colors</label>
                            <div class="colors-input" id="colors-container">
                                <!-- Colors will be added here dynamically -->
                            </div>
                            <div class="add-color">
                                <input type="text" id="color-input" placeholder="Enter color name">
                                <button type="button" onclick="addColor()">Add Color</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-section">
                        <div class="form-group">
                            <label>Product Images</label>
                            <div class="image-upload" onclick="document.getElementById('images').click()">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <p>Click to upload images</p>
                                <small>Support: JPG, PNG, GIF (Max: 2MB each)</small>
                            </div>
                            <input type="file" name="images[]" id="images" multiple accept="image/*" style="display: none;" onchange="previewImages(this)">
                            <div class="image-preview" id="image-preview"></div>
                            @error('images.*')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="sku">SKU (Auto-generated if empty)</label>
                            <input type="text" name="sku" id="sku" value="{{ old('sku') }}" placeholder="Will be auto-generated">
                            @error('sku')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-actions">
                    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Save Product
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        let colors = [];

        function addColor() {
            const input = document.getElementById('color-input');
            const color = input.value.trim();
            
            if (color && !colors.includes(color)) {
                colors.push(color);
                updateColorsDisplay();
                input.value = '';
            }
        }

        function removeColor(color) {
            colors = colors.filter(c => c !== color);
            updateColorsDisplay();
        }

        function updateColorsDisplay() {
            const container = document.getElementById('colors-container');
            container.innerHTML = '';
            
            colors.forEach(color => {
                const tag = document.createElement('div');
                tag.className = 'color-tag';
                tag.innerHTML = `
                    <span>${color}</span>
                    <span class="remove" onclick="removeColor('${color}')">&times;</span>
                    <input type="hidden" name="colors[]" value="${color}">
                `;
                container.appendChild(tag);
            });
        }

        function previewImages(input) {
            const preview = document.getElementById('image-preview');
            preview.innerHTML = '';
            
            if (input.files) {
                Array.from(input.files).forEach((file, index) => {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const item = document.createElement('div');
                        item.className = 'preview-item';
                        item.innerHTML = `
                            <img src="${e.target.result}" alt="Preview">
                            <button type="button" class="remove" onclick="removeImage(${index})">&times;</button>
                        `;
                        preview.appendChild(item);
                    };
                    reader.readAsDataURL(file);
                });
            }
        }

        function removeImage(index) {
            // This would need more complex logic to actually remove from file input
            // For now, just remove the preview
            const previews = document.querySelectorAll('.preview-item');
            if (previews[index]) {
                previews[index].remove();
            }
        }

        // Allow Enter key to add colors
        document.getElementById('color-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                addColor();
            }
        });
    </script>
</body>
</html>