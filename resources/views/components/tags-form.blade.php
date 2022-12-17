<form action="{{route('tag.store')}}" method="POST">
    @csrf
    <label for="tags" class="form-label">Inserisci un nuovo tag</label>
    <div class="d-flex">
        <input type="text" class="form-control" placeholder="Nome Tag" name="name" id="tags">
        <button class="btn btn-info mx-2" type="submit">Salva</button>
    </div>
</form>