<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class UserTestimonialController extends Controller
{
    /**
     * Display the homepage with testimonials.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $testimonials = Testimonial::all(); // Fetch data
        // dd($testimonials); 
        return view('index', compact('testimonials')); // Pass data to view
    }
}