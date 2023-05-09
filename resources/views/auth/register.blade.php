<x-layout>
    <div class="container-fluid bg-info p-5 text-center text-white">
        <div class="row justify-content-center">
            <div class="display-1">
                Registrati
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
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
           

                <form class="card p-5 shadow" action="{{route ('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="name" class="form-control" id="username" value="{{old('name')}}"">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}"">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" ">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" ">
                    </div>
                    <div class="mt-2">
                        <button  class="btn bg-info text-white">Registrati</button>
                        <p class="small mt-2">Già registrato? <a href="{{route ('login')}}">Clicca qui</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>