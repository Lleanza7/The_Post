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
   <a href="{{ route('admin.dashboard') }}">     <h6  onclick="admin()">Amministratore</h6></a>
        <h6 id="revisorH6Dashboard" style=" border-left: 0.5px solid black;
    border-right: 0.5px solid black;" onclick="revisor()">Revisore</h6>
       <a href="{{ route('writer.dashboard') }}">
            <h6 onclick="redatore()">Redattore</h6>
          </div>
       </a>
  
      <div class="containerSettingRevisor" >
        <!-- Contenuto per il revisore -->
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

      </div>
    
    </div>
  
        </div>

    </main>

    <x-footer />
  
</body>

</html>


