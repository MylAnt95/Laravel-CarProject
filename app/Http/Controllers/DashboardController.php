<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\CarBrand;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = Auth::user();
        $posts = Post::get();

        return view('dashboard', ['user' => $user, 'posts' => $posts]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'car_brand' => 'required',
            'body' => 'required',
        ]);

        $category = CarBrand::find($request->car_brand);
        if (!$category) {
            return redirect()->back()->withErrors(['car_brand' => 'Invalid car brand']);
        }

        $post = new Post;
        $post->user_id = $request->user()->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->car_brand_id = $category->id;
        $post->date = now();
        $post->save();

        return redirect()->route('dashboard');
    }


    public function createPost()
    {
        $categories = CarBrand::createPosts();
        return view('dashboard_create_post', compact('categories'));
    }

    public function showCategory(CarBrand $category)
    {
        $posts = $category->posts;
        return view('categories_show', compact('posts', 'category'));
    }

    public function index()
    {
        $posts = Post::get();
        return view('index', ['posts' => $posts]);
    }

    public function profile()
    {
        $user = Auth::user();
        $posts = auth()->user()->posts;
        return view('profile', ['user' => $user, 'posts' => $posts]);
    }

    public function deletePost(Post $post)
    {
        $post->delete();
        return redirect()->route('profile');
    }
}
