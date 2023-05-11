<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center text-center">
            <div class="display-1">
                {{$article->title}}
            </div>
        </div>
        <div class="container my-5">
            <div class="row justify-content-around">
                
                 
                    <div class="col-12 col-md-8 ">
                        <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                       <div class="text-center">
                        <h2>{{$article->subtitle}}</h2>
                        <div class="my3 text-muted fst-italic">
                            <p>redatto da: {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>
                        </div>
                       </div>
                       <hr>
                       <p>{{$article->body}}</p>
                       <div class="text-center">
                            <a href="{{route('article.index')}}" class="btn btn-info text-qhite my-5">Torna Indietro</a>
                            @if (Auth::user() && Auth::user()->is_revisor && $article->is_accepted != 1)
                           <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-success text-white my-5">Accetta articolo</a>
                           <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-danger text-white my-5">Rifiuta articolo</a>
                           <p class="small fst-italic text-capitalize">
                            @foreach ($article->tags as $tag)
                                #{{$tag->name}}
                            @endforeach
                        </p>
                       @endif
                       </div>
                       
                       
                    </div>
                
                
            </div>
        </div>
    </div>
</x-layout>