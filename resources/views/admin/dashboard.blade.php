<x-layout>
    <main class="container">

        <div class="row">
            <div class="col-6">
                <h2>Richieste di Amministratore</h2>
                <x-admin-requests-table :adminRequests="$adminRequests" />
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h2>Richieste di Revisore</h2>
                <x-revisor-requests-table :revisorRequests="$revisorRequests" />
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h2>Richieste di Articolista</h2>
                <x-writer-requests-table :writerRequests="$writerRequests" />
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="col-12 col-md-6">
                    <h2>Crea Tag</h2>
                    <x-tags-form />
                </div>
                <h2>Gestisci i Tag</h2>
                <x-tags-table :tags="$tags" />
            </div>
        </div>

    </main>
</x-layout>