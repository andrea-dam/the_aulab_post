<x-layout>
    @if (sesion('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
</x-layout>