@extends('layouts.app')
<h2 class="text-2xl text-center">Register new account</h2>
<form action="{{ route('register') }}" method="post" class="flex flex-col">
    @csrf
    <label for="name">Name</label>
    <input class="border" type="text" id="name" name="name" required>

    <label for="email">Email</label>
    <input class="border" type="email" id="email" name="email" required>

    <label for="password">Password</label>
    <input class="border" type="password" id="password" name="password" required>

    <label for="password_confirmation">Confirm Password</label>
    <input class="border" id="password_confirmation" type="password" name="password_confirmation" required>

    <button class="border mt-2" type="submit">Register</button>
</form>
