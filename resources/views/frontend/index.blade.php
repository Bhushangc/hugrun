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
                            <li><a href="{{ url('/#booking') }}">Book a Lecture</a></li>
                            <li><a href="{{ url('/about#contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="language-toggle">
                        <div class="selected-language">
                            <img src="{{ asset('images/frontend/eng.png')}}" alt="English" id="current-flag" class="flag-circle" />
                            <span id="current-lang-text">EN</span>
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
                <h2>Information For Parents</h2>
                </div>
            </div></a
            >
            <a href="{{ route('article.health') }}" class="right-home-content"
            ><div>
                <div class="home-content">
                <h2>Mental Health Information</h2>
                </div>
            </div>
            </a>
        </div>
        <div class="home-banner-content">
            <a href="{{ route('about') }}">
                <div class="banner-content">
                        <img src="{{ asset('images/frontend/link.svg')}}" alt="link logo" />
                        <p>ABOUT ORGANIZATION</p>
                </div>
             </a>
             <a href="{{ url('/about#support') }}">
                <div class="banner-content">
                    <img src="{{ asset('images/frontend/money.svg')}}" alt="donation logo" />
                    <p>DONATION</p>
                </div>
             </a>
             <a href="{{ url('/#booking') }}">
                <div class="banner-content">
                    <img src="{{ asset('images/frontend/bubble.svg')}}" alt="bubble logo" />
                    <p>BOOK A LECTURE</p>
                </div>
             </a>
             <a href="{{ url('/about#contact') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/life.svg')}}" alt="life logo" />
                <p>WHERE TO GO?</p>
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
            <h2>BOOK A LECTURE</h2>
            <h1>Tailored Educational Programs for Mental Health Awareness</h1>
            <p>
            Hugrún provides education for young people and the lecture is made for
            first year students in upper secondary schools. We have also
            undertaken training in community centres. The education addresses
            mental health, mental disorders and resources.
            </p>
            <button id="book-now-button">Book Now</button>
        </div>
        </section>
        <section id="support-info">
        <div class="emergency">
            <div class="emergency-content">
            <h1>In an Emergency</h1>
            <p>
                Hugrún wants to inform you that you can call the emergency mental
                ward on 543-4050 or the emergency service on 112. <br />In addition,
                there is always someone available for you to speak with at the Red
                Cross on the tel. no. 1717 as well as by way of an anonymous online
                chat at 1717.is
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
            <h1>Resources</h1>
            <p>
                It is never too early or too late to seek help, but the sooner it is
                done, the better <br />
                In Iceland, there are numerous resources for mental health support
                that individuals can access without needing a referral from a
                healthcare professional. This list highlights key services available
                for self-referral. It is important to note that some resources, such
                as psychiatric wards within hospitals, require a referral from a
                healthcare provider and are therefore not included here.
            </p>
            <button id="resource-button">Read More</button>
            </div>
        </div>
        </section>
        <section id="mindful">
        <div class="mindful-image-div">
            <div class="mindful-content">
            <h2>" Let's Take Care of Mental Health. Let's Be #Huguð "</h2>
            <button id="testimonials-button">Read More</button>
            </div>
        </div>
        </section>
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
                    <p><a href="{{ url('/#booking') }}">Book Lecture</a></p>
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
