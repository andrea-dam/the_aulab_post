<x-layout>
    
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    
    {{-- <x-header>The Aulab Post</x-header> --}}
    
    <header class="container-fluid min-vh-100 mb-5">
        <div class="row justify-content-center h-100">
            <div class="col-6 d-flex align-items-center justify-content-end">
                <h1 class="display-1">THE AULAB POST</h1>
            </div>
            <div class="col-6 newspapers">
                
            </div>
        </div>
    </header>
    
    <main class="container">
        <h2 class="text-center display-2 mb-5">Gli ultimi Articoli</h2>
        
        <div class="row row-cols-4">
            @foreach ($articles as $article)
            <div class="col">
                <div class="card bg-secondary p-0 border-0">
                    <img class="card-img-top" src="{{Storage::url($article->img)}}" alt="{{$article->title}}">
                    <div class="card-body">
                        <h5 class="card-title text-dark">{{$article->title}}</h5>
                        <p class="card-text text-dark">{{substr($article->description, 0, 100)}} ...</p>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="{{route('article.category', $article->category)}}" class="card-text">{{$article->category->name}}</a>
                            <a href="{{route('article.show', $article)}}" class="btn btn-primary">Leggi</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
    
</x-layout>