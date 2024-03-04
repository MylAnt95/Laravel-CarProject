@include('errors')
@extends('layouts.app')
@include('header')
<div class="flex gap-10 mx-10 my-4">
    <div class="w-96 h-fit sticky top-0">
        <h2 class="text-2xl text-center">Forum talk</h2>
        @foreach ($posts as $post)
            <div class="border-2 my-4 p-2">
                <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
                <p class="italic text-sm">Written by {{ $post->user->name }}</p>
                <p class="italic text-sm">{{ $post->date }}</p>
            </div>
        @endforeach
    </div>
    <div class="w-2/3 border-l-2 px-10 border-gray-300 flex flex-column flex-wrap gap-10">
        <h2 class="text-2xl font-bold">News</h2>
        <div class="news-top flex flex-row">
            <div class="mr-5">
                <h3 class="font-bold">Cupra Terramar 2024: the most eagerly awaited SUV is about to arrive</h3>
                <p class="overflow-auto max-h-52">Here in the editorial office we know that there are plenty of new SUVs
                    waiting to be unveiled in 2024,
                    but
                    the
                    most special one could well be the CUPRA Terramar. After all, it's likely to become the Spanish
                    brand's
                    best-seller and one of this year's commercial successes.

                    Think it's an electric SUV? Not at all. On the contrary, it's the last CUPRA to come out with
                    combustion
                    engines
                    (light hybridisation, it goes without saying, to obtain the "Eco" certification in Spain), although
                    it
                    will
                    also
                    have rechargeable hybrid versions that will probably offer around a 60 miles of electric range.</p>
                <a href="https://uk.motor1.com/news/709991/cupra-terramar-suv-2024-rendering/" class="underline">Read
                    More
                    by
                    clicking here</a>
            </div>
            <img src={{ asset('images/cupra-terramar.jpg') }} alt="Cupra Terramar" class="w-1/2 rounded-lg" />
        </div>
        <div class="news flex flex-row">
            <img src={{ asset('images/apple-car.webp') }} alt="Apple Logo" class="w-1/2 rounded-lg" />
            <div class="ml-5">
                <h3 class="font-bold">The Apple Car Is Reportedly Dead</h3>
                <p class="overflow-auto max-h-52">After a decade of work, the project has been killed, according to
                    Bloomberg.
                    Apple has been working on its driverless car—Project Titan—for more than a decade. But now, the tech
                    giant
                    is officially calling it quits. According to Bloomberg, Apple has killed its electric car plans to
                    focus
                    on
                    generative artificial intelligence instead.

                    More than 2,000 employees assigned to the project were told Tuesday that it would be discontinued,
                    unnamed
                    sources told Bloomberg. The announcement was reportedly made by Apple Chief Operating Officer Jeff
                    Williams
                    and Vice President in charge of the project, Kevin Lynch. A number of those employees will move to
                    Apple's
                    AI team, but others will face layoffs.

                    “Apple made the disclosure internally Tuesday, surprising the nearly 2,000 employees working on the
                    project,” the report says.</p>
                <a href="https://www.motor1.com/news/710351/apple-car-dead/" class="underline">Read More by
                    clicking
                    here</a>

            </div>

        </div>

    </div>
</div>

</div>
