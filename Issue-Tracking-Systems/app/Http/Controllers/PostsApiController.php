<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

//Import Post Schema from models
use App\Models\Post;

class PostsApiController extends Controller
{

    //this controller used to get all posts
    public function getPosts(){
        return Post::all();
    }



    //this controller is used to add new post
    public function addPosts(){
        //validation part
        request()->validate([
            'Title' => 'required',
            'Content' => 'required'
        ]);

        return Post::create([
            'Title' => request('Title'),
            'Content' => request('Content')
        ]);
    }
}
