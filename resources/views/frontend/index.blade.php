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
             <a href="{{ route('resources') }}">
                <div class="banner-content">
                    <img src="{{ asset('images/frontend/bubble.svg')}}" alt="bubble logo" />
                    <p>Resources</p>
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
        {{-- <section id="booking">
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
        </section> --}}
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

        <section id="section--clicked">
            <div class="clicked-image">
                <img src="{{ asset('images/frontend/announcement.jpg')}}" alt="">
            </div>
        </section>
        <div id="announcement-modal" class="modal" style="display: block;">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Announcement</h2>
                <p>After valuable work, Hugrún Psychological Society has now made the difficult decision to close its operations. This decision has not been taken lightly, but in recent years we have noticed a decrease in interest and participation, especially among university students who have played a key role in volunteering in education by society.</p>
                <p>Since the founding of the association, Hugrún has had the goal to increase awareness of mental health and support young people in thinking about their own mental health. These goals have been the basis of all our operations, and we are infinitely grateful to those who have contributed in recent years, both within and outside the society.</p>
                <p>Without these volunteers and the active participation of university students, it is not possible to continue with the activities of the society. Therefore, we’ve decided to close this chapter with dignity and gratitude in our hearts.</p>
                <p>Even though Hugrún is closing its operations, we want to remind you of the importance of continuing to look after your own mental health and others. Nurturing mental wellbeing is vital, so it's important to seek help when needed, talk openly about your feelings, and be supportive to others around you.</p>
                <p>We sincerely thank all those who have supported us over the years and hope that our message will live on. Mental health matters and hopefully we will continue to work towards a better world where everyone gets the help and support they need.</p>
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
        //     window.location.href = '{{ route('about') }}';
        // });
        document.getElementById('resource-button').addEventListener('click', function() {
            window.location.href = '{{ route('resources') }}';
        });
        document.getElementById('testimonials-button').addEventListener('click', function() {
            window.location.href = '{{ route('testimonials') }}';
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
