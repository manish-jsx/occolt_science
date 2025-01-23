@extends('front.layouts.master')
@section('section')
    <section class="inrbnr">
       
        <div class="site-width">
            <div class="inrbnrContent">
                <div class="inrbnrtext">
                    <h2>Disclaimer</h2>
                    <ul class="inrbrnNav">
                        <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="javascript:void(0)"> Disclaimer</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
   

    <!-- About Us -->

    <section class="aboutSection aboutbg sectionscroll aboutpadding wow animate__fadeIn" id="scrolling-container">
        <div class="site-width">
            <div class="row align-item-center">
                <div class="col-lg-6 col-md-6">
                    <div class="aboutSideWrapper forresponsive">
                        <div class="aboutImgContainer">
                            <div class="aboutImg position-relative ">
                                <span class="aboutMainImg">
                                    <img src="{{ asset('front') }}/assets/img/other/disclaimer-768x512.jpg" alt="Disclaimer" class="">
                                </span>
                                <!-- <div class="video-player">
                                    <div class="other-tools d-flex justify-content-center align-items-center">
                                      <a href="https://youtu.be/gkJHMZOxgKY" class="pulse" data-lity="">
                                        <i class="fas fa-play"></i>
                                      </a>
                                    </div>
                                  </div>
                                <div class="otherTextures">
                                    <img src="{{ asset('front') }}/assets/img/texture/dot-texture.png" alt="img" class="dotTexture">
                                </div> -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="aboutSideContentsWrapper">
                        <div class="aboutSideContents">
                            <div class="aboutSide">
                                <h2>
                                    <span>Disclaimer </span>  
                                </h2>
                                <div class="aboutParagraph">
                                    <p>
                                        All Horoscope / Vastu reports prepared are based on the birth details/ Vastu Details provided by the customers in accordance with the principles of Vedic Astrology/ Vastu Details
                                    </p>
                                    <p>
                                        On receiving a particular <a href="{{ route('home') }}">Enquiry from</a> a Customer, this query is passed to our astrologer for the predictions/remedies and answered within 2-5 working days or earlier.
                                    </p>
                                    <p>
                                        Queries will be answered only when we receive the payment at our end. All types of orders related to queries will be informed to you through E-mail only.
                                    </p>
                                    <p>
                                        All types of Remedial actions and orders are kept strictly confidential. Only members are allowed to get the details of the remedies, etc. from us.
                                    </p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="aboutSideContents">
                        <div class="aboutSide">
                            <div class="aboutParagraph">
                                <p>
                                    The website of TrueVastu.in of Vedic Astrology, Vastu, Numerology does not guarantee the accuracy of reports and disclaim any responsibility for any decision(s) or its consequences taken by any person based on reports made on the available from the Customers.
                                </p>
                                <p>
                                    The content on the website is generic, not person-specific(Posts, Videos, Blogs) and it is advised to take proper counseling from our consultant <a href="https://truevastu.in/" target="_blank">Mr.Kashyap</a>
                                </p>
                                <p>
                                    The opinions differ from case to case and are not to hurt anyone ( religion, person, etc) and are shared or opinionated with proper research case basis only.
                                </p>
                                <p>
                                    All payments will be accepted by E Transfer – Google, IMPS, and NEFT payable only. Foreign clients remit their payments through our Secure Payment Gateway or PayPal payments.
                                </p>
                                <p>
                                    All types of contacts will be made online only and no personal meetings are made due to Pandemic Situation Disclaimer
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                

            </div>
        </div>
     
    </section>

@endsection