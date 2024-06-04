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
        </div>
    
    
        <div class="boxForm">
            <div class="logoLogin">
                <a  href="{{route('home')}}">
                    <h1> THE|POST</h1>
                </a>
            </div>

    
    <h3>Registrati</h3>
    <form action="{{route('register')}}" method="POST">
        @csrf
        <div >
            <label for="username"  ></label>
            <input  name="name" type="text" class="form-control" id="username" value="{{old('name')}}" placeholder="Inserisci username">
        </div>
        <div>
            <label for="email" ></label>
            <input placeholder="Inserisci la tua email" name="email" type="email" class="form-control" id="email"value="{{old('email')}}">
        </div>
        <div >
            <label for="password"></label>
            <input placeholder="Inserisci la tua password" name="password" type="password" class="form-control" id="password">
        </div>
        <div>
            <label for="password_confirmation" ></label>
            <input placeholder="Conferma la tua password" name="password_confirmation" type="password" class="form-control"
                id="password_confirmation">
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </div>
        @endif
        <button class="bottomLogin" type="submit" >Registrati</button>
        <p >Già registrato? <a href="{{route('login')}}">Clicca qui</a</a></p>
    </form>
    
        </div>
  </main>


</body>

</html>
