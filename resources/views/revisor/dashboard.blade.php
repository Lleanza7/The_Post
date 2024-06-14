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
   <a href="{{ route('admin.dashboard') }}">     <h6  onclick="admin()">Amministratore</h6></a>
   @endif
   @if (Auth::user()->is_revisor)
        <h6 id="revisorH6Dashboard" style=" border-left: 0.5px solid black;
    border-right: 0.5px solid black;" onclick="revisor()">Revisore</h6>
      @endif
      @if (Auth::user()->is_writer)
       <a href="{{ route('writer.dashboard') }}">
            <h6 onclick="redatore()">Redattore</h6>
        </a>
        @endif
        @endauth
          </div>
      <div class="containerSettingRevisor" >
        <!-- Contenuto per il revisore -->
 @if (session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif

        <div>
            <h6  class="categorieDashboardH6">ARTICOLI DA REVISIONARE</h6>
            <x-articles-table    :articles="$unrevisonedArticles"   />
        </div>
 
        <div>
            <h6 style="margin: 0px" class="categorieDashboardH6">ARTICOLI PUBLICATI</h6>
            <x-articles-table  :articles="$acceptedArticles"   />
        </div>
  
        <div >
            <h6 style="margin: 0px" class="categorieDashboardH6">ARTICOLI RESPINTI</h6>
            <x-articles-table  :articles="$rejectedArticles"  />
        </div>


      </div>
    
    </div>
  
        </div>

    </main>

    <x-footer />
  
</body>

</html>


