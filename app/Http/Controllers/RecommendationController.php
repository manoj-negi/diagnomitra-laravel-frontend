<?php
namespace App\Http\Controllers;

use App\Models\Recommendation;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function index()
    {
        // Fetch all recommendations from the database using the Recommendation model
        $recommendations = Recommendation::all();
        return view('index', compact('recommendations'));
    }
}