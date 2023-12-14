<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{asset('css/main.css')}}" />

    <!-- AlpineJS -->
    <script
      defer
      src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>

    <!-- Lazyload CDN -->
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.7.0/dist/lazyload.min.js"></script>

    <!-- Favicons -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="images/favicons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/favicons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="images/favicons/favicon-16x16.png"
    />
    <link rel="manifest" href="images/favicons/site.webmanifest" />
    <link
      rel="mask-icon"
      href="images/favicons/safari-pinned-tab.svg"
      color="#b91c1c"
    />
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
    <header
      class="relative border-b border-gray-300/60 bg-transparent"
      x-data="{ mobileMenuOpen: false }"
    >
      <nav
        class="mx-auto flex h-20 max-w-7xl items-center px-4 sm:px-6 lg:px-8"
      >
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

          <!-- Navigation for large screens -->
          <div
            class="ml-6 hidden items-center justify-between text-xl md:flex md:space-x-0.5 md:text-base lg:space-x-2"
          >
            <!-- Current: "text-red-700", Default: "text-gray-800 hover:text-red-700 transition duration-300 ease-in-out" -->
            <a
              href="category.html"
              class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700"
            >
              Technology
            </a>
            <a
              href="category.html"
              class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700"
            >
              Startup
            </a>
            <a
              href="category.html"
              class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700"
            >
              Design
            </a>
            <a
              href="category.html"
              class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700"
            >
              Innovation
            </a>

            <!-- Template pages dropdown container -->
            <div class="relative" x-data="{ open: false }">
              <!-- Pages dropdown button -->
              <button
                type="button"
                class="group flex items-center px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700"
                @click="open = true"
              >
                <span :class="{'text-red-700': open}">Pages</span>

                <!-- Heroicon name: solid/chevron-down -->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="ml-2 h-5 w-5 transform text-gray-600 duration-300 group-hover:text-red-700"
                  :class="{'rotate-180 text-red-700': open}"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  />
                </svg>
              </button>

              <!-- Pages dropdown -->
              <div
                style="display: none"
                class="absolute right-0 z-20 mt-3 w-52 space-y-1 rounded-xl bg-white p-2.5 outline-none drop-shadow filter focus:outline-none"
                x-show.transition="open"
                @click.away="open = false"
              >
                <a
                  href="index.html"
                  class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
                >
                  Home
                </a>
                <a
                  href="category.html"
                  class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
                >
                  Category page
                </a>
                <a
                  href="post.html"
                  class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
                >
                  Post
                </a>
                <a
                  href="author.html"
                  class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
                >
                  Author page
                </a>
                <a
                  href="tag.html"
                  class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
                >
                  Tag page
                </a>
                <a
                  href="about.html"
                  class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
                >
                  About us
                </a>
                <a
                  href="contact.html"
                  class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
                >
                  Contact us
                </a>
                <a
                  href="privacy-policy.html"
                  class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
                >
                  Privacy policy
                </a>
                <a
                  href="404.html"
                  class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
                >
                  404 page
                </a>
              </div>
            </div>
          </div>

          <!-- Search -->
          <div class="relative ml-6 h-10 w-full max-w-xxs rounded-3xl">
            <form class="group rounded-3xl transition duration-300 ease-in-out">
              <div class="absolute inset-y-0 left-3 flex items-center">
                <!-- Heroicon name: solid/search -->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 text-gray-400"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd"
                  />
                </svg>
              </div>

              <input
                type="email"
                class="h-10 w-full rounded-3xl border border-gray-200 bg-white px-10 py-3 text-sm leading-5 text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-red-100"
                required
                placeholder="Search..."
                ,
                autocomplete="email"
              />
            </form>
          </div>

          <!-- Hamburger menu button -->
          <button
            class="group relative ml-6 flex cursor-pointer items-center justify-center rounded-xl bg-gray-50 p-3 transition duration-300 ease-in-out hover:bg-gray-100 focus:outline-none md:hidden"
            aria-label="Toggle Navigation"
            @click="mobileMenuOpen = !mobileMenuOpen"
          >
            <span
              class="relative h-3.5 w-4 transform transition duration-500 ease-in-out"
            >
              <span
                class="absolute block h-0.5 rotate-0 transform rounded-full bg-gray-600 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900"
                :class="mobileMenuOpen ? 'w-0 top-1.5 left-1/2': 'top-0 left-0 w-full'"
              ></span>
              <span
                class="absolute left-0 top-1.5 block h-0.5 w-full transform rounded-full bg-gray-600 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900"
                :class="mobileMenuOpen ? 'rotate-45': 'rotate-0'"
              ></span>
              <span
                class="absolute left-0 top-1.5 block h-0.5 w-full transform rounded-full bg-gray-600 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900"
                :class="mobileMenuOpen ? '-rotate-45': 'rotate-0'"
              ></span>
              <span
                class="absolute block h-0.5 rotate-0 transform rounded-full bg-gray-600 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900"
                :class="mobileMenuOpen ? 'top-1.5 left-1/2 w-0': 'left-0 top-3 w-full'"
              ></span>
            </span>
          </button>
        </div>
      </nav>

      <!-- Mobile menu -->
      <nav
        class="md:hidden"
        aria-label="Global"
        id="mobile-menu"
        x-show="mobileMenuOpen"
        @keydown.escape.window="mobileMenuOpen = false"
      >
        <div class="space-y-1 px-2 pb-3 pt-2">
          <!-- Current: "bg-gray-50 text-red-700", Default: "text-gray-800 hover:bg-gray-50 hover:text-red-700 transition duration-300 ease-in-out" -->
          <a
            href="category.html"
            class="block rounded-lg bg-gray-50 px-4 py-3 font-medium text-red-700"
            aria-current="page"
            >Technology</a
          >

          <a
            href="category.html"
            class="block rounded-lg px-4 py-3 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
            >Startup</a
          >

          <a
            href="category.html"
            class="block rounded-lg px-4 py-3 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
            >Design</a
          >

          <a
            href="category.html"
            class="block rounded-lg px-4 py-3 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
            >Innovation</a
          >

          <a
            href="category.html"
            class="block rounded-lg px-4 py-3 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
            >Science</a
          >
        </div>
        <div class="border-t border-gray-300/70 pb-3 pt-4">
          <div
            class="mt-2 px-6 text-xs font-medium uppercase tracking-widest text-gray-500"
          >
            Pages
          </div>
          <div class="mt-3 space-y-1 px-2">
            <!-- Current: "bg-gray-50 text-red-700", Default: "text-gray-600 hover:bg-gray-50 hover:text-red-700 transition duration-300 ease-in-out" -->
            <a
              href="index.html"
              class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
            >
              Home
            </a>
            <a
              href="category.html"
              class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
            >
              Post archive
            </a>
            <a
              href="post.html"
              class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
            >
              Post
            </a>
            <a
              href="author.html"
              class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
            >
              Author page
            </a>
            <a
              href="tag.html"
              class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
            >
              Tag page
            </a>
            <a
              href="about.html"
              class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
            >
              About us
            </a>
            <a
              href="contact.html"
              class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
            >
              Contact us
            </a>
            <a
              href="privacy-policy.html"
              class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
            >
              Privacy policy
            </a>
            <a
              href="404.html"
              class="block rounded-lg px-4 py-2 font-medium text-gray-600 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700"
            >
              404 page
            </a>
          </div>
        </div>
      </nav>
    </header>

    <!-- Home Hero-->
    <section class="bg-gray-50 pt-12 sm:pt-16 lg:pt-20">
      <div
        class="mx-auto max-w-2xl px-4 sm:px-6 lg:flex lg:max-w-screen-2xl lg:items-start lg:px-8"
      >
        <!-- Featured Article-->
        <article class="relative lg:sticky lg:top-8 lg:w-1/2">
          <!-- Image -->
          <a
            href="post.html"
            class="group aspect-h-9 aspect-w-16 relative z-10 block animate-pulse overflow-hidden rounded-2xl bg-gray-100"
          >
            <img
              class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
              data-src="images/featured-article-01.jpeg"
            />
          </a>

          <!-- Content -->
          <div class="mt-6 md:align-middle">
            <a
              href="category.html"
              class="transition-color relative text-sm font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
              >Technology</a
            >
            <a href="post.html" class="group mt-3 block">
              <h2
                class="text-3xl font-medium tracking-normal text-gray-900 decoration-gray-800 decoration-3 transition duration-300 ease-in-out group-hover:underline md:tracking-tight lg:text-4xl lg:leading-tight"
              >
                Apple to Turn IPhones Into Payment Terminals in Fintech Push
              </h2>
              <div>
                <p class="mt-4 text-base leading-loose text-gray-600">
                  Apple Inc is introducing a new feature that will allow
                  businesses to accept credit card and digital payments with
                  just a tap on their iPhones, bypassing hardware systems such
                  as Block Inc's Square terminals.
                </p>
              </div>
            </a>

            <!-- Author -->
            <div class="mt-4 flex items-center sm:mt-8">
              <a
                href="author.html"
                class="h-10 w-10 animate-pulse rounded-xl bg-gray-50"
              >
                <img
                  data-src="images/author-01.jpeg"
                  class="lazy h-full w-full rounded-xl object-cover object-center opacity-0 transition duration-300 ease-in-out"
                />
              </a>
              <div class="ml-3">
                <a
                  href="author.html"
                  class="text-sm font-medium text-gray-800 hover:underline"
                >
                  Mark Jack
                </a>
                <p class="text-sm text-gray-500">
                  <time datetime="2021-12-16">Dec 16 2021</time>
                  <span aria-hidden="true"> &middot; </span>
                  <span> 6 min read </span>
                </p>
              </div>
            </div>
          </div>
        </article>

        <!-- Recent Articles-->
        <div class="mt-12 sm:mt-16 lg:ml-12 lg:mt-0 lg:w-1/2 xl:ml-16">
          <h3
            class="relative border-b border-gray-300/70 pb-2.5 text-2xl font-medium text-gray-900 before:absolute before:-bottom-px before:left-0 before:h-px before:w-24 before:bg-red-600 before:content-['']"
          >
            Recent stories
          </h3>

          <!-- Articles Container -->
          <div class="grid lg:grid-cols-2 lg:gap-x-5 xl:grid-cols-1">
            <!-- 1st Article -->
            <article
              class="py-8 sm:flex lg:flex-col xl:flex-row xl:items-center"
            >
              <!-- Image -->
              <a
                href="post.html"
                class="order-2 w-full sm:w-2/5 lg:order-1 lg:w-full xl:w-2/5"
              >
                <div
                  class="group aspect-h-9 aspect-w-16 relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/recent-01.jpeg"
                    class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                  />
                </div>
              </a>

              <!-- Content -->
              <div
                class="order-1 mt-5 w-full px-2 sm:mt-0 sm:max-w-sm sm:pl-0 sm:pr-5 lg:order-2 lg:mt-4 xl:ml-5 xl:mt-0 xl:flex-1"
              >
                <a
                  href="category.html"
                  class="transition-color text-xs font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                >
                  Economic outlook
                </a>

                <a href="post.html">
                  <h3
                    class="mt-2 text-xl font-medium leading-normal tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                  >
                    Prepare to Shell Out for Warehouse Space -- If You Can Find
                    It
                  </h3>
                </a>

                <!-- Author -->
                <div class="mt-4 flex items-center justify-between">
                  <!-- Author meta -->
                  <div class="flex items-center justify-center">
                    <a
                      href="author.html"
                      class="mr-3 animate-pulse rounded-lg bg-gray-50"
                    >
                      <img
                        class="lazy h-6 w-6 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out"
                        data-src="images/author-02.jpeg"
                        alt="Author 01"
                      />
                    </a>
                    <div class="text-sm">
                      <span class="text-gray-500">By </span>
                      <a
                        class="font-medium text-gray-700 hover:underline"
                        href="author.html"
                        >Taylor Adams</a
                      >
                      <span class="text-gray-500 lg:hidden xl:inline-block">
                        · Nov 2, 2020</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <!-- 2nd Article -->
            <article
              class="border-t border-gray-300/70 py-8 sm:flex lg:flex-col lg:border-t-0 xl:flex-row xl:items-center xl:border-t"
            >
              <!-- Image -->
              <a
                href="post.html"
                class="order-2 w-full sm:w-2/5 lg:order-1 lg:w-full xl:w-2/5"
              >
                <div
                  class="group aspect-h-9 aspect-w-16 relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/recent-02.jpeg"
                    class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                  />
                </div>
              </a>

              <!-- Content -->
              <div
                class="order-1 mt-5 w-full px-2 sm:mt-0 sm:max-w-sm sm:pl-0 sm:pr-5 lg:order-2 lg:mt-4 xl:ml-5 xl:mt-0 xl:flex-1"
              >
                <a
                  href="category.html"
                  class="transition-color text-xs font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                >
                  Technology
                </a>

                <a href="post.html">
                  <h3
                    class="mt-2 text-xl font-medium leading-normal tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                  >
                    Is Firefox Okay?
                  </h3>
                </a>

                <!-- Author -->
                <div class="mt-4 flex items-center justify-between">
                  <!-- Author meta -->
                  <div class="flex items-center justify-center">
                    <a
                      href="author.html"
                      class="mr-3 animate-pulse rounded-lg bg-gray-50"
                    >
                      <img
                        class="lazy h-6 w-6 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out"
                        data-src="images/author-03.jpeg"
                        alt="Author 01"
                      />
                    </a>
                    <div class="text-sm">
                      <span class="text-gray-500">By </span>
                      <a
                        class="font-medium text-gray-700 hover:underline"
                        href="author.html"
                        >Matt Burgess</a
                      >
                      <span class="text-gray-500 lg:hidden xl:inline-block">
                        · Feb 2, 2022</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <!-- 3rd Article -->
            <article
              class="border-t border-gray-300/70 py-8 sm:flex lg:flex-col xl:flex-row xl:items-center"
            >
              <!-- Image -->
              <a
                href="post.html"
                class="order-2 w-full sm:w-2/5 lg:order-1 lg:w-full xl:w-2/5"
              >
                <div
                  class="group aspect-h-9 aspect-w-16 relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/recent-03.jpeg"
                    class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                  />
                </div>
              </a>

              <!-- Content -->
              <div
                class="order-1 mt-5 w-full px-2 sm:mt-0 sm:max-w-sm sm:pl-0 sm:pr-5 lg:order-2 lg:mt-4 xl:ml-5 xl:mt-0 xl:flex-1"
              >
                <a
                  href="category.html"
                  class="transition-color text-xs font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                >
                  Science
                </a>

                <a href="post.html">
                  <h3
                    class="mt-2 text-xl font-medium leading-normal tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                  >
                    DeepMind has Trained an AI to Control Nuclear Fusion
                  </h3>
                </a>

                <!-- Author -->
                <div class="mt-4 flex items-center justify-between">
                  <!-- Author meta -->
                  <div class="flex items-center justify-center">
                    <a
                      href="author.html"
                      class="mr-3 animate-pulse rounded-lg bg-gray-50"
                    >
                      <img
                        class="lazy h-6 w-6 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out"
                        data-src="images/author-04.jpeg"
                        alt="Author 01"
                      />
                    </a>
                    <div class="text-sm">
                      <span class="text-gray-500">By </span>
                      <a
                        class="font-medium text-gray-700 hover:underline"
                        href="author.html"
                        >Amit Katwala</a
                      >
                      <span class="text-gray-500 lg:hidden xl:inline-block">
                        · Nov 2, 2020</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <!-- 4th Article -->
            <article
              class="border-t border-gray-300/70 py-8 sm:flex lg:flex-col xl:flex-row xl:items-center"
            >
              <!-- Image -->
              <a
                href="post.html"
                class="order-2 w-full sm:w-2/5 lg:order-1 lg:w-full xl:w-2/5"
              >
                <div
                  class="group aspect-h-9 aspect-w-16 relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/recent-04.jpeg"
                    class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                  />
                </div>
              </a>

              <!-- Content -->
              <div
                class="order-1 mt-5 w-full px-2 sm:mt-0 sm:max-w-sm sm:pl-0 sm:pr-5 lg:order-2 lg:mt-4 xl:ml-5 xl:mt-0 xl:flex-1"
              >
                <a
                  href="category.html"
                  class="transition-color text-xs font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                >
                  Startup
                </a>

                <a href="post.html">
                  <h3
                    class="mt-2 text-xl font-medium leading-normal tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                  >
                    Driving while Baked? Inside the High-Tech Quest to find out
                  </h3>
                </a>

                <!-- Author -->
                <div class="mt-4 flex items-center justify-between">
                  <!-- Author meta -->
                  <div class="flex items-center justify-center">
                    <a
                      href="author.html"
                      class="mr-3 animate-pulse rounded-lg bg-gray-50"
                    >
                      <img
                        class="lazy h-6 w-6 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out"
                        data-src="images/author-05.jpeg"
                        alt="Author 01"
                      />
                    </a>
                    <div class="text-sm">
                      <span class="text-gray-500">By </span>
                      <a
                        class="font-medium text-gray-700 hover:underline"
                        href="author.html"
                        >Amanda Lewis</a
                      >
                      <span class="text-gray-500 lg:hidden xl:inline-block">
                        · Feb 22, 2022</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <!-- 5th Article -->
            <article
              class="border-t border-gray-300/70 py-8 sm:flex lg:flex-col xl:flex-row xl:items-center"
            >
              <!-- Image -->
              <a
                href="post.html"
                class="order-2 w-full sm:w-2/5 lg:order-1 lg:w-full xl:w-2/5"
              >
                <div
                  class="group aspect-h-9 aspect-w-16 relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/recent-05.jpeg"
                    class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                  />
                </div>
              </a>

              <!-- Content -->
              <div
                class="order-1 mt-5 w-full px-2 sm:mt-0 sm:max-w-sm sm:pl-0 sm:pr-5 lg:order-2 lg:mt-4 xl:ml-5 xl:mt-0 xl:flex-1"
              >
                <a
                  href="category.html"
                  class="transition-color text-xs font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                >
                  Entertainment
                </a>

                <a href="post.html">
                  <h3
                    class="mt-2 text-xl font-medium leading-normal tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                  >
                    Netflix is Making a Bioshock Movie
                  </h3>
                </a>

                <!-- Author -->
                <div class="mt-4 flex items-center justify-between">
                  <!-- Author meta -->
                  <div class="flex items-center justify-center">
                    <a
                      href="author.html"
                      class="mr-3 animate-pulse rounded-lg bg-gray-50"
                    >
                      <img
                        class="lazy h-6 w-6 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out"
                        data-src="images/author-06.jpeg"
                        alt="Author 01"
                      />
                    </a>
                    <div class="text-sm">
                      <span class="text-gray-500">By </span>
                      <a
                        class="font-medium text-gray-700 hover:underline"
                        href="author.html"
                        >Karina Bell</a
                      >
                      <span class="text-gray-500 lg:hidden xl:inline-block">
                        · Feb 19, 2022</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </article>

            <!-- 6th Article -->
            <article
              class="border-t border-gray-300/70 py-8 sm:flex lg:flex-col xl:flex-row xl:items-center"
            >
              <!-- Image -->
              <a
                href="post.html"
                class="order-2 w-full sm:w-2/5 lg:order-1 lg:w-full xl:w-2/5"
              >
                <div
                  class="group aspect-h-9 aspect-w-16 relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/recent-06.jpeg"
                    class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                  />
                </div>
              </a>

              <!-- Content -->
              <div
                class="order-1 mt-5 w-full px-2 sm:mt-0 sm:max-w-sm sm:pl-0 sm:pr-5 lg:order-2 lg:mt-4 xl:ml-5 xl:mt-0 xl:flex-1"
              >
                <a
                  href="category.html"
                  class="transition-color text-xs font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                >
                  Startup
                </a>

                <a href="post.html">
                  <h3
                    class="mt-2 text-xl font-medium leading-normal tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                  >
                    Uber will let you see how many one- and five-star ratings
                    you get
                  </h3>
                </a>

                <!-- Author -->
                <div class="mt-4 flex items-center justify-between">
                  <!-- Author meta -->
                  <div class="flex items-center justify-center">
                    <a
                      href="author.html"
                      class="mr-3 animate-pulse rounded-lg bg-gray-50"
                    >
                      <img
                        class="lazy h-6 w-6 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out"
                        data-src="images/author-07.jpeg"
                        alt="Author 01"
                      />
                    </a>
                    <div class="text-sm">
                      <span class="text-gray-500">By </span>
                      <a
                        class="font-medium text-gray-700 hover:underline"
                        href="author.html"
                        >Veronica Mars</a
                      >
                      <span class="text-gray-500 lg:hidden xl:inline-block">
                        · Feb 22, 2022</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <!-- Trending Topics -->
    <section class="w-full bg-gray-50 pb-14 pt-12 sm:py-20 lg:pt-24">
      <div
        class="mx-auto max-w-xl px-4 sm:max-w-3xl sm:px-6 md:px-8 lg:max-w-screen-2xl"
      >
        <!-- Section Header -->
        <h3
          class="relative border-b border-gray-300/70 pb-2.5 text-2xl font-medium text-gray-900 before:absolute before:-bottom-px before:left-0 before:h-px before:w-24 before:bg-red-600 before:content-['']"
        >
          Trending topics
        </h3>

        <!-- Topics -->
        <div class="relative mt-8 sm:mt-9">
          <div
            class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 lg:grid-cols-6 lg:gap-4 xl:gap-6"
          >
            <!-- 1st Topic -->
            <div
              class="group relative z-0 h-40 translate-y-0 transform cursor-pointer overflow-hidden rounded-2xl shadow-md transition duration-300 ease-in-out hover:-translate-y-1"
            >
              <a
                href="category.html"
                class="absolute inset-0 z-10 h-full w-full rounded-2xl shadow-md"
              ></a>

              <!-- Image -->
              <div
                class="absolute inset-0 h-full w-full bg-gray-100 bg-cover bg-center bg-no-repeat"
                style="z-index: -1; background-image: url(images/topic-01.jpeg)"
              ></div>

              <!-- Label -->
              <div class="absolute inset-x-0 bottom-0 w-full pb-6">
                <div class="flex w-full justify-center">
                  <span
                    class="inline-flex items-center rounded-md bg-white/90 px-3 py-1 text-sm font-medium text-gray-800 backdrop-blur-lg"
                  >
                    Technology
                  </span>
                </div>
              </div>
            </div>

            <!-- 2nd Topic -->
            <div
              class="group relative z-0 h-40 translate-y-0 transform cursor-pointer overflow-hidden rounded-2xl shadow-md transition duration-300 ease-in-out hover:-translate-y-1"
            >
              <a
                href="category.html"
                class="absolute inset-0 z-10 h-full w-full rounded-2xl shadow-md"
              ></a>

              <!-- Label -->
              <div
                class="absolute inset-0 h-full w-full bg-gray-100 bg-cover bg-center bg-no-repeat"
                style="z-index: -1; background-image: url(images/topic-02.jpeg)"
              ></div>

              <!-- Label -->
              <div class="absolute inset-x-0 bottom-0 w-full pb-6">
                <div class="flex w-full justify-center">
                  <span
                    class="inline-flex items-center rounded-md bg-white/90 px-3 py-1 text-sm font-medium text-gray-800 backdrop-blur-lg"
                  >
                    Startup
                  </span>
                </div>
              </div>
            </div>

            <!-- 3rd Topic -->
            <div
              class="group relative z-0 h-40 translate-y-0 transform cursor-pointer overflow-hidden rounded-2xl shadow-md transition duration-300 ease-in-out hover:-translate-y-1"
            >
              <a
                href="category.html"
                class="absolute inset-0 z-10 h-full w-full rounded-2xl shadow-md"
              ></a>

              <!-- Image -->
              <div
                class="absolute inset-0 h-full w-full bg-gray-100 bg-cover bg-center bg-no-repeat"
                style="z-index: -1; background-image: url(images/topic-03.jpeg)"
              ></div>

              <!-- Label -->
              <div class="absolute inset-x-0 bottom-0 w-full pb-6">
                <div class="flex w-full justify-center">
                  <span
                    class="inline-flex items-center rounded-md bg-white/90 px-3 py-1 text-sm font-medium text-gray-800 backdrop-blur-lg"
                  >
                    Entertainment
                  </span>
                </div>
              </div>
            </div>

            <!-- 4th Topic -->
            <div
              class="group relative z-0 h-40 translate-y-0 transform cursor-pointer overflow-hidden rounded-2xl shadow-md transition duration-300 ease-in-out hover:-translate-y-1"
            >
              <a
                href="category.html"
                class="absolute inset-0 z-10 h-full w-full rounded-2xl shadow-md"
              ></a>

              <!-- Image -->
              <div
                class="absolute inset-0 h-full w-full bg-gray-100 bg-cover bg-center bg-no-repeat"
                style="z-index: -1; background-image: url(images/topic-04.jpeg)"
              ></div>

              <!-- Label -->
              <div class="absolute inset-x-0 bottom-0 w-full pb-6">
                <div class="flex w-full justify-center">
                  <span
                    class="inline-flex items-center rounded-md bg-white/90 px-3 py-1 text-sm font-medium text-gray-800 backdrop-blur-lg"
                  >
                    Productivity
                  </span>
                </div>
              </div>
            </div>

            <!-- 5th Topic -->
            <div
              class="group relative z-0 h-40 translate-y-0 transform cursor-pointer overflow-hidden rounded-2xl shadow-md transition duration-300 ease-in-out hover:-translate-y-1"
            >
              <a
                href="category.html"
                class="absolute inset-0 z-10 h-full w-full rounded-2xl shadow-md"
              ></a>

              <!-- Image -->
              <div
                class="absolute inset-0 h-full w-full bg-gray-100 bg-cover bg-center bg-no-repeat"
                style="z-index: -1; background-image: url(images/topic-05.jpeg)"
              ></div>

              <!-- Label -->
              <div class="absolute inset-x-0 bottom-0 w-full pb-6">
                <div class="flex w-full justify-center">
                  <span
                    class="inline-flex items-center rounded-md bg-white/90 px-3 py-1 text-sm font-medium text-gray-800 backdrop-blur-lg"
                  >
                    Innovation
                  </span>
                </div>
              </div>
            </div>

            <!-- 6th Topic -->
            <div
              class="group relative z-0 h-40 translate-y-0 transform cursor-pointer overflow-hidden rounded-2xl shadow-md transition duration-300 ease-in-out hover:-translate-y-1"
            >
              <a
                href="category.html"
                class="absolute inset-0 z-10 h-full w-full rounded-2xl shadow-md"
              ></a>

              <!-- Image -->
              <div
                class="absolute inset-0 h-full w-full bg-gray-100 bg-cover bg-center bg-no-repeat"
                style="z-index: -1; background-image: url(images/topic-06.jpeg)"
              ></div>

              <!-- Label -->
              <div class="absolute inset-x-0 bottom-0 w-full pb-6">
                <div class="flex w-full justify-center">
                  <span
                    class="inline-flex items-center rounded-md bg-white/90 px-3 py-1 text-sm font-medium text-gray-800 backdrop-blur-lg"
                  >
                    Science
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Feed -->
    <section
      class="relative mx-auto max-w-screen-xl py-12 md:py-16 lg:px-8 lg:py-20"
    >
      <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8">
        <!-- Feed Articles Container -->
        <div class="col-span-2">
          <!-- Advertisement Banner -->
          <a
            href="#"
            class="mx-auto block max-w-xl animate-pulse rounded-2xl bg-gray-50 px-4 sm:px-6 md:max-w-3xl md:px-8 lg:max-w-none lg:px-0"
          >
            <img
              data-src="images/banner-ad.jpeg"
              class="lazy h-auto w-full rounded-2xl transition duration-300 ease-in-out"
            />
          </a>

          <!-- Articles-->
          <div
            class="mx-auto mt-8 grid max-w-xl gap-6 px-4 sm:px-6 md:max-w-3xl md:grid-cols-2 md:px-8 lg:max-w-none lg:px-0"
          >
            <!-- 1st Article -->
            <article
              class="group relative flex flex-col flex-wrap rounded-2xl transition duration-300 ease-in-out hover:shadow-xl"
            >
              <!-- Image -->
              <div
                class="aspect-h-1 aspect-w-2 relative z-10 w-full animate-pulse overflow-hidden rounded-t-2xl bg-gray-50"
              >
                <a href="post.html">
                  <img
                    class="lazy absolute inset-0 h-full w-full rounded-t-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                    data-src="images/feed-01.jpeg"
                  />
                </a>
              </div>

              <!-- Content -->
              <div
                class="box-border flex w-full flex-1 flex-col justify-between rounded-b-2xl border-b-2 border-l-2 border-r-2 border-gray-100 bg-white p-6 transition duration-300 ease-in-out group-hover:border-transparent xl:p-7"
              >
                <div>
                  <a
                    href="category.html"
                    class="transition-color relative text-tiny font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                  >
                    Design
                  </a>

                  <h3
                    class="mt-3 text-xl font-medium leading-tight text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    <a href="post.html">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      How to increase conversion with design
                      <span class="sr-only"
                        >How to increase conversion with design</span
                      >
                    </a>
                  </h3>

                  <p class="mt-4 block text-base leading-relaxed text-gray-500">
                    Lorem ipsum dolor sit amet tempus bendum labore
                    laoreet.Hendrerit lobortis a leo curabitur faucibus sapien
                    ullamcorper do labore odio.
                  </p>
                </div>

                <!-- Author -->
                <div class="mt-5 flex items-center sm:mt-6">
                  <a
                    href="author.html"
                    class="relative h-10 w-10 animate-pulse rounded-xl bg-gray-50"
                  >
                    <img
                      data-src="images/author-02.jpeg"
                      class="lazy h-full w-full rounded-xl object-cover object-center opacity-0 transition duration-300 ease-in-out"
                    />
                  </a>
                  <div class="ml-3">
                    <a
                      href="author.html"
                      class="relative text-sm font-medium text-gray-700 hover:underline"
                    >
                      Tayler Adams
                    </a>
                    <p class="text-sm text-gray-500">
                      <time datetime="2021-12-16">Dec 16 2021</time>
                      <span aria-hidden="true"> &middot; </span>
                      <span> 6 min read </span>
                    </p>
                  </div>
                </div>
              </div>
            </article>

            <!-- 2nd Article -->
            <article
              class="group relative flex flex-col flex-wrap rounded-2xl transition duration-300 ease-in-out hover:shadow-xl"
            >
              <!-- Image -->
              <div
                class="aspect-h-1 aspect-w-2 relative z-10 w-full animate-pulse overflow-hidden rounded-t-2xl bg-gray-50"
              >
                <a href="post.html">
                  <img
                    class="lazy absolute inset-0 h-full w-full rounded-t-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                    data-src="images/feed-02.jpeg"
                  />
                </a>
              </div>

              <!-- Content -->
              <div
                class="box-border flex w-full flex-1 flex-col justify-between rounded-b-2xl border-b-2 border-l-2 border-r-2 border-gray-100 bg-white p-6 transition duration-300 ease-in-out group-hover:border-transparent xl:p-7"
              >
                <div>
                  <a
                    href="category.html"
                    class="transition-color relative text-tiny font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                  >
                    Startup
                  </a>

                  <h3
                    class="mt-3 text-xl font-medium leading-tight text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    <a href="post.html">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      15 Ways to Grow your Startup
                      <span class="sr-only">15 Ways to Grow your Startup</span>
                    </a>
                  </h3>

                  <p class="mt-4 block text-base leading-relaxed text-gray-500">
                    Lorem ipsum dolor sit amet tempus bendum labore
                    laoreet.Hendrerit lobortis a leo curabitur faucibus sapien
                    ullamcorper do labore odio.
                  </p>
                </div>

                <!-- Author -->
                <div class="mt-5 flex items-center sm:mt-6">
                  <a
                    href="author.html"
                    class="relative h-10 w-10 animate-pulse rounded-xl bg-gray-50"
                  >
                    <img
                      data-src="images/author-03.jpeg"
                      class="lazy h-full w-full rounded-xl object-cover object-center opacity-0 transition duration-300 ease-in-out"
                    />
                  </a>
                  <div class="ml-3">
                    <a
                      href="author.html"
                      class="relative text-sm font-medium text-gray-700 hover:underline"
                    >
                      Matt Burgess
                    </a>
                    <p class="text-sm text-gray-500">
                      <time datetime="2021-12-16">Jan 12 2022</time>
                      <span aria-hidden="true"> &middot; </span>
                      <span> 8 min read </span>
                    </p>
                  </div>
                </div>
              </div>
            </article>

            <!-- 3rd Article -->
            <article
              class="group relative flex flex-col flex-wrap rounded-2xl transition duration-300 ease-in-out hover:shadow-xl"
            >
              <!-- Image -->
              <div
                class="aspect-h-1 aspect-w-2 relative z-10 w-full animate-pulse overflow-hidden rounded-t-2xl bg-gray-50"
              >
                <a href="post.html">
                  <img
                    class="lazy absolute inset-0 h-full w-full rounded-t-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                    data-src="images/feed-03.jpeg"
                  />
                </a>
              </div>

              <!-- Content -->
              <div
                class="box-border flex w-full flex-1 flex-col justify-between rounded-b-2xl border-b-2 border-l-2 border-r-2 border-gray-100 bg-white p-6 transition duration-300 ease-in-out group-hover:border-transparent xl:p-7"
              >
                <div>
                  <a
                    href="category.html"
                    class="transition-color relative text-tiny font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                  >
                    Advertising
                  </a>

                  <h3
                    class="mt-3 text-xl font-medium leading-tight text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    <a href="post.html">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      The Best way to get Free Advertising
                      <span class="sr-only"
                        >The Best way to get Free Advertising</span
                      >
                    </a>
                  </h3>

                  <p class="mt-4 block text-base leading-relaxed text-gray-500">
                    Lorem ipsum dolor sit amet tempus bendum labore
                    laoreet.Hendrerit lobortis a leo curabitur faucibus sapien
                    ullamcorper do labore odio.
                  </p>
                </div>

                <!-- Author -->
                <div class="mt-5 flex items-center sm:mt-6">
                  <a
                    href="author.html"
                    class="relative h-10 w-10 animate-pulse rounded-xl bg-gray-50"
                  >
                    <img
                      data-src="images/author-04.jpeg"
                      class="lazy h-full w-full rounded-xl object-cover object-center opacity-0 transition duration-300 ease-in-out"
                    />
                  </a>
                  <div class="ml-3">
                    <a
                      href="author.html"
                      class="relative text-sm font-medium text-gray-700 hover:underline"
                    >
                      Amit Katwala
                    </a>
                    <p class="text-sm text-gray-500">
                      <time datetime="2021-12-16">Sep 24 2021</time>
                      <span aria-hidden="true"> &middot; </span>
                      <span> 5 min read </span>
                    </p>
                  </div>
                </div>
              </div>
            </article>

            <!-- 4th Article -->
            <article
              class="group relative flex flex-col flex-wrap rounded-2xl transition duration-300 ease-in-out hover:shadow-xl"
            >
              <!-- Image -->
              <div
                class="aspect-h-1 aspect-w-2 relative z-10 w-full animate-pulse overflow-hidden rounded-t-2xl bg-gray-50"
              >
                <a href="post.html">
                  <img
                    class="lazy absolute inset-0 h-full w-full rounded-t-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                    data-src="images/feed-04.jpeg"
                  />
                </a>
              </div>

              <!-- Content -->
              <div
                class="box-border flex w-full flex-1 flex-col justify-between rounded-b-2xl border-b-2 border-l-2 border-r-2 border-gray-100 bg-white p-6 transition duration-300 ease-in-out group-hover:border-transparent xl:p-7"
              >
                <div>
                  <a
                    href="category.html"
                    class="transition-color relative text-tiny font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                  >
                    Technology
                  </a>

                  <h3
                    class="mt-3 text-xl font-medium leading-tight text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    <a href="post.html">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      The Latest Tech that will Grow your Business
                      <span class="sr-only"
                        >The Latest Tech that will Grow your Business</span
                      >
                    </a>
                  </h3>

                  <p class="mt-4 block text-base leading-relaxed text-gray-500">
                    Lorem ipsum dolor sit amet tempus bendum labore
                    laoreet.Hendrerit lobortis a leo curabitur faucibus sapien
                    ullamcorper do labore odio.
                  </p>
                </div>

                <!-- Author -->
                <div class="mt-5 flex items-center sm:mt-6">
                  <a
                    href="author.html"
                    class="relative h-10 w-10 animate-pulse rounded-xl bg-gray-50"
                  >
                    <img
                      data-src="images/author-05.jpeg"
                      class="lazy h-full w-full rounded-xl object-cover object-center opacity-0 transition duration-300 ease-in-out"
                    />
                  </a>
                  <div class="ml-3">
                    <a
                      href="author.html"
                      class="relative text-sm font-medium text-gray-700 hover:underline"
                    >
                      Amanda Lewis
                    </a>
                    <p class="text-sm text-gray-500">
                      <time datetime="2021-12-16">Oct 2 2021</time>
                      <span aria-hidden="true"> &middot; </span>
                      <span> 10 min read </span>
                    </p>
                  </div>
                </div>
              </div>
            </article>

            <!-- 5th Article -->
            <article
              class="group relative flex flex-col flex-wrap rounded-2xl transition duration-300 ease-in-out hover:shadow-xl"
            >
              <!-- Image -->
              <div
                class="aspect-h-1 aspect-w-2 relative z-10 w-full animate-pulse overflow-hidden rounded-t-2xl bg-gray-50"
              >
                <a href="post.html">
                  <img
                    class="lazy absolute inset-0 h-full w-full rounded-t-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                    data-src="images/feed-05.jpeg"
                  />
                </a>
              </div>

              <!-- Content -->
              <div
                class="box-border flex w-full flex-1 flex-col justify-between rounded-b-2xl border-b-2 border-l-2 border-r-2 border-gray-100 bg-white p-6 transition duration-300 ease-in-out group-hover:border-transparent xl:p-7"
              >
                <div>
                  <a
                    href="category.html"
                    class="transition-color relative text-tiny font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                  >
                    Development
                  </a>

                  <h3
                    class="mt-3 text-xl font-medium leading-tight text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    <a href="post.html">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      How to Iterate Faster and Work Less
                      <span class="sr-only"
                        >How to Iterate Faster and Work Less</span
                      >
                    </a>
                  </h3>

                  <p class="mt-4 block text-base leading-relaxed text-gray-500">
                    Lorem ipsum dolor sit amet tempus bendum labore
                    laoreet.Hendrerit lobortis a leo curabitur faucibus sapien
                    ullamcorper do labore odio.
                  </p>
                </div>

                <!-- Author -->
                <div class="mt-5 flex items-center sm:mt-6">
                  <a
                    href="author.html"
                    class="relative h-10 w-10 animate-pulse rounded-xl bg-gray-50"
                  >
                    <img
                      data-src="images/author-06.jpeg"
                      class="lazy h-full w-full rounded-xl object-cover object-center opacity-0 transition duration-300 ease-in-out"
                    />
                  </a>
                  <div class="ml-3">
                    <a
                      href="author.html"
                      class="relative text-sm font-medium text-gray-700 hover:underline"
                    >
                      Karina Bell
                    </a>
                    <p class="text-sm text-gray-500">
                      <time datetime="2021-12-16">Mar 1 2022</time>
                      <span aria-hidden="true"> &middot; </span>
                      <span> 11 min read </span>
                    </p>
                  </div>
                </div>
              </div>
            </article>

            <!-- 6th Article -->
            <article
              class="group relative flex flex-col flex-wrap rounded-2xl transition duration-300 ease-in-out hover:shadow-xl"
            >
              <!-- Image -->
              <div
                class="aspect-h-1 aspect-w-2 relative z-10 w-full animate-pulse overflow-hidden rounded-t-2xl bg-gray-50"
              >
                <a href="post.html">
                  <img
                    class="lazy absolute inset-0 h-full w-full rounded-t-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                    data-src="images/feed-06.jpeg"
                  />
                </a>
              </div>

              <!-- Content -->
              <div
                class="box-border flex w-full flex-1 flex-col justify-between rounded-b-2xl border-b-2 border-l-2 border-r-2 border-gray-100 bg-white p-6 transition duration-300 ease-in-out group-hover:border-transparent xl:p-7"
              >
                <div>
                  <a
                    href="category.html"
                    class="transition-color relative text-tiny font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                  >
                    Growth
                  </a>

                  <h3
                    class="mt-3 text-xl font-medium leading-tight text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    <a href="post.html">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      Developing a Growth Strategy
                      <span class="sr-only">Developing a Growth Strategy</span>
                    </a>
                  </h3>

                  <p class="mt-4 block text-base leading-relaxed text-gray-500">
                    Lorem ipsum dolor sit amet tempus bendum labore
                    laoreet.Hendrerit lobortis a leo curabitur faucibus sapien
                    ullamcorper do labore odio.
                  </p>
                </div>

                <!-- Author -->
                <div class="mt-5 flex items-center sm:mt-6">
                  <a
                    href="author.html"
                    class="relative h-10 w-10 animate-pulse rounded-xl bg-gray-50"
                  >
                    <img
                      data-src="images/author-07.jpeg"
                      class="lazy h-full w-full rounded-xl object-cover object-center opacity-0 transition duration-300 ease-in-out"
                    />
                  </a>
                  <div class="ml-3">
                    <a
                      href="author.html"
                      class="relative text-sm font-medium text-gray-700 hover:underline"
                    >
                      Veronica Mars
                    </a>
                    <p class="text-sm text-gray-500">
                      <time datetime="2021-12-16">Nov 30 2022</time>
                      <span aria-hidden="true"> &middot; </span>
                      <span> 9 min read </span>
                    </p>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>

        <!-- Sidebar -->
        <div
          class="mx-auto mt-12 w-full max-w-xl px-4 sm:mt-16 sm:px-6 md:max-w-3xl md:px-8 lg:col-span-1 lg:mt-0 lg:max-w-none lg:px-0"
        >
          <!-- Trending Articles -->
          <div class="w-full rounded-2xl bg-gray-50 p-5 sm:p-8">
            <h3
              class="relative border-b border-gray-300/70 pb-2.5 text-2xl font-medium text-gray-900 before:absolute before:-bottom-px before:left-0 before:h-px before:w-24 before:bg-red-600 before:content-['']"
            >
              Trending
            </h3>

            <!-- Articles -->
            <div class="space-y-6 pt-6 sm:space-y-5 lg:space-y-6 xl:space-y-5">
              <!-- 1st Article -->
              <article class="flex space-x-4 sm:space-x-6 lg:space-x-4">
                <!-- Image -->
                <a
                  href="post.html"
                  class="group relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/trending-01.jpeg"
                    class="lazy h-24 w-24 rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110 sm:h-28 sm:w-28 lg:h-20 lg:w-20 xl:h-24 xl:w-24"
                  />
                </a>

                <!-- Content -->
                <div class="w-2/3">
                  <div
                    class="flex h-full w-full flex-1 flex-col justify-center"
                  >
                    <div>
                      <a
                        href="post.html"
                        class="text-md font-medium leading-snug tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                      >
                        How to generate better ideas
                      </a>
                    </div>

                    <!-- Author -->
                    <div class="mt-2 flex items-center justify-between">
                      <!-- Author meta -->
                      <div class="flex items-center justify-center">
                        <div class="text-sm">
                          <span class="text-gray-500">By </span>
                          <a
                            class="font-medium text-gray-700 hover:underline"
                            href="author.html"
                            >Micheal Osman</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <!-- 2nd Article -->
              <article class="flex space-x-4 sm:space-x-6 lg:space-x-4">
                <!-- Image -->
                <a
                  href="post.html"
                  class="group relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/trending-02.jpeg"
                    class="lazy h-24 w-24 rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110 sm:h-28 sm:w-28 lg:h-20 lg:w-20 xl:h-24 xl:w-24"
                  />
                </a>

                <!-- Content -->
                <div class="w-2/3">
                  <div
                    class="flex h-full w-full flex-1 flex-col justify-center"
                  >
                    <div>
                      <a
                        href="post.html"
                        class="text-md font-medium leading-snug tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                      >
                        7 simple things you can do to improve your design
                      </a>
                    </div>

                    <!-- Author -->
                    <div class="mt-2 flex items-center justify-between">
                      <!-- Author meta -->
                      <div class="flex items-center justify-center">
                        <div class="text-sm">
                          <span class="text-gray-500">By </span>
                          <a
                            class="font-medium text-gray-700 hover:underline"
                            href="author.html"
                            >Brenda Reinink</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <!-- 3rd Article -->
              <article class="flex space-x-4 sm:space-x-6 lg:space-x-4">
                <!-- Image -->
                <a
                  href="post.html"
                  class="group relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/trending-03.jpeg"
                    class="lazy h-24 w-24 rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110 sm:h-28 sm:w-28 lg:h-20 lg:w-20 xl:h-24 xl:w-24"
                  />
                </a>

                <!-- Content -->
                <div class="w-2/3">
                  <div
                    class="flex h-full w-full flex-1 flex-col justify-center"
                  >
                    <div>
                      <a
                        href="post.html"
                        class="text-md font-medium leading-snug tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                      >
                        6 books that will change your life
                      </a>
                    </div>

                    <!-- Author -->
                    <div class="mt-2 flex items-center justify-between">
                      <div class="flex items-center justify-center">
                        <div class="text-sm">
                          <span class="text-gray-500">By </span>
                          <a
                            class="font-medium text-gray-700 hover:underline"
                            href="author.html"
                            >Ava Sanchez</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <!-- 4th Article -->
              <article class="flex space-x-4 sm:space-x-6 lg:space-x-4">
                <!-- Images -->
                <a
                  href="post.html"
                  class="group relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/trending-04.jpeg"
                    class="lazy h-24 w-24 rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110 sm:h-28 sm:w-28 lg:h-20 lg:w-20 xl:h-24 xl:w-24"
                  />
                </a>

                <!-- Content -->
                <div class="w-2/3">
                  <div
                    class="flex h-full w-full flex-1 flex-col justify-center"
                  >
                    <div>
                      <a
                        href="post.html"
                        class="text-md font-medium leading-snug tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                      >
                        The importance of having a positive work culture
                      </a>
                    </div>

                    <!-- Content -->
                    <div class="mt-2 flex items-center justify-between">
                      <div class="flex items-center justify-center">
                        <div class="text-sm">
                          <span class="text-gray-500">By </span>
                          <a
                            class="font-medium text-gray-700 hover:underline"
                            href="author.html"
                            >Veronica Mars</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>

          <!-- Popular Tags -->
          <div class="mt-8 w-full rounded-2xl bg-gray-50 p-5 sm:p-8">
            <h3
              class="relative border-b border-gray-300/70 pb-2.5 text-2xl font-medium text-gray-900 before:absolute before:-bottom-px before:left-0 before:h-px before:w-24 before:bg-red-600 before:content-['']"
            >
              Popular tags
            </h3>

            <!-- Tags -->
            <div class="pt-5">
              <ul class="-m-1 flex flex-wrap justify-start">
                <li>
                  <a href="tag.html">
                    <span
                      class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700 sm:px-4 sm:py-1.5"
                    >
                      Trends
                    </span>
                  </a>
                </li>
                <li>
                  <a href="tag.html">
                    <span
                      class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700 sm:px-4 sm:py-1.5"
                    >
                      Tips
                    </span>
                  </a>
                </li>
                <li>
                  <a href="tag.html">
                    <span
                      class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700 sm:px-4 sm:py-1.5"
                    >
                      Ideas
                    </span>
                  </a>
                </li>
                <li>
                  <a href="tag.html">
                    <span
                      class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700 sm:px-4 sm:py-1.5"
                    >
                      Security
                    </span>
                  </a>
                </li>
                <li>
                  <a href="tag.html">
                    <span
                      class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700 sm:px-4 sm:py-1.5"
                    >
                      Gaming
                    </span>
                  </a>
                </li>
                <li>
                  <a href="tag.html">
                    <span
                      class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700 sm:px-4 sm:py-1.5"
                    >
                      Climate
                    </span>
                  </a>
                </li>
                <li>
                  <a href="tag.html">
                    <span
                      class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700 sm:px-4 sm:py-1.5"
                    >
                      Culture
                    </span>
                  </a>
                </li>
                <li>
                  <a href="tag.html">
                    <span
                      class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700 sm:px-4 sm:py-1.5"
                    >
                      Books
                    </span>
                  </a>
                </li>
                <li>
                  <a href="tag.html">
                    <span
                      class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700 sm:px-4 sm:py-1.5"
                    >
                      Gear
                    </span>
                  </a>
                </li>
                <li>
                  <a href="tag.html">
                    <span
                      class="m-1 inline-flex items-center rounded-full border border-gray-300/70 bg-transparent px-4 py-1 text-sm font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700 sm:px-4 sm:py-1.5"
                    >
                      Reviews
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <!-- Social Media Links -->
          <div class="mt-8 w-full rounded-2xl bg-gray-50 p-5 sm:p-8">
            <h3
              class="relative border-b border-gray-300/70 pb-2.5 text-2xl font-medium text-gray-900 before:absolute before:-bottom-px before:left-0 before:h-px before:w-24 before:bg-red-600 before:content-['']"
            >
              Follow us
            </h3>

            <!-- Links -->
            <div class="pt-5">
              <div class="overflow-hidden">
                <!-- Twitter -->
                <a
                  href="#"
                  class="group flex w-full items-center justify-between"
                >
                  <div class="flex items-center">
                    <div>
                      <span
                        class="flex h-9 w-9 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-3.5 w-3.5 transform text-gray-700 transition duration-300 ease-in-out group-hover:scale-110 group-hover:text-red-700"
                          viewBox="0 0 512 512"
                          fill="currentColor"
                        >
                          <path
                            d="M496 109.5a201.8 201.8 0 01-56.55 15.3 97.51 97.51 0 0043.33-53.6 197.74 197.74 0 01-62.56 23.5A99.14 99.14 0 00348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 002.54 22.1 280.7 280.7 0 01-203-101.3A95.69 95.69 0 0036 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0135.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 01-25.94 3.4 94.38 94.38 0 01-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0139.5 405.6a203 203 0 01-23.5-1.4A278.68 278.68 0 00166.74 448c181.36 0 280.44-147.7 280.44-275.8 0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 00496 109.5z"
                          />
                        </svg>
                      </span>
                    </div>

                    <div class="relative col-span-3 flex flex-col flex-wrap">
                      <div
                        class="box-border flex w-full flex-1 flex-col justify-between px-6 md:px-0"
                      >
                        <div
                          class="transition-color relative z-10 ml-3 text-base font-medium text-gray-700 duration-300 ease-in-out group-hover:text-red-600"
                        >
                          Twitter
                        </div>
                      </div>
                    </div>
                  </div>

                  <div>
                    <!-- heroicon name: solid/arrow-sm-right -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mx-2 h-5 w-5 text-red-400 transition duration-300 ease-in-out group-hover:translate-x-1.5 group-hover:text-red-600"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </div>
                </a>

                <hr
                  class="my-2.5 ml-13 w-full border-t border-dashed border-gray-300/70"
                />

                <!-- Facebook -->
                <a
                  href="#"
                  class="group flex w-full items-center justify-between"
                >
                  <div class="flex items-center">
                    <div>
                      <span
                        class="flex h-9 w-9 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-3.5 w-3.5 transform text-gray-700 transition duration-300 ease-in-out group-hover:scale-110 group-hover:text-red-700"
                          viewBox="0 0 512 512"
                          fill="currentColor"
                        >
                          <path
                            xmlns="http://www.w3.org/2000/svg"
                            d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z"
                            fill-rule="evenodd"
                          />
                        </svg>
                      </span>
                    </div>

                    <div class="relative col-span-3 flex flex-col flex-wrap">
                      <div
                        class="box-border flex w-full flex-1 flex-col justify-between px-6 md:px-0"
                      >
                        <div
                          class="transition-color relative z-10 ml-3 text-base font-medium text-gray-700 duration-300 ease-in-out group-hover:text-red-600"
                        >
                          Facebook
                        </div>
                      </div>
                    </div>
                  </div>

                  <div>
                    <!-- heroicon name: solid/arrow-sm-right -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mx-2 h-5 w-5 text-red-400 transition duration-300 ease-in-out group-hover:translate-x-1.5 group-hover:text-red-600"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </div>
                </a>

                <hr
                  class="my-2.5 ml-13 w-full border-t border-dashed border-gray-300/70"
                />

                <!-- Instagram -->
                <a
                  href="#"
                  class="group flex w-full items-center justify-between"
                >
                  <div class="flex items-center">
                    <div>
                      <span
                        class="flex h-9 w-9 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-3.5 w-3.5 transform text-gray-700 transition duration-300 ease-in-out group-hover:scale-110 group-hover:text-red-700"
                          viewBox="0 0 512 512"
                          fill="currentColor"
                        >
                          <path
                            xmlns="http://www.w3.org/2000/svg"
                            d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"
                          />
                          <path
                            xmlns="http://www.w3.org/2000/svg"
                            d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"
                          />
                        </svg>
                      </span>
                    </div>

                    <div class="relative col-span-3 flex flex-col flex-wrap">
                      <div
                        class="box-border flex w-full flex-1 flex-col justify-between px-6 md:px-0"
                      >
                        <div
                          class="transition-color relative z-10 ml-3 text-base font-medium text-gray-700 duration-300 ease-in-out group-hover:text-red-600"
                        >
                          Instagram
                        </div>
                      </div>
                    </div>
                  </div>

                  <div>
                    <!-- heroicon name: solid/arrow-sm-right -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mx-2 h-5 w-5 text-red-400 transition duration-300 ease-in-out group-hover:translate-x-1.5 group-hover:text-red-600"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </div>
                </a>

                <hr
                  class="my-2.5 ml-13 w-full border-t border-dashed border-gray-300/70"
                />

                <!-- Linkedin -->
                <a
                  href="#"
                  class="group flex w-full items-center justify-between"
                >
                  <div class="flex items-center">
                    <div>
                      <span
                        class="flex h-9 w-9 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="h-3.5 w-3.5 transform text-gray-700 transition duration-300 ease-in-out group-hover:scale-110 group-hover:text-red-700"
                          viewBox="0 0 512 512"
                          fill="currentColor"
                        >
                          <path
                            xmlns="http://www.w3.org/2000/svg"
                            d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z"
                          />
                        </svg>
                      </span>
                    </div>

                    <div class="relative col-span-3 flex flex-col flex-wrap">
                      <div
                        class="box-border flex w-full flex-1 flex-col justify-between px-6 md:px-0"
                      >
                        <div
                          class="transition-color relative z-10 ml-3 text-base font-medium text-gray-700 duration-300 ease-in-out group-hover:text-red-600"
                        >
                          Linkedin
                        </div>
                      </div>
                    </div>
                  </div>

                  <div>
                    <!-- heroicon name: solid/arrow-sm-right -->
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="mx-2 h-5 w-5 text-red-400 transition duration-300 ease-in-out group-hover:translate-x-1.5 group-hover:text-red-600"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <!-- Instagram Feed -->
          <div class="mt-8 w-full rounded-2xl bg-gray-50 p-5 sm:p-8">
            <h3
              class="relative border-b border-gray-300/70 pb-2.5 text-2xl font-medium text-gray-900 before:absolute before:-bottom-px before:left-0 before:h-px before:w-24 before:bg-red-600 before:content-['']"
            >
              Instagram
            </h3>

            <!-- Feed -->
            <div class="pt-6">
              <div class="grid grid-cols-3 gap-3 sm:gap-4 md:gap-6 lg:gap-4">
                <!-- 1st Image -->
                <div
                  class="group relative z-0 w-full translate-y-0 transform cursor-pointer overflow-hidden rounded-2xl pt-full shadow-sm transition duration-300 ease-in-out hover:-translate-y-1"
                >
                  <a
                    href="#"
                    class="absolute inset-0 z-10 h-full w-full rounded-2xl shadow-md"
                  ></a>
                  <div
                    class="absolute inset-0 h-full w-full bg-gray-100 bg-cover bg-center bg-no-repeat"
                    style="
                      z-index: -1;
                      background-image: url(images/instagram-01.jpeg);
                    "
                  ></div>
                  <div
                    class="absolute inset-0 flex h-full w-full items-center justify-center bg-gradient-to-br opacity-0 transition duration-300 ease-in-out group-hover:opacity-90"
                  >
                    <div
                      class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-100"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 text-gray-600"
                        viewBox="0 0 512 512"
                        fill="currentColor"
                      >
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"
                        />
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"
                        />
                      </svg>
                    </div>
                  </div>
                </div>

                <!-- 2nd Image -->
                <div
                  class="group relative z-0 w-full translate-y-0 transform cursor-pointer overflow-hidden rounded-2xl pt-full shadow-sm transition duration-300 ease-in-out hover:-translate-y-1"
                >
                  <a
                    href="#"
                    class="absolute inset-0 z-10 h-full w-full rounded-2xl shadow-md"
                  ></a>
                  <div
                    class="absolute inset-0 h-full w-full bg-gray-100 bg-cover bg-center bg-no-repeat"
                    style="
                      z-index: -1;
                      background-image: url(images/instagram-02.jpeg);
                    "
                  ></div>
                  <div
                    class="absolute inset-0 flex h-full w-full items-center justify-center bg-gradient-to-br opacity-0 transition duration-300 ease-in-out group-hover:opacity-90"
                  >
                    <div
                      class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-100"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 text-gray-600"
                        viewBox="0 0 512 512"
                        fill="currentColor"
                      >
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"
                        />
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"
                        />
                      </svg>
                    </div>
                  </div>
                </div>

                <!-- 3rd Image -->
                <div
                  class="group relative z-0 w-full translate-y-0 transform cursor-pointer overflow-hidden rounded-2xl pt-full shadow-sm transition duration-300 ease-in-out hover:-translate-y-1"
                >
                  <a
                    href="#"
                    class="absolute inset-0 z-10 h-full w-full rounded-2xl shadow-md"
                  ></a>
                  <div
                    class="absolute inset-0 h-full w-full bg-gray-100 bg-cover bg-center bg-no-repeat"
                    style="
                      z-index: -1;
                      background-image: url(images/instagram-03.jpeg);
                    "
                  ></div>
                  <div
                    class="absolute inset-0 flex h-full w-full items-center justify-center bg-gradient-to-br opacity-0 transition duration-300 ease-in-out group-hover:opacity-90"
                  >
                    <div
                      class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-100"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 text-gray-600"
                        viewBox="0 0 512 512"
                        fill="currentColor"
                      >
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"
                        />
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"
                        />
                      </svg>
                    </div>
                  </div>
                </div>

                <!-- 4th Image -->
                <div
                  class="group relative z-0 w-full translate-y-0 transform cursor-pointer overflow-hidden rounded-2xl pt-full shadow-sm transition duration-300 ease-in-out hover:-translate-y-1"
                >
                  <a
                    href="#"
                    class="absolute inset-0 z-10 h-full w-full rounded-2xl shadow-md"
                  ></a>
                  <div
                    class="absolute inset-0 h-full w-full bg-gray-100 bg-cover bg-center bg-no-repeat"
                    style="
                      z-index: -1;
                      background-image: url(images/instagram-04.jpeg);
                    "
                  ></div>
                  <div
                    class="absolute inset-0 flex h-full w-full items-center justify-center bg-gradient-to-br opacity-0 transition duration-300 ease-in-out group-hover:opacity-90"
                  >
                    <div
                      class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-100"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 text-gray-600"
                        viewBox="0 0 512 512"
                        fill="currentColor"
                      >
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"
                        />
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"
                        />
                      </svg>
                    </div>
                  </div>
                </div>

                <!-- 5th Image -->
                <div
                  class="group relative z-0 w-full translate-y-0 transform cursor-pointer overflow-hidden rounded-2xl pt-full shadow-sm transition duration-300 ease-in-out hover:-translate-y-1"
                >
                  <a
                    href="#"
                    class="absolute inset-0 z-10 h-full w-full rounded-2xl shadow-md"
                  ></a>
                  <div
                    class="absolute inset-0 h-full w-full bg-gray-100 bg-cover bg-center bg-no-repeat"
                    style="
                      z-index: -1;
                      background-image: url(images/instagram-05.jpeg);
                    "
                  ></div>
                  <div
                    class="absolute inset-0 flex h-full w-full items-center justify-center bg-gradient-to-br opacity-0 transition duration-300 ease-in-out group-hover:opacity-90"
                  >
                    <div
                      class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-100"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 text-gray-600"
                        viewBox="0 0 512 512"
                        fill="currentColor"
                      >
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"
                        />
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"
                        />
                      </svg>
                    </div>
                  </div>
                </div>

                <!-- 6th Image -->
                <div
                  class="group relative z-0 w-full translate-y-0 transform cursor-pointer overflow-hidden rounded-2xl pt-full shadow-sm transition duration-300 ease-in-out hover:-translate-y-1"
                >
                  <a
                    href="#"
                    class="absolute inset-0 z-10 h-full w-full rounded-2xl shadow-md"
                  ></a>
                  <div
                    class="absolute inset-0 h-full w-full bg-gray-100 bg-cover bg-center bg-no-repeat"
                    style="
                      z-index: -1;
                      background-image: url(images/instagram-06.jpeg);
                    "
                  ></div>
                  <div
                    class="absolute inset-0 flex h-full w-full items-center justify-center bg-gradient-to-br opacity-0 transition duration-300 ease-in-out group-hover:opacity-90"
                  >
                    <div
                      class="flex h-8 w-8 items-center justify-center rounded-full bg-gray-100"
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 text-gray-600"
                        viewBox="0 0 512 512"
                        fill="currentColor"
                      >
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"
                        />
                        <path
                          xmlns="http://www.w3.org/2000/svg"
                          d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"
                        />
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Featured Article -->
    <section class="relative mb-52 w-full lg:mb-40">
      <!-- Image -->
      <a href="post.html">
        <div class="aspect-h-2 aspect-w-5 animate-pulse bg-gray-50">
          <img
            data-src="images/featured-article-02.jpeg"
            class="lazy object-cover object-center opacity-0 transition duration-300 ease-in-out"
          />
        </div>
      </a>

      <!-- Content -->
      <div
        class="absolute inset-x-0 bottom-0 z-10 mx-auto w-full max-w-3xl translate-y-4/5 px-4 sm:translate-y-3/4 sm:px-6 lg:translate-y-1/2"
      >
        <div
          class="flex items-center justify-center rounded-2xl bg-white/90 px-5 py-8 shadow-md backdrop-blur-md sm:p-10 sm:shadow-lg md:p-12 lg:p-14"
        >
          <div class="flex flex-col items-center text-center">
            <a
              href="category.html"
              class="transition-color relative text-sm font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
              >Technology</a
            >
            <a href="post.html" class="group mt-3 block">
              <h2
                class="text-2xl font-medium tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out group-hover:underline sm:text-3xl sm:decoration-3 md:tracking-tight lg:text-4xl lg:leading-tight"
              >
                A Look Into the Construction of the World’s First Nuclear Power
                Station
              </h2>
            </a>

            <!-- Article Footer Info -->
            <footer class="mt-5 flex items-center justify-between sm:mt-7">
              <div class="flex items-center justify-center">
                <a
                  href="author.html"
                  class="mr-3 animate-pulse rounded-lg bg-gray-50"
                >
                  <img
                    class="lazy h-7 w-7 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out lg:h-8 lg:w-8"
                    data-src="images/author-03.jpeg"
                    alt="Author 01"
                  />
                </a>
                <div class="flex items-center text-sm lg:text-[15px]">
                  <span class="hidden text-gray-500 sm:inline-block"
                    >By&nbsp;</span
                  >
                  <a
                    class="font-medium text-gray-700 hover:underline"
                    href="author.html"
                    >Matt Burgess</a
                  >

                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="ml-2.5 h-[18px] w-[18px] text-gray-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                    />
                  </svg>
                  <span class="ml-1 text-gray-500">Nov 2, 2020</span>

                  <span class="hidden items-center sm:flex">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="ml-2.5 h-[18px] w-[18px] text-gray-400"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                      />
                    </svg>
                    <span class="ml-1 text-gray-500">15 min read</span>
                  </span>
                </div>
              </div>
            </footer>
          </div>
        </div>
      </div>
    </section>

    <!-- Archive -->
    <section
      class="relative mx-auto max-w-xl px-4 py-12 sm:px-12 sm:py-16 md:max-w-3xl lg:max-w-screen-xl lg:px-8 lg:py-24"
    >
      <div class="w-full lg:grid lg:grid-cols-3 lg:gap-8 xl:gap-12">
        <!-- Articles -->
        <div class="col-span-2">
          <!-- 1st Article -->
          <article class="md:grid md:grid-cols-4 md:gap-8">
            <!-- Image -->
            <div class="md:col-span-1">
              <a
                href="post.html"
                class="group aspect-h-9 aspect-w-16 relative z-10 block animate-pulse overflow-hidden rounded-2xl bg-gray-50 md:aspect-h-1 md:aspect-w-1"
              >
                <img
                  data-src="images/archive-01.jpeg"
                  class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                />
              </a>
            </div>

            <!-- Content -->
            <div
              class="relative mt-6 flex flex-col flex-wrap md:col-span-3 md:mt-0"
            >
              <div
                class="mb-8 box-border flex w-full flex-1 flex-col justify-between border-b-2 border-gray-100 px-6 pb-8 md:px-0"
              >
                <div>
                  <a
                    href="category.html"
                    class="transition-color relative text-tiny font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                  >
                    Ideas
                  </a>

                  <h3
                    class="mt-2.5 text-xl font-medium leading-tight text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    <a href="post.html">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      How the Unheeded Rules of Urban Planning Create Stress in
                      all Cities
                    </a>
                  </h3>

                  <p
                    class="mt-3.5 block text-base leading-relaxed text-gray-500"
                  >
                    Lorem ipsum dolor sit amet tempus bendum labore
                    laoreet.Hendrerit lobortis a leo curabitur faucibus sapien
                    ullamcorper do labore odio.
                  </p>
                </div>

                <!-- Article Footer Info -->
                <footer class="mt-5 flex items-center sm:mt-7">
                  <!-- Author Image -->
                  <a
                    href="author.html"
                    class="relative mr-3 animate-pulse rounded-lg bg-gray-50"
                  >
                    <img
                      class="lazy h-7 w-7 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out lg:h-8 lg:w-8"
                      data-src="images/author-01.jpeg"
                      alt="Author 01"
                    />
                  </a>

                  <div class="flex items-center text-sm lg:text-[15px]">
                    <span class="hidden text-gray-500 sm:inline-block"
                      >By&nbsp;</span
                    >
                    <a
                      class="relative font-medium text-gray-700 hover:underline"
                      href="author.html"
                      >Mark Jack</a
                    >

                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="ml-3 h-[18px] w-[18px] text-gray-400"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                      ></path>
                    </svg>
                    <span class="ml-1 text-gray-500">Nov 2, 2020</span>

                    <span class="hidden items-center sm:flex">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ml-2.5 h-[18px] w-[18px] text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                        ></path>
                      </svg>
                      <span class="ml-1 text-gray-500">15 min read</span>
                    </span>
                  </div>
                </footer>
              </div>
            </div>
          </article>

          <!-- 2nd Article -->
          <article class="md:grid md:grid-cols-4 md:gap-8">
            <!-- Image -->
            <div class="md:col-span-1">
              <a
                href="post.html"
                class="group aspect-h-9 aspect-w-16 relative z-10 block animate-pulse overflow-hidden rounded-2xl bg-gray-50 md:aspect-h-1 md:aspect-w-1"
              >
                <img
                  data-src="images/archive-02.jpeg"
                  class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                />
              </a>
            </div>

            <!-- Content -->
            <div
              class="relative mt-6 flex flex-col flex-wrap md:col-span-3 md:mt-0"
            >
              <div
                class="mb-8 box-border flex w-full flex-1 flex-col justify-between border-b-2 border-gray-100 px-6 pb-8 md:px-0"
              >
                <div>
                  <a
                    href="category.html"
                    class="transition-color relative text-tiny font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                  >
                    Policy
                  </a>

                  <h3
                    class="mt-2.5 text-xl font-medium leading-tight text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    <a href="post.html">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      Biden to make Lithium Batteries a National Security
                      Priority
                    </a>
                  </h3>

                  <p
                    class="mt-3.5 block text-base leading-relaxed text-gray-500"
                  >
                    Lorem ipsum dolor sit amet tempus bendum labore
                    laoreet.Hendrerit lobortis a leo curabitur faucibus sapien
                    ullamcorper do labore odio.
                  </p>
                </div>

                <!-- Article Footer Info -->
                <footer class="mt-5 flex items-center sm:mt-7">
                  <!-- Author Image -->
                  <a
                    href="author.html"
                    class="relative mr-3 animate-pulse rounded-lg bg-gray-50"
                  >
                    <img
                      class="lazy h-7 w-7 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out lg:h-8 lg:w-8"
                      data-src="images/author-02.jpeg"
                      alt="Author 02"
                    />
                  </a>

                  <div class="flex items-center text-sm lg:text-[15px]">
                    <span class="hidden text-gray-500 sm:inline-block"
                      >By&nbsp;</span
                    >
                    <a
                      class="relative font-medium text-gray-700 hover:underline"
                      href="author.html"
                      >Taylor Adams</a
                    >

                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="ml-3 h-[18px] w-[18px] text-gray-400"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                      ></path>
                    </svg>
                    <span class="ml-1 text-gray-500">Apr 4, 2022</span>

                    <span class="hidden items-center sm:flex">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ml-2.5 h-[18px] w-[18px] text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                        ></path>
                      </svg>
                      <span class="ml-1 text-gray-500">11 min read</span>
                    </span>
                  </div>
                </footer>
              </div>
            </div>
          </article>

          <!-- 3rd Article -->
          <article class="md:grid md:grid-cols-4 md:gap-8">
            <!-- Image -->
            <div class="md:col-span-1">
              <a
                href="post.html"
                class="group aspect-h-9 aspect-w-16 relative z-10 block animate-pulse overflow-hidden rounded-2xl bg-gray-50 md:aspect-h-1 md:aspect-w-1"
              >
                <img
                  data-src="images/archive-03.jpeg"
                  class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                />
              </a>
            </div>

            <!-- Content -->
            <div
              class="relative mt-6 flex flex-col flex-wrap md:col-span-3 md:mt-0"
            >
              <div
                class="mb-8 box-border flex w-full flex-1 flex-col justify-between border-b-2 border-gray-100 px-6 pb-8 md:px-0"
              >
                <div>
                  <a
                    href="category.html"
                    class="transition-color relative text-tiny font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                  >
                    Security
                  </a>

                  <h3
                    class="mt-2.5 text-xl font-medium leading-tight text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    <a href="post.html">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      Best Password Managers for Secure Online Accounts
                    </a>
                  </h3>

                  <p
                    class="mt-3.5 block text-base leading-relaxed text-gray-500"
                  >
                    Lorem ipsum dolor sit amet tempus bendum labore
                    laoreet.Hendrerit lobortis a leo curabitur faucibus sapien
                    ullamcorper do labore odio.
                  </p>
                </div>

                <!-- Article Footer Info -->
                <footer class="mt-5 flex items-center sm:mt-7">
                  <!-- Author Image -->
                  <a
                    href="author.html"
                    class="relative mr-3 animate-pulse rounded-lg bg-gray-50"
                  >
                    <img
                      class="lazy h-7 w-7 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out lg:h-8 lg:w-8"
                      data-src="images/author-03.jpeg"
                      alt="Author 03"
                    />
                  </a>

                  <div class="flex items-center text-sm lg:text-[15px]">
                    <span class="hidden text-gray-500 sm:inline-block"
                      >By&nbsp;</span
                    >
                    <a
                      class="relative font-medium text-gray-700 hover:underline"
                      href="author.html"
                      >Matt Burgess</a
                    >

                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="ml-3 h-[18px] w-[18px] text-gray-400"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                      ></path>
                    </svg>
                    <span class="ml-1 text-gray-500">Mar 2, 2022</span>

                    <span class="hidden items-center sm:flex">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ml-2.5 h-[18px] w-[18px] text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                        ></path>
                      </svg>
                      <span class="ml-1 text-gray-500">4 min read</span>
                    </span>
                  </div>
                </footer>
              </div>
            </div>
          </article>

          <!-- 4th Article -->
          <article class="md:grid md:grid-cols-4 md:gap-8">
            <!-- Image -->
            <div class="md:col-span-1">
              <a
                href="post.html"
                class="group aspect-h-9 aspect-w-16 relative z-10 block animate-pulse overflow-hidden rounded-2xl bg-gray-50 md:aspect-h-1 md:aspect-w-1"
              >
                <img
                  data-src="images/archive-04.jpeg"
                  class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                />
              </a>
            </div>

            <!-- Content -->
            <div
              class="relative mt-6 flex flex-col flex-wrap md:col-span-3 md:mt-0"
            >
              <div
                class="mb-8 box-border flex w-full flex-1 flex-col justify-between border-b-2 border-gray-100 px-6 pb-8 md:px-0"
              >
                <div>
                  <a
                    href="category.html"
                    class="transition-color relative text-tiny font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                  >
                    Business
                  </a>

                  <h3
                    class="mt-2.5 text-xl font-medium leading-tight text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    <a href="post.html">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      Amazon Staten Island Workers Unionize and Make History
                    </a>
                  </h3>

                  <p
                    class="mt-3.5 block text-base leading-relaxed text-gray-500"
                  >
                    Lorem ipsum dolor sit amet tempus bendum labore
                    laoreet.Hendrerit lobortis a leo curabitur faucibus sapien
                    ullamcorper do labore odio.
                  </p>
                </div>

                <!-- Article Footer Info -->
                <footer class="mt-5 flex items-center sm:mt-7">
                  <!-- Author Image -->
                  <a
                    href="author.html"
                    class="relative mr-3 animate-pulse rounded-lg bg-gray-50"
                  >
                    <img
                      class="lazy h-7 w-7 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out lg:h-8 lg:w-8"
                      data-src="images/author-04.jpeg"
                      alt="Author 04"
                    />
                  </a>

                  <div class="flex items-center text-sm lg:text-[15px]">
                    <span class="hidden text-gray-500 sm:inline-block"
                      >By&nbsp;</span
                    >
                    <a
                      class="relative font-medium text-gray-700 hover:underline"
                      href="author.html"
                      >Amit Katwala</a
                    >

                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="ml-3 h-[18px] w-[18px] text-gray-400"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                      ></path>
                    </svg>
                    <span class="ml-1 text-gray-500">Apr 3, 2022</span>

                    <span class="hidden items-center sm:flex">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ml-2.5 h-[18px] w-[18px] text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                        ></path>
                      </svg>
                      <span class="ml-1 text-gray-500">12 min read</span>
                    </span>
                  </div>
                </footer>
              </div>
            </div>
          </article>

          <!-- 5th Article -->
          <article class="md:grid md:grid-cols-4 md:gap-8">
            <!-- Image -->
            <div class="md:col-span-1">
              <a
                href="post.html"
                class="group aspect-h-9 aspect-w-16 relative z-10 block animate-pulse overflow-hidden rounded-2xl bg-gray-50 md:aspect-h-1 md:aspect-w-1"
              >
                <img
                  data-src="images/archive-05.jpeg"
                  class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                />
              </a>
            </div>

            <!-- Content -->
            <div
              class="relative mt-6 flex flex-col flex-wrap md:col-span-3 md:mt-0"
            >
              <div
                class="mb-8 box-border flex w-full flex-1 flex-col justify-between border-b-2 border-gray-100 px-6 pb-8 md:px-0"
              >
                <div>
                  <a
                    href="category.html"
                    class="transition-color relative text-tiny font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                  >
                    Innovation
                  </a>

                  <h3
                    class="mt-2.5 text-xl font-medium leading-tight text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    <a href="post.html">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      This is What Twitter Crypto Could Look Like
                    </a>
                  </h3>

                  <p
                    class="mt-3.5 block text-base leading-relaxed text-gray-500"
                  >
                    Lorem ipsum dolor sit amet tempus bendum labore
                    laoreet.Hendrerit lobortis a leo curabitur faucibus sapien
                    ullamcorper do labore odio.
                  </p>
                </div>

                <!-- Article Footer Info -->
                <footer class="mt-5 flex items-center sm:mt-7">
                  <!-- Author Image -->
                  <a
                    href="author.html"
                    class="relative mr-3 animate-pulse rounded-lg bg-gray-50"
                  >
                    <img
                      class="lazy h-7 w-7 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out lg:h-8 lg:w-8"
                      data-src="images/author-05.jpeg"
                      alt="Author 05"
                    />
                  </a>

                  <div class="flex items-center text-sm lg:text-[15px]">
                    <span class="hidden text-gray-500 sm:inline-block"
                      >By&nbsp;</span
                    >
                    <a
                      class="relative font-medium text-gray-700 hover:underline"
                      href="author.html"
                      >Amanda Lewis</a
                    >

                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="ml-3 h-[18px] w-[18px] text-gray-400"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                      ></path>
                    </svg>
                    <span class="ml-1 text-gray-500">Mar 31, 2022</span>

                    <span class="hidden items-center sm:flex">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ml-2.5 h-[18px] w-[18px] text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                        ></path>
                      </svg>
                      <span class="ml-1 text-gray-500">8 min read</span>
                    </span>
                  </div>
                </footer>
              </div>
            </div>
          </article>

          <!-- 6th Article -->
          <article class="md:grid md:grid-cols-4 md:gap-8">
            <!-- Image -->
            <div class="md:col-span-1">
              <a
                href="post.html"
                class="group aspect-h-9 aspect-w-16 relative z-10 block animate-pulse overflow-hidden rounded-2xl bg-gray-50 md:aspect-h-1 md:aspect-w-1"
              >
                <img
                  data-src="images/archive-06.jpeg"
                  class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                />
              </a>
            </div>

            <!-- Content -->
            <div
              class="relative mt-6 flex flex-col flex-wrap md:col-span-3 md:mt-0"
            >
              <div
                class="mb-8 box-border flex w-full flex-1 flex-col justify-between border-b-2 border-gray-100 px-6 pb-8 md:px-0"
              >
                <div>
                  <a
                    href="category.html"
                    class="transition-color relative text-tiny font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                  >
                    Science
                  </a>

                  <h3
                    class="mt-2.5 text-xl font-medium leading-tight text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    <a href="post.html">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      Why We Die Without Sleep
                    </a>
                  </h3>

                  <p
                    class="mt-3.5 block text-base leading-relaxed text-gray-500"
                  >
                    Lorem ipsum dolor sit amet tempus bendum labore
                    laoreet.Hendrerit lobortis a leo curabitur faucibus sapien
                    ullamcorper do labore odio.
                  </p>
                </div>

                <!-- Article Footer Info -->
                <footer class="mt-5 flex items-center sm:mt-7">
                  <!-- Author Image -->
                  <a
                    href="author.html"
                    class="relative mr-3 animate-pulse rounded-lg bg-gray-50"
                  >
                    <img
                      class="lazy h-7 w-7 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out lg:h-8 lg:w-8"
                      data-src="images/author-06.jpeg"
                      alt="Author 06"
                    />
                  </a>

                  <div class="flex items-center text-sm lg:text-[15px]">
                    <span class="hidden text-gray-500 sm:inline-block"
                      >By&nbsp;</span
                    >
                    <a
                      class="relative font-medium text-gray-700 hover:underline"
                      href="author.html"
                      >Karina Bell</a
                    >

                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="ml-3 h-[18px] w-[18px] text-gray-400"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                      ></path>
                    </svg>
                    <span class="ml-1 text-gray-500">Jan 11, 2022</span>

                    <span class="hidden items-center sm:flex">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ml-2.5 h-[18px] w-[18px] text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                        ></path>
                      </svg>
                      <span class="ml-1 text-gray-500">16 min read</span>
                    </span>
                  </div>
                </footer>
              </div>
            </div>
          </article>

          <!-- 7th Article -->
          <article class="md:grid md:grid-cols-4 md:gap-8">
            <!-- Image -->
            <div class="md:col-span-1">
              <a
                href="post.html"
                class="group aspect-h-9 aspect-w-16 relative z-10 block animate-pulse overflow-hidden rounded-2xl bg-gray-50 md:aspect-h-1 md:aspect-w-1"
              >
                <img
                  data-src="images/archive-07.jpeg"
                  class="lazy rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110"
                />
              </a>
            </div>

            <!-- Content -->
            <div
              class="relative mt-6 flex flex-col flex-wrap md:col-span-3 md:mt-0"
            >
              <div
                class="box-border flex w-full flex-1 flex-col justify-between px-6 md:px-0"
              >
                <div>
                  <a
                    href="category.html"
                    class="transition-color relative text-tiny font-medium uppercase tracking-widest text-red-700 duration-300 ease-in-out hover:text-red-600"
                  >
                    Climate
                  </a>

                  <h3
                    class="mt-2.5 text-xl font-medium leading-tight text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline sm:text-2xl lg:text-xl xl:text-2xl"
                  >
                    <a href="post.html">
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      The Mission to Save the World's Coral Reefs
                    </a>
                  </h3>

                  <p
                    class="mt-3.5 block text-base leading-relaxed text-gray-500"
                  >
                    Lorem ipsum dolor sit amet tempus bendum labore
                    laoreet.Hendrerit lobortis a leo curabitur faucibus sapien
                    ullamcorper do labore odio.
                  </p>
                </div>

                <!-- Article Footer Info -->
                <footer class="mt-5 flex items-center sm:mt-7">
                  <!-- Author Image -->
                  <a
                    href="author.html"
                    class="relative mr-3 animate-pulse rounded-lg bg-gray-50"
                  >
                    <img
                      class="lazy h-7 w-7 flex-shrink-0 rounded-lg object-cover object-center opacity-0 transition duration-300 ease-in-out lg:h-8 lg:w-8"
                      data-src="images/author-07.jpeg"
                      alt="Author 07"
                    />
                  </a>

                  <div class="flex items-center text-sm lg:text-[15px]">
                    <span class="hidden text-gray-500 sm:inline-block"
                      >By&nbsp;</span
                    >
                    <a
                      class="relative font-medium text-gray-700 hover:underline"
                      href="author.html"
                      >Veronica Mars</a
                    >

                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="ml-3 h-[18px] w-[18px] text-gray-400"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                      ></path>
                    </svg>
                    <span class="ml-1 text-gray-500">Mar 20, 2022</span>

                    <span class="hidden items-center sm:flex">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="ml-2.5 h-[18px] w-[18px] text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                        ></path>
                      </svg>
                      <span class="ml-1 text-gray-500">14 min read</span>
                    </span>
                  </div>
                </footer>
              </div>
            </div>
          </article>
        </div>

        <!-- Sidebar -->
        <div class="mt-12 w-full sm:mt-16 lg:col-span-1 lg:mt-0">
          <!-- Advertisement Placement -->
          <a href="#" class="block animate-pulse rounded-2xl bg-gray-50">
            <!-- Portrait Ad -->
            <img
              data-src="images/fashion-ad-portrait.png"
              class="lazy hidden h-auto w-full rounded-xl transition duration-300 ease-in-out lg:block"
            />
            <!-- Landscape Ad -->
            <img
              data-src="images/fashion-ad-landscape.png"
              class="lazy h-auto w-full rounded-xl transition duration-300 ease-in-out lg:hidden"
            />
          </a>

          <!-- Most Read Articles-->
          <div class="mt-8 w-full rounded-2xl bg-gray-50 p-5 sm:p-8">
            <h3
              class="relative border-b border-gray-300/70 pb-2.5 text-2xl font-medium text-gray-900 before:absolute before:-bottom-px before:left-0 before:h-px before:w-24 before:bg-red-600 before:content-['']"
            >
              Most read
            </h3>

            <!-- Articles -->
            <div class="space-y-6 pt-6 sm:space-y-5 lg:space-y-6 xl:space-y-5">
              <!-- 1st Article -->
              <article class="flex space-x-4 sm:space-x-6 lg:space-x-4">
                <!-- Image -->
                <a
                  href="post.html"
                  class="group relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/most-read-01.jpeg"
                    class="lazy h-24 w-24 rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110 sm:h-28 sm:w-28 lg:h-20 lg:w-20 xl:h-24 xl:w-24"
                  />
                </a>

                <!-- Content -->
                <div class="w-2/3">
                  <div
                    class="flex h-full w-full flex-1 flex-col justify-center"
                  >
                    <div>
                      <a
                        href="post.html"
                        class="text-md font-medium leading-snug tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                      >
                        A Review of the Pentagon UFO Report
                      </a>
                    </div>

                    <!-- Author -->
                    <div class="mt-2 flex items-center justify-between">
                      <!-- Author meta -->
                      <div class="flex items-center justify-center">
                        <div class="text-sm">
                          <span class="text-gray-500">By </span>
                          <a
                            class="font-medium text-gray-700 hover:underline"
                            href="author.html"
                            >Micheal Osman</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <!-- 2nd Article -->
              <article class="flex space-x-4 sm:space-x-6 lg:space-x-4">
                <!-- Image -->
                <a
                  href="post.html"
                  class="group relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/most-read-02.jpeg"
                    class="lazy h-24 w-24 rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110 sm:h-28 sm:w-28 lg:h-20 lg:w-20 xl:h-24 xl:w-24"
                  />
                </a>

                <!-- Content -->
                <div class="w-2/3">
                  <div
                    class="flex h-full w-full flex-1 flex-col justify-center"
                  >
                    <div>
                      <a
                        href="post.html"
                        class="text-md font-medium leading-snug tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                      >
                        New Life that Lives Off Electricity
                      </a>
                    </div>

                    <!-- Author -->
                    <div class="mt-2 flex items-center justify-between">
                      <!-- Author meta -->
                      <div class="flex items-center justify-center">
                        <div class="text-sm">
                          <span class="text-gray-500">By </span>
                          <a
                            class="font-medium text-gray-700 hover:underline"
                            href="author.html"
                            >Brenda Reinink</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <!-- 3rd Article -->
              <article class="flex space-x-4 sm:space-x-6 lg:space-x-4">
                <!-- Image -->
                <a
                  href="post.html"
                  class="group relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/most-read-03.jpeg"
                    class="lazy h-24 w-24 rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110 sm:h-28 sm:w-28 lg:h-20 lg:w-20 xl:h-24 xl:w-24"
                  />
                </a>

                <!-- Content -->
                <div class="w-2/3">
                  <div
                    class="flex h-full w-full flex-1 flex-col justify-center"
                  >
                    <div>
                      <a
                        href="post.html"
                        class="text-md font-medium leading-snug tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                      >
                        Exxon's Record Breaking Profits from Gas Prices
                      </a>
                    </div>

                    <!-- Author -->
                    <div class="mt-2 flex items-center justify-between">
                      <div class="flex items-center justify-center">
                        <div class="text-sm">
                          <span class="text-gray-500">By </span>
                          <a
                            class="font-medium text-gray-700 hover:underline"
                            href="author.html"
                            >Ava Sanchez</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <!-- 4th Article -->
              <article class="flex space-x-4 sm:space-x-6 lg:space-x-4">
                <!-- Images -->
                <a
                  href="post.html"
                  class="group relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/most-read-04.jpeg"
                    class="lazy h-24 w-24 rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110 sm:h-28 sm:w-28 lg:h-20 lg:w-20 xl:h-24 xl:w-24"
                  />
                </a>

                <!-- Content -->
                <div class="w-2/3">
                  <div
                    class="flex h-full w-full flex-1 flex-col justify-center"
                  >
                    <div>
                      <a
                        href="post.html"
                        class="text-md font-medium leading-snug tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                      >
                        64% of Americans Now Living Paycheck to Paycheck
                      </a>
                    </div>

                    <!-- Content -->
                    <div class="mt-2 flex items-center justify-between">
                      <div class="flex items-center justify-center">
                        <div class="text-sm">
                          <span class="text-gray-500">By </span>
                          <a
                            class="font-medium text-gray-700 hover:underline"
                            href="author.html"
                            >Veronica Mars</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <!-- 5th Article -->
              <article class="flex space-x-4 sm:space-x-6 lg:space-x-4">
                <!-- Image -->
                <a
                  href="post.html"
                  class="group relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/most-read-05.jpeg"
                    class="lazy h-24 w-24 rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110 sm:h-28 sm:w-28 lg:h-20 lg:w-20 xl:h-24 xl:w-24"
                  />
                </a>

                <!-- Content -->
                <div class="w-2/3">
                  <div
                    class="flex h-full w-full flex-1 flex-col justify-center"
                  >
                    <div>
                      <a
                        href="post.html"
                        class="text-md font-medium leading-snug tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                      >
                        What the Hell is an NFT?
                      </a>
                    </div>

                    <!-- Author -->
                    <div class="mt-2 flex items-center justify-between">
                      <div class="flex items-center justify-center">
                        <div class="text-sm">
                          <span class="text-gray-500">By </span>
                          <a
                            class="font-medium text-gray-700 hover:underline"
                            href="author.html"
                            >Ava Sanchez</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>

              <!-- 6th Article -->
              <article class="flex space-x-4 sm:space-x-6 lg:space-x-4">
                <!-- Images -->
                <a
                  href="post.html"
                  class="group relative z-10 animate-pulse overflow-hidden rounded-2xl bg-gray-100"
                >
                  <img
                    data-src="images/most-read-06.jpeg"
                    class="lazy h-24 w-24 rounded-2xl object-cover object-center opacity-0 transition duration-300 ease-in-out group-hover:scale-110 sm:h-28 sm:w-28 lg:h-20 lg:w-20 xl:h-24 xl:w-24"
                  />
                </a>

                <!-- Content -->
                <div class="w-2/3">
                  <div
                    class="flex h-full w-full flex-1 flex-col justify-center"
                  >
                    <div>
                      <a
                        href="post.html"
                        class="text-md font-medium leading-snug tracking-normal text-gray-900 decoration-gray-800 decoration-2 transition duration-300 ease-in-out hover:underline"
                      >
                        Life After the Pandemic
                      </a>
                    </div>

                    <!-- Content -->
                    <div class="mt-2 flex items-center justify-between">
                      <div class="flex items-center justify-center">
                        <div class="text-sm">
                          <span class="text-gray-500">By </span>
                          <a
                            class="font-medium text-gray-700 hover:underline"
                            href="author.html"
                            >Veronica Mars</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Newsletter -->
    <section class="bg-gray-50 py-12 sm:py-20 lg:py-24">
      <div class="mx-auto max-w-screen-xl px-5 sm:px-6 lg:px-8">
        <!-- Content -->
        <div class="mx-auto flex max-w-xl flex-col items-center text-center">
          <img
            src="images/paper-airplane.png"
            class="h-auto w-24 animate-orbit"
          />
          <h2
            class="mt-6 text-3xl font-medium tracking-normal text-gray-900 sm:mt-8 sm:text-4xl md:tracking-tight lg:text-5xl lg:leading-tight"
          >
            Get the most talked about stories directly in your inbox
          </h2>
          <p class="mt-4 text-lg leading-relaxed text-gray-500">
            Every week we share the most relevant news in tech, culture and
            entertainment. Join our community of over
            <span class="font-medium text-gray-800">10,000 readers</span>.
          </p>

          <!-- Newsletter signup container -->
          <div class="mt-8 flex w-full flex-col items-center sm:mt-10">
            <div class="relative h-14 w-full max-w-xl rounded-3xl">
              <!-- Newsletter signup form -->
              <form
                class="group rounded-3xl border border-gray-300/70 bg-transparent transition duration-300 ease-in-out"
              >
                <input
                  type="email"
                  class="h-14 w-full rounded-3xl border-0 border-transparent bg-white py-3.5 pl-6 pr-36 text-sm leading-5 text-gray-800 transition duration-300 ease-in-out hover:bg-transparent focus:bg-white focus:outline-none focus:ring-2 focus:ring-red-100"
                  required
                  placeholder="Enter your email"
                  ,
                  autocomplete="email"
                />

                <button
                  type="submit"
                  class="before:content-[&quot;&quot;] absolute right-3 top-1.5 inline-flex h-11 items-center bg-transparent px-4 py-2 text-tiny uppercase tracking-widest text-red-700 outline-none transition duration-300 ease-in-out before:absolute before:left-0 before:right-auto before:h-6 before:w-px before:bg-gray-300/70 before:transition before:duration-300 before:ease-in-out hover:text-red-600 focus:outline-none sm:font-medium md:px-6"
                >
                  Subscribe
                </button>
              </form>
            </div>

            <p class="mt-4 text-center text-sm text-gray-500">
              Your privacy is important to us. We promise not to send you spam!
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white py-12 sm:py-20 lg:py-24">
      <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-screen-xl lg:px-8">
        <!-- Logo & Social Links -->
        <div class="sm:flex sm:items-center sm:justify-between">
          <!-- Logo -->
          <div class="flex items-center justify-center">
            <a href="index.html" class="block">
              <img src="images/banter-logo.png" class="h-10 w-auto" />
            </a>
          </div>

          <!-- Social Links-->
          <div class="mt-6 flex items-center justify-center sm:mt-0">
            <ul class="flex items-center space-x-3 sm:ml-4">
              <li>
                <a
                  href="#"
                  class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3.5 w-3.5 transform text-gray-700 transition duration-300 ease-in-out group-hover:scale-110 group-hover:text-red-700"
                    viewBox="0 0 512 512"
                    fill="currentColor"
                  >
                    <path
                      d="M496 109.5a201.8 201.8 0 01-56.55 15.3 97.51 97.51 0 0043.33-53.6 197.74 197.74 0 01-62.56 23.5A99.14 99.14 0 00348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 002.54 22.1 280.7 280.7 0 01-203-101.3A95.69 95.69 0 0036 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0135.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 01-25.94 3.4 94.38 94.38 0 01-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0139.5 405.6a203 203 0 01-23.5-1.4A278.68 278.68 0 00166.74 448c181.36 0 280.44-147.7 280.44-275.8 0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 00496 109.5z"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3.5 w-3.5 transform text-gray-700 transition duration-300 ease-in-out group-hover:scale-110 group-hover:text-red-700"
                    viewBox="0 0 512 512"
                    fill="currentColor"
                  >
                    <path
                      xmlns="http://www.w3.org/2000/svg"
                      d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z"
                      fill-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3.5 w-3.5 transform text-gray-700 transition duration-300 ease-in-out group-hover:scale-110 group-hover:text-red-700"
                    viewBox="0 0 512 512"
                    fill="currentColor"
                  >
                    <path
                      xmlns="http://www.w3.org/2000/svg"
                      d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"
                    />
                    <path
                      xmlns="http://www.w3.org/2000/svg"
                      d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"
                    />
                  </svg>
                </a>
              </li>
              <li>
                <a
                  href="#"
                  class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-3.5 w-3.5 transform text-gray-700 transition duration-300 ease-in-out group-hover:scale-110 group-hover:text-red-700"
                    viewBox="0 0 512 512"
                    fill="currentColor"
                  >
                    <path
                      xmlns="http://www.w3.org/2000/svg"
                      d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z"
                    />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Footer Links Container -->
        <div
          class="mt-10 border-t border-t-gray-300/70 pt-10 md:flex md:items-center md:justify-between"
        >
          <!-- Footer Links -->
          <nav
            class="-mx-5 -my-2 flex flex-wrap items-center justify-center md:justify-start"
            aria-label="Footer"
          >
            <a
              href="index.html"
              class="px-5 py-2 text-base text-gray-500 transition duration-300 ease-in-out hover:text-red-700"
            >
              Home
            </a>

            <a
              href="about.html"
              class="px-5 py-2 text-base text-gray-500 transition duration-300 ease-in-out hover:text-red-700"
            >
              About Banter
            </a>

            <a
              href="contact.html"
              class="px-5 py-2 text-base text-gray-500 transition duration-300 ease-in-out hover:text-red-700"
            >
              Contact us
            </a>

            <a
              href="privacy-policy.html"
              class="px-5 py-2 text-base text-gray-500 transition duration-300 ease-in-out hover:text-red-700"
            >
              Privacy Policy
            </a>

            <a
              href="privacy-policy.html"
              class="px-5 py-2 text-base text-gray-500 transition duration-300 ease-in-out hover:text-red-700"
            >
              Terms & Conditions
            </a>
          </nav>

          <!-- Copyright Text -->
          <p
            class="ml-0 mt-8 flex shrink-0 items-center justify-center text-base text-gray-400 md:ml-6 md:mt-0"
          >
            Made with
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="mx-1 h-5 w-5"
              width="44"
              height="44"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path
                d="M3 14c.83 .642 2.077 1.017 3.5 1c1.423 .017 2.67 -.358 3.5 -1c.83 -.642 2.077 -1.017 3.5 -1c1.423 -.017 2.67 .358 3.5 1"
              ></path>
              <path d="M8 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
              <path d="M12 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
              <path d="M3 10h14v5a6 6 0 0 1 -6 6h-2a6 6 0 0 1 -6 -6v-5z"></path>
              <path d="M16.746 16.726a3 3 0 1 0 .252 -5.555"></path>
            </svg>
            <span>
              by
              <a
                href="https://www.tailwindawesome.com/"
                class="hover:underline"
              >
                Tailwind Awesome
              </a>
            </span>
          </p>
        </div>
      </div>
    </footer>

    <!-- Lazyload Script -->
    <script>
      var lazyLoadInstance = new LazyLoad({
        callback_loaded: function (img) {
          img.closest('.animate-pulse').classList.remove('animate-pulse')
        },
      })
    </script>
  </body>
</html>
