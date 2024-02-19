<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $posts = Post::where('category_id', $category->id)->get();
        $categories = Category::all();
        return view('index', ['posts' => $posts, 'categories' => $categories]);
    }
}
