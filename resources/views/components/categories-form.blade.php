<form action="{{('category.store')}}" method="post">
    @csrf
    <label for="categories" class="form-label">Inserisci una nuova Categoria</label>
    <div class="d-flex">
        <input type="text" class="form-control" placeholder="Nome Tag" name="name" id="categories">
        <button class="btn btn-info" type="submit">Salva</button>
    </div>
</form>