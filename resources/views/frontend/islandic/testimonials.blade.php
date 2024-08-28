<link rel="stylesheet" href="../css/testimonials.css">
@extends('frontend.layout.islandic')

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
                <p>"Hann lærði að taka ábyrgð á sjálfum sér þegar hann var greindur með tvíhæða geðsjúkdóm."</p>
                <button id="ragnar-btn">Lesa meira</button>
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
                <p>"Röskunin var stjórnuð með því að styrkja tengslin við viðkvæma hliðina."</p>
                <button id="vala-btn">Lesa meira</button>
            </div>
        </div>
    </section>
    
    <section id="aron">
        <div class="testimonials--div--image">
            <div class="testimonials-content-div">
                <h3>ARON MÁR</h3>
                <p>"Drengir þurfa að tala um tilfinningar sínar. Ný kynslóð með tilfinningavísu einstaklinga mun gera okkur að betri samfélagi."</p>
                <button id="aron-btn">Lesa meira</button>
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
                <p>"Stundum þarftu bara að blanda kortunum sem þú hefur fengið og byrja á nýtt."</p>
                <button id="tryggvi-btn">Lesa meira</button>
            </div>
        </div>
    </section>
    
    <section id="huld">
        <div class="testimonials--div--image">
            <div class="testimonials-content-div">
                <h3>HREFNA HULD</h3>
                <p>"Ræða lífið með geðsjúkdómi, rökræði og mikilvægi þess að leita sér hjálpar."</p>
                <button id="huld-btn">Lesa meira</button>
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
                <p>"Það leggur áherslu á þörfina fyrir aukna umræðu um umönnunaraðila þeirra sem hafa geðsjúkdóma."</p>
                <button id="sonja-btn">Lesa meira</button>
            </div>
        </div>
    </section>
    
    <section id="iduun">
        <div class="testimonials--div--image">
            <div class="testimonials-content-div">
                <h3>SONJA BJÖRG</h3>
                <p>"Það leggur áherslu á þörfina fyrir aukna umræðu um umönnunaraðila þeirra sem hafa geðsjúkdóma."</p>
                <button id="iduun-btn">Lesa meira</button>
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
            window.location.href = '{{ route('review', ['name' => 'ragnar', 'lan' => 'is']) }}';
        });
        document.getElementById('vala-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'vala-kristin', 'lan' => 'is']) }}';
        });
        document.getElementById('aron-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'aron-mar', 'lan' => 'is']) }}';
        });
        document.getElementById('tryggvi-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'tryggvi', 'lan' => 'is']) }}';
        });
        document.getElementById('huld-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'hrefna-huld', 'lan' => 'is']) }}';
        });
        document.getElementById('sonja-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'SONJABJÖRG', 'lan' => 'is']) }}';
        });
        document.getElementById('iduun-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'IÐUNN', 'lan' => 'is']) }}';
        });
    </script>
@endsection