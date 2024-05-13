<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Bentornato, Revisore
            </h1>
        </div>
    </div>

    @if (session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">Articoli da revisionare</div>
            <x-articles-table 
            :articles="$unrevisonedArticles" 
            />
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">Articoli pubblicati</div>
            <x-articles-table 
            :articles="$acceptedArticles" 
            />
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">Articoli respinti</div>
            <x-articles-table 
            :articles="$rejectedArticles" 
            />
        </div>
    </div>



</x-layout>