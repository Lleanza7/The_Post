<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                User : {{$user->name}}
            </h1>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card title="{{ $article->title }}" subtitle="{{ $article->subtitle }}" image="{{ $article->image }}"
                        category="{{ $article->category->name }}" data="{{ $article->created_at->format('d/m/Y') }}"
                        url="{{route('article.show', compact('article'))}}" user="{{ $article->user->name }}"
                        urlCategory="{{ route('article.byCategory', ['category' => $article->category->id]) }}" 
                        urlUser="{{ route('article.byUser', ['user' => $article->user->id]) }}"/>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>