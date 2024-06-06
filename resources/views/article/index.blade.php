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
        <h2>TUTTI GLI ARTICOLI</h2>

        <div class="containerFilter">

          <div class="BoxSelect">
                <div class="containerSelect"><select name="" id="">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select></div>
                <div class="containerSelect"><select name="" id="">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select></div>
                <div class="containerSelect"><select name="" id="">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select></div>
          </div>
                
                <button>cerca</button> 
            </div>
              
        </div>
        <main class="mainAllCard">
          <div class="container text-center ">
            <div class="row ">
            
              @foreach ($articles as $article)
              @if ($article->category_id)
                  @php
                      $varCategory = $article->category->name;
                      $varUrlCategory = route('article.byCategory', ['category' => $article->category->id]);
                  @endphp
              @else
                  @php
                      $varCategory = '';
                      $varUrlCategory = '#';
                  @endphp
              @endif
              <div  class="col-12 col-md-6 col-lg-4 col-ml-4 col-sm-12 p-2">
                  <x-card  title="{{ $article->title }}" subtitle="{{ $article->subtitle }}" image="{{ $article->image }}"
                      category="{{ $varCategory }}" urlCategory="{{ $varUrlCategory }}"
                      data="{{ $article->created_at->format('d/m/Y') }}"
                      url="{{ route('article.show', compact('article')) }}" user="{{ $article->user->name }}"
                      urlUser="{{ route('article.byUser', ['user' => $article->user->id]) }}" :tags="$article->tags"
                      readDuration="{{ $article->readDuration() }}" />
              </div>

             
          @endforeach
               
              
        
                
            </div>
        </div>

       </main >
     

</body>

</html>
