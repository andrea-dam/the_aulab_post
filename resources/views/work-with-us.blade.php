<x-layout>
    
    <x-header>Lavora con Noi</x-header>
    
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('user-role-request')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale posizione vuoi candidarti?</label>
                        <select name="role" class="form-control" id="role">
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Scrittore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Il tuo indirizzo email</label>
                        <input type="email" class="form-control" name="email" @auth value="{{Auth::user()->email}}" @endauth>
                    </div>
                    <div class="mb-3">
                        <label for="reason" class="form-label">Perché dovremmo assumerti?</label>
                        <textarea name="reason" id="reason" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Invia Candidatura</button>
                </form>
            </div>
        </div>
    </main>
    
</x-layout>