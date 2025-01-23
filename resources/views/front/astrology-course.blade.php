@extends('front.layouts.master')
@section('section')
    <!-- Inner Banner -->
    <section class="inrbnr certiMainPage pt-50 pb-50"
        style="background-image: url({{ asset('front') }}/assets/img/bgs/bg-astrology-course.jpg);">

        <div class="site-width">
            <div class="row align-item-center">
                <div class="col-md-7">
                    <div class="inrbnrContent">
                        <div class="inrbnrtext">
                            <h1>Learn Astrology Like Never Before</h1>
                            <h2>Be a Professional Astrologer</h2>
                            <div class="certibnrDesc">
                                <p class="text-justify">
                                    We welcome you to enroll in our interesting online Astrology course , where you will
                                    explore the fascinating universe of cosmic mysteries in simple ways. Get ready to
                                    explore the cosmic connections that influence our lives and learn about the secrets
                                    Astrology has to offer.
                                </p>
                                <p><span>This is a Professional Course</span></p>
                            </div>
                            <div class="certiMainPrice">
                                <div class="certiActionBtn">
                                    <div class="defaultBtn text-center"><a href="tel:9672-436-436" class=""><span>Call Us Now</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="hctFromContainer">
                        <div class="hctf">
                            <div class="hctfTitle text-center">
                                <h2>
                                    Fill Out The Forms To Get Course Details
                                </h2>
                            </div>
                            <div class="formWrapper">
                                <div class="formInner">
                                    <form action="{{ route('home.course-enquiries') }}" method="POST" id="courceenquiry"
                                    data-parsley-validate>
                                    @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span>Your Name </span><span style="color: red;">*</span>
                                                    <input type="hidden" name="cource_name" value="Astrology" id="">
                                                    <input type="text" class="form-control" name="name"
                                                        onkeypress="return /[a-z-/ /]/i.test(event.key)" required=""
                                                        placeholder="Name">
                                                        <span class="text-danger" id="error-name"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span for="">Your Number </span><span style="color: red;">*</span>
                                                    <input type="text" class="form-control" name="phone"
                                                        onkeypress="return /[0-9-/]/i.test(event.key)" minlength="10"
                                                        maxlength="10" required="" placeholder="Number">
                                                        <span class="text-danger" id="error-phone"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span for="">Your Email</span> <span style="color: red;">*</span>
                                                    <input type="email" class="form-control" name="email" required=""
                                                        placeholder="Email">
                                                        <span class="text-danger" id="error-email"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label for=""></label>

                                                <div style="text-align: center;">
                                                    <div class="formSubmitBtn ">
                                                        <button onclick="CourceEnquiry()" type="button"   class="btn1">
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
            </div>
        </div>
    </section>




    <section class="aboutSection aboutbg sectionscroll aboutpadding wow animate__fadeIn courseCertificate" id="scrolling-container">
        <div class="site-width">
            <div class="titleSection">
                <div class="text-center">
                    <h2>
                        How will your <span>Certificate</span> looks Like
                    </h2>
                </div>
            </div>
            <div class="row align-item-center">
                <div class="col-lg-6 col-md-6">
                    <div class="certificateWrapper">
                        <div class="column">
                            <div class="widget-wrap">
                                <div class="widget-heading">
                                    <h2>ALL INDIA INSTITUTE OF OCCULT SCIENCE</h2>
                                </div>
                                <div class="widget-image">
                                    <img src="https://www.occultscience.in/wp-content/uploads/2021/07/WEBSITE_HEADER_LOGO.png"
                                        alt="Logo" width="186" height="186">
                                </div>
                                <div class="widget-html">
                                    <form>
                                        <input type="text" id="fname" name="fname" placeholder="Enter your Name here">
                                    </form>
                                    <script>
                                        const form = document.getElementById('fname');
                                        form.addEventListener('keypress', function (e) {
                                            if (e.keyCode === 13) {
                                                e.preventDefault();
                                            }
                                        });
                                    </script>
                                </div>
                                <div class="certificationNormalHeading">
                                    <span>Has Earned a</span>
                                </div>
                                <div class="widget-heading">
                                    <h2>CERTIFICATION OF SPECIALIZATION <br>IN MASTER IN ASTROLOGY</h2>
                                </div>
                                <div class="widget-text-editor">
                                    <p>We wish all the success and Blessings for his advancement in the field of Vedic
                                        Sciences</p>
                                </div>
                                <div class="inner-section rollInfo">
                                    <div class="column">
                                        <div class="widget-heading widget-heading-no">
                                            <h2>Reg. No. <b>2023-02-XXX</b></h2>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="widget-heading widget-heading-no">
                                            <h2>Roll No. <b>1023-XXX</b></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="inner-section badgeImg">
                                    <div class="column">
                                        <div class="widget-image">
                                            <img src="https://www.occultscience.in/wp-content/uploads/2023/06/Untitled-1-e1685782342400.webp"
                                                alt="Image" width="164" height="186">
                                        </div>
                                    </div>
                                </div>
                                <div class="inner-section issuingAutho">
                                    <div class="column">
                                        <div class="widget-heading">
                                            <span>Jan 31, 2023</span>
                                        </div>
                                        <div class="widget-divider">
                                            <span class="divider-separator"></span>
                                        </div>
                                        <div class="widget-heading">
                                            <h2>Issued on</h2>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="widget-heading">
                                            <span>signature</span>
                                        </div>
                                        <div class="widget-divider">
                                            <span class="divider-separator"></span>
                                        </div>
                                        <div class="widget-heading">
                                            <h2>Director</h2>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="widget-heading">
                                            <span>signature</span>
                                        </div>
                                        <div class="widget-divider">
                                            <span class="divider-separator"></span>
                                        </div>
                                        <div class="widget-heading">
                                            <h2>Chairman</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="inner-section certificateValidation">
                                    <div class="column">
                                        <div class="widget-heading validtitle">
                                            <p>www.occultscience.in</p>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="widget-image certificateqrCode">
                                            <img src="https://www.occultscience.in/wp-content/uploads/2023/06/f-1.png"
                                                alt="Logo" width="164" height="164">
                                        </div>
                                        <div class="widget-heading validtitle">
                                            <h2>Valid Certificate QR</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="aboutSideContentsWrapper" style="margin:0px ;">
                        <div class="aboutSideContents">
                            <div class="aboutSide">
                                <h2 class="coursesh2">Earn a Certificate from the All India Institute of Occult Science to Start Your
                                    Astrological Wisdom Journey!</h2>
                                <div class="aboutParagraph aboutParagraphmo">
                                    <p>
                                        Are you willing to explore the fascinating world of Vedic Astrology? Look
                                        nowhere else! Welcome to the All India Institute of Occult Science, the top
                                        organization providing an Astrology Course. Get a prestigious certificate!
                                    </p>
                                </div>
                                <h2 class="coursesh2">Experienced Teachers:</h2>
                                <div class="aboutParagraph aboutParagraphmo">
                                    <p>
                                        Learn from highly experienced teachers who have experience of more than 10 years
                                        in teaching and implementing.
                                    </p>
                                </div>
                                <h2 class="coursesh2">Practical Training:</h2>
                                <div class="aboutParagraph aboutParagraphmo">
                                    <p>
                                        Gain real-world experience while learning through case studies.
                                    </p>
                                </div>
                                <h2 class="coursesh2">Interactive Learning Environment:</h2>
                                <div class="aboutParagraph aboutParagraphmo">
                                    <p>
                                        Engage in live discussions, participate in group discussions, and connect with
                                        your classmates on discussion forums.
                                    </p>
                                </div>
                                <h2 class="coursesh2">Continued Support:</h2>
                                <div class="aboutParagraph aboutParagraphmo">
                                    <p>
                                        Take advantage of ongoing support after completing the course.
                                    </p>
                                    <p>
                                        Are you ready to start your life-changing Astrological journey?
                                    </p>
                                    <p>
                                        Enroll in the All India Institute of Occult Sciences Astrology course.
                                        <strong>Join now to learn Vedic Astrology.</strong>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="whyChooseUs whyChooseUscourse position-relative wow animate__fadeIn pt-50 pb-50"
        style="background: linear-gradient(180deg, #ffe3d8cf, #fff2d1d1);">
        <div class="bg3">
            <img src="{{ asset('front') }}/assets/img/bgs/main-texture.webp" alt="bg-img">
        </div>
        <div class="site-width">
            <div class="row whyRowContainer align-item-center">
                <div class="col-md-6">
                    <div class="aboutSideWrapper forresponsive">
                        <div class="aboutImg position-relative ">
                            <span class="aboutMainImg">
                                <img src="{{ asset('front') }}/assets/img/other/Astro.webp" alt="astrology course" class="">
                            </span>
                            <div class="otherTextures">
                                <img src="{{ asset('front') }}/assets/img/texture/dot-texture.png" alt="img" class="dotTexture">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="titleSection leftAlign withbg2">
                        <div class="">
                            <h2>
                                About Our Astrology Course
                            </h2>
                        </div>
                    </div>
                    <div class="whyChooseCardWrap">
                        <div class="whyqoutline">
                            <p>
                                Our Astrology course is the perfect opportunity for you to do just that! This
                                comprehensive course will give you a greater understanding of the language of the stars
                                and their role in the cosmos. Our experienced teachers will help you to identify the
                                patterns and archetypes within your astrological chart and use them to provide insight
                                into your life and those around you.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="whyUsWrapper">
                                    <ul class="normalList">
                                        <li>
                                            Learn more about the influence of cosmic patterns on our lives and the
                                            appealing universe they inhabit.
                                        </li>
                                        <li>
                                            Learn everything there is to know about astrological meaning, planetary
                                            influences, and birth charts.
                                        </li>
                                        <li>
                                            Learn about the roots of astrology in an updated and accessible way.
                                        </li>
                                        <li>
                                            Well-prepared curriculum by top astrologers and subject matter experts.
                                        </li>
                                    </ul>
                                    <div class="defaultBtn mt-3"><a href="{{ route('home.enquiry') }}" class=""><span>Book Live Demo
                                                Session</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="methodofTeaching pt-50 pb-50 ">
        <div class="site-width">
            <div class="titleSection ">
                <div class="text-center">
                    <h2>
                        Methods Of Teaching <span>Astrology</span>:
                    </h2>
                </div>
            </div>
            <div class="actionWrapper">
                <div class="row justify-content-center">
                    <div class="col-md-4 wow animate__zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <div class="productListCard actionsCard">
                            <div class="prListCard">
                                <div class="prCardImg">
                                    <img src="{{ asset('front') }}/assets/img/bgs/astroMethod1.png" alt="scientific method">
                                </div>
                                <div class="prCardContent">
                                    <div class="prCCWrap">
                                        <h2 class="prListh2">
                                            Scientific Method
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow animate__zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <div class="productListCard actionsCard">
                            <div class="prListCard">
                                <div class="prCardImg">
                                    <img src="{{ asset('front') }}/assets/img/bgs/astroMethod2.png" alt="vedic method">
                                </div>
                                <div class="prCardContent">
                                    <div class="prCCWrap">
                                        <h2 class="prListh2">
                                            Vedic Method
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="whyChooseUs whattopicincourse whatwithlearn position-relative wow animate__fadeIn pt-50 pb-50"
        style="background: linear-gradient(#ffe3d8cf, #fff2d1d1);">
        <div class="bg3">
            <img src="{{ asset('front') }}/assets/img/bgs/main-texture.webp" alt="bg-img">
        </div>
        <div class="site-width">
            <div class="row whyRowContainer">
                <div class="col-md-6">
                    <div class="aboutSideWrapper forresponsive">
                        <div class="aboutImg position-relative ">
                            <span class="aboutMainImg">
                                <img src="{{ asset('front') }}/assets/img/other/astro-img2.webp" alt="astrology course" class="">
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="titleSection leftAlign withbg2">
                        <div class="">
                            <h2>
                                What will you learn with us?
                            </h2>
                            <h3 class="learTitleh3">
                                1st part of Syllabus -: Download Full Syllabus Below
                            </h3>
                        </div>
                    </div>
                    <div class="FAQsWrapper">
                        <div class="FAQsWrapperCard">
                            <div class="question">
                                Introduction to Astrology
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <ul class="normalList">
                                        <li>What is Astrology</li>
                                        <li>Originator of Astrology</li>
                                        <li>Vedang Astrology</li>
                                        <li>Salient Features of Indian Astrology</li>
                                        <li>Concept of Indian Astrology</li>
                                        <li>Roots of Indian Astrology</li>
                                        <li>Characteristics of Astrologer</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                Astronomy
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <ul class="normalList">
                                        <li>Introduction of Astronomy</li>
                                        <li>Astronomy as Geocentric and Heliocentric Orbit order according to Astrology
                                            and Science</li>
                                        <li>Relationship between Astronomy and Astrology</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                Zodiac Signs
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <ul class="normalList">
                                        <li>Nature of Zodiac</li>
                                        <li>Introduction of Zodiac Sign</li>
                                        <li>Zodiac Description</li>
                                        <li>Elements</li>
                                        <li>Lords of Zodiac</li>
                                        <li>Color</li>
                                        <li>Direction</li>
                                        <li>Rise of Zodiac</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                Yogas
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <ul class="normalList">
                                        <li>Stories of Planet</li>
                                        <li>Metals</li>
                                        <li>Gemstones</li>
                                        <li>Gender</li>
                                        <li>Mahadhasha</li>
                                        <li>Friendship of Planets</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                Bhava (Houses)
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <ul class="normalList">
                                        <li>What is Lagna</li>
                                        <li>Introduction of Houses</li>
                                        <li>Significant of Houses</li>
                                        <li>Classification of Houses</li>
                                        <li>Trikonas</li>
                                        <li>Trishday</li>
                                        <li>Upachay</li>
                                        <li>Anupachay</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                Types of Horoscope
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <ul class="normalList">
                                        <li>Types of Horoscope</li>
                                        <li>Different Types of Horoscope</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                Everything About Panchang
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <ul class="normalList">
                                        <li>Introduction to Panchang</li>
                                        <li>Pillars of Panchang</li>
                                        <li>Method of Viewing Panchang</li>
                                        <li>Importance of Panchang</li>
                                        <li>Samvastar</li>
                                        <li>Sankranti</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                Result of Birth
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <ul class="normalList">
                                        <li>Birth Ascendant</li>
                                        <li>Birth Tithi</li>
                                        <li>Birth Zodiac</li>
                                        <li>Birth Day</li>
                                        <li>Birth Constellation</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                Occult Science Special
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <ul class="normalList">
                                        <li>Janam Dosh</li>
                                        <li>Myth And Pearls of Kal Sarp Dosh</li>
                                        <li>Determine Birth Time</li>
                                        <li>Friendship Between Planets</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="defaultBtn mt-3"><a href="{{ route('home.course_dounbload_pdf') }}" class=""><span>Download course
                                Syllabus</span></a></div>
                </div>
            </div>

            <div class="whyBest">

            </div>
        </div>
    </section>

    <section class="whyChooseUs whattopicincourse whatwithlearn position-relative wow animate__fadeIn pt-50 pb-50"
        style="background: linear-gradient(#ffe3d8cf, #fff2d1d1);">
        <div class="bg3">
            <img src="{{ asset('front') }}/assets/img/bgs/main-texture.webp" alt="bg-img">
        </div>
        <div class="site-width">
            <div class="titleSection withbg2 text-center mb-4">
                <div class="">
                    <h2>
                        Why we are India's Best Institute
                    </h2>
                    <h2 class="courtitleh2">
                        All India Institute Of Occult Science
                    </h2>
                </div>
            </div>
            <div class="row whyRowContainer col-reverse">
                <div class="col-md-6">
                    <div class="aboutSideWrapper forresponsive">
                        <div class="aboutImg position-relative ">
                            <span class="aboutMainImg">
                                <img src="{{ asset('front') }}/assets/img/other/astro-img3.webp" alt="astrology course" class="">
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">

                    <div class="FAQsWrapper">
                        <div class="FAQsWrapperCard">
                            <div class="question">
                                Do you provide online Classes?
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <p>
                                        Yes, The Institute has been providing Live Online Interactive Class for 12
                                        years.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                How many students are there in a Batch?
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <p>There are only 10-15 students in a batch. So, that each student can get personal
                                        attention.</p>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                How will I solve my doubts?
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <p>
                                        All your doubts will be solved in the class itself. You can also ask your doubts
                                        over the application’s ‘Course discussion section’ where you can ask your doubts
                                        with your faculty and can also discuss with your batchmates
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                How are the classes conducted?
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <p>Our class is conducted through our own Mobile Application (Android and iOS) and
                                        Web App</p>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                What if I miss the class?
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <p>
                                        Recording of your live class gets uploaded on mobile application within 4 hours
                                        after the class gets over, so that you can revise it any time.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                Do you provide certificate and is your certificate Valuable?
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <p>Yes, You will be provided certificate after the successful completion of course
                                        (including examination), which is Valuable and recognizable all across the
                                        world.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="whyBest">

            </div>
        </div>
    </section>

    <section class="whyChooseUs whattopicincourse whatwithlearn position-relative wow animate__fadeIn pt-50 pb-50"
        style="background: linear-gradient(#ffe3d8cf, #fff2d1d1);">
        <div class="bg3">
            <img src="{{ asset('front') }}/assets/img/bgs/main-texture.webp" alt="bg-img">
        </div>
        <div class="site-width">
            <div class="titleSection withbg2 text-center mb-4">
                <div class="">
                    <h2>
                        Benefits of Joining Best Astrology Course in
                    </h2>
                    <h2 class="courtitleh2">
                        All India Institute Of Occult Science
                    </h2>
                </div>
            </div>
            <div class="row whyRowContainer">
                <div class="col-md-6">
                    <div class="aboutSideWrapper forresponsive">
                        <div class="aboutImg position-relative ">
                            <span class="aboutMainImg">
                                <img src="{{ asset('front') }}/assets/img/other/astro-img4.webp" alt="Gurudev Shrie Kashyap" class="">
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">

                    <div class="FAQsWrapper">
                        <div class="FAQsWrapperCard">
                            <div class="question">
                                Why should I Learn Astrology from AIIOS?
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <p>
                                        You should enroll in AIIOS, as We don’t believe in teaching, we believe in
                                        making you learn and implement. We aim to give you the best training from Basic
                                        to Professional level. The most important thing is that institute stay connected
                                        with you even after the completion of the course.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                What is the eligibility criteria to enroll?
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <p>The eligibility criteria for enrolling in Astrology Course is 10th pass.</p>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                Can I earn just after completing my Astrology Course?
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <p>
                                        Yes, definitely you will start earning after your course gets completed because
                                        we don’t just teach you, we educate you for the course along with practical
                                        training and sessions.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                How many levels our there in Astrology Course and Time Duration?
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <p>There are three levels in Astrology Course</p>
                                    <ul class="normalList">
                                        <li>Certificate in Astrology for 2 Months</li>
                                        <li>Diploma in Astrology for 3 Months</li>
                                        <li>Master in Astrology for 3 Months</li>
                                    </ul>
                                    <p>
                                        Duration of Course can extend more than the given time because we don’t focus on
                                        finishing the syllabus, we focus on making you learn
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                What will be the benefits of doing Astrology Course?
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <ul class="normalList">
                                        <li>You will be able to give Accurate Future Predictions</li>
                                        <li>You will Definitely Learn more than the Syllabus</li>
                                        <li>You will be able to make Vedic Astrology Birth Chart/Kundali</li>
                                        <li>You will be a Professional Astrologer</li>
                                    </ul>
                                    <p>
                                        You will be able to give Vedic Remedies and Solutions, etc..
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                What can you do after completing Astrology Course?
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <p>You can take it as a Profession</p>
                                    <ul class="normalList">
                                        <li>You will be a certified Astrologer</li>
                                        <li>You can predict accurately</li>
                                        <li>You can become a certified Astrology Teacher</li>
                                        <li>You can organize or conduct seminars for Astrology</li>
                                    </ul>
                                    <p>You will have a Never Ending Profession.</p>
                                </div>
                            </div>
                        </div>

                        <div class="FAQsWrapperCard">
                            <div class="question">
                                What is the process to become a certified astrologer?
                            </div>
                            <div class="answercont">
                                <div class="answer">
                                    <p>Becoming a Certified Astrologer involves a combination of education, practical
                                        experience, and professional certification. Becoming a certified astrologer
                                        demonstrates your dedication to the field, enhances your credibility, and allows
                                        you to serve clients with professionalism and expertise.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="whyBest">

            </div>
        </div>
    </section>

    <!-- Featured Course -->
    <section class="courses othrer-courses bg-1 pt-50 pb-50 wow animate__fadeIn">
        <div class="site-width">
            <div class="titleSection">
                <div class="text-center">
                    <h2>
                        Explore Other <span>Courses</span>
                    </h2>
                </div>
            </div>
            <div class="courseSlider">
                <div class="coursesCarousel owl-carousel owl-theme">
                    <div class="item">
                        <div class="coursesCard">
                            <a href="{{ route('home.vastu-course') }}" class="">
                                <div class="coursesHeader">
                                    <div class="courseImg">
                                        <span> <img src="{{ asset('front') }}/assets/img/courses/vastu-1-150x150.webp" alt="vastu course"></span>
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
                                        <span> <img src="{{ asset('front') }}/assets/img/courses/astrology-1-150x150.webp" alt="astrology course"></span>
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
                            <div class="moreDetailBtn"><a href="{{ route('home.astrology-course') }}" class=""><span>Learn More <i
                                            class="fa-solid fa-arrow-right"></i></span></a></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="coursesCard">
                            <a href="{{ route('home.tarot-card-course') }}" class="">
                                <div class="coursesHeader">
                                    <div class="courseImg">
                                        <span><img src="{{ asset('front') }}/assets/img/courses/tarot-1.webp" alt="tarot course"></span>
                                    </div>
                                </div>
                                <div class="courseContent">
                                    <h3>
                                        Tarot Card
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

                    <div class="item">
                        <div class="coursesCard">
                            <a href="{{ route('home.numerology') }}" class="">
                                <div class="coursesHeader">
                                    <div class="courseImg">
                                        <span><img src="{{ asset('front') }}/assets/img/courses/numerology-1-150x150.webp" alt="numerology course"></span>
                                    </div>
                                </div>
                                <div class="courseContent">
                                    <h3>
                                        Numerology
                                    </h3>
                                    <p>
                                        Numerology is the study of numbers in your day-to-day existence. Type of
                                        divination like astrology arrangements with associations among numbers.
                                    </p>
                                </div>
                            </a>
                            <div class="moreDetailBtn"><a href="{{ route('home.numerology') }}" class=""><span>Learn More <i
                                            class="fa-solid fa-arrow-right"></i></span></a></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="coursesCard">
                            <a href="{{ route('home.palmistry') }}" class="">
                                <div class="coursesHeader">
                                    <div class="courseImg">
                                        <span><img src="{{ asset('front') }}/assets/img/courses/palmistry-1.webp" alt="palmistry course"></span>
                                    </div>
                                </div>
                                <div class="courseContent">
                                    <h3>
                                        Palmistry
                                    </h3>
                                    <p>
                                        Palmistry, additionally called Chirology, is the magical specialty of perusing
                                        individuals’ palms to decide their fortunes and karma.
                                    </p>
                                </div>
                            </a>
                            <div class="moreDetailBtn"><a href="{{ route('home.palmistry') }}" class=""><span>Learn More <i
                                            class="fa-solid fa-arrow-right"></i></span></a></div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="coursesCard">
                            <a href="{{ route('home.reiki-course') }}" class="">
                                <div class="coursesHeader">
                                    <div class="courseImg">
                                        <span><img src="{{ asset('front') }}/assets/img/courses/reiki-1.webp" alt="reiki course"></span>
                                    </div>
                                </div>
                                <div class="courseContent">
                                    <h3>
                                        Reiki
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
                                        <span> <img src="{{ asset('front') }}/assets/img/courses/graphology-1-150x150.webp" alt="graphology course"></span>
                                    </div>
                                </div>
                                <div class="courseContent">
                                    <h3>
                                        Graphology
                                    </h3>
                                    <p>
                                        Graphology is the investigation of how a person’s handwriting demonstrates their
                                        personal qualities. Also, it depends on the mental idea of ‘abnormality.
                                    </p>
                                </div>
                            </a>
                            <div class="moreDetailBtn"><a href="{{ route('home.graphology-course') }}" class=""><span>Learn More <i
                                            class="fa-solid fa-arrow-right"></i></span></a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="aboutSection whattopicincourse Want-enroll-sec  aboutbg sectionscroll aboutpadding wow animate__fadeIn"
        id="scrolling-container" style="visibility: visible; animation-name: fadeIn;">
        <div class="site-width">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="aboutSideWrapper forresponsive">
                        <div class="aboutImgContainer">
                            <div class="aboutImg position-relative ">
                                <span class="aboutMainImg">
                                    <img src="{{ asset('front') }}/assets/img/other/how-fill-form-thumbnail.jpg" alt="img" class="">
                                </span>
                                <div class="video-player">
                                    <div class="other-tools d-flex justify-content-center align-items-center">
                                        <a href="https://www.youtube.com/watch?v=EH4a6RIdnK0" class="pulse"
                                            data-lity="">
                                            <i class="fas fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="otherTextures">
                                    <img src="{{ asset('front') }}/assets/img/texture/dot-texture.png" alt="img" class="dotTexture">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="aboutSideContentsWrapper">
                        <div class="aboutSideContents">
                            <div class="aboutSide">
                                <h5>Want to Enroll in Astrology Course</h5>
                                <h2>
                                    How to Fill out <span>Admission</span> Form
                                </h2>
                                <div class="aboutParagraph aboutParagraphmo">
                                    <h5 class="courseh5">
                                        To enroll in the course, follow these simple steps:
                                    </h5>
                                    <ul class="normalList">
                                        <li>Locate the “Enroll Now” button provided below and click on it.</li>
                                        <li>Fill out the enrollment form that appears on your screen. Provide all the
                                            necessary details, such as your name, contact information, and course
                                            preferences.</li>
                                        <li>Upload the front and back views of your Aadhar card, a passport-sized
                                            photograph, and your signature. Ensure that all these documents are under
                                            2MB in size.</li>
                                        <li>Once you have filled out the form and uploaded the necessary documents,
                                            review all the details to ensure that they are accurate.</li>
                                        <li>Click on the “Submit” button to complete the enrollment process.</li>
                                        <li>After submitting the form, you will receive a confirmation email from the
                                            course provider. Check your email inbox, including your spam folder, and
                                            ensure that you have received the email.</li>
                                        <li>Congratulations! You have successfully enrolled in the course.</li>
                                    </ul>
                                    <p><strong>Still, Confused? You can Watch Out the Video to Clear all the Doubts
                                            Related to Admission</strong></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>



            </div>
        </div>

    </section>

    <section class="actions homeLiveClass">
        <div class="site-width">
            <div class="liveClassHomeWrapper ">
                <div class="row justify-content-center">
                    <div class="col-md-12 wow animate__zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <div class="prListCard addmissionInfoWrap">
                            <div class="row align-item-center col-reverse">
                                <div class="col-md-3">
                                    <div class=" position-relative ">
                                        <img src="{{ asset('front') }}/assets/img/other/addmission-course-img.png" alt="astrology Course" class="">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="titleSection leftAlign light">
                                        <div class="">
                                            <h2>
                                                <span>Admission </span>Form
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="prCardContent">
                                        <div class="prCCWrap">
                                            <h4>
                                                Get Enroll in our Astrology Course and start your Career as a Certified
                                                Astrology Expert.
                                            </h4>
                                        </div>
                                        <div class="defaultBtn mt-4"><a href="{{ route('home.admissionform') }}" class=""><span>Enroll
                                                    Now
                                                    <i class="fa-solid fa-arrow-right"></i></span></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function CourceEnquiry() {
            $('.text-danger').text('');
            var isValid = $('#courceenquiry').parsley().validate();
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

            var action = $('#courceenquiry').attr('action');
            var formData = new FormData($('#courceenquiry')[0]);
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

                        // Swal.fire({
                        //     icon: 'success',
                        //     title: 'Success!',
                        //     text: data.message,
                        // }).then(function() {
                            // Redirect to a URL
                            window.location.href = '{{ route('home.thank_you') }}';
                            // location.reload();

                        // });
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