@extends('front.layouts.master')
@section('section')
    <style>
        .active {
            color: #f58035 !important;
        }
    </style>
    <div class="clear"></div>
    <!-- Slider Start  -->

    <div class="top-banner">
        <div class="container">
            <div class="inner-banner-menu">
                <h4>Product List</h4>

                <ul>
                    <li><a href="{{ route('home') }}">Home</a><span>&nbsp;&nbsp;&gt;</span></li>
                    <li><a href="javascript:void(0)">&nbsp;&nbsp;Product List</a></li>
                </ul>

            </div>
        </div>
        <div class="clear"></div>
    </div>

    <!-- Slider End -->


    <div class="section section-padding-04 product-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <!-- Sidebar Widget Start -->
                    <aside class="sidebar-widget">
                        <!-- Widget Item Start -->
                        <div class="widget-item">
                            <h4 class="widget-title">Filters by CATEGORIES </h4>
                            <div class="widget-link">
                                <ul class="ps-0">

                                    {{-- @foreach ($category as $key => $_category)
                                        <li> <a href="#">{{ $_category->name }}</a>
                                            <div class="category-toggle collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#category0{{ $key }}"> <span class="add"><i
                                                        class="fa fa-angle-down"></i></span> <span class="remove"><i
                                                        class="fa fa-angle-up"></i></span> </div>
                                            <div class="collapse" id="category0{{ $key }}">
                                                <ul class="category-sub-menu ps-0">
                                                    @foreach ($subCategory as $_subCategory)
                                                        @if ($_category->id == $_subCategory->category_id)
                                                            <li><a
                                                                    href="{{ route('home.product-list', [$_category->slug, $_subCategory->slug]) }}">{{ $_subCategory->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                                    @endforeach --}}
                                    {{-- @foreach ($category as $key => $_category)
                                        <li>
                                            <a href="#" class="category-toggle-btn">{{ $_category->name }}</a>
                                            <div class="category-toggle @if (!empty($category_slug) && $category_slug == $_category->slug) show @else collapsed @endif"
                                                data-bs-toggle="collapse" data-bs-target="#category0{{ $key }}">
                                                <span class="add"><i class="fa fa-angle-down"></i></span>
                                                <span class="remove"><i class="fa fa-angle-up"></i></span>
                                            </div>
                                            <div class="collapse @if ($category_slug == $_category->slug) show @endif"
                                                id="category0{{ $key }}">
                                                <ul class="category-sub-menu ps-0">
                                                    @foreach ($subCategory as $_subCategory)
                                                        @if ($_category->id == $_subCategory->category_id)
                                                            <li>
                                                                <a class="{{ $subcategory_slug == $_subCategory->slug ? 'active' : '' }}"
                                                                    href="{{ route('home.product-list', [$_category->slug, $_subCategory->slug]) }}">{{ $_subCategory->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                                    @endforeach --}}
                                    @foreach ($category as $key => $_category)
                                        <li>
                                            <a href="#" class="category-toggle-btn">{{ $_category->name }}</a>
                                            <div class="category-toggle @if (!empty($category_slug) && $category_slug == $_category->slug) show @else collapsed @endif"
                                                data-bs-toggle="collapse" data-bs-target="#category0{{ $key }}">
                                                <span class="add"><i class="fa fa-angle-down"></i></span>
                                                <span class="remove"><i class="fa fa-angle-up"></i></span>
                                            </div>
                                            <div class="collapse @if (!empty($category_slug) && $category_slug == $_category->slug) show @endif"
                                                id="category0{{ $key }}">
                                                <ul class="category-sub-menu ps-0">
                                                    @foreach ($subCategory as $_subCategory)
                                                        @if ($_category->id == $_subCategory->category_id)
                                                            <li>
                                                                <a class="@if (!empty($subcategory_slug) && $subcategory_slug == $_subCategory->slug) active @endif"
                                                                    href="{{ route('home.product-list', [$_category->slug, $_subCategory->slug]) }}">{{ $_subCategory->name }}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </li>
                                    @endforeach




                                </ul>
                            </div>
                        </div>
                        <!-- Widget Item End -->

                    </aside>

                    <!-- Sidebar Widget End -->
                </div>
                <div class="col-lg-9">
                    <!-- Shop Top Bar Start -->
                    <div class="shop-to-bar d-flex justify-content-between">

                        <!-- <div class="shop-top-left d-flex  align-self-center">
                                  <label>Views:</label>
                                  <ul class="nav">
                                    <li><a class="active" data-bs-toggle="tab" href="#grid"><i class="fa fa-th"></i></a></li>
                                    <li><a data-bs-toggle="tab" href="#list"><i class="fa fa-list"></i></a></li>
                                  </ul>
                                </div> -->
                        <!-- <div class="shop-top-right d-flex align-self-center">
                                  <label>Sort By:</label>
                                  <select class="select" fdprocessedid="eg40hq">
                                    <option value="0">Most Relevant</option>
                                    <option value="1">Name, A to Z</option>
                                    <option value="2">Name, Z to A</option>
                                    <option value="3">Price, low to high</option>
                                    <option value="4">Price, high to low</option>
                                  </select>
                                </div> -->
                    </div>
                    <!-- Shop Top Bar End -->

                    <!-- Tab Content Start -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="grid">
                            <div class="row">
                                @foreach ($product_list as $item)
                                    <div class="col-lg-4 col-sm-6">
                                        <!-- Single-Product Start -->
                                        <div class="product-grid-item">
                                            <div class="product-element-top"> <a
                                                    href="{{ route('home.prodcut-datels', [$item->slug]) }}"> <img
                                                        class="thumbnail"
                                                        src="{{ asset('/uploads/products/small_imag/' . $item->product_image) }}"
                                                        alt="merchado"> </a> </div>

                                            <div class="product-content">
                                                <div class="product-category-action">
                                                    <div class="product-title"> <a
                                                            href="{{ route('home.prodcut-datels', [$item->slug]) }}">{{ $item->product_name }}</a>
                                                    </div>

                                                </div>
                                                <div class="wrap-price">
                                                    <div class="wrapp-swap">
                                                        <div class="swap-elements">
                                                            <div class="price">
                                                                <div class="product-price">
                                                                    <div class="old-price">MRP: &#8377;{{ $item->price }}
                                                                    </div>
                                                                    <div class="sale-price">MRP:
                                                                        &#8377;{{ $item->discount_price }}</div>
                                                                </div>
                                                            </div>
                                                            <div class="btn-add"> <a
                                                                    href="{{ route('home.prodcut-datels', [$item->slug]) }}"
                                                                    class="add_to_cart_button">View Detail</a> </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single-Product End -->
                                    </div>
                                @endforeach
                                {{-- <div class="col-lg-4 col-sm-6">
                                    <!-- Single-Product Start -->
                                    <div class="product-grid-item">
                                        <div class="product-element-top"> <a href="product-detail.html"> <img
                                                    class="thumbnail"
                                                    src="{{ asset('front/assets/images/product-autolock-img-01.jpg') }}"
                                                    alt="merchado"> </a> </div>

                                        <div class="product-content">
                                            <div class="product-category-action">
                                                <div class="product-title"> <a href="product-detail.html">Autolock
                                                        Belt</a> </div>

                                            </div>
                                            <div class="wrap-price">
                                                <div class="wrapp-swap">
                                                    <div class="swap-elements">
                                                        <div class="price">
                                                            <div class="product-price">
                                                                <div class="old-price">MRP: &#8377;599</div>
                                                                <div class="sale-price">MRP: &#8377;399</div>
                                                            </div>
                                                        </div>
                                                        <div class="btn-add"> <a href="product-detail.html"
                                                                class="add_to_cart_button">View Detail</a> </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single-Product End -->
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single-Product Start -->
                                    <div class="product-grid-item">
                                        <div class="product-element-top"> <a href="product-detail.html"> <img
                                                    class="thumbnail"
                                                    src="{{ asset('front/assets/images/product-autolock-img-02.jpg') }}"
                                                    alt="ayira"> </a> </div>

                                        <div class="product-content">
                                            <div class="product-category-action">
                                                <div class="product-title"> <a href="product-detail.html">Autolock
                                                        Belt</a> </div>

                                            </div>
                                            <div class="wrap-price">
                                                <div class="wrapp-swap">
                                                    <div class="swap-elements">
                                                        <div class="price">
                                                            <div class="product-price">
                                                                <div class="old-price">MRP: &#8377;599</div>
                                                                <div class="sale-price">MRP: &#8377;399</div>
                                                            </div>
                                                        </div>
                                                        <div class="btn-add"> <a href="product-detail.html"
                                                                class="add_to_cart_button">View Detail</a> </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single-Product End -->
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single-Product Start -->
                                    <div class="product-grid-item">
                                        <div class="product-element-top"> <a href="product-detail.html"> <img
                                                    class="thumbnail"
                                                    src="{{ asset('front/assets/images/product-autolock-img-03.jpg') }}"
                                                    alt="ayira"> </a> </div>

                                        <div class="product-content">
                                            <div class="product-category-action">
                                                <div class="product-title"> <a href="product-detail.html">Autolock
                                                        Belt</a> </div>

                                            </div>
                                            <div class="wrap-price">
                                                <div class="wrapp-swap">
                                                    <div class="swap-elements">
                                                        <div class="price">
                                                            <div class="product-price">
                                                                <div class="old-price">MRP: &#8377;599</div>
                                                                <div class="sale-price">MRP: &#8377;399</div>
                                                            </div>
                                                        </div>
                                                        <div class="btn-add"> <a href="product-detail.html"
                                                                class="add_to_cart_button">View Detail</a> </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single-Product End -->
                                </div> --}}


                            </div>
                        </div>

                    </div>
                    <!-- Tab Content End -->

                    <!-- Page pagination End -->
                    {{-- <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <i
                                        class="fa fa-angle-left"></i> </a> </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                            <li class="page-item"><a class="page-link" href="#">9</a></li>
                            <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <i
                                        class="fa fa-angle-right"></i> </a> </li>
                        </ul>
                    </nav> --}}
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            @if ($product_list->previousPageUrl())
                                <li class="page-item"> <a class="page-link" href="{{ $product_list->previousPageUrl() }}"
                                        aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
                            @endif

                            @foreach ($product_list->getUrlRange(1, $product_list->lastPage()) as $page => $url)
                                <li class="page-item {{ $page == $product_list->currentPage() ? 'active' : '' }}"><a
                                        class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endforeach

                            @if ($product_list->nextPageUrl())
                                <li class="page-item"> <a class="page-link" href="{{ $product_list->nextPageUrl() }}"
                                        aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
                            @endif
                        </ul>
                    </nav>

                    <!-- Page pagination End -->

                    <!-- Page shop_text End -->
                    <!-- <div class="shop_text">
                                <p>Phasellus placerat orci tincidunt dui facilisis vehicula. <strong><ins class="text_dark">Etiam lobortis venenatis odio a pulvinar.</ins></strong> Donec laoreet vulputate eros, nec scelerisque tortor rutrum non. Morbi dapibus massa id sem dignissim, vel aliquam nunc vulputate. Etiam imperdiet arcu scelerisque nulla egestas posuere. Cras quis congue felis. Quisque dictum auctor nulla, sed tempor tortor aliquet vitae. Sed congue hendrerit ex nec laoreet.
                                  <mark class="text_white primary_dark">Nullam quis iaculis ex, in ullamcorper quam.</mark>
                                  Sed et ullamcorper magna, tempus posuere justo. Vestibulum luctus sagittis ante id malesuada. Vestibulum pretium convallis porttitor.</p>
                                <p>Cras volutpat purus placerat tellus molestie pulvinar. <strong><em class="text_dark">Nulla nunc orci, dapibus sit amet massa quis, semper ultrices augue. Praesent posuere aliquam nibh, eget blandit augue tincidunt vel.</em></strong> Sed luctus facilisis posuere. Phasellus velit est, vulputate vel eleifend in, malesuada quis odio. </p>
                              </div> -->
                    <!-- Page shop_text End -->

                </div>
            </div>
        </div>
    </div>





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
