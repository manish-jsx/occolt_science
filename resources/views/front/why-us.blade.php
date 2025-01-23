@extends('front.layouts.master')
@section('section')

    <div class="clear"></div>
    <!-- Slider Start  -->

    <div class="top-banner">
        <div class="container">
            <div class="inner-banner-menu">
                <h4>Why Us</h4>

                <ul>
                    <li><a href="{{ route('home') }}">Home</a><span>&nbsp;&nbsp;&gt;</span></li>
                    <li><a href="javascript:void(0)">&nbsp;&nbsp;Why Us</a></li>
                </ul>
            </div>

        </div>
        <div class="clear"></div>
    </div>

    <!-- Slider End -->


    <section class="why-us-section">
        <div class="container">
            <div class="secTitle">
                <h4 class="title text_darkt mb-4 text-center">Why Us</h4>
            </div>
            <div class="row align-item-center">
                <!-- <div class="col-md-5">
                        <div class="aboutImgContainer mb-4">
                            <div class="aboutImg">
                                <img src="assets/images/about-us-img.png" alt="image">
                            </div>


                        </div>
                    </div> -->
                <div class="col-md-12">
                    <div class="aboutContentsWrap aboutContentsWrap2">


                        <div class="whyus_contentpara">
                            <p>
                                Merchado is your one stop destination for high-quality, pure leather products
                                crafted with precision and passion. Here's why you should choose us:
                            </p>

                            <p><strong>Unparalleled Quality:</strong> We take pride in sourcing the finest,
                                genuine leather to create products that stand the test of time. Each item is
                                meticulously crafted to ensure durability and luxurious feel.
                            </p>


                            <p><strong>Authentic Indian Craftsmanship:</strong> Our products are made by skilled
                                artisans who have mastered the art of leather craftsmanship passed down through
                                generations. We uphold the rich heritage of Indian leatherwork in every stitch
                                and detail.
                            </p>

                            <p><strong>Wide Range of Products:</strong> From stylish leather bags, belts,
                                wallets and accessories, we offer a diverse range of products to cater to every
                                need and style preference.</p>

                            <p><strong>Sustainable Practices:</strong> We are committed to ethical and
                                sustainable practices throughout our manufacturing process. Our leather is
                                responsibly sourced, and we strive to minimize our environmental footprint.</p>

                            <p><strong>Customer Satisfaction Guaranteed:</strong> At Merchado, customer
                                satisfaction is our top priority. We provide excellent customer service and
                                stand behind the quality of our products with confidence.
                                Experience the epitome of elegance and durability with Merchado – where quality
                                meets authenticity in every leather creation.</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="partner-section">
        <div class="container">
            <div class="secTitle">
                <h4 class="title title-partner-section text_darkt mb-4 text-center">Benefits of Choosing Merchado India as
                    Leather Belt Manufacturing Partner</h4>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="partner-section-box">
                        <div class="partnercardimg">
                            <img src="{{ asset('front/assets/images/leather.png') }}" alt="">
                        </div>
                        <div class="partnercard-content">
                            <p>Custom Design Leather Belt Manufacturing Service</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="partner-section-box">
                        <div class="partnercardimg">
                            <img src="{{ asset('front/assets/images/copyright.png') }}" alt="">
                        </div>
                        <div class="partnercard-content">
                            <p>Private Label Leather Belt Manufacturing Service</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="partner-section-box">
                        <div class="partnercardimg">
                            <img src="{{ asset('front/assets/images/quality-control.png') }}" alt="">
                        </div>
                        <div class="partnercard-content">
                            <p>Quality Control during Leather Belt Production</p>

                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="partner-section-box">
                        <div class="partnercardimg">
                            <img src="{{ asset('front/assets/images/export-&-shipping.png') }}" alt="">
                        </div>
                        <div class="partnercard-content">
                            <p>Export Packing and Shipping to Destination Country</p>
                        </div>
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
