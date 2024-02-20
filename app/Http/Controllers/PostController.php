<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $post = new Post();
        $post->name = $request->name;
        $post->href = $request->href;
        $post->content = $request->content;
        $post->status = 'Не опубликовано';
        $post->category_id = $request->category_id; // убедитесь, что вы предоставляете category_id
        $post->save();
        return redirect('/');
    }
}
