@extends('front.layouts.master')
@section('section')
  


    <!-- Banner Section -->
    <section class="bannerSection wow animate__fadeIn" data-wow-delay="0.8s">
        <div class="bannerWrap">
            <div class="bannerCarousel owl-carousel owl-theme">
                <div class="item">
                    <div class="bannerMainWrapper">
                        <div class="bannerMainImg">
                            <img src="{{ asset('front') }}/assets/img/slider/slider1.jpg" alt="bg-1">
                        </div>
                        <!-- <div class="bannerMainContent">
                            <h5 class="animated animate__fadeInDown">
                                Convocation
                            </h5>
                        </div> -->
                    </div>
                </div>
                <div class="item">
                    <div class="bannerMainWrapper">
                        <div class="bannerMainImg">
                            <img src="{{ asset('front') }}/assets/img/slider/slider2.jpg" alt="bg2">
                        </div>
                        <!-- <div class="bannerMainContent">
                            <h5 class="animated animate__fadeInDown">
                                Convocation
                            </h5>
                        </div> -->
                    </div>
                </div>
                <div class="item">
                    <div class="bannerMainWrapper">
                        <div class="bannerMainImg">
                            <img src="{{ asset('front') }}/assets/img/slider/slider3.jpg" alt="bg-3">
                        </div>
                        <!-- <div class="bannerMainContent">
                            <h5 class="animated animate__fadeInDown">
                                Convocation
                            </h5>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="item">
                    <div class="bannerMainWrapper">
                        <div class="bannerMainImg">
                            <img src="{{ asset('front') }}/assets/img/slider/slider1.jpg" alt="bg4">
                        </div>
                        <div class="bannerMainContent">
                            <h5 class="animated animate__fadeInDown">
                                Convocation
                            </h5>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>


    <!-- Our News -->

    <section class="ourClients wow animate__fadeIn pt-50">
        <div class="site-width">
            <div class="titleSection">
                <div class="text-center">
                    <h1 class="home-subtit">ALL INDIA INSTITUTE OF OCCULT SCIENCE</h1>
                    <h2>
                        We are Featured in Top News Channels
                    </h2>
                </div>

            </div>
            <div class="clientsWrapper">
                <div class="clientCarousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="clientCard">
                            <a href="https://zeenews.india.com/culture/surya-grahan-2022-years-last-solar-eclipse-a-day-after-diwali-these-zodiac-signs-will-be-most-affected-2524429.html"
                                target="_blank">
                                <img src="{{ asset('front') }}/assets/img/news-channels/zee-news.webp"
                                    alt="zee news logo">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clientCard">
                            <a href="https://m.dailyhunt.in/news/india/english/zeenews-epaper-dh9946c0e104864447858bd53362c2ea6c/surya+grahan+2022+years+last+solar+eclipse+a+day+after+diwali+these+zodiac+signs+will+be+most+affected-newsid-n433798402"
                                target="_blank">
                                <img src="{{ asset('front') }}/assets/img/news-channels/daily-hunt.webp"
                                    alt="daily hunt logo">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clientCard">
                            <a href="https://www.india.com/astrology/vastu-tips-for-success-8-shastra-based-tips-for-instant-growth-in-work-life-5758745/"
                                target="_blank">
                                <img src="{{ asset('front') }}/assets/img/news-channels/india.com-news.webp"
                                    alt="india.com news logo">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clientCard">
                            <a href="https://timesofindia.indiatimes.com/life-style/relationships/love-sex/expert-reveals-what-your-handwriting-says-about-your-personality/articleshow/94317310.cms"
                                target="_blank">
                                <img src="{{ asset('front') }}/assets/img/news-channels/toi.webp" alt="toi logo">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clientCard">
                            <a href="https://www.newindianexpress.com/lifestyle/spirituality/2022/oct/16/how-handwriting-reveals-your-health-2507835.html"
                                target="_blank">
                                <img src="{{ asset('front') }}/assets/img/news-channels/the-new-indian-express.webp"
                                    alt="the new indian express logo">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clientCard">
                            <a href="https://tv9telugu.com/spiritual/vastu-tips-for-diwali-date-shubh-muhurat-and-tips-to-please-goddess-lakshmi-au58-803920.html%20(Telugu)"
                                target="_blank">
                                <img src="{{ asset('front') }}/assets/img/news-channels/tv-9.webp" alt="tv9 logo">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clientCard">
                            <a href="https://zeenews.india.com/kannada/lifestyle/vastu-tips-to-get-rich-5-ways-to-increase-your-wealth-attain-financial-stability-105065"
                                target="_blank">
                                <img src="{{ asset('front') }}/assets/img/news-channels/zee-news-2.webp"
                                    alt="zee news2">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clientCard">
                            <a href="https://www.msn.com/en-in/money/markets/diwali-2023-when-is-diwali-date-shubh-muhurat-and-significance-of-festival/ar-AA1jrOc4"
                                target="_blank">
                                <img src="{{ asset('front') }}/assets/img/news-channels/msn.webp" alt="msn logo">
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="clientCard">
                            <a href="https://economictimes.indiatimes.com/news/new-updates/surya-grahan-2022-this-years-last-solar-eclipse-a-day-after-diwali-heres-how-it-will-affect-these-zodiac-signs/articleshow/94980848.cms"
                                target="_blank">
                                <img src="{{ asset('front') }}/assets/img/news-channels/e-times.webp"
                                    alt="etimes logo">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!-- Featured Course -->
    <section class="courses courses-sec bg-1 pt-50 pb-50 wow animate__fadeIn">
        <div class="site-width">
            <div class="titleSection">
                <div class="text-center">
                    <h2>
                        Our <span>Top Rated</span> Courses
                    </h2>
                    <!-- <h4>
                        We offer top courses in Occult Science
                    </h4> -->
                </div>
            </div>
            <div class="courseSlider">
                <div class="coursesCarousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="coursesCard">
                            <a href="{{ route('home.vastu-course') }}" class="">
                                <div class="coursesHeader">
                                    <div class="courseImg">
                                        <span> <img src="{{ asset('front') }}/assets/img/courses/vastu-1-150x150.webp"
                                                alt="Vastu Course"></span>
                                    </div>
                                </div>
                                <div class="courseContent">
                                    <h3>
                                        Vastu Course
                                    </h3>
                                    <p>
                                        Vastu is an old Indian investigation of architecture and structures that help
                                        make an appropriate setting or a spot to live and work in a most legitimate way.
                                    </p>
                                </div>
                            </a>
                            <div class="moreDetailBtn"><a href="{{ route('home.vastu-course') }}" class=""><span>Learn More <i
                                            class="fa-solid fa-arrow-right"></i></span></a></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="coursesCard">
                            <a href="{{ route('home.astrology-course') }}" class="">
                                <div class="coursesHeader">
                                    <div class="courseImg">
                                        <span> <img
                                                src="{{ asset('front') }}/assets/img/courses/astrology-1-150x150.webp"
                                                alt="astrology course"></span>
                                    </div>
                                </div>
                                <div class="courseContent">
                                    <h3>
                                        Astrology Course
                                    </h3>
                                    <p>
                                        Astrology is an ancient Indian science that clarifies planetary movements and
                                        positions for time and their impact on people and different substances on earth.
                                    </p>
                                </div>
                            </a>
                            <div class="moreDetailBtn"><a href="{{ route('home.astrology-course') }}" class=""><span>Learn
                                        More <i class="fa-solid fa-arrow-right"></i></span></a></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="coursesCard">
                            <a href="{{ route('home.tarot-card-course') }}" class="">
                                <div class="coursesHeader">
                                    <div class="courseImg">
                                        <span><img src="{{ asset('front') }}/assets/img/courses/tarot-1.webp"
                                                alt="tarot course"></span>
                                    </div>
                                </div>
                                <div class="courseContent">
                                    <h3>
                                        Tarot Card Course
                                    </h3>
                                    <p>
                                        Tarot is a bunch of cards and the reading of these cards is Known as tarot card
                                        reading. A Tarot card reading course can help you have a blissful life.
                                    </p>
                                </div>
                            </a>
                            <div class="moreDetailBtn"><a href="{{ route('home.tarot-card-course') }}" class=""><span>Learn More <i
                                            class="fa-solid fa-arrow-right"></i></span></a></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="coursesCard">
                            <a href="{{ route('home.numerology') }}" class="">
                                <div class="coursesHeader">
                                    <div class="courseImg">
                                        <span><img
                                                src="{{ asset('front') }}/assets/img/courses/numerology-1-150x150.webp"
                                                alt="numerology course"></span>
                                    </div>
                                </div>
                                <div class="courseContent">
                                    <h3>
                                        Numerology Course
                                    </h3>
                                    <p>
                                        Numerology is the study of numbers in your day-to-day existence. Type of
                                        divination like astrology arrangements with associations among numbers.
                                    </p>
                                </div>
                            </a>
                            <div class="moreDetailBtn"><a href="{{ route('home.numerology') }}" class=""><span>Learn
                                        More <i class="fa-solid fa-arrow-right"></i></span></a></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="coursesCard">
                            <a href="{{ route('home.palmistry') }}" class="">
                                <div class="coursesHeader">
                                    <div class="courseImg">
                                        <span><img src="{{ asset('front') }}/assets/img/courses/palmistry-1.webp"
                                                alt="palmistry course"></span>
                                    </div>
                                </div>
                                <div class="courseContent">
                                    <h3>
                                        Palmistry Course
                                    </h3>
                                    <p>
                                        Palmistry, additionally called Chirology, is the magical specialty of perusing
                                        individuals’ palms to decide their fortunes and karma.
                                    </p>
                                </div>
                            </a>
                            <div class="moreDetailBtn"><a href="{{ route('home.palmistry') }}" class=""><span>Learn
                                        More <i class="fa-solid fa-arrow-right"></i></span></a></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="coursesCard">
                            <a href="{{ route('home.reiki-course') }}" class="">
                                <div class="coursesHeader">
                                    <div class="courseImg">
                                        <span><img src="{{ asset('front') }}/assets/img/courses/reiki-1.webp"
                                                alt="reiki course"></span>
                                    </div>
                                </div>
                                <div class="courseContent">
                                    <h3>
                                        Reiki Course
                                    </h3>
                                    <p>
                                        It is a Japanese energy recuperating method. The prevalent type of Reiki
                                        rehearsed all through the present reality, otherwise called Usui reiki.
                                    </p>
                                </div>
                            </a>
                            <div class="moreDetailBtn"><a href="{{ route('home.reiki-course') }}" class=""><span>Learn More <i
                                            class="fa-solid fa-arrow-right"></i></span></a></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="coursesCard">
                            <a href="{{ route('home.graphology-course') }}" class="">
                                <div class="coursesHeader">
                                    <div class="courseImg">
                                        <span> <img
                                                src="{{ asset('front') }}/assets/img/courses/graphology-1-150x150.webp"
                                                alt="graphology course"></span>
                                    </div>
                                </div>
                                <div class="courseContent">
                                    <h3>
                                        Graphology Course
                                    </h3>
                                    <p>
                                        Graphology is the investigation of how a person’s handwriting demonstrates their
                                        personal qualities. Also, it depends on the mental idea of ‘abnormality.
                                    </p>
                                </div>
                            </a>
                            <div class="moreDetailBtn"><a href="{{ route('home.graphology-course') }}" class=""><span>Learn
                                        More <i class="fa-solid fa-arrow-right"></i></span></a></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="coursesCard">
                            <a href="{{ route('home.yoga-course') }}" class="">
                                <div class="coursesHeader">
                                    <div class="courseImg">
                                        <span> <img
                                                src="{{ asset('front') }}/assets/img/courses/13082-Custom-min-e1687089102823-300x266.webp"
                                                alt="yoga course"></span>
                                    </div>
                                </div>
                                <div class="courseContent">
                                    <h3>
                                        Yoga Course
                                    </h3>
                                    <p>
                                        A yoga course is a structured program taught by certified instructors, designed
                                        to teach students yoga postures, breathing techniques, and meditation.
                                    </p>
                                </div>
                            </a>
                            <div class="moreDetailBtn"><a href="{{ route('home.yoga-course') }}" class=""><span>Learn More <i
                                            class="fa-solid fa-arrow-right"></i></span></a></div>
                        </div>
                    </div>






                </div>
            </div>

            <div class="viewAllCourses">
                <div class="defaultBtn courses-sec-btn mt-4"><a href="{{ route('home.all-courses') }}" class=""><span>View all
                            Courses <i class="fa-solid fa-arrow-right"></i></span></a></div>
            </div>
        </div>
    </section>


    <!-- Features -->


    <section class="actions pt-50 pb-50 homeFeatures">
        <div class="site-width">
            <div class="titleSection withbg2">
                <div class="text-center">
                    <h2>
                        Why We Are <span>Best</span> Institute
                    </h2>
                    <!-- <h4>
                        We offer top courses in Occult Science
                    </h4> -->
                </div>
            </div>
            <div class="actionWrapper">
                <div class="row">
                    <div class="col-md-4 wow animate__zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <div class="productListCard actionsCard">
                            <div class="prListCard">
                                <div class="prCardImg">
                                    <img src="{{ asset('front') }}/assets/img/icons/live-classes.png"
                                        alt="All India Institute of Occult Science">
                                </div>
                                <div class="prCardContent">
                                    <div class="prCCWrap">
                                        <h3>
                                            Live Interactive Class
                                        </h3>
                                        <p>
                                            We provide Live online interactive classes to our students through our
                                            Mobile Application (Android and iOS) and Web App.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow animate__zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <div class="productListCard actionsCard">
                            <div class="prListCard">
                                <div class="prCardImg">
                                    <img src="{{ asset('front') }}/assets/img/icons/recoded-sessions.png"
                                        alt="All India Institute of Occult Science">
                                </div>
                                <div class="prCardContent">
                                    <div class="prCCWrap">
                                        <h3>
                                            Recorded Sessions
                                        </h3>
                                        <p>
                                            We provide class recording to our students, so in case you miss the class,
                                            recording of your live class gets uploaded on our application.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow animate__zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <div class="productListCard actionsCard">
                            <div class="prListCard">
                                <div class="prCardImg">
                                    <img src="{{ asset('front') }}/assets/img/icons/Completion-Certificate.png"
                                        alt="All India Institute of Occult Science">
                                </div>
                                <div class="prCardContent">
                                    <div class="prCCWrap">
                                        <h3>
                                            Completion Certificate
                                        </h3>
                                        <p>
                                            We provide certificate after the successful completion of the course which
                                            includes examinations. Certificate is valid all over India.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- About Us -->

    <section class="aboutSection aboutbg aboutlearn-sec sectionscroll aboutpadding wow animate__fadeIn"
        id="scrolling-container">
        <div class="site-width">
            <div class="row align-item-center">
                <div class="col-lg-6 col-md-6">
                    <div class="aboutSideWrapper forresponsive">
                        <div class="aboutImgContainer">
                            <div class="aboutImg position-relative ">
                                <span class="aboutMainImg">
                                    <img src="{{ asset('front') }}/assets/img/other/about-us-video-thumb.jpg"
                                        alt="All India Institute of Occult Science" class="">
                                </span>
                                <div class="video-player">
                                    <div class="other-tools d-flex justify-content-center align-items-center">
                                        <a href="https://youtu.be/gkJHMZOxgKY" class="pulse" data-lity="">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="otherTextures">
                                    <img src="{{ asset('front') }}/assets/img/texture/dot-texture.png" alt="img"
                                        class="dotTexture">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="aboutSideContentsWrapper">
                        <div class="aboutSideContents">
                            <div class="aboutSide">
                                <!-- <h5></h5> -->
                                <h2>
                                    Learn more about <br>
                                    <span>Occult</span> Courses
                                </h2>
                                <div class="aboutParagraph aboutParagraphmob">
                                    <p>
                                        All India Institute of Occult Science is the premier Institute for Occult
                                        Studies. We strive to make learning flexible worldwide by providing the best
                                        Online platforms for Occult Studies where people of different ages gain
                                        knowledge in occult subjects, like Astrology, Vastu, Numerology, Palmistry,
                                        Tarot Card Reading, Reiki, etc. Institute provides both Online and Offline mode
                                        of education, with short batches of a maximum of 10 – 15 students.
                                    </p>
                                </div>
                                <div class="defaultBtn mt-3"><a href="{{ route('home.about-us') }}" class=""><span>About
                                            Institute <i class="fa-solid fa-arrow-right"></i></span></a></div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="counterSection">
            <div class="site-width">
                <div class="col-md-12 coutnersContainer">
                    <div class="countersWrap">
                        <div id="inview-example" class="countersWraper">
                            <div class="row justify-content-section align-item-center">
                                <div class="col-md-3 col-6 pr-sm-0 wow animate__zoomIn" data-wow-delay="0.2s"
                                    style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
                                    <div class="common-box common-box-mob">
                                        <div class="counterIcon">
                                            <img src="{{ asset('front') }}/assets/img/icons/lotus-icon.png"
                                                alt="All India Institute of Occult Science">
                                        </div>
                                        <div class="counter-num">
                                            <h3 class="timer" data-count="75000">0</h3>
                                            <span>+</span>
                                        </div>
                                        <div class="counter-text">Students
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 wow animate__zoomIn" data-wow-delay="0.4s"
                                    style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                                    <div class="common-box common-box-mob ">
                                        <div class="counterIcon">
                                            <img src="{{ asset('front') }}/assets/img/icons/lotus-icon.png"
                                                alt="All India Institute of Occult Science">
                                        </div>
                                        <div class="counter-num">
                                            <h3 class="timer" data-count="8000">0</h3>
                                            <span>+</span>
                                        </div>
                                        <div class="counter-text">Classes</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 wow animate__zoomIn" data-wow-delay="0.4s"
                                    style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                                    <div class="common-box">
                                        <div class="counterIcon">
                                            <img src="{{ asset('front') }}/assets/img/icons/lotus-icon.png"
                                                alt="All India Institute of Occult Science">
                                        </div>
                                        <div class="counter-num">
                                            <h3 class="timer" data-count="7">0</h3>
                                            <span>+</span>
                                        </div>
                                        <div class="counter-text">Courses</div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 wow animate__zoomIn" data-wow-delay="0.4s"
                                    style="visibility: visible; animation-delay: 0.4s; animation-name: zoomIn;">
                                    <div class="common-box">
                                        <div class="counterIcon">
                                            <img src="{{ asset('front') }}/assets/img/icons/lotus-icon.png"
                                                alt="All India Institute of Occult Science">
                                        </div>
                                        <div class="counter-num">
                                            <h3 class="timer" data-count="15">0</h3>
                                            <span>+</span>
                                        </div>
                                        <div class="counter-text">Educators</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- counter Section -->

    <!-- Founder -->

    <section class="aboutSection aboutbg sectionscroll foungerSection pt-50 pb-50 wow animate__fadeIn">
        <div class="site-width">
            <div class="row align-item-center col-reverse justify-content-space-between">
                <div class="col-lg-5 col-md-5">
                    <div class="aboutSideWrapper forresponsive">
                        <div class="aboutImgContainer">
                            <div class="aboutImg position-relative ">
                                <span class="aboutMainImg">
                                    <img src="{{ asset('front') }}/assets/img/other/PNG-2-1024x1024-min-1-1-e1673247467133.webp"
                                        alt="Gurudev Shrie Kashyap" class="">
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="aboutSideContentsWrapper">
                        <div class="aboutSideContents">
                            <div class="aboutSide">
                                <h2>
                                    Our Founder & Team

                                </h2>
                                <div class="aboutParagraph aboutParagraphmob">
                                    <p>
                                        The Institute is formed by Gurudev Shrie Kashyap, who is a leading Astrologer
                                        having a large chain of satisfied clients and students across the globe. His
                                        journey started with self-realization and he has since then been working to help
                                        each and everyone around with a thought to realize the self and also uncover the
                                        hidden truth.
                                    </p>
                                    <p>
                                        He has been for long working to spread the knowledge of Vedic Astrology, Vedic
                                        Vaastu, Numerology, and much more. In the process of spreading the knowledge, he
                                        has been associated with multiple institutes within and outside Delhi.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>



            </div>
        </div>

    </section>


    <section class="actions homeLiveClass homeLiveClassmob">
        <div class="site-width">
            <div class="liveClassHomeWrapper">
                <div class="row justify-content-center">
                    <div class="col-md-10 wow animate__zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <div class="productListCard actionsCard">
                            <div class="prListCard">
                                <div class="titleSection">
                                    <div class="text-center">
                                        <h2>
                                            FREE LIVE <span>ONLINE DEMO </span> CLASS
                                        </h2>
                                    </div>
                                </div>
                                <div class="prCardContent">
                                    <div class="prCCWrap">
                                        <h3>
                                            <!-- 19TH OF MAY (SUNDAY) 2:00 PM - 4:00 PM -->
                                            22nd of december (Sunday) 2:00 PM - 4:00 PM
                                        </h3>
                                        <p>
                                            Book your Live Interactive Demo Session that is going to be Hosted by the
                                            Head Faculty by clicking on the button below & fill out your details, our
                                            Representative will call you ASAP. Take a step to Build your Career As a
                                            Certified Occult Master.
                                        </p>
                                    </div>
                                    <div class="viewAllCourses">
                                        <div class="defaultBtn mt-4"><a href="tel:9672-436-436"
                                                class=""><span>Call Us Now <i
                                                        class="fa-solid fa-arrow-right"></i></span></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- why choose us -->

    <section class="whyChooseUs whyChooseUshome position-relative wow animate__fadeIn">
        <div class="bg3">
            <img src="{{ asset('front') }}/assets/img/bgs/main-texture.webp" alt="bg-img">
        </div>
        <div class="site-width pt-50 pb-50">
            <div class="row whyRowContainer align-item-center">
                <div class="col-md-6">
                    <div class="studentVideoTestiWrapper">
                        <div id="sync1" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="aboutImg position-relative ">
                                    <span class="aboutMainImg">
                                        <img src="{{ asset('front') }}/assets/img/testimonials/mrs-megha-chaturvedi.webp"
                                            alt="All India Institute of Occult Science" class="">
                                    </span>
                                    <div class="video-player">
                                        <div class="other-tools d-flex justify-content-center align-items-center">
                                            <a href="https://youtu.be/m2ktMj9q9O0?list=PL9fm0GAUOLMUhaxzrt7MZ5GLScCnl-5ig&t=15"
                                                class="pulse" data-lity="">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="aboutImg position-relative ">
                                    <span class="aboutMainImg">
                                        <img src="{{ asset('front') }}/assets/img/testimonials/mrs-upma-kalia.webp"
                                            alt="All India Institute of Occult Science" class="">
                                    </span>
                                    <div class="video-player">
                                        <div class="other-tools d-flex justify-content-center align-items-center">
                                            <a href="https://www.youtube.com/watch?v=PdpF_uzu3lw&list=PL9fm0GAUOLMUhaxzrt7MZ5GLScCnl-5ig&index=29"
                                                class="pulse" data-lity="">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="aboutImg position-relative ">
                                    <span class="aboutMainImg">
                                        <img src="{{ asset('front') }}/assets/img/testimonials/mrs-vanshika-gupta.webp"
                                            alt="All India Institute of Occult Science" class="">
                                    </span>
                                    <div class="video-player">
                                        <div class="other-tools d-flex justify-content-center align-items-center">
                                            <a href="https://www.youtube.com/watch?v=OYUgaEcofBY&list=PL9fm0GAUOLMUhaxzrt7MZ5GLScCnl-5ig&index=28"
                                                class="pulse" data-lity="">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="aboutImg position-relative ">
                                    <span class="aboutMainImg">
                                        <img src="{{ asset('front') }}/assets/img/testimonials/mrs-mala-aryal.webp"
                                            alt="All India Institute of Occult Science" class="">
                                    </span>
                                    <div class="video-player">
                                        <div class="other-tools d-flex justify-content-center align-items-center">
                                            <a href="https://www.youtube.com/watch?v=xDEMxmkJ8o0&list=PL9fm0GAUOLMUhaxzrt7MZ5GLScCnl-5ig&index=25"
                                                class="pulse" data-lity="">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="aboutImg position-relative ">
                                    <span class="aboutMainImg">
                                        <img src="{{ asset('front') }}/assets/img/testimonials/mrs-tejaswini-oberoi.webp"
                                            alt="All India Institute of Occult Science" class="">
                                    </span>
                                    <div class="video-player">
                                        <div class="other-tools d-flex justify-content-center align-items-center">
                                            <a href="https://www.youtube.com/watch?v=lGbpWcZA2Ao&list=PL9fm0GAUOLMUhaxzrt7MZ5GLScCnl-5ig&index=24"
                                                class="pulse" data-lity="">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="aboutImg position-relative ">
                                    <span class="aboutMainImg">
                                        <img src="{{ asset('front') }}/assets/img/testimonials/mrs-ruchi-kathpalia.webp"
                                            alt="All India Institute of Occult Science" class="">
                                    </span>
                                    <div class="video-player">
                                        <div class="other-tools d-flex justify-content-center align-items-center">
                                            <a href="https://www.youtube.com/watch?v=l3cGpAHBWXk&list=PL9fm0GAUOLMUhaxzrt7MZ5GLScCnl-5ig&index=23"
                                                class="pulse" data-lity="">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div id="sync2" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="aboutImg position-relative ">
                                    <span class="aboutMainImg">
                                        <img src="{{ asset('front') }}/assets/img/testimonials/mrs-megha-chaturvedi.webp"
                                            alt="All India Institute of Occult Science" class="">
                                    </span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="aboutImg position-relative ">
                                    <span class="aboutMainImg">
                                        <img src="{{ asset('front') }}/assets/img/testimonials/mrs-upma-kalia.webp"
                                            alt="img" class="">
                                    </span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="aboutImg position-relative ">
                                    <span class="aboutMainImg">
                                        <img src="{{ asset('front') }}/assets/img/testimonials/mrs-vanshika-gupta.webp"
                                            alt="img" class="">
                                    </span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="aboutImg position-relative ">
                                    <span class="aboutMainImg">
                                        <img src="{{ asset('front') }}/assets/img/testimonials/mrs-mala-aryal.webp"
                                            alt="img" class="">
                                    </span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="aboutImg position-relative ">
                                    <span class="aboutMainImg">
                                        <img src="{{ asset('front') }}/assets/img/testimonials/mrs-tejaswini-oberoi.webp"
                                            alt="img" class="">
                                    </span>
                                </div>
                            </div>
                            <div class="item">
                                <div class="aboutImg position-relative ">
                                    <span class="aboutMainImg">
                                        <img src="{{ asset('front') }}/assets/img/testimonials/mrs-ruchi-kathpalia.webp"
                                            alt="img" class="">
                                    </span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-md-6">
                    <div class="titleSection leftAlign">
                        <div class="h-why-tit">
                            <h2>
                                Why Our Students Love Us So Much ?
                            </h2>
                        </div>
                    </div>
                    <div class="whyChooseCardWrap">
                        <div class="whyqoutline">
                            <h6>Our Gurudev Shrie Kashyap Believes In One Quote <span>"ज्ञान से बड़ा कोई दान नहीं, और
                                    गुरु से बड़ा कोई दानी नहीं I Common points given by our Students."</span></h6>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="whyUsWrapper">
                                    <ul class="normalList">
                                        <li>
                                            24×7 support is being provided by the Institute
                                        </li>
                                        <li>
                                            Everyone presented in the Institute is very cooperative.
                                        </li>
                                        <li>
                                            Each and every doubt is being cleared within 24 hours.
                                        </li>
                                        <li>
                                            Both theoretical and practical knowledge is being provided by the Institute.
                                        </li>
                                        <li>
                                            This institute is the Best Institute for all the Occult science Courses.
                                        </li>
                                        <li>
                                            Faculty is very good by nature and behavior.
                                        </li>
                                        <li>
                                            Each and every concept is being taught in detail and with logic.

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Some Important Links -->

    <!-- <section class="importantlinks bg-1 pt-50 pb-50 wow animate__fadeIn">
        <div class="site-width">
            <div class="titleSection">
                <div class="text-center">
                    <h2>
                        Our Partners
                    </h2>
                    <h4>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h4>
                </div>
            </div>
            <div class="importantLinkWrapper">
                <div class="ImpLinkCarousel owl-carousel owl-theme">
                    <div class="item">
                        <a href="javascript:void(0)">
                            <div class="importantLinkCard">
                                <div class="importantLinkIcon">
                                    <img src="{{ asset('front') }}/assets/img/partners/img1.jpg" alt="icon">
                                </div>
                                <div class="importantLinkContent">
                                    <h3>
                                        Lorem ipsum dolor sit
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)">
                            <div class="importantLinkCard">
                                <div class="importantLinkIcon">
                                    <img src="{{ asset('front') }}/assets/img/partners/img2.jpg" alt="icon">
                                </div>
                                <div class="importantLinkContent">
                                    <h3>
                                        Lorem ipsum dolor sit
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)">
                            <div class="importantLinkCard">
                                <div class="importantLinkIcon">
                                    <img src="{{ asset('front') }}/assets/img/partners/img3.jpg" alt="icon">
                                </div>
                                <div class="importantLinkContent">
                                    <h3>
                                        Lorem ipsum dolor sit
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)">
                            <div class="importantLinkCard">
                                <div class="importantLinkIcon">
                                    <img src="{{ asset('front') }}/assets/img/partners/img4.jpg" alt="icon">
                                </div>
                                <div class="importantLinkContent">
                                    <h3>
                                        Lorem ipsum dolor sit
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="javascript:void(0)">
                            <div class="importantLinkCard">
                                <div class="importantLinkIcon">
                                    <img src="{{ asset('front') }}/assets/img/partners/img5.jpg" alt="icon">
                                </div>
                                <div class="importantLinkContent">
                                    <h3>
                                        Lorem ipsum dolor sit
                                    </h3>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Testimonails -->
    @if (!empty($testimonials))
    <section class="ourTestimonials bg-4 pt-50 pb-50 wow animate__fadeIn">
        <div class="site-width">
            <div class="titleSection light">
                <div class="text-center">
                    <h2>
                        OUR TESTIMONIAL
                    </h2>
                    <h2 class="titlH2">
                        WHAT OUR STUDENTS SAY ABOUT US ?
                    </h2>
                </div>
            </div>
            <div class="testimonialsWrapper">
                <div class="testimonialsCarousel owl-carousel owl-theme">
                    @foreach ($testimonials as $item)
                    <div class="item">
                        <div class="testimonialCard">
                            <div class="testiContent">
                                <p>
                                    {{ $item->content }}
                                </p>
                            </div>
                            <div class="testiauthor">
                                <!-- <div class="testiimg">
                                    <img src="{{ asset('front') }}/assets/img/testimonials/img-1.jpg" alt="img">
                                </div> -->
                                <div class="testiauthorContent">
                                    <span class="testititle">
                                        {{ $item->name }}
                                    </span>
                                    <p>
                                        {{ $item->destination }}
                                    </p>
                                </div>
                            </div>
                            <i class="fa-solid fa-quote-right testiqoute"></i>
                        </div>
                    </div>
                    @endforeach
                 

                </div>
            </div>
        </div>
    </section>      
    @endif



    <!-- Contact Form -->
    <section class="aboutSection  homeFormSection bg-1 wow animate__fadeIn">
        <div class="site-width">
            <div class="row align-item-center justify-content-space-between">
                <div class="col-lg-5 col-md-5">
                    <div class="hctFromContainer">
                        <div class="hctf">
                            <div class="hctfTitle">
                                <h2>
                                    Fill this Form To Get Course Details
                                </h2>
                                <h2 class="formH2Sub">
                                    We will Provide you all the Course Details, Offers & Syllabus
                                </h2>
                            </div>
                            <div class="formWrapper">
                                <div class="formInner">
                                        <form action="{{ route('home.genral-enquiry') }}" method="POST" id="genralenquiry"
                                        data-parsley-validate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span>Your Name </span><span style="color: red;">*</span>
                                                    <input type="text" class="form-control" name="name"
                                                        onkeypress="return /[a-z-/ /]/i.test(event.key)"
                                                        required placeholder="Name">
                                                        <span class="text-danger" id="error-name"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span for="">Your Number </span><span
                                                        style="color: red;">*</span>
                                                    <input type="text" class="form-control" name="phone"
                                                        onkeypress="return /[0-9-/]/i.test(event.key)" minlength="10"
                                                        maxlength="10" required="" placeholder="Number">
                                                        <span class="text-danger" id="error-phone"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span for="">Your Email</span> <span
                                                        style="color: red;">*</span>
                                                    <input type="email" class="form-control" name="email"
                                                        required="" placeholder="Email">
                                                        <span class="text-danger" id="error-email"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label for=""></label>

                                                <div style="text-align: center;">
                                                    <div class="formSubmitBtn ">
                                                        <button onclick="SendGenralEnquiry()"
                                                            type="button" class="btn1">
                                                            Submit Now
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="homeFormWrapper">
                        <div class="titleSection leftAlign">
                            <div class="">
                                <span class="form-subtit">BOOK FREE LIVE DEMO CLASS</span>
                                <h2>
                                    FREE LIVE ONLINE DEMO CLASS
                                </h2>
                            </div>
                        </div>
                        <div class="whyChooseCardWrap">
                            <div class="whyqoutline">
                                <h3> <span> 22nd of december (Sunday) 2:00 PM - 4:00 PM</span></h3>
                            </div>
                            <div class="aboutParagraph aboutParagraphmob">
                                <p>
                                    Book your Live Interactive demo Session that is going to conduct by the Head Faculty
                                    by clicking on the button below & fill out your details, our Representative will
                                    call you ASAP. Take a step to Build your Career As Certified Occult Master.
                                </p>
                            </div>
                            <div class="defaultBtn mt-3"><a href="tel:9672-436-436" class=""><span>Call Us
                                        Now <i class="fa-solid fa-arrow-right"></i></span></a></div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <!-- Our News and Articles -->





    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function SendGenralEnquiry() {
            $('.text-danger').text('');
            var isValid = $('#genralenquiry').parsley().validate();
            // var isValid = $('#bulkOrderForm').parsley().validate();
            if (!isValid) {
                return;
            }
            Swal.fire({
                title: 'Please wait...',
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    Swal.showLoading()
                }
            });

            var action = $('#genralenquiry').attr('action');
            var formData = new FormData($('#genralenquiry')[0]);
            $.ajax({
                type: "POST",
                url: action,
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.status == 'true') {
                        // Show an alert for successful registration
                        Swal.close();

                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: data.message,
                        }).then(function() {
                            // Redirect to a URL
                            // window.location.href = '{{ url('admin/product/list') }}';
                            location.reload();

                        });
                    }
                },
                error: function(xhr) {
                    Swal.close();
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        $('#error-' + key).text(value[0]);

                        // toastr.options = {
                        //     "closeButton": true,
                        //     "progressBar": true
                        // }
                        // toastr.error(value[0]);
                    });
                }
            });
        }
    </script>

@endsection
