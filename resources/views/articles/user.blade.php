<x-layout>
	<div class="container my-3">
    @unless ($articles->isEmpty())
        {{-- Build a list of articles and actions --}}
        <table class="table table-hover mx-2">
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
                            <a href="articles/{{ $article->id }}/edit" class="btn btn-outline-dark bg-dark text-light"> <i
                                    class="fa fa-pen"></i> Edit</a>
                        </td>
                        <td>
                            <form method="POST" action="/articles/{{ $article->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-trash-can"></i>
                                    Delete
                                </button>
                            </form>
                        </td>
						<td>
							@if($article->state_id == 3)
                            <form method="POST" action="/articles/{{ $article->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-success">
                                    <i class="fa-solid fa-upload"></i>
                                    Publica
                                </button>
                            </form>
							@endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
		{{ $articles->links() }}
    @else
        <h1>There are no articles for this user</h1>
    @endunless
	</div>
</x-layout>
