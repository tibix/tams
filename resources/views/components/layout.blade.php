<!doctype html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap"
		rel="stylesheet" />

	<link rel="stylesheet" href="css/main.css" />

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
    <script src="https://kit.fontawesome.com/6f78ace1ca.js" crossorigin="anonymous"></script>

	<!-- PAGE TITLE -->
	<title>Revista TAMS</title>
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
					<a href="{{route('index')}}" class="lg:hidden">
                        <i class="fa-regular fa-newspaper-o font-bold h-9 w-auto bg-red-700"></i> TAMS
					</a>
					<a href="{{route('index')}}" class="hidden lg:block">
                        <i class="fa fa-newspaper-o  h-9 w-auto bg-red-700"></i> <span class="font-bold">TAMS</span>
					</a>
				</div>

				<!-- Navigation for large screens -->
				<div
					class="ml-6 hidden items-center justify-between text-xl md:flex md:space-x-0.5 md:text-base lg:space-x-2">
					<!-- Current: "text-red-700", Default: "text-gray-800 hover:text-red-700 transition duration-300 ease-in-out" -->
					<a href="category.html"
						class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700">
						Tehnologie
					</a>
					<a href="category.html"
						class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700">
						Arta
					</a>
					<a href="category.html"
						class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700">
						Moda
					</a>
					<a href="category.html"
						class="px-3 py-1 text-md font-medium text-gray-800 transition duration-300 ease-in-out hover:text-red-700">
						Stiinta
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
							<a href="{{route('index')}}"
								class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
								Acasa
							</a>
							<a href="about.html"
								class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
								Despre noi
							</a>
							<a href="contact.html"
								class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
								Contact
							</a>
							<a href="404.html"
								class="block rounded-lg px-5 py-3.5 font-medium text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 hover:text-red-700">
								404
                            </a>
						</div>
					</div>
				</div>

				<!-- Search -->
				<div class="relative ml-6 h-10 w-full max-w-xxs rounded-3xl">
					<form class="group rounded-3xl transition duration-300 ease-in-out">
						<div class="absolute inset-y-0 left-3 flex items-center">
							<!-- Heroicon name: solid/search -->
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
								fill="currentColor">
								<path fill-rule="evenodd"
									d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
									clip-rule="evenodd" />
							</svg>
						</div>

						<input type="email"
							class="h-10 w-full rounded-3xl border border-gray-200 bg-white px-10 py-3 text-sm leading-5 text-gray-800 transition duration-300 ease-in-out hover:bg-gray-50 focus:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-red-100"
							required placeholder="Search..." , autocomplete="email" />
					</form>
				</div>

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
					<a href="{{route('index')}}"
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
    {{$slot}}
	<!-- Newsletter -->
	<section class="bg-gray-50 py-12 sm:py-20 lg:py-24">
		<div class="mx-auto max-w-screen-xl px-5 sm:px-6 lg:px-8">
			<!-- Content -->
			<div class="mx-auto flex max-w-xl flex-col items-center text-center">
				<img src="images/paper-airplane.png" class="h-auto w-24 animate-orbit" />
				<h2
					class="mt-6 text-3xl font-medium tracking-normal text-gray-900 sm:mt-8 sm:text-4xl md:tracking-tight lg:text-5xl lg:leading-tight">
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
							class="group rounded-3xl border border-gray-300/70 bg-transparent transition duration-300 ease-in-out">
							<input type="email"
								class="h-14 w-full rounded-3xl border-0 border-transparent bg-white py-3.5 pl-6 pr-36 text-sm leading-5 text-gray-800 transition duration-300 ease-in-out hover:bg-transparent focus:bg-white focus:outline-none focus:ring-2 focus:ring-red-100"
								required placeholder="Enter your email" , autocomplete="email" />

							<button type="submit"
								class="before:content-[&quot;&quot;] absolute right-3 top-1.5 inline-flex h-11 items-center bg-transparent px-4 py-2 text-tiny uppercase tracking-widest text-red-700 outline-none transition duration-300 ease-in-out before:absolute before:left-0 before:right-auto before:h-6 before:w-px before:bg-gray-300/70 before:transition before:duration-300 before:ease-in-out hover:text-red-600 focus:outline-none sm:font-medium md:px-6">
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
					<a href="{{route('index')}}" class="block">
						<img src="images/banter-logo.png" class="h-10 w-auto" />
					</a>
				</div>

				<!-- Social Links-->
				<div class="mt-6 flex items-center justify-center sm:mt-0">
					<ul class="flex items-center space-x-3 sm:ml-4">
						<li>
							<a href="#"
								class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12">
								<svg xmlns="http://www.w3.org/2000/svg"
									class="h-3.5 w-3.5 transform text-gray-700 transition duration-300 ease-in-out group-hover:scale-110 group-hover:text-red-700"
									viewBox="0 0 512 512" fill="currentColor">
									<path
										d="M496 109.5a201.8 201.8 0 01-56.55 15.3 97.51 97.51 0 0043.33-53.6 197.74 197.74 0 01-62.56 23.5A99.14 99.14 0 00348.31 64c-54.42 0-98.46 43.4-98.46 96.9a93.21 93.21 0 002.54 22.1 280.7 280.7 0 01-203-101.3A95.69 95.69 0 0036 130.4c0 33.6 17.53 63.3 44 80.7A97.5 97.5 0 0135.22 199v1.2c0 47 34 86.1 79 95a100.76 100.76 0 01-25.94 3.4 94.38 94.38 0 01-18.51-1.8c12.51 38.5 48.92 66.5 92.05 67.3A199.59 199.59 0 0139.5 405.6a203 203 0 01-23.5-1.4A278.68 278.68 0 00166.74 448c181.36 0 280.44-147.7 280.44-275.8 0-4.2-.11-8.4-.31-12.5A198.48 198.48 0 00496 109.5z" />
								</svg>
							</a>
						</li>
						<li>
							<a href="#"
								class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12">
								<svg xmlns="http://www.w3.org/2000/svg"
									class="h-3.5 w-3.5 transform text-gray-700 transition duration-300 ease-in-out group-hover:scale-110 group-hover:text-red-700"
									viewBox="0 0 512 512" fill="currentColor">
									<path xmlns="http://www.w3.org/2000/svg"
										d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z"
										fill-rule="evenodd" />
								</svg>
							</a>
						</li>
						<li>
							<a href="#"
								class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12">
								<svg xmlns="http://www.w3.org/2000/svg"
									class="h-3.5 w-3.5 transform text-gray-700 transition duration-300 ease-in-out group-hover:scale-110 group-hover:text-red-700"
									viewBox="0 0 512 512" fill="currentColor">
									<path xmlns="http://www.w3.org/2000/svg"
										d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z" />
									<path xmlns="http://www.w3.org/2000/svg"
										d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z" />
								</svg>
							</a>
						</li>
						<li>
							<a href="#"
								class="group flex h-10 w-10 items-center justify-center rounded-full border border-gray-300/70 bg-transparent transition duration-300 ease-in-out sm:h-12 sm:w-12">
								<svg xmlns="http://www.w3.org/2000/svg"
									class="h-3.5 w-3.5 transform text-gray-700 transition duration-300 ease-in-out group-hover:scale-110 group-hover:text-red-700"
									viewBox="0 0 512 512" fill="currentColor">
									<path xmlns="http://www.w3.org/2000/svg"
										d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z" />
								</svg>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<!-- Footer Links Container -->
			<div class="mt-10 border-t border-t-gray-300/70 pt-10 md:flex md:items-center md:justify-between">
				<!-- Footer Links -->
				<nav class="-mx-5 -my-2 flex flex-wrap items-center justify-center md:justify-start"
					aria-label="Footer">
					<a href="{{route('index')}}"
						class="px-5 py-2 text-base text-gray-500 transition duration-300 ease-in-out hover:text-red-700">
						Home
					</a>

					<a href="about.html"
						class="px-5 py-2 text-base text-gray-500 transition duration-300 ease-in-out hover:text-red-700">
						About Banter
					</a>

					<a href="contact.html"
						class="px-5 py-2 text-base text-gray-500 transition duration-300 ease-in-out hover:text-red-700">
						Contact us
					</a>

					<a href="privacy-policy.html"
						class="px-5 py-2 text-base text-gray-500 transition duration-300 ease-in-out hover:text-red-700">
						Privacy Policy
					</a>

					<a href="privacy-policy.html"
						class="px-5 py-2 text-base text-gray-500 transition duration-300 ease-in-out hover:text-red-700">
						Terms & Conditions
					</a>
				</nav>

				<!-- Copyright Text -->
				<p class="ml-0 mt-8 flex shrink-0 items-center justify-center text-base text-gray-400 md:ml-6 md:mt-0">
					Made with
					<svg xmlns="http://www.w3.org/2000/svg" class="mx-1 h-5 w-5" width="44" height="44"
						viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
						stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
						<path
							d="M3 14c.83 .642 2.077 1.017 3.5 1c1.423 .017 2.67 -.358 3.5 -1c.83 -.642 2.077 -1.017 3.5 -1c1.423 -.017 2.67 .358 3.5 1">
						</path>
						<path d="M8 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
						<path d="M12 3a2.4 2.4 0 0 0 -1 2a2.4 2.4 0 0 0 1 2"></path>
						<path d="M3 10h14v5a6 6 0 0 1 -6 6h-2a6 6 0 0 1 -6 -6v-5z"></path>
						<path d="M16.746 16.726a3 3 0 1 0 .252 -5.555"></path>
					</svg>
					<span>
						by
						<a href="https://www.tailwindawesome.com/" class="hover:underline">
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
			callback_loaded: function(img) {
				img.closest('.animate-pulse').classList.remove('animate-pulse')
			},
		})
	</script>
</body>

</html>
