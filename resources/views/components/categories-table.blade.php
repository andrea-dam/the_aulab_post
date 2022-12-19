<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Categoria</th>
            <th scope="col">Articoli</th>
            <th scope="col">Modifica</th>
            <th scope="col">Elimina</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>{{count($category->articles)}}</td>
            <td>
                <form action="{{route('category.edit', $category)}}" method="POST">
                @csrf
                <input type="text" class="form-control" placeholder="Nuovo Nome" name="name">
                <button class="btn btn-info" type="submit">Salva</button>
                </form>
            </td>
            <td>
                <form action="{{route('category.delete', $category)}}" method="POST">
                @csrf
                <button class="btn btn-danger" type="submit">Elimina</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>