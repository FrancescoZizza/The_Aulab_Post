<table class="table table-striped table-hover border">
    <thead class="table-secondary text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">categoria</th>
            <th scope="col">Tags</th>
            <th scope="col">Creato il</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>

    <tbody>

        @foreach($articles as $article)
        <tr class="text-center">
            <th scope="row">{{$article->id}}</th>
            <td>{{substr($article->title, 0, 20)}}</td>
            <td>{{substr($article->subtitle, 0, 20)}}</td>
            <td>{{$article->category->name ?? 'Non categorizzato'}}</td>
            <td>
                @foreach ($article->tags as $tag)
                    {{$tag->name}}
                @endforeach
            </td>
            <td>{{$article->created_at->format('d/m/Y')}}</td>
            <td>
                <a href="{{route('article.show', compact('article'))}}" class="btn btn-info text-white">Leggi l'articolo</a>
                <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning text-white">Modifica l'articolo</a>
                <form action="{{route('article.destroy',compact('article') )}}" method="POST" class="d-inline">
                    @csrf
                    @method ('delete')
                    <button type="submit" class="btn btn-danger">Elimina l'articolo</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>