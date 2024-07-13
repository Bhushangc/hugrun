<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <title>Hugrun About</title> 
        <link rel="stylesheet" href="{{ asset('css/hugrun.css')}}">
        <link rel="stylesheet" href="{{ asset('css/hugrunResponsive.css')}}">  
        <link rel="stylesheet" href="{{ asset('css/article.css')}}">
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
                        <option value="{{ route('about', 'en') }}" data-img="{{ asset('images/frontend/eng.png')}}">English</option>
                        <option value="{{ route('about', 'is') }}" data-img="{{ asset('images/frontend/island.png')}}">Icelandic</option>
                        <option value="{{ route('about', 'po') }}" data-img="{{ asset('images/frontend/poland.png')}}">Polish</option>
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
    <section id="about">
        <div class="about--description">
            <div class="about-content">
                <h1>Okkar saga</h1>
                <p>Hugrún var stofnuð vorið 2016 af nemendum við Háskóla Íslands í hjúkrunarfræði, læknisfræði og sálfræði, með áherslu á fræðslu um geðheilbrigði. Nú taka nemendur frá Háskólanum í Reykjavík og Háskólanum á Akureyri einnig þátt. Markmið okkar er að fræða ungt fólk um geðheilbrigði, geðsjúkdóma og úrræði, og auka samfélagslega vitund.</p> <br> 
                <p>Aðalverkefni okkar á hverju ári er að halda ókeypis geðfræðslufyrirlestra í framhaldsskólum víðs vegar um Ísland. Við höldum einnig fræðslukvöld, höfum ritunarkampaníur fyrir Alþjóðlega geðheilbrigðisdaginn og tökum til máls á ungmennahúsum, foreldrafélögum og nemendafélögum. Árið 2018 hófum við útgáfu Huguð herferðarnetverksins til að efla opna umræðu um geðsjúkdóma, aðgengilegt í gegnum vefsíðu okkar. Instagramið okkar, <a href="https://www.instagram.com/gedfraedsla/">@gedfraedsla</a>, býður upp á geðheilbrigðistips.</p> <br> 
                <p>Háskólanemar geta tekið þátt sem fræðarar, mætt skilyrðum og lokið þjálfun til að halda fyrirlestra. Hugrún starfar á styrkjum, framlögum og fjáröflunum, og allur ágóði fer í fræðslu um geðheilbrigði ungs fólks. Vefsíða okkar, uppfærð síðan haustið 2016, býður upp á aðgengilegt fræðsluefni um geðheilbrigði og geðsjúkdóma þar sem samtökin birta góð ráð til að bæta geðheilbrigði.</p> <br> 
            </div>
            <div class="about--image">
                <img src="{{ asset('images/frontend/about.png')}}" alt="#">
            </div>
        </div>
        <div class="about--us">
            <h2>Félagar í Hugrún hafa sameiginlegan áhuga á að fræða ungt fólk um mikilvægi geðheilbrigðis.</h2>
        </div>
        
        <div>
            <a href="javascript:void(0);" id="scrollToTop"> <div class="circle"> <i class="fa-solid fa-arrow-up"></i> </div></a>
        </div>
    </section>
    <section id="booking">
        <div class="book-image">
            <img src="{{ asset('images/frontend/lecture.png')}}" alt="#" />
        </div>
        <div class="book-content-div">
            <h2>BOÐA FYRIRLESTUR</h2>
            <p>Það er auðvelt að bóka fyrirlestur um geðheilbrigði og geðsjúkdóma frá fyrirlesurum Hugrúnar. Þú þarft að senda tölvupóst á <span>hugrunhugur@gmail.com</span> eða hafa samband við okkur í gegnum <a href="https://www.facebook.com/gedfraedsla/">Facebook-síðu Hugrúnar</a>.</p>
            <p>Hugrún veitir fræðslu fyrir ungt fólk og fyrirlesturinn er gerður fyrir fyrsta árs nemendur í framhaldsskólum. Við höfum einnig haldið þjálfun á félagsmiðstöðvum. Fræðslan snýr að geðheilbrigði, geðsjúkdómum og úrræðum. Ef það eru sérstakar óskir, vinsamlegast tilgreinið þær.</p>
            <p>Allir sem taka þátt í starfsemi Hugrúnar eru sjálfboðaliðar og fræðslan er ókeypis.</p>
        </div>        
    </section>
    <section id="support">
        <div class="book-content-div">
            <h2>Styrktu Hugrún</h2>
            <p>Þú getur lagt fram frjáls framlög til Hugrúnar með því að leggja inn á reikning nr. <span>0331-26-002581</span>, kt. <span>590716-0490</span>.</p>
            <p>Hugrún fjármagna fræðslu fyrir ungt fólk um geðheilbrigði og geðsjúkdóma um allt land með frjálsum framlögum og styrkjum. Allir sem taka þátt í starfsemi Hugrúnar eru sjálfboðaliðar og félagar taka ekki við greiðslum.</p>
            <p>Ef þú velur að leggja fram framlag á annan hátt en með millifærslu, biðjum við þig að hafa samband við stjórn Hugrúnar á hugrunhugur@gmail.com eða í gegnum <a href="https://www.facebook.com/gedfraedsla/">Facebook-síðu Hugrúnar</a>.</p>
        </div>
        
        <div class="book-image">
            <img src="{{ asset('images/frontend/donation.png')}}" alt="#" />
        </div>
    </section>
    <section id="bod">
        <h1>The board of directors of the organisation</h1>
        <div class="card-divs">
            <div class="card visible">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/thora.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Þóra Jóhannsdóttir</h4>
                    <p>FORMAÐUR</p>
                    <a href="mailto:thorajohanns99@gmail.com">thorajohanns99@gmail.com</a>
                </div>
            </div>
            <div class="card visible">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/ragna.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Ragna Kristín Guðbrandsdóttir</h4>
                    <p>VARAFORMAÐUR OG FULLTRÚI LÆKNANEMA</p>
                    <a href="mailto:rkg4@hi.is">rkg4@hi.is</a>
                </div>
            </div>
            <div class="card visible">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/ina.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Ína Kathinka G. Steinþórsdóttir</h4>
                    <p>MEÐSTJÓRNANDI OG GJALDKERI</p>
                    <a href="mailto:inakathinka@gmail.com">inakathinka@gmail.com</a>
                </div>
            </div>
            <div class="card">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/inga.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Inga Birna Sigursteinsdóttir</h4>
                    <p>FRÆÐSLUSTÝRA</p>
                    <a href="mailto:ingabirnasigursteinsd@gmail.com">ingabirnasigursteinsd@gmail.com</a>
                </div>
            </div>
            <div class="card">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/hanna.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Hanna Tara Pálmadóttir</h4>
                    <p>MARKAÐSSTÝRA</p>
                    <a href="mailto:htp4@hi.is">htp4@hi.is</a>
                </div>
            </div>
            <div class="card">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/viktoria.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Viktoría Ýr Sveinsdóttir</h4>
                    <p>RITSTÝRA</p>
                    <a href="mailto:vittysveins@hotmail.com">vittysveins@hotmail.com</a>
                </div>
            </div>
            <div class="card">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/fridbjorg.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Friðbjörg Lilja Rúnarsdóttir</h4>
                    <p>FULLTRÚI GRUNNNEMA Í SÁLFRÆÐI</p>
                    <a href="mailto:flr2@hi.is">flr2@hi.is</a>
                </div>
            </div>
            <div class="card">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/sandra.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Sandra Fawcett</h4>
                    <p>FULLTRÚI MEISTARANEMA Í KLÍNÍSKRI SÁLFRÆÐI</p>
                    <a href="mailto:ssf7@hi.is">ssf7@hi.is</a>
                </div>
            </div>
            <div class="card">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/rakel.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Rakel Ósk Ólafsdóttir</h4>
                    <p>FULLTRÚI HJÚKRUNARFRÆÐINEMA</p>
                    <a href="mailto:ha170032@unak.is">ha170032@unak.is</a>
                </div>
            </div>
            <div class="card">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/sara.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Sara Rós Guðmundsdóttir</h4>
                    <p>FULLTRÚI GRUNNNEMA Í FÉLAGSRÁÐGJÖF</p>
                    <a href="mailto:srg39@hi.is">srg39@hi.is</a>
                </div>
            </div>
        </div>
        <div class="button-container">
            <button id="toggleButton" onclick="toggleCards()">Show More</button>
        </div>
    </section>
    <section id="contact">
        <div class="contact-right-content">
            <p class="par">Hafðu samband</p>
            <h1>Ertu með spurningar? Hafðu samband!</h1>
            <p class="par-content">Hugrún miðar að því að fræða ungt fólk á Íslandi um geðheilbrigði, geðsjúkdóma og tiltæk úrræði, auk þess að auka samfélagslega vitund í gegnum ókeypis fyrirlestra, viðburði og netmiðla.</p>

                <i class="fa-solid fa-location-dot"></i>
                <p>Iceland</p>
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
                        <input type="text" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="form-div">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-div">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" name="phone" id="phone" placeholder="Phone">
                    </div>
                    <div class="form-div">
                        <i class="fa-solid fa-circle-info"></i>
                        <input type="text" name="subject" id="subject" placeholder="Subject">
                    </div>
                </div>
                <div class="message-div">
                    <div class="form-div">
                        <i class="fa-solid fa-pen"></i>
                        <textarea name="message" id="message" cols="70" rows="4" placeholder="How can we help you? Feel free to get in touch!"></textarea>
                    </div>
                </div>
                <div class="form-btn">
                    <input type="submit" value="Get In Touch" class="submit" id="submit">
                </div>
            </form>
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
            if (button.textContent === 'Show More') {
                cards.forEach(card => card.classList.add('visible'));
                button.textContent = 'Show Less';
            } else {
                cards.forEach((card, index) => {
                    if (index >= 3) card.classList.remove('visible');
                });
                button.textContent = 'Show More';
            }
        }
    </script>
</body>
</html>