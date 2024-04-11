<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <h1>Benvenuto nella libreria di Riccardo!</h1>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-center mt-3">
            <div class="col-lg-12 text-center">
                <h2>Trovi i migliori libri, condividili con chi vuoi!</h2>
            </div>
            <div class="col-lg-12 mt-5 text-center">
                <a class="btn btn-secondary text-decoration-none w-25 m-3" href="{{ route('books.index') }}">Vai alla Libreria</a>
            </div>
        </div>
    </div>

    <div class="text-center">
        <img class="img-fluid" src="{{ asset('/img/header.webp') }}" alt="">
    </div>

</x-layout>