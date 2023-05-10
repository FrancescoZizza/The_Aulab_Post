<table class="table table-striped table-hover border">
    <thead class="yable-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Redattore</th>
            <th scope="col">Azioni</th> 

        </tr>
    </thead>

    <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{ $article->id }}</th>
                <th>{{ $article->title }}</th>
                <th>{{ $article->subtitle }}</th>
                <th>{{ $article->user->name }}</th>
                
                    @if (is_null($article->is_accepted))
                        <a href="#" class="btn btn-info text-white">Leggi l'articolo</a>
                    
                        
                    @else
                        <a href="#" class="btn btn-info text-white">Riporta in revisione</a>    
                    
                    @endif
            </tr>
        @endforeach
    </tbody>

</table>