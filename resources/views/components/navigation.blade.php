<!-- Navigation for large screens -->
<div class="ml-6 hidden items-center justify-between text-xl md:flex md:space-x-0.5 md:text-base lg:space-x-2">
    <!-- Current: "text-red-700", Default: "text-gray-800 hover:text-red-700 transition duration-300 ease-in-out" -->
    <a href="category.html"
        class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700">
        Technology
    </a>
    <a href="category.html"
        class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700">
        Startup
    </a>
    <a href="category.html"
        class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700">
        Design
    </a>
    <a href="category.html"
        class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700">
        Innovation
    </a>

    <!-- Template pages dropdown container -->
    <div class="relative" x-data="{ open: false }">
        <!-- Pages dropdown button -->
        <button type="button"
            class="group flex items-center px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700"
            @click="open = true">
            <span :class="{ 'text-red-700': open }">Pages</span>

            <!-- Heroicon name: solid/chevron-down -->
            <svg xmlns="http://www.w3.org/2000/svg"
                class="ml-2 h-5 w-5 transform text-gray-600 duration-300 group-hover:text-red-700"
                :class="{ 'rotate-180 text-red-700': open }" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Pages dropdown -->
        <div style="display: none"
            class="absolute right-0 z-20 mt-3 w-52 space-y-1 rounded-xl bg-white p-2.5 outline-none drop-shadow filter focus:outline-none"
            x-show.transition="open" @click.away="open = false">
            <a href="index.html"
                class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                Home
            </a>
            <a href="category.html"
                class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                Category page
            </a>
            <a href="post.html"
                class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                Post
            </a>
            <a href="author.html"
                class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                Author page
            </a>
            <a href="tag.html"
                class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                Tag page
            </a>
            <a href="about.html"
                class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                About us
            </a>
            <a href="contact.html"
                class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                Contact us
            </a>
            <a href="privacy-policy.html"
                class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                Privacy policy
            </a>
            <a href="404.html"
                class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
                404 page
            </a>
        </div>
    </div>
</div>
