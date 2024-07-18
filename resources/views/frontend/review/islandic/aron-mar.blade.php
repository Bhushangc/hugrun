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
                        <img src="{{ asset('images/frontend/island.png')}}" alt="Enska" id="current-flag" class="flag-circle" />
                        <span id="current-lang-text">IS</span>
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
            <h2>#HUGUR</h2>
            <h5><a href="#review--head-content">ARON MÁR &nbsp; <i class="fa-solid fa-angle-down"></i></a></h5>
        </div>
        <div class="review--video-content">
            <div class="review--head-content" id="review--head-content">
                <h2>NÝ KYNSLÓÐ TILFINNINGAVERU</h2>
                <p style="color: #d1503b;">Leiklistarnemi og nýr faðir, Aron Már, sem er vel þekktur af flestum Íslendingum á samfélagsmiðlum, hefur glímt við kvíða og þunglyndi svo lengi sem hann man eftir sér. Hann deilir sögu sinni um hvernig hann lét af grímunni eftir að hann byrjaði í leiklistarskóla og mikilvægi þess að tala um tilfinningar sínar við fólkið í kringum sig.</p>
            </div>
        </div>
        <div class="review-head-video">
            <iframe src="https://player.vimeo.com/video/258956472?color=d1503b&title=0&byline=0&portrait=0" class="campaign__video" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <p>"Ég er þessi hefðbundni kvíðasjúklingur, sem ég held að við Íslendingar séum margir. Á sumrin upplifum við þriggja mánaða sæluvímu og svo fellum við í sex mánaða skammdegisþunglyndi. Þetta er íslenska rútínan, myndi ég segja."</p>
    
            <p>"Æska mín einkenndist af stöðugum flutningum, sem urðu til þess að ég setti upp grímu og því alltaf lék hlutverk hlátursefnisins. Það var auðveldara að falla inn í hópinn þannig. Að vera opinn og glaðlegur gengur langt, en til lengri tíma gerir það engum gott."</p>
            
            <p>Aron eyddi miklum tíma með afa sínum þegar hann var yngri og síðar dvaldi hann í Svíþjóð eftir að móðir hans kynntist bandarískum manni sem hún bjó með. Saman áttu þau Eva Lynn, litlu systur hans. Þegar Aron var 18 ára missti hann litlu systur sína þegar hún var keyrð niður á fjölskylduferðalagi. Dagar eftir slysið urðu þokukenndir í minni mínu. Á leiðinni á sjúkrahúsið datt honum ekki í hug að systir hans væri dáin.</p>
            <p>Aron hefur áður komið fram í viðtali þar sem hann talar um missi systur sinnar og djúp áhrif sem það hafði á hann.</p>
            
        </div>
        <div class="campaing-content-image">
            <p><img src="{{ asset('images/frontend/testimonials/img_0123.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content-II">
        <blockquote>
            <p>"Það var ekki fyrr en ég missti algjörlega stjórn á mér að fólkið í kringum mig sagði að ég þyrfti að gera eitthvað í mínum málum."</p>
        </blockquote>            
        <p>"Ég hef alltaf fundið fyrir þunglyndi, en eftir að ég missti systur mína sökk ég djúpt. Í fyrstu hafði ég ekki hugmynd um hvað var að gerast. Líkaminn setti upp eitt af helvítis varnarmúrunum. Ég var algjörlega tómur og vissi ekki hvernig ég átti að bregðast við umhverfi mínu. Mér leið svo illa að ég byrjaði að skaða sjálfan mig með lyfjum, drykkju og klámi. Það var ekki fyrr en ég missti algjörlega stjórn á mér að fólkið í kringum mig sagði að ég þyrfti að gera eitthvað í mínum málum. Ég leitaði til sálfræðings sem hjálpaði mér að skilja hvað það var sem ég var að upplifa. Ég eyddi tveimur árum með honum og nota enn í dag verkfærin sem hann kenndi mér, þau hjálpa mér mikið."</p>
        <div class="campaing-content-image campaignImg">
            <p><img src="{{ asset('images/frontend/testimonials/aron.jpg')}}" alt="#"></p>
        </div>
        <h2>Féll gríman í leiklistinni</h2>
        <p>Það var í listaháskólanum sem Aron byrjaði að opna sig. Hann lét grímuna falla sem hann hafði haldið fast í sér.</p>
        <p>"Leiklistin neyddi mig til að opna mig. Þú þarft að vera sannur við sjálfan þig ef þú ætlar að taka þátt í þessu prógrammi. Það þarf að vera 100% traust milli einstaklinga í bekknum. Á þeim tíma var ég ekki tilbúinn til þess, sem varð til þess að ég féll eitt ár. Ég áttaði mig á því að ég þurfti virkilega að breyta einhverju. Ég sneri algjörlega við blaðinu og hætti að drekka, reykja gras og horfa á klám, sem á þessum tímapunkti hafði orðið vandamál."</p>
        <blockquote>
            <p>"Í dag einkennist kvíði minn af þessari hugsun að ég sé ekki nógu góður. Að ég sé ekki að gera nóg til að ná árangri í lífinu."</p>
        </blockquote>
        <p>Aron flutti til Flúða og vann þar í veislu fyrir dreng með taugasjúkdóm og hrörnunarsjúkdóm.</p>
        <p>"Það breytti mér mikið að hugsa um einhvern annan en sjálfan mig. Ég þurfti að setja eigið ego til hliðar sem var ótrúlega auðmýkjandi. Eftir það fór ég í sex mánaða ferðalag til Suður-Ameríku með opið hjarta og huga. Ég kom aftur sem nýr maður."</p>
    </section>
    
    <section id="campaign-content">
        <div class="campaign-div-content">
            <h2>Þarft að æfa að slaka á</h2>
            <p>"Í dag einkennist kvíði minn af þessari hugsun að ég sé ekki nógu góður. Að ég sé ekki að gera nóg til að ná árangri í lífinu. Ég skapa mörg verkefni og er mjög upptekinn. Um leið og ég er ekki upptekinn við vinnu, fer ég í lægð. Ég hugsa, „Vá, ég er ekki að gera neitt með líf mitt.“ Ég hugsa alltaf að ég ætti að vera að gera eitthvað. Þegar ég er undir miklu álagi er ég alls ekki taugaveiklaður, en þegar enginn býst við neinu frá mér, finn ég fyrir þessum kvíða. Það er ótrúlega skrítið. Ég hef verið að æfa að vera heima og slaka á, sem er mjög erfitt fyrir mig."</p>
        </div>
        <div class="campaing-content-image campaign-content-img contentImgg">
            <p><img src="{{ asset('images/frontend/testimonials/img_0057.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content-II">
        <h2>Ný kynslóð tilfinningaveru</h2>
        <p>Aron segir að hreyfing og sálfræðimeðferð hafi hjálpað honum að líða betur. Hann segir einnig að hann sé heppinn með unnustu sína, Hildi, sem hefur staðið við hlið hans eins og klettur í gegnum súrt og sætt. Nýlega hafa Aron og vinir hans byrjað að tala um tilfinningar sínar, og hann segir að það sé mjög mikilvægt.</p>
        <p>"Við höfum öll einhvers konar kvíða og látum hvert annað vita þegar okkur líður ekki vel. Það er mjög gott því þá getur sá sem er ekki kvíðinn á þeirri stundu róað hinn. Það er ótrúlega þægilegt, í stað þess að fela allt inni. Þú kemst nær fólki með því að opna þig.</p>
        <blockquote>
            <p>"Ég held að það sé mikilvægt að tala við stráka um tilfinningar."</p>
        </blockquote>
        <p>Ég held að það sé mikilvægt að tala við stráka um tilfinningar. Við lifum í svo góðu samfélagi í dag að ég held að næstu kynslóðir eftir okkur verði mjög ólíkar tilfinningalega. Ég mun tala endalaust við son minn um tilfinningar. Ef honum líður illa, mun ég reyna að vinna úr því í stað þess að gera ekki neitt í því og segja honum bara að vinna hörðum höndum."</p>
        <p>Fyrir tveimur árum stofnaði Aron samtökin Allir gráta, sem miða að því að opna umræðu um kvíða og þunglyndi meðal barna og unglinga.</p>
        <div class="campaing-content-image campaign-content-img midImg">
            <p><img src="{{ asset('images/frontend/testimonials/img_0133.jpg')}}" alt="#"></p>
        </div>
        <p>"Í fyrstu voru samtökin aðallega miðuð að strákum, en nú miðum við að öllum unglingum, skiptir ekki máli hvaða kyn; stelpa, strákur, hen. Ég ákvað að nota fylgjendahóp minn á samfélagsmiðlum til að kynna þetta mál. Ég hélt fyrirlestra í skólum og deildi mikilvægi þess að vera sannur við sjálfan sig. Þegar ég var yngri vissi ég ekki á hvorn fótinn ég átti að stíga og mér var sama um tilfinningar."</p>
    </section>
    <section id="campaign-content_III">
        <div class="campaign-div-content">
            <h2>Opnum okkur meira</h2>
            <p>"Ég verð að minna sjálfan mig á að þetta er langt maraþon, jafnvel þríþraut, ekki spretthlaup. Ég er á góðum stað núna og eftir að barnið kom í heiminn líður mér miklu betur, ég hef nýtt hlutverk og ábyrgð. Nýjar tilfinningar eru að spretta upp í mér, það er eins og hjarta mitt sé að opnast meira. Það er ótrúlega fallegt að eiga barn."</p>
            <p>"Það hljómar eins og klisja, en það er satt: ef þér líður illa, fáðu hjálp." Um leið og þú talar upphátt við einhvern sem þú treystir, líður þér strax miklu betur. Hvort sem það er með sálfræðingi, góðum vini eða ættingja. Það er grunnurinn að öllu, að tala meira um tilfinningar. Íslendingar eru oft þrjóskir um hvernig þeim líður og reyna að sýna öllum hvað þeim líður ótrúlega vel, jafnvel þó að þeim líði illa innra með sér. Við þurfum að opna okkur meira sem þjóð."</p>
            <p>Viðmælendurnir komu fram í viðtölunum á eigin forsendum. Viðtalið byggir á þeirra reynslu. Það er vert að taka fram að reynsla er persónuleg og ekki allir upplifa sömu einkenni.</p>
            <p>Hugrún vill einnig benda á úrræði sem eru í boði fyrir þá sem telja sig upplifa einkenni þunglyndis eða kvíða hér og hér.</p>
        </div>
    </section>
    <section id="next_campaign">
        <div class="next_campaign_heading">
            <h2><a href="./vala-kristin.html"><i class="fa-solid fa-arrow-left"></i></a>&nbsp;&nbsp;Fyrri grein </h2>
        </div>
        <div class="next_campaign_heading">
            <h2>Næsta grein &nbsp;<a href="./tryggvi.html"><i class="fa-solid fa-arrow-right"></i></a></h2>
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