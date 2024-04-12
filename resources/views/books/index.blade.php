<x-layout>

<div class="row justify-content-center m-4">
    <div class="col-lg-6 mt-3">
        <h1>Catalogo dei Libri</h1>
    </div>
    <div class="col-lg-3 mt-3">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                    {{ session('success') }}
            </div>
        @endif    
    </div>
    @auth
    <div class="col-lg-3 mt-4">
        <a class="btn btn-secondary" href="{{ route('books.create') }}">Aggiungi un nuovo libro alla libreria!</a>
    </div>
    @endauth
</div>

<div class="row justify-content-end w-75 m-5">
    
        
            @foreach($books as $book)
            <div class="col">
                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{ $book->title }}</h5>
                        <p class="card-text">Genere: {{ $book->category }}</p>
                        <p class="card-text">Anno di pubblicazione : {{ $book->year }}</p>
                        @auth
                        <a class="badge text-bg-secondary text-decoration-none" href="{{ route('books.edit', $book) }}">Modifica</a>
                        <form action="{{ route('books.destroy', $book) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="badge text-bg-danger" type="submit">Elimina</button>
                        </form>
                        <a  class="badge text-bg-success " href="{{ route('books.manage', $book) }}">Prestito</a>
                        @endauth
                    </div>
                </div>
            </div>    
            @endforeach    
        
   
</div>



</x-layout>