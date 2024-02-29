@include('header')
<h1 class="text-2xl text-center">CAR FORUM</h1>

<h2 class="text-xl font-semibold">POSTS</h2>
@foreach ($posts as $post)
    <div class="border-2 my-4">
        <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <p class="italic text-sm">Written by {{ $post->user->name }}</p>
    </div>
@endforeach


{{-- <a href="/logout" class="relative bg-neutral-200 p-2 ">Logout</a> --}}
