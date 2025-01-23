@extends('front.layouts.master')
@section('section')

    <section class="inrbnr">
       
        <div class="site-width">
            <div class="inrbnrContent">
                <div class="inrbnrtext">
                    <h2>Our Courses</h2>
                    <ul class="inrbrnNav">
                        <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="javascript:void(0)"> Our Courses</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
   

      <!-- Featured Course -->
      <section class="courses coursesinner bg-1 pt-50 pb-50 wow animate__fadeIn">
        <div class="site-width">
            <div class="titleSection">
                <div class="text-center">
                    <h2>
                        Our <span>All</span> Courses
                    </h2>
                    <h4>
                        We offer top courses in Occult Science
                    </h4>
                </div>
            </div>
            <div class="courseSlider">
                <div class="coursesWrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="coursesCard coursesCard-inner">
                                <a href="{{ route('home.vastu-course') }}" class="">
                                    <div class="coursesHeader">
                                        <div class="courseImg">
                                           <span> <img src="{{ asset('front') }}/assets/img/courses/vastu-1-150x150.webp" alt="vastu course"></span>
                                        </div>
                                    </div>
                                    <div class="courseContent">
                                        <h4>
                                            Vastu Course
                                        </h4>
                                        <p>
                                            Vastu is an old Indian investigation of architecture and structures that help make an appropriate setting or a spot to live and work in a most legitimate way.
                                        </p>
                                    </div>
                                </a>
                                <div class="moreDetailBtn"><a href="{{ route('home.vastu-course') }}" class=""><span>Learn More <i class="fa-solid fa-arrow-right"></i></span></a></div>
                            </div>
                        </div>
                       
                        <div class="col-lg-3 col-md-6">
                            <div class="coursesCard coursesCard-inner">
                                <a href="{{ route('home.astrology-course') }}" class="">
                                    <div class="coursesHeader">
                                        <div class="courseImg">
                                           <span> <img src="{{ asset('front') }}/assets/img/courses/astrology-1-150x150.webp" alt="astrology course"></span>
                                        </div>
                                    </div>
                                    <div class="courseContent">
                                        <h4>
                                            Astrology Course
                                        </h4>
                                        <p>
                                            Astrology is an ancient Indian science that clarifies planetary movements and positions for time and their impact on people and different substances on earth.
                                        </p>
                                    </div>
                                </a>
                                <div class="moreDetailBtn"><a href="{{ route('home.astrology-course') }}" class=""><span>Learn More <i class="fa-solid fa-arrow-right"></i></span></a></div>
                            </div>
                        </div>
                      
                        <div class="col-lg-3 col-md-6">
                            <div class="coursesCard coursesCard-inner">
                                <a href="{{ route('home.tarot-card-course') }}" class="">
                                    <div class="coursesHeader">
                                        <div class="courseImg">
                                            <span><img src="{{ asset('front') }}/assets/img/courses/tarot-1.webp" alt="tarot course"></span>
                                        </div>
                                    </div>
                                    <div class="courseContent">
                                        <h4>
                                            Tarot Card
                                        </h4>
                                        <p>
                                            Tarot is a bunch of cards and the reading of these cards is Known as tarot card reading. A Tarot card reading course can help you have a blissful life.
                                        </p>
                                    </div>
                                </a>
                                <div class="moreDetailBtn"><a href="{{ route('home.tarot-card-course') }}" class=""><span>Learn More <i class="fa-solid fa-arrow-right"></i></span></a></div>
                            </div>
                        </div>
                      
                        <div class="col-lg-3 col-md-6">
                            <div class="coursesCard coursesCard-inner">
                                <a href="{{ route('home.yoga-course') }}" class="">
                                    <div class="coursesHeader">
                                        <div class="courseImg">
                                           <span> <img src="{{ asset('front') }}/assets/img/courses/13082-Custom-min-e1687089102823-300x266.webp" alt="yoga course"></span>
                                        </div>
                                    </div>
                                    <div class="courseContent">
                                        <h4>
                                            Yoga Course
                                        </h4>
                                        <p>
                                            A yoga course is a structured program taught by certified instructors, designed to teach students yoga postures, breathing techniques, and meditation.
                                        </p>
                                    </div>
                                </a>
                                <div class="moreDetailBtn"><a href="{{ route('home.yoga-course') }}" class=""><span>Learn More <i class="fa-solid fa-arrow-right"></i></span></a></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6">
                            <div class="coursesCard coursesCard-inner">
                                <a href="{{ route('home.numerology') }}" class="">
                                    <div class="coursesHeader">
                                        <div class="courseImg">
                                            <span><img src="{{ asset('front') }}/assets/img/courses/numerology-1-150x150.webp" alt="numerology course"></span>
                                        </div>
                                    </div>
                                    <div class="courseContent">
                                        <h4>
                                            Numerology
                                        </h4>
                                        <p>
                                            Numerology is the study of numbers in your day-to-day existence. Type of divination like astrology arrangements with associations among numbers.
                                        </p>
                                    </div>
                                </a>
                                <div class="moreDetailBtn"><a href="{{ route('home.numerology') }}" class=""><span>Learn More <i class="fa-solid fa-arrow-right"></i></span></a></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6">
                            <div class="coursesCard coursesCard-inner">
                                <a href="{{ route('home.palmistry') }}" class="">
                                    <div class="coursesHeader">
                                        <div class="courseImg">
                                            <span><img src="{{ asset('front') }}/assets/img/courses/palmistry-1.webp" alt="palmistry course"></span>
                                        </div>
                                    </div>
                                    <div class="courseContent">
                                        <h4>
                                            Palmistry
                                        </h4>
                                        <p>
                                            Palmistry, additionally called Chirology, is the magical specialty of perusing individuals’ palms to decide their fortunes and karma.
                                        </p>
                                    </div>
                                </a>
                                <div class="moreDetailBtn"><a href="{{ route('home.palmistry') }}" class=""><span>Learn More <i class="fa-solid fa-arrow-right"></i></span></a></div>
                            </div>
                        </div>
                       
                        <div class="col-lg-3 col-md-6">
                            <div class="coursesCard coursesCard-inner">
                                <a href="{{ route('home.reiki-course') }}" class="">
                                    <div class="coursesHeader">
                                        <div class="courseImg">
                                            <span><img src="{{ asset('front') }}/assets/img/courses/reiki-1.webp" alt="reiki course"></span>
                                        </div>
                                    </div>
                                    <div class="courseContent">
                                        <h4>
                                            Reiki
                                        </h4>
                                        <p>
                                            It is a Japanese energy recuperating method. The prevalent type of Reiki rehearsed all through the present reality, otherwise called Usui reiki.
                                        </p>
                                    </div>
                                </a>
                                <div class="moreDetailBtn"><a href="{{ route('home.reiki-course') }}" class=""><span>Learn More <i class="fa-solid fa-arrow-right"></i></span></a></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6">
                            <div class="coursesCard coursesCard-inner">
                                <a href="{{ route('home.graphology-course') }}" class="">
                                    <div class="coursesHeader">
                                        <div class="courseImg">
                                           <span> <img src="{{ asset('front') }}/assets/img/courses/graphology-1-150x150.webp" alt="graphology course"></span>
                                        </div>
                                    </div>
                                    <div class="courseContent">
                                        <h4>
                                            Graphology
                                        </h4>
                                        <p>
                                            Graphology is the investigation of how a person’s handwriting demonstrates their personal qualities. Also, it depends on the mental idea of ‘abnormality.
                                        </p>
                                    </div>
                                </a>
                                <div class="moreDetailBtn"><a href="{{ route('home.graphology-course') }}" class=""><span>Learn More <i class="fa-solid fa-arrow-right"></i></span></a></div>
                            </div>
                        </div>
                    </div>
                  
                  
                </div>
            </div>

        </div>
    </section>


    <!-- Features -->

  @endsection