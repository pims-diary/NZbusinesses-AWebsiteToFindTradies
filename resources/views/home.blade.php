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
                <div class="logo-placeholder">New Zealand Businesses</div>

                <button class="browse-btn">
                    Browse
                    <span class="dropdown-icon">▼</span>
                </button>
            </div>

            <div class="navbar-actions">
                <a href="{{ route('job.details') }}" class="nav-btn quote-btn">Get Quotes</a>
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
               <a href="{{ route('job.details') }}" class="nav-btn quote-btn">Get Quotes</a>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Trust Section Start -->
    <section class="trust-section">
        <div class="trust-container">

            <div class="trust-card">
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M12 2L4 6V11C4 16 7.5 20.7 12 22C16.5 20.7 20 16 20 11V6L12 2Z" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </div>
                <h3>Trusted by Locals</h3>
                <p>Find businesses used and trusted across New Zealand.</p>
            </div>

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

            <div class="trust-card">
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </div>
                <h3>Fast Responses</h3>
                <p>Quick connections with the right tradies.</p>
            </div>

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

        </div>

        <div class="category-cta">
            <a href="#" class="view-all-btn">View All Services</a>
        </div>
    </section>
    <!-- Category Section End -->


    <!-- How It Works Section Start -->
    <section class="how-section">
        <div class="section-header">
            <span class="section-badge">Simple Process</span>
            <h2>How it works</h2>
            <p>Whether you are looking for a tradie or listing your business, the process is simple and quick.</p>
        </div>

        <div class="how-grid">

            <div class="how-card homeowner-card">
                <div class="how-card-header">
                    <span class="how-label">For Homeowners</span>
                    <h3>Get matched with the right tradie</h3>
                </div>

                <div class="how-steps">
                    <div class="how-step">
                        <span class="step-number">01</span>
                        <div>
                            <h4>Submit Your Job</h4>
                            <p>Tell us what service you need and where the job is located.</p>
                        </div>
                    </div>

                    <div class="how-step">
                        <span class="step-number">02</span>
                        <div>
                            <h4>Get Matched with Tradies</h4>
                            <p>Your request is sent to suitable businesses through TradieFS.</p>
                        </div>
                    </div>

                    <div class="how-step">
                        <span class="step-number">03</span>
                        <div>
                            <h4>Choose & Hire</h4>
                            <p>Compare responses and choose the tradie that suits your job.</p>
                        </div>
                    </div>
                </div>

                <a href="{{ route('job.details') }}" class="nav-btn quote-btn">Get Quotes</a>
            </div>

            <div class="how-card business-card">
                <div class="how-card-header">
                    <span class="how-label">For Businesses</span>
                    <h3>List your business and receive leads</h3>
                </div>

                <div class="how-steps">
                    <div class="how-step">
                        <span class="step-number">01</span>
                        <div>
                            <h4>Create Profile</h4>
                            <p>Register your business details and services in the system.</p>
                        </div>
                    </div>

                    <div class="how-step">
                        <span class="step-number">02</span>
                        <div>
                            <h4>Get Listed</h4>
                            <p>Your business appears on New Zealand Businesses for customers.</p>
                        </div>
                    </div>

                    <div class="how-step">
                        <span class="step-number">03</span>
                        <div>
                            <h4>Receive Leads</h4>
                            <p>Customer job requests are sent back to TradieFS as new leads.</p>
                        </div>
                    </div>
                </div>

                <a href="#" class="how-btn business-btn">List Your Business</a>
            </div>

        </div>
    </section>
    <!-- How It Works Section End -->

    <!-- Footer Start -->
<footer class="footer">
    <div class="footer-container">

        <!-- Brand -->
        <div class="footer-brand">
            <h3>New Zealand Businesses</h3>
            <p>Connecting customers with trusted tradies across New Zealand.</p>
        </div>

        <!-- Links -->
        <div class="footer-links">
            <div>
                <h4>Services</h4>
                <ul>
                    <li><a href="#">Electricians</a></li>
                    <li><a href="#">Plumbers</a></li>
                    <li><a href="#">Builders</a></li>
                    <li><a href="#">Cleaners</a></li>
                </ul>
            </div>

            <div>
                <h4>For Customers</h4>
                <ul>
                    <li><a href="#">Get Quotes</a></li>
                    <li><a href="#">How it Works</a></li>
                    <li><a href="#">Browse Businesses</a></li>
                </ul>
            </div>

            <div>
                <h4>For Businesses</h4>
                <ul>
                    <li><a href="#">List Your Business</a></li>
                    <li><a href="#">Receive Leads</a></li>
                    <li><a href="#">Pricing</a></li>
                </ul>
            </div>

            <div>
                <h4>Company</h4>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© {{ date('Y') }} New Zealand Businesses. All rights reserved.</p>
    </div>
</footer>
<!-- Footer End -->


    <script>
        const heroImages = @json($imageUrls);

        if (heroImages.length > 0) {
            const randomImage = heroImages[Math.floor(Math.random() * heroImages.length)];
            document.getElementById("heroSection").style.backgroundImage = `url('${randomImage}')`;
        }
    </script>

</body>
</html>