<?php
namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class SiteMapController extends Controller
{
    public function generateSitemap()
    {
        $blogPosts = BlogPost::all(); // Assuming you have a Blog model to fetch blog posts from the database
        return response()->view('sitemap', compact('blogPosts'))->header('Content-Type', 'text/xml');
    }
}