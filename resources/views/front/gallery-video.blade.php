@extends('front.layouts.master')
@section('section')
    <section class="inrbnr">

        <div class="site-width">
            <div class="inrbnrContent">
                <div class="inrbnrtext">
                    <h1>Our Videos</h1>
                    <ul class="inrbrnNav">
                        <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="javascript:void(0)"> Gallery</a></li>
                        <li><a href="javascript:void(0)"> Videos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Gallery -->

    <section class="gallerySection pt-50 pb-50">
        <div class="site-width">
            <div class="galleryWrap">
                <div class="row">
                    @if (!empty($galleryvideo))
                        @foreach ($galleryvideo as $item)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blogCardWrapper">
                            <div class="blogSwiperCard videoContainer">
                                <div class="blogHeader">
                                    <!-- <ul>
                                        <li><i class="fa-solid fa-calendar-days"></i> Jan 23, 2024</li>
                                    </ul> -->
                                    <h5>
                                        {{ $item->title }}
                                    </h5>
                                </div>
                                <div class="blogCardImg videoWrap">
                                    <div class="videoPlayThumb">
                                        <img src="{{ asset('uploads/video-gallery/' . $item->image) }}" alt="img">
                                        <div class="video-player">
                                            <div class="other-tools d-flex justify-content-center align-items-center">
                                                <a href="{{ $item->url }}" class="pulse"
                                                    data-lity>
                                                    <i class="fas fa-play"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    @endif

                </div>

            </div>
        </div>
    </section>
@endsection
