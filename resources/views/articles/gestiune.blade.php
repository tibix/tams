<x-layout>
	<div class="container my-3">
		@unless ($articles->isEmpty())
			{{-- Build a list of articles and actions --}}
			<table class="table table-hover table-responsive">
				<thead>
					<tr>
						<th scole="col"></th>
						<th scope="col">Titul</th>
						<th scope="col">Status</th>
						<th scope="col">Creat</th>
						<th scope="col">Categorie</th>
						<th scope="col"></th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($articles as $article)
						<tr>
							<td><img src="{{ asset('storage/' . $article->image) }}" class="img-thumbnail" width="150" /></td>
							<td>{{ $article->title }}</td>
							<td>{{ $article->getState($article->state_id) }}</td>
							<td>{{ $article->created_at }}</td>
							<td>{{ $article->category->category }}</td>
							<td>
								<form method="POST" action="/articles/{{$article->id}}/aproba">
									@csrf
									<input type="hidden" name="article_id" value="{{ $article->id }}">
									<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
									<button type="submit" class="btn btn-outline-success"><i class="fa fa-thumbs-up"></i>Aproba</button>
								</form>
							</td>
							<td>
								<form method="POST" action="/articles/{{$article->id}}/respinge">
									@csrf
									<input type="hidden" name="article_id" value="{{ $article->id }}">
									<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
									<button type="submit" class="btn btn-outline-warning"><i class="fa fa-thumbs-down"></i>Respinge</button>
								</form>
							</td>
							<td>
								<form method="POST" action="/articles/{{ $article->id }}">
									@csrf
									@method('DELETE')
									<button class="btn btn-danger">
										<i class="fa-solid fa-trash-can"></i>
										Sterge
									</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{ $articles->links() }}
		@else
			<h1>Nu exista articole in aprobare!</h1>
		@endunless
		</div>
</x-layout>
