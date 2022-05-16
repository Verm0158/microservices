<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        return Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
    }
}
