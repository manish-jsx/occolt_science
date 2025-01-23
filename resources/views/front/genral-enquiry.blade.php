@extends('front.layouts.master')
@section('section')
    <section class="inrbnr">
       
        <div class="site-width">
            <div class="inrbnrContent">
                <div class="inrbnrtext">
                    <h2>Enquiry</h2>
                    <ul class="inrbrnNav">
                        <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="javascript:void(0)"> Enquiry</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="aboutSection  homeFormSection bg-1 wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="site-width">
            <div class="row align-item-center justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <div class="hctFromContainer">
                        <div class="hctf">
                            <div class="hctfTitle text-center">
                                <h4>
                                    Call And Book Your Seat For Free Live Online Demo on 2nd June 2024
                                </h4>
                                <p>
                                    <span id="typed" class="typed enquiry">
                                        Limited Seats Hurry up!!!!
                                    </span>
                                </p>
                            </div>
                            <div class="formWrapper">
                                <div class="formInner">
                                    <form action="{{ route('home.genral-enquiry') }}" method="POST" id="genralenquiry"
                                    data-parsley-validate>
                                    @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span>Your Name </span><span style="color: red;">*</span>
                                                    <input type="text" class="form-control" name="name" onkeypress="return /[a-z-/ /]/i.test(event.key)" required="" placeholder="Name">
                                                    <span class="text-danger" id="error-name"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span for="">Your Number </span><span style="color: red;">*</span>
                                                    <input type="text" class="form-control" name="phone" onkeypress="return /[0-9-/]/i.test(event.key)" minlength="10" maxlength="10" required="" placeholder="Number">
                                                    <span class="text-danger" id="error-phone"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span for="">Your Email</span> <span style="color: red;">*</span>
                                                    <input type="email" class="form-control" name="email" required="" placeholder="Email">
                                                    <span class="text-danger" id="error-email"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label for=""></label>

                                                <div style="text-align: center;">
                                                    <div class="formSubmitBtn ">
                                                        <button onclick="SendGenralEnquiry()" type="button"   class="btn1">
                                                            Submit Now
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
        function SendGenralEnquiry() {
            $('.text-danger').text('');
            var isValid = $('#genralenquiry').parsley().validate();
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

            var action = $('#genralenquiry').attr('action');
            var formData = new FormData($('#genralenquiry')[0]);
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

                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: data.message,
                        }).then(function() {
                            // Redirect to a URL
                            // window.location.href = '{{ url('admin/product/list') }}';
                            location.reload();

                        });
                    }
                },
                error: function(xhr) {
                    Swal.close();
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value) {
                        $('#error-' + key).text(value[0]);

                        // toastr.options = {
                        //     "closeButton": true,
                        //     "progressBar": true
                        // }
                        // toastr.error(value[0]);
                    });
                }
            });
        }
    </script>
  @endsection