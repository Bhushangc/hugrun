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
                        <option value="{{ route('review', ['name' => 'SONJABJÖRG', 'lan' => 'en']) }}" data-img="{{ asset('images/frontend/eng.png')}}">English</option>
                        <option value="{{ route('review', ['name' => 'SONJABJÖRG', 'lan' => 'is']) }}" data-img="{{ asset('images/frontend/island.png')}}">Icelandic</option>
                        <option value="{{ route('review', ['name' => 'SONJABJÖRG', 'lan' => 'po']) }}" data-img="{{ asset('images/frontend/poland.png')}}">Polish</option>
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
        <div class="reviews--img-div img6">
            <div></div>
            <h2>#HUGUÐ</h2>
            <h5><a href="#review--head-content">SONJA BJÖRG  &nbsp; <i class="fa-solid fa-angle-down"></i></a></h5>
        </div>
        <div class="review--video-content">
            <div class="review--head-content" id="review--head-content">
                <h2>ÞÚ ÁTT RÉTTINDI TIL FÍKNIS ÞÍNAR</h2>
                <p>Forseti Félag nemenda Háskóla Reykjavíkur, Sonja Björg Jóhannsdóttir, deilir reynslu sinni af því að vaxa upp með móður sem barist hefur við þunglyndi. Erfiðasta var að samþykkja að maður getur ekki þvingað neinn til að leita eftir hjálp. Hún segir að það sé mikilvægt fyrir skyldmenn að vera viðstaddir en einnig að finna mörk sín. Það skýlir ekki vandamál annarra að ræða eigin vandamál, öllum ber réttur á aðstoð og þarf samfélagið að bregðast við með aukinni aðgengi óháð efnahag.</p>
            </div>
        </div>
        <div class="review-head-video">
            <iframe src="https://player.vimeo.com/video/258961828?color=d1503b&title=0&byline=0&portrait=0" class="campaign__video" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <p>"Þegar ég er 18 ára, reynir móðir mín að taka sjálfsmorð. Það er eins og svoðið hafi fallið eða teppið hafi verið dregið fyrir augun mín. Það var stór viðbrögð, en í sama skipti vissi ég að það var eitthvað sem ég gæti ekki staðfest. Ég upplifði stórt traustbrots, mikið af reiði og beiskri í langan tíma," segir Sonja Björg Jóhannsdóttir, sem deilir reynslu sinni sem skyldumaður fyrir einstakling með þunglyndi."</p>
            <p>Sonja óx upp í Akureyri með foreldrum sínum og tveimur yngri bræðrum. Hún hefur alltaf verið mikið félagsmensch, tekið þátt í starfsemi nemendafélaga og elt áhugamál sín metnaðarfullt. Í dag hefur hún nýlega útskrifað úr sálfræði við Háskóla Reykjavíkur. Þar heldur hún formaðarstól Háskólanemendafélagsins. Meginmál samtakanna var að koma í veg fyrir ókeypis sálfræðiþjónustu nemenda, og stefna þeirra var sett í verk í upphafi ársins. "Þetta var okkar áhugi á stjórn SFHR síðan við tókum við og við erum mjög stolt af að hafa fært þetta til," segir Sonja.</p>
        </div>
        <div class="campaing-content-image">
            <p><img src="{{ asset('images/frontend/testimonials/img17.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content-II">
        <h2>Vildi góða móður</h2>
        <p>"Mamma mín var ung þegar hún fékk mig og greindist þunglyndi ung. Það var algjörlega önnur tímamót og ríkti mikill fordomur á móti að leita sálfræðilegrar þjónustu. Hún tók allt þungt og var ótrúlega dugleg, útskrifaðist í viðskiptafræði, sjúkraþjálfun og varð síðan framhaldsskólakennari," segir Sonja, sem tók á sig mikið ábyrgðarhlutverk heimilisins snemma. "Ég var mikið ein heima um að taka vörn um bræður mína og tók á mér alla hlutverk heimilisins. Ég man eftir því að ég vildi alltaf hafa góða móður og vera þar fyrir hana, svo hún leitaði mikið til mín. Ég bauð ekki vinum mínum heim ef hún varð fyrir slæmum degi, og voru dagar þegar hún var mjög stemm." en er hluti af sjúkdómnum. En mér fannst aldrei til tíma að móðir mín væri veik eða að hún gæti fengið hjálp."</p>
        <blockquote>
            <p>"En mér fannst aldrei til tíma að móðir mín væri veik eða að hún gæti fengið hjálp."</p>
        </blockquote>
        <p>Sonja hefur eina minningu frá því er hún var níu ára sem lýsir reynslu hennar í æsku. "Mamma var að gefa litla bróður minn brjóst og ég kom upp til hennar grátandi, bið ég hana að fara ekki eftir mér einni, tók ég bróður minn og hjálpaði honum að stíga upp og koma niður. Á sama tíma var ég að horfa eftir eldri bróður mínum, þá sex ára, og tryggja að hann væri í stofunni meðan horft var á banda. Á þeim tíma fann ég það ekki óvenjulegt, en í endurskoðun sé ég að það var of mikið ábyrgðarhlutverk á axlir lítils stúlkunnar."</p>
    </section>
    <section id="campaign-content-II">
        <h2>Skortur á fræðslu</h2>
        <p>"Er mikill skortur á fræðslu um geðheilsufarsvandamál. Ef ég hefði vitað um einkenni og haft greinilega auðkenni á því hvar væri hægt að leita sálfræðilegrar þjónustu, hefði það gerst mikil áhrif. Ég var 18 ára og móðir mín var flutt á geðdeild áður en ég vissi yfirleitt að hún væri þunglynd. Það tók mig algjörlega á óvart, eins undarlegt og það hljómar." </p>
        <p>Ár af mikilli þrungu fylgdu. Sonja upplifði mikla reiði og útreikning í tengslum við aðstæðurnar. Mörg ár af samskiptaháðni og samþjöppuðum tilfinningum tóku við. "Ég var mjög neikvæð um allan sálfræðilega ferlið sem móðir mín var í gegnum. Mér fannst hún sleppt of snemma og ég var reiður á sálfræðinga og lífið almennt. Í upprættri var það besta sem gæti gerst móður minni að fara á geðdeild. Það var bara leið mín til að losa óupplausnaraðar tilfinningar og vandamál. Ég fattaði að ég gæti ekki verið til staðar fyrir neinn nema mig sjálfan, og ég var að brjótast niður vegna þess."</p>
        <div class="campaing-content-image campaign-content-img groupImg">
            <p><img src="{{ asset('images/frontend/testimonials/img18.jpg')}}" alt="#"></p>
        </div>
    </section>
    
    <section id="campaign-content-II">
        <h2>Allir eiga rétt á aðstoð</h2>
        <p>Sonja segir að hún hafi þótt súð um hugann sem hafa komið upp. Hún telur að það sé þörf fyrir meiri umræðu um skyldur þeirra sem eru andlega veikir. "Það er eins og á flugvélum. Þú verður að setja loftslínu á þig sjálfum áður en þú setur hana á einhvern annan. Sem skyldumaður er mikilvægt að muna að þú getur ekki þvingað neinn til að leita eftir hjálp. Einstaklingurinn verður að vilja það sjálfur, og það getur verið erfiðasta hlutinn. Að sjá að þú hefur gert allt sem þú gætir og skilja mörk þín."</p>
        <blockquote>
            <p>"Sem skyldumaður er mikilvægt að muna að þú getur ekki þvingað neinn til að leita eftir hjálp."</p>
        </blockquote>
        <p>Þegar spurð hvaða ráð hún myndi gefa fólki í sömu aðstæðum, segir hún að mikilvægasta sé að muna að allir eigi rétt á sínum eigin tilfinningum. "Í langan tíma fann ég að þunglyndi mitt væri óviðkomandi. Það er hættulegt að bera saman þig við önnur sársauka annarra og lítilsækja eigin reynslu og halda tilfinningum fyrir inni." Hún segir að þetta gildi um líf almennt. "Við eigum ekki að bera saman okkur við hvorn annan, hvort sem það eru vinir eða fjölskyldur. Við eigum allir rétt á aðstoð þegar við finnumst slæmir, og það er í lagi fyrir okkur að finnast slæmir. Þú skyggir ekki yfir vandamál annarra með því að ræða eigin vandamál."</p>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <h2>Mikilvægt að tjá tilfinningar</h2>
            <p>Sonja flutti til Reykjavíkur til að stunda nám við Háskóla Reykjavíkur árið 2014. Hún fann að það væri tími til að vinna í sjálfri sér og leitaði sér til sálfræðings. "Mér var greind með þunglyndi, og að fá sálfræðilega meðferð var mjög hjálplegt. Það eru mörg þættir sem hafa hjálpað mér á tíðum, en þeir deila öllum sameiginlegum þáttum: að tjá tilfinningar. Ég leitaði að vinkonum og kennara mínum, ég skrifaði ljóð, fór til sálfræðings og skráði mig í námskeið í Dale Carnegie." Það var á þessu námskeiði sem Sonja deildi fyrst sögu sína opinberlega. "Ég upplifði eitthvað skiptið inni í mér. Ég reyndi ákveðna innri ró og samþykkt á stöðunni. Mér tókst að fjarlægja beisku sem ég hafði borið áfram með í svo langan tíma."</p>
        </div>
        <div class="campaing-content-image campaign-content-img">
            <p><img src="{{ asset('images/frontend/testimonials/img19.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content_III">
        <div class="campaign-div-content">
            <h2>Vill vinna með börnum</h2>
            <p>Sonja segir að hún og móðir hennar séu mjög nálæg nú og styðja hvort annað. "Ég hef djúpt áhuga á henni, og hún er uppáhalds persónan mín í lífinu. Í dag eru samfélagslegar umræður mikið opinberar, sem hefur hjálpað bæði mér og móður minni. Til dæmis hvatti ég hana til að leita til Stígamóts, mikils metins samtaks sem bætir jafnrétti og býður upp á hjálp án kostnaðar. Því miður eru sálfræðilegar þjónustur mjög dýrar, og ekki allir geta greitt þær."</p>
            <p>Þegar spurð um framtíðarplönur sínar segir Sonja að hún hafi áhuga á að vinna með börnum. "Foreldrahæfni og aðstæður móta okkur sem einstaklinga og útskýra oft hegðun okkar. Ástríðan mín í lífinu er að tryggja að öll börn hafi jafna námsmöguleika og aðgang að þeirri stuðningi sem þeim þarf. Að koma sálfræðingum í skólakerfi á öllum námsstigum er eitthvað sem þarf að gera. Ég sjálf sýni fyrir mér að vinna með börnum sem barnasálfræðingur eða í öðru viðkomandi hlutverki. Ég vil vera hluti af því að móta samfélag þar sem við ræðum opinskátt um tilfinningar okkar, reynslu og útrýmum fordómum. Við eigum allir rétt á tilfinningum okkar og þurfum að læra að takast á við vandamál okkar frekar en að berjast gegn skömmu."</p>
            <p class="italic">Viðtölumenn komu fram í viðtölum á eigin forsendum. Viðtalið byggist á reynslu þeirra og skilningi. Það er þess virði að taka eftir að reynsla er einkennisfræðileg og ekki allir upplifa sömu einkenni.</p>
            <p class="italic">Hugrún vill einnig benda á aðgengilegir auðkenni fyrir þá sem telja sig upplifa einkenni þunglyndis.</p>
        </div>
    </section>
    <section id="next_campaign">
        <div class="next_campaign_heading">
            <h2><a href="./hrefna-huld.html"><i class="fa-solid fa-arrow-left"></i></a>&nbsp;&nbsp;Fyrri grein </h2>
        </div>
        <div class="next_campaign_heading">
            <h2>Næsta grein &nbsp;<a href="./ragnar.html"><i class="fa-solid fa-arrow-right"></i></a></h2>
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
    <script src="../../js/hugrun.js"></script>
</body>
</html>