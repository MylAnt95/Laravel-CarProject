@extends('layouts.app')
<header>
    <nav class="flex justify-between bg-white shadow-md mb-10 fixed w-full md:relative">
        <div class="w-full flex justify-between">
            <div class="nav-left px-4 py-2 text-black-800 font-bold flex flex-row">
                <a class="self-center mr-1 w-full" href="/">
                    <h4 class="">Car Forum</h4>
                </a>
                <img src="{{ asset('images/car.svg') }}" alt="car logo">
            </div>
            @auth
                <div class="nav-mid hidden md:flex gap-3 px-4 py-2 text-gray-800">
                    {{-- Navigation links for logged in users --}}
                    <a href="/dashboard" class="hover:opacity-50 hover:scale-105" href="">Forum</a>
                    <div class="line-separator bg-gray-200 h-full w-0.5"></div>
                    <a href="dashboard/create-post" class="hover:opacity-50 hover:scale-105"href="">Create a post</a>
                    <div class="line-separator bg-gray-200 h-full w-0.5"></div>
                    <a class="hover:opacity-50 hover:scale-105" href="">Lorem</a>
                </div>
            @endauth

            {{-- Dropdown menu (mobile only)--}}
            <div class="relative md:hidden">
                <div class="">
                    <img class="hamburger" src={{ asset('images/hamburger.svg') }} alt="">
                </div>    
                <div class="drop-menu hidden w-full h-fit top-12 flex-col fixed inset-0 items-center justify-center bg-white shadow-lg z-10">

                    {{-- Dropmenu links --}}
                    <a href="/dashboard" class="block px-4 py-2 active:opacity-50" href="">Forum</a>
                    @auth
                        <a href="dashboard/create-post" class="block px-4 py-2 active:opacity-50"href="">Create a post</a>
                        <a class="block px-4 py-2 active:opacity-50" href="">Lorem</a>
                    @endauth
                    <div class="Line md:hidden w-full h-0.5 bg-gray-300 mt-3 mb-3">
                    </div>
                    @auth
                        <a class="block px-4 py-2 active:opacity-50" href="/profile">Profile</a>
                        <a class="block px-4 py-2 active:opacity-50 text-red-500 active:text-red-400" href="/logout">Logout</a>
                    @endauth
                    @guest
                        {{-- Show login and register links for guest users in dropmenu --}}
                        <a class="block px-4 py-2 active:opacity-50" href="/login">Login</a>
                        <a class="block px-4 py-2 active:opacity-50" href="/register">Register</a>
                    @endguest
                </div>
            </div>

            <div class="nav-right hidden md:flex flex-row gap-3 px-4 py-2 text-gray-800 self-center">
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
