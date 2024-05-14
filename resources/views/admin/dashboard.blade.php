<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Bentornato, amministratore
            </h1>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">Richieste per ruolo amministratore</div>
            <x-requests-table :roleRequest="$adminRequests" role="amministratore" />
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">Richieste per ruolo revisore</div>
            <x-requests-table :roleRequest="$revisorRequests" role="revisore" />
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">Richieste per ruolo redattore</div>
            <x-requests-table :roleRequest="$writerRequests" role="redattore" />
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">I tags della piattaforma</div>
            <x-metainfo-table :metaInfos="$tags" metaType="tags" />
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">Le categorie della piattaforma</div>
            <x-metainfo-table :metaInfos="$categories" metaType="categories" />
            <form action="{{route('admin.storeCategory')}}" class="d-flex" method="POST">
                @csrf
                <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova categoria">
                <button type="submit" class="btn btn-success text-white">Aggiungi</button>
            </form>
        </div>
    </div>



</x-layout>
