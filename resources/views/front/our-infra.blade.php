@extends('front.layouts.master')
@section('section')
    <div class="clear"></div>
    <!-- Slider Start  -->

    <div class="top-banner">
        <div class="container">
            <div class="inner-banner-menu">
                <h4>Our Infra</h4>

                <ul>
                    <li><a href="{{ route('home') }}">Home</a><span>&nbsp;&nbsp;&gt;</span></li>
                    <li><a href="javascript:void(0)">&nbsp;&nbsp;Our Infra</a></li>
                </ul>
            </div>


        </div>
        <div class="clear"></div>
    </div>

    <!-- Slider End -->


    <section class="aboutus about-us-section our-infra-section section-padding-05">
        <div class="container">
            <div class="row align-item-center">
                <div class="col-md-5">
                    <div class="aboutImgContainer mb-4">
                        <div class="aboutImg">
                            <img src="{{ asset('front/assets/images/our-infra-img.jpg') }}" alt="image">
                        </div>


                    </div>
                </div>
                <div class="col-md-7">
                    <div class="aboutContentsWrap our-infra-content">
                        <div class="secTitle">
                            <!-- <h4>About Us</h4> -->
                            <!-- <h1>Welcome to Merchado,</h1> -->
                            <h4 class="title text_darkt mb-4 our-infra-title">Our Infrastructural Facilities</h4>

                        </div>
                        <div class="aboutContentPara">
                            <p>
                                We are well equipped firm with all the desired equipments in our different operations.
                                Our spacious infrastructure is well connected with the proper transportation system and
                                latest machinery is installed to manufacture our qualitative product range. We have
                                recruited trained employees who are familiar with the latest techniques and are capable
                                to work in this industry.
                            </p>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="aboutus about-us-section our-infra-section2 section-padding-05">
        <div class="container">
            <div class="row align-item-center">
                <div class="col-md-5 order-md-2">
                    <div class="aboutImgContainer mb-4">
                        <div class="aboutImg">
                            <img src="{{ asset('front/assets/images/our-infra-img02.jpg') }}" alt="image">
                        </div>


                    </div>
                </div>
                <div class="col-md-7 order-md-1">
                    <div class="aboutContentsWrap our-infra-content2">
                        <div class="secTitle">
                            <!-- <h4>About Us</h4> -->
                            <!-- <h1>Welcome to Merchado,</h1> -->
                            <h4 class="title text_darkt mb-4 our-infra-title">Warehousing and Packaging</h4>

                        </div>
                        <div class="aboutContentPara">
                            <p>
                                After the production process, we pay a lot of emphasis on the storage of our complete
                                range of leather bags & accessories and promotional items. For storing the products, we
                                have a spacious and highly automated warehouse unit that is equipped with all the
                                requisite amenities. Further, the unit is divided into various sections that assist us
                                to store the products in a systematic manner. We have also employed a team of
                                experienced warehouse personnel, which maintains a suitable inventory system that helps
                                us to keep a record of all incoming and outgoing material.
                            </p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="our-infra-section3">
        <div class="container">
            <div class="secTitle">
                <h4 class="title text_darkt mb-4 text-center title-partner-section">Following are the facilities that
                    are available in our warehouse unit</h4>
            </div>

            <div class="row mt-5">
                <div class="featured-block col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="border-one "></span>
                        <span class="border-two"></span>
                        <div class="icon-box">
                            <span class="icon"><img src="{{ asset('front/assets/images/our-infra-icon-01.png') }}" alt=""></span>
                        </div>
                        <p>Fire safety arrangements</p>
                    </div>
                </div>


                <div class="featured-block col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="border-one green-box"></span>
                        <span class="border-two green-box"></span>
                        <div class="icon-box">
                            <span class="icon"><img src="{{ asset('front/assets/images/our-infra-icon-02.png') }}" alt=""></span>
                        </div>
                        <p>Proper ventilation
                        </p>
                    </div>
                </div>



                <div class="featured-block col-md-6 col-sm-12 justify-content-center">
                    <div class="inner-box">
                        <span class="border-one"></span>
                        <span class="border-two"></span>
                        <div class="icon-box">
                            <span class="icon"><img src="{{ asset('front/assets/images/our-infra-icon-04.png') }}" alt=""></span>
                        </div>
                        <p>Material handling equipment</p>
                    </div>
                </div>


                <div class="featured-block col-md-6 col-sm-12">
                    <div class="inner-box">
                        <span class="border-one green-box"></span>
                        <span class="border-two green-box"></span>
                        <div class="icon-box">
                            <span class="icon"><img src="{{ asset('front/assets/images/our-infra-icon-03.png') }}" alt=""></span>
                        </div>
                        <p>Well connected to roads and transport facilities</p>
                    </div>
                </div>



            </div>
        </div>
    </section>


    <section class="our-video-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="video-section">
                        <iframe src="https://www.youtube.com/embed/FX35fGNueWw?si=qy96yN2jFQp0IVuv"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script>
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function() {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() ==
                            "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date()
                                .valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function(msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>
    </script>
@endsection
