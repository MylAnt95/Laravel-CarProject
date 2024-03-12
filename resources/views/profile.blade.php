@extends('layouts.app')
@include('header')

<div class="h-full pt-10">
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
    <section class="user-posts flex justify-center mx-3 md:mx-10">   
        @if ($posts->isEmpty())
            <p>No posts available.</p>
        @else
        <div class="posts mt-3 container grid grid-cols-1 gap-5 md:grid-cols-2">
            @foreach ($posts as $post)
                <div class="chat-container bg-white rounded-3xl border-2 p-3">
                    <div class="flex flex-row justify-between">
                        <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                        <a class="underline text-sm self-center ml-1"
                    href="{{ route('categories_show', $post->carBrand->id) }}">#{{ $post->carBrand->name }}</a>
                    </div>
                    <p class="py-3 text-sm border-t-2">{{ $post->body }}</p>
                    <div class="chat-bottom flex justify-between mt-auto">
                        <p class="italic text-xs text-gray-500 self-end">{{ $post->date }}</p>
                        <div class="edit-delete flex gap-4">
                            @if (Auth::id() === $post->user_id)
                                <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary delete-txt text-yellow-500 active:text-yellow-400 hover:text-yellow-400 hover:scale-105">Edit</a>
                            @endif
                            <form method="post" class="m-0" action="{{ route('dashboard.delete-post', $post) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary text-red-500 active:text-red-400 hover:text-red-400 hover:scale-105">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                    {{-- @if (Auth::id() === $post->user_id)
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit</a>
                    @endif --}}
                @endforeach
            @endif
        </div>
            </section>
        </div>
@include('footer')
