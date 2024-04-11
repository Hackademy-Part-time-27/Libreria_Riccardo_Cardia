<x-layout>
<div class="container m-5">
    <div class="row justify-content-start">
        <div class="col-lg-6">
            <h1>
                Benvenuto {{ auth()->user()->name }} !!
            </h1>
        </div>
    </div>
</div>
</x-layout>