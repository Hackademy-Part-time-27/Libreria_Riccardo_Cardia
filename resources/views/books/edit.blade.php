<x-layout>
@auth

<div class="container">
    <div class="row justify-content-end mb-2">
        <div class="col-lg-3 m-3">
            <a class="btn btn-secondary" href="{{ route('books.index') }}"> Torna alla libreria </a>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="mb-3">
                <h1>Modifica Libro</h1>
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <form action="{{ route('books.update', $book) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="category" class="form-label">Categoria</label>
                    <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" name="category" value="{{ old('category', $book->category) }}">
                    @error('category') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('category', $book->title) }}">
                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Anno</label>
                    <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year" value="{{ old('category', $book->year) }}">
                    @error('year') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-secondary">Modifica libro</button>
                </div>
                    
            </form>

        </div>
    </div>
</div>
@endauth

</x-layout>