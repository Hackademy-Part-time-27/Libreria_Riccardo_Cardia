<x-layout>
@auth
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="mb-3">
                <h1>Aggiungi un nuovo libro alla libreria</h1>
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category" class="form-label">Categoria</label>
                    <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" name="category">
                    @error('category') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Anno</label>
                    <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year">
                    @error('year') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-secondary">Aggiungi libro</button>
                </div>
                    
            </form>

        </div>
    </div>
</div>
@endauth

</x-layout>