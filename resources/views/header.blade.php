@extends('layouts.app')
<header>
    <nav class="flex justify-between bg-white shadow-md mb-10">
        <div class="w-full flex justify-between">
            <div class="nav-left px-4 py-2 text-black-800 font-bold flex flex-row">
                <a class="self-center mr-1" href="/">
                    <h4>Car Forum</h4>
                </a>
                <img src="{{ asset('images/car.svg') }}" alt="car logo">
            </div>
            @auth
                <div class="nav-mid flex gap-3 px-4 py-2 text-gray-800">
                    {{-- Navigation links for logged in users --}}
                    <a href="/dashboard" class="hover:opacity-50 hover:scale-105" href="">Forum</a>
                    <div class="line-separator bg-gray-200 h-full w-0.5"></div>
                    <a href="dashboard/create-post" class="hover:opacity-50 hover:scale-105"href="">Create a post</a>
                    <div class="line-separator bg-gray-200 h-full w-0.5"></div>
                    <a class="hover:opacity-50 hover:scale-105" href="">Lorem</a>
                </div>
            @endauth
            <div class="nav-right flex flex-row gap-3 px-4 py-2 text-gray-800 self-center">
                {{-- User authentication links --}}
                @guest
                    {{-- Show login and register links for guest users &  --}}
                    <a href="/dashboard" class="border-r-2 pr-3 hover:opacity-50 hover:scale-105" href="">Forum</a>
                    <a class="border-r-2 pr-3 hover:opacity-50 hover:scale-105" href="/login">Login</a>
                    <a class="hover:opacity-50 hover:scale-105" href="/register">Register</a>
                @endguest
                @auth
                    <a class="hover:opacity-50 hover:scale-105" href="/profile">Profile</a>
                    <div class="line-separator bg-gray-200 h-full w-0.5"></div>
                    <a class="hover:opacity-50 hover:scale-105 text-red-500 hover:text-red-400" href="/logout">Logout</a>
                @endauth
            </div>
        </div>
    </nav>
</header>
