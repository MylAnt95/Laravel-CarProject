@include('errors')
<p>Hello {{ $user->name }}</p>

@include('dashboard_create_post')

@foreach ($posts as $post)
    <div class="border-2 my-4">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <p>Written by {{ $post->user->name }}</p>
    </div>
@endforeach


<a href="/logout" class="relative bg-neutral-200 p-2 ">Logout</a>
