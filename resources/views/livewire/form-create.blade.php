            <div class="containerArticleCreate">

                <div class="boxPreviewArticleCreate">
                    <div class="containerAllCard ">
                        @if (empty($image))
                            <div aria-hidden="true" style="height: 100%">
                                <div class="card-text placeholder-glow skeleton centro-skeletron" style="height: 100%">
                                    <span class="placeholder col-12 "
                                        style="height: 100%; width: 100%;cursor:default;"></span>
                                </div>
                            </div>
                        @else
                            <img style="object-position: top" src="{{ $image->temporaryUrl() }}" alt="">
                        @endif
                        <div class="containerDetailAllCard">
                            <p>{{ date('d/m/Y H:i') }}</p>
                            <h4 class="card-text placeholder-glow skeleton centro-skeletron">
                                @if ($title == false)
                                    <span class="placeholder col-2" style="cursor:default"></span>
                                @else
                                    {{ $title }}
                                @endif
                            </h4>
                            {{--  <h4>{{($title) ? $title : '-------' }}</h4> --}}
                            <h5 class="card-text placeholder-glow skeleton centro-skeletron">
                                @if ($subtitle == false)
                                    <span class="placeholder col-2" style="cursor:default"></span>
                                @else
                                    {{ $subtitle }}
                                @endif
                            </h5>
                            <div class="containerTagAllCard">
                                <p class="card-text placeholder-glow skeleton centro-skeletron">
                                    @if ($category_id == false)
                                        <span class="placeholder col-12" style="cursor:default"></span>
                                    @else
                                        {{ ($name[$category_id - 1])."." }}
                                    @endif
                                </p>
                                <p class="card-text placeholder-glow skeleton centro-skeletron">
                                    @if ($tags == false)
                                        <span class="placeholder col-6" style="cursor:default"></span>
                                    @else
                                        {{ $tags . "." }}
                                    @endif
                                </p>
                                <p>{{ Auth::user()->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="containerFormCreateArticle">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="formCreateArticle" action="{{ route('article.store') }}" method="POST" "
                        enctype="multipart/form-data">
                        
                        @csrf
                        <div >
                            <label for="title" class="form-label"></label>
                            <input style="border-radius: 0px" placeholder="Titolo" type="text" name="title" class="form-control" id="title"
                            wire:model.live="title">
                        </div>
                        <div >
                            <label for="subtitle" class="form-label"></label>
                            <input style="border-radius: 0px" placeholder="Sottotitolo" type="text" name="subtitle" class="form-control" id="subtitle"
                            wire:model.live="subtitle"  >
                        </div>
                        <div >
                         

                            <label for="image" class="form-label" ></label>
                            <input style="border-radius: 0px" placeholder="Immagine" type="file" name="image" class="form-control" id="image"  wire:model="image">
                        </div>
                        <div >
                            <label for="tags" class="form-label"></label>
                            <input style="border-radius: 0px" placeholder="Tags" name="tags" class="form-control" id="tags" wire:model.live="tags" >
                           
                        </div>
                        <div >
                            <label for="category" class="form-label"></label>
                            <select style="border-radius: 0px" name="category" id="category" class="form-control text-capitalize" wire:model.live="category_id">
                                <option value="">Scegli la categoria</option>
                                  @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        </select>
                </div>
                <div>
                    <label for="body" class="form-label"></label>
                    <textarea style="border-radius: 0px" placeholder="Corpo del testo" name="body" id="body" cols="30"
                        rows="7" class="form-control" wire:model.live="body"></textarea>

                </div>


                <div>
                    <button class="bottomFormCreateArticle">
                        Crea il tuo articolo
                    </button>
                </div>

                </form>
            </div>

            </div>
