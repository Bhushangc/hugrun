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
                        <option value="{{ route('review', ['name' => 'hrefna-huld', 'lan' => 'en']) }}" data-img="{{ asset('images/frontend/eng.png')}}">English</option>
                        <option value="{{ route('review', ['name' => 'hrefna-huld', 'lan' => 'is']) }}" data-img="{{ asset('images/frontend/island.png')}}">Icelandic</option>
                        <option value="{{ route('review', ['name' => 'hrefna-huld', 'lan' => 'po']) }}" data-img="{{ asset('images/frontend/poland.png')}}">Polish</option>
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
        <div class="reviews--img-div img5">
            <div></div>
            <h2>#MEIN</h2>
            <h5><a href="#review--head-content">HREFNA HULD &nbsp; <i class="fa-solid fa-angle-down"></i></a></h5>
        </div>
        <div class="review--video-content">
            <div class="review--head-content" id="review--head-content">
                <h2>BETRI TIMAR ERU Á ÚTIVÖRÐU</h2>
                <p>Lífið á Hrefnu Huld Jóhannesdóttur tók óvænta snúning þegar hún var greind með skríðuklaustur. Tíðni og raddir í höfði hennar leiddu til greiningar hjá fyrrum landsliðskonunni. Hún segir að mikill fordomur ríki í samfélaginu gagnvart geðsjúkdómum og fatlað fólk; það vantar fræðslu og þekkingu á fjölbreytni.</p>
            </div>
        </div>
        <div class="review-head-video">
            <iframe src="https://player.vimeo.com/video/258956979?color=d1503b&title=0&byline=0&portrait=0" class="campaign__video" frameborder="0"webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <p>"Þegar þú veikist geðveikis á þér líkamlega. Allir skilja það ekki. Þegar þú getur ekki fengið svefn en þarf að vakna til starfa, eða í mínu tilfelli til æfinga, þá tekur það á þér líkamlega," segir fyrrverandi landsliðsspilari Hrefna Huld Jóhannesdóttir, sem á seint ári 2008 byrjaði að upplifa einkenni skríðuklausturs.</p>
    
            <p>Hrefna Huld Jóhannsdóttir hefur góðan fótboltaferil á eftir sér með landsliðinu. Hún var fagmennska í Noregi og er sjötta efstur málskjót í efstu deild Íslands alla tíð. Hrefna er þekkt fyrir afslöppun og hlátur. Hún er í góðum stað í dag og tilbúin að deila reynslu sinni af skríðuklaustri.</p>
            
        </div>
        <div class="campaing-content-image">
            <p><img src="{{ asset('images/frontend/testimonials/img12.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content-II">
        <h2>SETT EIGIN SKÓ SVO FYRIR</h2>
        <p>"Ég var byrjað að geta keyrt minna, kom út verr í lokapróf og einföld hluti eins og að tæla urðu mér erfitt vegna geðsjúkdóms," segir Hrefna, sem síðar tók ákvörðun um að fara niður á fyrstu deild og hlusta á líkamann sinn. "Mér þurfti að slaka á og sjá um mig. Auðvitað var það sorglegt og pinulífi. Ég hefði viljað enda feril minn öðruvísi, en ég gerði það sem ég þurfti og eru engin ávöxtun."</p>
    
        <blockquote>
        <p>"Hvernig sjúkdómurinn birtist er mjög persónulegur og því er engin ein sérstök birta skríðuklausturs."</p>
        </blockquote>
        <p>Í tilfelli Hrefnu birtist skríðuklaustur í röddum sem hún byrjaði að heyra. "Ég fór ekki að sofa í daga og vissi að allt væri ekki í lagi. Mér fannst mjög illt og mér var verðugt. Sem betur fer, var ég mjög fljót að skilja að ég þurfti að gera eitthvað við það. Hvernig sjúkdómurinn birtist er mjög persónulegur og því er engin ein sérstök birta skríðuklausturs. Bróðir minn tók mig með á geðdeild og er ég ótrúlega þakklátur honum í dag. Hann er sérstakur strákur sem var þar fyrir mig og þætti mér að allt færi vel. Eftir það áttum við fleiri heimsóknir á geðdeild, sem leiddu til greiningar á skríðuklaustri árið 2009."</p>
        <div class="campaing-content-image midImg">
            <p><img src="{{ asset('images/frontend/testimonials/img13.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <h2>HAFÐU EKKI ORKU Á DAGINUM</h2>
            <p>Yfir árin hefur Hrefna heimsótt geðdeild marga sinna á eigin frumkvæði. Venjulega vegna radda sem hún heyri og svefnleysi sem fylgir því. "Mér fannst ekkert orka fyrir venjulegan dag og barst í að sjá um mig og komast úr rúminu. Kannski er það eitthvað sem ekki allir skilja, hvað það er eins og að ekki hafi orku til að mæta nýrri dagi."</p>
            <p>Þegar spurt er segir hún að hún finni sig stigmatized gagnvart geðsjúkdóminum sínum og að samfélagið þurfi að viðurkenna að við séum ekki allir eins. "Bara vegna þess að ég hef geðsjúkdóm þýðir það ekki að allir hinar séu undir flokki þess að vera eðlilegir." Í þessu sambandi sjái ég það, við þurfum að taka á móti fólki eins og það er. Það er stór félagslegur fyrirætlun, fólk forðast þig og er hrætt við þig. Þú ert ekki spurður um skoðanir þínar og allir telja ekki um skoðanir þínar, það telur ekki.</p>
        </div>
        <div class="campaing-content-image campaign-content-img">
            <p><img src="{{ asset('images/frontend/testimonials/img14.jpg')}}" alt="#"></p>
        </div>
    </section>
    
    <section id="campaign-content_III">
        <div class="campaign-div-content">
            <h2>Mörgum finnst sútur</h2>
            <p>"Mikilvægt er að umlykja sig með fólki sem talar ekki öðruvísi við þig þótt þú hafir geðsjúkdóm. Mikil skortur ríkir á fræðslu um þessi mál og að meira fólk komi fram og deili reynslu sinni." Ævilöng þrá til að hjálpa öðrum leiddi Hrefnu til að deila sögu sinni í Morgunblaðinu á síðasta ári. "Ég vildi opna umræðuna og vekja fólk til lífsins." Það eru óteljandi margir sem finna sig stönguð af geðsjúkdóminum sínum vegna þess fordóma sem þeir standa frammi fyrir. Það einangrar sig vegna ótta og þar liggur misskilningurinn. Að lokum er ekki að þetta loka afleiðing geðsjúkdóms, heldur ótti viðbragða annarra. Við þurfum að geta rætt þessi mál opinberlega."</p>
        </div>
        <div class="campaing-content-image campaign-content-img">
            <p><img src="{{ asset('images/frontend/testimonials/img15.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content-II">
        <h2>Fyriróði gegn fatlað fólki</h2>
        <p>Í dag býr Hrefna í Danmörku með eiginmanni sínum og yngri dóttur sinni, meðan eldri dóttirin býr í Englandi með föður sínum. Undanfarið hefur hún tekið á sig fríwillt starf í bakarí og eldurinn fyrir æfingum er kveikur aftur. "Reyndar hef ég bara farið þrjá sinnum," segir Hrefna með hlægjandi. "Í kyrrþey er ég að spá í að komast aftur á vinnumarkaðinn."</p>
        <blockquote>
            <p>"Það er ekki afleiðing geðsjúkdóms að lokka sér, heldur ótti viðbragða annarra."</p>
        </blockquote>
        <p>"Það tók langan tíma að finna rétt lyf og þau fylgja oft með slæmum aukaverkunum. Ég hef aldrei verið betri en í dag og er næstum einkennalaus. Ég fæ reglulegar heimsóknir frá geðrænri sjúkrútu og hef fundið rétt lyf fyrir mig. Ég er vel á gæðum og vel eftirfarin."</p>
        <div class="campaing-content-image campaign-content-img midImg">
            <p><img src="{{ asset('images/frontend/testimonials/img16.jpg')}}" alt="#"></p>
        </div>
        <p>Í dag er Hrefna fatlað og hefur verið það síðustu 10 ár. "Það kennir þér að vera þú sjálfur og þú lærir að þekkja þig í nýjum hætti. Þú lærir að ekki alltaf vera um allt og sér. Væsta hluturinn er kannski fordómið sem fatlað fólk andstendur og Íslendingar eru verr en Danirnir. Þeir eru meira opinir fyrir fjölbreytni en á Íslandi, þar sem viðhorf er að þú vilt ekki vinna eða ert að svikja kerfið. Eins og það sé óskaplegt að geta ekki unnið og þú gerir það ekki fyrir kosninguna."</p>
    </section>
    <section id="campaign-content-II">
        <h2>Láttu heyra frá þér</h2>
        <p>Það tók tíma fyrir Hrefnu að sætta sig við sjúkdóm sinn, en í dag gengur henni vel og hún lítur með björtum augum í framtíðina. "Ég hef verið í fullri æfingu og get ímyndað mér að fara aftur í æfingar eða vinna. Ég hef aldrei verið betri andlega og finnst gott. Ef ég þurfti að ráðleggja einhvern í sömu stöðu, get ég sagt að munu alltaf vera betri tímarnir. Fáðu hjálp og nýttu þig af öllum tiltækum auðlindum. Ef þú ert óánægð(ur) með þá aðstoð sem þú færð, leitaðu annars staðar. Láttu heyra frá þér. Ég veit að fólk er ekki alltaf hlustað á, en þú hefur réttinn þinn og krafðu þér. Ekki loka þig af. Ég byrjaði bara að njóta geðdeildarinnar, ég sá það sem afslöppun. Stundum er það bara um viðhorf."</p>
        <p>Viðtalin sýndist í viðtölunum á eigin forsendum. Viðtalið byggist á reynslu þeirra. Það er þess virði að nefna að reynslan er persónuleg og ekki öllum reynist sömu einkenni.</p>
        <p>Hugrún vill einnig benda á auðlindirnar sem eru tiltækar þeim sem telja sig upplifa einkenni skríðuklausturs hér.</p>
    </section>
    <section id="next_campaign">
        <div class="next_campaign_heading">
            <h2><a href="./tryggvi.html"><i class="fa-solid fa-arrow-left"></i></a>&nbsp;&nbsp;Fyrri grein</h2>
        </div>
        <div class="next_campaign_heading">
            <h2>Næsta grein&nbsp;<a href="./SONJABJÖRG.html"><i class="fa-solid fa-arrow-right"></i></a></h2>
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