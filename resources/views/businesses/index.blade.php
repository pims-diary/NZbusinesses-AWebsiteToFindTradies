<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Business Listings</title>

    <link rel="stylesheet" href="{{ asset('css/businesses.css') }}">
</head>
<body>

    <h1>Business Listings</h1>

    <p>
        Showing results for:
        <strong>{{ $service ?? 'All services' }}</strong>
        @if($location)
            in <strong>{{ $location }}</strong>
        @endif
    </p>


    <form action="{{ route('businesses.index') }}" method="GET" class="filter-box">

    <input 
        type="text" 
        name="service" 
        placeholder="Search service..."
        value="{{ $service }}"
    >

    <input 
        type="text" 
        name="location" 
        placeholder="Location"
        value="{{ $location }}"
    >

    <select name="industry">
        <option value="">All Industries</option>

        @foreach($industries as $industryName => $categories)
            <option value="{{ $industryName }}" {{ $selectedIndustry == $industryName ? 'selected' : '' }}>
                {{ $industryName }}
            </option>
        @endforeach
    </select>

    <select name="category">
        <option value="">All Categories</option>

        @foreach($industries as $industryName => $categories)
            @foreach($categories as $category)
                <option value="{{ $category }}" {{ $selectedCategory == $category ? 'selected' : '' }}>
                    {{ $category }}
                </option>
            @endforeach
        @endforeach
    </select>

    <button type="submit">Apply Filters</button>

</form>

   <div class="business-grid">

@forelse($businesses as $business)

<div class="business-card">

    <div class="business-top">

        <div>
            <span class="business-industry">
                {{ $business['industry'] }}
            </span>

            <h2>{{ $business['name'] }}</h2>
        </div>

        <div class="verified-badge">
            Verified
        </div>

    </div>

    <div class="business-meta">

        <span>{{ $business['category'] }}</span>

        <span>📍 {{ $business['location'] }}</span>

    </div>

    <p class="business-description">
        {{ $business['description'] }}
    </p>

    <div class="business-contact">

        <div>
            <strong>Phone:</strong><br>
            {{ $business['phone'] }}
        </div>

        <div>
            <strong>Email:</strong><br>
            {{ $business['email'] }}
        </div>

    </div>

    <div class="business-actions">

        <a href="#" class="view-profile-btn">
            View Profile
        </a>

        <a href="#" class="get-quote-btn">
            Get Quotation
        </a>

    </div>

</div>

@empty

<p>No businesses found.</p>

@endforelse

</div>

</body>
</html>