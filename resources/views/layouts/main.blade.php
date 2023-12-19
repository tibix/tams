<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

    <!-- AlpineJS -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Lazyload CDN -->
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.7.0/dist/lazyload.min.js"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="images/favicons/site.webmanifest" />
    <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#b91c1c" />
    <meta name="msapplication-TileColor" content="#f1f1f1" />
    <meta name="theme-color" content="#ffffff" />

    <!-- PAGE TITLE -->
    <title>Banter - Home</title>
</head>

<body>
    <!-- Navigation -->
    <!--
      The navigation uses Alpine.js for both the programs dropdown and the mobile navigation menu. If you're
      not familiar with Alpine you can check out their documentation
      here: https://alpinejs.dev/start-here
    -->
    <header class="relative border-b border-gray-300/60 bg-transparent" x-data="{ mobileMenuOpen: false }">
        <nav class="mx-auto flex h-20 max-w-7xl items-center px-4 sm:px-6 lg:px-8">
            <!-- Main navbar for large screens -->
            <div class="flex w-full items-center justify-between">
                <!-- Logo-->
                <div class="flex shrink-0 items-center">
                    <a href="index.html" class="lg:hidden">
                        <img src="images/banter-icon-logo.png" class="h-9 w-auto" />
                    </a>
                    <a href="index.html" class="hidden lg:block">
                        <img src="images/banter-logo.png" class="h-9 w-auto" />
                    </a>
                </div>

                @include('components.navigation')
                @include('components.search')
                @include('components.hamburger-menu')
            </div>
        </nav>

        <!-- Mobile menu -->
        <nav class="md:hidden" aria-label="Global" id="mobile-menu" x-show="mobileMenuOpen"
            @keydown.escape.window="mobileMenuOpen = false">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <!-- Current: "bg-gray-50 text-red-700", Default: "text-gray-800 hover:bg-gray-50 hover:text-red-700 transition duration-300 ease-in-out" -->
                <a href="category.html" class="block rounded-lg bg-gray-50 px-4 py-3 font-medium text-red-700"
                    aria-current="page">Technology</a>

                <a href="category.html"
                    class="block rounded-lg px-4 py-3 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Startup</a>

                <a href="category.html"
                    class="block rounded-lg px-4 py-3 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Design</a>

                <a href="category.html"
                    class="block rounded-lg px-4 py-3 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Innovation</a>

                <a href="category.html"
                    class="block rounded-lg px-4 py-3 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">Science</a>
            </div>
            <div class="border-t border-gray-300/70 pb-3 pt-4">
                <div class="mt-2 px-6 text-xs font-medium uppercase tracking-widest text-gray-500">
                    Pages
                </div>
                <div class="mt-3 space-y-1 px-2">
                    <!-- Current: "bg-gray-50 text-red-700", Default: "text-gray-600 hover:bg-gray-50 hover:text-red-700 transition duration-300 ease-in-out" -->
                    <a href="index.html"
                        class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                        Home
                    </a>
                    <a href="category.html"
                        class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                        Post archive
                    </a>
                    <a href="post.html"
                        class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                        Post
                    </a>
                    <a href="author.html"
                        class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                        Author page
                    </a>
                    <a href="tag.html"
                        class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                        Tag page
                    </a>
                    <a href="about.html"
                        class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                        About us
                    </a>
                    <a href="contact.html"
                        class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                        Contact us
                    </a>
                    <a href="privacy-policy.html"
                        class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                        Privacy policy
                    </a>
                    <a href="404.html"
                        class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                        404 page
                    </a>
                </div>
            </div>
        </nav>
    </header>

    @include('partials._homehero')
    @include('partials._feed')
    @include('partials._featured')
    @include('components.most-read')
    @include('components.sidebar')
    @include('components.newsletter')
    @include('components.footer')
</html>
