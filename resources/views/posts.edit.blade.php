@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea id="body" name="body" class="form-control">{{ old('body', $post->body) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
@endsection
