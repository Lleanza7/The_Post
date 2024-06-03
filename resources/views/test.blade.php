<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    <header>
        <x-navbar-new />
        <p>LUCA & APOL</p>
        <h2>Notizie globali e voci locali, il tuo <br>
            spazio per <span class="txt-rotate" data-period="1000"
                data-rotate='[ "informarti","esprimerti.", "manifestarti.", "raccontarti." ]'> </span>
        </h2>
        <div class="containerFeautured">
            <h6>IN EVIDENZA</h6>
            <p>Politica - Finanza - Sport - Tech</p>
        </div>
    </header>
    <main>
        {{-- blocco di codice 1 POLITICA --}}
        <div style="background-color: #E8ECEF;" class="test">
            <div class="boxDivImg">
                <div class="divImg">
                    <div class="boxDivImgGlass">
                        <h2> POLITICA</h2>
                        <p>Tieniti aggiornato sulle ultime novità politiche a livello locale, nazionale e
                            internazionale. Scopri analisi, opinioni e approfondimenti su governi, elezioni,
                            politiche
                            pubbliche e molto altro.
                        </p>
                        <button class="buttonDivImgCat">Scopri..</button>
                    </div>
                </div>
            </div>
            <div class="boxCards">
                <div class="containerCard1">
                    @foreach ($articlePolitica as $key => $article)
                        @if ($key == 0)
                            <div class="cardHomeLarge">
                                <div class="imgCardLarge">
                                    <img src="{{ $article->image }}" alt="">
                                    <div class="divHover"></div>
                                </div>
                                <div class="infoCardLarge">
                                    <div class="infoCardDateLarge">
                                        <p class="categoryCard">{{ $article->category->name }} </p>
                                        <p>{{ $article->created_at }}</p>
                                    </div>
                                    <h4>{{ $article->title }}</h4>
                                </div>
                            </div>
                        @elseif ($key == 2)
                            <div class="cardHomeSmall">
                                <div class="divHoverSmall"></div>
                                <img src="{{ $article->image }}" alt="">

                                <div class="infoSmallCard">
                                    <div>
                                        <div class="infoCardDateSmall">
                                            <p class="categoryCard">{{ $article->category->name }}</p>
                                            <p>{{ $article->created_at }}</p>
                                        </div>
                                        <h4>{{ $article->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="containerCard2">
                    @foreach ($articlePolitica as $key => $article)
                        @if ($key == 1)
                            <div class="cardHomeSmall">
                                <div class="divHoverSmall"></div>
                                <img src="{{ $article->image }}" alt="">
                                <div class="infoSmallCard">
                                    <div>
                                        <div class="infoCardDateSmall">
                                            <p class="categoryCard">{{ $article->category->name }}</p>
                                            <p>{{ $article->created_at }}</p>
                                        </div>
                                        <h4>{{ $article->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        @elseif ($key == 3)
                            <div class="cardHomeLarge">
                                <div class="imgCardLarge">
                                    <img src="{{ $article->image }}" alt="">
                                    <div class="divHover"></div>
                                </div>
                                <div class="infoCardLarge">
                                    <div class="infoCardDateLarge">
                                        <p class="categoryCard">{{ $article->category->name }} </p>
                                        <p>{{ $article->created_at }}</p>
                                    </div>
                                    <h4>{{ $article->title }}</h4>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        {{-- blocco di codice 2 ECONOMIA --}}
        <div id="test2" class="test">
            <div class="boxCards">
                <div class="containerCard1">
                    @foreach ($articleEconomia as $key => $article)
                        @if ($key == 0)
                            <div class="cardHomeLarge">
                                <div class="imgCardLarge">
                                    <img src="{{ $article->image }}" alt="">
                                    <div class="divHover"></div>
                                </div>
                                <div class="infoCardLarge">
                                    <div class="infoCardDateLarge">
                                        <p class="categoryCard">{{ $article->category->name }} </p>
                                        <p>{{ $article->created_at }}</p>
                                    </div>
                                    <h4>{{ $article->title }}</h4>
                                </div>
                            </div>
                        @elseif ($key == 2)
                            <div class="cardHomeSmall">
                                <div class="divHoverSmall"></div>
                                <img src="{{ $article->image }}" alt="">

                                <div class="infoSmallCard">
                                    <div>
                                        <div class="infoCardDateSmall">
                                            <p class="categoryCard">{{ $article->category->name }}</p>
                                            <p>{{ $article->created_at }}</p>
                                        </div>
                                        <h4>{{ $article->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="containerCard2">
                    @foreach ($articleEconomia as $key => $article)
                        @if ($key == 1)
                            <div class="cardHomeSmall">
                                <div class="divHoverSmall"></div>
                                <img src="{{ $article->image }}" alt="">
                                <div class="infoSmallCard">
                                    <div>
                                        <div class="infoCardDateSmall">
                                            <p class="categoryCard">{{ $article->category->name }}</p>
                                            <p>{{ $article->created_at }}</p>
                                        </div>
                                        <h4>{{ $article->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        @elseif ($key == 3)
                            <div class="cardHomeLarge">
                                <div class="imgCardLarge">
                                    <img src="{{ $article->image }}" alt="">
                                    <div class="divHover"></div>
                                </div>
                                <div class="infoCardLarge">
                                    <div class="infoCardDateLarge">
                                        <p class="categoryCard">{{ $article->category->name }} </p>
                                        <p>{{ $article->created_at }}</p>
                                    </div>
                                    <h4>{{ $article->title }}</h4>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div  class="boxDivImg">
                <div class="divImg">
                    <div class="boxDivImgGlass">
                        <h2> ECONOMIA</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi cumque deserunt quibusdam autem
                            perferendis consectetur possimus ut, cupiditate nostrum quae explicabo placeat rem unde
                            accusantium asperiores iure dolor expedita officiis?</p>
                            <button class="buttonDivImgCat">Scopri..</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- blocco di codice 3 Food&Drink --}}
        <div style="background-color: #E8ECEF;" class="test">
            <div class="boxDivImg">
                <div class="divImg">
                    <div class="boxDivImgGlass">
                        <h2> FOOD&DRINK</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad maiores nobis quia quaerat
                            perspiciatis doloribus quam quas sed ut vitae! Temporibus molestiae adipisci laborum
                            repellendus commodi officiis molestias beatae exercitationem.
                        </p>
                        <button class="buttonDivImgCat">Scopri..</button>
                    </div>
                </div>
            </div>
            <div class="boxCards">
                <div class="containerCard1">
                    @foreach ($articleFood as $key => $article)
                        @if ($key == 0)
                            <div class="cardHomeLarge">
                                <div class="imgCardLarge">
                                    <img src="{{ $article->image }}" alt="">
                                    <div class="divHover"></div>
                                </div>
                                <div class="infoCardLarge">
                                    <div class="infoCardDateLarge">
                                        <p class="categoryCard">{{ $article->category->name }} </p>
                                        <p>{{ $article->created_at }}</p>
                                    </div>
                                    <h4>{{ $article->title }}</h4>
                                </div>
                            </div>
                        @elseif ($key == 2)
                            <div class="cardHomeSmall">
                                <div class="divHoverSmall"></div>
                                <img src="{{ $article->image }}" alt="">

                                <div class="infoSmallCard">
                                    <div>
                                        <div class="infoCardDateSmall">
                                            <p class="categoryCard">{{ $article->category->name }}</p>
                                            <p>{{ $article->created_at }}</p>
                                        </div>
                                        <h4>{{ $article->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="containerCard2">
                    @foreach ($articleFood as $key => $article)
                        @if ($key == 1)
                            <div class="cardHomeSmall">
                                <div class="divHoverSmall"></div>
                                <img src="{{ $article->image }}" alt="">
                                <div class="infoSmallCard">
                                    <div>
                                        <div class="infoCardDateSmall">
                                            <p class="categoryCard">{{ $article->category->name }}</p>
                                            <p>{{ $article->created_at }}</p>
                                        </div>
                                        <h4>{{ $article->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        @elseif ($key == 3)
                            <div class="cardHomeLarge">
                                <div class="imgCardLarge">
                                    <img src="{{ $article->image }}" alt="">
                                    <div class="divHover"></div>
                                </div>
                                <div class="infoCardLarge">
                                    <div class="infoCardDateLarge">
                                        <p class="categoryCard">{{ $article->category->name }} </p>
                                        <p>{{ $article->created_at }}</p>
                                    </div>
                                    <h4>{{ $article->title }}</h4>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        {{-- blocco di codice 4 SPORT --}}
        <div id="test2" class="test">
            <div class="boxCards">
                <div class="containerCard1">
                    @foreach ($articleSport as $key => $article)
                        @if ($key == 0)
                            <div class="cardHomeLarge">
                                <div class="imgCardLarge">
                                    <img src="{{ $article->image }}" alt="">
                                    <div class="divHover"></div>
                                </div>
                                <div class="infoCardLarge">
                                    <div class="infoCardDateLarge">
                                        <p class="categoryCard">{{ $article->category->name }} </p>
                                        <p>{{ $article->created_at }}</p>
                                    </div>
                                    <h4>{{ $article->title }}</h4>
                                </div>
                            </div>
                        @elseif ($key == 2)
                            <div class="cardHomeSmall">
                                <div class="divHoverSmall"></div>
                                <img src="{{ $article->image }}" alt="">

                                <div class="infoSmallCard">
                                    <div>
                                        <div class="infoCardDateSmall">
                                            <p class="categoryCard">{{ $article->category->name }}</p>
                                            <p>{{ $article->created_at }}</p>
                                        </div>
                                        <h4>{{ $article->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="containerCard2">
                    @foreach ($articleSport as $key => $article)
                        @if ($key == 1)
                            <div class="cardHomeSmall">
                                <div class="divHoverSmall"></div>
                                <img src="{{ $article->image }}" alt="">
                                <div class="infoSmallCard">
                                    <div>
                                        <div class="infoCardDateSmall">
                                            <p class="categoryCard">{{ $article->category->name }}</p>
                                            <p>{{ $article->created_at }}</p>
                                        </div>
                                        <h4>{{ $article->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        @elseif ($key == 3)
                            <div class="cardHomeLarge">
                                <div class="imgCardLarge">
                                    <img src="{{ $article->image }}" alt="">
                                    <div class="divHover"></div>
                                </div>
                                <div class="infoCardLarge">
                                    <div class="infoCardDateLarge">
                                        <p class="categoryCard">{{ $article->category->name }} </p>
                                        <p>{{ $article->created_at }}</p>
                                    </div>
                                    <h4>{{ $article->title }}</h4>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="boxDivImg">
                <div class="divImg">
                    <div class="boxDivImgGlass">
                        <h2> SPORT</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi cumque deserunt quibusdam autem
                            perferendis consectetur possimus ut, cupiditate nostrum quae explicabo placeat rem unde
                            accusantium asperiores iure dolor expedita officiis?</p>
                            <button class="buttonDivImgCat">Scopri..</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- blocco di codice 5 INTRATTENIMENTO --}}
        <div style="background-color: #E8ECEF;" class="test">
            <div class="boxDivImg">
                <div class="divImg">
                    <div class="boxDivImgGlass">
                        <h2>INTRATTENIMENTO</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad maiores nobis quia quaerat
                            perspiciatis doloribus quam quas sed ut vitae! Temporibus molestiae adipisci laborum
                            repellendus commodi officiis molestias beatae exercitationem.
                        </p>
                        <button class="buttonDivImgCat">Scopri..</button>
                    </div>
                </div>
            </div>
            <div class="boxCards">
                <div class="containerCard1">
                    @foreach ($articleIntrattenimento as $key => $article)
                        @if ($key == 0)
                            <div class="cardHomeLarge">
                                <div class="imgCardLarge">
                                    <img src="{{ $article->image }}" alt="">
                                    <div class="divHover"></div>
                                </div>
                                <div class="infoCardLarge">
                                    <div class="infoCardDateLarge">
                                        <p class="categoryCard">{{ $article->category->name }} </p>
                                        <p>{{ $article->created_at }}</p>
                                    </div>
                                    <h4>{{ $article->title }}</h4>
                                </div>
                            </div>
                        @elseif ($key == 2)
                            <div class="cardHomeSmall">
                                <div class="divHoverSmall"></div>
                                <img src="{{ $article->image }}" alt="">

                                <div class="infoSmallCard">
                                    <div>
                                        <div class="infoCardDateSmall">
                                            <p class="categoryCard">{{ $article->category->name }}</p>
                                            <p>{{ $article->created_at }}</p>
                                        </div>
                                        <h4>{{ $article->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="containerCard2">
                    @foreach ($articleIntrattenimento as $key => $article)
                        @if ($key == 1)
                            <div class="cardHomeSmall">
                                <div class="divHoverSmall"></div>
                                <img src="{{ $article->image }}" alt="">
                                <div class="infoSmallCard">
                                    <div>
                                        <div class="infoCardDateSmall">
                                            <p class="categoryCard">{{ $article->category->name }}</p>
                                            <p>{{ $article->created_at }}</p>
                                        </div>
                                        <h4>{{ $article->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        @elseif ($key == 3)
                            <div class="cardHomeLarge">
                                <div class="imgCardLarge">
                                    <img src="{{ $article->image }}" alt="">
                                    <div class="divHover"></div>
                                </div>
                                <div class="infoCardLarge">
                                    <div class="infoCardDateLarge">
                                        <p class="categoryCard">{{ $article->category->name }} </p>
                                        <p>{{ $article->created_at }}</p>
                                    </div>
                                    <h4>{{ $article->title }}</h4>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        {{-- blocco di codice 6 TECH --}}
        <div id="test2" class="test">
            <div class="boxCards">
                <div class="containerCard1">
                    @foreach ($articleSport as $key => $article)
                        @if ($key == 0)
                            <div class="cardHomeLarge">
                                <div class="imgCardLarge">
                                    <img src="{{ $article->image }}" alt="">
                                    <div class="divHover"></div>
                                </div>
                                <div class="infoCardLarge">
                                    <div class="infoCardDateLarge">
                                        <p class="categoryCard">{{ $article->category->name }} </p>
                                        <p>{{ $article->created_at }}</p>
                                    </div>
                                    <h4>{{ $article->title }}</h4>
                                </div>
                            </div>
                        @elseif ($key == 2)
                            <div class="cardHomeSmall">
                                <div class="divHoverSmall"></div>
                                <img src="{{ $article->image }}" alt="">
                                <div class="infoSmallCard">
                                    <div>
                                        <div class="infoCardDateSmall">
                                            <p class="categoryCard">{{ $article->category->name }}</p>
                                            <p>{{ $article->created_at }}</p>
                                        </div>
                                        <h4>{{ $article->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="containerCard2">
                    @foreach ($articleSport as $key => $article)
                        @if ($key == 1)
                            <div class="cardHomeSmall">
                                <div class="divHoverSmall"></div>
                                <img src="{{ $article->image }}" alt="">
                                <div class="infoSmallCard">
                                    <div>
                                        <div class="infoCardDateSmall">
                                            <p class="categoryCard">{{ $article->category->name }}</p>
                                            <p>{{ $article->created_at }}</p>
                                        </div>
                                        <h4>{{ $article->title }}</h4>
                                    </div>
                                </div>
                            </div>
                        @elseif ($key == 3)
                            <div class="cardHomeLarge">
                                <div class="imgCardLarge">
                                    <img src="{{ $article->image }}" alt="">
                                    <div class="divHover"></div>
                                </div>
                                <div class="infoCardLarge">
                                    <div class="infoCardDateLarge">
                                        <p class="categoryCard">{{ $article->category->name }} </p>
                                        <p>{{ $article->created_at }}</p>
                                    </div>
                                    <h4>{{ $article->title }}</h4>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="boxDivImg">
                <div class="divImg">
                    <div class="boxDivImgGlass">
                        <h2> SPORT</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi cumque deserunt quibusdam autem
                            perferendis consectetur possimus ut, cupiditate nostrum quae explicabo placeat rem unde
                            accusantium asperiores iure dolor expedita officiis?</p>
                            <button class="buttonDivImgCat">Scopri..</button>
                    </div>
                </div>
            </div>
        </div>







    </main>
    <footer></footer>
</body>

</html>
