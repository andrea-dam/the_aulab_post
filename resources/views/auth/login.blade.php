<x-layout>
    <x-header>Accedi</x-header>
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </main>
</x-layout>