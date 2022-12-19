<x-layout>

    <x-header>Dashboard Revisore</x-header>
    @if (count($articles) > 0)
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <x-revisor-table :articles="$articles" />
            </div>
        </div>
    </main>
    @else
    <main>
        <h2 class="text-center">Non ci sono Articoli da revisionare</h2>
    </main>
    @endif

</x-layout>