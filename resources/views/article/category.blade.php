<x-layout>
    <x-header>Categorie</x-header>
    <main class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="card p-0 border-0">
                    <img class="" src="{{Storage::url($article->img)}}" alt="{{$article->title}}">
                    <div class="card-body">
                        <h5 class="card-title text-dark">{{$article->title}}</h5>
                        <p class="card-text text-dark">{{substr($article->description, 0, 100)}} ...</p>
                        <a href="{{route('article.category', $article->category)}}" class="card-text">{{$article->category->name}}</a>
                        <a href="{{route('article.show', $article)}}" class="btn btn-primary">Leggi</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</x-layout>