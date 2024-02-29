@extends('layouts.app')
<header>
    <nav class="flex justify-between bg-white shadow-md mb-4">
        <div class="w-full flex justify-between">
            <div class="nav-left px-4 py-2 text-black-800 font-bold">
                <a href="/">
                    <h4>Car Project</h4>
                </a>
            </div>
            @auth
                <div class="nav-mid flex gap-3 px-4 py-2 text-gray-800">
                    {{-- Navigation links for logged in users --}}
                    <a href="/dashboard" class="border-r-2 pr-3 hover:opacity-50 hover:scale-105" href="">Forum</a>
                    <a href="dashboard/create-post" class="border-r-2 pr-3 hover:opacity-50 hover:scale-105"
                        href="">Create a post</a>
                    <a class="hover:opacity-50 hover:scale-105" href="">Lorem</a>
                </div>
            @endauth
            <div class="nav-right flex flex-row gap-3 px-4 py-2 text-gray-800">
                {{-- User authentication links --}}
                @guest
                    {{-- Show login and register links for guest users &  --}}
                    <a class="border-r-2 pr-3 hover:opacity-50 hover:scale-105" href="/login">Login</a>
                    <a class="hover:opacity-50 hover:scale-105" href="/register">Register</a>
                @endguest
                @auth
                    <a class="hover:opacity-50 hover:scale-105" href="/logout">Logout</a>
                @endauth
            </div>
        </div>
    </nav>
</header>
