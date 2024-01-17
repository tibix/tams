<x-layout>
    @unless ($articles->isEmpty())
        {{-- Build a list of articles and actions --}}
        <table class="table table-hover mx-3 my-3">
            <thead>
                <tr>
                    <th scole="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td><img src="{{ asset('storage/' . $article->image) }}" class="img-thumbnail" width="150" /></td>
                        <td>{{ $article->title }}</td>
                        <td>Otto</td>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1>There are no articles for this user</h1>
    @endunless

</x-layout>
