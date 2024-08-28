<link rel="stylesheet" href="../css/article.css">
@extends('frontend.layout.english')

@section('title', 'Hugrún About')


@section('content')

    <section id="about">
        <div class="about--description">
            <div class="about-content">
                <h1>Our Story</h1>
                <p>Hugrún, founded in spring 2016 by University of Iceland students in nursing, medicine, and psychology, focuses on mental health education. Now, students from the University of Reykjavik and the University of Akureyri also participate. Our organization aims to educate young people on mental health, disorders, and resources, increasing social awareness.</p> <br> 
                <p>Our primary annual task is delivering free mental health lectures at high schools across Iceland. We also host educational evenings, run writing campaigns for International Mental Health Day, and speak at youth centers, parent councils, and student associations. In 2018, we launched the Huguð campaign web magazine to foster open discussion about mental disorders, accessible via our website. Our Instagram, <a href="https://www.instagram.com/gedfraedsla/">@gedfraedsla</a> , offers mental health tips.</p> <br> 
                <p>University students can volunteer as educators, meeting criteria and completing training to give lectures. Hugrún operates on grants, donations, and fundraising, with all proceeds supporting youth mental health education. Our website, updated since autumn 2016, provides accessible educational material on mental health and disorders. where the organization posts good tips for improved mental health.</p> <br> 
            </div>
            <div class="about--image">
                <img src="{{ asset('images/frontend/about.png')}}" alt="#">
            </div>
        </div>
        <div class="about--us">
            <h2>Members of Hugrún have a common interest in educating young people about the importance of mental health.</h2>
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
            <h2 >BOOK A LECTURE</h2>
            <p>It is easy to book a lecture on mental health and mental disorders from Hugrún's lecturers. You need to send an email to <span>hugrunhugur@gmail.com</span>  or contact us by way of <a href="https://www.facebook.com/gedfraedsla/">Hugrún's Facebook page</a>.</p>
            <p>Hugrún provides education for young people and the lecture is made for first year students in upper secondary schools. We have also undertaken training in community centres. The education addresses mental health, mental disorders and resources. If there are special requests, please state them.</p>
            <p>Everyone involved in Hugrún's activities are volunteers and the education is free.</p>
        </div>
    </section>
    <section id="support">
        <div class="book-content-div">
            <h2 >Support Hugrún</h2>
            <p>You can make voluntary contributions to Hugrún by making a donation to account no. <span>0331-26-002581</span> , ID no. <span>590716-0490</span>.</p>
            <p>Hugrún funds education for young people about mental health and mental disorders throughout the country with voluntary contributions and grants. Everyone involved in Hugrún's activities is a volunteer, and members do not accept payments.</p>
            <p>If you choose to make a donation in a way other than by bank transfer, we ask that you contact Hugrún's board at hugrunhugur@gmail.com or by way of <a href="https://www.facebook.com/gedfraedsla/">Hugrún's Facebook page</a>.</p>
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
            <p class="par">Contact Us</p>
            <h1>Have questions? Get in touch!</h1>
            <p class="par-content">Hugrún aims to educate young people in Iceland on mental health, disorders, and available resources, increasing social awareness through free lectures, events, and online platforms. </p>
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