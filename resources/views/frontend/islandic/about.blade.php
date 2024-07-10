<!DOCTYPE html>
<html lang="is">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hugrun Um</title>
    <link rel="stylesheet" href="{{ asset('css/hugrun.css')}}">
    <link rel="stylesheet" href="{{ asset('css/hugrunResponsive.css')}}">  
    <link rel="stylesheet" href="{{ asset('css/article.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!-- seo meta tag -->
    <meta name="description" content="Hugrún veitir fræðslu ungmenna um andlega heilsu, geðraskanir og tiltæk áföll, með því að auka félagslega meðvitund gegnum ókeypis fyrirlestra, viðburði og vefsvæði.">
    <meta name="keywords" content="Hugrún, andleg heilsa, fræðsla, geðraskanir, fyrirlestrar, viðburðir, vefsvæði">
    <meta name="author" content="Hugrún Félag">
    <link rel="canonical" href="https://gedfraedsla.is/">
    <meta property="og:title" content="Hugrun - Fræðsla um andlega heilsu">
    <meta property="og:description" content="Hugrún veitir fræðslu ungmenna um andlega heilsu, geðraskanir og tiltæk áföll, með því að auka félagslega meðvitund gegnum ókeypis fyrirlestra, viðburði og vefsvæði.">
    <meta property="og:url" content="https://gedfraedsla.is/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://gedfraedsla.is/images/hugrun_logo.svg">
</head>
<body>
<header>
    <nav>
        <div class="logo">
            <a href="./hugrun.html"><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo hér"></a>
        </div>
        <div class="nav-right-content">
            <div class="nav-content">
                <ul>
                    <li><a href="{{ route('home') }}">Heim</a></li>
                    <li>
                        <a>Greinar</a>
                        <ul class="dropdown-content">
                            <li><a href="{{ route('article.parents') }}">Fyrir Foreldra</a></li>
                            <li><a href="{{ route('article.health') }}">Andleg Heilsa</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/#booking') }}">Bóka Fyrirlestur</a></li>
                    <li><a href="{{ url('/about#contact') }}">Hafa Samband</a></li>
                </ul>
            </div>
            <div class="language-toggle">
                <div class="selected-language">
                    <img src="{{ asset('images/frontend/eng.png')}}" alt="Enska" id="current-flag" class="flag-circle">
                    <span id="current-lang-text">EN</span>
                </div>
                <select id="language-select" onchange="changeLanguage()">
                    <option value="en" data-img="{{ asset('images/frontend/eng.png')}}">Enska</option>
                    <option value="is" data-img="{{ asset('images/frontend/island.png')}}">Íslenska</option>
                    <option value="pl" data-img="{{ asset('images/frontend/poland.png')}}">Pólska</option>
                </select>
            </div>
            <div class="mobile-menu-icon">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="mobile-nav-content">
            <div class="top-nav">
                <div class="logo">
                    <a href="./hugrun.html"><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo hér"></a>
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
                                <a href="./html/articles.html">Fyrir Foreldra</a>
                                <a href="./html/articles.html">Andleg Heilsa</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="#booking">Bóka Fyrirlestur</a></li>
                    <li><a href="#">Hafa Samband</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<section id="about">
    <div class="about--description">
        <div class="about-content">
            <h1>Saga Okkar</h1>
            <p>Hugrún, stofnað á vorinu 2016 af nemendum við Háskólann í Reykjavík í hjúkrun, lækningarfræði og sálfræði, er miðað við fræðslu um andlega heilsu. Nú taka nemendur við Háskóla Reykjavíkur og Háskóla Akureyrar einnig þátt. Markmið okkar er að fræða ungmenni um andlega heilsu, sjúkdóma og auðlindir, auk þess að auka félagslega meðvitund.</p>
            <p>Árleg verkefni okkar er að halda ókeypis fyrirlestrum um andlega heilsu á framhaldsskólum um allt land. Við haldum einnig fræðslukvöld, reynum skrifstofur fyrir alþjóðlegan dag geðheilsu og ráðgjöf í nemendasamtökum, foreldrafélögum og nemendafélögum. Árið 2018, höfðum við Huguð kampanjuvefritið til að stuðla að opinri umræðu um andlegar sjúkdóma, aðgengilegt á vefsvæðinu okkar. Okkar Instagram, <a href="https://www.instagram.com/gedfraedsla/">@gedfraedsla</a>, býður upp á ráð um andlega heilsu.</p>
            <p>Univeristy nemendur geta starfað sem kennarar, uppfylla kröfur og klára námskeið til að veita fyrirlestra. Hugrún virkar á veði, gjafir og fjáröflun, þar sem öll úrræði styðja fræðslu um andlega heilsu ungmenna. Vefsvæði okkar, uppfært síðan haustið 2016, veitir aðgengilegt fræðsluefni um andlega heilsu og sjúkdóma, þar sem stofnunin birtir góð ráð fyrir aukinni andlegri heilsu.</p>
        </div>
        <div class="about--image">
            <img src="{{ asset('images/frontend/about.png')}}" alt="#">
        </div>
    </div>
    <div class="about--us">
        <h2>Meðlimir Hugrún hafa sameiginlegt áhuga á að fræða ungmenni um mikilvægi andlegrar heilsu.</h2>
        <ul>
            <li>Hugrún var stofnað í upphafi 2016 af nemendum við Háskólann í Reykjavík.</li>
            <li>Útskrift nemendur við Háskóla Reykjavíkur og Háskóla Akureyrar að taka þátt.</li>
            <li>Markmið okkar er að fræða ungmenni um andlega heilsu, sjúkdóma og auðlindir, auk þess að auka félagslega meðvitund.</li>
        </ul>
    </div>
