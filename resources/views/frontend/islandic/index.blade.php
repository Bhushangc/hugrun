
@extends('frontend.layout.islandic')

@section('title', 'Hugrún')


@section('content')
        <section id="home">
        <div class="home-article">
            <a href="{{ route('article.parents') }}" class="left-home-content"
            ><div>
                <div class="home-content">
                <h2>Upplýsingar Fyrir Foreldra</h2>
                </div>
            </div></a
            >
            <a href="{{ route('article.health') }}" class="right-home-content"
            ><div>
                <div class="home-content">
                <h2>Upplýsingar Um Geðheilbrigði</h2>
                </div>
            </div>
            </a>
        </div>
        <div class="home-banner-content">
            <a href="{{ route('about') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/link.svg')}}" alt="tengill merki" />
                <p>UM SAMTÖKIN</p>
                </div>
            </a>
            <a href="{{ url('/about#support') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/money.svg')}}" alt="gjöf merki" />
                <p>GJÖF</p>
                </div>
            </a>
            <a href="{{ url('/home#booking') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/bubble.svg')}}" alt="kúla merki" />
                <p>BÓKA FYRIRLESTUR</p>
                </div>
            </a>
            <a href="{{ url('/about#contact') }}">
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
        <section id="booking">
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
        </section>
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
        document.getElementById('book-now-button').addEventListener('click', function() {
            window.location.href = '{{ route('about') }}';
        });
        document.getElementById('resource-button').addEventListener('click', function() {
            window.location.href = '{{ route('resources') }}';
        });
        document.getElementById('testimonials-button').addEventListener('click', function() {
            window.location.href = '{{ route('testimonials') }}';
        });
    </script>
@endsection

