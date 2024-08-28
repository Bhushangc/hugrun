<link rel="stylesheet" href="../css/resources.css">
@extends('frontend.layout.polish')

@section('title', 'Hugrún Resources')

@section('content')
    <section id="resources">
        <h1>Zasoby</h1>
        <p> &nbsp;&nbsp; W Islandii istnieje wiele zasobów związanych z problemami zdrowia psychicznego. Poniższa lista jest niepełna i niewyczerpująca, ale skupia się na wymienieniu większości zasobów, do których osoby mogą się udać bez konieczności skierowania od profesjonalisty opieki zdrowotnej. Dlatego wiele zasobów nie jest tu wymienionych, ponieważ wymagają one skierowania, takiego jak oddziały psychiatryczne w szpitalach. Informacje o takich zasobach zazwyczaj pochodzą z opieki zdrowotnej, a więcej informacji na temat centrów opieki zdrowotnej można znaleźć poniżej.</p> <br>  
        <p>&nbsp; &nbsp; Pamiętaj, że czasami terapeuta lub zasoby terapeutyczne nie są odpowiednie dla danej osoby, ale ważne jest, aby nie rezygnować, lecz kontynuować poszukiwania gdzie indziej.</p>
        <br>
        <div class="container">
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Gdzie szukać? Podstawowe informacje</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <ol>
                        <li>Do kogoś, komu ufasz. Pierwszym krokiem jest zazwyczaj powiedzenie komuś, komu ufasz, czy to przyjacielowi, członkowi rodziny, doradcy szkolnemu, psychologowi lub innemu profesjonaliście.</li>
                        <li>Do lokalnej przychodni zdrowia. Przychodnia zdrowia jest zazwyczaj pierwszym kontaktem, gdy ludzie szukają pomocy psychologicznej. Pierwszym krokiem jest umówienie się na wizytę u lekarza, który może zlecić leczenie farmakologiczne lub skierować twoją sprawę do innych specjalistów. W wielu przychodniach zdrowia są psycholodzy, do których może skierować cię twój lekarz.</li>
                        <li>Do gabinetów prywatnych psychologów. Na stronie internetowej Islandzkiego Stowarzyszenia Psychologicznego pod adresem www.sal.is znajduje się wyszukiwarka psychologów, którą można użyć do znalezienia psychologów na podstawie lokalizacji, języka, specjalizacji i innych czynników.</li>
                        <li>Do prywatnych gabinetów psychiatrów. Wiele psychiatrów oferuje terapię lekową i rozmowę terapeutyczną w swoich prywatnych gabinetach.</li>
                        <li>Na oddział przyjęć awaryjnych w dziale zdrowia psychicznego w Landspíitali. Tam pracują psycholodzy, psychiatrzy i pielęgniarki specjalizujące się w leczeniu problemów zdrowia psychicznego. Przyjęcia awaryjne są czynne od godziny 12:00 do 19:00 w dni robocze i od godziny 13:00 do 17:00 w weekendy. Numer telefonu do oddziału przyjęć awaryjnych w dziale zdrowia psychicznego to 543-4050. W przypadku nagłych wypadków poza tymi godzinami można skontaktować się z przyjęciem awaryjnym w Landspitali Fossvogur. Poza stolicą jest jeden specjalistyczny oddział psychiatryczny w Akureyri. Oddział psychiatryczny w szpitalu Akureyri ma oddział ratunkowy oraz oddział dzienny i ambulatoryjny. Numer telefonu do szpitala to 463-0100. W nagłych przypadkach można również dzwonić pod numer alarmowy 112.</li>
                    </ol>
                </div>
            </div>
        </div>
        
        <div class="item" onclick="toggleDropdown(this)">
            <div class="drop-down--title">
                <div class="title">Przychodnia zdrowia</div>
                <div class="plus">+</div>
            </div>
            <div class="drop">
                <p>Aby uzyskać pomoc w przypadku problemów psychicznych w przychodni, należy umówić się na wizytę u lekarza. Lekarze uczą się dużo o problemach psychicznych jako część swojego specjalnego wykształcenia. Lekarz może przepisać leki psychotropowe, jeśli uzna to za konieczne, a także może skierować przypadki do psychologów w obrębie placówki. Ponadto lekarze i psycholodzy w przychodni zdrowia mogą skierować pacjentów do licznych instytucji takich jak psychiatrzy, psychologowie, oddziały szpitalne, rehabilitacja VIRK, pielęgniarki domowe, zespoły zdrowia psychicznego i wiele innych. Usługi zdrowia psychicznego w przychodni zdrowia różnią się w zależności od przychodni. W licznych przychodniach pracują psycholodzy i oferują usługi psychologiczne dla dzieci, młodzieży i w wielu przypadkach dorosłych. Niektóre przychodnie oferują kursy grupowe HAM (terapia poznawczo-behawioralna) oraz dodatkowe zasoby. Osoby nieznające dobrze języka islandzkiego lub angielskiego mają prawo do usług tłumaczeniowych.</p>
            </div>
        </div>
        
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Gminy</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Usługi Społeczne</h4>
                        <p>Rola usług społecznych polega na zapewnieniu finansowego i społecznego bezpieczeństwa mieszkańców gmin. Projekty usług społecznych obejmują ogólne doradztwo społeczne, pomoc finansową, mieszkania, opiekę dzienną w domach, sprawy osób starszych, opiekę domową, sprawy dotyczące niepełnosprawności oraz problemy dzieci i młodzieży. Informacje o usługach należy szukać osobno w każdej gminie. Usługi są otwarte dla wszystkich mieszkańców.</p>
                    </div>
                    <div class="item-content">
                        <h4>Centra Usługowe</h4>
                        <p>Miejscowi mieszkańcy gmin mogą skontaktować się z centrum usługowym, które należy do sąsiedztwa, w którym mieszkają. Centra usługowe, zwane także centrami sąsiedzkimi, zapewniają obywatelom różne rodzaje usług, takie jak porady i ogólne informacje na temat działalności gminy.</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Zasoby społeczności związane z zdrowiem psychicznym</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Geðhjálp - Stowarzyszenie na rzecz poprawy sytuacji osób z zaburzeniami psychicznymi i niepełnosprawnościami psychicznymi w społeczności</h4>
                        <p>Geðhjálp oferuje bezpłatne poradnictwo dla jednostek, opiekę nad ich interesami oraz wymianę informacji. W obiekcie Geðhjálp działają również grupy samopomocy, na przykład dla osób z lękiem, psychozą i schizofrenią, a także grupa samopomocy dla osób polskojęzycznych.</p>
                    </div>
                    <div class="item-content">
                        <h4>Hugarafl - Stowarzyszenie użytkowników usług zdrowia psychicznego</h4>
                        <p>Organizacja zdrowia psychicznego prowadzona przez osoby, które miały doświadczenia z problemami zdrowia psychicznego. Razem pracujemy na równych zasadach w kierunku prawdziwej poprawy, uzdrowienia i wzmocnienia.</p>
                    </div>
                    <div class="item-content">
                        <h4>Grófin - Ośrodek ochrony zdrowia psychicznego w Akureyri</h4>
                        <p>Grófin to wizja grupy użytkowników usług zdrowia psychicznego, członków rodzin i profesjonalistów. Ośrodek oferuje pracę grupową i edukację dla uczestników Grófin oraz ich rodzin, a także pracuje nad działaniami prewencyjnymi.</p>
                    </div>
                    <div class="item-content">
                        <h4>Bergið, centrum wsparcia i poradnictwa dla młodzieży do 25 roku życia</h4>
                        <p>Oferuje niskoprogowe usługi z naciskiem na wsparcie, edukację i poradnictwo. Środowisko dla młodych ludzi, którzy chcą uzyskać pomoc od profesjonalistów i użytkowników z różnymi doświadczeniami. Znajduje się na Suðurgata 10 w 101 Reykjavik.</p>
                    </div>
                    <div class="item-content">
                        <h4>Stowarzyszenie Pieta przeciwko samobójstwom i samookaleczeniom</h4>
                        <p>Osoby mogą umówić się na bezpłatne spotkanie z profesjonalistą. Organizacja zaprasza osoby od 18 roku życia z myślami samobójczymi lub samookaleczającymi. Krewni, którzy stracili lub mają bliską osobę w kłopotach, mogą uczestniczyć w grupach wsparcia i otrzymać poradnictwo.</p>
                    </div>
                    <div class="item-content">
                        <h4>Czerwony Krzyż - Zasoby zdrowia psychicznego</h4>
                        <p>Czerwony Krzyż prowadzi linię wsparcia 1717 oraz czat online na 1717.is. Można się z nimi skontaktować przez całą dobę, anonimowo. Można otrzymać wsparcie psychologiczne, poradnictwo, wsłuchanie się oraz informacje o dostępnych zasobach. Czerwony Krzyż prowadzi również projekt odwiedzin przyjaciół, którzy zapewniają towarzystwo i przeciwdziałają izolacji społecznej. Czerwony Krzyż prowadzi Frú Ragnheiður w rejonie stolicy (Ungfrú Ragnheiður w Akureyri). Personel Frú Ragnheiður ma do dyspozycji specjalnie wyposażony samochód, w którym osoby uzależnione mogą uzyskać czyste strzykawki i odzież.</p>
                    </div>
                    <div class="item-content">
                        <h4>Bataskóli Íslands</h4>
                        <p>Bataskóli Íslands oferuje edukację dla osób od 18 roku życia z wyzwaniami zdrowia psychicznego, ich rodzin i pracowników w dziedzinie zdrowia i opieki społecznej. Można wybierać spośród szerokiego zakresu kursów opracowanych we współpracy z profesjonalistami i osobami z doświadczeniem w wyzwaniach zdrowia psychicznego. Kurs jest bezpłatny dla studentów.</p>
                    </div>
                    <div class="item-content">
                        <h4>Hlutverkasetur - Centrum aktywności</h4>
                        <p>Centrum aktywności reprezentuje pracę grupową w celu przeciwdziałania izolacji społecznej i dysfunkcji. Projekty, edukacja i dyskusje mają na celu wprowadzenie użytkowników na ogólny rynek pracy, rozpoczęcie edukacji lub poprawę jakości życia.</p>
                    </div>
                    <div class="item-content">
                        <h4>Fjölmennt</h4>
                        <p>Fjölmennt to ciągłe centrum edukacji i wiedzy, które organizuje kursy dla osób z niepełnosprawnościami rozwojowymi, osobami z zaburzeniami ze spektrum autyzmu oraz osobami z niepełnosprawnościami psychicznymi, począwszy od 20 roku życia.</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Zaburzenia odżywiania</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p>Oto zasoby, do których ludzie mogą się zwrócić bez skierowania od profesjonalisty. Zespół zajmujący się zaburzeniami odżywiania w oddziale dzieci i młodzieży przyjmuje skierowania od profesjonalistów, takich jak pracownicy ośrodków opieki zdrowotnej. Szczegółowa lista zasobów dotyczących zaburzeń odżywiania dostępna jest tutaj.</p>
                    <div class="item-content">
                        <h4>Zespół zaburzeń odżywiania szpitala narodowego</h4>
                        <p>Zespół zaburzeń odżywiania to zespół wielodyscyplinarny działający zarówno w dziennym jak i ambulatoryjnym oddziale. Zespół składa się z psychologów, lekarzy, pielęgniarek, terapeutów rodzinnych/pracowników socjalnych, dietetyków i doradców. Zespół zaburzeń odżywiania szpitala narodowego przyjmuje skierowania od profesjonalistów zarówno z wewnątrz, jak i z zewnątrz LSH, szkół i innych profesjonalistów. Link do strony internetowej zespołu zaburzeń odżywiania szpitala narodowego: The eating disorder team</p>
                    </div>
                    <div class="item-content">
                        <h4>12 spora sjálfshjálparsamtök</h4>
                        <p>Aba – Anoreksja i bulimia - abaiceland.wordpress.com</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Ośrodki i kluby dla osób z zaburzeniami psychicznymi</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p>Celem ośrodków jest przełamywanie izolacji społecznej, zmniejszanie uprzedzeń oraz poprawa jakości życia osób z zaburzeniami psychicznymi.</p>
                    <div class="item-content">
                        <h4>Vin - Reykjavík</h4>
                        <p>Hverfisgata 47, tel. 561-2612, email: vin@redcross.is</p>
                    </div>
                    <div class="item-content">
                        <h4>Laut - Akureyri</h4>
                        <p>Brekkugata 34, tel. 462-6632, email: laut@simnet.is</p>
                    </div>
                    <div class="item-content">
                        <h4>HVER - Akranes</h4>
                        <p>Kirkjubraut 1, tel. 431-2040, email: hver@akranes.is</p>
                    </div>
                    <div class="item-content">
                        <h4>Ásheimar - Egilsstaðir</h4>
                        <p>Miðvangur 22, tel. 470-0795, email: asheimar@egilsstadir.is</p>
                    </div>
                    <div class="item-content">
                        <h4>Vesturafl - Ísafjörður</h4>
                        <p>Mánagata 6, tel. 456-4406, email: vesturafl@isafjordur.is</p>
                    </div>
                    <div class="item-content">
                        <h4>Lækur - Hafnarfjörður</h4>
                        <p>Hörðuvellir 1, tel. 585-5500 lub 664-5746</p>
                    </div>
                    <div class="item-content">
                        <h4>Dvöl - Kópavogur</h4>
                        <p>Reynihvammur 43, tel. 554-1260 lub 554-7274, email: dvol@kopavogur.is</p>
                    </div>
                    <div class="item-content">
                        <h4>Miðjan, geðræktarmiðstöð - Húsavík</h4>
                        <p>Árgata 12 dla osób powyżej 16 roku życia, Sólbrekka 28 dla dzieci w wieku 6-16 lat. Tel. 464-1201.</p>
                    </div>
                    <div class="item-content">
                        <h4>Björgin, geðræktarmiðstöð - Suðurnes</h4>
                        <p>Suðurgata 12&15, 230 Reykjanesbæ, tel. 420-3270, email: bjorgin@reykjanesbaer.is</p>
                    </div>
                    <div class="item-content">
                        <h4>Klub Strókur - Selfoss</h4>
                        <p>Skólavellir 1, tel. 482-1757 Celem Strókur jest zwiększenie połączenia między osobami z zaburzeniami psychicznymi a społeczeństwem. W Strókur wszyscy otrzymują profesjonalne wsparcie, a członkowie klubu dają sobie nawzajem pozytywne towarzystwo.</p>
                    </div>
                    <div class="item-content">
                        <h4>Klub Geysir - Reykjavik</h4>
                        <p>Skipholt 29, tel. 551-5166 Celem Geysir jest zwalczanie izolacji i niezdolności oraz pomaganie ludziom w podjęciu prób rekrutacyjnych</p>
                    </div>
                    <div class="item-content">
                        <h4>Unghugar Grófarinnar - geðverndarstöð</h4>
                        <p>Grófin Youth Group (Unghugar) to stowarzyszenie osób, które chcą spotykać się z innymi ludźmi o podobnych poglądach i tworzyć pozytywne konstruktywne relacje między sobą. Grupa jest przeznaczona głównie dla młodych ludzi w wieku od 18 do 30 lat, którzy borykają się z wyzwaniami zdrowia psychicznego, są izolowani społecznie lub nieaktywni w społeczności. Znajduje się w Akureyri. Strona internetowa Grófin</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Inne zasoby społecznościowe</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Czerwony Krzyż</h4>
                        <p>Oprócz różnych zasobów dotyczących zdrowia psychicznego, Czerwony Krzyż udziela pomocy osobom w trudnych sytuacjach. Zasoby obejmują fundusz udzielający nagłych dotacji osobom żyjącym w wielkiej biedzie, fundusz traumatyczny, karty na odzież, przyjaciół przez telefon, grupy przyjaciół, pomoc młodym ludziom w powrocie do społeczności, otwarte domy dla imigrantów i uchodźców, oraz wiele więcej. Więcej informacji o zasobach Czerwonego Krzyża można znaleźć na stronie raudikrossinn.is.</p>
                    </div>
                    <div class="item-content">
                        <h4>Hitt húsið</h4>
                        <p>Oferuje różne formy wsparcia zawodowego dla młodych ludzi, zajęcia rekreacyjne dla młodzieży z niepełnosprawnościami, grupy artystyczne, pracę grupową i inne.</p>
                    </div>
                    <div class="item-content">
                        <h4>Hringsjá</h4>
                        <p>Hringsjá to centrum edukacyjno-rehabilitacyjne dla osób chcących powrócić na rynek pracy po przerwie spowodowanej chorobą, wypadkiem lub innymi traumami.</p>
                    </div>
                    <div class="item-content">
                        <h4>Sjónarhóll, centrum konsultacyjne</h4>
                        <p>Projekt we współpracy z wieloma organizacjami. Oferuje wsparcie psychologiczne dla członków rodziny dzieci z chorobami przewlekłymi i niepełnosprawnościami.</p>
                    </div>
                    <div class="item-content">
                        <h4>Samtökin ´78</h4>
                        <p>Samtökin ´78 oferuje bezpłatne doradztwo dla osób LGBTQ+, ich rodzin oraz profesjonalistów. Doradztwo dotyczy spraw osobistych, socjalnych i psychologicznych, a także prawne doradztwo.</p>
                    </div>
                    <div class="item-content">
                        <h4>Ljósið</h4>
                        <p>Centrum rehabilitacji i wsparcia dla osób, które przeszły przez chorobę nowotworową oraz ich rodzin. Oferuje różnorodne programy, kursy i grupy wsparcia.</p>
                    </div>
                    <div class="item-content">
                        <h4>Stowarzyszenie Alzheimerowskie</h4>
                        <p>Stowarzyszenie entuzjastów oraz rodzin osób z chorobą Alzheimera i pokrewnymi chorobami. Oferuje porady, spotkania edukacyjne, grupy wsparcia i grupy robocze.</p>
                    </div>
                    <div class="item-content">
                        <h4>Foreldrahús – bezpieczna młodzież</h4>
                        <p>Foreldrahús oferuje usługi psychologiczne i doradcze dla dzieci i młodzieży w kłopotach oraz wsparcie i doradztwo dla całych rodzin. Pracują z różnymi problemami, takimi jak nadużywanie substancji przez nastolatków, przemoc szkolna, trudności społeczne i problemy behawioralne. Oferują także kursy samopomocy, poradnictwo rodzinne, grupy dla rodziców i sesje samopomocy dla nastolatków z problemami z używkami. Działają pod numerem telefonu 581-1799, czynny 24 godziny na dobę, gdzie profesjonalista odbiera rozmowy i udziela porad i wsparcia rodzicom.</p>
                    </div>
                    <div class="item-content">
                        <h4>Tilvera, organizacja zajmująca się niepłodnością</h4>
                        <p>Różnorodne formy edukacji i wsparcia, dotacje oraz spotkania w kawiarni.</p>
                    </div>
                    <div class="item-content">
                        <h4>Stowarzyszenie samotnych rodziców</h4>
                        <p>Oferuje mediacje, seminaria i doradztwo w różnych kwestiach, takich jak opieka nad dziećmi, rozwody, problemy społeczne i inne, w tym telefoniczne poradnictwo.</p>
                    </div>
                    <div class="item-content">
                        <h4>W.O.M.E.N, organizacja dla kobiet pochodzenia obcego w Islandii</h4>
                        <p>Organizacja jest otwarta dla wszystkich kobiet pochodzenia obcego mieszkających w Islandii. Oferują między innymi bezpłatne usługi doradcze, kursy wsparcia w budowaniu pozytywnego obrazu siebie oraz pracę grupową.</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Usługi zdalne</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>1717 i 1717.is</h4>
                        <p>Czerwony Krzyż prowadzi infolinię 1717 oraz czat online na stronie 1717.is. Możesz się z nimi skontaktować anonimowo przez całą dobę. Oferują wsparcie psychologiczne, poradnictwo, wsłuchiwanie się oraz informacje o dostępnych zasobach.</p>
                    </div>
                    <div class="item-content">
                        <h4>Usługi zdalne psychologów</h4>
                        <p>Liczni specjaliści oferują usługi zdalne korzystając z oprogramowania Kara Connect, specjalnie zaprojektowanego do bezpiecznego prowadzenia terapii online. Lista psychologów korzystających z Kara Connect: karaconnect.com/salfraedingar</p>
                    </div>
                    <div class="item-content">
                        <h4>Tolumsaman.is</h4>
                        <p>Usługi zdalne Kvíðameðferðarstöðin.</p>
                    </div>
                    <div class="item-content">
                        <h4>Minlidan.is</h4>
                        <p>Mín líðan oferuje psychoterapię online na objawy depresji i lęku społecznego.</p>
                    </div>
                    <div class="item-content">
                        <h4>Sal.is</h4>
                        <p>Jeśli sprawdzisz lokalizację "Internet" w wyszukiwarce psychologów na sal.is, możesz zobaczyć listę psychologów świadczących usługi przez Internet. Lista ta jest niepełna.</p>
                    </div>
                    <div class="item-content">
                        <h4>Betrisvefn.is</h4>
                        <p>Betri svefn oferuje edukację na temat snu i leczenia bezsenności, zarówno przez Internet, jak i w sesjach indywidualnych z psychologami.</p>
                    </div>
                    <div class="item-content">
                        <h4>Værð</h4>
                        <p>Usługi psychologiczne dla dzieci, młodzieży i dorosłych. Psycholodzy Værð oferują ogólne usługi psychologiczne poprzez wideokonferencje online w sposób bezpieczny. Celem usług zdalnych jest zwiększenie dostępu publiczności do terapii i poradnictwa prowadzonego przez certyfikowanych psychologów, niezależnie od miejsca zamieszkania.</p>
                    </div>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Studenci</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Doradztwo edukacyjne i zawodowe - Wszystkie islandzkie uniwersytety</h4>
                        <p>Usługi, instrukcje i wsparcie dla studentów. Zróżnicowane w zależności od uczelni.</p>
                    </div>
                    <div class="item-content">
                        <h4>Doradztwo psychologiczne studiów i doradcy zawodowi - Uniwersytet Islandzki</h4>
                        <p>Indywidualne spotkania z psychologami dla studentów UI. Rezerwacje trzeba dokonać.</p>
                    </div>
                    <div class="item-content">
                        <h4>Uniwersyteckie doradztwo psychologiczne - Uniwersytet Islandzki</h4>
                        <p>Studenci uniwersytetu i ich dzieci mają do dyspozycji usługi psychologiczne oferowane przez studentów studiów podyplomowych w psychologii klinicznej, którzy świadczą poradnictwo pod profesjonalnym nadzorem certyfikowanych psychologów.</p>
                    </div>
                    <div class="item-content">
                        <h4>SÁLRÆKT Grupowa terapia psychologiczna - Uniwersytet Islandzki</h4>
                        <p>Dla studentów uniwersyteckich, którzy chcą rozwiązać problemy psychologiczne i poprawić swoje zdrowie psychiczne. Psychologowie i dyrektor przewodników psychologicznych w terapii.</p>
                    </div>
                    <div class="item-content">
                        <h4>Usługi psychologiczne, terapia grupowa - Uniwersytet Reykjaviku</h4>
                        <p>Studenci Uniwersytetu Reykjaviku mogą ubiegać się o usługi psychologiczne w ramach uniwersytetu. Obejmuje to wywiad psychologiczny i sześciotygodniową terapię grupową na depresję i lęki dla studentów, którzy tego potrzebują.</p>
                    </div>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Żałoba i straty</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Centrum Żałoby</h4>
                        <p>Centrum żałoby oferuje edukację i poradnictwo dla osób żałujących oraz tych, którzy pracują nad ich dobrem. Oferują lekcje, grupową pracę oraz różne wydarzenia. Centrum żałoby jest wspólnym projektem czterech firm przetwarzających żałobę: Ný Dögun, krajowa organizacja Birta, Ljónshjarta i organizacja sponsorów Gleym mér ei.</p>
                    </div>
                    <div class="item-content">
                        <h4>Ný Dögun: Wsparcie w żałobie</h4>
                        <p>Prowadzi różne grupy wsparcia w ośrodkach opieki.</p>
                    </div>
                    <div class="item-content">
                        <h4>Ljónshjarta</h4>
                        <p>Organizacja wspierająca młodych ludzi (20-50 lat), którzy stracili małżonka/małżonkę oraz ich dzieci.</p>
                    </div>
                    <div class="item-content">
                        <h4>Gleym mér ei</h4>
                        <p>Organizacja istniejąca dla osób, które doświadczyły straty w ciąży lub krótko po porodzie.</p>
                    </div>
                    <div class="item-content">
                        <h4>Birta krajowa organizacja</h4>
                        <p>Krajowa organizacja rodziców i opiekunów dzieci i młodzieży, którzy zmarli niespodziewanie.</p>
                    </div>
                    <div class="item-content">
                        <h4>Pieta - organizacja przeciwdziałająca samobójstwom i samookaleczeniom</h4>
                        <p>Osoby bliskie, które straciły kogoś lub mają kogoś w kłopotach związanych z samobójstwem, ryzykiem samobójstwa lub samookaleczeniem, mogą uczestniczyć w grupach wsparcia i otrzymywać poradnictwo.</p>
                    </div>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Stowarzyszenia 12 kroków:</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p><span>AA</span> - Alkoholicy - aa.is</p>
                    <p><span>Aba</span> - Anoreksja i bulimia - abaiceland.wordpress.com</p>
                    <p><span>Al-anon</span> - Krewni alkoholików - al-anon.is</p>
                    <p><span>Coda</span> - Anonimowi koodependenci - coda.is</p>
                    <p><span>DA</span> - Anonimowi dłużnicy - daisland.wordpress.com</p>
                    <p><span>DRA</span> - Problem dwukierunkowy - draonline.org/en/</p>
                    <p><span>GA</span> - Uzależnienie od hazardu - gasamtokin.is</p>
                    <p><span>GSA</span> - Uzależnienie od jedzenia - gsa.is</p>
                    <p><span>NA</span> - Uzależnienie od narkotyków - nai.is</p>
                    <p><span>OA</span> - Uzależnienie od jedzenia lub zaburzenia odżywiania - oa.is</p>
                    <p><span>SASA</span> - Ofiary nadużyć seksualnych</p>
                    <p><span>SLAA</span> - Uzależnienie od miłości i seksu - slaa.is</p>
                    <p><span>Przyjaciele w powrocie</span> - Nietrzymanie moczu w ogóle - viniribata.is</p>
                </div>
            </div>
            
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Zasoby związane z przemocą</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Stígamót</h4>
                        <p>Ofiary przemocy seksualnej mogą skorzystać z bezpłatnych wywiadów w Stígamót.</p>
                    </div>
                    <div class="item-content">
                        <h4>Kvennaathvarfið</h4>
                        <p>Schronisko dla kobiet, Kvennaathvarfið, jest miejscem dla kobiet, które nie mogą mieszkać w domu z powodu przemocy. Oferują one możliwość pobytu w schronisku. Ofiary oraz ich krewni mogą również skorzystać z bezpłatnych wywiadów.</p>
                    </div>
                    <div class="item-content">
                        <h4>Bjarkarhlíð</h4>
                        <p>Bjarkarhlíð to centrum dla ofiar przemocy, gdzie osoby mogą otrzymać wywiad i konsultację z pracownikami socjalnymi, policją oraz prawnikami bezpłatnie i na swoich warunkach.</p>
                    </div>
                    <div class="item-content">
                        <h4>Heimilisfriður, centrum leczenia i wiedzy o nadużyciach w bliskich relacjach</h4>
                        <p>Subsydiowana psychoterapia dla sprawców nadużyć w bliskich relacjach obu płci oraz wywiady oceniające ryzyko z ofiarami nadużyć. Dla osób stosujących przemoc psychiczną i fizyczną.</p>
                    </div>
                    <div class="item-content">
                        <h4>Bjarmahlíð</h4>
                        <p>Bjarmahlíð to centrum w Akureyri dla ofiar przemocy, oferujące poradnictwo oraz informacje dla osób powyżej 16 roku życia. Bjarmahlíð kładzie nacisk na pracę z ofiarami na ich warunkach. Usługi centrum i poradnictwo są dostępne pod jednym dachem, aby ułatwić uzyskanie pomocy.</p>
                    </div>
                    <div class="item-content">
                        <h4>Aflið</h4>
                        <p>Aflið to organizacja założona w Akureyri w 2002 roku w odpowiedzi na potrzebę tego rodzaju organizacji. Skupia się na pracy z ofiarami przemocy seksualnej i/lub domowej na ich warunkach.</p>
                    </div>
                    <div class="item-content">
                        <h4>Sigurhæðir</h4>
                        <p>Sigurhaedir oferuje zintegrowane poradnictwo, wsparcie i usługi dla kobiet powyżej 18. roku życia, w miarę potrzeb. Oferują sesje terapii indywidualnej i grupowej oraz specjalistyczną terapię stresu i traumy. Policja jest również dostępna do udzielenia porad i informacji oraz świadczenia pomocy prawnej. Dostępna jest także specjalistyczna edukacja na temat praw kobiet imigrantek, z tłumaczem, jeśli jest to potrzebne. Znajduje się w Selfoss.</p>
                    </div>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Zaburzenia neurologiczno-rozwojowe</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Organizacja ADHD</h4>
                        <p>ADHD jest krajową organizacją wspierającą dzieci i dorosłych z ADHD, nadpobudliwością i pokrewnymi zaburzeniami.</p>
                    </div>
                    <div class="item-content">
                        <h4>Einhverfusamtökin - Stowarzyszenie autyzmu</h4>
                        <p>Oferuje grupy wsparcia dla nastolatków i dorosłych z autyzmem oraz ich krewnych. Grupy działają w Reykjaviku, Wyspach Westman oraz w Akureyri.</p>
                    </div>
                    <div class="item-content">
                        <h4>Specialisterne, specialisterne.is</h4>
                        <p>Oferuje bezpłatne szkolenia zawodowe oraz ocenę umiejętności zawodowych dla osób z autyzmem oraz wspiera w poszukiwaniu pracy i tworzeniu odpowiednich dla nich miejsc pracy.</p>
                    </div>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Þjóðkirkjan - Kościół Narodowy</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p>Służba rodzinna kościoła ma pracujących dla nich terapeutów rodzinnych. Księża również zapraszają ludzi na rozmowy w różnych problemach. Kościoły w kraju mają zorganizowane działania, takie jak poranne spotkania rodzicielskie i zajęcia dla dzieci. Operacje pomocowe kościoła oferują różne rodzaje wsparcia, w tym doradców społecznych, do których można się zwrócić.</p>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Zgłoszenia i uwagi dotyczące usług</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p><span> Landlæknir </span> - skargi dotyczące Landspitali</p>
                    <p><span> Ombudsman Parlamentarny </span> - skargi dotyczące zasobów rządowych</p>
                    <p><span> Ombudsman Obywatelski </span> - skargi dotyczące usług Reykjaviku</p>
                    <p><span> Geðhjálp </span> - Skargi dotyczące usług zdrowia psychicznego</p>
                </div>
            </div>
            
        </div>
    </section>

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
@endsection
