<table class="table table-striped table-hover border">
    <thead class="table-secondary text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">redattore</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>

    <tbody>

        @foreach($articles as $article)
        <tr class="text-center">
            <th scope="row">{{$article->id}}</th>
            <td>{{substr($article->title, 0, 20)}}</td>
            <td>{{substr($article->subtitle, 0, 20)}}</td>
            <td>{{$article->user->name}}</td>
            <td>
                @if (is_null($article->is_accepted))
                  <a href="{{route('article.show', compact('article'))}}" class="btn btn-secondary text-white btn-radius mb-1">Leggi</a>
                  <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-success text-white btn-radius mb-1">Accetta l'articolo</i></a>
                  <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-danger text-white btn-radius mb-1">Rifiuta l'articolo</a>
                @else
                  <a href="{{route('revisor.undoArticle', compact('article'))}}" class="btn btn-warning text-white btn-radius">Manda in revisione</a>
                @endif
            </td>
        </tr>
        @endforeach

    </tbody>
</table>