@extends('frontend.layout.polish')

@section('title', 'Hugrún')

@section('content')
        <section id="home">
        <div class="home-article">
            <a href="{{ route('article.parents') }}" class="left-home-content"
            ><div>
                <div class="home-content">
                <h2>Informacje dla rodziców</h2>
                </div>
            </div></a
            >
            <a href="{{ route('article.health') }}" class="right-home-content"
            ><div>
                <div class="home-content">
                <h2>Informacje o zdrowiu psychicznym</h2>
                </div>
            </div>
            </a>
        </div>
        <div class="home-banner-content">
            <a href="{{ route('about') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/link.svg')}}" alt="ikona linku" />
                <p>O ORGANIZACJI</p>
                </div>
            </a>
            <a href="{{ url('/about#support') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/money.svg')}}" alt="ikona darowizny" />
                <p>DAROWIZNA</p>
                </div>
            </a>
            <a href="{{ url('/home#booking') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/bubble.svg')}}" alt="ikona bańki" />
                <p>ZAREZERWUJ WYKŁAD</p>
                </div>
            </a>
            <a href="{{ url('/about#contact') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/life.svg')}}" alt="ikona życia" />
                <p>GDZIE IŚĆ?</p>
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
            <h2>ZAREZERWUJ WYKŁAD</h2>
            <h1>Indywidualnie Dostosowane Programy Edukacyjne Dotyczące Świadomości Zdrowia Psychicznego</h1>
            <p>
            Hugrún oferuje edukację dla młodych ludzi, a wykład jest przeznaczony dla uczniów pierwszego roku w szkołach średnich. Prowadziliśmy również szkolenia w ośrodkach młodzieżowych. Edukacja obejmuje zdrowie psychiczne, zaburzenia psychiczne i zasoby.
            </p>
            <button id="book-now-button">Zarezerwuj Teraz</button>
        </div>
        </section>
        <section id="support-info">
        <div class="emergency">
            <div class="emergency-content">
            <h1>W Nagłym Wypadku</h1>
            <p>
                Hugrún chce poinformować, że możesz zadzwonić na oddział psychiatryczny w nagłych przypadkach pod numer 543-4050 lub na numer alarmowy 112. <br />Ponadto zawsze ktoś jest dostępny do rozmowy w Czerwonym Krzyżu pod numerem 1717 oraz na anonimowym czacie na stronie 1717.is
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
            <h1>Zasoby</h1>
            <p>
                Nigdy nie jest za wcześnie ani za późno, aby szukać pomocy, ale im wcześniej to zrobisz, tym lepiej <br />
                W Islandii istnieje wiele zasobów wsparcia zdrowia psychicznego, do których jednostki mogą uzyskać dostęp bez skierowania od pracownika służby zdrowia. Ta lista opisuje główne usługi dostępne dla samoreferencji. Ważne jest, aby pamiętać, że niektóre zasoby, takie jak oddziały psychiatryczne w szpitalach, wymagają skierowania od pracownika służby zdrowia i dlatego nie są tutaj uwzględnione.
            </p>
            <button id="resource-button">Czytaj Więcej</button>
            </div>
        </div>
        </section>
        <section id="mindful">
        <div class="mindful-image-div">
            <div class="mindful-content">
            <h2>" Dbajmy o zdrowie psychiczne. Bądźmy #Odważni "</h2>
            <button id="testimonials-button">Czytaj Więcej</button>
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

