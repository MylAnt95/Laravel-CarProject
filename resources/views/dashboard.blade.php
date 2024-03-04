@include('header')

<h1 class="text-2xl text-center">CAR FORUM</h1>

<h2 class="text-xl font-semibold">POSTS</h2>

@if ($posts->isEmpty())
    <p>No posts available.</p>
@else
    @foreach ($posts as $post)
        <div class="border-2 my-4">
            <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
            <a class="underline text-sm"
                href="{{ route('categories_show', $post->carBrand->id) }}">{{ $post->carBrand->name }}</a>
            <p>{{ $post->body }}</p>
            <p class="italic text-sm">Written by {{ $post->user->name }}</p>
            <p class="italic text-sm">{{ $post->date }}</p>
        </div>

        <form method="post" action="{{ route('dashboard.delete-post', $post) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach
@endif
