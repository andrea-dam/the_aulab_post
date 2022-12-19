<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tag</th>
            <th scope="col">Articoli con questo Tag</th>
            <th scope="col">Modifica</th>
            <th scope="col" class="text-end">Elimina</th>
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
                <span class="d-flex">
                    <input type="text" class="form-control me-3" placeholder="Nuovo Nome" name="name">
                    <button class="btn btn-info" type="submit">Salva</button>
                </span>
            </form>
            </td>
            <td class="text-end">
                <form action="{{route('tag.delete', $tag)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>