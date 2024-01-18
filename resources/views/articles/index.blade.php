<x-layout>
    @auth
        <div class="row row-cols-1 row-cols-md-3 g-4 my-3 mx-3">
            @foreach ($articles as $article)
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/articles/{{ $article->id }}"
                                    class="text-dark">{{ $article->title }}</a></h5>
                            <p class="card-text">{{ substr($article->content, 0, 100) . ' ...' }}</p>
                        </div>
                        @if ($article->user_id == auth()->user()->id)
                            <div class="card-footer">
                                <a href="articles/{{ $article->id }}/edit" class="btn btn-outline-dark bg-dark text-light">
                                    <i class="fa fa-pen"></i> Edit</a>
                                <a href="articles/{{ $article->id }}/edit" class="btn btn-outline-dark bg-dark text-light">
                                    <i class="fa fa-upload"></i> Publish </a>
                                <form method="POST" action="/articles/{{ $article->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger float-end">
                                        <i class="fa-solid fa-trash-can"></i>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        @endif
						<!-- Check if the article is added to the user's favorites -->
						@if (auth()->user()->favorites->contains($article->id))
                        	<div class="card-footer">
								<form method="POST" action="/favorites">
									@csrf
									@method('DELETE')
									<input type="hidden" name="article_id" value="{{ $article->id }}">
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
									<input type="hidden" name="article_id" value="{{ $article->id }}">
									<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
									<button type="submit" class="btn btn-outline-danger">
										<i class="fa-regular fa-heart"></i>
									</button>
								</form>
							</div>
						@endif
                    </div>
                </div>
            @endforeach
        </div>
		<div class="mx-5 my-2">{{ $articles->links() }}</div>
    @else
        <div class="row row-cols-1 row-cols-md-3 g-4 my-3 mx-3">
            @foreach ($articles as $article)
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/articles/{{ $article->id }}"
                                    class="text-dark">{{ $article->title }}</a></h5>
                        </div>
                        <div class="card-footer">
                            <p>
                                Author: <span class="fw-bold">{{ $article->user->u_name }}</span>
                                Category: <span class="fw-bold">{{ $article->category->category }}</span>
                                Created: <span class="fst-italic">{{ $article->created_at }}</span>
                            </p>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
        <div class="mx-5 my-2">{{ $articles->links() }}</div>
    @endauth
</x-layout>
