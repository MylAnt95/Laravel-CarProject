@extends('layouts.app')
@include('header')


<section class="profile flex justify-center">
    <div class="profile-container flex items-center justify-center flex-col">
        <div class="profile-img-container overflow-hidden border-2 shadow-lg border-black rounded-full w-40 h-40">
            {{-- TODO: Add upload code --}}
            <img src="" class="object-cover w-full h-full text-center" alt="Profile img">
        </div>
        <div class="profile-user-info">
            <p class="text-xl text-center m-4">{{ $user['name'] }}</p>
            <p class="text-xl text-center m-0">{{ $user['email'] }}</p>
        </div>
    </div>
</section>
<div class="line bg-gray-300 h-px w-full mt-4 mb-4"></div>
<section class="user-posts flex justify-center">
    @if ($posts->isEmpty())
        <p>No posts available.</p>
    @else
        @foreach ($posts as $post)
            <div class="border-2 my-4">
                <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                <a class="underline text-sm"
                    href="{{ route('categories_show', $post->CarBrand->id) }}">{{ $post->CarBrand->name }}</a>
                <p>{{ $post->body }}</p>
                <p class="italic text-sm">Written by {{ $post->user->name }}</p>
                <p class="italic text-sm">{{ $post->date }}</p>
            </div>

            <form method="post" action="{{ route('dashboard.delete-post', $post) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        @endforeach
    @endif
</section>
@include('footer')
