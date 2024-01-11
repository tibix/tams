<x-layout>
	@auth
	<div class="mx-4 mt-4">
		<p>

			@if($article->user->id == auth()->user()->id)
				<a class="bg-warning text-dark text-decoration-none" href="/articles/{{$article->id}}/edit"> &nbsp;Edit Article </a>&nbsp;&nbsp;&nbsp;
			@endif

			<a href="#" class="text-decoration-none">
				<span class="bg-dark text-light fw-bold">{{ $article->user->u_name }}</span>
			</a>
			<span class="fw-bold">{{ $article->category->category}}</span> <span class="text-end">Created: {{ $article->created_at }}</span>
		</p>
		<div class="flex flex-col ">

			<h3 class="text-2xl mb-2 text-center">{{ $article->title }}</h3>

			<img class="img-fluid rounded mb-3" src="{{ asset('storage/' . $article->image) }}" alt="" />

			<div class="border border-gray-200 w-full mb-3"></div>
			<div>
				<div class="text-lg space-y-6">
					<p>{{ $article->content }}</p>
				</div>
			</div>
		</div>
	</div>
	@else
	<div class="mx-4 mt-4">
		<p>
			Author:
			<a href="#" class="text-decoration-none">
				<span class="bg-dark text-light fw-bold">{{ $article->user->u_name }}</span>
			</a>
			Category: <span class="fw-bold">{{ $article->category->category}}</span>
			<span class="float-end">Created at: {{ $article->created_at }}</span>
		</p>
		<div class="flex flex-col ">

			<h3 class="text-2xl mb-2 text-center">{{ $article->title }}</h3>

			<img class="img-fluid rounded mb-3" src="{{ asset('storage/' . $article->image) }}" alt="" />

			<div class="border border-gray-200 w-full mb-3"></div>
			<div>
				<div class="text-lg space-y-6 my-4">
					<p class="text-center"><a href="/login" class="text-dark">Login</a> to see the full content of the page!</p>
				</div>
			</div>
		</div>
	</div>
	@endauth
</x-layout>
