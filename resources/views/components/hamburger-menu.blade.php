<!-- Hamburger menu button -->
<button
    class="group relative ml-6 flex cursor-pointer items-center justify-center rounded-xl bg-gray-50 p-3 transition duration-300 ease-in-out hover:bg-gray-100 focus:outline-none md:hidden"
    aria-label="Toggle Navigation" @click="mobileMenuOpen = !mobileMenuOpen">
    <span class="relative h-3.5 w-4 transform transition duration-500 ease-in-out">
        <span
            class="absolute block h-0.5 rotate-0 transform rounded-full bg-gray-600 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900"
            :class="mobileMenuOpen ? 'w-0 top-1.5 left-1/2' : 'top-0 left-0 w-full'"></span>
        <span
            class="absolute left-0 top-1.5 block h-0.5 w-full transform rounded-full bg-gray-600 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900"
            :class="mobileMenuOpen ? 'rotate-45' : 'rotate-0'"></span>
        <span
            class="absolute left-0 top-1.5 block h-0.5 w-full transform rounded-full bg-gray-600 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900"
            :class="mobileMenuOpen ? '-rotate-45' : 'rotate-0'"></span>
        <span
            class="absolute block h-0.5 rotate-0 transform rounded-full bg-gray-600 opacity-100 transition-all duration-300 ease-in-out group-hover:bg-gray-900"
            :class="mobileMenuOpen ? 'top-1.5 left-1/2 w-0' : 'left-0 top-3 w-full'"></span>
    </span>
</button>
