<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $images = File::files(public_path('images/hero'));

        $imageUrls = [];

        foreach ($images as $image) {
            $imageUrls[] = asset('images/hero/' . $image->getFilename());
        }

        return view('home', compact('imageUrls'));
    }
}