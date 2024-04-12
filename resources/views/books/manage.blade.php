<x-layout>
@auth
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="mb-3">
                <h1>Form di noleggio del libro</h1> 
                <h2 class="text-secondary">"{{ $book->title }}"</h2>
                
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <form action="{{ route('books.borrow', $book) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="borrowed" class="form-label">Noleggiato</label>
                    <select class="@if($book->borrowed)btn btn-danger @else btn btn-success @endif" name="borrowed" id="borrowed">
                        <option value="0">No</option>
                        <option value="1" @selected($book->borrowed)>Si</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="borrowed_to" class="form-label">Beneficiario</label>
                    <input type="text" class="form-control @error('borrowed_to') is-invalid @enderror" 
                    id="borrowed_to" name="borrowed_to" value="{{ old('borrowed_to', $book->borrowed_to) }}">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-secondary">Noleggia</button>
                </div>
                    
            </form>

        </div>
    </div>
</div>
@endauth

</x-layout>