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
        <div style="background-color: #E8ECEF;" class="test">
            <div class="boxDivImg">
                <div class="divImg">
                    <div class="boxDivImgGlass">
                        <h2> POLITICA</h2>
                        <p>Tieniti aggiornato sulle ultime novità politiche a livello locale, nazionale e
                            internazionale. Scopri analisi, opinioni e approfondimenti su governi, elezioni, politiche
                            pubbliche e molto altro.
                        </p>
                    </div>
                </div>
                <div class="boxCards">
                    <div class="containerCard1">
                        @foreach ($articlePolitica as $key => $article)
                            @if ($key % 2 == 0)
                            {{-- card large --}}
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
                            @else
                            {{-- card small --}}
                                <div class="cardHomeSmall">
                                    <div class="divHoverSmall"></div>
                                    <img src="{{ $article->image }}" alt="">
                                    <div class="infoSmallCard">
                                        <div>
                                            <div class="infoCardDateSmall">
                                                <p class="categoryCard">{{ $article->category->name }} </p>
                                                <p>{{ $article->created_at }}</p>
                                            </div>
                                            <h4>{{ $article->title }}</h4>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            

            </div>
        </div>



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
                        </div>

                    </div>
                </div>
                <div class="boxCards">
                    <div class="containerCard1">
                        <div class="cardHomeLarge">

                            <div class="imgCardLarge">
                                <img src="https://w0.peakpx.com/wallpaper/345/391/HD-wallpaper-johnny-depp-black-and-white.jpg"
                                    alt="">
                                <div class="divHover"></div>
                            </div>

                            <div class="infoCardLarge">
                                <div class="infoCardDateLarge">
                                    <p class="categoryCard">ARCHITECTURE </p>
                                    <p>28 MAY 2024</p>
                                </div>
                                <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                    Architecture and Nature</h4>
                            </div>



                        </div>
                        <div class="cardHomeSmall">
                            <div class="divHoverSmall"></div>
                            <img src="https://compass-media.vogue.it/photos/654b99d6f0a0f6107a33b06c/1:1/w_1600%2Cc_limit/1781300253"
                                alt="">

                            <div class="infoSmallCard">
                                <div>
                                    <div class="infoCardDateSmall">
                                        <p class="categoryCard">ARCHITECTURE </p>
                                        <p>28 MAY 2024</p>
                                    </div>
                                    <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                        Architecture and Nature</h4>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="containerCard2">
                        <div class="cardHomeSmall">
                            <div class="divHoverSmall"></div>
                            <img src="https://compass-media.vogue.it/photos/654b99d6f0a0f6107a33b06c/1:1/w_1600%2Cc_limit/1781300253"
                                alt="">

                            <div class="infoSmallCard">
                                <div>
                                    <div class="infoCardDateSmall">
                                        <p class="categoryCard">ARCHITECTURE </p>
                                        <p>28 MAY 2024</p>
                                    </div>
                                    <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                        Architecture and Nature</h4>
                                </div>
                            </div>


                        </div>
                        <div class="cardHomeLarge">

                            <div class="imgCardLarge">
                                <img src="https://w0.peakpx.com/wallpaper/345/391/HD-wallpaper-johnny-depp-black-and-white.jpg"
                                    alt="">
                                <div class="divHover"></div>
                            </div>

                            <div class="infoCardLarge">
                                <div class="infoCardDateLarge">
                                    <p class="categoryCard">ARCHITECTURE </p>
                                    <p>28 MAY 2024</p>
                                </div>
                                <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                    Architecture and Nature</h4>
                            </div>



                        </div>

                    </div>
                </div>
            </div>




            <div id="test2" class="test">
                <div class="boxCards">
                    <div class="containerCard2">
                        <div class="cardHomeLarge">

                            <div class="imgCardLarge">
                                <img src="https://w0.peakpx.com/wallpaper/345/391/HD-wallpaper-johnny-depp-black-and-white.jpg"
                                    alt="">
                                <div class="divHover"></div>
                            </div>

                            <div class="infoCardLarge">
                                <div class="infoCardDateLarge">
                                    <p class="categoryCard">ARCHITECTURE </p>
                                    <p>28 MAY 2024</p>
                                </div>
                                <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                    Architecture and Nature</h4>
                            </div>



                        </div>
                        <div class="cardHomeSmall">
                            <div class="divHoverSmall"></div>
                            <img src="https://compass-media.vogue.it/photos/654b99d6f0a0f6107a33b06c/1:1/w_1600%2Cc_limit/1781300253"
                                alt="">

                            <div class="infoSmallCard">
                                <div>
                                    <div class="infoCardDateSmall">
                                        <p class="categoryCard">ARCHITECTURE </p>
                                        <p>28 MAY 2024</p>
                                    </div>
                                    <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                        Architecture and Nature</h4>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="containerCard1">
                        <div class="cardHomeSmall">
                            <div class="divHoverSmall"></div>
                            <img src="https://compass-media.vogue.it/photos/654b99d6f0a0f6107a33b06c/1:1/w_1600%2Cc_limit/1781300253"
                                alt="">

                            <div class="infoSmallCard">
                                <div>
                                    <div class="infoCardDateSmall">
                                        <p class="categoryCard">ARCHITECTURE </p>
                                        <p>28 MAY 2024</p>
                                    </div>
                                    <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                        Architecture and Nature</h4>
                                </div>
                            </div>


                        </div>
                        <div class="cardHomeLarge">

                            <div class="imgCardLarge">
                                <img src="https://w0.peakpx.com/wallpaper/345/391/HD-wallpaper-johnny-depp-black-and-white.jpg"
                                    alt="">
                                <div class="divHover"></div>
                            </div>

                            <div class="infoCardLarge">
                                <div class="infoCardDateLarge">
                                    <p class="categoryCard">ARCHITECTURE </p>
                                    <p>28 MAY 2024</p>
                                </div>
                                <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                    Architecture and Nature</h4>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="boxDivImg">
                    <div class="divImg">
                        <div class="boxDivImgGlass">
                            <h2> FINANZA</h2>
                            <p>Rimani al passo con le ultime notizie finanziarie, dai mercati globali agli investimenti
                                personali. Leggi analisi di esperti, tendenze economiche e consigli per gestire al
                                meglio le
                                tue finanze.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div style="background-color: #E8ECEF" class="test">
                <div class="boxDivImg">
                    <div class="divImg">
                        <div class="boxDivImgGlass">
                            <h2> SPORT</h2>
                            <p>Esplora il mondo dello sport con notizie, risultati e analisi delle tue discipline
                                preferite.
                                Dalle competizioni internazionali ai campionati locali, resta informato su tutto ciò che
                                accade nel mondo dello sport.</p>
                        </div>
                    </div>
                </div>
                <div class="boxCards">
                    <div class="containerCard1">
                        <div class="cardHomeLarge">

                            <div class="imgCardLarge">
                                <img src="https://w0.peakpx.com/wallpaper/345/391/HD-wallpaper-johnny-depp-black-and-white.jpg"
                                    alt="">
                                <div class="divHover"></div>
                            </div>

                            <div class="infoCardLarge">
                                <div class="infoCardDateLarge">
                                    <p class="categoryCard">ARCHITECTURE </p>
                                    <p>28 MAY 2024</p>
                                </div>
                                <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                    Architecture and Nature</h4>
                            </div>



                        </div>
                        <div class="cardHomeSmall">
                            <div class="divHoverSmall"></div>
                            <img src="https://compass-media.vogue.it/photos/654b99d6f0a0f6107a33b06c/1:1/w_1600%2Cc_limit/1781300253"
                                alt="">

                            <div class="infoSmallCard">
                                <div>
                                    <div class="infoCardDateSmall">
                                        <p class="categoryCard">ARCHITECTURE </p>
                                        <p>28 MAY 2024</p>
                                    </div>
                                    <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                        Architecture and Nature</h4>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="containerCard2">
                        <div class="cardHomeSmall">
                            <div class="divHoverSmall"></div>
                            <img src="https://compass-media.vogue.it/photos/654b99d6f0a0f6107a33b06c/1:1/w_1600%2Cc_limit/1781300253"
                                alt="">

                            <div class="infoSmallCard">
                                <div>
                                    <div class="infoCardDateSmall">
                                        <p class="categoryCard">ARCHITECTURE </p>
                                        <p>28 MAY 2024</p>
                                    </div>
                                    <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                        Architecture and Nature</h4>
                                </div>
                            </div>


                        </div>
                        <div class="cardHomeLarge">

                            <div class="imgCardLarge">
                                <img src="https://w0.peakpx.com/wallpaper/345/391/HD-wallpaper-johnny-depp-black-and-white.jpg"
                                    alt="">
                                <div class="divHover"></div>
                            </div>

                            <div class="infoCardLarge">
                                <div class="infoCardDateLarge">
                                    <p class="categoryCard">ARCHITECTURE </p>
                                    <p>28 MAY 2024</p>
                                </div>
                                <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                    Architecture and Nature</h4>
                            </div>



                        </div>

                    </div>
                </div>
            </div>

            <div id="test4" style="position:-webkit-sticky;position:sticky;top:0;"class="test">
                <div class="boxCards">
                    <div class="containerCard2">
                        <div class="cardHomeLarge">

                            <div class="imgCardLarge">
                                <img src="https://w0.peakpx.com/wallpaper/345/391/HD-wallpaper-johnny-depp-black-and-white.jpg"
                                    alt="">
                                <div class="divHover"></div>
                            </div>

                            <div class="infoCardLarge">
                                <div class="infoCardDateLarge">
                                    <p class="categoryCard">ARCHITECTURE </p>
                                    <p>28 MAY 2024</p>
                                </div>
                                <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                    Architecture and Nature</h4>
                            </div>



                        </div>
                        <div class="cardHomeSmall">
                            <div class="divHoverSmall"></div>
                            <img src="https://compass-media.vogue.it/photos/654b99d6f0a0f6107a33b06c/1:1/w_1600%2Cc_limit/1781300253"
                                alt="">

                            <div class="infoSmallCard">
                                <div>
                                    <div class="infoCardDateSmall">
                                        <p class="categoryCard">ARCHITECTURE </p>
                                        <p>28 MAY 2024</p>
                                    </div>
                                    <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                        Architecture and Nature</h4>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="containerCard1">
                        <div class="cardHomeSmall">
                            <div class="divHoverSmall"></div>
                            <img src="https://compass-media.vogue.it/photos/654b99d6f0a0f6107a33b06c/1:1/w_1600%2Cc_limit/1781300253"
                                alt="">

                            <div class="infoSmallCard">
                                <div>
                                    <div class="infoCardDateSmall">
                                        <p class="categoryCard">ARCHITECTURE </p>
                                        <p>28 MAY 2024</p>
                                    </div>
                                    <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                        Architecture and Nature</h4>
                                </div>
                            </div>


                        </div>
                        <div class="cardHomeLarge">

                            <div class="imgCardLarge">
                                <img src="https://w0.peakpx.com/wallpaper/345/391/HD-wallpaper-johnny-depp-black-and-white.jpg"
                                    alt="">
                                <div class="divHover"></div>
                            </div>

                            <div class="infoCardLarge">
                                <div class="infoCardDateLarge">
                                    <p class="categoryCard">ARCHITECTURE </p>
                                    <p>28 MAY 2024</p>
                                </div>
                                <h4>Brutalist Plants: A Photography Book Showcases the Wondrous Fusion of Brutalist
                                    Architecture and Nature</h4>
                            </div>



                        </div>

                    </div>
                </div>
                <div class="boxDivImg">
                    <div class="divImg">
                        <div class="boxDivImgGlass">
                            <h2> TECH</h2>
                            <p>Scopri le ultime innovazioni e tendenze nel mondo della tecnologia. Dalle recensioni di
                                nuovi
                                gadget alle novità nel settore dell’IT, resta aggiornato su tutto ciò che riguarda la
                                tecnologia e il suo impatto sul mondo.</p>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <footer></footer>
</body>

</html>
