<x-layout>
<div class="container">
    <div class="row justify-content-center m-4">
        <div class="col-lg-6">
            <div class="mb-3">
                <h1>Registrati</h1> 
            </div>
            <div class="m-3">
            <form action="/register" method="POST" >
                @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control @error('name') is-invalid @enderror" id="email" name="email">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('name') is-invalid @enderror" name="password"  id="password">
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control @error('name') is-invalid @enderror" name="password_confirmation"  id="password_confirmation">
                        @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                    
            </form>
            </div>
              

        </div>
    </div>
</div>
</x-layout>