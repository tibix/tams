<x-layout>
	@auth
	<div class="mx-4 mt-4">
		<p>

			@if($article->user->id == auth()->user()->id)
				<a class="bg-warning text-dark text-decoration-none" href="/articles/{{$article->id}}/edit"> &nbsp;Edit Article </a>&nbsp;&nbsp;&nbsp;
			@endif

			<a href="#" class="text-decoration-none text-dark">
				Autor: <span class="bg-dark text-light fw-bold">{{ $article->user->u_name }}</span>
			</a>
			Categoria: <span class="fw-bold">{{ $article->category->category}}</span>
			<span class="float-end"> Publicat: <span class="fw-bold">{{ $article->created_at }}</span></span>
		</p>
		<div class="flex flex-col ">

			<h3 class="text-2xl mb-2 text-center">{{ $article->title }}</h3>

			<img class="rounded mx-auto d-block mb-3" src="{{ asset('storage/' . $article->image) }}" alt="Article image" width="50%"/>

			<div class="border border-gray-200 w-full mb-3"></div>
			<div>
				<div class="text-lg space-y-6">
					<p>{{ $article->content }}</p>
				</div>
			</div>
		</div>
	</div>
		@if(auth()->user()->role_id == '3' && $article->state_id == '2')
		<hr>
		<div class="mx-4 mt-2 mb-2 d-block">
			<!-- Aprobare -->
			<form method="POST" action="/articles/{{$article->id}}/aproba">
				@csrf
				<input type="hidden" name="article_id" value="{{ $article->id }}">
				<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
				<button type="submit" class="btn btn-outline-warning">Aproba</button>
			</form>

			<!-- Respingere -->
			<form method="POST" action="/articles/{{$article->id}}/respinge">
				@csrf
				<input type="hidden" name="article_id" value="{{ $article->id }}">
				<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
				<button type="submit" class="btn btn-outline-danger">Respinge</button>
			</form>
		</div>
		@endif
	@else
	<div class="mx-4 mt-4">
		<p>
			Autor:
			<a href="#" class="text-decoration-none">
				<span class="bg-dark text-light fw-bold">{{ $article->user->u_name }}</span>
			</a>
			Categorie: <span class="fw-bold">{{ $article->category->category}}</span>
			<span class="float-end">Publicat: {{ $article->created_at }}</span>
		</p>
		<div class="flex flex-col ">

			<h3 class="text-2xl mb-2 text-center">{{ $article->title }}</h3>

			<img class="rounded mx-auto d-block mb-3" src="{{ asset('storage/' . $article->image) }}" alt="Article image" width="50%" />

			<div class="border border-gray-200 w-full mb-3"></div>
			<div>
				<div class="text-lg space-y-6 my-4">
					<p class="text-center"><a href="/login" class="text-dark">Autentifica-te</a> pentru a vedea continutul paginii!</p>
				</div>
			</div>
		</div>
	</div>
	@endauth
</x-layout>
