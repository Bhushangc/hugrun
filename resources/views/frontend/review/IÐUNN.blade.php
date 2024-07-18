<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hugrun</title>
        <link rel="stylesheet" href="../../css/hugrun.css" />
        
        <link rel="stylesheet" href="../../css/article.css">
        <link rel="stylesheet" href="../../css/review.css">
        <link rel="stylesheet" href="../../css/hugrunResponsive.css">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
        <link
        rel="stylesheet"
        type="text/css"
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        />
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        />

        <!-- seo meta tag -->
        <meta name="description" content="Hugrún provides education for young people and offers tailored educational programs for mental health awareness. Explore our resources for parents and mental health information.">
        <meta name="keywords" content="Hugrún, mental health, education, mental health awareness, resources, lectures, parents, students">
        <meta name="author" content="Hugrún Organization">
        <link rel="canonical" href="https://gedfraedsla.is/" />
        <meta property="og:title" content="Hugrun - Mental Health Education" />
        <meta property="og:description" content="Hugrún provides education for young people and offers tailored educational programs for mental health awareness. Explore our resources for parents and mental health information." />
        <meta property="og:url" content="https://gedfraedsla.is/" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="https://gedfraedsla.is/images/hugrun_logo.svg" />
    </head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo here" /></a>
            </div>
            <div class="nav-right-content">
                <div class="nav-content">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>
                            <a>Articles</a>
                            <ul class="dropdown-content">
                                <li><a href="{{ route('article.parents') }}">For Parents</a></li>
                                <li><a href="{{ route('article.health') }}">Mental Health</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/#booking') }}">Book a Lecture</a></li>
                        <li><a href="{{ url('/about#contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="language-toggle">
                    <div class="selected-language">
                        <img src="{{ asset('images/frontend/eng.png')}}" alt="English" id="current-flag" class="flag-circle" />
                        <span id="current-lang-text">EN</span>
                    </div>
                    <select id="language-select" onchange="window.location.href = this.value">
                        <option disabled selected>Select Language</option>
                        <option value="{{ route('review', ['name' => 'IÐUNN', 'lan' => 'en']) }}" data-img="{{ asset('images/frontend/eng.png')}}">English</option>
                        <option value="{{ route('review', ['name' => 'IÐUNN', 'lan' => 'is']) }}" data-img="{{ asset('images/frontend/island.png')}}">Icelandic</option>
                        <option value="{{ route('review', ['name' => 'IÐUNN', 'lan' => 'po']) }}" data-img="{{ asset('images/frontend/poland.png')}}">Polish</option>
                    </select>
                </div>
                <div class="mobile-menu-icon">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div class="mobile-nav-content">
                <div class="top-nav">
                    <div class="logo">
                        <a href="{{ route('home') }}"
                            ><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo here"
                        /></a>
                        </div>
                    <div class="mobile-close-icon">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="bottom-nav">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>
                            <div class="dropdown">
                                <p onclick="myFunction()" class="dropbtn">Articles</p>
                                <div id="myDropdown" class="dropdown-content">
                                    <a href="{{ route('article.parents') }}">For Parents</a>
                                    <a href="{{ route('article.health') }}">Mental Health</a>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ url('/#booking') }}">Book a Lecture</a></li>
                        <li><a href="{{ url('/about#contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="ragnar--seciton">
        <div class="reviews--img-div img7">
            <div></div>
            <h2>#HUGUÐ</h2>
            <h5><a href="#review--head-content">Indunn  &nbsp; <i class="fa-solid fa-angle-down"></i></a></h5>
        </div>
        <div class="review--video-content">
            <div class="review--head-content" id="review--head-content">
                <h2>IT IS POSSIBLE TO GET HELP</h2>
                <p>Assistant to the Minister of Health, Iðunn Garðarsdóttir, shares her experience with OCD, or obsessive-compulsive disorder. Unpleasant thoughts such as the worry of causing harm to someone were the source of the anxiety disorder. She says there are a lot of misconceptions about the nature of OCD that need to be eradicated. For almost three years, she lived in uncertainty about what was going on in her head.</p>
            </div>
        </div>
        <div class="review-head-video">
            <iframe src="https://player.vimeo.com/video/258958808?color=d1503b&title=0&byline=0&portrait=0" class="campaign__video" frameborder="0"webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content">
            <p>"I started to feel obsessive-compulsive disorder when I started law school in 2012. I started to have weird worries. Worried about accidentally causing harm to others, that I would cause an accident, for example. What happens with obsessive-compulsive disorder is that the reasoning, the voice that calms you down and says: 'Don't worry, you're not going to cause any harm,' doesn't work well enough," says Iðunn Garðarsdóttir, who in the spring of 2014 was diagnosed with obsessive-compulsive disorder, also known as OCD.</p>

            <p>Iðunn works as an assistant to the Minister of Health. According to herself, she is a lawyer who uses her free time to go out for a run, be around her friends and drink good coffee. The new job has proven to be both challenging and enjoyable. "It's a real adventure, there could actually be ten health ministers, the scope of the issue is so vast. You could say that I am the right-hand man of Svandís Svavarsdóttir and her secondary brain." Health issues are close to Iðunn's heart. "I was the chairman of Röskva during my university years and found out what issues I am passionate about: health, education and equality. Politics has fascinated me since then and I have been active in the work of Röskva and the Left-Green Party since I was in my twenties."</p>
            </div>
            <div class="campaing-content-image">
                <p><img src="{{ asset('images/frontend/testimonials/img20.jpg')}}" alt="#"></p>
            </div>
    </section>
    <section id="campaign-content-II">
        <h2>Constant obsession</h2>
        <p>According to the definition, obsessive-compulsive disorder is, among other things, an anxiety disorder where people get intrusive thoughts, impulses or images that cause anxiety. They feel compelled to repeat certain activities in order to reduce their anxiety and avert possible danger. Thoughts of doing something bad make people especially distressed. These thoughts, which have been called obsessive thoughts, differ from other thoughts in that they are inconsistent with beliefs and self-image.</p>

        <blockquote>
        <p>"I never had to do something specific often, like wash my hands, turn off the lights ten times, or keep everything in order."</p>
        </blockquote>
        <p>Humi developed the ability to hide his feelings early on. It was his defense mechanism to cope with the circumstances in society at that time. "I had no idea what mental illnesses were, and as silly as it sounds, I didn't know it was okay to feel bad. It's so ingrained in you to tough it out."</p>
            <p>In Iðunn's case, it was obsessive thoughts that affected her daily life. "A thought comes up, sometimes a very crazy thought, that I get stuck in. It causes anxiety that one reacts to with compulsive behavior. For example, the thought that I could cause a car accident, then for a while I need to calm down repeatedly and convince myself with counter-thoughts and that I don't have to worry. I won't cause a car accident because I'm careful in traffic, I've had a driver's license for many years and so on. This is what I tell myself, by thinking certain thoughts over and over again, until I can produce a certain feeling that tells me that I don't have to worry. The feeling is a kind of super relief, which I now know is called just the right feeling and is characteristic of OCD."</p>
    </section>
    <section id="campaign-content">
        <div class="campaign-div-content contentI">
            <h2>Feared the consequences</h2>
            <p>"I was worried, but at the same time I didn't want to talk to anyone about the situation. It was a mixture of shame and fear of other people's reactions. I was frightened by the consequences, and despite being reasonably well informed about mental health, the thought of speaking out was incredibly difficult. It wasn't until one day that I was reading up on mental illness on the internet and learned about OCD. I couldn't believe my eyes because there was an exact description of me. I remember crying loudly while reading and had never been so light in my life. That was my diagnosis."</p>
            <p>Iðunn sought psychological help with the encouragement of her friend. "I was incredibly lucky to have a psychologist. I went through cognitive behavioral therapy that I use today to deal with the symptoms and I still see my psychologist regularly, which helps a lot." Iðunn made the decision a year ago to start taking medication because of new symptoms. "Before I started taking the medication, I had been experiencing symptoms for a while that were not just obsessive thoughts. I was starting to have to respond to the anxiety by having to do something specific. For example, I had a hard time studying because I had to read the same sentences over and over again. It took me many hours to get through several pages. The medication beat the symptoms and have helped me tremendously."</p>
            </div>

    </section>
    <section id="campaign-content-II">
        <h2>Dealing with new symptoms</h2>
        <p>Iðunn says that it is a challenging challenge to learn new symptoms. It requires patience and work. "Lately, I've had to scratch myself maybe 20 to 30 times in the same place. Or fixing my clothes, like the seam on my pants, definitely often. It's all something that's a little funny but at the same time uncomfortable and time-consuming. Maybe I'm sitting and watching TV but I can't take in anything because I have to adapt over and over again. The obsessive thoughts were my main symptoms and I learned to act on them, but now a new learning curve begins."</p>
        
        <blockquote>
        <p>"If I had attended one lecture on these main anxiety and mental disorders, I would have known what was wrong with me."</p>
        </blockquote>
        <p>Since the onset of the anxiety disorder, Iðunn describes difficult periods around stressful times and trauma. Then the symptoms appear separately. "We all experience the consequences of stress, some eat less and others more, some are anxious. I see this as mine and a part of me. We all need to learn and find what works." Iðunn says that various factors contribute to a good balance in her case. "Exercise is very important to me, but it keeps the symptoms under control. Like most people, I've had periods where I get lazy to move. I've learned that it's not available and I have to take the time to grow my body. It has also helped me to talk about my experiences with those closest to me."</p>
        <div class="campaing-content-image midImg   ">
            <p><img src="{{ asset('images/frontend/testimonials/img22.jpg')}}" alt="#"></p>
        </div>
    </section>
    <section id="campaign-content_III">
        <div class="campaign-div-content">
            <h2>No shyness today</h2>
            <p>At first, Iðunn did not care much about the diagnosis and only informed those closest to her. She feared the reaction and ignorance of others to OCD. "I wanted to take my time to learn about the disease. Over time, I became less afraid to talk about it and today I consciously try to talk openly about OCD," says Iðunn, who has spoken publicly about her experience on Twitter and Snapchat. "People are often afraid to ask questions and may want their consideration, but we need to increase education. If I had sat one lecture on these main anxiety and mental disorders, I would have known what was wrong with me. I wouldn't have spent almost three years in uncertainty."</p>
            <p>Iðunn says that there is a lack of mental health issues in Iceland. Psychological costs are high and the waiting list for psychiatrists is long. "I'm blessedly in the position of being able to pay for my hours, but not everyone lives so well. I'm on a waiting list to see a psychiatrist but I've already been waiting for months. I believe it is extremely important to strengthen mental health services on all fronts." It is also important to be aware of the resources available today. "My most important lesson is that you can get help. You just need to dare to take the step and strive for it. Confess to yourself that you cannot deal with all difficulties alone, talk to the people around you and get appropriate help. Because it's possible."</p>
            <p>The interviewees appeared in the interviews on their own terms. The interview is based on their experience and experience. It is worth mentioning that experiences are personal and not everyone experiences the same symptoms.</p>
            </p>Hugrún would also like to point out the resources available to those who believe they are experiencing symptoms of OCD here.</p>
        </div>
            

    <section id="next_campaign">
        <div class="next_campaign_heading">
            <h2>Next article &nbsp;<a href="#"><i class="fa-solid fa-arrow-right"></i></a></h2>
        </div>
    </section>
    <footer>
        <div class="footer">
            <div class="social-media">
                <div>
                    <span>Get connected with us on social networks:</span>
                </div>
            <div>
                <a href="mailto:hugrunhugur@gmail.com"><i class="fas fa-envelope" ></i></a>
                <a href="https://www.facebook.com/gedfraedsla/"><i class="fab fa-facebook-f"></i></a>
                
                <a href="https://www.instagram.com/gedfraedsla/"><i class="fab fa-instagram"></i></a>
                
                <a href="https://open.spotify.com/show/7Iql09lX1v3FCLcg0nRttQ"><i class="fa fa-podcast"></i></a>
            </div>
        </div>
        <div class="footer-contents">
            <div class="footer-container">
                <div class="footer-column-office">
                    <div class="logo">
                        <a href="./hugrun.html"
                            ><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo here"
                        /></a>
                        </div>
                    <p>Hugrún, an organization for mental health education, was established in the spring of 2016 by students in nursing, medicine and psychology at the University of Iceland.
                    </p>
                </div>
                <div class="footer-column">
                    <h6>Useful links</h6>
                    <p><a href="{{ route('home') }}">Home</a></p>
                    <div class="article-links">
                        <p><a>Article</a></p>
                        <div class="sub-links">
                            <p><a href="{{ route('article.parents') }}">For Parents</a></p>
                            <p><a href="{{ route('article.health') }}">Mental Health</a></p>
                        </div>
                    </div>
                    <p><a href="{{ url('/#booking') }}">Book Lecture</a></p>
                    <p><a href="{{ url('/about#contact') }}">Contact</a></p>
                    <p><a href="{{ route('about') }}">About</a></p>
                </div>
                
                <div class="footer-column">
                    <h6>Contact</h6>
                    <p><i class="fas fa-home"></i> Iceland</p>
                    <p><i class="fas fa-envelope"></i> hugrunhugur@gmail.com</p>
                    
                </div>
            </div>
            <div class="copy-right">
                &copy; 2020 Copyright:
                <a href="https://gedfraedsla.is/"
                ><span>gedfraedsla.is</span></a>
            </div>
        </div>
    </div>
    </footer>
    <script src="../../js/hugrun.js"></script>
</body>
</html>