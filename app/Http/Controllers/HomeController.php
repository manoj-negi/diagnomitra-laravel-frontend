<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Recommendation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all testimonials from the database
        $testimonials = Testimonial::all();
        
        // Fetch all recommendations from the database
        $recommendations = Recommendation::all();

        // Pass both datasets to the view
        return view('index', compact('testimonials', 'recommendations'));
    }
}
