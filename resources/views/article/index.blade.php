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
                    <h2 class="h2Category">Tutti gli articoli</h2>

                </div>
            </div>
            <div style="width: 100%;display:flex;justify-content: space-between;">
                <form class="BoxSelect" action="{{route('article.indexFilter')}}" method="POST">
                    @csrf
                    {{-- ordina per categoria --}}
                    <div class="containerSelect">
                        <select name="byCategory" id="">
                            <option value="">Filtra per categoria</option>
                            @foreach ($categories as $category) 
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- ordina per data creazione --}}
                    <div class="containerSelect">
                        <select name="byDate" id="">
                            <option value="">Ordina per</option>
                            <option value="desc">Più recente</option>
                            <option value="asc">Meno recente</option>
                            <option value="readTime">Tempo di lettura</option>
                        </select>
                    </div>
                    {{-- tempo di lettura --}}
                    <div class="containerSelect">
                        <select name="byReadTime" id="">
                            <option value="">Tempo di lettura</option>
                            <option value="less_equal_5">5 minuti o inferiore</option>
                            <option value="between_5_10"> 5 -10 minuti</option>
                            <option value="greater_equal_10">10 minuti o più</option>
                        </select>
                    </div>
                    <button>cerca</button>
                </form>


            </div>
            <div  style="background-color:white;" class="row p-3">

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
                        <x-card title="{{ $article->title }}" subtitle="{{ $article->subtitle }}"
                            image="{{ $article->image }}" category="{{ $varCategory }}"
                            urlCategory="{{ $varUrlCategory }}" data="{{ $article->created_at->format('d/m/Y') }}"
                            url="{{ route('article.show', compact('article')) }}" user="{{ $article->user->name }}"
                            urlUser="{{ route('article.byUser', ['user' => $article->user->id]) }}" :tags="$article->tags"
                            readDuration="{{ $article->readDuration() }}" />
                    </div>
                @endforeach




            </div>
        </div>

    </main>

    <x-footer />
</body>

</html>
