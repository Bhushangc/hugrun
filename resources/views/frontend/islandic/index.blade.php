<!DOCTYPE html>
<html lang="is">
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
                    <a href="./hugrun.html"><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="merki hér" /></a>
                </div>
                <div class="nav-right-content">
                    <div class="nav-content">
                        <ul>
                            <li><a href="{{ route('home') }}">Heim</a></li>
                            <li>
                                <a>Greinar</a>
                                <ul class="dropdown-content">
                                    <li><a href="{{ route('article.parents') }}">Fyrir foreldra</a></li>
                                    <li><a href="{{ route('article.health') }}">Geðheilbrigði</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/#booking') }}">Bóka fyrirlestur</a></li>
                            <li><a href="{{ url('/about#contact') }}">Hafa samband</a></li>
                        </ul>
                    </div>
                    <div class="language-toggle">
                        <div class="selected-language">
                            <img src="{{ asset('images/frontend/island.png')}}" alt="Enska" id="current-flag" class="flag-circle" />
                            <span id="current-lang-text">IS</span>
                        </div>
                        <select id="language-select" onchange="window.location.href = this.value;">
                            <option disabled selected>Select Language</option>
                            <option value="{{ route('home', 'en') }}" data-img="{{ asset('images/frontend/eng.png')}}">English</option>
                            <option value="{{ route('home', 'is') }}" data-img="{{ asset('images/frontend/island.png')}}">Icelandic</option>
                            <option value="{{ route('home', 'po') }}" data-img="{{ asset('images/frontend/poland.png')}}">Polish</option>
                        </select>
                    </div>
                    <div class="mobile-menu-icon">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
                <div class="mobile-nav-content">
                    <div class="top-nav">
                        <div class="logo">
                            <a href="./hugrun.html"
                                ><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="merki hér"
                            /></a>
                            </div>
                        <div class="mobile-close-icon">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                    <div class="bottom-nav">
                        <ul>
                            <li><a href="#home">Heim</a></li>
                            <li>
                                <div class="dropdown">
                                    <p onclick="myFunction()" class="dropbtn">Greinar</p>
                                    <div id="myDropdown" class="dropdown-content">
                                        <a href="./html/articles.html">Fyrir foreldra</a>
                                        <a href="./html/articles.html">Geðheilbrigði</a>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#booking">Bóka fyrirlestur</a></li>
                            <li><a href="#">Hafa samband</a></li>
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
                <h2>Upplýsingar Fyrir Foreldra</h2>
                </div>
            </div></a
            >
            <a href="{{ route('article.health') }}" class="right-home-content"
            ><div>
                <div class="home-content">
                <h2>Upplýsingar Um Geðheilbrigði</h2>
                </div>
            </div>
            </a>
        </div>
        <div class="home-banner-content">
            <div class="banner-content">
            <img src="{{ asset('images/frontend/link.svg')}}" alt="tengill merki" />
            <p>UM SAMTÖKIN</p>
            </div>
            <div class="banner-content">
            <img src="{{ asset('images/frontend/money.svg')}}" alt="gjöf merki" />
            <p>GJÖF</p>
            </div>
            <div class="banner-content">
            <img src="{{ asset('images/frontend/bubble.svg')}}" alt="kúla merki" />
            <p>BÓKA FYRIRLESTUR</p>
            </div>
            <div class="banner-content">
            <img src="{{ asset('images/frontend/life.svg')}}" alt="líf merki" />
            <p>HVAR Á AÐ FARA?</p>
            </div>
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
            <h2>BÓKA FYRIRLESTUR</h2>
            <h1>Sérsniðnar Fræðsludagskrár Fyrir Geðheilbrigðisvitund</h1>
            <p>
            Hugrún veitir fræðslu fyrir ungt fólk og fyrirlesturinn er gerður fyrir
            fyrsta árs nemendur í framhaldsskólum. Við höfum einnig
            haldið þjálfun í félagsmiðstöðvum. Fræðslan fjallar um
            geðheilbrigði, geðraskanir og úrræði.
            </p>
            <button id="book-now-button">Bóka Núna</button>
        </div>
        </section>
        <section id="support-info">
        <div class="emergency">
            <div class="emergency-content">
            <h1>Í Neyð</h1>
            <p>
                Hugrún vill upplýsa þig um að þú getur hringt á bráðageðdeild í síma 543-4050 eða í neyðarþjónustuna í 112. <br />Auk þess er alltaf einhver til staðar til að tala við þig hjá Rauða krossinum í síma 1717 sem og með nafnlausum netspjalli á 1717.is
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
            <h1>Úrræði</h1>
            <p>
                Það er aldrei of snemma eða of seint að leita aðstoðar, en því fyrr sem það er gert, því betra <br />
                Á Íslandi eru fjölmörg úrræði fyrir geðheilbrigðisstuðning sem einstaklingar geta fengið aðgang að án þess að þurfa tilvísun frá heilbrigðisstarfsmanni. Þessi listi lýsir helstu þjónustum sem eru í boði fyrir sjálfsvísanir. Mikilvægt er að hafa í huga að sum úrræði, eins og geðdeildir á sjúkrahúsum, krefjast tilvísunar frá heilbrigðisstarfsmanni og eru því ekki innifalin hér.
            </p>
            <button id="resource-button">Lestu Meira</button>
            </div>
        </div>
        </section>
        <section id="mindful">
        <div class="mindful-image-div">
            <div class="mindful-content">
            <h2>" Tökum Varðhöld Á Geðheilbrigði. Verum #Huguð "</h2>
            <button id="testimonials-button">Lestu Meira</button>
            </div>
        </div>
        </section>
    <footer>
        <div class="footer">
            <div class="social-media">
                <div>
                    <span>Vertu í sambandi við okkur á samfélagsmiðlum:</span>
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
                            ><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="merki hér"
                        /></a>
                        </div>
                    <p>Hugrún, samtök fyrir geðheilbrigðisfræðslu, voru stofnuð vorið 2016 af nemendum í hjúkrun, læknisfræði og sálfræði við Háskóla Íslands.
                    </p>
                </div>
                <div class="footer-column">
                    <h6>Nyttir tenglar</h6>
                    <p><a href="{{ route('home') }}">Heim</a></p>
                    <div class="article-links">
                        <p><a>Grein</a></p>
                        <div class="sub-links">
                            <p><a href="{{ route('article.parents') }}">Fyrir foreldra</a></p>
                            <p><a href="{{ route('article.health') }}">Geðheilbrigði</a></p>
                        </div>
                    </div>
                    <p><a href="{{ url('/#booking') }}">Bóka fyrirlestur</a></p>
                    <p><a href="{{ url('/about#contact') }}">Hafa samband</a></p>
                    <p><a href="{{ route('about') }}">Um</a></p>
                </div>
                
                <div class="footer-column">
                    <h6>Hafa samband</h6>
                    <p><i class="fas fa-home"></i> Ísland</p>
                    <p><i class="fas fa-envelope"></i> hugrunhugur@gmail.com</p>
                    
                </div>
            </div>
            <div class="copy-right">
                &copy; 2020 Höfundarréttur:
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
