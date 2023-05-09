<x-layout>
    <div class="container-fluid bg-info p-5 text-center text-white">
        <div class="row justify-content-center">
            <div class="display-1">
                Accedi al sito
            </div>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif
            

                <form class="card p-5 shadow" action="{{route ('login')}}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}"">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" ">
                    </div>
                    <div class="mt-2">
                        <button  class="btn bg-info text-white">Accedi</button>
                        <p class="small mt-2">Non hai un account? <a href="{{route ('register')}}">Registrati</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>