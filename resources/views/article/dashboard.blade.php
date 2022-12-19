<x-layout>
    <header class="container">
        <div class="row">
            <div class="col-12">
                <h1>Bentornato, {{Auth::user()->name}}</h1>
            </div>
        </div>
    </header>
    <main class="container">
        <div class="row">
            @if(count(Auth::user()->articles) > 0)
            <div class="col-12">
                <h2>Tutti gi articoli</h2>
            </div>
            <div class="col-12">
                <x-articles-table :articles="Auth::user()->articles"/>
            </div>
            @else
            <div class="col-12">
                <h2>Non hai scritto ancora alcun articolo</h2>
                <a href="{{route('article.create')}}" class="btn btn-info">Crea il tuo primo articolo</a>
            </div>
            @endif
        </div>
    </main>
</x-layout>