<x-layout>
    <main class="container my-5">
        
        @if(count($adminRequests) + count($revisorRequests) + count($writerRequests) != 0)
        <div class="row">
            @if (count($adminRequests) > 0)
            <div class="col-6">
                <h2>Richieste di Amministratore</h2>
                <x-admin-requests-table :adminRequests="$adminRequests" />
            </div>
            @else
            <div class="col-6">
                <h2>Nessuna richiesta per diventare amministratore</h2>
            </div>
            @endif
            @if(count($revisorRequests) > 0)
            <div class="col-6">
                <h2>Richieste di Revisore</h2>
                <x-revisor-requests-table :revisorRequests="$revisorRequests" />
            </div>
            @else
            <div class="col-6">
                <h2>Nessuna richiesta per diventare revisore</h2>
            </div>
            @endif
            @if (count($writerRequests) > 0)
            <div class="col-6">
                <h2>Richieste di Articolista</h2>
                <x-writer-requests-table :writerRequests="$writerRequests" />
            </div>
            @else
            <div class="col-6">
                <h2>Nessuna richiesta per diventare Articolista</h2>
            </div>
            @endif
        </div>
        @else
        @endif
        
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="col-12 col-md-6">
                    <h2>Crea Tag</h2>
                    <x-tags-form />
                </div>
                <h2 class="mt-5">Gestisci i Tag</h2>
                <x-tags-table :tags="$tags" />
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-12">
                <div class="col-12 col-md-6">
                    <h2>Aggiungi Categoria</h2>
                    <x-categories-form />
                </div>
            </div>
        </div>
        
    </main>
</x-layout>