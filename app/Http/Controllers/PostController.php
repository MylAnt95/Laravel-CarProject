<?php

namespace App\Http\Controllers;

use App\Models\CarBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
    public function edit(Post $post)
    {
        if (Auth::id() !== $post->user_id) {
            abort(403, 'Unauthorized action');
        }
        $categories = CarBrand::all();

        return view('posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        if (Auth::id() !== $post->user_id) {
            abort(403, "Unauthorized access");
        }

        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'car_brand' => 'required',

        ]);

        $category = CarBrand::find($request->car_brand);

        $post->title = $request->title;
        $post->body = $request->body;
        $post->car_brand_id = $category->id;
        $post->save();

        return redirect()->route('dashboard');
    }
}
