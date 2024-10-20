
@extends('frontend.layout.islandic')

@section('title', 'Hugrún')


@section('content')
        <section id="home">
        <div class="home-article">
            <a href="{{ route('article.parents.islandic') }}" class="left-home-content"
            ><div>
                <div class="home-content">
                <h2>Upplýsingar Fyrir Foreldra</h2>
                </div>
            </div></a
            >
            <a href="{{ route('article.health.islandic') }}" class="right-home-content"
            ><div>
                <div class="home-content">
                <h2>Upplýsingar Um Geðheilbrigði</h2>
                </div>
            </div>
            </a>
        </div>
        <div class="home-banner-content">
            <a href="{{ route('about','is') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/link.svg')}}" alt="tengill merki" />
                <p>UM SAMTÖKIN</p>
                </div>
            </a>
            <a href="{{ url('/about/is#support') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/money.svg')}}" alt="gjöf merki" />
                <p>GJÖF</p>
                </div>
            </a>
            <a href="{{ route('resources','is') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/bubble.svg')}}" alt="kúla merki" />
                <p>Heimildir</p>
                </div>
            </a>
            <a href="{{ url('/about/is#contact') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/life.svg')}}" alt="líf merki" />
                <p>HVAR Á AÐ FARA?</p>
                </div>
            </a>
        </div>
        <div>
            <a href="javascript:void(0);" id="scrollToTop"> <div class="circle"> <i class="fa-solid fa-arrow-up"></i> </div></a>
        </div>
        </section>
        {{-- <section id="booking">
        <div class="book-image">
            <img src="{{ asset('images/frontend/class.png')}}" alt="#" />
        </div>
        <div class="book-content-div">
            <h2>BÓKA FYRIRLESTUR</h2>
            <h1>Sérsniðnar Fræðsludagskrár Fyrir Geðheilbrigðisvitund</h1>
            <p>
            Hugrún veitir fræðslu fyrir ungt fólk og fyrirlesturinn er gerður fyrir
            fyrsta árs nemendur í framhaldsskólum. Við höfum einnig
            haldið þjálfun í félagsmiðstöðvum. Fræðslan fjallar um
            geðheilbrigði, geðraskanir og úrræði.
            </p>
            <button id="book-now-button">Bóka Núna</button>
        </div>
        </section> --}}
        <section id="support-info">
        <div class="emergency">
            <div class="emergency-content">
            <h1>Í Neyð</h1>
            <p>
                Hugrún vill upplýsa þig um að þú getur hringt á bráðageðdeild í síma 543-4050 eða í neyðarþjónustuna í 112. <br />Auk þess er alltaf einhver til staðar til að tala við þig hjá Rauða krossinum í síma 1717 sem og með nafnlausum netspjalli á 1717.is
            </p>
            </div>
            <div class="emergency-image">
            <img src="{{ asset('images/frontend/emergency.png')}}" alt="#" />
            </div>
        </div>
        <div class="resources">
            <div class="resources-image">
            <img src="{{ asset('images/frontend/support.png')}}" alt="#" />
            </div>
            <div class="resources-content">
            <h1>Úrræði</h1>
            <p>
                Það er aldrei of snemma eða of seint að leita aðstoðar, en því fyrr sem það er gert, því betra <br />
                Á Íslandi eru fjölmörg úrræði fyrir geðheilbrigðisstuðning sem einstaklingar geta fengið aðgang að án þess að þurfa tilvísun frá heilbrigðisstarfsmanni. Þessi listi lýsir helstu þjónustum sem eru í boði fyrir sjálfsvísanir. Mikilvægt er að hafa í huga að sum úrræði, eins og geðdeildir á sjúkrahúsum, krefjast tilvísunar frá heilbrigðisstarfsmanni og eru því ekki innifalin hér.
            </p>
            <button id="resource-button">Lestu Meira</button>
            </div>
        </div>
        </section>
        <section id="mindful">
        <div class="mindful-image-div">
            <div class="mindful-content">
            <h2>" Tökum Varðhöld Á Geðheilbrigði. Verum #Huguð "</h2>
            <button id="testimonials-button">Lestu Meira</button>
            </div>
        </div>
        </section>
        <section id="section--clicked">
            <div class="clicked-image">
                <img src="{{ asset('images/frontend/announcement.jpg')}}" alt="">
            </div>
        </section>
        <div id="announcement-modal" class="modal" style="display: block;">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Tilkynning</h2>
                <p>
                    Við viljum tilkynna að eftir dýrmæt störf hefur Hugrún geðfræðslufélag nú tekið þá erfiðu ákvörðun að slíta starfsemi sinni. Þessi ákvörðun hefur ekki verið tekin léttilega, en á undanförnum árum höfum við orðið vör við minnkandi áhuga og þátttöku, sérstaklega meðal háskólanema sem hafa gegnt lykilhlutverki í sjálfboðsstarfi í fræðslum á vegum félagsins.
                    Frá stofnun félagsins hefur Hugrún haft það að markmiði að auka vitund um geðheilsu og styðja ungt fólk í að hugsa um eigin geðheilsu. Þessi markmið hafa verið grundvöllur allrar okkar starfsemi, og við erum óendanlega þakklát þeim sem hafa lagt sitt af mörkum á undanförnum árum, bæði innan og utan félagsins.
                    Án þessa sjálfboðaliða og virkrar þátttöku háskólanema er ekki hægt að halda áfram með starfsemi félagsins. Þess vegna höfum við ákveðið að loka þessum kafla með reisn og þakklæti í hjarta.
                    Þrátt fyrir að Hugrún leggi niður starfsemi sína, viljum við minna ykkur á mikilvægi þess að halda áfram að hugsa um eigin geðheilsu og annara. Að hlúa að andlegri vellíðan er lífsnauðsynlegt, og því mikilvægt að leita sér hjálpar þegar þess þarf, tala opinskátt um tilfinningar sínar og styðja við aðra í kringum sig.
                    Við þökkum kærlega öllum þeim sem hafa stutt við bakið á okkur í gegnum árin og vonum að boðskapur okkar muni lifa áfram. Geðheilsa skiptir máli og vonandi verður haldið áfram að vinna að betri heimi þar sem allir fá þá hjálp og stuðning sem þeir þurfa.
                </p>   
            </div>
        </div>

    <script src="{{ asset('/js/hugrun.js')}}"></script>
    <script>
        document.getElementById('scrollToTop').addEventListener('click', function() {
            setTimeout(function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }, 0);
        });
        // document.getElementById('book-now-button').addEventListener('click', function() {
        //     window.location.href = '{{ route('about','is') }}';
        // });
        document.getElementById('resource-button').addEventListener('click', function() {
            window.location.href = '{{ route('resources','is') }}';
        });
        document.getElementById('testimonials-button').addEventListener('click', function() {
            window.location.href = '{{ route('testimonials','is') }}';
        });
        if (sessionStorage.getItem('announcementSeen')) {
            document.getElementById('announcement-modal').style.display = 'none';
        }
        if (!sessionStorage.getItem('announcementSeen')) {
            document.getElementById('announcement-modal').style.display = 'block';
            sessionStorage.setItem('announcementSeen',true);
        }
    </script>
@endsection

