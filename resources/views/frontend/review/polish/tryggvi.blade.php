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
                        <option value="{{ route('review', ['name' => 'tryggvi', 'lan' => 'en']) }}" data-img="{{ asset('images/frontend/eng.png')}}">English</option>
                        <option value="{{ route('review', ['name' => 'tryggvi', 'lan' => 'is']) }}" data-img="{{ asset('images/frontend/island.png')}}">Icelandic</option>
                        <option value="{{ route('review', ['name' => 'tryggvi', 'lan' => 'po']) }}" data-img="{{ asset('images/frontend/poland.png')}}">Polish</option>
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
        <div class="reviews--img-div img4">
            <div></div>
            <h2>#HUGUÐ</h2>
            <h5><a href="#review--head-content">TRYGGVI  &nbsp; <i class="fa-solid fa-angle-down"></i></a></h5>
        </div>
        <div class="review--video-content">
            <div class="review--head-content" id="review--head-content">
                <h2>PODSTAWOWO EMOCJONALNE UZĘBIENIE, KTÓRE TRZEBA ROZWIĄZAĆ</h2>
                <p style="color: #d1503b">Student medycyny i zapaśnik Tryggvi Ofeigsson ma 26 lat i dzieli się swoim doświadczeniem jako osoba uzależniona. Po latach niskiego poczucia własnej wartości był bliski zniszczenia swojego życia. Po leczeniu Tryggvi spędził cały rok na intensywnej pracy nad sobą, odbudowując swoje życie od nowa. Bez wsparcia rodziny i dostępnych dla niego zasobów nie byłby tam, gdzie jest dzisiaj.</p>
            </div>
        </div>
        <div class="review-head-video">
            <iframe src="https://player.vimeo.com/video/258961628?color=d1503b&title=0&byline=0&portrait=0" class="campaign__video" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content contentI">
            <p>"Gdy zaczynałem liceum, byłem ciężki, nerwowy i bardzo bojaźliwy nastolatek. Ujawniło się to jako niskie poczucie pewności siebie i głód aprobaty od moich rówieśników. Zacząłem pić w wieku 16 lat i od razu poczułem, jakie to dla mnie robi. Pod wpływem alkoholu czułem się bardzo pewnie siebie, co było przeciwieństwem mojego codziennego życia. Wszystkie problemy zanikały, gdy byłem odurzony; nie doświadczałem lęku i mogłem być sobą. Krótko po rozpoczęciu picia, zacząłem sięgać po narkotyki: tabletki ekstazy, amfetaminy, kokainę, marihuanę, a później leki medyczne. Na końcu sięgałem po wszystko, co tylko było dostępne w danym momencie. Lata liceum były określone przez kompletną dezorientację, a w trzeciej klasie zostałem wydalony ze szkoły."</p>
        </div>
    </section>
    <section id="campaign-content-II">
        <h2>Pierwsze leczenie zasiał nasiona</h2>
        <p>To rodzina Tryggviego interweniowała i wysłała go do Vogi na pierwsze leczenie, gdy miał dwadzieścia lat. "Nie poszedłem na leczenie dla siebie, ale żeby uspokoić wszystko w domu. Program edukacyjny w Vogi pozostawił we mnie coś. Dowiedziałem się, czym jest uzależnienie, jaka jest ta choroba. Nie zamierzałem jednak przestać. Powód był taki, że było łatwiej nie przestawać. Więc wróciłem do domu, a niedługo potem wprowadziłem się do willi z pięcioma przyjaciółmi, którzy byli w takiej samej sytuacji jak ja. Bez wątpienia nie skończyło się to dobrze. Spędziliśmy rok, w którym kompletnie siebie zniszczyłem. Marnowałem swoje życie. Wiedziałem o tym, ale naprawdę się tym nie przejmowałem. Nie czułem, że moje życie jest warte czegokolwiek, nie czułem, że cokolwiek ma znaczenie. Nie przyszło mi do głowy, że moje działania będą miały wpływ także na innych. Później dowiedziałem się, że na pewno nie jest to prawda. Wszystko, co robiłem sobie, miało głęboki wpływ na życie innych. Na ich zdolność do normalnego życia i funkcjonowania."</p>
        <blockquote>
            <p>"Nie czułem, że moje życie jest warte czegokolwiek, nie czułem, że cokolwiek ma znaczenie. Nie przyszło mi do głowy, że moje działania będą miały wpływ także na innych."</p>
        </blockquote>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <h2>Nie mogłem uwierzyć, że to moje życie</h2>
            <p>To nie było do momentu, gdy pewnego poranka, na początku lata 2012 roku, Tryggvi obudził się bezradny i przygnębiony, zadzwonił do Vogi w swojej desperacji i zarezerwował dla siebie miejsce. "Pamiętam ten poranek. Byłem w opłakanym stanie, bez pieniędzy. Byłem tak bliski rezygnacji, że zadzwoniłem do Libra. Taki już jest charakter tej choroby, że budzisz się, mamrocząc lub robiąc coś okropnego w nocy, z najwyższą możliwą dawką entuzjazmu. Ale potem po prostu idziesz dalej i zapominasz. Zapomniałem, że dzwoniłem, że miałem zmienić swoje życie."</p><br>
            <p>Trochę ponad dwa miesiące po tym, jak Tryggvi zadzwonił, otrzymuje telefon od Vogi, że ma miejsce. Wtedy przez cały weekend leżał w domu w zimnym pocie, jego własnymi słowami. "To był poniedziałek po weekendzie zakupowym, kiedy dostałem telefon. Przez cały weekend zostałem w domu sam, bo nie miałem pieniędzy, żeby pojechać na festiwal z przyjaciółmi. Wszyscy dilerzy byli poza miastem, a ja nie miałem niczego, co by mnie zadowoliło. Leżałem w łóżku i myślałem: Wow, nie mogę uwierzyć, że to moje życie."</p>
        </div>
        <div class="campaing-content-image campaign-content-img">
            <p><img src="{{ asset('images/frontend/testimonials/img_9.jpg')}}" alt="#"></p>
        </div>
    </section>
    
    <section id="campaign-content-II">
        <blockquote>
            <p>"Leżałem w łóżku i myślałem, Wow, nie mogę uwierzyć, że to moje życie."</p>
        </blockquote>
        <p>„Przystępuję do mojego drugiego leczenia z myślą, że muszę tylko trochę poukładać swoje życie, aby jak najszybciej móc zacząć ponownie używać. Skupiłem się na stworzeniu niezawodnego planu rzeczy, które muszę uporządkować, zanim zacznę używać. Gdzie będę pracować? Jak mam spłacić długi? Ale zawsze kończę z tym samym wynikiem. Próbowałem tego wszystkiego wcześniej i nie działało. Nagle jednak przekonanie ogarnia mnie, że już nigdy nie będę mógł używać narkotyków ani pić alkoholu, ani dla siebie, ani dla innych."</p> <br>
    
        <h2>Rok całkowitej pracy nad sobą</h2>
        <p>Po drugim leczeniu nastąpił cały rok pracy nad sobą, spotkań organizacyjnych i rehabilitacji. Tryggvi mówi, że ten rok stworzył fundament dla życia, które dziś prowadzi.</p>
        <p>"To wymaga czasu na resetowanie. Brzmi jak niesamowicie dużo czasu na spędzenie całego roku, ale było to konieczne, aby przezwyciężyć ten pierwotny problem, którym była strach i lęk. Ten emocjonalny węzeł, który jest uzależnieniem i alkoholizmem. Po tej rehabilitacji zrobiłem to, co chciałem. Nadal pracuję celowo, aby stać się lepszym. Miałem ogromne szczęście, że moja rodzina była ze mną. Nie każdy ma takie wsparcie. Byli gotowi zrobić wszystko, aby postawić mnie na nogi."</p>
        <p>"Rozpocząłem leczenie z przekonaniem, że nigdy nie będę w stanie się przekształcić. Myślę, że wszyscy dorastamy z przekonaniem, że jesteśmy przeznaczeni do czegoś wielkiego, że osiągniemy coś. Byłem bardzo dobrym uczniem, dopóki nie wpadłem w kłopoty. Dostałem za to wiele pochwał, zarówno w szkole podstawowej, jak i we wczesnych latach szkoły średniej, że mogę naprawdę dobrze sobie radzić, jeśli tylko się postaram. Kiedy więc zacząłem ponownie edukację, zrobiłem tylko kilka kroków - najpierw podjąłem 10 punktów na politechnice Ármúla i stopniowo mi się udało. W moim ostatnim semestrze udzielałem korepetycji dzieciom, które miały trudności w nauce, i ukończyłem studia z dobrymi ocenami, wstając na stopień studenta medycyny. Ale zdecydowanie było trudno podjąć ten krok, aby wrócić do zdrowego stylu życia. Pokonać kilka nudnych zadań, które właśnie porzuciłem."</p>
        <div class="campaing-content-image campaign-content-img midImg">
            <p><img src="{{ asset('images/frontend/testimonials/img_10.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content_III">
        <div class="campaign-div-content">
            <h2>Niskie poczucie własnej wartości największym problemem</h2>
            <p>Tryggvi mówi, że społeczeństwo potrzebuje większej wiedzy na temat tej choroby. Zamiast myśleć o uzależnionych jako o biednych ludziach i narkomanach, powinniśmy myśleć o nich jako o pacjentach.</p>
            <p>"Dyskusja w społeczeństwie opiera się na tym, że uzależnieni to po prostu narkomani. Oczywiście, jesteśmy ludźmi, którzy używają narkotyków, ale to nie znaczy, że jesteśmy jedynymi. Posiadanie tego obrazu siebie idącego na terapię jest największym problemem. Być gdzieś i próbować być lepszym, myśląc, że jesteś biedny. Takie przekazują nam debaty, takie przekazują nam filmy, takie przekazuje całe społeczeństwo. Musimy to zmienić."</p>
            <blockquote>
                <p>"Zamiast myśleć o uzależnionych jako o biednych ludziach i narkomanach, powinniśmy traktować ich jako pacjentów."</p>
            </blockquote>
            <p>"Uzależnienie to zbiór dolegliwości, które nie można zdefiniować jako jedno. We wszystkich przypadkach, które znam, w tym w moim własnym, należy rozwiązać pewne wewnętrzne emocjonalne powikłania, aby rozwiązać prawdziwy problem."</p>
        </div>
        <div class="campaing-content-image campaign-content-img">
            <p><img src="{{ asset('images/frontend/testimonials/img11.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content-II">
        <h2>Najlepsza medytacja to zapasy</h2>
        <p>Dziś życie Tryggviego składa się z nauki medycyny, pracy w oddziale psychiatrycznym Landspítalan oraz treningów zapaśniczych w Mjölnir.</p>
        <p>"Ćwiczenia są kluczem do dobrego samopoczucia psychicznego. Medytacja i ogólna uważność również bardzo mi pomogły i nadal pomagają. Kiedy medytuję, nie martwię się tym, co będę robił jutro, i nie czuję winy za to, co zrobiłem wczoraj. Nie jestem zdenerwowany z powodu dzisiejszych zadań. Jedną z najlepszych form medytacji dla mnie są zapasy. Bardzo trudno jest martwić się o szkołę, gdy ktoś próbuje mnie udusić. Zauważam, że za każdym razem, gdy idę na trening do Mjölnir, często wchodzę tam z całymi swoimi troskami, a po treningu wychodzę bez nich."</p>
        <p>"Dla kogoś, kto boryka się z problemami z uzyskaniem pomocy, powiedziałbym, że numer jeden, dwa i trzy to nie czekaj. Dla ludzi takich jak my, którzy bardzo żałują, nie wiesz, czy będziesz żył za tydzień. Bez względu na to, czy to przedawkowanie, czy po prostu poddanie się i skok z klifu. Otocz się ludźmi, którzy podążają tą samą ścieżką, a zwłaszcza tymi, którzy są dalej i ucz się od nich."</p>
        <p>Wywiad przeprowadzono na własnych warunkach respondentów. Wywiad opiera się na ich doświadczeniach. Warto zauważyć, że doświadczenia są osobiste i nie każdy doświadcza tych samych objawów.</p>
        <p>Hugrún chce również zwrócić uwagę na zasoby dostępne dla osób, które uważają, że doświadczają objawów uzależnienia tutaj .</p>
    </section>
    <section id="next_campaign">
        <div class="next_campaign_heading">
            <h2><a href="./aron-mar.html"><i class="fa-solid fa-arrow-left"></i></a>&nbsp;&nbsp;Poprzedni artykuł </h2>
        </div>
        <div class="next_campaign_heading">
            <h2>Następny artykuł &nbsp;<a href="./hrefna-huld.html"><i class="fa-solid fa-arrow-right"></i></a></h2>
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