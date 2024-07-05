<?php
namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        // Fetch all blog posts without considering the status
        $blogPosts = BlogPost::orderBy('created_at', 'desc')->get();
        return view('user.blogposts.index', compact('blogPosts'));
    }

    public function show($id)
    {
        // Fetch a single blog post by its ID
        $blogPost = BlogPost::findOrFail($id);
        return view('user.blogposts.show', compact('blogPost'));
    }
}