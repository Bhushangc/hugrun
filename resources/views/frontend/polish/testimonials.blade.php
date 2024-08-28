<link rel="stylesheet" href="../css/testimonials.css">
@extends('frontend.layout.polish')

@section('title', 'Hugrún Testimonials')

@section('content')
    <section id="testimonials">
        <div class="testimonials-div">
            <div class="testimonials-links">
                <h3>#HUGUÐ</h3>
                <ul>
                    <li><a href="#ragnar">RAGNAR</a></li>
                    <li><a href="#vala">VALA KRISTÍN</a></li>
                    <li><a href="#aron">ARON MÁR</a></li>
                    <li><a href="#tryggvi">TRYGGVI</a></li>
                    <li><a href="#huld">HREFNA HULD</a></li>
                    <li><a href="#sonja">SONJA BJÖRG</a></li>
                    <li><a href="#iduun">IÐUNN</a></li>
                </ul>
            </div>
        </div>
        <div>
            <a href="javascript:void(0);" id="scrollToTop"> <div class="circle"> <i class="fa-solid fa-arrow-up"></i> </div></a>
        </div>
    </section>
    
    <section id="ragnar">
        <div class="testimonials--div--image">
            <div class="testimonials-content-div">
                <h3>RAGNAR</h3>
                <p>"Nauczył się brać odpowiedzialność za siebie po zdiagnozowaniu u niego zaburzenia dwubiegunowego."</p>
                <button id="ragnar-btn">Czytaj więcej</button>
            </div>
            <div class="testimonials-image-div">
                <img src="{{ asset('images/frontend/testimonials/img_1.jpg')}}" alt="#">
            </div>
        </div>
    </section>
    
    <section id="vala">
        <div class="testimonials--div--image">
            <div class="testimonials-image-div">
                <img src="{{ asset('images/frontend/testimonials/img_2.jpg')}}" alt="#">
            </div>
            <div class="testimonials-content-div">
                <h3>VALA KRISTÍN</h3>
                <p>"Zaburzenie zostało zarządzane poprzez wzmocnienie połączenia z ich wrażliwą stroną."</p>
                <button id="vala-btn">Czytaj więcej</button>
            </div>
        </div>
    </section>
    
    <section id="aron">
        <div class="testimonials--div--image">
            <div class="testimonials-content-div">
                <h3>ARON MÁR</h3>
                <p>"Chłopcy muszą rozmawiać o swoich uczuciach. Nowe pokolenie emocjonalnie świadomych osób uczyni nas lepszym społeczeństwem."</p>
                <button id="aron-btn">Czytaj więcej</button>
            </div>
            <div class="testimonials-image-div">
                <img src="{{ asset('images/frontend/testimonials/img_3.jpg')}}" alt="">
            </div>
        </div>
    </section>
    
    <section id="tryggvi">
        <div class="testimonials--div--image">
            <div class="testimonials-image-div">
                <img src="{{ asset('images/frontend/testimonials/img_4.jpg')}}" alt="">
            </div>
            <div class="testimonials-content-div">
                <h3>TRYGGVI</h3>
                <p>"Czasami musisz po prostu przetasować karty, które dostałeś, i zacząć od nowa."</p>
                <button id="tryggvi-btn">Czytaj więcej</button>
            </div>
        </div>
    </section>
    
    <section id="huld">
        <div class="testimonials--div--image">
            <div class="testimonials-content-div">
                <h3>HREFNA HULD</h3>
                <p>"Omawianie życia z schizofrenią, stygmatem i znaczeniem szukania pomocy."</p>
                <button id="huld-btn">Czytaj więcej</button>
            </div>
            <div class="testimonials-image-div">
                <img src="{{ asset('images/frontend/testimonials/img_5.jpg')}}" alt="#">
            </div>
        </div>
    </section>
    
    <section id="sonja">
        <div class="testimonials--div--image">
            <div class="testimonials-image-div">
                <img src="{{ asset('images/frontend/testimonials/img_6.jpg')}}" alt="">
            </div>
            <div class="testimonials-content-div">
                <h3>SONJA BJÖRG</h3>
                <p>"Podkreśla potrzebę zwiększenia dyskusji na temat opiekunów osób z chorobami psychicznymi."</p>
                <button id="sonja-btn">Czytaj więcej</button>
            </div>
        </div>
    </section>
    
    <section id="iduun">
        <div class="testimonials--div--image">
            <div class="testimonials-content-div">
                <h3>SONJA BJÖRG</h3>
                <p>"Podkreśla potrzebę zwiększenia dyskusji na temat opiekunów osób z chorobami psychicznymi."</p>
                <button id="iduun-btn">Czytaj więcej</button>
            </div>
            <div class="testimonials-image-div">
                <img src="{{ asset('images/frontend/testimonials/img_7.jpg')}}" alt="">
            </div>
        </div>
    </section>
    
    <script src="../js/hugrun.js"></script>
    <script>
        document.getElementById('scrollToTop').addEventListener('click', function() {
            setTimeout(function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }, 0);
        });
        document.getElementById('ragnar-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'ragnar', 'lan' => 'po']) }}';
        });
        document.getElementById('vala-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'vala-kristin', 'lan' => 'po']) }}';
        });
        document.getElementById('aron-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'aron-mar', 'lan' => 'po']) }}';
        });
        document.getElementById('tryggvi-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'tryggvi', 'lan' => 'po']) }}';
        });
        document.getElementById('huld-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'hrefna-huld', 'lan' => 'po']) }}';
        });
        document.getElementById('sonja-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'SONJABJÖRG', 'lan' => 'po']) }}';
        });
        document.getElementById('iduun-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'IÐUNN', 'lan' => 'po']) }}';
        });
    </script>
@endsection