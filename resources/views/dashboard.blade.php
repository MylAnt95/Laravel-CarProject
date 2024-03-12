@include('header')

<section class="py-24 md:pt-1 flex flex-col mx-3 md:mx-10">
    <div class="titles py-5 text-center flex flex-col">
        <h1 class="text-2xl text-center">CAR FORUM</h1>
        <div class="Line w-1/3 h-0.5 bg-gray-300 self-center my-1">
        </div>
        <h2 class="text-xl font-semibold self-center py-1">POSTS</h2>
    </div>
    <div class="posts mt-3 container grid grid-cols-1 gap-5 md:grid-cols-2">
        @if ($posts->isEmpty())
            <p>No posts available.</p>
        @else
        @foreach ($posts as $post)
            <div class="chat-container bg-white rounded-3xl border-2 p-3">
                <div class="flex flex-row justify-between">
                    <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                    <a class="underline text-sm self-center ml-1"
                href="{{ route('categories_show', $post->carBrand->id) }}">#{{ $post->carBrand->name }}</a>
                </div>
                <p class="py-3 text-sm border-t-2">{{ $post->body }}</p>
                <div class="chat-bottom flex justify-between mt-auto">
                    <p class="italic text-xs text-gray-500">Written by {{ $post->user->name }}</p>
                    <p class="italic text-xs text-gray-500">{{ $post->date }}</p>
                </div>
            </div>
                
            @endforeach
        @endif
    </div>
</section>

@include('footer')
