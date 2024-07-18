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
                        <option value="{{ route('review', ['name' => 'hrefna-huld', 'lan' => 'en']) }}" data-img="{{ asset('images/frontend/eng.png')}}">English</option>
                        <option value="{{ route('review', ['name' => 'hrefna-huld', 'lan' => 'is']) }}" data-img="{{ asset('images/frontend/island.png')}}">Icelandic</option>
                        <option value="{{ route('review', ['name' => 'hrefna-huld', 'lan' => 'po']) }}" data-img="{{ asset('images/frontend/poland.png')}}">Polish</option>
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
        <div class="reviews--img-div img5">
            <div></div>
            <h2>#MIND</h2>
            <h5><a href="#review--head-content">HREFNA HULD &nbsp; <i class="fa-solid fa-angle-down"></i></a></h5>
        </div>
        <div class="review--video-content">
            <div class="review--head-content" id="review--head-content">
                <h2>LEPSZE CZASY NADCHODZĄ</h2>
                <p>Życie Hrefny Huld Jóhannesdóttir przybrało nieoczekiwany obrót, gdy zdiagnozowano u niej schizofrenię. Była zawodniczka narodowej drużyny piłkarskiej odstawiła buty na półkę, gdy bezsenność i głosy w głowie doprowadziły do diagnozy. Mówi, że w społeczeństwie jest wiele uprzedzeń wobec chorób psychicznych i osób niepełnosprawnych; brakuje edukacji i uznania różnorodności.</p>
            </div>
        </div>
        <div class="review-head-video">
            <iframe src="https://player.vimeo.com/video/258956979?color=d1503b&title=0&byline=0&portrait=0" class="campaign__video" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <p>"Kiedy chorujesz psychicznie, wpływa to na ciebie fizycznie. Nie wszyscy to rozumieją. Kiedy nie możesz złapać chwili snu, ale musisz wstać do pracy, lub w moim przypadku na trening, odbija się to na tobie fizycznie," mówi była zawodniczka narodowej drużyny Hrefna Huld Jóhannesdóttir, która pod koniec 2008 roku zaczęła doświadczać objawów schizofrenii.</p>
    
            <p>Hrefna Huld Jóhannesdóttir ma za sobą udaną karierę piłkarską z narodową drużyną. Była zawodniczką zawodową w Norwegii i jest szóstą najlepszą strzelczynią w historii islandzkiej najwyższej ligi. Hrefna charakteryzuje się spokojem i śmiechem. Jest dzisiaj w dobrym miejscu i gotowa podzielić się swoim doświadczeniem ze schizofrenią.</p>
        </div>
        <div class="campaing-content-image">
            <p><img src="{{ asset('images/frontend/testimonials/img12.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content-II">
        <h2>Odstawiła buty na półkę</h2>
        <p>"Zaczęłam biegać mniej, gorzej wypadałam na testach wytrzymałościowych i proste rzeczy, takie jak rozciąganie, stały się dla mnie trudne. To jest efekt uboczny choroby psychicznej," mówi Hrefna, która później podjęła decyzję o przejściu do pierwszego oddziału i posłuchaniu swojego ciała. "Potrzebowałam się zrelaksować i zadbać o siebie. Oczywiście było to smutne i bolesne. Chciałabym zakończyć karierę inaczej, ale zrobiłam to, co musiałam i nie żałuję."</p>
    
        <blockquote>
            <p>"Sposób, w jaki choroba się objawia, jest bardzo osobisty, dlatego nie ma jednego konkretnego obrazu schizofrenii."</p>
        </blockquote>
        <p>W przypadku Hrefny schizofrenia objawia się głosami, które zaczęła słyszeć. "Nie spałam przez dni i wiedziałam, że coś jest nie tak. Czułam się bardzo źle i wstydziłam się. Na szczęście szybko zdałam sobie sprawę, że muszę coś z tym zrobić. Sposób, w jaki choroba się objawia, jest bardzo osobisty, dlatego nie ma jednego konkretnego obrazu schizofrenii. Mój brat zabrał mnie do szpitala psychiatrycznego i dzisiaj jestem mu za to niezwykle wdzięczna. Jest wyjątkowym człowiekiem, który był dla mnie i pocieszał mnie, mówiąc, że nadejdą lepsze czasy i wszystko będzie w porządku. Potem mieliśmy więcej wizyt na oddziale psychiatrycznym, co doprowadziło do diagnozy schizofrenii w 2009 roku."</p>
        <div class="campaing-content-image midImg">
            <p><img src="{{ asset('images/frontend/testimonials/img13.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <h2>Brak energii w ciągu dnia</h2>
            <p>Na przestrzeni lat Hrefna wielokrotnie odwiedzała oddział psychiatryczny z własnej inicjatywy. Zazwyczaj z powodu głosów, które słyszy, i bezsenności, która temu towarzyszy. "Nie miałam energii na normalny dzień i zmagałam się z dbaniem o siebie i wstawaniem z łóżka. Może nie wszyscy rozumieją, jak to jest, gdy nie ma się energii, by stawić czoła nowemu dniu."</p>
            <p>Na pytanie, mówi, że czuje się stygmatyzowana z powodu swojej choroby i że społeczeństwo musi zaakceptować, że nie wszyscy jesteśmy tacy sami. "To, że mam chorobę psychiczną, nie oznacza, że wszyscy inni mieszczą się w kategorii normalnych." Przynajmniej ja tak to widzę, musimy akceptować ludzi takimi, jakimi są. W społeczeństwie istnieje ogromna stygmatyzacja, ludzie cię unikają i boją się ciebie. Nie pytają cię o zdanie i nikogo nie obchodzi twoje zdanie, ono się nie liczy."</p>
        </div>
        <div class="campaing-content-image campaign-content-img">
            <p><img src="{{ asset('images/frontend/testimonials/img14.jpg')}}" alt="#"></p>
        </div>
    </section>
    
    <section id="campaign-content_III">
        <div class="campaign-div-content">
            <h2>Wielu ludzi się wstydzi</h2>
            <p>"Ważne jest, aby otaczać się ludźmi, którzy nie rozmawiają z tobą inaczej tylko dlatego, że masz chorobę psychiczną. Brakuje znaczącej edukacji na ten temat, a więcej osób powinno się otwierać i dzielić swoimi doświadczeniami." Pragnienie pomocy innym skłoniło Hrefnę do podzielenia się swoją historią w Morgunblaðið w zeszłym roku. "Chciałam otworzyć dyskusję i sprawić, żeby ludzie obudzili się do życia." Jest niezliczona liczba ludzi, którzy wstydzą się swojej choroby psychicznej z powodu stygmatyzacji, której doświadczają. Izolują się z powodu strachu i w tym tkwi nieporozumienie. Zamknięcie się nie jest wynikiem choroby psychicznej, ale strachu przed reakcjami innych. Musimy być w stanie otwarcie omawiać te kwestie."</p>
        </div>
        <div class="campaing-content-image campaign-content-img">
            <p><img src="{{ asset('images/frontend/testimonials/img15.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content-II">
        <h2>Uprzedzenia wobec osób niepełnosprawnych</h2>
        <p>Obecnie Hrefna mieszka w Danii z mężem i młodszą córką, podczas gdy starsza mieszka w Anglii z ojcem. Niedawno podjęła pracę wolontariacką w piekarni, a jej zapał do treningów znów się rozbudził. "Właściwie byłam tam tylko trzy razy," mówi Hrefna ze śmiechem. "W ciszy zastanawiam się nad powrotem na rynek pracy."</p>
        <blockquote>
            <p>"Zamknięcie się nie jest wynikiem choroby psychicznej, ale strachu przed reakcjami innych."</p>
        </blockquote>
        <p>"Zajęło mi dużo czasu, aby znaleźć odpowiednie leki, które często mają złe skutki uboczne. Nigdy nie czułam się lepiej niż dzisiaj i prawie nie mam objawów. Mam regularne wizyty u pielęgniarki psychiatrycznej i znalazłam odpowiednie dla mnie leki. Jestem dobrze zaopiekowana i dobrze monitorowana."</p>
        <div class="campaing-content-image campaign-content-img midImg">
            <p><img src="{{ asset('images/frontend/testimonials/img16.jpg')}}" alt="#"></p>
        </div>
        <p>Dziś Hrefna jest niepełnosprawna i jest tak od 10 lat. "To uczy cię być sobą i poznajesz siebie na nowo. Uczysz się nie być zawsze z każdym i we wszystkim. Najgorsze jest prawdopodobnie stygmatyzacja, którą doświadczają osoby niepełnosprawne, a Islandczycy są gorsi niż Duńczycy. Są bardziej otwarci na różnorodność niż w Islandii, gdzie panuje postawa, że nie chcesz pracować lub oszukujesz system. Jakby to było pożądane, że nie możesz pracować i nie robisz tego dla wyboru."</p>
    </section>
    <section id="campaign-content-II">
        <h2>Głośno się wypowiadaj</h2>
        <p>Zajęło Hrefnie trochę czasu, aby pogodzić się ze swoją chorobą, ale dziś czuje się dobrze i patrzy w przyszłość z jasnymi oczami. "Ćwiczyłam na pełny etat i mogę sobie wyobrazić powrót do treningów lub pracy. Nigdy nie czułam się lepiej psychicznie i czuję się dobrze. Jeśli mam doradzić komuś w podobnej sytuacji, mogę powiedzieć, że zawsze będą lepsze czasy. Skorzystaj z pomocy i korzystaj z dostępnych zasobów. Jeśli nie jesteś zadowolony z otrzymywanej pomocy, poszukaj gdzie indziej. Głośno się wypowiadaj. Wiem, że ludziom nie zawsze się słucha, ale masz swoje prawo i domagaj się go. Nie zamykaj się. Zaczęłam po prostu cieszyć się oddziałem psychiatrycznym, traktowałam go jako relaks. Czasami chodzi tylko o podejście."</p>
        <p>Rozmówcy pojawili się w wywiadach na własnych warunkach. Wywiad oparty jest na ich doświadczeniach. Warto wspomnieć, że doświadczenia są osobiste i nie każdy doświadcza tych samych objawów.</p>
        <p>Hugrún chciałaby również zwrócić uwagę na zasoby dostępne dla tych, którzy uważają, że doświadczają objawów schizofrenii tutaj.</p>
    </section>
    <section id="next_campaign">
        <div class="next_campaign_heading">
            <h2><a href="./tryggvi.html"><i class="fa-solid fa-arrow-left"></i></a>&nbsp;&nbsp;Poprzedni artykuł </h2>
        </div>
        <div class="next_campaign_heading">
            <h2>Następny artykuł &nbsp;<a href="./SONJABJÖRG.html"><i class="fa-solid fa-arrow-right"></i></a></h2>
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