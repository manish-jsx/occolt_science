@extends('front.layouts.master')
@section('section')
    <div class="clear"></div>
    <!-- Slider Start  -->

    <div class="top-banner">
        <div class="container">
            <div class="inner-banner-menu">
                <h4>Blog Details</h4>

                <ul>
                    <li><a href="{{ route('home') }}">Home</a><span>&nbsp;&nbsp;&gt;</span></li>
                    <li><a href="javascript:void(0)">&nbsp;&nbsp;Blog Details</a></li>
                </ul>
            </div>


        </div>
        <div class="clear"></div>
    </div>

    <!-- Slider End -->




    <div class="section section-padding-04 blog-v-two blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- Blog Details Wrapper Start -->
                    <div class="blog-details-wrapper section-padding-03">
                        <div class=" position-relative">
                            <img class="w-100" src="{{ asset('uploads/Blog/LargeImg/' . $blogDat->image) }}"
                                alt="Blog details">
                            <div class="post-date" onclick=""> <span class="post-date-day">
                                    {{ $blogDat->created_at->format('d') }} </span><br>
                                <span class="post-date-month"> {{ $blogDat->created_at->format('M') }} </span>
                            </div>
                        </div>

                        <div class="blog-meta">
                            <h4 class="title no_after mb-0 text_white"><a href="#">{{ $blogDat->title }}</a></h4>
                            <ul class="entry-meta-list d-flex p-0">
                                <!-- <li class="meta-tags"><a href="#" rel="tag"><i class="fa fa-tags"></i> Beauty</a></li> -->
                                <li class="meta-author"><a href="#" rel="author"><i class="fa fa-user"></i>
                                        By Admin</a></li>
                                <!-- <li class="meta-comment"><a href="#"><i class="fa fa-comment"></i> 0</a></li> -->
                            </ul>
                        </div>
                        <p>{{ $blogDat->short_description }}</p>

                        {!! $blogDat->full_description !!}
                        {{-- <blockquote>
                                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nemo dicta, enim
                                    repellendus maxime, quos vero similique aliquid ipsa accusamus asperiores. Quisquam
                                    error similique nobis voluptate quo, nesciunt libero est odio reprehenderit ex facilis
                                    a, fugiat tenetur accusamus, ad ullam."</p>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas vitae officiis fugiat nam.
                                Quaerat aspernatur alias facilis distinctio vitae. Perspiciatis aliquid excepturi quo eaque
                                ipsum, quos nesciunt, perferendis expedita, soluta ut dicta officiis dolorem voluptas illo
                                eveniet enim. Voluptatem maxime sunt labore qui quisquam delectus distinctio, molestiae
                                dolores amet aut ipsum, illo dolorem a? Nesciunt dolore consequatur accusamus iste magni,
                                quidem mollitia ullam exercitationem aspernatur animi ab! Cum pariatur ex illo soluta
                                voluptatum, corrupti iusto iure ut in omnis inventore?</p>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam deserunt
                                quod, consectetur repellat odit accusamus ea id. Facere, obcaecati quam magni assumenda quas
                                minima quasi autem omnis molestias deserunt expedita.</p> --}}




                        <!-- <div class="details-dec">
                          <div class="details-dec-left">
                            <h4 class="title no_after">Your favorite fashion store</h4>
                            <p>Sed lobortis lorem ut nisl bibendum fermentum. Ut ut felis ligula. Curabitur sed tempus felis. Morbi a aliquam eros, a lobortis ligula. Aenean egestas leo diam, vitae varius tellus cursus quis. </p>
                            <ul class="p-0">
                              <li>Sed lobortis lorem ut nisl bibendum fermentum. Ut ut felis ligula. Curabitur sed tempus felis. </li>
                              <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                              <li>Morbi imperdiet quam erat, vitae semper.</li>
                              <li>Integer posuere commodo elementum. Donec ut dui mi.</li>
                            </ul>
                            <a href="shop-grid-left-sidebar.html" class="load-more mt-3 primary_dark_btn">Explore now</a> </div>
                          <img src="assets/images/blog-15.jpg" alt="Blog details"> </div> -->
                        <!-- <p>Rationally encounter consequences that extremely again is there anyone who loves or pursues or desires obtain because it is pain, but because circumstances pain of itself, because it is pain, but because occasionally circums tances some of our occur in which toil and pain can procure him some great pleasure</p> -->
                    </div>
                    <!-- Blog Details Wrapper End -->

                    <!-- Blog Details Share Start -->
                    <!-- <div class="blog-details-share d-flex justify-content-between">
                        <div class="d-flex"> <span class="title no_after">Share <i class="flaticon-share"></i></span>
                          <div class="widget-social justify-content-start">
                            <ul class="d-flex m-0 p-0">
                              <li><a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a> </li>
                              <li><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a> </li>
                              <li><a title="Youtube" href="#"><i class="fa fa-instagram"></i></a> </li>
                              <li><a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a> </li>
                            </ul>
                          </div>
                        </div>
                        <nav aria-label="Page navigation example">
                          <ul class="pagination justify-content-center">
                            <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <i class="fa fa-angle-left"></i> Prev </a> </li>
                            <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> Next <i class="fa fa-angle-right"></i> </a> </li>
                          </ul>
                        </nav>
                      </div> -->
                    <!-- Blog Details Share End -->

                    <!-- Blog Details Comment Start -->
                    <!-- <div class="blog-details-comments">
                        <div class="comments-wrpper about-author">
                          <div class="comments-items p-0 m-0">
                            <div class="single-comment">
                              <div class="comment-thumb"> <img src="assets/images/thumb-04.jpg" alt="ayira"> </div>
                              <div class="comment-content border-bottom-0">
                                <div class="comment-name-date">
                                  <h5 class="name">About the Author</h5>
                                </div>
                                <p>Etiam sit amet mi et odio blandit semper. Mauris consectetur nulla fringilla nibh finibus, at varius diam pretium. Phasellus dapibus vestibulum lobortis. Maecenas quis volutpat elit, non ultrices sem. Nam ultricies ipsum convallis, volutpat mauris id, tempor libero. Mauris at nunc massa. </p>
                                <div class="widget-social justify-content-start">
                                  <ul class="d-flex m-0 p-0">
                                    <li><a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a> </li>
                                    <li><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a> </li>
                                    <li><a title="Youtube" href="#"><i class="fa fa-instagram"></i></a> </li>
                                    <li><a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a> </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="comments-wrpper">
                          <h4 class="comment-title">Comments <span class="count">3</span></h4>
                          <ul class="comments-items p-0 m-0">
                            <li>
                              <div class="single-comment">
                                <div class="comment-thumb"> <img src="assets/images/thumb-01.jpg" alt="ayira"> </div>
                                <div class="comment-content">
                                  <div class="d-flex justify-content-between">
                                    <div class="comment-name-date">
                                      <h5 class="name">Liam Olivia</h5>
                                      <span class="date">Nov. 12, 2020 At 11:23 Am</span> </div>
                                    <a href="#" class="reply">Reply</a> </div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. </p>
                                </div>
                              </div>
                              <ul class="comments-reply">
                                <li>
                                  <div class="single-comment">
                                    <div class="comment-thumb"> <img src="assets/images/thumb-02.jpg" alt="ayira"> </div>
                                    <div class="comment-content">
                                      <div class="d-flex justify-content-between">
                                        <div class="comment-name-date">
                                          <h5 class="name">Noah Emma</h5>
                                          <span class="date">Nov. 12, 2020 At 11:23 Am</span> </div>
                                        <a href="#" class="reply">Reply</a> </div>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien. </p>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </li>
                            <li class="border-bottom-0 mb-0">
                              <div class="single-comment">
                                <div class="comment-thumb"> <img src="assets/images/thumb-03.jpg" alt="ayira"> </div>
                                <div class="comment-content">
                                  <div class="d-flex justify-content-between">
                                    <div class="comment-name-date">
                                      <h5 class="name">William Oliver</h5>
                                      <span class="date">Nov. 12, 2020 At 11:23 Am</span> </div>
                                    <a href="#" class="reply">Reply</a> </div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae neque vitae sapien malesuada aliquet. In viverra dictum justo in vehicula. Fusce et massa eu ante ornare molestie. </p>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="comments-all">
                          <div class="comments-wrpper">
                            <h4 class="comment-title">Leave a comment</h4>
                            <h5 class="comment-sub-title">Your email address will not be published. Required fields are marked *</h5>
                            <div class="comments-form">
                              <form action="#">
                                <div class="row">
                                  <div class="col-md-4">
                                    <div class="single-form">
                                      <input type="text" placeholder="Name">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="single-form">
                                      <input type="email" placeholder="Email">
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="single-form">
                                      <input type="text" placeholder="Website">
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="single-form">
                                      <textarea placeholder="Comment"></textarea>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="saves">
                                      <div class="form-check d-flex">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                                        <label class="form-check-label" for="flexCheckChecked"> Save my name, email, and website in this browser for the next time I comment. </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <div class="single-form">
                                      <button class="btn primary_dark_btn">Post Comment</button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div> -->
                    <!-- Blog Details Comment End -->
                </div>
                <!-- Blog Wrapper End -->

                <div class="col-lg-3">
                    <div class="sidebar-widget section-padding-03">
                        <!-- Widget Item Start -->
                        <!-- <div class="widget-item mt-0">
                          <div class="widget-search">
                            <form action="#">
                              <input type="text" placeholder="Search...">
                              <button><i class="fa fa-search"></i></button>
                            </form>
                          </div>
                        </div> -->
                        <!-- Widget Item End -->
                        <!-- Widget Item Start -->
                        <!-- <div class="widget-item">
                          <h4 class="widget-title mb-0">Categories</h4>
                          <div class="widget-link">
                            <ul>
                              <li> <a href="blog-list-v1.html">Apparel Directories</a> </li>
                              <li> <a href="blog-list-v1.html">Beauty</a> </li>
                              <li> <a href="blog-list-v1.html">Bridal Fashion</a> </li>
                              <li> <a href="blog-list-v1.html">Clothing</a> </li>
                              <li> <a href="blog-list-v1.html">Fashion</a> </li>
                              <li> <a href="blog-list-v1.html">Mens Fashion</a> </li>
                              <li> <a href="blog-list-v1.html">Retail Stores</a> </li>
                              <li> <a href="blog-list-v1.html">Shopping</a> </li>
                              <li> <a href="blog-list-v1.html">Watches</a> </li>
                              <li> <a href="blog-list-v1.html">Womens Fashion</a> </li>
                            </ul>
                          </div>
                        </div> -->
                        <!-- Widget Item End -->
                        <!-- Widget Item Start -->
                        <div class="widget-item mt-0">
                            <h4 class="widget-title">Recent Post</h4>
                            <div class="widget-post">
                                @foreach ($blogs as $item)
                                <div class="single-post pt-0">
                                    <div class="post-thumb"> <a href="{{ route('home.blog-datels', [$item->slug]) }}"><img
                                                src="{{ asset('uploads/Blog/SmallImg/' . $item->image) }}" alt="Blog"></a> </div>
                                    <div class="post-content"> <a href="{{ route('home.blog-datels', [$item->slug]) }}">{{ $item->title }}</a>
                                        <span class="date">{{ $item->created_at->format('M j, Y') }}</span>
                                    </div>
                                </div>
                                @endforeach
                                {{-- <div class="single-post pt-0">
                                    <div class="post-thumb"> <a href="blog-detail.html"><img
                                                src="assets/images/post-01.jpg" alt="Blog"></a> </div>
                                    <div class="post-content"> <a href="blog-detail.html">Integer posuere commodo</a>
                                        <span class="date">Oct 8, 2020</span>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div class="post-thumb"> <a href="blog-detail.html"><img
                                                src="assets/images/post-02.jpg" alt="Blog"></a> </div>
                                    <div class="post-content"> <a href="blog-detail.html">Sed lobortis lorem ut nisl
                                            bibendum</a> <span class="date">Oct 8, 2020</span> </div>
                                </div>
                                <div class="single-post">
                                    <div class="post-thumb"> <a href="blog-detail.html"><img
                                                src="assets/images/post-03.jpg" alt="Blog"></a> </div>
                                    <div class="post-content"> <a href="blog-detail.html">Integer posuere commodo</a>
                                        <span class="date">Oct 8, 2020</span>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div class="post-thumb"> <a href="blog-detail.html"><img
                                                src="assets/images/post-04.jpg" alt="Blog"></a> </div>
                                    <div class="post-content"> <a href="blog-detail.html">Mauris consectetur nulla</a>
                                        <span class="date">Oct 8, 2020</span>
                                    </div>
                                </div>
                                <div class="single-post">
                                    <div class="post-thumb"> <a href="blog-detail.html"><img
                                                src="assets/images/post-05.jpg" alt="Blog"></a> </div>
                                    <div class="post-content"> <a href="blog-detail.html">Quisque sit amet
                                            vestibulum</a> <span class="date">Oct 8, 2020</span> </div>
                                </div> --}}
                            </div>
                        </div>
                        <!-- Widget Item End -->



                    </div>
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
