<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hugrun</title>
        <link rel="stylesheet" href="../../css/hugrun.css" />
        
        <link rel="stylesheet" href="../../css/article.css">
        <link rel="stylesheet" href="../../css/review.css">
        <link rel="stylesheet" href="../../css/hugrunResponsive.css">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
        <link
        rel="stylesheet"
        type="text/css"
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        />
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        />

        <!-- seo meta tag -->
        <meta name="description" content="Hugrún provides education for young people and offers tailored educational programs for mental health awareness. Explore our resources for parents and mental health information.">
        <meta name="keywords" content="Hugrún, mental health, education, mental health awareness, resources, lectures, parents, students">
        <meta name="author" content="Hugrún Organization">
        <link rel="canonical" href="https://gedfraedsla.is/" />
        <meta property="og:title" content="Hugrun - Mental Health Education" />
        <meta property="og:description" content="Hugrún provides education for young people and offers tailored educational programs for mental health awareness. Explore our resources for parents and mental health information." />
        <meta property="og:url" content="https://gedfraedsla.is/" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="https://gedfraedsla.is/images/hugrun_logo.svg" />
    </head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo tutaj" /></a>
            </div>
            <div class="nav-right-content">
                <div class="nav-content">
                    <ul>
                        <li><a href="{{ route('home') }}">Strona główna</a></li>
                        <li>
                            <a>Artykuły</a>
                            <ul class="dropdown-content">
                                <li><a href="{{ route('article.parents') }}">Dla rodziców</a></li>
                                <li><a href="{{ route('article.health') }}">Zdrowie psychiczne</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/#booking') }}">Zarezerwuj wykład</a></li>
                        <li><a href="{{ url('/about#contact') }}">Kontakt</a></li>
                    </ul>
                </div>
                <div class="language-toggle">
                    <div class="selected-language">
                        <img src="{{ asset('images/frontend/poland.png')}}" alt="English" id="current-flag" class="flag-circle" />
                        <span id="current-lang-text">PO</span>
                    </div>
                    <select id="language-select" onchange="window.location.href = this.value">
                        <option disabled selected>Select Language</option>
                        <option value="{{ route('review', ['name' => 'IÐUNN', 'lan' => 'en']) }}" data-img="{{ asset('images/frontend/eng.png')}}">English</option>
                        <option value="{{ route('review', ['name' => 'IÐUNN', 'lan' => 'is']) }}" data-img="{{ asset('images/frontend/island.png')}}">Icelandic</option>
                        <option value="{{ route('review', ['name' => 'IÐUNN', 'lan' => 'po']) }}" data-img="{{ asset('images/frontend/poland.png')}}">Polish</option>
                    </select>
                </div>
                <div class="mobile-menu-icon">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div class="mobile-nav-content">
                <div class="top-nav">
                    <div class="logo">
                        <a href="{{ route('home') }}"
                            ><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo here"
                        /></a>
                        </div>
                    <div class="mobile-close-icon">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="bottom-nav">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>
                            <div class="dropdown">
                                <p onclick="myFunction()" class="dropbtn">Articles</p>
                                <div id="myDropdown" class="dropdown-content">
                                    <a href="{{ route('article.parents') }}">For Parents</a>
                                    <a href="{{ route('article.health') }}">Mental Health</a>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ url('/#booking') }}">Book a Lecture</a></li>
                        <li><a href="{{ url('/about#contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="ragnar--seciton">
        <div class="reviews--img-div img7">
            <div></div>
            <h2>#HUGUÐ</h2>
            <h5><a href="#review--head-content">Iðunn  &nbsp; <i class="fa-solid fa-angle-down"></i></a></h5>
        </div>
        <div class="review--video-content">
            <div class="review--head-content" id="review--head-content">
                <h2>MOŻLIWE JEST ZDOBYCIE POMOCY</h2>
                <p>Iðunn Garðarsdóttir, asystentka Ministra Zdrowia, dzieli się swoimi doświadczeniami z OCD, czyli zaburzeniem obsesyjno-kompulsyjnym. Nieprzyjemne myśli, takie jak obawa przed wyrządzeniem komuś szkody, były źródłem tego zaburzenia lękowego. Twierdzi, że istnieje wiele błędnych przekonań na temat charakteru OCD, które należy wykorzenić. Przez prawie trzy lata żyła w niepewności co do tego, co działo się w jej głowie.</p>
            </div>
        </div>
        <div class="review-head-video">
            <iframe src="https://player.vimeo.com/video/258958808?color=d1503b&title=0&byline=0&portrait=0" class="campaign__video" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <p>"Zaczęłam odczuwać zaburzenie obsesyjno-kompulsywne, gdy rozpoczęłam studia prawnicze w 2012 roku. Zaczęłam mieć dziwne obawy. Martwiłam się, że przypadkowo wyrządzę komuś szkodę, że spowoduję wypadek, na przykład. W przypadku zaburzenia obsesyjno-kompulsywnego rozumowanie, głos który uspokaja cię i mówi: 'Nie martw się, nie wyrządzisz nikomu szkody', nie działa wystarczająco dobrze," mówi Iðunn Garðarsdóttir, która wiosną 2014 roku została zdiagnozowana z zaburzeniem obsesyjno-kompulsyjnym, znanym również jako OCD.</p>
    
            <p>Iðunn pracuje jako asystentka Ministra Zdrowia. Jak sama mówi, jest prawniczką, która w wolnym czasie lubi pobiegać, spotykać się z przyjaciółmi i pić dobrą kawę. Nowa praca okazała się zarówno wyzwaniem, jak i przyjemnością. "To prawdziwa przygoda, mogłoby rzeczywiście być dziesięć ministrów zdrowia, zakres problemu jest tak duży. Można by powiedzieć, że jestem prawą ręką Svandís Svavarsdóttir i jej drugim mózgiem." Sprawy zdrowotne są bliskie sercu Iðunn. "Byłam przewodniczącą Röskva podczas moich studiów uniwersyteckich i dowiedziałam się, na jakie kwestie jestem pasjonatem: zdrowie, edukacja i równość. Polityka fascynuje mnie od tego czasu, i od dwudziestu lat jestem aktywna w pracy Röskva i Partii Lewicowo-Zielonej."</p>
        </div>
        <div class="campaing-content-image">
            <p><img src="{{ asset('images/frontend/testimonials/img20.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content-II">
        <h2>Stała obsesja</h2>
        <p>Zgodnie z definicją, zaburzenie obsesyjno-kompulsyjne jest, między innymi, zaburzeniem lękowym, gdzie ludzie mają natrętne myśli, impulsy lub obrazy, które wywołują niepokój. Czują się zmuszeni do powtarzania pewnych czynności, aby zmniejszyć swoją niepewność i zapobiec potencjalnemu zagrożeniu. Myśli o zrobieniu czegoś złego sprawiają, że ludzie są szczególnie zestresowani. Te myśli, które nazywane są myślami obsesyjnymi, różnią się od innych myśli tym, że są niezgodne z przekonaniami i samoobrazem.</p>
    
        <blockquote>
        <p>"Nigdy nie musiałem robić czegoś konkretnego często, jak mycie rąk, wyłączanie świateł dziesięć razy czy trzymanie wszystkiego w porządku."</p>
        </blockquote>
        <p>Humi rozwijał umiejętność ukrywania swoich uczuć już we wczesnych latach. Było to jego mechanizmem obronnym, aby radzić sobie z okolicznościami w społeczeństwie w tamtym czasie. "Nie miałem pojęcia, co to są choroby psychiczne, i tak głupio, jak to brzmi, nie wiedziałem, że można się czuć źle. Tak bardzo w to wkomponowano w ciebie, że musisz sobie z tym radzić."</p>
        <p>W przypadku Iðunn, to właśnie obsesyjne myśli wpłynęły na jej codzienne życie. "Wpada mi do głowy myśl, czasami bardzo szalona myśl, w której utykam. Powoduje to lęk, na który reaguję zachowaniami kompulsywnymi. Na przykład myśl, że mogę spowodować wypadek samochodowy, wtedy przez jakiś czas muszę się uspokajać wielokrotnie i przekonywać siebie do kontrmyśli, że nie muszę się martwić. Nie spowoduję wypadku samochodowego, bo jestem ostrożny w ruchu drogowym, mam prawo jazdy od wielu lat i tak dalej. To właśnie sobie mówię, myśląc pewne myśli wielokrotnie, aż do momentu, gdy mogę wywołać pewne uczucie, które mówi mi, że nie muszę się martwić. To uczucie to rodzaj super ulgi, którą teraz wiem, że nazywa się właśnie odpowiednim uczuciem i jest charakterystyczne dla OCD."</p>
    </section>
    
    <section id="campaign-content">
        <div class="campaign-div-content contentI">
            <h2>Obawiałam się konsekwencji</h2>
            <p>"Martwiłam się, ale jednocześnie nie chciałam rozmawiać z nikim o tej sytuacji. To było mieszanką wstydu i obawy przed reakcjami innych ludzi. Bałam się konsekwencji, i mimo że miałam stosunkowo dobre informacje na temat zdrowia psychicznego, myśl o mówieniu otwarcie była niesamowicie trudna. Dopiero pewnego dnia, kiedy czytałam o chorobach psychicznych w internecie, dowiedziałam się o OCD. Nie mogłam uwierzyć własnym oczom, bo znalazłam dokładny opis swojego stanu. Pamiętam, że płakałam głośno czytając i nigdy wcześniej nie poczułam się tak ulgowo. To było moje rozpoznanie."</p>
            <p>Iðunn zaczęła szukać pomocy psychologicznej z namową swojej przyjaciółki. "Miałam ogromne szczęście, że znalazłam psychologa. Przeszłam terapię behawioralną, którą stosuję do dziś, aby radzić sobie z objawami, i regularnie odwiedzam psychologa, co bardzo pomaga." Iðunn podjęła decyzję rok temu, aby zacząć brać leki z powodu nowych objawów. "Przed rozpoczęciem leczenia miałam przez pewien czas objawy, które nie były tylko obsesyjnymi myślami. Zaczęłam odpowiadać na lęk przez konieczność wykonywania określonych czynności. Na przykład miałam problem z nauką, ponieważ musiałam czytać te same zdania wielokrotnie. Zajmowało mi to wiele godzin na przeczytanie kilku stron. Leki pokonały objawy i bardzo mi pomogły."</p>
        </div>
    </section>
    
    <section id="campaign-content-II">
        <h2>Radzenie sobie z nowymi objawami</h2>
        <p>Iðunn mówi, że nauka radzenia sobie z nowymi objawami jest wymagającym wyzwaniem. Wymaga cierpliwości i pracy. "Ostatnio muszę drapać się może 20-30 razy w tym samym miejscu. Naprawianie swoich ubrań, jak np. szew na spodniach, też często. To wszystko jest trochę zabawne, ale jednocześnie niewygodne i czasochłonne. Może siedzę i oglądam telewizję, ale nie mogę niczego przyswoić, bo muszę cały czas się dostosowywać. Obsesyjne myśli były moimi głównymi objawami, nauczyłam się działać wobec nich, ale teraz zaczyna się nowa krzywa uczenia się."</p>
        
        <blockquote>
            <p>"Gdybym uczestniczyła w jednym wykładzie na temat głównych zaburzeń lękowych i psychicznych, wiedziałabym, co jest ze mną nie tak."</p>
        </blockquote>
        
        <p>Odkąd rozwinęło się zaburzenie lękowe, Iðunn opisuje trudne okresy związane ze stresem i traumą. Wtedy objawy pojawiają się oddzielnie. "Wszyscy doświadczamy skutków stresu, jedni jedzą mniej, inni więcej, jedni są niespokojni. Ja postrzegam to jako moje i część mnie. Musimy wszyscy uczyć się i znaleźć to, co działa." Iðunn mówi, że różne czynniki przyczyniają się do dobrego balansu w jej przypadku. "Ćwiczenia są dla mnie bardzo ważne, pomagają mi utrzymać objawy pod kontrolą. Jak większość osób, miałam okresy, gdy leniwiłem się, żeby się ruszać. Nauczyłam się, że nie jest to opcja i muszę poświęcić czas na rozwój mojego ciała. Pomogło mi również rozmawianie o moich doświadczeniach z najbliższymi."</p>
        
        <div class="campaing-content-image midImg">
            <p><img src="{{ asset('images/frontend/testimonials/img22.jpg')}}" alt="#"></p>
        </div>
    </section>
    
    <section id="campaign-content_III">
        <div class="campaign-div-content">
            <h2>Dziś już nie boję się</h2>
            <p>Na początku Iðunn nie przejmowała się zbytnio diagnozą i informowała tylko najbliższe osoby. Bała się reakcji i ignorancji innych wobec OCD. "Chciałam poświęcić czas na poznanie choroby. Z czasem stałam się mniej bojaźliwa w rozmawianiu o tym i dziś świadomie staram się otwarcie mówić o OCD," mówi Iðunn, która publicznie opowiadała o swoim doświadczeniu na Twitterze i Snapchacie. "Ludzie często boją się zadawać pytania i mogą potrzebować swojej rozwagi, ale musimy zwiększyć edukację. Gdybym uczestniczyła w jednym wykładzie na temat głównych zaburzeń lękowych i psychicznych, wiedziałabym, co jest ze mną nie tak. Nie spędziłabym prawie trzech lat w niepewności."</p>
            
            <p>Iðunn mówi, że w Islandii brakuje świadomości na temat problemów zdrowia psychicznego. Koszty psychologiczne są wysokie, a lista oczekujących na psychiatrów jest długa. "Jestem błogosławiona, że mogę sobie pozwolić na opłacanie moich sesji, ale nie wszyscy żyją tak dobrze. Jestem na liście oczekujących, żeby zobaczyć psychiatrę, ale już od miesięcy czekam. Uważam, że niezwykle ważne jest wzmocnienie usług zdrowia psychicznego we wszystkich aspektach." Ważne jest również świadome korzystanie z dostępnych dzisiaj zasobów. "Moja najważniejsza lekcja to to, że można otrzymać pomoc. Musisz tylko odważyć się podjąć krok i dążyć do niej. Przyznaj sobie, że nie możesz radzić sobie ze wszystkimi trudnościami sam, rozmawiaj z ludźmi wokół siebie i szukaj odpowiedniej pomocy. Bo to możliwe."</p>
            
            <p>Respondenci wystąpili w wywiadach na własnych warunkach. Wywiad opiera się na ich doświadczeniu i przeżyciach. Warto zaznaczyć, że doświadczenia są osobiste i nie każdy przeżywa te same objawy.</p>
            
            <p>Hugrún pragnie również zwrócić uwagę na dostępne zasoby dla osób, które uważają, że doświadczają objawów OCD tutaj.</p>
        </div>
    </section>
    
    <section id="next_campaign">
        <div class="next_campaign_heading">
            <h2>Następny artykuł &nbsp;<a href="#"><i class="fa-solid fa-arrow-right"></i></a></h2>
        </div>
    </section>
    
    <footer>
        <div class="footer">
            <div class="social-media">
                <div>
                    <span>Bądź w kontakcie z nami na mediach społecznościowych:</span>
                </div>
            <div>
                <a href="mailto:hugrunhugur@gmail.com"><i class="fas fa-envelope" ></i></a>
                <a href="https://www.facebook.com/gedfraedsla/"><i class="fab fa-facebook-f"></i></a>
                
                <a href="https://www.instagram.com/gedfraedsla/"><i class="fab fa-instagram"></i></a>
                
                <a href="https://open.spotify.com/show/7Iql09lX1v3FCLcg0nRttQ"><i class="fa fa-podcast"></i></a>
            </div>
        </div>
        <div class="footer-contents">
            <div class="footer-container">
                <div class="footer-column-office">
                    <div class="logo">
                        <a href="./hugrun.html"
                            ><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo tutaj"
                        /></a>
                        </div>
                    <p>Hugrún, organizacja edukacyjna dotycząca zdrowia psychicznego, została założona wiosną 2016 roku przez studentów pielęgniarstwa, medycyny i psychologii na Uniwersytecie Islandzkim.
                    </p>
                </div>
                <div class="footer-column">
                    <h6>Przydatne linki</h6>
                    <p><a href="{{ route('home') }}">Strona główna</a></p>
                    <div class="article-links">
                        <p><a>Artykuł</a></p>
                        <div class="sub-links">
                            <p><a href="{{ route('article.parents') }}">Dla rodziców</a></p>
                            <p><a href="{{ route('article.health') }}">Zdrowie psychiczne</a></p>
                        </div>
                    </div>
                    <p><a href="{{ url('/#booking') }}">Zarezerwuj wykład</a></p>
                    <p><a href="{{ url('/about#contact') }}">Kontakt</a></p>
                    <p><a href="{{ route('about') }}">O nas</a></p>
                </div>
                
                <div class="footer-column">
                    <h6>Kontakt</h6>
                    <p><i class="fas fa-home"></i> Islandia</p>
                    <p><i class="fas fa-envelope"></i> hugrunhugur@gmail.com</p>
                    
                </div>
            </div>
            <div class="copy-right">
                &copy; 2020 Prawa autorskie:
                <a href="https://gedfraedsla.is/"
                ><span>gedfraedsla.is</span></a>
            </div>
        </div>
    </div>
    </footer>
    <script src="../../js/hugrun.js"></script>
</body>
</html>