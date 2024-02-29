@extends('layouts.app')
@include('header')
@section('content')
    <div class="text-center">
        <h1 class="text-2xl">Create a Forum Post</h1>

        <form action="{{ route('dashboard.store-post') }}" method="post">
            @csrf
            <div class="mb-4">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="border" required>
            </div>
            <div class="mb-4">
                <label for="car">Car</label>
                <input type="text" name="car_brand" id="car_brand" class="border" required>
            </div>

            <div class="mb-4">
                <label for="body">Body</label>
                <textarea name="body" id="body" class="border" required></textarea>
            </div>

            <button type="submit" class="border">Create Post</button>
        </form>
    </div>
@endsection
