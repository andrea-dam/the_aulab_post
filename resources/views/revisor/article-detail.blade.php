<x-layout>
    <header class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>Revisione Articolo</h1>
            </div>
        </div>
    </header>
    <main class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{Storage::url($article->img)}}" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-md-6">
                <h3 class="my3"><span class="h5">Titolo: </span>{{$article->title}}</h3>
                <h3 class="my3"><span class="h5">Descrizione: </span>{{$article->description}}</h3>
                <h3 class="my3"><span class="h5">Autore: </span>{{$article->user->name}}</h3>
                <h3 class="my3"><span class="h5">Categoria: </span>{{$article->category->name}}</h3>
                <h3 class="my3"><span class="h5">Creato: </span>{{$article->created_at->diffForHumans()}}</h3>
                <div class="d-flex">
                    <a href="{{route('revisor.accept', $article)}}" class="btn btn-success mx-5">Accetta</a>
                    <a href="{{route('revisor.reject', $article)}}" class="btn btn-danger">Rifiuta</a>
                </div>
            </div>
        </div>
    </main>
</x-layout>