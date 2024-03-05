@include('header')

<h1 class="text-2xl text-center">CAR FORUM</h1>

<h2 class="text-xl font-semibold">POSTS</h2>

@if($posts->isEmpty())
    <p>No posts available.</p>
@else
    @foreach ($posts as $post)
        <div class="border-2 my-4">
            <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
            <a class="underline text-sm"
            href="{{ route('categories_show', $post->category->id) }}">{{ $post->category->name }}</a>
            <p>{{ $post->body }}</p>
            <p class="italic text-sm">Written by {{ $post->user->name }}</p>
            <p class="italic text-sm">{{ $post->date }}</p>
        </div>
    @endforeach
@endif

