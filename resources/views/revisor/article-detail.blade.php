<x-layout>
    <x-header>{{$article->title}}</x-header>
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <img src="{{Storage::url($article->img)}}" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-12 col-md-6">
                <h2 class="my-3">{{$article->description}}</h2>
                <p>{{$article->body}}</p>
                <h4 class="my-3">Scritto da: {{$article->user->name}}</h4>
                <h5 class="my-3">Categoria: {{$article->category->name}}</h5>
                <h6 class="my-3">Scritto: {{$article->created_at->diffForHumans()}}</h6>
                <div class="d-flex justify-content-around my-5">
                    <a href="{{route('revisor.reject', $article)}}" class="btn btn-danger fs-3">Rifiuta</a>
                    <a href="{{route('revisor.accept', $article)}}" class="btn btn-success fs-3">Accetta</a>
                </div>
            </div>
        </div>
    </main>
</x-layout>