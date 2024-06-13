<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="   background-color: #E8ECEF;">
    <x-nav-bar-white />
    <div class="headerIndex">




    </div>
    <main class="mainAllCard">

        <div class="container text-center ">
            <div class="Boxh2Index">
                <div class="hoverBoxh2Index">
                    <h2 class="h2Category">Dashboard</h2>

                </div>
            </div>
    <div class="containerDashboard">
      <div class="containerListDashboard">
        <h6 id="adminH6Dashboard"  onclick="admin()">Amministratore</h6>
        <a  href="{{ route('revisor.dashboard') }}">
            <h6 style=" border-left: 0.5px solid black;
        border-right: 0.5px solid black;" onclick="revisor()">Revisore</h6>
           <a href="{{ route('writer.dashboard') }}"> <h6 onclick="redatore()">Redattore</h6></a>
        </a>
      </div>
      <div class="containerSettingAdmin">
        <!-- Contenuto per l'amministratore -->

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
            <div class="col-12">Le categorie della piattaforma</div>
            <x-metainfo-table :metaInfos="$categories" metaType="categories" />
            <form action="{{route('admin.storeCategory')}}" class="d-flex" method="POST">
                @csrf
                <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova categoria">
                <button type="submit" class="btn btn-success text-white">Aggiungi</button>
            </form>
        </div>
    </div>

      </div>
     
    </div>
  
        </div>

    </main>

    <x-footer />
   
</body>

</html>

