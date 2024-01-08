<x-layout>
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
        <div class="flex flex-col items-center justify-center text-center">

            <h3 class="text-2xl mb-2">{{ $article->title }}</h3>

            <img class="img-fluid rounded" src="{{ asset('storage/' . $article->image) }}" alt="" />

            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <div class="text-lg space-y-6">
                    <p>{{ $article->content }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>