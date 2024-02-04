<x-layout>
	<div class="container">
		<h1 class="text-center">Rezultatele cautarii</h1>
	@unless ($articles->isEmpty())
		<h3 class="text-center">Am gasit {{ $articles->count() }} rezultate ce contin termenul cautat!</h3>
		<ul class="list-group my-4">
		@foreach($articles as $article)
		<li class="list-group-item">
			<h3>
				<a class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="/articles/{{$article->id}}">{{$article->title}}</a>
			</h3>
			<p>{{ substr($article->content, 0, 300) . "..."}}</p>
		</li>
		@endforeach
		</ul>
	@else
		<h2 class="text-center">Nu am gasit nici un rezultat pentru termenul cautat</h2>
	@endunless
	</div>
</x-layout>
