<?php
namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        // Fetch only published blog posts for the user panel
        $blogPosts = BlogPost::where('is_published', 1)->orderBy('created_at', 'desc')->get();
        return view('user.blogposts.index', compact('blogPosts'));
    }

  public function show($slug)
{
    $blogPost = BlogPost::where('slug', $slug)->firstOrFail();
    return view('user.blogposts.show', compact('blogPost'));
}

    
}