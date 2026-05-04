<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Zealand Businesses</title>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

    <!-- Navbar Start -->
    <nav class="navbar">
        <div class="navbar-container">

            <div class="navbar-left">
                <div class="logo-placeholder">
                    New Zealand Businesses
                </div>

                <button class="browse-btn">
                    Browse
                    <span class="dropdown-icon">▼</span>
                </button>
            </div>

            <div class="navbar-actions">
                <a href="#" class="nav-btn quote-btn">Get Quotes</a>
                <a href="#" class="nav-btn business-btn">List Your Business</a>
            </div>

        </div>
    </nav>
    <!-- Navbar End -->


    
<!-- Hero Section Start -->
<section class="hero-section" id="heroSection">

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <div class="hero-badge">Trusted businesses across New Zealand</div>

        <h1>
            Find Trusted Businesses<br>
            Across New Zealand
        </h1>

        <p>Search reliable tradies and local service providers near you.</p>

        <div class="hero-search-box">
            <input type="text" placeholder="What service do you need?">
            <button>Get Quotes</button>
        </div>
    </div>

</section>
</section>

<script>
    const heroImages = @json($imageUrls);

    const randomImage = heroImages[Math.floor(Math.random() * heroImages.length)];

    document.getElementById("heroSection").style.backgroundImage = `url('${randomImage}')`;
</script>

</body>
</html>
<!-- Hero Section End -->


<!-- Trust Section Start -->
<section class="trust-section">
    <div class="trust-container">

        
<!-- 1 -->
<div class="trust-card">
    <div class="trust-icon">
        <svg viewBox="0 0 24 24" fill="none">
            <path d="M12 2L4 6V11C4 16 7.5 20.7 12 22C16.5 20.7 20 16 20 11V6L12 2Z" stroke="currentColor" stroke-width="2"/>
        </svg>
    </div>
    <h3>Trusted by Locals</h3>
    <p>Find businesses used and trusted across New Zealand.</p>
</div>

<!-- 2 -->
<div class="trust-card">
    <div class="trust-icon">
        <svg viewBox="0 0 24 24" fill="none">
            <path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="2"/>
            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
        </svg>
    </div>
    <h3>Verified Tradies</h3>
    <p>Browse reliable professionals with verified details.</p>
</div>

<!-- 3 -->
<div class="trust-card">
    <div class="trust-icon">
        <svg viewBox="0 0 24 24" fill="none">
            <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="currentColor" stroke-width="2"/>
        </svg>
    </div>
    <h3>Fast Responses</h3>
    <p>Quick connections with the right tradies.</p>
</div>

<!-- 4 -->
<div class="trust-card">
    <div class="trust-icon">
        <svg viewBox="0 0 24 24" fill="none">
            <path d="M21 15A4 4 0 0 1 17 19H8L3 22V5A4 4 0 0 1 7 1H17A4 4 0 0 1 21 5V15Z" stroke="currentColor" stroke-width="2"/>
        </svg>
    </div>
    <h3>Free Quotes</h3>
    <p>Request quotes without paying upfront.</p>
</div>
       
    </div>
</section>
<!-- Trust Section End -->


<!-- Category Section Start -->
<section class="category-section">
    <div class="section-header">
        <span class="section-badge">Popular Services</span>
        <h2>Explore tradie categories</h2>
        <p>Find the right professional for repairs, renovations, maintenance, and local services across New Zealand.</p>
    </div>

    <div class="category-grid">

        <div class="category-card">
            <img src="{{ asset('images/categories/electrician.jpg') }}" alt="Electrician">
            <div class="category-content">
                <h3>Electricians</h3>
                <p>Wiring, lighting, switchboards, repairs, and electrical installations.</p>
                <a href="#">View category →</a>
            </div>
        </div>

        <div class="category-card">
            <img src="{{ asset('images/categories/plumber.jpg') }}" alt="Plumber">
            <div class="category-content">
                <h3>Plumbers</h3>
                <p>Leaks, drainage, hot water systems, bathrooms, and plumbing jobs.</p>
                <a href="#">View category →</a>
            </div>
        </div>

        <div class="category-card">
            <img src="{{ asset('images/categories/builder.jpg') }}" alt="Builder">
            <div class="category-content">
                <h3>Builders</h3>
                <p>Renovations, home repairs, extensions, decks, and building work.</p>
                <a href="#">View category →</a>
            </div>
        </div>

        <div class="category-card">
            <img src="{{ asset('images/categories/painter.jpg') }}" alt="Painter">
            <div class="category-content">
                <h3>Painters</h3>
                <p>Interior painting, exterior painting, decorating, and finishing.</p>
                <a href="#">View category →</a>
            </div>
        </div>

        <div class="category-card">
            <img src="{{ asset('images/categories/carpenter.jpg') }}" alt="Carpenter">
            <div class="category-content">
                <h3>Carpenters</h3>
                <p>Custom woodwork, repairs, framing, shelving, and installations.</p>
                <a href="#">View category →</a>
            </div>
        </div>

        <div class="category-card">
            <img src="{{ asset('images/categories/cleaner.jpg') }}" alt="Cleaner">
            <div class="category-content">
                <h3>Cleaners</h3>
                <p>Home cleaning, end-of-tenancy cleaning, offices, and deep cleans.</p>
                <a href="#">View category →</a>
            </div>
        </div>

        <div class="category-cta">
            <a href="#" class="view-all-btn">View All Services</a>
        </div>

    </div>
</section>
<!-- Category Section End -->



</body>
</html>