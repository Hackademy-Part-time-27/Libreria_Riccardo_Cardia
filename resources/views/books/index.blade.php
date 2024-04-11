<x-layout>

<div class="row justify-content-center m-4">
    <div class="col-lg-6 mt-3">
        <h1>Catalogo dei Libri</h1>
    </div>
    @auth
    <div class="col-lg-3 mt-4">
        <a class="btn btn-secondary" href="{{ route('books.create') }}">Aggiungi un nuovo libro alla libreria!</a>
    </div>
    @endauth
</div>

<div class="row justify-content-start m-5">
    <div class="col-lg-6">
        
            @foreach($books as $book)
                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Titolo: {{ $book->title }}</h5>
                        <p class="card-text">Genere: {{ $book->category }}</p>
                        <p class="card-text">Anno di pubblicazione : {{ $book->year }}</p>
                    </div>
                </div>
            @endforeach    
        
    </div>
</div>



</x-layout>