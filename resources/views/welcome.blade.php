<x-layout>
<div class="container-fluid">
    <div class="row justify-content-center text-center">
        <div class="display-1">
            The Aulab Post
        </div>
        @if (session ('message'))
            <div class="alert alert-success text-center">
                {{ session ('message') }}
            </div>
        @endif
    </div>
    <div class="container-fluid my-5 text-center">
        <h2>Gli Ultimi Articoli Pubblicati</h2>
        <div class="row justify-content-around my-5">
            @foreach ($articles as $article)
             <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">{{$article->subtitle}}</p>
                      <a class="small text-muted fst-italic text-capitalize" href="{{route('article.byCategory', ['category' => $article->category->id])}}">{{$article->category->name}}</a>
                      
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                        Redatto il: {{$article->created_at->format('d/m/Y')}} 
                         
                        <a class="small text-muted fst-italic text-capitalize" href="{{route('article.byUser', ['user' => $article->user->id])}}">{{$article->user->name}}</a>
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi</a>
                    </div>
                  </div>
            </div>   
            @endforeach
            
        </div>
    </div>
</div>

</x-layout>