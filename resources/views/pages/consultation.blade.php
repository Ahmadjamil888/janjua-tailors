<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation | Janjua Tailors</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; margin: 0; padding: 0; background: #f8f8f8; color: #1a1a1a; }
        .container { max-width: 900px; margin: 0 auto; padding: 2rem; }
        .card { background: #fff; border: 1px solid #e5e5e5; border-radius: 10px; padding: 2rem; box-shadow: 0 6px 20px rgba(0,0,0,0.06); }
        h1 { font-size: 2rem; margin-bottom: 0.5rem; }
        p { color: #555; line-height: 1.7; }
        .grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-top: 1.25rem; }
        .input, textarea { width: 100%; padding: 0.9rem 1rem; border: 1px solid #ddd; border-radius: 8px; font-size: 1rem; }
        .btn { display: inline-block; background: #611bf8; color: #fff; border: none; padding: 0.9rem 1.4rem; border-radius: 8px; cursor: pointer; font-weight: 600; }
        .btn:hover { background: #4607d0; }
        .muted { color: #777; font-size: 0.95rem; }
        .section { margin-top: 2rem; }
        @media (max-width: 720px) { .grid { grid-template-columns: 1fr; } }
    </style>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/jt-logo.svg') }}">
    <link rel="stylesheet" href="{{ asset('css/shared-styles.css') }}">
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Book a Consultation</h1>
            <p class="muted">Tell us about your garment, preferred fabric, and timeline. We'll get back to you with recommendations and next steps.</p>
            <form action="{{ route('pages.consultation') }}" method="get" class="section" onsubmit="event.preventDefault(); window.location='{{ route('custom-order.start') }}';">
                <div class="grid">
                    <div>
                        <label>Name</label>
                        <input class="input" type="text" placeholder="Your name" required>
                    </div>
                    <div>
                        <label>Email</label>
                        <input class="input" type="email" placeholder="you@example.com" required>
                    </div>
                </div>
                <div class="grid">
                    <div>
                        <label>Phone</label>
                        <input class="input" type="tel" placeholder="03xx-xxxxxxx">
                    </div>
                    <div>
                        <label>Preferred Date</label>
                        <input class="input" type="date">
                    </div>
                </div>
                <div class="section">
                    <label>Project Details</label>
                    <textarea class="input" rows="5" placeholder="What would you like to make? Fabric preference, fit, occasion, deadline..."></textarea>
                </div>
                <div class="section">
                    <button class="btn" type="submit">Continue</button>
                    <a class="btn" style="background:#333; margin-left: .5rem; text-decoration:none;" href="{{ url('/') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/shared-scripts.js') }}"></script>
    <script>document.title='Consultation | Janjua Tailors';</script>
</body>
</html>


