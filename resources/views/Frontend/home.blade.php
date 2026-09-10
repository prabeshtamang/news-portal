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
                    <img class="h-[800px] w-full" src="{{ asset(Storage::url($article->image)) }}"
                        alt="news_image">

                </a>
            </div>
        @endforeach
    </div>
</x-frontend.layout>
