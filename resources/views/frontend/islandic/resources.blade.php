<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hugrun Resources</title>
    <link rel="stylesheet" href="../css/hugrun.css" />
    <link rel="stylesheet" href="../css/resources.css">
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
                        <option value="{{ route('resources', 'en') }}" data-img="{{ asset('images/frontend/eng.png')}}">English</option>
                        <option value="{{ route('resources', 'is') }}" data-img="{{ asset('images/frontend/island.png')}}">Icelandic</option>
                        <option value="{{ route('resources', 'po') }}" data-img="{{ asset('images/frontend/poland.png')}}">Polish</option>
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
    <section id="resources">
        <h1>Heimildir</h1>
        <p> &nbsp;&nbsp; Á Íslandi eru margar heimildir tengdar geðheilsuvandamálum. Eftirfarandi listi er ófullnægjandi, en var hafnað að á því að færast um flestar af heimildum sem einstaklingar geta leitað sér sjálfirn án tilvísunar frá heilbrigðisstarfsfólki. Þar af leiðandi er margar heimildir ekki á listanum þar sem einstaklingar þurfa að fá tilvísun til að geta náð í þær, svo sem geðlæknir á sjúkrahúsum. Tilvísanir til slíkra heimilda koma oft frá heilbrigðisþjónustu, og frekari upplýsingar um heilbrigðisstöðvar og kliníkur er hægt að finna hér fyrir neðan.</p> <br>  
        <p>&nbsp; &nbsp;Mundu að stundum eru ekki alla vegana sálfræðingar eða sálfræði heimildir viðeigandi fyrir einstaklinga, en mikilvægt er að hætta ekki, heldur að halda áfram að leita annars staðar.</p>
        <br>
        <div class="container">
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Hvar á að leita? Grunnupplýsingar</div>
                    <div class="plus">+</div>
                </div>
                
                <div class="drop">
                    <ol>
                        <li>Til einhvers sem þú treystir. Fyrsta skrefið er yfirleitt að segja einhverjum sem þú treystir, hvort sem er vin, fjölskyldumeðlimur, skólastjóri, sálfræðingur eða annar faglegur aðili.</li>
                        <li>Til heilbrigðisstöðvarinnar í þínu næsta umhverfi. Heilbrigðisstöðin er yfirleitt fyrsti sambandsstaðurinn þegar fólk leitar sálfræðilegrar hjálp. Fyrsta skrefið er að bóka tíma hjá lækni sem getur sett þig í lyfjameðferð eða vísað máli þínu til annarra fagmanna. Á mörgum heilbrigðisstöðvum eru sálfræðingar sem lækni þinn getur vísað þér til.</li>
                        <li>Til einkapraktíkarasálfræðinga. Á vefsíðu Sálfræðingafélags Íslands á www.sal.is er leitartæki sem hægt er að nota til að finna sálfræðinga eftir staðsetningu, tungumál, sérfræði og öðrum þáttum.</li>
                        <li>Til einkapraktík lækningamála. Fjöldi lækna veitir lyfjameðferð og talsmennka meðferð á einkapraktíkum sínum.</li>
                        <li>Til átakameðtöku geðsviðs hjá Landspítala. Þar starfa sálfræðingar, geðlæknar og hjúkrunarfræðingar sem sérhæfðir eru í meðferð geðheilbrigðisvanda. Átakameðtakan er opin frá kl. 12:00 til 19:00 á virkum dögum og frá kl. 13:00 til 17:00 um helgar. Sími átakameðtöku geðsviðs er 543-4050. Í neyðartilvikum utan þessara tíma má leita til átakameðtöku á Landspítala Fossvogi. Utan höfuðborgarsvæðisins er eitt sérhæft geðdeild, í Akureyri. Geðdeildin við Akureyrarhúsi hefur neyðarútgáfu og dag- og úthverfisdeild. Sími sjúkrahússins er 463-0100. Einnig er hægt að hringja í neyðarútölu 112 í neyðartilvikum.</li>
                    </ol>
                </div>
                
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Heilbrigðisstofnun</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p>Til að fá aðstoð við sálfræðileg vandamál á heilbrigðisstofnuninni þarftu að bóka tíma hjá lækninum. Læknar öðlast mikið þekkingu á sálfræðilegum vandamálum í sérfræðimenntun sinni. Læknir getur skrifað út geðlyf ef hann telur það nauðsynlegt, og læknir getur vísað máli til sálfræðinga innan stofnunarinnar. Auk þess geta læknar og sálfræðingar á heilbrigðisstofnun veitt tilvísanir til ýmissa aðila og stofnana eins og geðlækna, sálfræðinga, sjúkrahúsdeildir, VIRK endurhæfing, heimahjúkrun, geðheilsuteymi og fleira. Geðheilisþjónusta heilbrigðisstofnunarinnar er fjölbreytt og breytist eftir hverjum stofnun er að ræða. Margar stofnanir hafa starfandi sálfræðinga og bjóða upp á sálfræðilegar þjónustur fyrir börn, unglinga og í mörgum tilvikum fullorðna. Sumar stofnanir bjóða upp á HAM hópakúrs (kognitíf atferlismeðferð) og auka heimildir. Þeir sem eiga ekki góðan skilning á íslensku eða ensku eru berjast til þýðingaþjónustu.</p>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Sveitarfélög</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Félagslegar þjónustur</h4>
                        <p>Hlutverk félagslegra þjónustna er að tryggja fjárhagslega og félagslega öryggi íbúanna í sveitarfélögum. Verkefni félagslegra þjónustna felast í almennri félagsráðgjöf, fjárhagsaðstoð, húsnæði, dagstofa í heimilum, málefni eldra fólks, félagslegt heimahjúkrun, fötlunarmál og málefni barna og ungmenna. Upplýsingar um þjónustu þurfa að leita sérstaklega í hverju sveitarfélagi. Þjónusta er opin öllum íbúum.</p>
                    </div>
                    <div class="item-content">
                        <h4>Þjónustumiðstöðvar</h4>
                        <p>Staðbundnir íbúar sveitarfélaga geta haft samband við þjónustumiðstöð sem tilheyrir hverfi þeirra sem þeir búa í. Þjónustumiðstöðvarnar, eða hverfismiðstöðvarnar, veita borgurum mismunandi gerðir þjónustu, t.d. ráðgjöf og almennar upplýsingar um starfsemi sveitarfélaganna.</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Samfélagsauðlindir tengdar geðheilsu</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Geðhjálp - Félag til að bæta aðstæður fyrir fólk með geðraskanir og geðörmögnun í samfélaginu</h4>
                        <p>Í boði Geðhjálpar eru ráðgjafarviðtöl einstaklingum ókeypis, umönnun um hagsmuni þeirra og upplýsingaflutningur. Einnig starfa fjöldi sjálfshjálparhópa í aðstöðu Geðhjálpar, til dæmis fyrir kvíða, geðsjúkdóma og skemmdir á huga og einnig sjálfshjálparhópur fyrir Pólskamenn, á Pólsku.</p>
                    </div>
                    <div class="item-content">
                        <h4>Hugarafl – Félag notenda þjónustu geðheilbrigðis</h4>
                        <p>Geðheilsufélag sem stjórnað er af fólki með reynslu af geðheilsuvandræðum. Við vinnum saman jafnir til að ná raunverulegri endurreisn, græðgi og aflögun.</p>
                    </div>
                    <div class="item-content">
                        <h4>Grófin - Miðstöð geðverndar í Akureyri</h4>
                        <p>Grófin er sjónarmið hóps notenda þjónustu geðheilbrigðis, fjölskyldumeðlima og fagfólks. Miðstöðin býður upp á hópstarf og menntun fyrir þátttakendur í Grófin og fjölskyldur þeirra og vinnur einnig að fyrirbyggjandi ráðum.</p>
                    </div>
                    <div class="item-content">
                        <h4>Bergið, stuðningur og ráðgjöf miðstöð ungmenna upp til 25 ára aldurs</h4>
                        <p>Býður upp á þjónustu með lágmarkshurdum með áherslu á stuðning, menntun og ráðgjöf. Umhverfi ungmenna sem vilja fá aðstoð frá fagfólki og notendum með mismunandi reynslu. Staðsett á Suðurgötu 10 í 101 Reykjavík.</p>
                    </div>
                    <div class="item-content">
                        <h4>Félagið Pieta gegn sjálfsmorðshugsunum og sjálfsskaða</h4>
                        <p>Einstaklingar geta bókað viðtal við fagfólk ókeypis. Félagið heitir velkomnir einstaklinga frá 18 ára aldur með sjálfsmorðshugsanir eða sjálfsskaða. Ábúendur sem hafa misst eða eru með annað sem þeir hafa í vandræðum geta tekið þátt í stuðningshópum og fengið ráðgjöf.</p>
                    </div>
                    <div class="item-content">
                        <h4>Rauði krossinn - Geðheilsuauðlindir</h4>
                        <p>Rauði krossinn rekja hjálparlínu 1717 og netpóst á 1717.is. Hægt er að hafa samband við þá 24 klukkutíma á sólarhring, án nafngreina. Hægt er að fá sálfræðilegan stuðning, ráðgjöf, hlusta og upplýsingar um tiltækar auðlindir. Rauði krossinn stjórnar aðventu vináttunnar, sem veitir félagsskap og mótar félagslega einangrun. Rauði krossinn stjórnar Fru Ragnheiður á höfuðborgarsvæðinu (Ungfrú Ragnheiður í Akureyri). Starfsfólk Frú Ragnheiður á aðgang að sérstaklega búinn bíl þar sem einstaklingar með eiturlyfjum og fatnað.</p>
                    </div>
                    <div class="item-content">
                        <h4>Bataskóli Íslands</h4>
                        <p>Bataskóli Íslands býður upp á menntun fyrir einstaklinga frá 18 ára aldri og eldri, með geðheilsuvandamál, fjölskyldur þeirra og starfsfólk í heilbrigðis- og velferðarrekstri. Þú getur valið úr margvíslegum námskeiðum sem hönnuð eru í samvinnu við fagfólk og fólk með reynslu af geðheilsuvandamálum. Námskeiðið er ókeypis fyrir nemendur.</p>
                    </div>
                    <div class="item-content">
                        <h4>Hlutverkasetur - Starfsemi miðstöð</h4>
                        <p>Starfsemi miðstöðvarinnar felur í sér hópstarf til að mótast félagsleg einangrun og ólíkindum. Verkefni, menntun og umræður með það að markmiði að koma notendum á almenna vinnumarkað, byrja námið eða bæta lífsgæði.</p>
                    </div>
                    <div class="item-content">
                        <h4>Fjölmennt</h4>
                        <p>Fjölmennt er framhaldsnáms- og þekkingarmiðstöð sem skipuleggur námskeið fyrir einstaklinga með þroskahömlun, fólk með geðsjúkdóma og fólk með geðraskanir, frá 20 ára aldri.</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Fæðingarörðugleikar</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p>Eftirfarandi eru auðlindir sem einstaklingar geta haft samband við án tilvísunar frá fagfólki. Fæðingarörðugleikatimi barna- og unglingadeildarinnar fær tilvísanir frá fagfólki, svo sem starfsfólki á heilbrigðisstöðum. Útfyllt lista yfir auðlindir tengdar fæðingarörðugleikum má finna hér.</p>
                    <div class="item-content">
                        <h4>Landsbbjórgar sjúkrahústimi fyrir fæðingarörðugleika</h4>
                        <p>Fæðingarörðugleikatimi er fjölþættur liður sem starfar bæði í dagskotun og útþenslisskilyrðum. Liðið samanstendur af sálfræðingum, læknur, hjúkrunarfræðingum, félagsfræðingum/fjölskylduráðgjöfum, næringarfræðingum og ráðgjöfum. Fæðingarörðugleikatimi Landsbbjórgar tekur tilvísanir frá fagfólki innan og utan LSH, skólum og öðrum fagfólki. Hlekkur á vefsíðu fæðingarörðugleikatímans hjá Landsbbjórgu: Fæðingarörðugleikatimi</p>
                    </div>
                    <div class="item-content">
                        <h4>12 spora sjálfshjálparsamtök</h4>
                        <p>Aba – Anorexia and bulimia - abaiceland.wordpress.com</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Miðstöðvar og klúbbar fyrir fólk með geðraskanir</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p>Miðstöðvarnar hafa það að markmiði að brjóta niður félagslega einangrun, minnka fordómum og bæta lífsgæði þeirra sem búa með geðraskanir.</p>
                    <div class="item-content">
                        <h4>Vin - Reykjavík</h4>
                        <p>Hverfisgata 47, sími 561-2612, netfang: vin@redcross.is</p>
                    </div>
                    <div class="item-content">
                        <h4>Laut - Akureyri</h4>
                        <p>Brekkugata 34, sími 462-6632, netfang: laut@simnet.is</p>
                    </div>
                    <div class="item-content">
                        <h4>HVER - Akranes</h4>
                        <p>Kirkjubraut 1, sími 431-2040, netfang: hver@akranes.is</p>
                    </div>
                    <div class="item-content">
                        <h4>Ásheimar - Egilsstaðir</h4>
                        <p>Miðvangur 22, sími 470-0795, netfang: asheimar@egilsstadir.is</p>
                    </div>
                    <div class="item-content">
                        <h4>Vesturafl - Ísafjörður</h4>
                        <p>Mánagata 6, sími 456-4406, netfang: vesturafl@isafjordur.is
                        </p>
                    </div>
                    <div class="item-content">
                        <h4>Lækur - Hafnarfjörður</h4>
                        <p>Hörðuvellir 1, sími 585-5500 eða 664-5746</p>
                    </div>
                    <div class="item-content">
                        <h4>Dvöl - Kópavogur</h4>
                        <p>Reynihvammur 43, sími 554-1260 eða 554-7274, netfang: dvol@kopavogur.is</p>
                    </div>
                    <div class="item-content">
                        <h4>Miðjan, geðræktarmiðstöð - Húsavík</h4>
                        <p>Árgata 12 fyrir 16 ára og eldri, Sólbrekku 28 fyrir 6 – 16 ára. Sími 464-1201.</p>
                    </div>
                    <div class="item-content">
                        <h4>Björgin, geðræktarmiðstöð - Suðurnes</h4>
                        <p>Suðurgata 12&15, 230 Reykjanesbæ, sími 420-3270, netfang: bjorgin@reykjanesbaer.is
                        </p>
                    </div>
                    <div class="item-content">
                        <h4>Klúbburinn Strókur - Selfoss</h4>
                        <p>Skólavellir 1, sími 482-1757 Markmið Strókurs er að auka tengsl milli fólks með geðraskanir og samfélagsins. Í Strókri fær hver maður faglegan stuðning og klúbbaðilar veita hver öðrum jákvæða félagslega samfélagsábyrgð.</p>
                    </div>
                    <div class="item-content">
                        <h4>Geysir Club - Reykjavík</h4>
                        <p>Skipholt 29, sími 551-5166 Verkefni Geysirs er að berjast gegn einangrun og getulausu og einnig að hjálpa fólki að fá tilraun um starfsemi</p>
                    </div>
                    <div class="item-content">
                        <h4>Unghugar Grófarinnar - geðverndarstöð</h4>
                        <p>Ungmenni Grófins (Unghugar) eru félag fólks sem vill kynnast öðrum líknarhópum og mynda jákvæð samskipti við hvorn annan. Hópurinn er sérstaklega fyrir ungmenni á aldrinum 18-30 ára. Stuðningshópurinn er fráleitt ungmenni sem eru að takast á við geðheilsuvandamál, eru félagslega einangruð eða óvirk í samfélaginu. Staðsett í Akureyri. Vefsíða Grófins</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Aðrir samfélagslegir auðlindir</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Rauði krossinn</h4>
                        <p>Auðlindir Rauða krossins sýna m.a. aðstoð til einstaklinga í öllum þeim erfiðleikum sem þeir standa frammi fyrir. Auðlindirnar innifela sjóð sem veitir neyðarsjóðsgjöld þeim sem búa í mikilli fátækt, þjónustusjóð, klæðnaðar-kort, síma-vini, vina-hópa, aðstoð til ungmenna til að koma aftur inn í samfélagið, opnar hússetningar fyrir innflytjendur og flóttamenn og fleira. Lesið meira um auðlindir Rauða krossins á raudikrossinn.is.</p>
                    </div>
                    <div class="item-content">
                        <h4>Hitt húsið</h4>
                        <p>Býður upp á mismunandi aðstoð tengda starfsemi fyrir ungmenni, frítíms- og lista-samstarf fyrir ungmenni með öruggun. Listahópa, hópa-vinnu og fleira.</p>
                    </div>
                    <div class="item-content">
                        <h4>Hringsjá</h4>
                        <p>Hringsjá er náms- og vinnuendurhæfing fyrir þá sem vilja koma aftur á vinnumarkað eftir heilsufarshlé, slys eða önnur áfall.</p>
                    </div>
                    <div class="item-content">
                        <h4>Sjónarhóll, ráðgjafarstöð</h4>
                        <p>Verkefni í samstarfi við fleiri stofnanir. Veitir ráðgjöf til fjölskyldna barna með langvinna sjúkdóma og öruggun.</p>
                    </div>
                    <div class="item-content">
                        <h4>Samtökin ´78</h4>
                        <p>Samtökin ´78 veita ókeypis ráðgjöf til homma, fjölskyldna þeirra og fagfólks. Ráðgjöf um persónulega málefni, félagsleg og sálfræðileg ráðgjöf og einnig lögfræðiráðgjöf.</p>
                    </div>
                    <div class="item-content">
                        <h4>Ljósið</h4>
                        <p>Endurhæfingar- og stuðningsmiðstöð fyrir þá sem hafa gengið gegnum krabbamein og fjölskyldur þeirra. Fjölbreytt þætti, mismunandi námskeið og hópa.</p>
                    </div>
                    <div class="item-content">
                        <h4>Alzheimer samtök</h4>
                        <p>Samtök áhugafólks og fjölskyldna einstaklinga með Alzheimer's sjúkdóm og tengdar sjúkdóma. Þau bjóða m.a. ráðgjöf, fræðslufundi, stuðningshópa og vinnuhópa.</p>
                    </div>
                    <div class="item-content">
                        <h4>Foreldrahús – droglaus unglinga</h4>
                        <p>Foreldrahús býður upp á sálfræðilega þjónustu og ráðgjöf fyrir börn og unglinga í erfiðleikum og einnig ráðgjöf og stuðning fyrir alla fjölskylduna. Þau vinna með mismunandi vandamálum, svo sem neysluáhætta unglinga, ofbeldi, félagslegum erfiðleikum og hegðunarvandamálum. Þar eru einnig sjálfsstuðningsnámskeið, fjölskylduráðgjöf, foreldrafélagssamkomur, foreldra sjálfsbjargarfundi og unglingahópar fyrir unglinga með neysluáhættu. Þau starfa með símanúmerið 581-1799, opið 24 klukkutíma á sólahring, þar sem fagfólk tekur símtöl og veitir ráðgjöf og stuðning foreldrum.</p>
                    </div>
                    <div class="item-content">
                        <h4>Tilvera, félag um ófrjósemi</h4>
                        <p>Mismunandi tegundir menntunar og stuðnings, styrkir og kaffisnakk.</p>
                    </div>
                    <div class="item-content">
                        <h4>Samband einstæðra foreldra</h4>
                        <p>Veitir miðlun, ráðstefnur og ráðgjöf um ýmsa mál eins og forsjá, skilnaði, félagsleg vandamál og fleira, þ.m.t. símaráðgjöf.</p>
                    </div>
                    <div class="item-content">
                        <h4>W.O.M.E.N, félag kvenna af erlendri uppruna á Íslandi</h4>
                        <p>Félagið er opið öllum konum af erlendri uppruna sem búa á Íslandi. Þau bjóða m.a. ókeypis viðtalsþjónustu, sjálfsmyndarstuðningsnámskeið og hópstarf.</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Fjarþjónusta</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>1717 og 1717.is</h4>
                        <p>Rauði krossinn stjórnar hjálparlínu 1717 og vefspjalli á 1717.is. Hægt er að hafa samband við þá 24 klukkustundir á sólarhring, án nafns. Þú getur fengið sálfræðilegan stuðning, ráðgjöf, hlustun og upplýsingar um tiltæk efni.</p>
                    </div>
                    <div class="item-content">
                        <h4>Fjarlæg sálfræðiþjónusta</h4>
                        <p>Fjölmargir sérfræðingar bjóða upp á fjarlæga þjónustu með notkun Kara connect hugbúnaðarins, sem er sérstaklega hönnuður til að veita örugga netmeðferð. Listi yfir sálfræðinga sem nota Kara connect: karaconnect.com/salfraedingar</p>
                    </div>
                    <div class="item-content">
                        <h4>Tolumsaman.is</h4>
                        <p>Fjarþjónusta Kvíðameðferðarstöðvarinnar.</p>
                    </div>
                    <div class="item-content">
                        <h4>Minlidan.is</h4>
                        <p>Mín líðan býður upp á netmeðferð fyrir einkenni þunglyndis og félagslega kvíða.</p>
                    </div>
                    <div class="item-content">
                        <h4>Sal.is</h4>
                        <p>Ef þú leitar að staðsetningu "Internet" í leitarmótori sálfræðinga á sal.is geturðu séð lista yfir sálfræðinga sem veita þjónustu yfir netið. Þessi listi er ófullkomin.</p>
                    </div>
                    <div class="item-content">
                        <h4>Betrisvefn.is</h4>
                        <p>Betri svefn býður upp á fræðslu um svefn og meðferð við svefnleysi, bæði gegnum netið og í einstaklingsviðtölum við sálfræðinga.</p>
                    </div>
                    <div class="item-content">
                        <h4>Værð</h4>
                        <p>Sálfræðileg þjónusta fyrir börn, unglinga og fullorðna. Sálfræðingar Værðar bjóða almennar sálfræðilegar þjónustur gegnum netvídeófundir á öruggan hátt. Markmið fjarþjónustunnar er að auka aðgengi almannings að sálfræðilegri meðferð og ráðgjöf frá vottuðum sálfræðingum, óháð því hvar þú býr.</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Nemendur</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Menntunar- og starfsráðgjöf - Allar íslenskar háskólar</h4>
                        <p>Þjónusta, leiðbeiningar og stuðningur fyrir nemendur. Mismunandi eftir skóla.</p>
                    </div>
                    <div class="item-content">
                        <h4>Sálfræðiráðgjöf rannsóknar- og starfsráðgjafar - Háskóli Íslands</h4>
                        <p>Einstakar viðtöl við sálfræðinga fyrir nemendur við HÍ. Þarf að bóka tíma fyrirfram.</p>
                    </div>
                    <div class="item-content">
                        <h4>Sálfræðiráðgjöf háskóla - Háskóli Íslands</h4>
                        <p>Nemendum háskólans og barna þeirra er boðið upp á sálfræðilega þjónustu frá námsmönnum í klínískri sálfræði sem veita ráðgjöf undir leiðsögn vottaðra sálfræðinga.</p>
                    </div>
                    <div class="item-content">
                        <h4>SÁLRÆKT Sálfræðiheildarbehandling - Háskóli Íslands</h4>
                        <p>Fyrir háskólanema sem vilja leysa sálfræðilegar vandamál og bæta geðheilsu sína. Sálfræðingar og stjórnandi sálfræði leiðbeiningar í meðferðinni.</p>
                    </div>
                    <div class="item-content">
                        <h4>Sálfræðiþjónusta, Hópmeðferð - Háskóli Reykjavíkur</h4>
                        <p>Nemendur Háskólans í Reykjavík geta sótt um sálfræðiþjónustu innan Háskólans. Þetta felur í sér sálfræðilegt viðtal og sex vikna hópmeðferð fyrir þunglyndi og kvíða fyrir þá nemendur sem óska þess.</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Sorg og tap</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Sorgarmiðstöð</h4>
                        <p>Sorgarmiðstöðin veitir fræðslu og ráðgjöf til sorgarberrara og þeirra sem vinna í velferð þeirra. Kennslustundir, hópmeðferð og ýmsir viðburðir. Sorgarmiðstöðin er sameiginlegt verkefni fjögurra sorgarvinnufyrirtækja: Ný Dögun, Birta þjóðfélagið, Ljónshjarta og Gleym mér ei styrktarfélagið.</p>
                    </div>
                    <div class="item-content">
                        <h4>Ný Dögun: Stuðningur við sorg</h4>
                        <p>Rekur ýmsar stuðningshópar innan umönnunarstöðva.</p>
                    </div>
                    <div class="item-content">
                        <h4>Ljónshjarta</h4>
                        <p>Félag til stuðnings við ungmenni (20-50 ára) sem hafa misst maka og börn þeirra.</p>
                    </div>
                    <div class="item-content">
                        <h4>Gleym mér ei</h4>
                        <p>Félag sem starfar fyrir þá sem líða sorg vegna missi á meðgöngu eða strax eftir fæðingu.</p>
                    </div>
                    <div class="item-content">
                        <h4>Birta þjóðfélagið</h4>
                        <p>Þjóðfélag foreldra og forráðamanna barna og ungmenna sem látist óvænt.</p>
                    </div>
                    <div class="item-content">
                        <h4>Pieta - félag gegn sjálfsvígum og sjálfsskaða</h4>
                        <p>Ábyrgir sem hafa misst eða á aðila í vandræðum vegna sjálfsvígs, hættu á sjálfsvígum eða sjálfsskaða geta tekið þátt í stuðningshópum og fengið ráðgjöf.</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">12 stiga samtök:</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p> <span>AA </span> - Alkóhólistar - aa.is</p>
                    <p><span>Aba</span> - Anorexia og bulimia - abaiceland.wordpress.com</p>
                    <p><span>Al-anon</span> - Fjölskyldur alkóhólista - al-anon.is</p>
                    <p><span>Coda</span> - Nafnlaus samkvæmisháð - coda.is</p>
                    <p><span>DA</span> - Nafnlaus skuldara - daisland.wordpress.com</p>
                    <p><span>DRA</span> - Tvíhliða vandamál - draonline.org/en/</p>
                    <p><span>GA</span> - Spilaháð - gasamtokin.is</p>
                    <p><span>GSA</span> - Fæðuháð - gsa.is</p>
                    <p><span>NA</span> - Fíkniefnaháð - nai.is</p>
                    <p><span>OA</span> - Fæðuháð eða átröskun - oa.is</p>
                    <p><span>SASA</span> - Fórnarlömb kynferðisofbeldis</p>
                    <p><span>SLAA</span> - Ást og kynferðislegt háð - slaa.is</p>
                    <p><span>Vinir í endurreisn</span> - Útskýring allsherjar - viniribata.is</p>
                </div>
            </div>
            

            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Vistir tengdar ofbeldi</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Stígamót</h4>
                        <p>Fórnarlömb kynferðisofbeldis geta komið á Stígamót til ókeypis viðtala.</p>
                    </div>
                    <div class="item-content">
                        <h4>Kvennaathvarfið</h4>
                        <p>Kvennaathvarfið er skjól fyrir konur sem geta ekki búið heima vegna ofbeldis. Þær eru boðnar að dvelja í athvarfinu. Fórnarlömb og ættingjar geta einnig fengið ókeypis viðtöl.</p>
                    </div>
                    <div class="item-content">
                        <h4>Bjarkarhlíð</h4>
                        <p>Bjarkarhlíð er miðstöð fyrir fórnarlömb ofbeldis. Þar er einstaklingum veitt tækifæri á ókeypis viðtal og ráðgjöf með félagsráðgjöfum, lögreglu og lögfræðingum á þeirra forsendum.</p>
                    </div>
                    <div class="item-content">
                        <h4>Heimilisfriður, meðferðar- og þekkingarmiðstöð um misnotkun í nánum samböndum</h4>
                        <p>Hjálpartækjum í geðsjúklingum fyrir ofbeldisnotendur í nánum samböndum bæði kynja og hættumatsviðtali við fórnarlömb. Fyrir þá sem nota geð- og líkamleg ofbeldi.</p>
                    </div>
                    <div class="item-content">
                        <h4>Bjarmahlíð</h4>
                        <p>Bjarmahlíð er miðstöð í Akureyri fyrir fórnarlömb ofbeldis og býður upp á ráðgjöf og upplýsingar fyrir einstaklinga yfir 16 ára. Bjarmahlíð leggur áherslu á að vinna með fórnarlömb á þeirra forsendum. Þjónusta og ráðgjöf miðstöðvarinnar er allt undir einu þaki til að einfalda leit að hjálp.</p>
                    </div>
                    <div class="item-content">
                        <h4>Aflið</h4>
                        <p>Aflið er félag stofnað í Akureyri árið 2002 sem svar við þörf fyrir slíkt félag. Þau leggja áherslu á að vinna með fórnarlömb kynferðis- og/eða heimilisofbeldis á þeirra forsendum.</p>
                    </div>
                    <div class="item-content">
                        <h4>Sigurhæðir</h4>
                        <p>Sigurhæðir býður upp á samhæfða ráðgjöf, stuðning og þjónustu við konur, 18 ára og eldri, eftir þörfum. Við bjóðum einstaklingum og hópurmeðferð og sérsniðna streitu- og taumheilbrigði. Lögreglan er einnig í boði fyrir ráðgjöf og upplýsingar og veitir lögfræðilega ráðgjöf líka. Sérfræðingafræðsla um réttindi innflytjenda kvenna er einnig í boði, með túlk ef nauðsynlegt. Staðsett í Selfoss.</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Taugaveiklunar- og þroskahömlunaröflun</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Miðstöð ADHD</h4>
                        <p>Miðstöð ADHD er þjóðháð samtök til að styðja börn og fullorðna með ADHD, ofvirkni og tengdar greiningar.</p>
                    </div>
                    <div class="item-content">
                        <h4>Einhverfusamtökin - Samtök um autismi</h4>
                        <p>Bjóða stuðningshópa fyrir unglinga og fullorðna með autismi og fjölskyldumeðlimi. Hópar starfa í Reykjavík, Vestmannaeyjum og í Akureyri.</p>
                    </div>
                    <div class="item-content">
                        <h4>Specialisterne, specialisterne.is</h4>
                        <p>Bjóða ókeypis starfskólun og mat á starfsfærni fyrir einstaklinga á austismalífi og aðstoð við starfaleit og búa til starfsmöguleika sem henta þeim.</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Þjóðkirkjan</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p>Fjölskylduthjónusta kirkjunnar hefur fjölskylduráðgjafa starfandi hjá sér. Prestar taka einnig á móti fólki til viðtala vegna mismunandi vandamála. Kirkjurnar um landið hafa skipulagðar aðgerðir, svo sem foreldrastundir og viðburði fyrir börn. Þjónusta hjá kirkjunnar býður upp á ýmsan stuðning, þar á meðal félagsráðgjafa sem hægt er að leita til.</p>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Kæruleiðréttingar og athugasemdir varðandi þjónustu</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p> <span> Landlæknir </span> - Kæruleiðréttingar varðandi Landspítalann</p>
                    <p> <span> Alþingisumboðsmaður </span> - Kæruleiðréttingar varðandi ríkisauðkenni</p>
                    <p> <span> Borgarumboðsmaður </span> - Kæruleiðréttingar varðandi þjónustu Reykjavíkurborgar</p>
                    <p> <span> Geðhjálp </span> - Kæruleiðréttingar varðandi þjónustu geðheilbrigðis</p>
                </div>
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
        
function toggleDropdown(item) {
    const dropdown = item.querySelector('.drop');
    const isVisible = dropdown.classList.toggle('show');
    const items = document.querySelectorAll('.item');
    items.forEach(function (it) {
        if (it !== item) {
            const dd = it.querySelector('.drop');
            dd.classList.remove('show');
        }
    });
    const plus = item.querySelector('.plus');
    plus.textContent = isVisible ? '-' : '+';
}

window.addEventListener('click', function (event) {
    if (!event.target.closest('.item')) {
        const dropdowns = document.querySelectorAll('.drop');
        dropdowns.forEach(function (dropdown) {
            dropdown.classList.remove('show');
        });
        const plusSigns = document.querySelectorAll('.plus');
        plusSigns.forEach(function (plus) {
            plus.textContent = '+';
        });
    }
});
    </script>
</body>
</html>
