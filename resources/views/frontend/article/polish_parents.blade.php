<link rel="stylesheet" href="/css/article.css">
@extends('frontend.layout.polish')

@section('title', 'Hugrún Articles')


@section('content')
    <section id="articles">
        <div class="articles-categories">
            <div class="articles-title">
                <h1>Information for Parents</h1> <hr>
                @foreach ($allBlogs as $blog)
                    <p @if ($blog->id == $currentBlog->id)id="current-page"@endif><a href="{{ route('article.parents', ['id' => $blog->id]) }}">{{ $blog->title }}</a></p>
                @endforeach
            </div>
        </div>
        <div class="articles-contents">
            <div class="articles-contents-heading">
                <div class="logo">
                    <a href="../hugrun.html"><img src="{{ asset('images/frontend/hugrun_logo.svg')}}" alt="logo here" /></a>
                </div>
                <h6>Information for Parents > <span>{{ $currentBlog->title }}</span></h6>
                <h6 class="date"><span>{{ $currentBlog->created_at }}</span></h6>
            </div>
            <div class="articles-content-body">
                <h3>{{ $currentBlog->title }}</h3>
                <!-- <img src="{{ asset('images/frontend/home-left.jpg')}}" alt="parents"> -->
               
                {!! $currentBlog->content !!}
               
                {{-- <p> &nbsp; &nbsp; Psychiatric education increases the awareness of mental health and mental health problems and can reduce prejudice. Psychiatric education can, therefore, increase the likelihood of people seeking help and reduce the severity of the problem. Psychiatric disorders usually occur at the age of 14-24, although they can begin at any time during one's liftetime. It is immensely important that young people of this age have someone they can reach out to when they are experiencing difficult feelings or symptoms of a mental disorder.</p> <br>
                <p>&nbsp; &nbsp;The following instructions are intended for the parents, guardians or carers of young people aged 14-18 years. They outline how educational materials on the site can be used to increase awareness and open the discussion about mental health and mental disorders at home. They may be relevant to ages other than 14-18 years, but the educational material to which they refer is specifically made with that age range in mind.</p><br>
                <p>Read these instructions before discussing the educational material with young people:</p><br>
                <ol>
                    <li>Reserve an evening or another suitable time to review the educational material together.</li>
                    <li>Explain what you are about to do, you are about to talk about mental health and introduce yourself to mental disorders that are common at their age.</li>
                    <li>Answer questions to the best of your ability. It is normal to not know the answers to everything and it is better to say it outright rather than guessing or saying something that might be wrong. If there is a strong interest in finding an answer, it is advisable to try to find it together, look to a professional or find a reliable answer with reliable sources.</li>
                    <li>Open and read through texts regarding mental health and emotions. (Mental Health).</li>
                    <li>Next, read through the self-esteem text. (Self-esteem).</li>
                    <li>The most common disorders of young people are depression and anxiety disorders. Therefore, those are the disorders that are recommended that everyone reads over together. There are many anxiety disorders and, therefore, a great deal of anxiety educational material to be found on the site. To simplify that review, it is suggested to read it together through the general introduction of anxiety as well as information about social anxiety as it is common at this age. (Depression, about anxiety in general, social anxiety).</li>
                    <li>If there is a history of other mental disorders in the family, especially the immediate family, it would be advisable to also read through the corresponding educational material.</li>
                    <li>Everyone should read through the materials regarding self-harm and suicidal thoughts. It is a myth that it is harmful to discuss suicidal thoughts. An open and honest discussion regarding suicidal thoughts can save lives. (Self-harm and suicidal thoughts).</li>
                    <li>Educational material regarding eating disorders is relevant to many individuals and it is also recommended to read through a general introduction of them. Especially if dieting is common with the adolescent or in their immediate surroundings. Sports can also be a risk factor for the development of eating disorders. The frequency of eating disorders is the highest in sports such as gymnastics, dance and martial arts where they compete in weight classes. (Eating disorders).</li>
                    <li>It is important to know the main resources and what is available when seeking assistance. The following is basic information about resources in Iceland. It is recommended to read through them together. A more detailed list of resources in Iceland can be found here.</li>
                    <li>Finally, it is good to reiterate that the adolescent can come to you if they are not feeling well, they are experiencing difficult feelings or any of the symptoms you have been discussing. Particularly note that not only is it possible to come you for help, but that you want them to reach out to you in these circumstances.</li>
                    </ol>
                    <br>
                <h4>Where to look? Basic Information</h4>
                <ol>
                    <li>To someone you trust. The first step is usually to tell someone you trust, whether it is a friend, family member, school counsellor, psychologist or other professional.</li>
                    <li>To your local health care clinic. The health care clinic is usually the first point of contact when people seek psychological help. The first step is to make an appointment with a physician who may initiate medication or refer your case to other professionals. At numerous health care clinics, there are psychologists that your doctor can refer to.</li>
                    <li>To the psychologists' private offices. On the website of the Psychological Association of Iceland at www.sal.is there is a search engine that can be used to find psychologists based on location, language, specialisation and other factors.</li>
                    <li>To private psychiatry offices. A number of psychiatrists provide medicative and conversational therapy in their private offices.</li>
                    <li>To the emergency reception of a mental field at Landspítali. There they have psychologists, psychiatrists and nurses who are specialised in the treatment of mental health problems. The emergency reception is open from 12:00 to 19:00 on weekdays and from 13:00 to 17:00 at weekends. The emergency reception mental department's phone number is 543-4050. In case of an emergency outside these hours, you can reach out to the emergency reception at Landspitali Fossvogur. Outside the capital area, there is one specialised psychiatric ward, in Akureyri. The psychiatric ward in the hospital of Akureyri has an emergency room and a day and outpatient department. The hospital's phone number is 463-0100. Also, the emergency number 112 may be called in emergencies.</li>
                </ol> --}}
            </div>
        </div>
    </section>

    <script src="{{ asset('/js/hugrun.js')}}"></script>
@endsection