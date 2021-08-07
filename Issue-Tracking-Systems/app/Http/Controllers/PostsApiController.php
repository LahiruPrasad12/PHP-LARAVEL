<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsApiController extends Controller
{
    public function getPosts(){
        return Post::all();
    }
}
