<x-layout>
	@foreach ($favorites as $favorite)
		<p class="text-center">{{ $favorite }}</p>
	@endforeach
</x-layout>
