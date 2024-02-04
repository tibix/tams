<x-layout>
	<div class="container my-3">
		@unless ($users->isEmpty())
			{{-- Build a list of articles and actions --}}
			<table class="table table-hover table-responsive">
				<thead>
					<tr>
						<th scope="col">Nume Utiliztor</th>
						<th scope="col">Nume</th>
						<th scope="col">Prenume</th>
						<th scope="col">Rol</th>
						<th scope="col"></th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
						<tr>
							<td>{{ $user->u_name }}</td>
							<td>{{ $user->f-name }}</td>
							<td>{{ $user->l_name}}</td>
							<td>{{ $user->getRole($user->role_id) }}</td>
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
			<h1>Nu exista nici un alt utilizator!</h1>
		@endunless
		</div>
</x-layout>
