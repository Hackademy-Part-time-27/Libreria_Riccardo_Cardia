<x-layout>
<div class="container">
    <div class="row justify-content-center m-4">
        <div class="col-lg-6">
            <div class="mb-3">
                <h1>Login</h1> 
            </div>
            <div class="m-3">
            <form action="/login" method="POST" >
                @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('name') is-invalid @enderror" id="email" name="email">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('name') is-invalid @enderror" name="password"  id="password">
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-secondary">Login</button>
                    </div>                   
            </form>
            </div>
        </div>
    </div>
</div>
</x-layout>