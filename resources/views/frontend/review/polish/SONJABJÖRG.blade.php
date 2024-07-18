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
                        <option value="{{ route('review', ['name' => 'SONJABJÖRG', 'lan' => 'en']) }}" data-img="{{ asset('images/frontend/eng.png')}}">English</option>
                        <option value="{{ route('review', ['name' => 'SONJABJÖRG', 'lan' => 'is']) }}" data-img="{{ asset('images/frontend/island.png')}}">Icelandic</option>
                        <option value="{{ route('review', ['name' => 'SONJABJÖRG', 'lan' => 'po']) }}" data-img="{{ asset('images/frontend/poland.png')}}">Polish</option>
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
        <div class="reviews--img-div img6">
            <div></div>
            <h2>#HUGUÐ</h2>
            <h5><a href="#review--head-content">SONJA BJÖRG  &nbsp; <i class="fa-solid fa-angle-down"></i></a></h5>
        </div>
        <div class="review--video-content">
            <div class="review--head-content" id="review--head-content">
                <h2>MASZ PRAWO DO SWOICH UCZUĆ</h2>
                <p>Prezydentka Stowarzyszenia Studentów Uniwersytetu Reykjaviku, Sonja Björg Jóhannsdóttir, dzieli się swoim doświadczeniem dorastania z matką borykającą się z depresją. Najtrudniejsze było pogodzenie się z faktem, że nie można zmusić nikogo do szukania pomocy. Podkreśla, że ważne jest, aby krewni byli obecni, ale też znaleźli swoje granice. Rozmowa o własnych problemach nie przysłania problemów innych, każdy ma prawo do pomocy, a społeczeństwo powinno reagować zwiększając dostęp niezależnie od sytuacji ekonomicznej.</p>
            </div>
        </div>
        <div class="review-head-video">
            <iframe src="https://player.vimeo.com/video/258961828?color=d1503b&title=0&byline=0&portrait=0" class="campaign__video" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <p>"Gdy miałam 18 lat, moja matka próbowała popełnić samobójstwo. To było jakby opadły kurtyny przed moimi oczami. To było ogromnym szokiem, ale jednocześnie wiedziałam, że to coś, czego nie mogłam stawić czoła. Doświadczyłam wielkiego załamania zaufania, dużo złości i goryczy przez długi czas" - mówi Sonja Björg Jóhannsdóttir, dzieląc się swoim doświadczeniem jako krewna osoby z depresją.</p>
            <p>Sonja dorastała w Akureyri razem z rodzicami i dwoma młodszymi braćmi. Zawsze była osobą towarzyską, uczestniczącą aktywnie w działalności związków studenckich i sumiennie realizującą swoje zainteresowania. Obecnie ukończyła psychologię na Uniwersytecie Reykjaviku. Pełniła tam funkcję przewodniczącej Stowarzyszenia Studentów Uniwersytetu. Najważniejszym problemem stowarzyszenia było wprowadzenie darmowych usług psychologicznych dla studentów, a ich polityka została wdrożona na początku roku. "To było naszym głównym celem w zarządzie SFHR od czasu objęcia funkcji i jesteśmy bardzo dumni, że udało nam się to zrealizować" - mówi Sonja.</p>
        </div>
        <div class="campaing-content-image">
            <p><img src="{{ asset('images/frontend/testimonials/img17.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content-II">
        <h2>Chciałem mieć dobrą mamę</h2>
        <p>"Moja matka była młoda, gdy mnie miała, i zachorowała na depresję we wczesnym wieku. Była to zupełnie inna epoka i istniały duże uprzedzenia wobec szukania pomocy zdrowia psychicznego. Wszystko brała sobie do serca i była niezwykle pracowita, ukończyła administrację biznesową, została ratownikiem medycznym, a potem nauczycielem szkoły średniej" - mówi Sonja, która wczesnym dzieciństwie przejęła dużą odpowiedzialność za dom. "Spędzałam dużo czasu sama w domu, opiekując się braćmi i przejmując wszystkie obowiązki domowe. Pamiętam, że zawsze chciałam mieć dobrą mamę i być dla niej, więc często do mnie się zwracała. Nie zapraszałam znajomych, gdy miała zły dzień, a były dni, gdy była bardzo humorzasta, co jest częścią choroby. Ale wtedy nie przyszło mi do głowy, że moja matka jest chora ani że mogłaby szukać pomocy."</p>
    
        <blockquote>
        <p>"Ale wtedy nie przyszło mi do głowy, że moja matka jest chora ani że mogłaby szukać pomocy."</p>
        </blockquote>
        <p>Sonja ma jedno wspomnienie sprzed dziewięciu lat, które opisuje jej doświadczenie w dzieciństwie. "Moja mama karmiła mojego najmłodszego brata piersią i podbiegłam do niej płacząc, błagając, aby mnie nie zostawiała samej, wzięłam mojego brata, pomogłam mu odbić i położyłam go. Jednocześnie opiekowałem się starszym bratem, wtedy sześcioletnim, i upewniałem się, że jest w salonie, oglądając taśmę. Wtedy nie wydawało mi się to nietypowe, ale z perspektywy czasu widzę, że to było zbyt wiele odpowiedzialności na barki małej dziewczynki."</p>
    </section>
    <section id="campaign-content-II">
        <h2>Brak edukacji</h2>
        <p>"Jest ogromny brak edukacji na temat problemów zdrowia psychicznego. Gdybym znała symptomy i miała klarowne źródła, gdzie szukać pomocy, mogło to bardzo zmienić sytuację. Miałam 18 lat, a moja matka została przyjęta na oddział psychiatryczny, zanim jeszcze wiedziałam, że jest chora na depresję. To mnie całkowicie zaskoczyło, choć brzmi to dziwnie."</p>
        <p>Nastąpiły lata wielkiego cierpienia. Sonja doświadczyła intensywnej złości i bezsilności wobec sytuacji. Wiele lat współuzależnienia i stłumionych emocji odbiło się na niej piętnem. "Byłam bardzo negatywnie nastawiona do całego procesu psychologicznego, przez który przechodziła moja mama. Uważałam, że została wypisana za wcześnie, byłem zła na psychologów i życie ogólnie. W retrospekcji, to było najlepsze, co mogło się wydarzyć mojej mamie, że trafiła na oddział psychiatryczny. To był mój sposób na uwolnienie nierozwiązanych emocji i problemów. Zdałem sobie sprawę, że nie mogę być tam dla nikogo poza sobą, i że mogę się załamać z tego powodu."</p>
        <div class="campaing-content-image campaign-content-img groupImg">
            <p><img src="{{ asset('images/frontend/testimonials/img18.jpg')}}" alt="#"></p>
        </div>
    </section>
    
    <section id="campaign-content-II">
        <h2>Każdy ma prawo do pomocy</h2>
        <p>Sonja mówi, że czuła się winna z powodu myśli, które się pojawiły. Uważa, że potrzebna jest więcej dyskusji na temat krewnych osób chorujących psychicznie. "To trochę jak w samolotach. Musisz najpierw założyć maskę tlenową sobie, zanim zrobisz to dla kogoś innego. Jako krewny ważne jest pamiętanie, że nie możesz zmusić nikogo do szukania pomocy. Osoba musi chcieć tego sama, a to może być najtrudniejsze. Ważne jest, aby zrozumieć, że zrobiłeś wszystko, co mogłeś, i zrozumieć, gdzie są twoje granice."</p>
        <blockquote>
            <p>"Jako krewny ważne jest pamiętanie, że nie możesz zmusić nikogo do szukania pomocy."</p>
        </blockquote>
        <p>Na pytanie, jaką radę dałaby osobom w takiej samej sytuacji, mówi, że najważniejsze jest pamiętanie, że każdy ma prawo do swoich własnych uczuć. "Przez długi czas czułam, że moja depresja nie ma znaczenia. Niebezpiecznie jest porównywać swoje traumy do traum innych i umniejszać swoje doświadczenia oraz tłumić swoje uczucia." Dodaje, że dotyczy to życia ogólnie. "Nie powinniśmy porównywać się wzajemnie, czy to przyjaciele czy rodzina. Każdy ma prawo do pomocy, gdy źle się czuje, i to jest w porządku. Rozmawiając o własnych problemach, nie zaciszamy cienia na problemach innych."</p>
    </section>
    
    <section id="campaign-content">
        <div class="campaign-div-content">
            <h2>Ważne jest wyrażanie uczuć</h2>
            <p>Sonja przeprowadziła się do Reykjaviku, aby studiować na Uniwersytecie Reykjaviku w 2014 roku. Uznała, że nadszedł czas, aby popracować nad sobą i skorzystała z pomocy psychologa. "Zdiagnozowano u mnie depresję, a otrzymywanie leczenia psychologicznego bardzo mi pomogło. Istnieje wiele czynników, które pomogły mi na przestrzeni czasu, ale wszystkie mają wspólny element: wyrażanie uczuć. Zwróciłam się do przyjaciółek, mojego nauczyciela, pisałam wiersze, chodziłam do psychologa i zapisałam się na kurs Dale Carnegie'ego." To właśnie na tym kursie Sonja po raz pierwszy publicznie podzieliła się swoją historią. "Poczułam, że coś się we mnie zmienia. Doświadczyłam pewnego rodzaju wewnętrznego spokoju i akceptacji sytuacji. Udało mi się odrzucić gorzki żal, który niosłam przez tak długo."</p>
        </div>
        <div class="campaing-content-image campaign-content-img">
            <p><img src="{{ asset('images/frontend/testimonials/img19.jpg')}}" alt="#"></p>
        </div>
    </section>
    
    <section id="campaign-content_III">
        <div class="campaign-div-content">
            <h2>Chce pracować z dziećmi</h2>
            <p>Sonja mówi, że dziś bardzo blisko jest jej z jej matką i wzajemnie się wspierają. "Bardzo się nią opiekuję, jest moją ulubioną osobą w życiu. Dzisiejsze otwarte dyskusje społeczne bardzo nam pomogły, zarówno mnie, jak i mojej mamie. Na przykład zachęciłam ją, aby skontaktowała się z Stígamót, ważną organizacją promującą równość i oferującą pomoc bez opłat. Niestety, usługi psychologiczne są bardzo drogie, i nie każdy może sobie na nie pozwolić."</p>
            <p>Na pytanie o jej przyszłe plany, Sonja mówi, że interesuje się pracą z dziećmi. "Rodzicielstwo i okoliczności kształtują nas jako jednostki i często wyjaśniają nasze zachowanie. Moją pasją życiową jest zapewnienie wszystkim dzieciom równych możliwości edukacyjnych i dostępu do potrzebnej pomocy. Wprowadzenie psychologów szkolnych na wszystkich poziomach edukacyjnych jest czymś, co trzeba zrobić. Wyobrażam sobie pracę z dziećmi jako psycholog dziecięcy lub w innym powiązanym zawodzie. Chcę być częścią kształtowania społeczeństwa, w którym otwarcie rozmawiamy o swoich uczuciach, doświadczeniach i eliminujemy uprzedzenia. Każdy ma prawo do swoich uczuć i musi nauczyć się radzić sobie z problemami, zamiast czuć się z nimi winny."</p>
            <p class="italic">Respondenci uczestniczyli w wywiadach na własnych warunkach. Wywiad oparty jest na ich doświadczeniach i percepcjach. Warto zauważyć, że doświadczenia są osobiste i nie każdy doświadcza tych samych objawów.</p>
            <p class="italic">Hugrún chce również zwrócić uwagę na dostępne zasoby dla tych, którzy uważają, że doświadczają objawów depresji.</p>
        </div>
    </section>
    
    <section id="next_campaign">
        <div class="next_campaign_heading">
            <h2><a href="./hrefna-huld.html"><i class="fa-solid fa-arrow-left"></i></a>&nbsp;&nbsp;Poprzedni artykuł </h2>
        </div>
        <div class="next_campaign_heading">
            <h2>Następny artykuł &nbsp;<a href="./ragnar.html"><i class="fa-solid fa-arrow-right"></i></a></h2>
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