@extends('front.layouts.master')
@section('section')

    <!-- Banner Section -->
    <section class="inrbnr">

        <div class="site-width">
            <div class="inrbnrContent">
                <div class="inrbnrtext">
                    <h2>Our Gallery Images</h2>
                    <ul class="inrbrnNav">
                        <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="javascript:void(0)"> Gallery</a></li>
                        <li><a href="javascript:void(0)"> Images</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Gallery -->

    <section class="gallerySection gallerySectionmob pt-50 pb-50">
        <div class="site-width">
            <div class="galleryWrap">
                <div id="main" class="wow animate__fadeIn">
                    <div id="filter">
                        <ul id="filters" class="galleryNav">
                            <li data-filter="*" class="active">
                                <h4>All</h4>
                            </li>
                            <li data-filter="first">
                                <h4>Convocation </h4>
                            </li>
                            <li data-filter="second">
                                <h4>Vastu Practical</h4>
                            </li>
                            <!-- <li data-filter="third">
                                    <h4>Our Art Works</h4>
                                </li> -->
                        </ul>
                        <div id="lightgallery" class="galleryImgWrap row">
                            @if (!empty($galleeryImage))
                            @foreach ($galleeryImage as $item)
                            <div data-responsive="{{ asset('uploads/image-gallery/' . $item->image) }} 375, {{ asset('uploads/image-gallery/' . $item->image) }} 480, {{ asset('uploads/image-gallery/' . $item->image) }} 800"
                                data-src="{{ asset('uploads/image-gallery/' . $item->image) }}" data-sub-html="Convocation"
                                class="galleryImg col-lg-3 col-md-4 col-sm-6 filter-item {{ $item->image_section == 1 ? 'first' : ($item->image_section == 2 ? 'second' : '') }}">
                                <a href="" class="wow animate__zoomIn" data-wow-delay="0.2s">
                                    <span class="galViewer"><i class="fa-solid fa-plus"></i></span>
                                    <img class="img-responsive" src="{{ asset('uploads/image-gallery/' . $item->image) }}">
                                </a>
                            </div>
                            @endforeach
                            @endif
                           

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>



    <script src='{{ asset('front') }}/assets/js/lightgallery.js'></script>
    <script>
        lightGallery(document.getElementById('lightgallery'))
        lightGallery(document.getElementById('lightgallery2'))
    </script>
  @endsection