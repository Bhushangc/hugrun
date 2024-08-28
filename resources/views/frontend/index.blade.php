@extends('frontend.layout.english')

@section('title', 'Hugrún')


@section('content')
        <section id="home">
        <div class="home-article">
            <a href="{{ route('article.parents') }}" class="left-home-content"
            ><div>
                <div class="home-content">
                <h2>Information For Parents</h2>
                </div>
            </div></a
            >
            <a href="{{ route('article.health') }}" class="right-home-content"
            ><div>
                <div class="home-content">
                <h2>Mental Health Information</h2>
                </div>
            </div>
            </a>
        </div>
        <div class="home-banner-content">
            <a href="{{ route('about') }}">
                <div class="banner-content">
                        <img src="{{ asset('images/frontend/link.svg')}}" alt="link logo" />
                        <p>ABOUT ORGANIZATION</p>
                </div>
             </a>
             <a href="{{ url('/about#support') }}">
                <div class="banner-content">
                    <img src="{{ asset('images/frontend/money.svg')}}" alt="donation logo" />
                    <p>DONATION</p>
                </div>
             </a>
             <a href="{{ url('/home#booking') }}">
                <div class="banner-content">
                    <img src="{{ asset('images/frontend/bubble.svg')}}" alt="bubble logo" />
                    <p>BOOK A LECTURE</p>
                </div>
             </a>
             <a href="{{ url('/about#contact') }}">
                <div class="banner-content">
                <img src="{{ asset('images/frontend/life.svg')}}" alt="life logo" />
                <p>WHERE TO GO?</p>
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
            <h2>BOOK A LECTURE</h2>
            <h1>Tailored Educational Programs for Mental Health Awareness</h1>
            <p>
            Hugrún provides education for young people and the lecture is made for
            first year students in upper secondary schools. We have also
            undertaken training in community centres. The education addresses
            mental health, mental disorders and resources.
            </p>
            <button id="book-now-button">Book Now</button>
        </div>
        </section>
        <section id="support-info">
        <div class="emergency">
            <div class="emergency-content">
            <h1>In an Emergency</h1>
            <p>
                Hugrún wants to inform you that you can call the emergency mental
                ward on 543-4050 or the emergency service on 112. <br />In addition,
                there is always someone available for you to speak with at the Red
                Cross on the tel. no. 1717 as well as by way of an anonymous online
                chat at 1717.is
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
            <h1>Resources</h1>
            <p>
                It is never too early or too late to seek help, but the sooner it is
                done, the better <br />
                In Iceland, there are numerous resources for mental health support
                that individuals can access without needing a referral from a
                healthcare professional. This list highlights key services available
                for self-referral. It is important to note that some resources, such
                as psychiatric wards within hospitals, require a referral from a
                healthcare provider and are therefore not included here.
            </p>
            <button id="resource-button">Read More</button>
            </div>
        </div>
        </section>
        <section id="mindful">
        <div class="mindful-image-div">
            <div class="mindful-content">
            <h2>" Let's Take Care of Mental Health. Let's Be #Huguð "</h2>
            <button id="testimonials-button">Read More</button>
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
