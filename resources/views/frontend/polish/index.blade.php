<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hugrún</title>
        <link rel="stylesheet" href="{{ asset('css/hugrun.css')}}">
        <link rel="stylesheet" href="{{ asset('css/hugrunResponsive.css')}}">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        />
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
        <meta name="description" content="Hugrún oferuje edukację dla młodych ludzi oraz indywidualnie dostosowane programy edukacyjne dotyczące zdrowia psychicznego. Sprawdź nasze zasoby dla rodziców i informacje na temat zdrowia psychicznego.">
        <meta name="keywords" content="Hugrún, zdrowie psychiczne, edukacja, świadomość zdrowia psychicznego, zasoby, wykłady, rodzice, uczniowie">
        <meta name="author" content="Hugrún organizacja">
        <link rel="canonical" href="https://gedfraedsla.is/" />
        <meta property="og:title" content="Hugrún - Edukacja dotycząca zdrowia psychicznego" />
        <meta property="og:description" content="Hugrún oferuje edukację dla młodych ludzi oraz indywidualnie dostosowane programy edukacyjne dotyczące zdrowia psychicznego. Sprawdź nasze zasoby dla rodziców i informacje na temat zdrowia psychicznego." />
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
                            <option value="{{route('home','en')}}" data-img="{{ asset('images/frontend/eng.png')}}">English</option>
                            <option value="{{route('home','is')}}" data-img="{{ asset('images/frontend/island.png')}}">Icelandic</option>
                            <option value="{{route('home','po')}}" data-img="{{ asset('images/frontend/poland.png')}}">Polish</option>
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
        <section id="home">
        <div class="home-article">
            <a href="{{ route('article.parents') }}" class="left-home-content"
            ><div>
                <div class="home-content">
                <h2>Informacje dla rodziców</h2>
                </div>
            </div></a
            >
            <a href="{{ route('article.health') }}" class="right-home-content"
            ><div>
                <div class="home-content">
                <h2>Informacje o zdrowiu psychicznym</h2>
                </div>
            </div>
            </a>
        </div>
        <div class="home-banner-content">
            <a href="{{ route('about') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/link.svg')}}" alt="ikona linku" />
                <p>O ORGANIZACJI</p>
                </div>
            </a>
            <a href="{{ url('/about#support') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/money.svg')}}" alt="ikona darowizny" />
                <p>DAROWIZNA</p>
                </div>
            </a>
            <a href="{{ url('/#booking') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/bubble.svg')}}" alt="ikona bańki" />
                <p>ZAREZERWUJ WYKŁAD</p>
                </div>
            </a>
            <a href="{{ url('/about#contact') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/life.svg')}}" alt="ikona życia" />
                <p>GDZIE IŚĆ?</p>
                </div>
            </a>
        </div>
        <div>
            <a href="javascript:void(0);" id="scrollToTop"> <div class="circle"> <i class="fa-solid fa-arrow-up"></i> </div></a>
        </div>
        </section>
        <section id="booking">
        <div class="book-image">
            <img src="{{ asset('images/frontend/class.png')}}" alt="#" />
        </div>
        <div class="book-content-div">
            <h2>ZAREZERWUJ WYKŁAD</h2>
            <h1>Indywidualnie Dostosowane Programy Edukacyjne Dotyczące Świadomości Zdrowia Psychicznego</h1>
            <p>
            Hugrún oferuje edukację dla młodych ludzi, a wykład jest przeznaczony dla uczniów pierwszego roku w szkołach średnich. Prowadziliśmy również szkolenia w ośrodkach młodzieżowych. Edukacja obejmuje zdrowie psychiczne, zaburzenia psychiczne i zasoby.
            </p>
            <button id="book-now-button">Zarezerwuj Teraz</button>
        </div>
        </section>
        <section id="support-info">
        <div class="emergency">
            <div class="emergency-content">
            <h1>W Nagłym Wypadku</h1>
            <p>
                Hugrún chce poinformować, że możesz zadzwonić na oddział psychiatryczny w nagłych przypadkach pod numer 543-4050 lub na numer alarmowy 112. <br />Ponadto zawsze ktoś jest dostępny do rozmowy w Czerwonym Krzyżu pod numerem 1717 oraz na anonimowym czacie na stronie 1717.is
            </p>
            </div>
            <div class="emergency-image">
            <img src="{{ asset('images/frontend/emergency.png')}}" alt="#" />
            </div>
        </div>
        <div class="resources">
            <div class="resources-image">
            <img src="{{ asset('images/frontend/support.png')}}" alt="#" />
            </div>
            <div class="resources-content">
            <h1>Zasoby</h1>
            <p>
                Nigdy nie jest za wcześnie ani za późno, aby szukać pomocy, ale im wcześniej to zrobisz, tym lepiej <br />
                W Islandii istnieje wiele zasobów wsparcia zdrowia psychicznego, do których jednostki mogą uzyskać dostęp bez skierowania od pracownika służby zdrowia. Ta lista opisuje główne usługi dostępne dla samoreferencji. Ważne jest, aby pamiętać, że niektóre zasoby, takie jak oddziały psychiatryczne w szpitalach, wymagają skierowania od pracownika służby zdrowia i dlatego nie są tutaj uwzględnione.
            </p>
            <button id="resource-button">Czytaj Więcej</button>
            </div>
        </div>
        </section>
        <section id="mindful">
        <div class="mindful-image-div">
            <div class="mindful-content">
            <h2>" Dbajmy o zdrowie psychiczne. Bądźmy #Odważni "</h2>
            <button id="testimonials-button">Czytaj Więcej</button>
            </div>
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
    <script src="{{ asset('/js/hugrun.js')}}"></script>
    <script>
        document.getElementById('scrollToTop').addEventListener('click', function() {
            setTimeout(function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }, 0);
        });
        document.getElementById('book-now-button').addEventListener('click', function() {
            window.location.href = '{{ route('about') }}';
        });
        document.getElementById('resource-button').addEventListener('click', function() {
            window.location.href = '{{ route('resources') }}';
        });
        document.getElementById('testimonials-button').addEventListener('click', function() {
            window.location.href = '{{ route('testimonials') }}';
        });
    </script>
</body>
</html>
