@extends('front.layouts.master')
@section('section')
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Enquiry Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="#" id="formdata" onsubmit="sendEnquiry(event)">
                        @csrf
                        <input type="hidden" name="product_name" value="{{ $product->product_name }}" id="">
                        <div class="row">
                            <div class="mb-2 col-md-12">
                                <label for="recipient-name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-2 col-md-6">
                                <label for="recipient-name" class="col-form-label">Number</label>
                                <input type="text" class="form-control" name="phone" minlength="10" maxlength="10"
                                    required>
                            </div>

                            <div class="mb-2 col-md-6">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="mb-2 col-md-12">
                                <label for="recipient-name" class="col-form-label">Subject</label>
                                <input type="text" class="form-control" name="subject">
                            </div>


                            <div class="mb-2 col-md-12">
                                <label for="message-text" class="col-form-label">Message</label>
                                <textarea name="message" class="form-control" id="message-text"></textarea>
                            </div>

                            <div class="defaultBtn text-center">
                                {{-- <a href="javascript:void(0)" class="load-more primary_dark_btn mt-4">Submit Now</a> --}}
                                <button type="submit" class="load-more primary_dark_btn mt-4" style="border: none;">Submit
                                    Now</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!-- Slider Start  -->

    <div class="top-banner">
        <div class="container">
            <div class="inner-banner-menu">
                <h4>Product Detail</h4>

                <ul>
                    <li><a href="{{ route('home') }}">Home</a><span>&nbsp;&nbsp;&gt;</span></li>
                    <li><a href="javascript:void(0)">&nbsp;&nbsp;Product Detail</a></li>
                </ul>

            </div>
        </div>
        <div class="clear"></div>
    </div>

    <!-- Slider End -->


    <section class="section-padding-03 product-image-summary product-v-one">
        <div class="container">
            <div class="row">
                <div class="col-md-5 product-images aos-animate">
                    <!-- Product Details Image Start -->
                    <div class="product-details-img">
                        <div class="slider slider-for popup-gallery slick-initialized slick-slider">
                            <div class="slick-list draggable">
                                <div class="slick-track" style="opacity: 1;">
                                    <div class="slick-slide slick-current slick-active"
                                        data-src="{{ asset('/uploads/products/product_image/' . $product->product_image) }}"
                                        data-slick-index="0" aria-hidden="false" tabindex="0">
                                        <img src="{{ asset('/uploads/products/product_image/' . $product->product_image) }}"
                                            alt="Product">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Product Details Image End -->

                </div>
                <div class="col-md-7 summary entry-summary">
                    <div class="product-list-item">
                        <div class="product-content">
                            <div class="product-category-action pt-0 d-block">
                                <div class="product-title pt-0"> <a href="#">{{ $product->product_name }}</a> </div>
                                <!-- <div class="product-rating d-flex">
                                                <ul class="d-flex ps-0">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span>(6 customer reviews)</span>
                                            </div> -->
                            </div>
                            <div class="product-price"> <span class="old-price">MRP: &#8377;{{ $product->price }}</span>
                                <span class="sale-price">MRP: &#8377;{{ $product->discount_price }}</span> </div>
                            <div class="short-description">
                                <p>{{ $product->full_description }}</p>
                            </div>

                            <!-- Widget Item Start -->
                            <div class="widget-item d-flex">
                                <h4 class="widget-title">Color : </h4>
                                <div class="">
                                    <p class="mb-0 text-dark widget-para">Available in {{ $product->color }} colour</p>
                                </div>

                            </div>
                            <!-- Widget Item End -->

                            <!-- Widget Item Start -->
                            <!-- <div class="widget-item d-flex">
                                            <h4 class="widget-title">Size : </h4>
                                            <div class="widget-size">
                                                <ul class="d-flex p-0">
                                                    <li class="wc-size ms-0"><a href="#" class="ms-0">XS</a></li>
                                                    <li class="wc-size active"><a href="#">S</a></li>
                                                    <li class="wc-size"><a href="#">M</a></li>
                                                    <li class="wc-size"><a href="#">L</a></li>
                                                </ul>
                                            </div>
                                        </div> -->
                            <!-- Widget Item End -->

                            <!-- Widget Item Start -->
                            <!-- <div class="widget-item chart d-flex">
                                            <h4 class="widget-title">Size chart : </h4>
                                            <a href="#" class="action" data-bs-toggle="modal" data-bs-target="#size">
                                                <div class="chart-size"> <i class="flaticon-ruler"></i> </div>
                                            </a>
                                        </div> -->
                            <!-- Widget Item End -->

                            <div class="d-flex quantity-cart_button">
                                <!-- <div class="product-quantity d-inline-flex">
                                                <button type="button" class="sub" fdprocessedid="0elay">-</button>
                                                <input type="text" value="1" fdprocessedid="ridvd">
                                                <button type="button" class="add" fdprocessedid="sl16b2">+</button>
                                            </div> -->
                                <div class="ayira-cart-btn"><a href="#"
                                        class="button add_to_cart_button add_to_cart_button2" type="button"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enquiry
                                        Now</a></div>
                            </div>
                            <!-- <div class="d-flex wishlist-compare">
                                            <div class="ayira-wishlist-btn"> <a class="" href="my-wishlist.html"><i
                                                        class="fa fa-heart-o"></i> Add to wishlist</a> </div>
                                            <div class="ayira-compare-btn"> <a class="button d-flex" href="compare.html"><i
                                                        class="flaticon-reload"></i> Compare</a> </div>
                                        </div> -->
                            <!-- <div class="shipping-delivery">

                                            <div class="shipping">
                                                <div class="icone"> <i class="flaticon-shield"></i> </div>
                                                <div class="free_shipping_info">
                                                    <h5>100% Original
                                                        Products</h5>
                                                </div>
                                            </div>

                                            <div class="shipping">
                                                <div class="icone"> <i class="flaticon-delivery-truck"></i> </div>
                                                <div class="free_shipping_info">
                                                    <h5>Free Delivery on
                                                        above $149</h5>
                                                </div>
                                            </div>

                                            <div class="shipping">
                                                <div class="icone"> <i class="flaticon-return-of-investment"></i> </div>
                                                <div class="free_shipping_info">
                                                    <h5>Easy Return
                                                        upto 14 days </h5>
                                                </div>
                                            </div>

                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="product-details-tabs trending_products section-padding-03 section-padding-04">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs pt-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation"> <a class="nav-link active text_light"
                                id="womans-cloths-tab" data-bs-toggle="tab" href="#womans-cloths" role="tab"
                                aria-selected="true">Specifications</a> </li>
                        <!-- <li class="nav-item" role="presentation"> <a class="nav-link text_light" id="mans-tab"
                                            data-bs-toggle="tab" href="#mans" role="tab" aria-selected="false">Additional
                                            information</a> </li> -->
                        <!-- <li class="nav-item" role="presentation"> <a class="nav-link text_light" id="assessories-tab"
                                            data-bs-toggle="tab" href="#assessories" role="tab" aria-selected="false">Reviews
                                            (6)</a> </li> -->
                        <!-- <li class="nav-item" role="presentation"> <a class="nav-link text_light" id="bags-tab"
                                            data-bs-toggle="tab" href="#bags" role="tab" aria-selected="true">Return Policy</a>
                                    </li> -->
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="specifications tab-pane fade show active" id="womans-cloths" role="tabpanel"
                            aria-labelledby="womans-cloths-tab">
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum necessitatibus facere fugit adipisci quis aut atque aspernatur, amet quisquam, consequatur eveniet nam? Quibusdam quod, ipsum voluptate odio nostrum ut dolore facilis similique, laborum, sit unde excepturi officiis aliquid. Omnis, accusamus.</p> -->
                            <div class="product-anotherinfo-wrapper">
                                <div class="row w-100">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped">
                                                <!-- <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead> -->
                                                <tbody>
                                                    @foreach ($Specification as $item)
                                                    
                                                    <tr>
                                                        <td>{{ $item->speci_heding }}</td>
                                                        <td>{{ $item->speci_content }}</td>
                                                    </tr>
                                                    @endforeach
                                                    {{-- <tr>
                                                        <td>Color</td>
                                                        <td>Available in Black, Brown & Blue colour</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Reversible</td>
                                                        <td>No</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Stretchable</td>
                                                        <td>No</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Size & Fit</td>
                                                        <td>Width: 3.4 cm, Waist: 28 to 44</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Material & Care</td>
                                                        <td>Pure Leather, Wipe with a clean, dry cloth to remove dust
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Material</td>
                                                        <td>Profile Genuine Leather</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Reversible</td>
                                                        <td>No</td>
                                                    </tr>


                                                    <tr>
                                                        <td>Occasion</td>
                                                        <td>Casual</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Closure</td>
                                                        <td>Buckle</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Pattern</td>
                                                        <td>Solid</td>
                                                    </tr>

                                                    <tr>
                                                        <td>Stretchable</td>
                                                        <td>No</td>
                                                    </tr> --}}
                                                </tbody>
                                            </table>
                                        </div>


                                        <!-- <ul>
                                                        <li><span>Color</span>Available in Black, Brown & Blue colour</li>
                                                        <li><span>Reversible</span> No</li>
                                                        <li><span>Stretchable</span> No</li>
                                                        <li><span>Size & Fit</span> Width: 3.4 cm, Waist: 28 to 44</li>
                                                        <li><span>Material & Care</span> Pure Leather, Wipe with a clean, dry cloth to remove dust</li>
                                                        <li><span>Material</span> Profile Genuine Leather</li>
                                                        <li><span>Reversible</span> No</li>
                                                        <li><span>Occasion</span> Casual</li>
                                                        <li><span>Closure</span>  Buckle</li>
                                                        <li><span>Pattern</span> Solid</li>
                                                        <li><span>Stretchable</span> No</li>
                                                    </ul> -->


                                    </div>
                                    <!-- <div class="col-md-5">
                                                    <ul>
                                                        <li><span> Product Type</span> Tops &amp; Tunics</li>
                                                        <li><span>Brand</span>Honey By Pantaloons</li>
                                                        <li><span>Product Code</span> PANPANT83896138A32492</li>
                                                        <li><span>Sales Package</span> 1</li>
                                                        <li><span>Combo</span> Single</li>
                                                        <li><span>Color</span> Green</li>
                                                    </ul>
                                                </div> -->
                                </div>
                            </div>
                        </div>

                        <!-- <div class="tab-pane fade" id="mans" role="tabpanel" aria-labelledby="mans-tab">
                                        <div class="product-anotherinfo-wrapper">
                                            <div class="row w-100">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li><span> Product Type</span> Tops &amp; Tunics</li>
                                                        <li><span>Brand</span>Honey By Pantaloons</li>
                                                        <li><span>Product Code</span> PANPANT83896138A32492</li>
                                                        <li><span>Sales Package</span> 1</li>
                                                        <li><span>Combo</span> Single</li>
                                                        <li><span>Color</span> Green</li>
                                                        <li><span>Size</span> M</li>
                                                        <li><span>Material</span> Cotton</li>
                                                        <li><span>Occasion</span> Casual</li>
                                                        <li><span>PLength</span> Regular</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                        <!-- <div class="tab-pane fade" id="assessories" role="tabpanel" aria-labelledby="assessories-tab">
                                        <div class="reviews">
                                            <h4 class="reviews-title">03 Reviews</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="reviews-comment">
                                                        <ul class="comment-items ps-0">
                                                            <li>
                                                                <div class="single-comment">
                                                                    <div class="comment-thumb"> <img
                                                                            src="assets/images/thumb-01.jpg" alt="ayira"> </div>
                                                                    <div class="comment-content">
                                                                        <div class="comment-name-date d-flex">
                                                                            <h5 class="name">Adam Gilcrist - </h5>
                                                                            <span class="date">27 October, 2020</span>
                                                                        </div>
                                                                        <div class="comment-rating">
                                                                            <div class="rating-star" style="width: 80%;"></div>
                                                                        </div>
                                                                        <p>Rationally encounter consequences that extremely again is
                                                                            there anyone who loves or pursues or desires to obtain
                                                                            because</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="single-comment">
                                                                    <div class="comment-thumb"> <img
                                                                            src="assets/images/thumb-02.jpg" alt="ayira"> </div>
                                                                    <div class="comment-content">
                                                                        <div class="comment-name-date d-flex">
                                                                            <h5 class="name">Adam Gilcrist - </h5>
                                                                            <span class="date">27 October, 2020</span>
                                                                        </div>
                                                                        <div class="comment-rating">
                                                                            <div class="rating-star" style="width: 87%;"></div>
                                                                        </div>
                                                                        <p>Rationally encounter consequences that extremely again is
                                                                            there anyone who loves or pursues or desires to obtain
                                                                            because</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="single-comment">
                                                                    <div class="comment-thumb"> <img
                                                                            src="assets/images/thumb-03.jpg" alt="ayira"> </div>
                                                                    <div class="comment-content">
                                                                        <div class="comment-name-date d-flex">
                                                                            <h5 class="name">Adam Gilcrist - </h5>
                                                                            <span class="date">27 October, 2020</span>
                                                                        </div>
                                                                        <div class="comment-rating">
                                                                            <div class="rating-star" style="width: 48%;"></div>
                                                                        </div>
                                                                        <p>Rationally encounter consequences that extremely again is
                                                                            there anyone who loves or pursues or desires to obtain
                                                                            because</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="reviews-form comments-all p-0 bg-transparent">
                                                        <h4 class="form-title">Add a Review</h4>
                                                        <form action="#">
                                                            <div class="reviews-rating">
                                                                <label>Your Rating:</label>
                                                                <ul id="rating" class="rating">
                                                                    <li class="star" title="Poor" data-value="1"><i
                                                                            class="fa fa-star-o"></i></li>
                                                                    <li class="star" title="Poor" data-value="2"><i
                                                                            class="fa fa-star-o"></i></li>
                                                                    <li class="star" title="Poor" data-value="3"><i
                                                                            class="fa fa-star-o"></i></li>
                                                                    <li class="star" title="Poor" data-value="4"><i
                                                                            class="fa fa-star-o"></i></li>
                                                                    <li class="star" title="Poor" data-value="5"><i
                                                                            class="fa fa-star-o"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="single-form">
                                                                        <input type="text" placeholder="Name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="single-form">
                                                                        <input type="email" placeholder="Email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="single-form">
                                                                        <textarea placeholder="Your Review"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="single-form">
                                                                        <button class="btn primary_dark_btn">Send</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->


                        <!-- <div class="tab-pane fade" id="bags" role="tabpanel" aria-labelledby="bags">
                                        <div class="replacement">
                                            <p>If there is any issues with your product, you can raise a refund or replacement
                                                request within 10 days of receiving the product.</p>
                                            <p> Successful pick-up of the product is subject to the following conditions being met:
                                            </p>
                                            <ul>
                                                <li>Correct and complete product (with the original brand, article number,
                                                    undetached MRP tag, product's original packaging, freebies and accessories)
                                                </li>
                                                <li>The product should be in unused, undamaged and original condition without any
                                                    stains, scratches, tears or holes</li>
                                            </ul>
                                            <p>Know more about the Return Policy <a href="#">here</a></p>
                                        </div>
                                    </div> -->

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



    <script>
        function sendEnquiry(event) {
            event.preventDefault(); // Prevent form submission

            var formdata = $('#formdata').serialize();

            $.ajax({
                url: "{{ route('send_enquiry') }}",
                type: 'post',
                data: formdata,
                // success: function(response){
                //     // alert(response.message);
                //     toastr.success(response.message);
                //     $('#formdata')[0].reset();
                // },
                success: function(response) {
                    console.log(response); // Log response to console
                    toastr.success(response.message);
                    $('#formdata')[0].reset();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    </script>
@endsection
