<x-layout>
	@foreach ($favorites as $favorite)
		<p class="text-center">{{ $favorite->id }}</p>
	@endforeach
</x-layout>
