<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        $post = new Post;
        $post->user_id = $request->user()->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->date = now();
        $post->save();

        return redirect()->route('dashboard');
    }


    public function createPost()
    {
        return view('dashboard_create_post');
    }

    public function index()
    {
        $posts = Post::get();
        return view('index', ['posts' => $posts]);
    }

    public function deletePost(Post $post)
    {
        $post->delete();

        return redirect()->route('dashboard');
    }
}
