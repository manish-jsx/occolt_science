@extends('front.layouts.master')
@section('section')

    <!-- About Us -->

    <section class="admissionForm aboutSection aboutbg sectionscroll aboutpadding wow animate__fadeIn"
        id="scrolling-container">
        <div class="site-width">
            <div class="row align-item-center justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="hctFromContainer">
                        <div class="hctf">
                            <div class="titleSection">
                                <div class="text-center">
                                    <h2>
                                        <span>Application Form</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="notifyNote">
                                Please Write Your Name & Address in CAPITAL Letter Only
                            </div>
                            <div class="formWrapper">
                                <div class="formInner">
                                    <form action="{{ route('save_addmission_form') }}" method="POST" id="addmissionForm" enctype="multipart/form-data"
                                    data-parsley-validate>
                                    @csrf   
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-group">
                                                    <span>Courses </span><span style="color: red;">*</span>
                                                    <select class="form-select" aria-label="Default select example" name="course" id="courseSelect" onchange="loadSubcourse(this.value)" required>
                                                        <option value="" selected>-- Select --</option>
                                                        <option value="Astrology">Astrology</option>
                                                        <option value="Vaastu">Vaastu</option>
                                                        <option value="Numerology">Numerology</option>
                                                        <option value="Palmistry">Palmistry</option>
                                                        <option value="Reiki">Reiki</option>
                                                        <option value="Tarot">Tarot</option>
                                                        <option value="Coffee Cup Reading">Coffee Cup Reading</option>
                                                        <option value="Graphology">Graphology</option>
                                                        <option value="Angel Card Reading">Angel Card Reading</option>
                                                        <option value="Lama Fera">Lama Fera</option>
                                                        <option value="Rune Reading">Rune Reading</option>
                                                    </select>
                                                    <span class="text-danger" id="error-course"></span>



                                                    <!-- <select class="form-select" aria-label="Default select example">
                                                        <option value="0" selected disabled>-- Select --</option>
                                                        <option value="1">Astrology</option>
                                                        <option value="2">Vaastu</option>
                                                        <option value="3">Numerology</option>
                                                        <option value="4">Palmistry</option>
                                                        <option value="5">Reiki</option>
                                                        <option value="6">Tarot</option>
                                                        <option value="7">Coffee Cup Reading</option>
                                                        <option value="8">Graphology</option>
                                                        <option value="9">Angel Card Reading</option>
                                                        <option value="10">Lama Fera</option>
                                                        <option value="11">Rune Reading</option>
                                                    </select> -->
                                                </label>
                                            </div>

                                            <div class="col-md-6">
                                                <div id="subcourseDiv" style="display: none;">
                                                <label class="form-group wow fadeInRight" data-wow-delay=".3s">
                                                    <span id="d_co"> </span><span style="color: red;">*</span>
                                                    <select class="form-select" aria-label="Default select example" id="subcourseSelect" name="subcourse" required>
                                                        <option value=" " selected></option>
                                                        <!-- <option value="Certificate Course in Astrology">Certificate Course in Astrology</option>
                                                        <option value="Diploma in Astrology">Diploma in Astrology</option>
                                                        <option value="Master in Astrology">Master Astrology</option>
                                                        <option>Vaastu Courses</option>
                                                        <option value="Diploma in True Vaastu">Diploma in True Vaastu</option>
                                                        <option value="Master in True Vaastu">Master in True Vaastu</option>
                                                        <option>Numerology Courses</option>
                                                        <option value="Diploma in Numerology">Diploma in Numerology</option>
                                                        <option value="Master in Numerology">Master in Numerology</option>
                                                        <option>Palmistry Courses</option>
                                                        <option value="Diploma in Palmistry">Diploma in Palmistry</option>
                                                        <option value="Master in Palmistry">Master in Palmistry</option>
                                                        <option>Reiki Courses</option>
                                                        <option value="Reiki First Degree">Reiki First Degree</option>
                                                        <option value="Reiki Second Degree">Reiki Second Degree</option>
                                                        <option value="Reiki First & Second Degree">Reiki First & Second Degree</option>
                                                        <option value="Reiki Master Healer 3A">Reiki Master Healer 3A</option>
                                                        <option value="Reiki Master Teacher 3B">Reiki Master Teacher 3B</option>
                                                        <option value="Reiki Master 3A & 3B">Reiki Master 3A & 3B</option>
                                                        <option value="Reiki Grand Master">Reiki Grand Master</option>
                                                        <option>Tarot Courses</option>
                                                        <option value="Diploma in Tarot Card">Diploma in Tarot Card</option>
                                                        <option>Coffee Cup Reading Courses:</option>
                                                        <option value="Diploma in Coffee Cup Reading">Diploma in Coffee Cup Reading</option>
                                                        <option>Graphology Courses</option>
                                                        <option value="Diploma in Graphology">Diploma in Graphology</option>
                                                        <option value="Master in Graphology">Master in Graphology</option>
                                                        <option value="">Angel Card Reading Courses</option>
                                                        <option value="Diploma in Angel Card">Diploma in Angel Card</option>
                                                        <option value="">Lama Fera Courses:</option>
                                                        <option value="Master Healer in Lama Fera">Master Healer in Lama Fera</option>
                                                        <option value="Master Teacher in Lama Fera">Master Teacher in Lama Fera</option>
                                                        <option value="">Rune Reading Courses:</option>
                                                        <option value="">Diploma in Rune Reading</option> -->

                                                    </select>
                                                    <span class="text-danger" id="error-subcourse"></span>


                                                    <!-- <select class="form-select" aria-label="Default select example" id="subcourseSelect">
                                                        <option value="0" selected disabled>-- Subcourses will appear here --</option>
                                                    </select> -->

                                                </label>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span for="">Your Name </span><span style="color: red;">*</span>
                                                    <input type="text" class="form-control" required="" placeholder="" name="name" required>
                                                    <span class="text-danger" id="error-name"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-group">
                                                    <span>Guardians </span><span style="color: red;">*</span>
                                                    <select class="form-select" name="guardians" onchange="updateLabel(this.value)" name="guardians" required>
                                                        <option value=" ">-- Select--</option>
                                                        <option value="Mother's Name">Mother's Name</option>
                                                        <option value="Father's Name">Father's Name</option>
                                                        <option value="Wife's Name">Wife's Name</option>
                                                        <option value="Husband's Name">Husband's Name</option>
                                                    </select>
                                                    <span class="text-danger" id="error-guardians"></span>
                                                </label>
                                            
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-group">
                                                    <span for="" id="guardianLabel">Mother's/Father's/Wife's/Husband's Name</span><span style="color: red;">*</span>
                                                    <input type="text" class="form-control"  placeholder="" name="guardians_name" required>
                                                    <span class="text-danger" id="error-guardians_name"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span for="">Correspondence Address: </span><span
                                                        style="color: red;">*</span>
                                                    <textarea class="form-control" placeholder="" name="correspondence_address" id="floatingTextarea2"
                                                        style="height: 80px" required></textarea>
                                                        <span class="text-danger" id="error-correspondence_address"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-group">
                                                    <span for="">Mobile Number:</span> <span
                                                        style="color: red;">*</span>
                                                    <input type="text" class="form-control" name="phone" maxlength="10" minlength="10" onkeypress="return /[0-9-/]/i.test(event.key)"
                                                        required="" placeholder="">
                                                        <span class="text-danger" id="error-phone"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-group">
                                                    <span for="">Whatsapp Number</span>
                                                    <input type="text" class="form-control" name="Whatsapp_number" onkeypress="return /[0-9-/]/i.test(event.key)" minlength="10" maxlength="10"
                                                        required="" placeholder="">
                                                        <span class="text-danger" id="error-whatsapp_number"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="form-group">
                                                    <span for="">Alternate Mobile Number</span>
                                                    <input type="text" class="form-control" 
                                                        name="alternate_phone" onkeypress="return /[0-9-/]/i.test(event.key)" minlength="10" maxlength="10" required="" placeholder="" >
                                                        <span class="text-danger" id="error-alternate_phone"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-group">
                                                    <span for="">Date Of Birth</span> <span style="color: red;">*</span>
                                                    <input type="date" class="form-control" name="date_of_birth" required=""
                                                        placeholder="" required>
                                                        <span class="text-danger" id="error-date_of_birth"></span>
                                                </label>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-group">
                                                    <span for="">Your Email</span> <span style="color: red;">*</span>
                                                    <input type="email" class="form-control" name="email" required=""
                                                        placeholder="Email">
                                                        <span class="text-danger" id="error-email"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-group">
                                                    <span>Education Qualification </span><span
                                                        style="color: red;">*</span>
                                                    <select class="form-select" aria-label="Default select example" name="education_qualification" required>
                                                        <option value="" disabled selected>-- Select --</option>
                                                        <option value="10th or Equivalent">10th or Equivalent</option>
                                                        <option value="Intermediate">Intermediate</option>
                                                        <option value="Diploma">Diploma</option>
                                                        <option value="Bachelor">Bachelor</option>
                                                        <option value="Master">Master</option>
                                                        <option value="PHD">PHD</option>
                                                    </select>
                                                    <span class="text-danger" id="error-education_qualification"></span>
                                                </label>
                                            </div>
                                            <div class="notifyNote" style="margin-bottom: 20px;">
                                                Upload Adhar Card Front Image || Upload Adhar Card Back Image || Upload
                                                Passport Size Photograph || Upload Image of Signature
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-group">
                                                    <span for="">Upload Adhar Card Front Image * : MAXIMUM SIZE:
                                                        2MB</span> <span style="color: red;">*</span>
                                                    <input type="file" class="form-control" name="adhar_card_front" required="">
                                                    <span class="text-danger" id="error-adhar_card_front"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-group">
                                                    <span for="">Upload Adhar Card Back Image * : MAXIMUM SIZE:
                                                        2MB</span> <span style="color: red;">*</span>
                                                    <input type="file" class="form-control" name="adhar_card_back" required="">
                                                    <span class="text-danger" id="error-adhar_card_back"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-group">
                                                    <span for="">Upload Passport Size Photograph * : MAXIMUM SIZE:
                                                        2MB</span> <span style="color: red;">*</span>
                                                    <input type="file" class="form-control" name="photo" required="">
                                                    <span class="text-danger" id="error-photo"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-group">
                                                    <span for="">Upload Image of Signature * : MAXIMUM SIZE: 2MB</span>
                                                    <span style="color: red;">*</span>
                                                    <input type="file" class="form-control" name="signature" required="">
                                                    <span class="text-danger" id="error-signature"></span>
                                                </label>
                                            </div>

                                            <!-- <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div data-v-3dfe0fd7="" class="custom-input"><input data-v-3dfe0fd7="" type="text" id="Subject" placeholder="Enter Paptcha" class="form-control form-control"></div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="form-group">
                                                           <img src="assets/img/other/captcha.jpg" alt="img" class="captchaimg"> <a href="javascript:void(0)"><i class="fa-solid fa-arrow-rotate-right"></i></a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> -->

                                            <p>Accept the <a href="terms-condition.html" target="_blank">Terms and
                                                    Conditions</a> & <a href="refund-policy.html" target="_blank">Refund
                                                    Policy</a>*</p>

                                            <div class="col-md-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="terms_and_conditions" type="checkbox" value="Accept the Terms and Conditions & Refund Policy"
                                                        id="ClicktoAccept" required>
                                                    <label class="form-check-label" for="ClicktoAccept">
                                                        Click to accept
                                                    </label>
                                                    <span class="text-danger" id="error-terms_and_conditions"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for=""></label>
                                                <div style="text-align: center;">
                                                    <div class="formSubmitBtn ">
                                                        <button onclick="AddmisionForm()" type="button"   class="btn1">
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


  
<script>
    // Subcourse Data
    const subcourses = {
        Astrology: [
            { value: "Certificate Course in Astrology", text: "Certificate Course in Astrology" },
            { value: "Diploma in Astrology", text: "Diploma in Astrology" },
            { value: "Master in Astrology", text: "Master in Astrology" }
        ],
        Vaastu: [
            { value: "Diploma in True Vaastu", text: "Diploma in True Vaastu" },
            { value: "Master in True Vaastu", text: "Master in True Vaastu" }
        ],
        Numerology: [
            { value: "Diploma in Numerology", text: "Diploma in Numerology" },
            { value: "Master in Numerology", text: "Master in Numerology" }
        ],
        Palmistry: [
            { value: "Diploma in Palmistry", text: "Diploma in Palmistry" },
            { value: "Master in Palmistry", text: "Master in Palmistry" }
        ],
        Reiki: [
            { value: "Reiki First Degree", text: "Reiki First Degree" },
            { value: "Reiki Second Degree", text: "Reiki Second Degree" },
            { value: "Reiki First & Second Degree", text: "Reiki First & Second Degree" },
            { value: "Reiki Master Healer 3A", text: "Reiki Master Healer 3A" },
            { value: "Reiki Master Teacher 3B", text: "Reiki Master Teacher 3B" },
            { value: "Reiki Master 3A & 3B", text: "Reiki Master 3A & 3B" },
            { value: "Reiki Grand Master", text: "Reiki Grand Master" }
        ],
        Tarot: [
            { value: "Diploma in Tarot Card", text: "Diploma in Tarot Card" }
        ],
        "Coffee Cup Reading": [
            { value: "Diploma in Coffee Cup Reading", text: "Diploma in Coffee Cup Reading" }
        ],
        Graphology: [
            { value: "Diploma in Graphology", text: "Diploma in Graphology" },
            { value: "Master in Graphology", text: "Master in Graphology" }
        ],
        "Angel Card Reading": [
            { value: "Diploma in Angel Card", text: "Diploma in Angel Card" }
        ],
        "Lama Fera": [
            { value: "Master Healer in Lama Fera", text: "Master Healer in Lama Fera" },
            { value: "Master Teacher in Lama Fera", text: "Master Teacher in Lama Fera" }
        ],
        "Rune Reading": [
            { value: "Diploma in Rune Reading", text: "Diploma in Rune Reading" }
        ]
    };

    // Function to load subcourses dynamically
    function loadSubcourse (course) {

        if(course){
                $('#subcourseDiv').css('display', 'block'); // Show the subcourse div
            }
            else{
                $('#subcourseDiv').css('display', 'none'); // Show the subcourse div
            }

        $('#d_co').html (course + ' Courses');


        const subcourseSelect = document.getElementById("subcourseSelect");
        subcourseSelect.innerHTML = ""; // Clear previous options

        if (subcourses[course]) {
            // Add default disabled option
            const defaultOption = document.createElement("option");
            defaultOption.value = "0";
            defaultOption.textContent = ` ${course} Courses`;
            defaultOption.disabled = false;
            defaultOption.selected = true;
            subcourseSelect.appendChild(defaultOption);

            // Append subcourses dynamically
            subcourses[course].forEach(subcourse => {
                const option = document.createElement("option");
                option.value = subcourse.value;
                option.textContent = subcourse.text;
                subcourseSelect.appendChild(option);
            });
        } else {
            // If no subcourses are available
            const noOption = document.createElement("option");
            noOption.value = "0";
            noOption.textContent = "No subcourses available";
            noOption.disabled = false;
            noOption.selected = true;
            subcourseSelect.appendChild(noOption);
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function AddmisionForm() {
        $('.text-danger').text('');
        var isValid = $('#addmissionForm').parsley().validate();
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

        var action = $('#addmissionForm').attr('action');
        var formData = new FormData($('#addmissionForm')[0]);
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
                        window.location.href = '{{ route('home.thank_you') }}';

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