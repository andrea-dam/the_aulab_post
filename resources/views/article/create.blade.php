<x-layout>
    <x-header>Crea Articolo</x-header>
    <main class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7">
                <x-create-article-form :tags="$tags"/>
            </div>
        </div>
    </main>

</x-layout>