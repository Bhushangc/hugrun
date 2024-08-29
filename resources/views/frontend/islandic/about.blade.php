<link rel="stylesheet" href="../css/article.css">
@extends('frontend.layout.islandic')

@section('title', 'Hugrún About')


@section('content')
    <section id="about">
        <div class="about--description">
            <div class="about-content">
                <h1>Okkar saga</h1>
                <p>Hugrún var stofnuð vorið 2016 af nemendum við Háskóla Íslands í hjúkrunarfræði, læknisfræði og sálfræði, með áherslu á fræðslu um geðheilbrigði. Nú taka nemendur frá Háskólanum í Reykjavík og Háskólanum á Akureyri einnig þátt. Markmið okkar er að fræða ungt fólk um geðheilbrigði, geðsjúkdóma og úrræði, og auka samfélagslega vitund.</p> <br> 
                <p>Aðalverkefni okkar á hverju ári er að halda ókeypis geðfræðslufyrirlestra í framhaldsskólum víðs vegar um Ísland. Við höldum einnig fræðslukvöld, höfum ritunarkampaníur fyrir Alþjóðlega geðheilbrigðisdaginn og tökum til máls á ungmennahúsum, foreldrafélögum og nemendafélögum. Árið 2018 hófum við útgáfu Huguð herferðarnetverksins til að efla opna umræðu um geðsjúkdóma, aðgengilegt í gegnum vefsíðu okkar. Instagramið okkar, <a href="https://www.instagram.com/gedfraedsla/">@gedfraedsla</a>, býður upp á geðheilbrigðistips.</p> <br> 
                <p>Háskólanemar geta tekið þátt sem fræðarar, mætt skilyrðum og lokið þjálfun til að halda fyrirlestra. Hugrún starfar á styrkjum, framlögum og fjáröflunum, og allur ágóði fer í fræðslu um geðheilbrigði ungs fólks. Vefsíða okkar, uppfærð síðan haustið 2016, býður upp á aðgengilegt fræðsluefni um geðheilbrigði og geðsjúkdóma þar sem samtökin birta góð ráð til að bæta geðheilbrigði.</p> <br> 
            </div>
            <div class="about--image">
                <img src="{{ asset('images/frontend/about.png')}}" alt="#">
            </div>
        </div>
        <div class="about--us">
            <h2>Félagar í Hugrún hafa sameiginlegan áhuga á að fræða ungt fólk um mikilvægi geðheilbrigðis.</h2>
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
            <h2>BOÐA FYRIRLESTUR</h2>
            <p>Það er auðvelt að bóka fyrirlestur um geðheilbrigði og geðsjúkdóma frá fyrirlesurum Hugrúnar. Þú þarft að senda tölvupóst á <span>hugrunhugur@gmail.com</span> eða hafa samband við okkur í gegnum <a href="https://www.facebook.com/gedfraedsla/">Facebook-síðu Hugrúnar</a>.</p>
            <p>Hugrún veitir fræðslu fyrir ungt fólk og fyrirlesturinn er gerður fyrir fyrsta árs nemendur í framhaldsskólum. Við höfum einnig haldið þjálfun á félagsmiðstöðvum. Fræðslan snýr að geðheilbrigði, geðsjúkdómum og úrræðum. Ef það eru sérstakar óskir, vinsamlegast tilgreinið þær.</p>
            <p>Allir sem taka þátt í starfsemi Hugrúnar eru sjálfboðaliðar og fræðslan er ókeypis.</p>
        </div>        
    </section>
    <section id="support">
        <div class="book-content-div">
            <h2>Styrktu Hugrún</h2>
            <p>Þú getur lagt fram frjáls framlög til Hugrúnar með því að leggja inn á reikning nr. <span>0331-26-002581</span>, kt. <span>590716-0490</span>.</p>
            <p>Hugrún fjármagna fræðslu fyrir ungt fólk um geðheilbrigði og geðsjúkdóma um allt land með frjálsum framlögum og styrkjum. Allir sem taka þátt í starfsemi Hugrúnar eru sjálfboðaliðar og félagar taka ekki við greiðslum.</p>
            <p>Ef þú velur að leggja fram framlag á annan hátt en með millifærslu, biðjum við þig að hafa samband við stjórn Hugrúnar á hugrunhugur@gmail.com eða í gegnum <a href="https://www.facebook.com/gedfraedsla/">Facebook-síðu Hugrúnar</a>.</p>
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
            <p class="par">Hafðu samband</p>
            <h1>Ertu með spurningar? Hafðu samband!</h1>
            <p class="par-content">Hugrún miðar að því að fræða ungt fólk á Íslandi um geðheilbrigði, geðsjúkdóma og tiltæk úrræði, auk þess að auka samfélagslega vitund í gegnum ókeypis fyrirlestra, viðburði og netmiðla.</p>

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