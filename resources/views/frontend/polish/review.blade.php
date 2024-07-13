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
                        <option value="{{route('review','en')}}" data-img="{{ asset('images/frontend/eng.png')}}">English</option>
                        <option value="{{route('review','is')}}" data-img="{{ asset('images/frontend/island.png')}}">Icelandic</option>
                        <option value="{{route('review','po')}}" data-img="{{ asset('images/frontend/poland.png')}}">Polish</option>
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
                            ><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo tutaj"
                        /></a>
                        </div>
                    <div class="mobile-close-icon">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="bottom-nav">
                    <ul>
                        <li><a href="#home">Strona główna</a></li>
                        <li>
                            <div class="dropdown">
                                <p onclick="myFunction()" class="dropbtn">Artykuły</p>
                                <div id="myDropdown" class="dropdown-content">
                                    <a href="./html/articles.html">Dla rodziców</a>
                                    <a href="./html/articles.html">Zdrowie psychiczne</a>
                                </div>
                            </div>
                        </li>
                        <li><a href="#booking">Zarezerwuj wykład</a></li>
                        <li><a href="#">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="ragnar--seciton">
        <div class="reviews--img-div">
            <div></div>
            <h2>#HUGUÐ</h2>
            <h5><a href="#review--head-content">Ragnar  &nbsp; <i class="fa-solid fa-angle-down"></i></a></h5>
        </div>
        <div class="review--video-content">
            <div class="review--head-content" id="review--head-content">
                <h2>NAUCZYŁ SIĘ BRAĆ ODPOWIEDZIALNOŚĆ ZA SIEBIE</h2>
                <p>Ragnar Jón Ragnarsson zmagał się z chorobą afektywną dwubiegunową od dwudziestego roku życia. Długie okresy manii i depresji cechowały się u niego urojeniami i myślami samobójczymi. Rozmowy z psychiatrami oraz przeprowadzka na Hrísey z rodziną towarzyszyły mu podczas tych trudności, ale poważna depresja zmusiła go do szukania pomocy. Po głębokim samorefleksji Ragnar zaczął lepiej rozumieć swoją chorobę psychiczną, dzięki dobrej rutynie odnalazł miłość i nową perspektywę piękna codziennego życia.</p>
            </div>
        </div>
        <div class="review-head-video">
            <iframe src="https://player.vimeo.com/video/258953627?color=d1503b&title=0&byline=0&portrait=0" class="campaign__video" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <p>"Nazywam się Ragnar, ale wszyscy nazywają mnie Humi, oprócz mojej mamy," mówi Humi, potrząsając głową na myśl o pochodzeniu swojego przezwiska. "To jakaś głupota, która się przyjęła."</p>
    
            <p>Humi opisuje siebie jako typowego faceta z Hlíðarnar, gdzie mieszka ze swoją żoną Hólmfríður Helga i dwójką dzieci, Höskuldurem Sölvi i Snæfríður Edda. Jego hobby kręci się wokół muzyki i stolarstwa. "Dobre pozostałości po manii to to, że potrafię być bardzo produktywny, gdy zainteresuję się czymś. Wytrenowałem się, aby realizować moje pomysły," mówi Humi i przyznaje, że może nie jest taki typowy, bo zmaga się z chorobą afektywną dwubiegunową od dwudziestego roku życia.</p>
            
            <p>Mimo długotrwałej choroby, Humi otrzymał diagnozę dopiero cztery lata temu, tak przynajmniej szacuje. "Lata i chronologia nie są moją mocną stroną. Wszystko się ze sobą miesza. Z chorobą afektywną dwubiegunową są długie okresy, o których ma się mało wspomnień, i mam trudności z umiejscowieniem rzeczy na osi czasu."</p>
        </div>
        <div class="campaing-content-image">
            <p><img src="{{ asset('images/frontend/testimonials/img_0516.jpg')}}"  alt="#"></p>
        </div>
    </section>
    
    <section id="campaign-content-II">
        <h2>Depresja pojawiła się wcześnie</h2>
        <p>Humi dorastał w północnej części Hafnarfjörður i ma miłe wspomnienia z tamtych czasów. "To był dobry czas na dorastanie, ale szkoła podstawowa nie była łatwym okresem. Byłem prześladowany i bardzo zamknięty jako dziecko. Być może było to związane z moją chorobą psychiczną. Zazwyczaj mówi się, że choroby psychiczne pojawiają się między 20. a 25. rokiem życia. Myślę, że wtedy są tylko diagnozowane, ale objawy pojawiają się wcześniej. Czasami mam wrażenie, że muszę uzasadniać takie stwierdzenia, ale to są moje uczucia i moje doświadczenie. Były długie okresy, kiedy czułem się źle i nie chciałem brać udziału w niczym." Pomogło mu dobre centrum społecznościowe i wspaniali przyjaciele. "Wartość centrów społecznościowych jest o wiele większa, niż się im przypisuje. Pracowali tam wspaniali ludzie, i do dzisiaj ciepło mi się robi na sercu, gdy ich spotykam."</p>
    
        <blockquote>
            <p>"W pewnym momencie jeździłem na wschód do Heiði, żeby rozmawiać z obcymi, ale nie mówiłem nic o tym mojej żonie."</p>
        </blockquote>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <h2>Nauczył się ukrywać swoje uczucia</h2>
            <p>Humi rozwijał umiejętność ukrywania swoich uczuć już we wczesnym dzieciństwie. Było to jego mechanizm obronny, aby radzić sobie z warunkami społecznymi w tamtych czasach. "Nie miałem pojęcia, co to są choroby psychiczne, i choć to zabrzmi głupio, nie wiedziałem, że można się czuć źle. Jest w tobie tak głęboko zakorzenione, żeby się z tym mierzyć."</p>
            <p>"Pewnego momentu, prawdopodobnie wielokrotnie, byłoby dla mnie dobre, gdybym szczerze odpowiadał, gdy ktoś pytał, jak się czuję. Były długie okresy, kiedy nie miałem pojęcia, co się dzieje. Mam gulu w gardle, gdy o tym mówię," mówi Humi, dodając, że w jego wychowaniu było mało rozmów na temat chorób psychicznych. "W liceum usłyszałem o koledze z klasy, który borykał się z depresją i popełnił samobójstwo. To był bardzo smutny przypadek. Nic w tamtej historii nie klikało we mnie, że ja mogę być taki sam, choć myśli o zakończeniu własnego życia zaczęły już wtedy mi się pojawiać."</p>
        </div>
        <div class="campaing-content-image campaign-content-img">
            <p><img src="{{ asset('images/frontend/testimonials/img_0489.jpg')}}"  alt="#"></p>
        </div>
    </section>
    <section id="campaign-content-II">
        <h2>Rozmowy z obcymi na Vaðlaheiði</h2>
        <p>W przypadku Humiego choroba afektywna dwubiegunowa manifestuje się epizodami manii i depresji. Sam miał znaczące błędne wyobrażenia na temat choroby. "Nie jest tak prosto, że wpadasz w depresję i wychodzisz z niej w manię. Czasami jestem w depresji, ale jednocześnie w manii. Wtedy jestem bardzo zamknięty i nie chcę być w otoczeniu ludzi. Jednocześnie mam wiele urojeń i samooszustw." Umiejętność ukrywania choroby stała się częścią jego życia. "Ludzie mówią o funkcjonujących alkoholikach, a ja byłem funkcjonującym pacjentem psychiatrycznym. Chodziłem do pracy, ale robiłem to zaciskając zęby. W pewnym momencie jeździłem na wschód do Heiði, żeby rozmawiać z obcymi, ale nie mówiłem nic o tym mojej żonie."</p>
        <p>Humi opowiada, że ma wiele historii z okresów manii, jak je nazywa. Niektóre są zabawne, inne nie. "Wydarzyły się straszne rzeczy podczas manii, które miały poważne konsekwencje. Jakimś cudem udało mi się uniknąć hospitalizacji psychiatrycznej. Żeby być przyjętym, trzeba było być bardzo daleko w psychozie, stanowić zagrożenie lub bezpośrednio łamać prawo. Nie traci się autonomii tak łatwo."</p>
        <blockquote>
            <p>"Z zewnątrz wydawałem się być bardzo pracowitą i śmiałą osobą."</p>
        </blockquote>
        <p>Najdłuższa i najbardziej poważna mania Humiego rozpoczęła się, gdy on i Hólmfríður spodziewali się pierwszego dziecka w 2009 roku. "Wierzyłem, że mania i depresja są spowodowane tylko złymi wydarzeniami, wywołującymi naturalne wahania nastroju. Nie zdawałem sobie sprawy, że pozytywne wydarzenia, jak wieść o oczekiwaniu dziecka, mogą także wpłynąć na nastrój. Przyniosła ona ogromną radość i podekscytowanie, zaczęłem tracić kontrolę. Mania, która nastąpiła, trwała około dwóch lat i była towarzyszona psychozą."</p>
    </section>
    <section id="campaign-content_III">
        <div class="campaign-div-content">
            <h2>Przeprowadzka na Hrísey podczas manii</h2>
            <p>"Krótko po narodzinach córki wpadłem na pomysł przeprowadzki na Hrísey, z rodziną. Często udawało mi się przekonać Hólmfríður do różnych nonsensów, ale czy to nie miłość?" śmieje się Humi. "Na Hrísey budziłem się o szóstej rano i generalnie spałem tylko dwie do trzech godzin na noc. Budziłem się i zaczynałem piec, i piekłem. Chodziłem na spacery, naprawiałem dom, budowałem rzeczy. Z zewnątrz wydawałem się być bardzo pracowitą i śmiałą osobą."</p>
            <p>Rodzina mieszkała na Hrísey przez rok, a sytuacja Humiego pogorszyła się stamtąd. Długie okresy depresji i manicznych wahnięć doprowadziły do psychozy. "Wszystko zaczęło się rozpadać: rodzina, uniwersytet, przyjaciele. Wpadłem w psychozę, która trwała długo," mówi Humi, który wcześniej miał pewien stereotyp tego, czym jest psychoza. "Moje pojęcie o psychozie to stanie w szlafroku na Miklubraut i mówienie: 'Jestem Napoleonem!' Ale psychoza polega naprawdę na utracie kontaktu z rzeczywistością. Jest przerwa między twoją rzeczywistością a rzeczywistością wszystkich innych. Zaczęłem podejmować wszystkie moje decyzje na podstawie moich stworzonych urojeń."</p>
            <p>"Długo trwało, zanim wyszedłem z psychozy. Mózg stworzył swoją własną rzeczywistość, podejmował decyzje na jej podstawie. Nie łatwo się z nią pożegnać ani przyznać sobie, że się myliłem. Jest wiele rzeczy, które wydarzyły się w tym czasie, o których nie jestem gotowy rozmawiać. Przez długi czas myślałem, co mogłem zrobić inaczej. Nadal siedzę z samym sobą i muszę wziąć odpowiedzialność za siebie i za to, kim jestem. Dojście do porozumienia z tym, czego nie można zmienić, ale jednocześnie wzięcie odpowiedzialności za to. Proces przebaczenia sobie jest najważniejszy."</p>
        </div>
        <div class="campaing-content-image campaign-content-img">
            <p><img src="{{ asset('images/frontend/testimonials/ragnar_1.jpg')}}"  alt="#"></p>
        </div>
    </section>
    
    <section id="campaign-content-II">
        <h2>Zdiagnozowano depresję</h2>
        <p>To właśnie depresja skłoniła Humiego do szukania pomocy. "Poszedłem do mojego lekarza pierwszego kontaktu, który dobrze wiarę przepisał mi leki przeciwdepresyjne, ale są one na depresję, a nie na zaburzenia dwubiegunowe. Spowodowało to okropny czas, gdy byłem całkowicie płaski i nie wykazywałem żadnych emocji."</p>
        <p>Humi nigdy nie podejrzewał, że ma zaburzenie dwubiegunowe. Dopiero gdy on i jego żona obejrzeli dokument o Stephenie Fry i jego zaburzeniu dwubiegunowym, coś kliknęło u Hólmfríður. "Pod koniec filmu odwróciła się do mnie i zapytała, czy możliwe, że mam zaburzenie dwubiegunowe. Wtedy poczułem wstyd. Być może byłem depresyjny, ale nie chory psychicznie."</p>
        <blockquote>
            <p>"Wtedy poczułem wstyd. Być może byłem depresyjny, ale nie chory psychicznie."</p>
        </blockquote>
        <p>Słowa te pozostały z Humim, więc niedługo po tym zaczął szukać pomocy psychologicznej. "Psycholog postawił mi diagnozę zaburzenia dwubiegunowego, ale z jakiegoś powodu nie przepisał mi leków. Wtedy byłem tak głęboko dotknięty, że potrzebowałem poważnej interwencji; terapia po prostu mnie nie dotykała. Dopiero gdy poważnie rozważałem zakończenie życia, desperacko zadzwoniłem do oddziału psychiatrycznego i zapytałem, czy mogą mi pomóc, cokolwiek by to było."</p>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <h2>Oddział psychiatryczny jako punkt zwrotny</h2>
            <p>Odpowiedzi, które otrzymał Humi, były takie, że bez skierowania nie można było nic zrobić, tak przynajmniej pamięta. W rozmowie są momenty niepewności, kiedy i jak dokładnie miały miejsce pewne wydarzenia. "Poszedłem na otwartą sesję w gabinecie lekarza w Akureyri i wyznałem wszystko. Poważnie rozważałem zakończenie życia i teraz musiało coś zostać zrobione. Biedny człowiek, który mnie przyjął, wahał się i kazał wrócić następnego dnia. Następnego dnia miałem skierowanie i spotkanie z psychiatrą za dwa tygodnie."</p>
            <p>Humi mówi, że ulga wynikająca z posiadania lekarza i diagnozy była ogromna, ale przed nim było jeszcze wiele pracy nad sobą. "Rozpoczęcie właściwego leczenia, znalezienie psychiatry i rozpoczęcie procesu rekonwalescencji oznaczały punkt zwrotny w moim życiu. Kiedy w końcu się dostałem, byłem dobrze opiekowany," wyjaśnia Humi, ale uważa, że system mógłby wcześniej interweniować. "Może w pewnym momencie ludzie, do których się zwróciłem o pomoc, mogliby mnie skierować do psychiatry. Ale część mojej choroby polega na tym, jak dobrze potrafię ją ukryć. Nie chciałem przyznawać się do mojej manii, tylko do depresji. Powód był prosty: kiedy mam fazę maniakalną, jest tak wesoło i pełno energii. Jestem duszą towarzystwa, niesamowicie pracowity i produktywny. Część mnie chciała się tego trzymać."</p>
        </div>
        <div class="campaing-content-image campaign-content-img-II">
            <p><img src="{{ asset('images/frontend/testimonials/img_0530.jpg')}}"  alt="#"></p>
        </div>
    </section>
    <section id="campaign-content-II">
        <h2>Codziennie wycieczki do Kringlan</h2>
        <p>"Obecnie praktycznie nigdy nie doświadczam manii, oprócz drobnych hipomanii. Wtedy może się zdarzyć, że późno chodzę spać i oglądam filmy na internecie o tym, jak coś budować, nic poważniejszego niż to." Co dwa-trzy miesiące Humi przeżywa depresję, która trwa kilka dni. Mówi, że nauczył się rozumieć siebie i często wie, kiedy ją się spodziewać. "W tych dniach nie chodzę do pracy. Jestem niesamowicie wdzięczny swojemu pracodawcy, który okazuje mi tolerancję. Moje mocne strony są doceniane, a moje słabości rozumiane."</p>
        <p>Kiedy Humi czuje się kiepsko, ma dobrą rutynę. Służy ona jako rodzaj testu, gdzie się znajduje. "Codziennie chodzę na spacer do Kringlan i piję kawę. Chodzę z słuchawkami, czapką, a może i kapturem, i obserwuję, jaki wpływ ma na mnie bycie w otoczeniu ludzi. Dobrze jest w Kringlan i w tłumie, bo decydujesz, jak bardzo chcesz być towarzyski. Jeśli dochodzę do momentu, kiedy mam ochotę witać się z ludźmi i patrzeć im w oczy, wiem, że wracam do zdrowia."</p><br>
        <br><br>
        <h2>Musimy rozmawiać o samobójstwie</h2>
        <p>Dziś Humi chce intensyfikować dyskusję na temat chorób psychicznych. "Gdy patrzę wstecz, jestem wdzięczny, że jestem przy życiu. Musimy więcej rozmawiać o samobójstwie, i musimy móc rozmawiać o swoich uczuciach. Był to ogromny krok dla mnie, że nauczyłem się szczerze odpowiadać, jak się czuję, bez poczucia, że obarczam kogoś innego swoimi troskami. Musimy uznać proces, nie tylko skutki, szarą strefę między dobrze się czuć a być poważnie samobójczym. Myślę, że wielu ludzi boi się reakcji otoczenia, gdy omawiają te sprawy, że zostaną wysłani do szpitala psychiatrycznego i nie będą mogli zbliżać się do noży i nożyczek. Tworzenie dramy nikomu nie pomaga."</p>
        <blockquote>
            <p>"Mogę wziąć odpowiedzialność za to, jaki jestem dzisiaj ojcem i być ojcem, jakiego zasługują moje dzieci, być obecnym i zaangażowanym."</p>
        </blockquote>
        <p>"W moim przypadku samobójstwo jest jak czarny pies na moim ramieniu, z którym nauczyłem się żyć. Czasami w ogóle go nie słyszę, ale czasami daje znać o sobie. Kiedy to się dzieje, rozmawiam z moimi bliskimi, uświadamiam im, jak się czuję, i zapewniam, że nie ma powodów do niepokoju, ale dam im znać, jeśli się to pogorszy."</p>
    </section>
    <section id="next_campaign">
        <div class="next_campaign_heading">
            <h2>Następny artykuł &nbsp;<a href="#"><i class="fa-solid fa-arrow-right"></i></a></h2>
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