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



</body>
</html>