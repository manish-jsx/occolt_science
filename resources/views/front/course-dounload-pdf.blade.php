@extends('front.layouts.master')
@section('section')
    <!-- Banner Section -->
    <section class="inrbnr">

        <div class="site-width">
            <div class="inrbnrContent">
                <div class="inrbnrtext">
                    <h2>Syllabus PDF</h2>
                    <ul class="inrbrnNav">
                        <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="javascript:void(0)"> Library</a></li>
                        <li><a href="javascript:void(0)"> Syllabus PDF</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutSection homeFormSection course-download-sec bg-1 wow animate__fadeIn"
        style="visibility: visible; animation-name: fadeIn;">
        <div class="site-width">
            <div class="row align-item-center justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <div class="hctFromContainer">
                        <div class="hctf">

                            <div class="row ">
                                <div class="pdf_logo_wrapper">
                                    <div class="col-md-3">
                                        <div class="pdf_logo_img">
                                            <img src="{{ asset('front') }}/assets/img/WEBSITE_HEADER_LOGO.png" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="text_logo">
                                            <img src="{{ asset('front') }}/assets/img/WEBSITE_HEADER_TEXT.png" alt="">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="hctfTitle text-center">
                                <h4>

                                    FILL OUT YOUR DETAILS TO DOWNLOAD SYLLABUS
                                </h4>

                            </div>
                            <div class="formWrapper">
                                <div class="formInner">
                                        <form action="{{ route('home.download_syllabus_enquiry') }}" method="POST" id="dounloadSyllabusEnquiry"
                            data-parsley-validate>
                            @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span>Your Name </span><span style="color: red;">*</span>
                                                    <input type="text" class="form-control" name="name"
                                                        onkeypress="return /[a-z-/ /]/i.test(event.key)"
                                                        required="" placeholder="Name">
                                                        <span class="text-danger" id="error-name"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span for="">Your Number </span><span
                                                        style="color: red;">*</span>
                                                    <input type="text" class="form-control" name="phone"
                                                        onkeypress="return /[0-9-/]/i.test(event.key)" minlength="10"
                                                        maxlength="10" required="" placeholder="Number">
                                                        <span class="text-danger" id="error-phone"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span for="">Your Email</span> <span
                                                        style="color: red;">*</span>
                                                    <input type="email" class="form-control" name="email"
                                                        required="" placeholder="Email">
                                                        <span class="text-danger" id="error-email"></span>
                                                </label>
                                            </div>

                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span>Choose your Course</span><span style="color: red;">*</span>
                                                    <select class="form-select" aria-label="Default select example" name="course" required>
                                                        <option value=" " selected disabled>-- Select --</option>
                                                        <option value="Astrology">Astrology</option>
                                                        <option value="Vaastu">Vaastu</option>
                                                        <option value="Numerology">Numerology</option>
                                                        <option value="Palmistry">Palmistry</option>
                                                        <option value="Reiki">Reiki</option>
                                                        <option value="Graphology">Graphology</option>
                                                        <option value="Tarot">Tarot</option>

                                                    </select>
                                                    <span class="text-danger" id="error-course"></span>
                                                </label>
                                            </div>

                                            <div class="col-md-12">
                                                <label for=""></label>

                                                <div style="text-align: center;">
                                                    <div class="formSubmitBtn "
                                                        onclick="DOWNLOADSYLLABUSForm()">
                                                        <button type="button" class="btn1">
                                                            Free - PDF Download
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function DOWNLOADSYLLABUSForm() {
            $('.text-danger').text('');
            var isValid = $('#dounloadSyllabusEnquiry').parsley().validate();
            // var isValid = $('#bulkOrderForm').parsley().validate();
            if (!isValid) {
                return;
            }
            Swal.fire({
                title: 'Please wait...',
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    Swal.showLoading()
                }
            });

            var action = $('#dounloadSyllabusEnquiry').attr('action');
            var formData = new FormData($('#dounloadSyllabusEnquiry')[0]);
            $.ajax({
                type: "POST",
                url: action,
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.status == 'true') {
                        // Show an alert for successful registration
                        Swal.close();

                        // Swal.fire({
                        //     icon: 'success',
                        //     title: 'Success!',
                        //     text: data.message,
                        // }).then(function() {
                            // Redirect to a URL
                            window.location.href = '{{ route('home.all_syllabus_pdf') }}';

                        // });
                    }
                },
                error: function(xhr) {
                    Swal.close();
                    // var errors = xhr.responseJSON.errors;
                    // $.each(errors, function(key, value) {
                    //     $('#error-' + key).text(value[0]);

                    // });
                    var errors = xhr.responseJSON.errors;
                    if (errors) {
                        $.each(errors, function(key, value) {
                            $('#error-' + key).text(value[0]);
                        });
                    }
                    if (xhr.responseJSON.error) {
                        $('#error-captha').text(xhr.responseJSON.error);
                    }
                }
            });
        }
    </script>

  @endsection