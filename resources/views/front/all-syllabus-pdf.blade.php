@extends('front.layouts.master')
@section('section')
    <section class="inrbnr">

        <div class="site-width">
            <div class="inrbnrContent">
                <div class="inrbnrtext">
                    <h2>All Syllabus PDF</h2>
                    <ul class="inrbrnNav">
                        <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="javascript:void(0)">All Syllabus PDF</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



    <!-- Featured Course -->
    <section class="courses bg-1 pt-50 pb-50 wow animate__fadeIn">
        <div class="site-width">
            <div class="titleSection">
                <div class="text-center">
                    <h2>
                        Syllabus For <span>All Courses PDF</span>
                    </h2>
                    <h4>
                        Syllabus PDF <a href="https://truevastu.com/" target="_blank" class="text-primary">All India
                            Institute Of Occult Science</a>
                    </h4>
                </div>
            </div>
            <div class="courseSlider">
                <div class="coursesWrapper">
                    <div class="row">
                        @if (!empty($syllabusData))
                            @foreach ($syllabusData as $item)
                            <div class="col-md-3">
                                <div class="coursesCard pdfcoursesCard">
                                    <a href="{{ asset('uploads/syllabus/' . $item->file) }}"
                                        target="_blank" class="">
                                        <div class="coursesHeader">
                                            <div class="courseImg">
                                                <span> <img
                                                        src="{{ asset('uploads/syllabus/image/' . $item->image) }}"
                                                        alt="{{ $item->course_name }}"></span>
                                            </div>
                                        </div>
                                        <div class="courseContent">
                                            <h4>
                                                {{ $item->course_name }}
                                            </h4>
    
                                        </div>
                                    </a>
                                    <div class="moreDetailBtn"><a
                                            href="{{ asset('uploads/syllabus/' . $item->file) }}"
                                            target="_blank" class=""><span> Download <i
                                                    class="fa-regular fa-file-pdf"></i></span></a></div>
                                </div>
                            </div> 
                            @endforeach
                        @endif
                       
                    </div>


                </div>
            </div>

        </div>
    </section>


    <!-- Features -->
@endsection
