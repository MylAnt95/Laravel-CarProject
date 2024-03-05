@include('header')
<h1 class="text-2xl text-center">{{ $category->name }}</h1>
@section('categories')
    @foreach ($posts as $post)
        <div class="border-2 my-4">
            <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <p class="italic text-sm">Written by {{ $post->user->name }}</p>
        </div>
    @endforeach
    <a href="{{ route('dashboard') }}" class="underline">Back</a>
@show
