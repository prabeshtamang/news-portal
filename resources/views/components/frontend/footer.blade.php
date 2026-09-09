
{{-- resources/views/components/frontend/footer.blade.php --}}

<footer class="bg-gray-900 text-gray-300">

    {{-- Main Footer --}}
    <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">

        <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-4">

            {{-- About --}}
            <div>
                <h2 class="mb-4 text-xl font-bold text-white">
                    NewsPortal
                </h2>

                <p class="text-sm leading-6 text-gray-400">
                    Stay informed with the latest news, stories, and updates
                    from Nepal and around the world.
                </p>
            </div>

            {{-- Categories --}}
            <div>
                <h3 class="mb-4 text-sm font-semibold uppercase tracking-wider text-white">
                    Categories
                </h3>

                <ul class="space-y-3 text-sm">
                    <li>
                        <a href="#" class="transition hover:text-white">
                            Politics
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-white">
                            Business
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-white">
                            Technology
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-white">
                            Sports
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Quick Links --}}
            <div>
                <h3 class="mb-4 text-sm font-semibold uppercase tracking-wider text-white">
                    Quick Links
                </h3>

                <ul class="space-y-3 text-sm">
                    <li>
                        <a href="/" class="transition hover:text-white">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-white">
                            Latest News
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-white">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="#" class="transition hover:text-white">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="mb-4 text-sm font-semibold uppercase tracking-wider text-white">
                    Contact Us
                </h3>

                <ul class="space-y-3 text-sm text-gray-400">
                    <li>
                        📍 Nepal
                    </li>

                    <li>
                        📧 info@newsportal.com
                    </li>

                    <li>
                        📞 +977 98XXXXXXXX
                    </li>
                </ul>
            </div>

        </div>

        {{-- Divider --}}
        <div class="my-10 border-t border-gray-800"></div>

        {{-- Bottom Footer --}}
        <div class="flex flex-col gap-4 text-sm md:flex-row md:items-center md:justify-between">

            <p class="text-gray-500">
                © {{ date('Y') }} NewsPortal. All rights reserved.
            </p>

            <div class="flex gap-6">
                <a href="#" class="transition hover:text-white">
                    Privacy Policy
                </a>

                <a href="#" class="transition hover:text-white">
                    Terms & Conditions
                </a>
            </div>

        </div>

    </div>

</footer>
```
