<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Homepage
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');


/*
|--------------------------------------------------------------------------
| Business Listing Page
|--------------------------------------------------------------------------
*/

Route::get('/businesses', function () {

    $service = request('service');
    $location = request('location');
    $industry = request('industry');
    $category = request('category');

    $businesses = collect(config('demo-businesses'));
    $industries = config('industries');

    if ($service) {
        $businesses = $businesses->filter(function ($business) use ($service) {
            return str_contains(strtolower($business['category']), strtolower($service)) ||
                   str_contains(strtolower($business['industry']), strtolower($service)) ||
                   str_contains(strtolower($business['description']), strtolower($service)) ||
                   str_contains(strtolower($business['name']), strtolower($service));
        });
    }

    if ($location) {
        $businesses = $businesses->filter(function ($business) use ($location) {
            return str_contains(strtolower($business['location']), strtolower($location));
        });
    }

    if ($industry) {
        $businesses = $businesses->filter(function ($business) use ($industry) {
            return $business['industry'] === $industry;
        });
    }

    if ($category) {
        $businesses = $businesses->filter(function ($business) use ($category) {
            return $business['category'] === $category;
        });
    }

    return view('businesses.index', [
        'businesses' => $businesses,
        'industries' => $industries,
        'service' => $service,
        'location' => $location,
        'selectedIndustry' => $industry,
        'selectedCategory' => $category,
    ]);

})->name('businesses.index');

