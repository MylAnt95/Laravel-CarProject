@extends('layouts.app')
@include('header')
@section('content')
    <div class="flex flex-col pt-20 px-5 md:px-24 md:pt-5">
        <h1 class="text-center text-2xl py-4">Create a Forum Post</h1>

        <form action="{{ route('dashboard.store-post') }}" method="post" class="form md:w-1/3 md:self-center flex flex-col">
            @csrf
            <div class="mb-4 flex flex-col">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-input" required>
            </div>
            @include('posts.categories')
            <div class="mb-4 flex flex-col">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="form-input" required></textarea>
            </div>

            <button type="submit" class="form-btn w-44 self-end">Post</button>
        </form>
    </div>
@endsection
