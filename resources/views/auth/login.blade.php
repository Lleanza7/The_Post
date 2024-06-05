<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

  <main class="mainLogin">
        <div class="boxImgLogin">
           <div class="logoMobileLogin"> <x-navbar-new /></div>
           <div class="boxGlassLogin" ><p>ACCEDI AL TUO ACCOUNT IN MODO SICURO PER VISUALIZZARE E GESTIRE I TUOI ANNUNCI. INSERISCI LA TUA EMAIL E PASSWORD PER INIZIARE.</p></div>
        </div>
    
    
        <div class="boxForm">
            <div class="logoLogin">
                <a  href="{{route('home')}}">
                    <h1> THE|POST</h1>
                </a>
            </div>
    
    <h3>Accedi</h3>

    <form  action="{{route('login')}}" method="POST">
        @csrf
        <div >
            <label for="email" class="form-label"></label>
            <input placeholder="Inserisci la tua email" name="email" type="email" class="form-control" id="email"value="{{old('email')}}">
        </div>
        
        <div >
            <label for="password" class="form-label"></label>
            <input name="password" type="password" class="form-control" id="Inserisci la tua password" placeholder="Password" >
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </div>
        @endif
        <button class="bottomLogin" type="submit" >Accedi</button>
        <p >Non sei ancora registrato? <a href="{{route('register')}}">Clicca qui</a></p>
    </form>
    
        </div>
  </main>


</body>

</html>
