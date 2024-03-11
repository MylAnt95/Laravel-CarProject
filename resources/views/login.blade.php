@extends('layouts.app')
@include('header')
<div class="login-container flex flex-col pt-20 px-10 md:px-24 md:pt-5">
    <h1 class="text-center text-2xl py-4">LOGIN</h1>
    <form action="login" method="post" class="form md:w-1/3 md:self-center">
        @csrf
        <div class="flex flex-col mb-4">
            <label for="email">Email:</label>
            <input name="email" id="email" type="email" class="form-input" />
        </div>
        <div class="flex flex-col mb-4">
            <label for="password">Password:</label>
            <input name="password" id="password" type="password" class="form-input" />
        </div>
        <div class="flex flex-col sm:flex-row">
            <button type="submit" class="form-btn">Login</button>
            <a href="{{ route('register') }}" class="p-2 hover:text-blue-600">Create a new account</a>
        </div>
    </form>
</div>
