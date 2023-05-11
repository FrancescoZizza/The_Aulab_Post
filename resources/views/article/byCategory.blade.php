<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center text-center">
            <div class="display-1">
                Categoria: {{$category->name}}
            </div>
        </div>
    </div>
        <div class="container-fluid my-5">
            <div class="row justify-content-around">
                @foreach ($articles as $article)
                 <div class="col-12 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$article->title}}</h5>
                          <p class="card-text">{{$article->subtitle}}</p>
                          <p class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</p>
                          
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                            Redatto il: {{$article->created_at->format('d/m/Y')}} 
                            <br> da: {{$article->user->name}}
                            <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi</a>
                            <p class="small fst-italic text-capitalize">
                                @foreach ($article->tags as $tag)
                                    #{{$tag->name}}
                                @endforeach
                            </p>
                        </div>
                      </div>
                </div>   
                @endforeach
                
            </div>
        </div>
    
</x-layout>