@include('errors')
@extends('layouts.app')
@include('header')
<div class="flex justify-center">
    <div class="w-96 h-fit sticky top-0 pr-10">
        <h2 class="text-2xl font-bold">Forum talk</h2>
        @foreach ($posts as $post)
            <div class="chat-container bg-white rounded-3xl border-2 my-10 p-3">
                <h2 class="text-lg font-semibold">{{ $post->title }}</h2>
                <p class="py-3 text-sm border-t-2">{{ $post->body }}</p>
                <div class="chat-bottom flex justify-between">
                    <p class="italic text-xs text-gray-500">Written by {{ $post->user->name }}</p>
                    <p class="italic text-xs text-gray-500">{{ $post->date }}</p>
                </div>
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
                        most special one could well be the CUPRA Terramar. After all, it's likely to become the Spanish brand's
                        best-seller and one of this year's commercial successes.
        
                        Think it's an electric SUV? Not at all. On the contrary, it's the last CUPRA to come out with combustion
                        engines
                        (light hybridisation, it goes without saying, to obtain the "Eco" certification in Spain), although it
                        will
                        also
                        have rechargeable hybrid versions that will probably offer around a 60 miles of electric range.</p>
                    <a href="https://uk.motor1.com/news/709991/cupra-terramar-suv-2024-rendering/" class="underline">Read More
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
                    is officially calling it quits. According to Bloomberg, Apple has killed its electric car plans to focus
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
        <div class="news flex flex-row">           
            <div class="mr-4">
                <h3 class="font-bold">Toyota Built An Engine That Can Capture Carbon From The Air</h3>
                <p class="overflow-auto max-h-52">Toyota tested the air filter system on the hydrogen-burning engine found
                    in its GR Corolla prototype.
    
                    Toyota's noble effort to save the internal combustion engine is producing some interesting new
                    technology. The automaker has been testing a filter system that can actually capture carbon dioxide from
                    the atmosphere. But it has a long way to go before it's ready for mainstream production.
    
                    Toyota installed the tech on the hydrogen combustion engine it's been testing in the GR Corolla race
                    car. The filter system works by capturing the carbon dioxide that's then released into a fluid using the
                    engine's own heat, and it doesn't require additional energy.
    
                    Sadly, it'll be a while before this tech on your next Prius or Tacoma. The filter collects too little
                    carbon to offset the average gasoline engine and needs to be constantly replaced. The race car only
                    filtered out about 20 grams of carbon dioxide over 20 laps, which isn't very much. For context, a
                    gasoline car can emit nearly 8,900 grams of CO2 per gallon consumed.</p>
                <a href="https://www.motor1.com/news/710347/toyota-combustion-engine-filter-co2/" class="underline">Read
                    More by
                    clicking
                    here</a>
                    
            </div>
            <img src={{ asset('images/toyota-carbon-filter.webp') }} alt="Apple Logo" class="w-1/2 rounded-lg" />
        </div>
    </div>
</div>

</div>
