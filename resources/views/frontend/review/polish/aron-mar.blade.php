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
                        <img src="{{ asset('images/frontend/poland.png')}}" alt="English" id="current-flag" class="flag-circle" />
                        <span id="current-lang-text">PO</span>
                    </div>
                    <select id="language-select" onchange="window.location.href = this.value">
                        <option disabled selected>Select Language</option>
                        <option value="{{ route('review', ['name' => 'aron-mar', 'lan' => 'en']) }}" data-img="{{ asset('images/frontend/eng.png')}}">English</option>
                        <option value="{{ route('review', ['name' => 'aron-mar', 'lan' => 'is']) }}" data-img="{{ asset('images/frontend/island.png')}}">Icelandic</option>
                        <option value="{{ route('review', ['name' => 'aron-mar', 'lan' => 'po']) }}" data-img="{{ asset('images/frontend/poland.png')}}">Polish</option>
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
        <div class="reviews--img-div img3">
            <div></div>
            <h2>#UMYSŁ</h2>
            <h5><a href="#review--head-content">ARON MAR  &nbsp; <i class="fa-solid fa-angle-down"></i></a></h5>
        </div>
        <div class="review--video-content">
            <div class="review--head-content" id="review--head-content">
                <h2>NOWE POKOLENIE ISTOT EMOCJONALNYCH</h2>
                <p style="color: #d1503b;">Student dramatu i nowy ojciec Aron Már, znany większości Islandczyków z mediów społecznościowych, zmaga się z lękiem i depresją od najmłodszych lat. Opowiada swoją historię o tym, jak po rozpoczęciu szkoły dramatycznej zrezygnował z maski oraz jak ważne jest rozmowy o swoich uczuciach z ludźmi wokół ciebie.</p>
            </div>
        </div>
        <div class="review-head-video">
            <iframe src="https://player.vimeo.com/video/258956472?color=d1503b&title=0&byline=0&portrait=0 " class="campaign__video" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <p>"Jestem tradycyjnym pacjentem lękowym, którym my, Islandczycy, jesteśmy do grup. Latem mamy trzymiesięczną euforię, a potem wpadamy w sześciomiesięczną depresję krótkiego dnia. To jest islandzka rutyna, powiedziałbym."</p>
    
            <p>"Moje dzieciństwo charakteryzowało się ciągłym przemieszczaniem się, co sprawiło, że założyłem maskę i zawsze grałem rolę wesołka. W ten sposób łatwiej było się dopasować. Bycie otwartym i radosnym jest w porządku, ale na dłuższą metę nikomu to nie służy."</p>
            
            <p>Aron spędzał dużo czasu ze swoim dziadkiem, gdy był młodszy, a później przebywał w Szwecji, gdy jego matka poznała Amerykanina, z którym zamieszkała. Wspólnie mieli Evę Lynn, jego młodszą siostrę. Kiedy Aron miał 18 lat, stracił swoją małą siostrę, gdy została potrącona przez samochód podczas rodzinnej wycieczki. Dni po wypadku są zamazane w jego pamięci. W drodze do szpitala nie przyszło mu do głowy, że jego siostra nie żyje.</p>
            <p>Aron wcześniej wystąpił w wywiadzie, w którym opowiada o stracie swojej siostry i głębokim wpływie, jaki miało to na niego.</p>
            
        </div>
            <div class="campaing-content-image">
                <p><img src="{{ asset('images/frontend/testimonials/img_0123.jpg')}}" alt="#"></p>
            </div>
    </section>
    <section id="campaign-content-II">
        <blockquote>
            <p>"Dopiero kiedy całkowicie spanikowałem, ludzie wokół mnie powiedzieli, że muszę zrobić coś ze swoimi sprawami."</p>
        </blockquote>            
        <p>"Zawsze czułem się przygnębiony, ale po stracie siostry wpadłem w głęboką depresję. Na początku nie miałem pojęcia, co się dzieje. Ciało postawiło jeden z piekielnych murów obronnych. Byłem całkowicie pusty i nie wiedziałem, jak reagować na otoczenie. Czułem się tak źle, że zacząłem szkodzić sobie narkotykami, piciem i pornografią. Dopiero kiedy całkowicie spanikowałem, ludzie wokół mnie powiedzieli, że muszę zrobić coś ze swoimi sprawami. Skonsultowałem się z psychologiem, który pomógł mi zrozumieć, co przeżywam. Spędziłem z nim dwa lata i nadal korzystam z narzędzi, których mnie nauczył, i które bardzo mi pomagają."</p>
        <div class="campaing-content-image campaignImg">
            <p><img src="{{ asset('images/frontend/testimonials/aron.jpg')}}" alt="#"></p>
        </div>
        <h2>Zdjęcie maski w dramacie</h2>
        <p>To w szkole artystycznej Aron zaczął się otwierać. Zdjął maskę, którą nosił mocno na sobie.</p>
        <p>"Gra aktorska zmusiła mnie do otwarcia się. Musisz być prawdziwy wobec siebie, jeśli zamierzasz brać udział w tym programie. Między osobami w klasie musi istnieć 100% zaufanie. W tym czasie nie byłem na to gotowy, co spowodowało, że zawaliłem rok. Zdałem sobie sprawę, że naprawdę muszę coś zmienić. Całkowicie odwróciłem stronę i przestałem pić, palić marihuanę i oglądać pornografię, co na tym etapie stało się problematyczne."</p>
        <blockquote>
            <p>"Dziś moje lęki charakteryzują się myślą, że nie jestem wystarczająco dobry. Że nie robię wystarczająco dużo, aby odnieść sukces w życiu."</p>
        </blockquote>
        <p>Aron przeniósł się do Flúðir i pracował tam na imprezie dla chłopca z chorobą neurologiczną i degeneracyjną.</p>
        <p>"Bardzo mnie to zmieniło, aby myśleć o kimś innym niż o sobie. Musiałem pozbyć się swojego ego, co było niesamowicie pokorne. Po tym wyjechałem na sześciomiesięczną podróż do Ameryki Południowej z otwartym sercem i umysłem. Wróciłem jako nowy człowiek."</p>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <h2>Potrzebuję ćwiczyć relaks</h2>
            <p>"Dziś moje lęki charakteryzują się myślą, że nie jestem wystarczająco dobry. Że nie robię wystarczająco dużo, aby odnieść sukces w życiu. Tworzę wiele projektów i jestem bardzo zajęty. Jak tylko nie jestem zajęty pracą, wpadam w dołek. Myślę, "Wow, nic nie robię ze swoim życiem." Zawsze myślę, że powinienem coś robić. Kiedy jestem pod dużą presją, wcale się nie denerwuję, ale kiedy nikt ode mnie nic nie oczekuje, odczuwam ten lęk. To niesamowicie dziwne. Ćwiczyłem pozostawanie w domu i relaksowanie się, co jest dla mnie bardzo trudne."</p>
        </div>
        <div class="campaing-content-image campaign-content-img contentImgg">
            <p><img src="{{ asset('images/frontend/testimonials/img_0057.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content-II">
        <h2>Nowe pokolenie istot emocjonalnych</h2>
        <p>Aron mówi, że ćwiczenia i psychoterapia pomogły mu poczuć się lepiej. Mówi również, że ma szczęście z narzeczoną Hildi, która była przy nim jak skała przez dobre i złe chwile. Niedawno Aron i jego przyjaciele zaczęli rozmawiać o swoich uczuciach, a on mówi, że to bardzo ważne.</p>
        <p>"Wszyscy mamy jakiś rodzaj lęku i informujemy się nawzajem, kiedy nie czujemy się dobrze. To bardzo dobre, ponieważ wtedy ktoś, kto w danym momencie nie odczuwa lęku, może uspokoić drugiego. To niesamowicie wygodne, zamiast ukrywać wszystko w sobie. Zbliżasz się do ludzi, otwierając się."</p>
        <blockquote>
            <p>"Myślę, że ważne jest, aby rozmawiać z chłopakami o uczuciach."</p>
        </blockquote>
        <p>Myślę, że ważne jest, aby rozmawiać z chłopakami o uczuciach. Żyjemy w tak dobrym społeczeństwie, że myślę, iż kolejne pokolenia po nas będą bardzo różne emocjonalnie. Będę rozmawiał z moim synem bez końca o uczuciach. Jeśli czuje się źle, spróbuję to przepracować, zamiast nic nie robić i mówić mu, żeby po prostu ciężko pracował."</p>
        <p>Dwa lata temu Aron założył organizację Allir græta, której celem jest otwarcie dyskusji na temat lęku i depresji wśród dzieci i nastolatków.</p>
        <div class="campaing-content-image campaign-content-img midImg">
            <p><img src="{{ asset('images/frontend/testimonials/img_0133.jpg')}}" alt="#"></p>
        </div>
        <p>"Na początku organizacja była głównie skierowana do chłopców, ale teraz celujemy we wszystkich nastolatków, niezależnie od płci; dziewczyna, chłopak, osoba niebinarna. Zdecydowałem się wykorzystać moje śledzenie w mediach społecznościowych do promowania tej sprawy. Prowadziłem wykłady w szkołach i dzieliłem się znaczeniem bycia prawdziwym wobec siebie. Kiedy byłem młodszy, nie wiedziałem, na której nodze stanąć i nie dbałem o uczucia."</p>
    </section>
    <section id="campaign-content_III">
        <div class="campaign-div-content">
            <h2>Otwórzmy się bardziej</h2>
            <p>“Muszę sobie przypominać, że to jest długi maraton, nawet triathlon, a nie sprint. Jestem teraz w dobrym miejscu i po przybyciu dziecka czuję się dużo lepiej, mam nową rolę i odpowiedzialność. Nowe uczucia wykwitają we mnie, jakby moje serce otwierało się bardziej. To niesamowicie piękne mieć dziecko."</p>
            <p>"Brzmi to jak frazes, ale to prawda: jeśli czujesz się źle, uzyskaj pomoc." Jak tylko porozmawiasz głośno z kimś, komu ufasz, od razu poczujesz się dużo lepiej. Niezależnie od tego, czy to z psychologiem, dobrym przyjacielem, czy krewnym. To podstawa wszystkiego, aby więcej rozmawiać o uczuciach. Islandczycy często są uparci w kwestii swoich uczuć i starają się pokazać wszystkim, jak niesamowicie dobrze się czują, nawet kiedy czują się źle wewnętrznie. Musimy otworzyć się bardziej jako naród."</p>
            <p>Rozmówcy wystąpili w wywiadach na własnych warunkach. Wywiad opiera się na ich doświadczeniach. Warto wspomnieć, że doświadczenia są osobiste i nie każdy doświadcza tych samych objawów.</p>
            <p>Hugrún chciałaby również zwrócić uwagę na zasoby, które są dostępne dla tych, którzy czują, że doświadczają objawów depresji lub lęku tutaj i tutaj.</p>
        </div>
    </section>
    <section id="next_campaign">
        <div class="next_campaign_heading">
            <h2><a href="./vala-kristin.html"><i class="fa-solid fa-arrow-left"></i></a>&nbsp;&nbsp;Poprzedni artykuł </h2>
        </div>
        <div class="next_campaign_heading">
            <h2>Następny artykuł &nbsp;<a href="./tryggvi.html"><i class="fa-solid fa-arrow-right"></i></a></h2>
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

    <script src="../../js/hugrun.js"></script>
</body>
</html>