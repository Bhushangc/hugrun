<link rel="stylesheet" href="../css/resources.css">
@extends('frontend.layout.english')

@section('title', 'Hugrún Resources')


@section('content')

    <section id="resources">
        <h1>Resources</h1>
        <p> &nbsp;&nbsp; In Iceland, there are many rescourcses in relation to mental health issues. The following list is incompleteinexhaustive, but the focus was put on listing most of the rescourcses that individuals can look for themselves without a referral from a health care professional. Therefore, many rescourcses are not listed here as individuals need to be referred to receive them, such as psychiatric wards within hospitals. References to such rescourcses often come from health care, and more information about health care centres clinics can be found below.</p> <br>  
        <p>&nbsp; &nbsp;Keep in mind that sometimes a therapist or therapy rescourcses are not suitable for the individual, but it is important not to give up but rather to continue looking elsewhere.</p>
        <br>
        <div class="container">
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Where to look? Basic Information</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <ol>
                        <li>To someone you trust. The first step is usually to tell someone you trust, whether it is a friend, family member, school counsellor, psychologist or other professional.</li>
                        <li>To your local health care clinic. The health care clinic is usually the first point of contact when people seek psychological help. The first step is to make an appointment with a physician who may initiate medication or refer your case to other professionals. At numerous health care clinis, there are psychologists that your doctor can refer to.</li>
                        <li>To the psychologists' private offices. On the website of the Psychological Association of Iceland at www.sal.is there is a search engine that can be used to find psychologists based on location, language, specialisation and other factors.</li>
                        <li>To private psychiatry offices. A number of psychiatrists provide medicative and conversational therapy in their private offices.</li>
                        <li>To the emergency reception of a mental field at Landspíitali. There they have psychologists, psychiatrists and nurses who are specialised in the treatment of mental health problems. The emergency reception is open from 12:00 to 19:00 on weekdays and from 13:00 to 17:00 at weekends. The emergency reception mental department's phone number is 543-4050. In case of an emergency outside these hours, you can reach out to the emergency reception at Landspitali Fossvogur. Outside the capital area, there is one specialised psychiatric ward, in Akureyri. The psychiatric ward in the hospital of Akureyri has an emergency room and a day and outpatient department. The hospital's phone number is 463-0100. Also, the emergency number 112 may be called in emergencies.</li>
                    </ol>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Health care clinic</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p>To get assistance with psychological problems at the clinic, you need to make an appointment with a doctor. Physicians learn a lot about psychological problems as part of their special education. A physician may prescribe psychotropic drugs if they deem it necessary, and physicians may refer cases to psychologists within the facility. In addition, physicians and psychologists in a health care clinic can make referrals to numerous parties and institutions such as psychiatrists, psychologists, hospital wards, VIRK rehabilitation, home nursing, mental health teams and more. The mental health services of the health care clinic vary and differs depending on which clinic is involved. Numerous clinics have working psychologists and offer psychological services for children, adolescents and in many cases adults. Some clinic offer HAM group courses (cognitive behavioural therapy) as well as additional resources. Those who do not have a good understanding of Icelandic or English are entitled to interpretation services.</p>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Municipalities</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Social Services</h4>
                        <p>The role of the social services is to ensure the financial and social security of the residents in the municipalities. Social service projects include general social counselling, financial assistance, housing, day care in homes, elderly matters, social home care, disability matters and children's and youth issues. Information about services must be sought separately in each municipality. The service is open to all residents.</p>
                    </div>
                    <div class="item-content">
                        <h4>Service centres</h4>
                        <p>Local residents of municipalities can reach out to the service centre that belongs to the neighbourhood they live in. The service centres, or neighbourhood centres, provide citizens with various types of services, e.g. advice and general information on the activities of the municipality.</p>
                    </div>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Community resources related to mental health</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Geðhjálp - An association for the improved benefit of people with mental disorders and mental disabilities in the community</h4>
                        <p>Among the services offered by Geðhjálp there is counselling for individuals free of charge, caring for their interests and information sharing. There are also several self-help groups operating in the premises of Geðhjálp, for example for, anxiety, psychosis and schizophrenia as well as a self-help group for Polish people, in Polish.</p>
                    </div>
                    <div class="item-content">
                        <h4>Hugarafl – Association of users of mental health services</h4>
                        <p>A mental health organisation run by people with lived experience of mental health distress. We work together as equals towards real recovery, healing and empowerment.</p>
                    </div>
                    <div class="item-content">
                        <h4>Grófin - Mental protection centre in Akureyri</h4>
                        <p>Grófin is a vision from a group of users of mental health services, family members and professionals. The centre offers group work and education for participants in Grófin and their families as well as working on preventive measures.</p>
                    </div>
                    <div class="item-content">
                        <h4>Bergið, a support and counselling centre for young people up to the age of 25</h4>
                        <p>Offer low-threshold services with a focus on support, education and counselling. An environment for young people who want to get help from professionals and users with diverse experiences. Located on Suðurgata 10 in 101 Reykjavik.</p>
                    </div>
                    <div class="item-content">
                        <h4>Pieta association against suicide and self-harm.</h4>
                        <p>Individuals can book an interview with a professional free of charge. The organisation welcomes people from the age of 18 with suicidal thoughts or self-harm. Relatives who have lost or have a loved one in trouble can attend support groups and receive counselling.</p>
                    </div>
                    <div class="item-content">
                        <h4>The Red Cross - Mental health resources</h4>
                        <p>The Red Cross runs the help line 1717 and an online chat on 1717.is. You can contact them 24 hours a day, anonymously. You can receive psychological support, counselling, listening and information about the resourses available. The Red Cross operates the project of visiting friends, who provide companionship and counter social isolation.The Red Cross runs Frú Ragnheiður in the capital area (Ungfrú Ragnheiður in Akureyri). Frú Ragnheiður's staff has a specially equipped car at their disposal where people with addictions can access clean syringes and clothing.</p>
                    </div>
                    <div class="item-content">
                        <h4>Bataskóli Íslands</h4>
                        <p>Bataskóli Íslands offers education for people 18 years of age and older, with mental health challenges, their relatives and staff in the health and welfare field. You can choose from a wide variety of courses designed in collaboration with professionals and people with experience in mental health challenges. The course is free of charge for students.</p>
                    </div>
                    <div class="item-content">
                        <h4>Hlutverkasetur - Activity centre</h4>
                        <p>The activity centre represents group work to counter social isolation and dysfunction. Projects, education and discussions with the aim of bringing users to the general labour market, starting an education or improving quality of life.</p>
                    </div>
                    <div class="item-content">
                        <h4>Fjölmennt</h4>
                        <p>Fjölmennt is a continuous education and knowledge centre that organises courses for people with developmental disabilities, people with autism disorders and people with mental disabilities, from the age of 20.</p>
                    </div>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Eating Disorders</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p>The following are the recoursresources that people can reach out to without a referral from a professional. The eating disorder team of the child and adolescent ward receives referrals from professionals, such as workers at health care centres. A detailed list of recoursresources for eating disorders can be found here.</p>
                    <div class="item-content">
                        <h4>National hospital's eating disorder team</h4>
                        <p>The eating disorder team is a multidisciplinary team that operates in both in day care and outpatient departments. The team consists of psychologists, physicians, nurses, social workers/family therapists, nutritionists and counsellors. The national hospital's eating disorder team receives referrals from professionals inside and outside LSH, schools and other professionals. Link to the website of the national hospital's eating disorder team: The eating disorder team</p>
                    </div>
                    <div class="item-content">
                        <h4>12 spora sjálfshjálparsamtök</h4>
                        <p>Aba – Anorexia and bulimia - abaiceland.wordpress.com</p>
                    </div>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Centres and clubs for people with mental disorders</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p>The goal of centres is to break social isolation, reduce prejudice and improve the quality of life of those with mental disorders.</p>
                    <div class="item-content">
                        <h4>Vin - Reykjavík</h4>
                        <p>Hverfisgata 47, tel. 561-2612, netfang: vin@redcross.is</p>
                    </div>
                    <div class="item-content">
                        <h4>Laut - Akureyri</h4>
                        <p>Brekkugata 34, tel. 462-6632, netfang: laut@simnet.is</p>
                    </div>
                    <div class="item-content">
                        <h4>HVER - Akranes</h4>
                        <p>Kirkjubraut 1, tel. 431-2040, netfang: hver@akranes.is</p>
                    </div>
                    <div class="item-content">
                        <h4>Ásheimar - Egilsstaðir</h4>
                        <p>Miðvangur 22, tel. 470-0795, netfang: asheimar@egilsstadir.is</p>
                    </div>
                    <div class="item-content">
                        <h4>Vesturafl - Ísafjörður</h4>
                        <p>Mánagata 6, tel. 456-4406, netfang: vesturafl@isafjordur.is
                        </p>
                    </div>
                    <div class="item-content">
                        <h4>Lækur - Hafnarfjörður</h4>
                        <p>Hörðuvellir 1, tel. 585-5500 eða 664-5746</p>
                    </div>
                    <div class="item-content">
                        <h4>Dvöl - Kópavogur</h4>
                        <p>Reynihvammur 43, tel. 554-1260 eða 554-7274, netfang: dvol@kopavogur.is</p>
                    </div>
                    <div class="item-content">
                        <h4>Miðjan, geðræktarmiðstöð - Húsavík</h4>
                        <p>Árgata 12 fyrir 16 ára og eldri, Sólbrekku 28 fyrir 6 – 16 ára. Tel. 464-1201.</p>
                    </div>
                    <div class="item-content">
                        <h4>Björgin, geðræktarmiðstöð - Suðurnes</h4>
                        <p>Suðurgata 12&15, 230 Reykjanesbæ, tel. 420-3270, netfang: bjorgin@reykjanesbaer.is
                        </p>
                    </div>
                    <div class="item-content">
                        <h4>Klúbburinn Strókur - Selfoss</h4>
                        <p>Skólavellir 1, tel. 482-1757 The purpose of Strókur is to increase the connection between people with mental disorders and society. At Strókur, everyone gets professional support and club members give each other positive company.</p>
                    </div>
                    <div class="item-content">
                        <h4>The Geysir Club - Reykjavik</h4>
                        <p>Skipholt 29, tel. 551-5166 Geysir's job is to combat isolation and inability and also to help people get trial recruitment</p>
                    </div>
                    <div class="item-content">
                        <h4>Unghugar Grófarinnar - geðverndarstöð</h4>
                        <p>Grófin's Youth Group (Unghugar) are a society of people who want to meet other like-minded people and form positive constructive relationships with each other. The group is specifically for young people between the ages of 18-30. The support group is primarily intended for young people who are dealing with mental health challenges, are socially isolated, or are inactive in the community. Located in Akureyri. Grófin website</p>
                    </div>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Other community resources</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>The Red Cross</h4>
                        <p>In addition to various mental health resources, The Red Cross provides assistance to individuals in all kinds of difficulties.Resources include a fund that provides emergency grants to those living with great poverty, a trauma fund, clothing cards, telephone friends, friend groups, help to young people in getting back into the community, open houses for immigrants and refugees, and more. Read more about Red Cross resources at raudikrossinn.is.</p>
                    </div>
                    <div class="item-content">
                        <h4>Hitt húsið</h4>
                        <p>Offer various job-related assistance for young people, leisure activities for young people with disabilities, arts groups, group work and more.</p>
                    </div>
                    <div class="item-content">
                        <h4>Hringsjá</h4>
                        <p>Hringsjá is an educational and work rehabilitation for people who want to return to the labour market after a break due to illness, accidents or other traumas.</p>
                    </div>
                    <div class="item-content">
                        <h4>Sjónarhóll, consulting centre</h4>
                        <p>A project in collaboration with several organisations. Provides counselling to family members of children with chronic illnesses and disabilities.</p>
                    </div>
                    <div class="item-content">
                        <h4>Samtökin ´78</h4>
                        <p>The Samtökin ´78 provides free counselling to queer people, their relatives and to professionals. Counselling for personal matters, social and psychological counselling and also legal counselling.</p>
                    </div>
                    <div class="item-content">
                        <h4>Ljósið</h4>
                        <p>Rehabilitation and support centre for people who have had cancer and their relatives. Multiple programmes, various courses and groups.</p>
                    </div>
                    <div class="item-content">
                        <h4>Alzheimer's association</h4>
                        <p>Association of enthusiasts and relatives of individuals with Alzheimer’s disease and other related diseases. They offer, among other things, advice, educational meetings, support groups and working groups.</p>
                    </div>
                    <div class="item-content">
                        <h4>Foreldrahús – drug free youth</h4>
                        <p>​Foreldrahús offers psychological services and counselling for children and adolescents in some kind of trouble as well as counselling and support for the whole family. They work with various problems, such as adolescent substance abuse, bullying, social difficulties and behavioural problems. There are also self-support courses, family counselling, parenting groups, parenting self-help sessions and adolescent groups for adolescents with substance abuse problems. They operate by way of the tel. no. 581-1799, open 24 hours a day, wherein a professional takes calls and provides advice and support to the parents.</p>
                    </div>
                    <div class="item-content">
                        <h4>Tilvera, an organisation about infertility</h4>
                        <p>Various types of education and support, grants and café talks.</p>
                    </div>
                    <div class="item-content">
                        <h4>Association of single parents</h4>
                        <p>Provides mediation, seminars and counselling on various issues such as custody, divorces, social problems and more, including telephone counselling.</p>
                    </div>
                    <div class="item-content">
                        <h4>W.O.M.E.N, an organisation for women of foreign origin in Iceland</h4>
                        <p>The organisation is open to all women of a foreign origin residing in Iceland. They offer, among other things, free interview services, self-image support courses and group work.</p>
                    </div>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Remote Services</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>1717 og 1717.is</h4>
                        <p>The Red Cross runs the help line 1717 and online chat on 1717.is. You can contact them 24 hours a day, anonymously. You can get psychological support, counselling, listening and information about the resourses available.</p>
                    </div>
                    <div class="item-content">
                        <h4>Psychologists remote services</h4>
                        <p>Numerous professionals offer remote services using the Kara connect software, which is specially designed to provide online treatment securely. A list of psychologists using Kara connect: karaconnect.com/salfraedingar</p>
                    </div>
                    <div class="item-content">
                        <h4>Tolumsaman.is</h4>
                        <p>Remote services of Kvíðameðferðarstöðin.</p>
                    </div>
                    <div class="item-content">
                        <h4>Minlidan.is</h4>
                        <p>Mín líðan offers online psychotherapy for the symptoms of depression and social anxiety.</p>
                    </div>
                    <div class="item-content">
                        <h4>Sal.is</h4>
                        <p>If you check the location "Internet" in the search engine of psychologists on sal.is you can see a list of psychologists who provide services over the Internet. That list is incomplete.</p>
                    </div>
                    <div class="item-content">
                        <h4>Betrisvefn.is</h4>
                        <p>Betri svefn offers education on sleep and insomnia treatment, both through the Internet and in individual sessions with psychologists.</p>
                    </div>
                    <div class="item-content">
                        <h4>Værð</h4>
                        <p>Psychological service for children, adolescents and adults. Værð's phychologists offer general phychological services through online video conferences in a secure way. The purpose of the remote service is to increase access for the public to phychotherapy and counseling from certified phychologists, regardless of where you live.</p>
                    </div>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Students</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Educational and career counselling - All Icelandic universities</h4>
                        <p>Services, instructions and support for students. Varies by school.</p>
                    </div>
                    <div class="item-content">
                        <h4>Psychological counselling study and career counsellors - University of Iceland</h4>
                        <p>Individual interviews with psychologists for students at UI. Reservations need to be booked.</p>
                    </div>
                    <div class="item-content">
                        <h4>University psychological counselling - University of Iceland</h4>
                        <p>The university's students and their children are offered psychology services from graduate students in clinical psychology who provide counselling under the professional guidance of certified psychologists.</p>
                    </div>
                    <div class="item-content">
                        <h4>SÁLRÆKT Psychological group treatment - University of Iceland</h4>
                        <p>For university students who want to solve psychological problems and improve their mental health. Psychologists and director of the psychology guide in the therapy.</p>
                    </div>
                    <div class="item-content">
                        <h4>Psychology Services, Group Therapy - University of Reykjavik</h4>
                        <p>Students of the University of Reykjavik can apply for psychology services within the University. This includes a psychological interview and a six-week group therapy for depression and anxiety for the students who request it.</p>
                    </div>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Grief and loss</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Grief Centre</h4>
                        <p>The grief centre provides education and counselling to the grieving and those who work on their welfare. Teaching lessons, group work and various events. The grief centre is a collaborative project of four grief processing companies: Ný Dögun, Birta national organisation, Ljónshjarta and Gleym mér ei sponsor organisation.</p>
                    </div>
                    <div class="item-content">
                        <h4>Ný dögun: Support in grief</h4>
                        <p>Operates various support groups within care centres.</p>
                    </div>
                    <div class="item-content">
                        <h4>Ljónshjarta</h4>
                        <p>An organisation to support young people (20-50 years) who have lost a spouse and their children.</p>
                    </div>
                    <div class="item-content">
                        <h4>Gleym mér ei</h4>
                        <p>An organisation that exists for those who suffer a loss during pregnancy or shortly after birth.</p>
                    </div>
                    <div class="item-content">
                        <h4>Birta national organisation</h4>
                        <p>National organisation of parents and guardians of children and young people who have died unexpectedly.</p>
                    </div>
                    <div class="item-content">
                        <h4>Pieta - organisation against suicide and self-harm.</h4>
                        <p>Relatives who have lost or have a loved one in trouble due to suicide, suicide risk or self-harm can attend support groups and receive counselling.</p>
                    </div>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">12 step associations:</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p> <span>AA </span> - Alcoholics - aa.is</p>
                    <p><span>Aba</span> - Anorexia and bulimia - abaiceland.wordpress.com</p>
                    <p><span>Al-anon</span> - Relatives of alcoholics - al-anon.is</p>
                    <p><span>Coda</span> - Anonymous codependence - coda.is</p>
                    <p><span>DA</span> - Anonymous debtors - daisland.wordpress.com</p>
                    <p><span>DRA</span> - Two way problem - draonline.org/en/</p>
                    <p><span>GA</span> - Gambling addiction - gasamtokin.is</p>
                    <p><span>GSA</span> - Food addiction - gsa.is</p>
                    <p><span>NA</span> - Drug Addiction - nai.is</p>
                    <p><span>OA</span> - Food addiction or eating disorders - oa.is</p>
                    <p><span>SASA</span> - Victims of sexual abuse</p>
                    <p><span>SLAA</span> - Love and sexual addiction - slaa.is</p>
                    <p><span>Friends in recovery</span> - Incontinence in general - viniribata.is</p>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Resources related to violence</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>Stígamót</h4>
                        <p>Victims of sexual abuse can come to Stigamót for free interviews.</p>
                    </div>
                    <div class="item-content">
                        <h4>Kvennaathvarfið</h4>
                        <p>The women's refuge, Kvennaathvarfið, is a refuge for women who cannot live at home because of violence. They are offered to stay in the refuge. Victims and relatives can also receive free interviews.</p>
                    </div>
                    <div class="item-content">
                        <h4>Bjarkarhlíð</h4>
                        <p>Bjarkarhlíð is a centre for victims of violence. There, individuals are given the opportunity to receive an interview and consultation with social workers, police and lawyers free of charge and on their terms.</p>
                    </div>
                    <div class="item-content">
                        <h4>Heimilisfriður, treatment and knowledge centre on abuse in close relationships</h4>
                        <p>Subsidised psychotherapy for abusers in close relationships of both sexes and risk assessment interviews with the victim of abuse. For those who use mental and physical abuse.</p>
                    </div>
                    <div class="item-content">
                        <h4>Bjarmahlíð</h4>
                        <p>Bjarmahlíð is a center in Akureyri for victims of violence and offers counseling as well as information for individuals over the age of 16. Bjarmahlíð emphasizes working with victims on their terms. The center's services and counseling is all under one roof in order to simplify seeking help.</p>
                    </div>
                    <div class="item-content">
                        <h4>Aflið</h4>
                        <p>Aflið is an organization founded in Akureyri in 2002 as a response to a need for an organization of this sort. They focus on working with victims of sexual and/or domestic violence on their terms.</p>
                    </div>
                    <div class="item-content">
                        <h4>Sigurhæðir</h4>
                        <p>Sigurhaedir offers coordinated counseling, support, and services to women, aged 18 or older, as needed. We offer individuals and group therapy sessions and specialized stress and trauma therapy. Police are also available for advice and information, and provide legal advice as well. Special education on the rights of immigrant women is also available, with an interpreter if needed. Located in Selfoss.</p>
                    </div>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Neurological developmental disorders</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <div class="item-content">
                        <h4>The ADHD organisation</h4>
                        <p>The ADHD is a national organisation to support children and adults with ADD, hyperactivity and related disorders.</p>
                    </div>
                    <div class="item-content">
                        <h4>Einhverfusamtökin - Autism association</h4>
                        <p>Offer support groups for teens and adults with autism and relatives. Groups operated in Reykjavik, the Westman Islands and in Akureyri.</p>
                    </div>
                    <div class="item-content">
                        <h4>Specialisterne, specialisterne.is</h4>
                        <p>Offer free job training and job skills assessment for individuals on the autism spectrum as well as assist with job search and create job opportunities suitable for those individuals.</p>
                    </div>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Þjóðkirkjan - National Church</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p>The church's family service has family therapists working for them. Priests also welcome people for interviews for a variety of problems. Churches in the country have organised operations, such as parent mornings and activities for children. The church's assistance operations offer various types of support, including social counsellors that you can reach out to.</p>
                </div>
            </div>
            <div class="item" onclick="toggleDropdown(this)">
                <div class="drop-down--title">
                    <div class="title">Complaints and comments regarding service</div>
                    <div class="plus">+</div>
                </div>
                <div class="drop">
                    <p> <span> Landlæknir </span> - complaints regarding Landspitali</p>
                    <p> <span> Parliamentary Ombudsman </span> - complaints regarding government resources</p>
                    <p> <span> Citizens' Ombudsman </span> - complaints regarding the services of theCity of Reykjavik</p>
                    <p> <span> Geðhjálp </span> - Mental Health Service Complaints</p>
                </div>
            </div>
        </div>
    </section>
    <script src="../js/hugrun.js"></script>
    <script>
        
function toggleDropdown(item) {
    const dropdown = item.querySelector('.drop');
    const isVisible = dropdown.classList.toggle('show');
    const items = document.querySelectorAll('.item');
    items.forEach(function (it) {
        if (it !== item) {
            const dd = it.querySelector('.drop');
            dd.classList.remove('show');
        }
    });
    const plus = item.querySelector('.plus');
    plus.textContent = isVisible ? '-' : '+';
}

window.addEventListener('click', function (event) {
    if (!event.target.closest('.item')) {
        const dropdowns = document.querySelectorAll('.drop');
        dropdowns.forEach(function (dropdown) {
            dropdown.classList.remove('show');
        });
        const plusSigns = document.querySelectorAll('.plus');
        plusSigns.forEach(function (plus) {
            plus.textContent = '+';
        });
    }
});
    </script>
@endsection
