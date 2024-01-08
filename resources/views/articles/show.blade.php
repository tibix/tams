<x-layout>
    <div class="mx-4 mt-4">
        <div class="flex flex-col items-center justify-center text-center">
            <img class="img-fluid rounded" src="{{ asset('storage/' . $article->image) }}" alt="" />

            <h3 class="text-2xl mb-2">{{ $article->title }}</h3>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <div class="text-lg space-y-6">
                    <p>{{ $article->content }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>