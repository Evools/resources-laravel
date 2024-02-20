<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function filter(Category $category)
    {
        $posts = Post::where('category_id', $category->id)
            ->where('status', 'Опубликовано')
            ->get();
        $categories = Category::all();
        return view('index', ['posts' => $posts, 'categories' => $categories]);
    }
}
