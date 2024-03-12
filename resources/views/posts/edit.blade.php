@extends('layouts.app')
@include('header')
@section('content')
    <div class="flex flex-col pt-20 px-5 md:px-24 md:pt-5">
        <h1 class="text-center text-2xl py-4">Edit Post</h1>

        <form method="POST" action="{{ route('posts.update', $post) }}" class="form md:w-1/3 md:self-center flex flex-col">
            @csrf
            @method('PUT')

            <div class="mb-4 flex flex-col">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" class="form-input">
            </div>
            @include('posts.categories')
            <div class="mb-4 flex flex-col">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-input">{{ old('body', $post->body) }}</textarea>
            </div>

            <button type="submit" class="form-btn w-44 self-end">Update</button>
        </form>
    </div>
@endsection
