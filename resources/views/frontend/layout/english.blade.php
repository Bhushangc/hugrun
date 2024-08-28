<!DOCTYPE html>
<html lang="is">
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
        <meta name="description" content="Hugrún veitir fræðslu fyrir ungt fólk og býður upp á sérsniðnar fræðsludagskrár um geðheilbrigði. Skoðaðu úrræði okkar fyrir foreldra og upplýsingar um geðheilbrigði.">
        <meta name="keywords" content="Hugrún, geðheilbrigði, fræðsla, geðheilbrigðisvitund, úrræði, fyrirlestrar, foreldrar, nemendur">
        <meta name="author" content="Hugrún samtök">
        <link rel="canonical" href="https://gedfraedsla.is/" />
        <meta property="og:title" content="Hugrún - Geðheilbrigðisfræðsla" />
        <meta property="og:description" content="Hugrún veitir fræðslu fyrir ungt fólk og býður upp á sérsniðnar fræðsludagskrár um geðheilbrigði. Skoðaðu úrræði okkar fyrir foreldra og upplýsingar um geðheilbrigði." />
        <meta property="og:url" content="https://gedfraedsla.is/" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="https://gedfraedsla.is/images/hugrun_logo.svg" />
    </head>
    <body>
        <header>
            <nav>
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo here" /></a>
                </div>
                <div class="nav-right-content">
                    <div class="nav-content">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>
                                <a>Articles</a>
                                <ul class="dropdown-content">
                                    <li><a href="{{ route('article.parents') }}">For Parents</a></li>
                                    <li><a href="{{ route('article.health') }}">Mental Health</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/home#booking') }}">Book a Lecture</a></li>
                            <li><a href="{{ url('/about') }}">About Us</a></li>
                        </ul>
                    </div>
                    <div class="language-toggle">
                        <div class="selected-language">
                            <img src="{{ asset('images/frontend/eng.png')}}" alt="English" id="current-flag" class="flag-circle" />
                            <span id="current-lang-text">EN</span>
                            
                        </div>
                        @if (isset($currentBlog))
                       
                        <select id="language-select" onchange="window.location.href = this.value">
                            <option disabled selected>Select Language</option>
                            <option value="{{ route(Request::route()->getName(), ['id' => $currentBlog->id]) }}" data-img="{{ asset('images/frontend/eng.png') }}">English</option>
                            <option value="{{ route(Request::route()->getName().'.is', ['id' => $currentBlog->id]) }}" data-img="{{ asset('images/frontend/island.png') }}">Icelandic</option>
                            <option value="{{ route(Request::route()->getName().'.po', ['id' => $currentBlog->id]) }}" data-img="{{ asset('images/frontend/poland.png') }}">Polish</option>
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
                            <li><a href="{{ url('/home#booking') }}">Book a Lecture</a></li>
                            <li><a href="{{ url('/about#contact') }}">Contact</a></li>
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
                        <span>Get connected with us on social networks:</span>
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
                                ><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo here"
                            /></a>
                            </div>
                        <p>Hugrún, an organization for mental health education, was established in the spring of 2016 by students in nursing, medicine and psychology at the University of Iceland.
                        </p>
                    </div>
                    <div class="footer-column">
                        <h6>Useful links</h6>
                        <p><a href="{{ route('home') }}">Home</a></p>
                        <div class="article-links">
                            <p><a>Article</a></p>
                            <div class="sub-links">
                                <p><a href="{{ route('article.parents') }}">For Parents</a></p>
                                <p><a href="{{ route('article.health') }}">Mental Health</a></p>
                            </div>
                        </div>
                        <p><a href="{{ url('/home#booking') }}">Book Lecture</a></p>
                        <p><a href="{{ url('/about#contact') }}">Contact</a></p>
                        <p><a href="{{ route('about') }}">About</a></p>
                    </div>
                    
                    <div class="footer-column">
                        <h6>Contact</h6>
                        <p><i class="fas fa-home"></i> Iceland</p>
                        <p><i class="fas fa-envelope"></i> hugrunhugur@gmail.com</p>
                        
                    </div>
                </div>
                <div class="copy-right">
                    &copy; 2020 Copyright:
                    <a href="https://gedfraedsla.is/"
                    ><span>gedfraedsla.is</span></a>
                </div>
            </div>
        </div>
        </footer>
    </body>
    </html>