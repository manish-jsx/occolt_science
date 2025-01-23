@extends('front.layouts.master')
@section('section')
        <div class="clear"></div>
        <!-- Slider Start  -->

        <div class="top-banner">
            <div class="container">
                <div class="inner-banner-menu">
                    <h4>Blog</h4>

                    <ul>
                        <li><a href="{{ route('home') }}">Home</a><span>&nbsp;&nbsp;&gt;</span></li>
                        <li><a href="javascript:void(0)">&nbsp;&nbsp;Blog</a></li>
                    </ul>
                </div>


            </div>
            <div class="clear"></div>
        </div>

        <!-- Slider End -->




        <div class="section section-padding-03 blog-v-three">
            <div class="container">

                <!-- blog-grid Start -->
                <div class="row">
                    {{-- <div class="col-md-6 col-sm-12 col-lg-4">
                        <div class="blog-grid-item">
                            <div class="blog-element-top"> <a href="blog-detail.html"> <img class="thumbnail"
                                        src="{{ asset('front/assets/images/blog-02.jpg') }}" alt="ayira"> </a>
                                <div class="post-date" onclick=""> <span class="post-date-day"> 05 </span><br>
                                    <span class="post-date-month"> nov </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <h4 class="title no_after mb-0 text_white"><a href="blog-detail.html">Simply dummy
                                            text</a></h4>
                                    <span class="title-subtitle text_light">Lorem ipsum dolor sit amet consecetur adipisi
                                        cing elit, sed do eiusmod...</span>
                                    <ul class="entry-meta-list d-flex p-0">
                                        <!-- <li class="meta-tags"><a href="#" rel="tag"><i class="fa fa-tags"></i> Beauty</a></li> -->
                                        <li class="meta-author"><a href="#" rel="author"><i
                                                    class="fa fa-user"></i> By Admin</a></li>
                                        <!-- <li class="meta-comment"><a href="#"><i class="fa fa-comment"></i> 0</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                    @foreach ($blogs as $item)
                    <div class="col-md-6 col-sm-12 col-lg-4">
                        <div class="blog-grid-item">
                            <div class="blog-element-top"> <a href="{{ route('home.blog-datels', [$item->slug]) }}"> <img class="thumbnail"
                                        src="{{ asset('uploads/Blog/SmallImg/' . $item->image) }}" alt="ayira"> </a>
                                {{-- <div class="post-date" onclick=""> <span class="post-date-day"> 20 </span><br>
                                    <span class="post-date-month"> oct </span>
                                </div> --}}
                                <div class="post-date" onclick="">
                                    <span class="post-date-day">{{ $item->created_at->format('d') }}</span><br>
                                    <span class="post-date-month">{{ $item->created_at->format('M') }}</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <h4 class="title no_after mb-0 text_white"><a href="{{ route('home.blog-datels', [$item->slug]) }}">{{ $item->title }}</a></h4>
                                    <span class="title-subtitle text_light">{{ substr($item->short_description, 0, 85) }}{{ strlen($item->short_description) > 85 ? '...' : '' }}</span>
                                    <ul class="entry-meta-list d-flex p-0"> 
                                        <!-- <li class="meta-tags"><a href="#" rel="tag"><i class="fa fa-tags"></i> Beauty</a></li> -->
                                        <li class="meta-author"><a href="#" rel="author"><i
                                                    class="fa fa-user"></i> By Admin</a></li>
                                        <!-- <li class="meta-comment"><a href="#"><i class="fa fa-comment"></i> 0</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-6 col-sm-12 col-lg-4">
                        <div class="blog-grid-item">
                            <div class="blog-element-top"> <a href="blog-detail.html"> <img class="thumbnail"
                                        src="{{ asset('front/assets/images/blog-04.jpg') }}" alt="ayira"> </a>
                                <div class="post-date" onclick=""> <span class="post-date-day"> 20 </span><br>
                                    <span class="post-date-month"> oct </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <h4 class="title no_after mb-0 text_white"><a href="blog-detail.html">Simply dummy
                                            text</a></h4>
                                    <span class="title-subtitle text_light">Lorem ipsum dolor sit amet consecetur adipisi
                                        cing elit, sed do eiusmod...</span>
                                    <ul class="entry-meta-list d-flex p-0">
                                        <!-- <li class="meta-tags"><a href="#" rel="tag"><i class="fa fa-tags"></i> Beauty</a></li> -->
                                        <li class="meta-author"><a href="#" rel="author"><i
                                                    class="fa fa-user"></i> By Admin</a></li>
                                        <!-- <li class="meta-comment"><a href="#"><i class="fa fa-comment"></i> 0</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-sm-12 col-lg-4">
                        <div class="blog-grid-item">
                            <div class="blog-element-top"> <a href="blog-detail.html"> <img class="thumbnail"
                                        src="{{ asset('front/assets/images/blog-08.jpg') }}" alt="ayira"> </a>
                                <div class="post-date" onclick=""> <span class="post-date-day"> 12 </span><br>
                                    <span class="post-date-month"> oct </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <h4 class="title no_after mb-0 text_white"><a href="blog-detail.html">Simply dummy
                                            text</a></h4>
                                    <span class="title-subtitle text_light">Lorem ipsum dolor sit amet consecetur adipisi
                                        cing elit, sed do eiusmod...</span>
                                    <ul class="entry-meta-list d-flex p-0">
                                        <!-- <li class="meta-tags"><a href="#" rel="tag"><i class="fa fa-tags"></i> Beauty</a></li> -->
                                        <li class="meta-author"><a href="#" rel="author"><i
                                                    class="fa fa-user"></i> By Admin</a></li>
                                        <!-- <li class="meta-comment"><a href="#"><i class="fa fa-comment"></i> 0</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-sm-12 col-lg-4">
                        <div class="blog-grid-item">
                            <div class="blog-element-top"> <a href="blog-detail.html"> <img class="thumbnail"
                                        src="{{ asset('front/assets/images/blog-11.jpg') }}" alt="ayira"> </a>
                                <div class="post-date" onclick=""> <span class="post-date-day"> 10 </span><br>
                                    <span class="post-date-month"> oct </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <h4 class="title no_after mb-0 text_white"><a href="blog-detail.html">Simply dummy
                                            text</a></h4>
                                    <span class="title-subtitle text_light">Lorem ipsum dolor sit amet consecetur adipisi
                                        cing elit, sed do eiusmod...</span>
                                    <ul class="entry-meta-list d-flex p-0">
                                        <!-- <li class="meta-tags"><a href="#" rel="tag"><i class="fa fa-tags"></i> Beauty</a></li> -->
                                        <li class="meta-author"><a href="#" rel="author"><i
                                                    class="fa fa-user"></i> By Admin</a></li>
                                        <!-- <li class="meta-comment"><a href="#"><i class="fa fa-comment"></i> 0</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-4">
                        <div class="blog-grid-item">
                            <div class="blog-element-top"> <a href="blog-detail.html"> <img class="thumbnail"
                                        src="{{ asset('front/assets/images/blog-12.jpg') }}" alt="ayira"> </a>
                                <div class="post-date" onclick=""> <span class="post-date-day"> 09 </span><br>
                                    <span class="post-date-month"> oct </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <h4 class="title no_after mb-0 text_white"><a href="blog-detail.html">Simply dummy
                                            text</a></h4>
                                    <span class="title-subtitle text_light">Lorem ipsum dolor sit amet consecetur adipisi
                                        cing elit, sed do eiusmod...</span>
                                    <ul class="entry-meta-list d-flex p-0">
                                        <!-- <li class="meta-tags"><a href="#" rel="tag"><i class="fa fa-tags"></i> Beauty</a></li> -->
                                        <li class="meta-author"><a href="#" rel="author"><i
                                                    class="fa fa-user"></i> By Admin</a></li>
                                        <!-- <li class="meta-comment"><a href="#"><i class="fa fa-comment"></i> 0</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-4">
                        <div class="blog-grid-item">
                            <div class="blog-element-top"> <a href="blog-detail.html"> <img class="thumbnail"
                                        src="{{ asset('front/assets/images/blog-13.jpg') }}" alt="ayira"> </a>
                                <div class="post-date" onclick=""> <span class="post-date-day"> 03 </span><br>
                                    <span class="post-date-month"> oct </span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <h4 class="title no_after mb-0 text_white"><a href="blog-detail.html">Simply dummy
                                            text</a></h4>
                                    <span class="title-subtitle text_light">Lorem ipsum dolor sit amet consecetur adipisi
                                        cing elit, sed do eiusmod...</span>
                                    <ul class="entry-meta-list d-flex p-0">
                                        <!-- <li class="meta-tags"><a href="#" rel="tag"><i class="fa fa-tags"></i> Beauty</a></li> -->
                                        <li class="meta-author"><a href="#" rel="author"><i
                                                    class="fa fa-user"></i> By Admin</a></li>
                                        <!-- <li class="meta-comment"><a href="#"><i class="fa fa-comment"></i> 0</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <!-- blog-grid End -->

                <!-- pagination Start -->
                <div class="row">
                    {{-- <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <i
                                        class="fa fa-angle-left"></i> </a> </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#">22</a></li>
                            <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <i
                                        class="fa fa-angle-right"></i> </a> </li>
                        </ul>
                    </nav> --}}
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            @if ($blogs->previousPageUrl())
                                <li class="page-item"> <a class="page-link" href="{{ $blogs->previousPageUrl() }}" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
                            @endif
                    
                            @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                <li class="page-item {{ ($page == $blogs->currentPage()) ? 'active' : '' }}"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endforeach
                    
                            @if ($blogs->nextPageUrl())
                                <li class="page-item"> <a class="page-link" href="{{ $blogs->nextPageUrl() }}" aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
                            @endif
                        </ul>
                    </nav>
                </div>
                <!-- pagination End -->

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