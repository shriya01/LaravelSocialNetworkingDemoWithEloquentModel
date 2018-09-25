<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function viewUserPosts()
    {
        return view('posts.viewposts');
    }
}
