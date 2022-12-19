<x-layout>
    <main class="container">
        <div class="row">
            <div class="col-12">
                
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                <form action="{{route('article.update', compact('article'))}}" class="card" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$article->title}}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione:</label>
                        <input type="text" name="description" class="form-control" id="description" value="{{$article->description}}">
                    </div>
                    
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria:</label>
                        <select name="category_id" id="category" class="form-control">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{$category->id == $article->category->id ? 'selected' : ''}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="tags" class="form-label">Categoria:</label>
                        <select name="tags[]" id="tags" class="form-control">
                            @foreach ($tags as $tag)
                            <option value="{{$tag->id}}" {{$article->tags->contains($tag) ? 'selected' : ''}}>{{$tag->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="my-3">
                        <label for="cover" class="form-label">Copertina attuale:</label>
                        <div class="text-center">
                            <img src="{{Storage::url($article->img)}}" alt="{{$article->title}}" class="img-fluid">
                        </div>
                    </div>
                    
                    <div class="my-3">
                        <label for="image" class="form-label">Copertina:</label>
                        <input type="file" name="img" id="image" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo:</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{$article->body}}</textarea>
                    </div>

                    <div class="mt-2">
                        <button class="btn bg-main">Modifica Articolo</button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</main>
</x-layout>