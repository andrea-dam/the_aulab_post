<x-layout>
    
    <main class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2>{{$article->title}}</h2>
                <h3>{{$article->description}}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <p>{{$article->body}}</p>
                <a href="{{route('article.category', $article->category)}}">{{$article->category->name}}</a>
                <p>Pubblicato da: {{$article->user->name}}</p>
                <p>Pubblicato il: {{$article->created_at->format('d/m/Y')}}</p>
            </div>
        </div>
    </main>
    
</x-layout>