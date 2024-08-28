<link rel="stylesheet" href="{{ asset('css/article.css')}}">
@extends('frontend.layout.polish')

@section('title', 'Hugrún About')

@section('content')
      
    <section id="about">
        <div class="about--description">
            <div class="about-content">
                <h1>Nasza Historia</h1>
                <p>Hugrún, założona wiosną 2016 roku przez studentów Uniwersytetu Islandzkiego na kierunkach pielęgniarstwa, medycyny i psychologii, skupia się na edukacji w zakresie zdrowia psychicznego. Obecnie uczestniczą w niej również studenci z Uniwersytetu w Reykjaviku i Uniwersytetu w Akureyri. Nasza organizacja ma na celu edukację młodych ludzi w zakresie zdrowia psychicznego, zaburzeń i dostępnych zasobów, zwiększając świadomość społeczną.</p> <br> 
                <p>Naszym głównym corocznym zadaniem jest prowadzenie bezpłatnych wykładów o zdrowiu psychicznym w szkołach średnich w całej Islandii. Organizujemy także wieczory edukacyjne, prowadzimy kampanie pisemne z okazji Międzynarodowego Dnia Zdrowia Psychicznego oraz występujemy w centrach młodzieżowych, radach rodziców i stowarzyszeniach studenckich. W 2018 roku uruchomiliśmy kampanię internetową Huguð, aby wspierać otwartą dyskusję na temat zaburzeń psychicznych, dostępną na naszej stronie internetowej. Nasz Instagram, <a href="https://www.instagram.com/gedfraedsla/">@gedfraedsla</a>, oferuje wskazówki dotyczące zdrowia psychicznego.</p> <br> 
                <p>Studenci uniwersyteccy mogą zgłaszać się jako wolontariusze edukatorzy, spełniając określone kryteria i kończąc szkolenie umożliwiające prowadzenie wykładów. Hugrún działa na podstawie dotacji, darowizn i zbiórek funduszy, a wszystkie dochody wspierają edukację młodzieży w zakresie zdrowia psychicznego. Nasza strona internetowa, aktualizowana od jesieni 2016 roku, zawiera dostępne materiały edukacyjne na temat zdrowia psychicznego i zaburzeń, gdzie organizacja zamieszcza dobre porady dotyczące poprawy zdrowia psychicznego.</p> <br> 
            </div>
            
            <div class="about--image">
                <img src="{{ asset('images/frontend/about.png')}}" alt="#">
            </div>
        </div>
        <div class="about--us">
            <h2>Członkowie Hugrún mają wspólny cel, jakim jest edukacja młodych ludzi na temat znaczenia zdrowia psychicznego.</h2>
        </div>
        
        <div>
            <a href="javascript:void(0);" id="scrollToTop"> <div class="circle"> <i class="fa-solid fa-arrow-up"></i> </div></a>
        </div>
    </section>
    <section id="booking">
        <div class="book-image">
            <img src="{{ asset('images/frontend/lecture.png')}}" alt="#" />
        </div>
        <div class="book-content-div">
            <h2>ZAREZERWUJ WYKŁAD</h2>
            <p>Łatwo jest zarezerwować wykład o zdrowiu psychicznym i zaburzeniach psychicznych od wykładowców Hugrún. Wystarczy wysłać e-mail na adres <span>hugrunhugur@gmail.com</span> lub skontaktować się z nami poprzez <a href="https://www.facebook.com/gedfraedsla/">stronę Facebook Hugrún</a>.</p>
            <p>Hugrún prowadzi edukację dla młodych ludzi, a wykład jest przeznaczony dla uczniów pierwszego roku szkół średnich. Prowadziliśmy również szkolenia w centrach społecznościowych. Edukacja dotyczy zdrowia psychicznego, zaburzeń psychicznych i dostępnych zasobów. Jeśli są specjalne życzenia, prosimy o ich wskazanie.</p>
            <p>Wszyscy zaangażowani w działalność Hugrún są wolontariuszami, a edukacja jest bezpłatna.</p>
        </div>
        
    </section>
    <section id="support">
        <div class="book-content-div">
            <h2>Wesprzyj Hugrún</h2>
            <p>Możesz dokonać dobrowolnych wpłat na rzecz Hugrún, wpłacając darowiznę na konto nr <span>0331-26-002581</span>, ID nr <span>590716-0490</span>.</p>
            <p>Hugrún finansuje edukację młodych ludzi na temat zdrowia psychicznego i zaburzeń psychicznych w całym kraju dzięki dobrowolnym wpłatom i dotacjom. Wszyscy zaangażowani w działalność Hugrún są wolontariuszami, a członkowie nie przyjmują wynagrodzenia.</p>
            <p>Jeśli zdecydujesz się na dokonanie darowizny w inny sposób niż przelewem bankowym, prosimy o kontakt z zarządem Hugrún na adres hugrunhugur@gmail.com lub poprzez <a href="https://www.facebook.com/gedfraedsla/">stronę Facebook Hugrún</a>.</p>
        </div>
        
        <div class="book-image">
            <img src="{{ asset('images/frontend/donation.png')}}" alt="#" />
        </div>
    </section>
    <section id="bod">
        <h1>The board of directors of the organisation</h1>
        <div class="card-divs">
            <div class="card visible">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/thora.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Þóra Jóhannsdóttir</h4>
                    <p>FORMAÐUR</p>
                    <a href="mailto:thorajohanns99@gmail.com">thorajohanns99@gmail.com</a>
                </div>
            </div>
            <div class="card visible">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/ragna.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Ragna Kristín Guðbrandsdóttir</h4>
                    <p>VARAFORMAÐUR OG FULLTRÚI LÆKNANEMA</p>
                    <a href="mailto:rkg4@hi.is">rkg4@hi.is</a>
                </div>
            </div>
            <div class="card visible">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/ina.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Ína Kathinka G. Steinþórsdóttir</h4>
                    <p>MEÐSTJÓRNANDI OG GJALDKERI</p>
                    <a href="mailto:inakathinka@gmail.com">inakathinka@gmail.com</a>
                </div>
            </div>
            <div class="card visible">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/inga.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Inga Birna Sigursteinsdóttir</h4>
                    <p>FRÆÐSLUSTÝRA</p>
                    <a href="mailto:ingabirnasigursteinsd@gmail.com">ingabirnasigursteinsd@gmail.com</a>
                </div>
            </div>
            <div class="card visible">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/hanna.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Hanna Tara Pálmadóttir</h4>
                    <p>MARKAÐSSTÝRA</p>
                    <a href="mailto:htp4@hi.is">htp4@hi.is</a>
                </div>
            </div>
            <div class="card visible">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/viktoria.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Viktoría Ýr Sveinsdóttir</h4>
                    <p>RITSTÝRA</p>
                    <a href="mailto:vittysveins@hotmail.com">vittysveins@hotmail.com</a>
                </div>
            </div>
            <div class="card visible">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/fridbjorg.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Friðbjörg Lilja Rúnarsdóttir</h4>
                    <p>FULLTRÚI GRUNNNEMA Í SÁLFRÆÐI</p>
                    <a href="mailto:flr2@hi.is">flr2@hi.is</a>
                </div>
            </div>
            <div class="card visible">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/sandra.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Sandra Fawcett</h4>
                    <p>FULLTRÚI MEISTARANEMA Í KLÍNÍSKRI SÁLFRÆÐI</p>
                    <a href="mailto:ssf7@hi.is">ssf7@hi.is</a>
                </div>
            </div>
            <div class="card visible">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/rakel.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Rakel Ósk Ólafsdóttir</h4>
                    <p>FULLTRÚI HJÚKRUNARFRÆÐINEMA</p>
                    <a href="mailto:ha170032@unak.is">ha170032@unak.is</a>
                </div>
            </div>
            <div class="card visible">
                <div class="image-card">
                    <img src="{{ asset('images/frontend/bod/sara.jpeg')}}" alt="#">
                </div>
                <div class="image-card-contents">
                    <h4>Sara Rós Guðmundsdóttir</h4>
                    <p>FULLTRÚI GRUNNNEMA Í FÉLAGSRÁÐGJÖF</p>
                    <a href="mailto:srg39@hi.is">srg39@hi.is</a>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact-right-content">
            <p class="par">Skontaktuj się z nami</p>
            <h1>Masz pytania? Skontaktuj się z nami!</h1>
            <p class="par-content">Hugrún ma na celu edukację młodych ludzi w Islandii na temat zdrowia psychicznego, zaburzeń oraz dostępnych zasobów, zwiększając świadomość społeczną poprzez bezpłatne wykłady, wydarzenia i platformy internetowe.</p>

            <div class="contact-div">
                <i class="fa-solid fa-location-dot"></i>
                <p>Iceland</p>
            </div>
            <div class="contact-div">
                <i class="fa-regular fa-envelope"></i>
                <p>mailto:hugrunhugur@gmail.com</p>
            </div>
            </div>
        <div class="contact-left">
            <form action="#">
                <div class="form-row">
                    <div class="form-div">
                        <i class="fa-regular fa-user"></i>
                        <input type="text" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="form-div">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-div">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" name="phone" id="phone" placeholder="Phone">
                    </div>
                    <div class="form-div">
                        <i class="fa-solid fa-circle-info"></i>
                        <input type="text" name="subject" id="subject" placeholder="Subject">
                    </div>
                </div>
                <div class="message-div">
                    <div class="form-div">
                        <i class="fa-solid fa-pen"></i>
                        <textarea name="message" id="message" cols="70" rows="4" placeholder="How can we help you? Feel free to get in touch!"></textarea>
                    </div>
                </div>
                <div class="form-btn">
                    <input type="submit" value="Get In Touch" class="submit" id="submit">
                </div>
            </form>
        </div>
    </section>
    
    <script src="{{ asset('js/hugrun.js')}}"></script>
    <script>
        document.getElementById('scrollToTop').addEventListener('click', function() {
            setTimeout(function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }, 0);
        });
        function toggleCards() {
            const cards = document.querySelectorAll('.card');
            const button = document.getElementById('toggleButton');
            if (button.textContent === 'Show More') {
                cards.forEach(card => card.classList.add('visible'));
                button.textContent = 'Show Less';
            } else {
                cards.forEach((card, index) => {
                    if (index >= 3) card.classList.remove('visible');
                });
                button.textContent = 'Show More';
            }
        }
    </script>
@endsection