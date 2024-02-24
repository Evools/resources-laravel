<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::all();
        return view('admin.index', ['categories' => $categories, 'posts' => $posts]);
    }

    public function viewResource($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return abort(404);
        }
        $category = Category::find($post->category_id);
        if (!$category) {
            return abort(404);
        }
        $categories = Category::all();
        return view('admin.view-posts', ['post' => $post, 'categories' => $categories]);
    }

    public function savePost(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'content' => 'required|min:3|max:255',
            'href' => 'required',
        ]);

        $post = Post::findOrFail($request->input('post_id'));

        $post->name = $request->input('name');
        $post->content = $request->input('content');
        $post->href = $request->input('href');
        $post->category_id = $request->input('category_id');
        $post->status = $request->input('status'); // Assuming status is also being updated

        $post->save();

        return redirect()->route('admin');
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return abort(404);
        }
        $post->delete();
        return redirect()->route('admin');
    }

    public function addResource()
    {
        $categories = Category::all();
        $post = Post::all();
        return view('admin.add-resources', ['post' => $post, 'categories' => $categories]);
    }

}
