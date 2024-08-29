<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
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
                    <a href="{{ route('home','po') }}"><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo tutaj" /></a>
                </div>
                <div class="nav-right-content">
                    <div class="nav-content">
                        <ul>
                            <li><a href="{{ route('home','po') }}">Strona główna</a></li>
                            <li>
                                <a>Artykuły</a>
                                <ul class="dropdown-content">
                                    <li><a href="{{ route('article.parents.polish') }}">Dla rodziców</a></li>
                                    <li><a href="{{ route('article.health.polish') }}">Zdrowie psychiczne</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/home/po#booking') }}">Zarezerwuj wykład</a></li>
                            <li><a href="{{ url('/about/po') }}">O nas</a></li>
                        </ul>
                    </div>
                
                    <div class="language-toggle">
                        <div class="selected-language">
                            <img src="{{ asset('images/frontend/poland.png')}}" alt="English" id="current-flag" class="flag-circle" />
                            <span id="current-lang-text">PO</span>
                        </div>
                        @if (isset($currentBlog))
                        @php
                            $routeName = implode('.', array_slice(explode('.', Request::route()->getName()), 0, 2));
            
                        @endphp
                       
                        <select id="language-select" onchange="window.location.href = this.value">
                            <option disabled selected>Select Language</option>
                            <option value="{{ route($routeName, ['id' => $currentBlog->id]) }}" data-img="{{ asset('images/frontend/eng.png') }}">English</option>
                            <option value="{{ route($routeName . '.is', ['id' => $currentBlog->id]) }}" data-img="{{ asset('images/frontend/island.png') }}">Icelandic</option>
                            <option value="{{ route($routeName . '.po', ['id' => $currentBlog->id]) }}" data-img="{{ asset('images/frontend/poland.png') }}">Polish</option>
                        </select>
                          
                        @else
                            <select id="language-select" onchange="window.location.href = this.value">
                                <option disabled selected>Select Language</option>
                                <option value="{{route(Request::route()->getName(),'en')}}" data-img="{{ asset('images/frontend/eng.png')}}">English</option>
                                <option value="{{route(Request::route()->getName(),'is')}}" data-img="{{ asset('images/frontend/island.png')}}">Icelandic</option>
                                <option value="{{route(Request::route()->getName(),'po')}}" data-img="{{ asset('images/frontend/poland.png')}}">Polish</option>
                            </select>
                        @endif
                    </div>
                    <div class="mobile-menu-icon">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
                <div class="mobile-nav-content">
                    <div class="top-nav">
                        <div class="logo">
                            <a href="{{ route('home','po') }}"
                                ><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo here"
                            /></a>
                            </div>
                        <div class="mobile-close-icon">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                    <div class="bottom-nav">
                        <ul>
                            <li><a href="{{ route('home','po') }}">Strona główna<</a></li>
                            <li>
                                <div class="dropdown">
                                    <p onclick="myFunction()" class="dropbtn">Artykuły</p>
                                    <div id="myDropdown" class="dropdown-content">
                                        <a href="{{ route('article.parents.polish') }}">Dla rodziców</a>
                                        <a href="{{ route('article.health.polish') }}">Zdrowie psychiczne</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ url('/home/p0#booking') }}">Zarezerwuj wykład</a></li>
                            <li><a href="{{ url('/about/po') }}">O nas</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        @yield('content')


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
                <p><a href="{{ route('home','po') }}">Strona główna</a></p>
                <div class="article-links">
                    <p><a>Artykuł</a></p>
                    <div class="sub-links">
                        <p><a href="{{ route('article.parents.polish') }}">Dla rodziców</a></p>
                        <p><a href="{{ route('article.health.polish') }}">Zdrowie psychiczne</a></p>
                    </div>
                </div>
                <p><a href="{{ url('/home/po#booking') }}">Zarezerwuj wykład</a></p>
                <p><a href="{{ url('/about/po#contact') }}">Kontakt</a></p>
                <p><a href="{{ route('about','po') }}">O nas</a></p>
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
</body>
</html>