<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hugrun Testimonials</title>
        <link rel="stylesheet" href="../css/hugrun.css" />
        
        <link rel="stylesheet" href="../css/article.css">
        <link rel="stylesheet" href="../css/testimonials.css">
        <link rel="stylesheet" href="../css/hugrunResponsive.css">
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
                <a href="{{ route('home') }}"><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="merki hér" /></a>
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
                        <option value="{{ route('testimonials', 'en') }}" data-img="{{ asset('images/frontend/eng.png')}}">English</option>
                        <option value="{{ route('testimonials', 'is') }}" data-img="{{ asset('images/frontend/island.png')}}">Icelandic</option>
                        <option value="{{ route('testimonials', 'po') }}" data-img="{{ asset('images/frontend/poland.png')}}">Polish</option>
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
    <section id="testimonials">
        <div class="testimonials-div">
            <div class="testimonials-links">
                <h3>#HUGUÐ</h3>
                <ul>
                    <li><a href="#ragnar">RAGNAR</a></li>
                    <li><a href="#vala">VALA KRISTÍN</a></li>
                    <li><a href="#aron">ARON MÁR</a></li>
                    <li><a href="#tryggvi">TRYGGVI</a></li>
                    <li><a href="#huld">HREFNA HULD</a></li>
                    <li><a href="#sonja">SONJA BJÖRG</a></li>
                    <li><a href="#iduun">IÐUNN</a></li>
                </ul>
            </div>
        </div>
        <div>
            <a href="javascript:void(0);" id="scrollToTop"> <div class="circle"> <i class="fa-solid fa-arrow-up"></i> </div></a>
        </div>
    </section>
    <section id="ragnar">
        <div class="testimonials--div--image">
            <div class="testimonials-content-div">
                <h3>RAGNAR</h3>
                <p>"Hann lærði að taka ábyrgð á sjálfum sér þegar hann var greindur með tvíhæða geðsjúkdóm."</p>
                <button id="ragnar-btn">Lesa meira</button>
            </div>
            <div class="testimonials-image-div">
                <img src="{{ asset('images/frontend/testimonials/img_1.jpg')}}" alt="#">
            </div>
        </div>
    </section>
    
    <section id="vala">
        <div class="testimonials--div--image">
            <div class="testimonials-image-div">
                <img src="{{ asset('images/frontend/testimonials/img_2.jpg')}}" alt="#">
            </div>
            <div class="testimonials-content-div">
                <h3>VALA KRISTÍN</h3>
                <p>"Röskunin var stjórnuð með því að styrkja tengslin við viðkvæma hliðina."</p>
                <button id="vala-btn">Lesa meira</button>
            </div>
        </div>
    </section>
    
    <section id="aron">
        <div class="testimonials--div--image">
            <div class="testimonials-content-div">
                <h3>ARON MÁR</h3>
                <p>"Drengir þurfa að tala um tilfinningar sínar. Ný kynslóð með tilfinningavísu einstaklinga mun gera okkur að betri samfélagi."</p>
                <button id="aron-btn">Lesa meira</button>
            </div>
            <div class="testimonials-image-div">
                <img src="{{ asset('images/frontend/testimonials/img_3.jpg')}}" alt="">
            </div>
        </div>
    </section>
    
    <section id="tryggvi">
        <div class="testimonials--div--image">
            <div class="testimonials-image-div">
                <img src="{{ asset('images/frontend/testimonials/img_4.jpg')}}" alt="">
            </div>
            <div class="testimonials-content-div">
                <h3>TRYGGVI</h3>
                <p>"Stundum þarftu bara að blanda kortunum sem þú hefur fengið og byrja á nýtt."</p>
                <button id="tryggvi-btn">Lesa meira</button>
            </div>
        </div>
    </section>
    
    <section id="huld">
        <div class="testimonials--div--image">
            <div class="testimonials-content-div">
                <h3>HREFNA HULD</h3>
                <p>"Ræða lífið með geðsjúkdómi, rökræði og mikilvægi þess að leita sér hjálpar."</p>
                <button id="huld-btn">Lesa meira</button>
            </div>
            <div class="testimonials-image-div">
                <img src="{{ asset('images/frontend/testimonials/img_5.jpg')}}" alt="#">
            </div>
        </div>
    </section>
    
    <section id="sonja">
        <div class="testimonials--div--image">
            <div class="testimonials-image-div">
                <img src="{{ asset('images/frontend/testimonials/img_6.jpg')}}" alt="">
            </div>
            <div class="testimonials-content-div">
                <h3>SONJA BJÖRG</h3>
                <p>"Það leggur áherslu á þörfina fyrir aukna umræðu um umönnunaraðila þeirra sem hafa geðsjúkdóma."</p>
                <button id="sonja-btn">Lesa meira</button>
            </div>
        </div>
    </section>
    
    <section id="iduun">
        <div class="testimonials--div--image">
            <div class="testimonials-content-div">
                <h3>SONJA BJÖRG</h3>
                <p>"Það leggur áherslu á þörfina fyrir aukna umræðu um umönnunaraðila þeirra sem hafa geðsjúkdóma."</p>
                <button id="iduun-btn">Lesa meira</button>
            </div>
            <div class="testimonials-image-div">
                <img src="{{ asset('images/frontend/testimonials/img_7.jpg')}}" alt="">
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
    <script src="../js/hugrun.js"></script>
    <script>
        document.getElementById('scrollToTop').addEventListener('click', function() {
            setTimeout(function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }, 0);
        });
        document.getElementById('ragnar-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review') }}';
        });
        document.getElementById('vala-btn').addEventListener('click', function() {
            window.location.href = '{{ url('/testimonials#vala') }}';
        });
        document.getElementById('aron-btn').addEventListener('click', function() {
            window.location.href = '{{ url('/testimonials#aron') }}';
        });
        document.getElementById('tryggvi-btn').addEventListener('click', function() {
            window.location.href = '{{ url('/testimonials#tryggvi') }}';
        });
        document.getElementById('huld-btn').addEventListener('click', function() {
            window.location.href = '{{ url('/testimonials#huld') }}';
        });
        document.getElementById('sonja-btn').addEventListener('click', function() {
            window.location.href = '{{ url('/testimonials#sonja') }}';
        });
        document.getElementById('iduun-btn').addEventListener('click', function() {
            window.location.href = '{{ url('/testimonials#iduun') }}';
        });
    </script>
</body>
</html>