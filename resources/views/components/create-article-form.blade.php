<div>
    
    <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" name="description" id="description" class="form-control">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <select type="text" name="category_id" id="category" class="form-control">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Immagine</label>
            <input type="file" name="img" class="form-control">
        </div>
        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <select name="tags[]" id="tags" class="form-control" multiple>
                @foreach ($tags as $tag)
                    <option value="{{$tag->id}}" class="text-dark">{{$tag->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo dell'articolo</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
    
</div>
