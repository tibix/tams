<x-layout>
	<div class="container-fluid">
		<div class="row my-3">
			<div class="col-sm-8 bg-white mr-3">
				<h1 class="text-center">Articole in Lucru</h1>
				<div class="row">
					@unless ($to_publish->isEmpty())
						@foreach ($to_publish as $draft )
						<div class="col-lg-4 d-flex align-items-stretch">
							<div class="card my-2">
								<div class="card-header text-white bg-danger">
									Draft
								</div>
								<div class="card-body">
									<h5 class="card-title">{{ $draft->title }}</h5>
									<img class="card-img-top" src="{{ asset('storage/' . $draft->image) }}" alt="Card image cap">
									<p class="card-text">{{ substr($draft->content, 0, 100) . "..." }}</p>
									<a href="/articles/{{ $draft->id }}" class="btn btn-outline-warning">Citeste</a>
									<a href="/articles/{{ $draft->id }}/edit" class="btn btn-outline-secondary">Continua editarea</a>
								</div>
							</div>
						</div>
						@endforeach
					@else
						<span class="text-center fs-2 fw-bold">
							Nu ai nici un articol in lucru!
						</span>
					@endunless
				</div>
				<hr>
				<h1 class="text-center">Articole Publicate</h1>
				<div class="row">
					@unless($my_published->isEmpty())
						@foreach ($my_published as $published)
						<div class="col-sm-12">
							<div class="card my-2">
								<div class="card-header bg-warning">
									Featured
								</div>
								<div class="card-body">
									<h5 class="card-title">{{ $published->title }}></h5>
									<p class="card-text">{{ substr($published->content, 0, 100).' ...'}}></p>
									<a href="/articles/{{$published->id}}" class="btn btn-outline-warning">Citeste</a>
									<a href="/articles/{{$published->id}}/edit" class="btn btn-outline-secondary">Editeaza</a>
								</div>
							</div>
						</div>
						@endforeach
					@else
						<span class="text-center fs-2 fw-bold">
							Inca nu ai articole publicate!
						</span>
					@endunless
				</div>
			</div>

			<div class="col-sm-4 ml-3">
				<h1 class="text-center">Alte articole</h1>
				<div class="row mx-3">
				@unless($other_published->isEmpty())
					@foreach ($other_published as $op)
					@if($op->featured == 1)
						<div class="col-sm-12">
							<div class="card my-2">
								<div class="card-header bg-dark text-light">
									Featured
								</div>
								<div class="card-body">
									<h5 class="card-title">{{ $op->title }}</h5>
									<img class="card-img-top" src="{{ asset('storage/' . $op->image) }}" alt="Card image cap">
									<p class="card-text">{{ substr($op->content, 0, 100).' ...' }}</p>
									<a href="/articles/{{$op->id}}" class="btn btn-outline-warning">Citeste</a>
									@if($op->isFavorite($op->id, auth()->user()->id))
									<div class="card-footer">
										<form method="POST" action="/favorites">
											@csrf
											@method('DELETE')
											<input type="hidden" name="article_id" value="{{ $op->id }}">
											<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
											<button class="btn btn-outline-danger">
												<i class="fa-solid fa-heart"></i>
											</button>
										</form>
									</div>
									@else
									<div class="card-footer">
										<form method="POST" action="/favorites">
											@csrf
											<input type="hidden" name="article_id" value="{{ $op->id }}">
											<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
											<button type="submit" class="btn btn-outline-danger">
												<i class="fa-regular fa-heart"></i>
											</button>
										</form>
									</div>
									@endif
								</div>
							</div>
						</div>
						@else
						<div class="col-lg-6 d-flex align-items-stretch">
							<div class="card my-2">
								<div class="card-body">
									<h5 class="card-title">{{ $op->title }}</h5>
									<img class="card-img-top" src="{{ asset('storage/' . $op->image) }}" alt="Card image cap">
									<p class="card-text">{{substr($op->content, 0, 100).' ...'}}</p>
									<a href="/articles/{{$op->id}}" class="btn btn-outline-warning">Citeste</a>
								</div>
								@if($op->isFavorite($op->id, auth()->user()->id))
								<div class="card-footer">
									<form method="POST" action="/favorites">
										@csrf
										@method('DELETE')
										<input type="hidden" name="article_id" value="{{ $op->id }}">
										<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
										<button class="btn btn-outline-danger">
											<i class="fa-solid fa-heart"></i>
										</button>
									</form>
								</div>
								@else
								<div class="card-footer">
									<form method="POST" action="/favorites">
										@csrf
										<input type="hidden" name="article_id" value="{{ $op->id }}">
										<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
										<button type="submit" class="btn btn-outline-danger">
											<i class="fa-regular fa-heart"></i>
										</button>
									</form>
								</div>
								@endif
							</div>
						</div>
						@endif
					@endforeach
				@else
					<span class="text-center fs-2 fw-bold">
						Nu exista articole publicate!
					</span>
				@endunless
				</div>
			</div>
		</div>
	</div>
</x-layout>
