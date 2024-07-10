<!DOCTYPE html>
<html lang="is">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hugrun</title>
    <link rel="stylesheet" href="../../css/hugrun.css" />
    
    <link rel="stylesheet" href="../../css/article.css">
    <link rel="stylesheet" href="../../css/review.css">
    <link rel="stylesheet" href="../../css/hugrunResponsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!-- seo meta tag -->
    <meta name="description" content="Hugrún veitir fræðslu um geðheilsu fyrir ungmenni og býður upp á sérhannaðar fræðslu­forrit um meðvitund um geðheilsu. Kynntu þér auðlindir okkar fyrir foreldra og upplýsingar um geðheilsu."/>
    <meta name="keywords" content="Hugrún, geðheilsa, fræðsla, meðvitund um geðheilsu, auðlindir, fyrirlestrar, foreldrar, nemendur"/>
    <meta name="author" content="Hugrún Félag"/>
    <link rel="canonical" href="https://gedfraedsla.is/" />
    <meta property="og:title" content="Hugrun - Fræðsla um Geðheilsu" />
    <meta property="og:description" content="Hugrún veitir fræðslu um geðheilsu fyrir ungmenni og býður upp á sérhannaðar fræðslu­forrit um meðvitund um geðheilsu. Kynntu þér auðlindir okkar fyrir foreldra og upplýsingar um geðheilsu." />
    <meta property="og:url" content="https://gedfraedsla.is/" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://gedfraedsla.is/images/hugrun_logo.svg" />
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="./hugrun.html"><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo hér" /></a>
            </div>
            <div class="nav-right-content">
                <div class="nav-content">
                    <ul>
                        <li><a href="{{ route('home') }}">Heim</a></li>
                        <li>
                            <a>Greinar</a>
                            <ul class="dropdown-content">
                                <li><a href="{{ route('article.parents') }}">Fyrir Foreldra</a></li>
                                <li><a href="{{ route('article.health') }}">Geðheilsa</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/#booking') }}">Bókaðu Fyrirlestur</a></li>
                        <li><a href="{{ url('/about#contact') }}">Hafðu Samband</a></li>
                    </ul>
                </div>
                <div class="language-toggle">
                    <div class="selected-language">
                        <img src="{{ asset('images/frontend/eng.png')}}" alt="Enska" id="current-flag" class="flag-circle" />
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
                        <a href="./hugrun.html"
                            ><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo hér"
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
                                    <a href="./html/articles.html">Fyrir Foreldra</a>
                                    <a href="./html/articles.html">Geðheilsa</a>
                                </div>
                            </div>
                        </li>
                        <li><a href="#booking">Bókaðu Fyrirlestur</a></li>
                        <li><a href="#">Hafðu Samband</a></li>
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
                <h2>LÉRÍÐ AÐ TAKA ÁBYRGÐ Á SJÁLFUM SÉR</h2>
                <p>Ragnar Jón Ragnarsson hefur stríðst við tvíbura geðklofa frá því hann var tuttugu ára. Langir tímar maníu og þunglyndis voru einkennir þess að hann varð fyrir villumyndum og sjálfsmorðsáætlunum. Samtal við geðlæknina og flutningur til Hríseyjar með fjölskyldu sinni fylgdi áreitinu en alvarleg þunglyndi hvatti hann til að leita sér hjálpar. Eftir umfangsmikla sjálfsumhyggju hefur Ragnar náð skilningi á geðsjúkdómi sínum og með góðri dagskrá fann hann ást og nýjan sjónarhorn á fegurð hversdagslífsins.</p>
            </div>
        </div>
        <div class="review-head-video">
            <iframe src="https://player.vimeo.com/video/258953627?color=d1503b&title=0&byline=0&portrait=0" class="campaign__video" frameborder="0"webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <p>"Ég heiti Ragnar en allir kalla mig Humi, nema mamma mín," segir Humi skríðandi við hugleiðingu um uppruna nafnsins. "Það var einhver heimskuleg hegðun sem varð við."</p>

            <p>Humi lýsir sér sem venjulegum gaur á Hlíðum þar sem hann býr með konu sína Hólmfríði Helgu og börnunum sínum, Höskuldi Sölva og Snæfríði Eddu. Áhugamál hans snúast um tónlist og trésmíðar. "Gott er að mér finnst eftirverð maníunnar að ég get verið mjög framkvæmdur þegar ég verð áhugaður í eitthvað. Ég hef þjálfað mig til að klára þær hugmyndir sem ég fæ," segir Humi og viðurkennir að hann geti ekki verið svo venjulegur, þar sem hann hefur verið slíkur lengur en hann gerir ráð fyrir.</p>
        </div>
        <div class="campaign__images">
            <div class="campaign__image--1">
                <img src="{{ asset('images/frontend/ragnarImage.jpg')}}" alt="Ragnar"/>
                <h3>Ragnar</h3>
            </div>
            <div class="campaign__image--2">
                <img src="{{ asset('images/frontend/ragnarImage.jpg')}}" alt="Ragnar"/>
                <h3> Að svona </h3>
            </div>
        </div>
    </section>
    <div class="relativ">
        <h2>Að styðja Hugrún</h2>
        <div class="prydet">
            <p id="viðbúnaður">Óskaðu eftir því að styðja Hugrún?</p>
            <p id="viðbúnaður">Kannski sækir þú út um þetta hætti að lyfta verkefninu eða færa þetta áfram? Engu að síður ef ég er búin að lyfta þessum sveifli um að það mætti aðstoða með tilraunum til að styðja það sem er hægt.</p>
            < það>eiga < þið loks> 
 Halda viðboð eða að < gefa ómamma. þér


  að öryggi  þetta eða ef
  til eitthvað fyrir þig
  að yfir
  en < ger>  Ef 
  að ykkar að

  særlega á til
  en skoðar en

  þá einn á af
  á.
</div>
</div>
</section>
    <div class="support">
        <div class="secu"> A einum hætti</div>
        < nú á við
        < eigðu >verkefnið verkefni
        < við Hugrún> til að
    < ef
      að
      búið
      eða
      til
      til að
      ef

      til
      en
      úr því

      < eða
      á
      að fyrst
    Íslensku</h3>
  </eða></p>
  <ttumum < annars
      með 
      sér
    við
    eða
    til

    til
    með 

  < til
    og
    til

    í

  < að
  að

    en
    þeir með
  við

  og
    að

    úr

    að

  eða
  til að

  < > og
    að
    til
    með
  sem
  með

  að

  og
  út 

  < <a <a
  við 

  < og

  þar
  að
    < og
  á
  á
  < < að
  < sem

    með
  sem
    < <a
  það
  sem
  en
  < og
  með
  og
  til að

  á

  <a
  en
  <a
  og
  að

  á
  til
  og
  með
  <a
  < og
  á
  að
  með
  með
  á
  að
  og
  á
  á
  að
  með
  sem
  sem
  á
  <a
  á
  á
  á
  < á
  < og
  á
  < á
  á
  < að
  með
  á
  < á
  < <a
  sem
  <a
  sem
  á
  < á
  sem
  <a
  en
  < <a
  <a
  en
  < <a
  < <a
  sem
  sem
  á
  < á
  <a
  < <a
  < <a
  á
  en
  sem
  á
  sem
  < á
  <a
  sem
  < á
  < <a
  sem
  <a
  < <a
  en
  < < <a
  <a
  < < <a
  < < <a
  <a
  en
  < < <a
  sem
  sem
  sem
  <a
  < < <a
  < < <a
  < <a
  < <a
  < <a
  < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < < <
