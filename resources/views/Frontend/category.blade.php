<x-frontend.layout>

    <section class="container mx-auto pt-10">
        <div class="grid grid-cols-3 ">
            <div class="col-span-2">
                @foreach ($category->articles()->latest()->get() as $article)
                    <div class=" pt-4 pr-4 gap-6 mb-8">

                        {{-- Articles --}}
                        <div class="col-span-2">

                            <div class="flex gap-6 border-b pb-6">

                                {{-- Article Image --}}
                                <div class="w-2/5 overflow-hidden">
                                    <a href="">
                                        <img class="h-[200px] w-full object-cover"
                                            src="{{ asset(Storage::url($article->image)) }}" alt="{{ $article->title }}">
                                    </a>
                                </div>

                                {{-- Article Content --}}
                                <div class="w-3/5 pt-2">

                                    <a href="">
                                        <h1 class="text-lg font-semibold mb-3">
                                            {{ $article->title }}
                                        </h1>
                                    </a>

                                    <a href="">
                                        <p class="text-gray-600 leading-relaxed">
                                            {{ Str::limit(strip_tags($article->content), 200, '.....') }}
                                        </p>
                                    </a>
                                    <div>
                                        <span class="font-semibold">
                                            {{ toNepaliDate($article->created_at->format('Y-m-d')) }}
                                        </span><br>
                                        <a class="text-sm text-(--primary) pt-2" href=""><i class="fa-solid fa-hand-point-up"></i> पुरा पढ्नुहोस्</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            {{-- Advertisement --}}
            <div class="col-span-1">

                @foreach ($advertises as $advertise)
                    <div class="p-5 ">
                        <a href="{{ $advertise->banner_link }}" target="-blank">
                            <img class="w-full h-auto" src="{{ asset(Storage::url($advertise->banner_image)) }}"
                                alt="Advertisement">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

</x-frontend.layout>
