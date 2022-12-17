<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tag</th>
            <th scope="col">Articoli</th>
            <th scope="col">Modifica</th>
            <th scope="col">Elimina</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tags as $tag)
        <tr>
            <th scope="row">{{$tag->id}}</th>
            <td>{{$tag->name}}</td>
            <td>{{count($tag->articles)}}</td>
            <td>
                <form action="{{route('tag.edit', $tag)}}" method="POST">
                @csrf
                <input type="text" class="form-control" placeholder="Nuovo Nome" name="name">
                <button class="btn btn-info" type="submit">Salva</button>
                </form>
            </td>
            <td>
                <form action="{{route('tag.delete', $tag)}}" method="POST">
                @csrf
                <button class="btn btn-danger" type="submit">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>