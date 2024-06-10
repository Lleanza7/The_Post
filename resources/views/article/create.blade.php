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
                    <h2 class="h2Category">Inserisci articolo</h2>

                </div>
            </div>
            <div class="containerArticleCreate">

                <div class="boxPreviewArticleCreate" >
                    <div style="height: 100%;" class="containerAllCard ">
                        <img  src="https://www.global-engineering-technologies.com/wp-content/uploads/2017/05/placeholder-image.png"
                            alt="">


                        <div class="containerDetailAllCard">
                            <p>Redatto il gg/dd/aaaa </p>
                            <h4>Titolo</h4>
                            <h5>Sottotitolo</h5>
                            <div class="containerTagAllCard">
                                    <p>Categoria&nbsp;-&nbsp; </p>
                                    <p>Tag&nbsp;-&nbsp; </p>
                         
                                <p>User</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="containerFormCreateArticle" >
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="formCreateArticle"  action="{{ route('article.store') }}" method="POST" "
                        enctype="multipart/form-data">
                        
                        @csrf
                        <div >
                            <label for="title" class="form-label"></label>
                            <input style="border-radius: 0px" placeholder="Titolo" type="text" name="title" class="form-control" id="title"
                                value="{{ old('title') }}">
                        </div>
                        <div >
                            <label for="subtitle" class="form-label"></label>
                            <input style="border-radius: 0px" placeholder="Sottotitolo" type="text" name="subtitle" class="form-control" id="subtitle"
                                value="{{ old('subtitle') }}">
                        </div>
                        <div >
                            <label for="image" class="form-label"></label>
                            <input style="border-radius: 0px" placeholder="Immagine" type="file" name="image" class="form-control" id="image">
                        </div>
                        <div >
                            <label for="tags" class="form-label"></label>
                            <input style="border-radius: 0px" placeholder="Tags" name="tags" class="form-control" id="tags" value="{{ old('tags') }}">
                           
                        </div>
                        <div >
                            <label for="category" class="form-label"></label>
                            <select style="border-radius: 0px" name="category" id="category" class="form-control text-capitalize">
                                <option value="">Scegli la categoria</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div >
                            <label for="body" class="form-label"></label>
                            <textarea style="border-radius: 0px" placeholder="Corpo del testo" name="body" id="body" cols="30" rows="7" class="form-control">{{ old('body') }}</textarea>
                            
                        </div>
                       
                         
                             <div>
                                    <button class="bottomFormCreateArticle">
                                        Inserisci un articolo
                                    </button>
                             </div>
                   
                    </form>
                </div>

            </div>
        </div>

    </main>

    <x-footer />
</body>

</html>
