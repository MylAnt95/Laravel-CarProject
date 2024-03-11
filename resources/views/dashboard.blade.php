@include('header')

<section class="pt-24">
    <h1 class="text-2xl text-center">CAR FORUM</h1>
    
    <h2 class="text-xl font-semibold">POSTS</h2>
    @if ($posts->isEmpty())
        <p>No posts available.</p>
    @else
        @foreach ($posts as $post)
            <div class="chat-container bg-white rounded-3xl border-2 my-10 p-3">
                <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                <a class="underline text-sm"
                    href="{{ route('categories_show', $post->carBrand->id) }}">{{ $post->carBrand->name }}</a>
                <p>{{ $post->body }}</p>
                <p class="italic text-sm">Written by {{ $post->user->name }}</p>
                <p class="italic text-sm">{{ $post->date }}</p>
            </div>
            @if (Auth::id() === $post->user_id)
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit</a>
            @endif
        @endforeach
    @endif
</section>

@include('footer')
