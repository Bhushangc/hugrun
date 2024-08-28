<link rel="stylesheet" href="../css/testimonials.css">
@extends('frontend.layout.english')

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
                <p>"He learned to take responsibility for himself when he was diagnosed with bipolar disorder."</p>
                <button id="ragnar-btn">Read more</button>
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
                <p>"The disorder was managed by strengthening the connection with their vulnerable side."</p>
                <button id="vala-btn">Read more</button>
            </div>
        </div>
    </section>
    <section id="aron">
        <div class="testimonials--div--image">
            <div class="testimonials-content-div">
                <h3>ARON MÁR</h3>
                <p>"Boys need to talk about their feelings. A new generation of emotionally aware individuals will make us a better society."</p>
                <button id="aron-btn">Read more</button>
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
                <p>"Sometimes you just need to shuffle the cards you've been dealt and start anew."</p>
                <button id="tryggvi-btn">Read more</button>
            </div>
        </div>
    </section>
    <section id="huld">
        <div class="testimonials--div--image">
            <div class="testimonials-content-div">
                <h3>HREFNA HULD</h3>
                <p>"Discussing life with schizophrenia, stigma, and the importance of seeking help."</p>
                <button id="huld-btn">Read more</button>
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
                <p>"It emphasizes the need for increased discussion about the caregivers of those with mental illness."</p>
                <button id="sonja-btn">Read more</button>
            </div>
        </div>
    </section>
    <section id="iduun">
        <div class="testimonials--div--image">
            <div class="testimonials-content-div">
                <h3>SONJA BJÖRG</h3>
                <p>"It emphasizes the need for increased discussion about the caregivers of those with mental illness."</p>
                <button id="iduun-btn">Read more</button>
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
            
            window.location.href = '{{ route('review', ['name' => 'ragnar', 'lan' => 'en']) }}';
        });
        document.getElementById('vala-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'vala-kristin', 'lan' => 'en']) }}';
        });
        document.getElementById('aron-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'aron-mar', 'lan' => 'en']) }}';
        });
        document.getElementById('tryggvi-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'tryggvi', 'lan' => 'en']) }}';
        });
        document.getElementById('huld-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'hrefna-huld', 'lan' => 'en']) }}';
        });
        document.getElementById('sonja-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'SONJABJÖRG', 'lan' => 'en']) }}';
        });
        document.getElementById('iduun-btn').addEventListener('click', function() {
            window.location.href = '{{ route('review', ['name' => 'IÐUNN', 'lan' => 'en']) }}';
        });
    </script>
@endsection