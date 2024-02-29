@extends('layouts.app')
@include('header')
<h1 class="text-center text-2xl py-4">LOGIN</h1>
<form action="/login" method="post">
    @csrf
    <div class="flex flex-col">
        <label for="email">Email:</label>
        <input name="email" id="email" type="email" class="border" />
    </div>
    <div class="flex flex-col">
        <label for="password">Password:</label>
        <input name="password" id="password" type="password" class="border" />
    </div>
    <button type="submit" class="border p-2">Login</button>
    <a href="{{ route('register') }}" class="border p-2">Create a new account</a>
</form>
