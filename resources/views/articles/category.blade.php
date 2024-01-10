<x-layout>
@auth
	<div class="row row-cols-1 row-cols-md-3 g-4 my-3 mx-3">
	@unless ($articles->isEmpty())
	@foreach($articles as $article)
		<div class="col">
			<div class="card">
				<img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><a href="/articles/{{$article->id}}" class="text-dark">{{ $article->title}}</a></h5>
					<p class="card-text">{{ substr($article->content,0,100) . ' ...'}}</p>
				</div>
				@if($article->user_id == auth()->user()->id)
				<div class="card-footer">
					<a href="articles/{{$article->id}}/edit" class="btn btn-outline-dark bg-dark text-light"> <i class="fa fa-pen"></i> Edit</a>
					<a href="articles/{{$article->id}}/edit" class="btn btn-outline-dark bg-dark text-light"> <i class="fa fa-upload"></i> Publish </a>
					<form method="POST" action="/articles/{{$article->id}}">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger float-end">
							<i
								class="fa-solid fa-trash-can"
							></i>
							Delete
						</button>
					</form>
				</div>
				@endif
			</div>
		</div>
	@endforeach
	@else
		<p class="text-center fw-bold">There are no articles in this category yet</p>
	@endunless
	</div>
@else
	<div class="row row-cols-1 row-cols-md-3 g-4 my-3 mx-3">
		@unless ($articles->isEmpty())
		@foreach($articles as $article)
		<div class="col">
			<div class="card">
				<img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title"><a href="/articles/{{$article->id}}" class="text-dark">{{ $article->title}}</a></h5>
				</div>
				<div class="card-footer">
					<p>
						Author: <span class="fw-bold">{{ $article->user->u_name }}</span>
						Category: <span class="fw-bold">{{$article->category->category}}</span>
						Created: <span class="fst-italic">{{ $article->created_at }}</span>
					</p>
				</div>
			</div>
		</div>
		@endforeach
		@else
			<p class="text-center fw-bold">There are no articles in this category yet</p>
		@endunless
	</div>
@endauth
</x-layout>
