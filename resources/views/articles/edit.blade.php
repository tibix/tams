<x-layout>
@auth
@if(auth()->user()->role_id == 2)
<div class="mx-2 my-3">
    <form method="POST" action="/articles/{{$article->id}}/" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Titlu</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" id="title" value={{$article->title}}>
                @error('title')
                    <p class="text-danger fs-5">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="row mb-5">
            <label for="content" class="col-sm-2 col-form-label">Continut</label>
            <div class="col-sm-10">
                <textarea name="content" class="form-control editor" id="content" rows="15">{{$article->content}}</textarea>
                @error('content')
                    <p class="text-danger fs-5">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="image" class="col-sm-2 col-form-label">Imagine</label>
            <div class="col-sm-10">
                <input type="file" name="image" class="form-control" id="image">

                <img class="img-thumbnail rounded mt-2" src="{{ asset('storage/' . $article->image) }}" alt="" />

                @error('image')
                    <p class="text-danger fs-5">{{$message}}</p>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="category_id" class="col-sm-2 col-form-label">Categorie</label>
            <div class="col-sm-10">
                <select class="form-select" id="category_id" name="category_id" aria-label="Default select example">
                    @foreach($categories as $category)
                        @if($article->category_id == $category->id)
                            <option value="{{$category->id}}" selected>{{ $category->category }}</option>
                        @else
                            <option value="{{$category->id}}">{{ $category->category }}</option>
                        @endif
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-danger fs-5">{{$message}}</p>
                @enderror
            </div>
        </div>
        <button type="submit" name="salveaza" class="btn btn-outline-warning">Actualizeaza articolul</button>
    </form>
</div>
@else
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5">Nu aveti permisiunea de a accesa aceasta pagina</h1>
            </div>
        </div>
    </div>
@endif
@endauth
</x-layout>
