@extends('layouts.app')
@include('header')
<div class="flex flex-col pt-24 px-10 md:pt-5 md:px-0">
    <h2 class="text-center text-2xl py-4">Register new account</h2>
    <form action="{{ route('register') }}" method="post" class="flex flex-col form md:w-1/3 md:self-center">
        @csrf
        <label for="name">Name</label>
        <input class="form-input mb-4" type="text" id="name" name="name" required>
    
        <label for="email">Email</label>
        <input class="form-input mb-4" type="email" id="email" name="email" required>
    
        <label for="password">Password</label>
        <input class="form-input mb-4" type="password" id="password" name="password" required>
    
        <label for="password_confirmation">Confirm Password</label>
        <input class="form-input mb-4" id="password_confirmation" type="password" name="password_confirmation" required>
    
        <button class="form-btn" type="submit">Register</button>
    </form>
</div>
