<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Post;

class BlogController extends Controller
{
    function index(): View
    {
        $posts = Post::paginate(2);
        return view('blog.index', compact('posts'));
    }

    function show(Post $post): View
    {
        return view('blog.show', compact('post'));
    }

}
