<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Richieste di Amministratore</h2>
                <x-admin-requests-table :adminRequests="$adminRequests" />
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Richieste di Revisore</h2>
                <x-revisor-requests-table :revisorRequests="$revisorRequests" />
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2>Richieste di Articolista</h2>
                <x-writer-requests-table :writerRequests="$writerRequests" />
            </div>
        </div>
    </div>

</x-layout>