<x-frontend.layout title="Home">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Welcome to the News Portal</h1>
        <p class="text-lg text-gray-700">Stay updated with the latest news and articles.</p>
    </div>

    <div class="container ">
        @foreach ($latest_article as $article)
            <div class="pb-6 shadow-md hover:shadow-lg m-2 p-2">
                <h1 class="text-4xl font-bold pb-4">
                    {{ $article->title }}
                </h1>
                <a href="">
                    <img class="h-[800px] w-full" src="{{ asset(Storage::url($article->image)) }}" alt="news_image">

                </a>
            </div>
        @endforeach
    </div>


    <section class="container ">
        <div>
            @foreach ($categories as $category)
                <div>
                    <h1 class="text-4xl font-bold text-(--primary) pt-4">
                        {{ $category->title }}
                    </h1>
                    <div class="">
                        <img class="h-[20px] " src="https://jawaaf.com/frontend/images/redline.png" alt="">
                    </div>
                </div>
                @php
                    $latest_cat_art = $category->articles()->where('status', true)->latest()->take(1)->get();
                    $other_article = $category->articles()->where('status', true)->latest()->skip(1)->take(4)->get();
                @endphp


                <div class="grid grid-cols-5 shadow-md pt-4">
                    <div class="col-span-3 m-2 object-cover">
                        @foreach ($latest_cat_art as $latest_art)
                            <img class="h-[400px] w-full"
                                src="{{asset(Storage::url($latest_art->image))}}" alt="cat_img">
                            <h2 class="text-3xl font-bold pt-2">{{$latest_art->title}}</h2>
                        @endforeach
                    </div>


                    <div class="col-span-2 m-4">
                        @foreach ($other_article as $article)
                            <div class="  justify-center flex gap-4 shadow-xl pt-4 col-span-4">
                                <div class="w-[150px] h-[80px] overflow-hidden shrink-0">
                                    <img class="w-full h-full object-cover rounded-l-md"
                                        src="{{ asset(Storage::url($article->image)) }}" alt="">
                                </div>
                                <div class="pt-4 col-span-3">
                                    <h3 class="font-semibold">{{ $article->title }}</h3>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            @endforeach
        </div>




    </section>
</x-frontend.layout>
