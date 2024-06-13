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

        @auth
        @if (Auth::user()->is_admin)
       <a href="{{ route('admin.dashboard') }}"> <h6  onclick="admin()">Amministratore</h6></a>
       @endif
       @if (Auth::user()->is_revisor)

    <a href="{{ route('revisor.dashboard') }}">
            <h6 style="  border-left: 0.5px solid black;
        border-right: 0.5px solid black;" onclick="revisor()">Revisore</h6>
    </a>

    @endif
    @if (Auth::user()->is_writer)

        <h6 id="redatorH6Dashboard" onclick="redatore()">Redattore</h6>

        @endif
                        @endauth

      </div>
  
 
      <div class="containerSettingRedator" >
        <!-- Contenuto per il redattore -->
 @if (session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">Articoli in fase di revisione</div>
            <x-writer-articles-table
            :articles="$unrevisionedArticles" 
            />
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">Articoli pubblicati</div>
            <x-writer-articles-table 
            :articles="$acceptedArticles" 
            />
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">Articoli respinti</div>
            <x-writer-articles-table  
            :articles="$rejectedArticles" 
            />
        </div>
    </div>

      </div>
    </div>
  
        </div>

    </main>

    <x-footer />
  
</body>

</html>