</section>

<section id="contact">
    <div class="contact-right-content">
        <p class="par">Hafa Samband</p>
        <h1>Hefurðu Spurningar? Taktu Samband!</h1>
        <p class="par-content">Hugrún miðast við fræðslu ungmenni á Íslandi um andlega heilsu, geðraskanir og tiltæk efni, auk að auka félagslega meðvitund gegnum ókeypis fyrirlestra, viðburði og vefsvæði.</p>
        <div class="contact-div">
            <i class="fa-solid fa-location-dot"></i>
            <p>Ísland</p>
        </div>
        <div class="contact-div">
            <i class="fa-regular fa-envelope"></i>
            <p>mailto:hugrunhugur@gmail.com</p>
        </div>
        </div>
    <div class="contact-left">
        <form action="#">
            <div class="form-row">
                <div class="form-div">
                    <i class="fa-regular fa-user"></i>
                    <input type="text" name="name" id="name" placeholder="Nafn">
                </div>
                <div class="form-div">
                    <i class="fa-regular fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Netfang">
                </div>
            </div>
            <div class="form-row">
                <div class="form-div">
                    <i class="fa-solid fa-phone"></i>
                    <input type="tel" name="phone" id="phone" placeholder="Sími">
                </div>
                <div class="form-div">
                    <i class="fa-solid fa-circle-info"></i>
                    <input type="text" name="subject" id="subject" placeholder="Málefni">
                </div>
            </div>
            <div class="message-div">
                <div class="form-div">
                    <i class="fa-solid fa-pen"></i>
                    <textarea name="message" id="message" cols="70" rows="4" placeholder="Hvernig getum við aðstoðað þig? Taktu samband!"></textarea>
                </div>
            </div>
            <div class="form-btn">
                <input type="submit" value="Taktu Samband" class="submit" id="submit">
            </div>
        </form>
    </div>
</section>

<footer>
    <div class="footer">
        <div class="social-media">
            <div>
                <span>Tengdu þig við okkur á samfélagsmiðlum:</span>
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
                        ><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo hér"
                    /></a>
                    </div>
                <p>Hugrún, stofnun um fræðslu um andlega heilsu, var stofnuð á vorinu 2016 af nemendum í hjúkrun, lækningarfræði og sálfræði við Háskóla Íslands.
                </p>
            </div>
            <div class="footer-column">
                <h6>Nyttugir tenglar</h6>
                <p><a href="{{ route('home') }}">Heim</a></p>
                <div class="article-links">
                    <p><a>Grein</a></p>
                    <div class="sub-links">
                        <p><a href="{{ route('article.parents') }}">Fyrir Foreldra</a></p>
                        <p><a href="{{ route('article.health') }}">Andleg Heilsa</a></p>
                    </div>
                </div>
                <p><a href="{{ url('/#booking') }}">Bóka Fyrirlestur</a></p>
                <p><a href="{{ url('/about#contact') }}">Hafa Samband</a></p>
                <p><a href="{{ route('about') }}">Um</a></p>
            </div>
            
            <div class="footer-column">
                <h6>Hafa Samband</h6>
                <p><i class="fas fa-home"></i> Ísland</p>
                <p><i class="fas fa-envelope"></i> hugrunhugur@gmail.com</p>
                
            </div>
        </div>
        <div class="copy-right">
            &copy; 2020 Höfundaréttur:
            <a href="https://gedfraedsla.is/"
            ><span>gedfraedsla.is</span></a>
        </div>
    </div>
</div>
</footer>
<script src="{{ asset('js/hugrun.js')}}"></script>
<script>
    document.getElementById('scrollToTop').addEventListener('click', function() {
        setTimeout(function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }, 0);
    });
    function toggleCards() {
        const cards = document.querySelectorAll('.card');
        const button = document.getElementById('toggleButton');
        if (button.textContent === 'Sýna Meira') {
            cards.forEach(card => card.classList.add('sýnilegur'));
            button.textContent = 'Sýna Minna';
        } else {
            cards.forEach((card, index) => {
                if (index >= 3) card.classList.remove('sýnilegur');
            });
            button.textContent = 'Sýna Meira';
        }
    }
</script>
</body>
</html>
