<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KhabarNepal · Header</title>
    <!-- Tailwind via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body class="bg-gray-50">

    <!-- ===== HEADER ===== -->
    <header class="bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- top row: logo + right items -->
            <div class="flex items-center justify-between h-16">

                <!-- logo / brand -->
                <div class="flex items-center space-x-2">
                    <div
                        class="bg-red-700 text-white rounded-lg w-9 h-9 flex items-center justify-center text-lg shadow-sm">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <span class="text-2xl font-bold tracking-tight text-gray-800">
                        Khabar<span class="text-red-700">Nepal</span>
                    </span>
                    <span
                        class="hidden sm:inline-block text-xs font-medium text-gray-500 bg-gray-100 px-2 py-0.5 rounded-full">🇳🇵</span>
                </div>

                <!-- right side: date + search + hamburger (mobile) -->

                {{-- Search Bar --}}


                <form class="">
                    <label for="search" class="block mb-2.5 text-sm font-medium text-heading sr-only ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="search"
                            class="block w-full p-3 ps-9 bg-red-100 border border-default-medium text-heading text-black text-sm rounded-lg focus:ring-brand focus:border-brand shadow-xs placeholder:text-body"
                            placeholder="Search" required />
                        <button type="button"
                            class="absolute end-1.5 bottom-1.5 text-black bg-brand hover:bg-red-500 box-border border border-black focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded text-xs px-3 py-1.5 focus:outline-none">Search</button>
                    </div>
                </form>

            </div>

            <!-- ===== NAVIGATION (desktop) ===== -->
            <nav class="hidden sm:flex space-x-6 text-sm font-medium text-gray-600 border-t border-gray-100 py-2.5">
                <a href="#" class="text-red-700 font-semibold border-b-2 border-red-700 pb-1">Home</a>
                <a href="#" class="hover:text-red-600 transition">Politics</a>
                <a href="#" class="hover:text-red-600 transition">Business</a>
                <a href="#" class="hover:text-red-600 transition">Sports</a>
                <a href="#" class="hover:text-red-600 transition">Opinion</a>
                <a href="#" class="hover:text-red-600 transition">Entertainment</a>
                <a href="#" class="hover:text-red-600 transition">Technology</a>
                <a href="#" class="hover:text-red-600 transition">World</a>
                <a href="#" class="hover:text-red-600 transition">More <i
                        class="fas fa-chevron-down text-[10px] ml-0.5"></i></a>
            </nav>



        </div>
    </header>

</body>

</html>
