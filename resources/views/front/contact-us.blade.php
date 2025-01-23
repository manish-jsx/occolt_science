@extends('front.layouts.master')
@section('section')

    <!-- Banner Section -->
    <section class="inrbnr">

        <div class="site-width">
            <div class="inrbnrContent">
                <div class="inrbnrtext">
                    <h1>Need Help?</h1>
                    <ul class="inrbrnNav">
                        <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="javascript:void(0)"> Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="contactUsForm ctbg2 pt-50 pb-50">
        <div class="site-width">
            <div class="contactusFromCard">
                <div class="row">
                    <div class="col-md-6 g-0">
                        <div class="mapSection">
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d112048.52872666258!2d77.169401!3d28.644249!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d02eae1524b9d%3A0xbf8a760478fbe2fc!2sAll%20India%20Institute%20of%20Occult%20Science!5e0!3m2!1sen!2sin!4v1716796144057!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14005.574530340728!2d77.1329436832268!3d28.6479302075512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0304f26ffca1%3A0x280ae319d351953b!2sGKG%20Canvas%20Pvt.%20Ltd%207%2F26%20Kirti%20Nagar%20Industrial%20Area!5e0!3m2!1sen!2sin!4v1734085609121!5m2!1sen!2sin"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>

                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d639.9737243190931!2d8.749640696796567!3d50.08825464075183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd0dee5b0109eb%3A0x88330f151c60e85c!2sSchumannstra%C3%9Fe%2059%2C%2063069%20Offenbach%20am%20Main%2C%20Germany!5e0!3m2!1sen!2sin!4v1724655935981!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                        </div>
                    </div>
                    <div class="col-md-6 g-0">
                        <div class="enquireNowForm contactPage">
                            <form action="{{ route('send_enquiry') }}" method="POST" id="contactusform"
                            data-parsley-validate>
                            @csrf
                                <div class="right-sidebar-box">
                                    <h2 style="margin-bottom: 12px; margin-top: 0px;">
                                        Send Your Query
                                    </h2>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="ml-md-3 mb-3 custom-form">
                                                <label class="form-label" for="FName">Name <span
                                                        style="color: red;">*</span></label>
                                                <div class="custom-input">
                                                    <input type="text" id="FName" placeholder="" name="name"
                                                        class="form-control form-control" required>
                                                        <span class="text-danger" id="error-name"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="ml-md-3 mb-3 custom-form">
                                                <label class="form-label" for="email">Email <span
                                                        style="color: red;">*</span></label>
                                                <div class="custom-input">
                                                    <input type="text" id="email" placeholder="" name="email"
                                                        class="form-control form-control" required>
                                                        <span class="text-danger" id="error-email"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ml-md-3 mb-3 custom-form">
                                                <label class="form-label" for="number">Contact Phone <span
                                                        style="color: red;">*</span></label>
                                                <div class="custom-input">
                                                    <input type="text" id="number" placeholder="" name="phone"
                                                        maxlength="10"
                                                        oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                                        class="form-control form-control">
                                                        <span class="text-danger" id="error-phone"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="ml-md-3 mb-3 custom-form">
                                                <label class="form-label" for="genderSelect">Choose your Course <span
                                                        style="color: red;">*</span></label>
                                                <select class="form-select" aria-label="Default select example"
                                                    id="ddlUserType" name="course_name" required>
                                                    <option value="Astrology Course">Astrology Course</option>
                                                    <option value="Vastu Course">Vastu Course</option>
                                                    <option value="Numerology Course">Numerology Course</option>
                                                    <option value="Palmistry Course">Palmistry Course</option>
                                                    <option value="Tarot Card Course">Tarot Card Course</option>
                                                    <option value="Graphology Course">Graphology Course</option>
                                                    <option value="Reiki Course">Reiki Course</option>
                                                </select>
                                                <span class="text-danger" id="error-course_name"></span>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="ml-md-3 mb-3 custom-form">
                                                <label class="form-label" for="Message">Your Message <span
                                                        style="color: red;">*</span></label>
                                                <div class="custom-input">
                                                    <textarea type="text" id="description" placeholder="" class="form-control form-control" name="message" required></textarea>
                                                    <span class="text-danger" id="error-message"></span>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <!-- <div class="col-12">
                                        <div class="ml-md-3 mb-3 custom-form">
                                            <label class="form-label" for="captcha">Please Enter Captcha <span style="color: red;">*</span></label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div data-v-3dfe0fd7="" class="custom-input">
                                                        <input type="text" id="captcha1" placeholder="" class="form-control form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="captcha">
                                                        <input type="button" id="captcha" name="captcha" placeholder="Captcha" style="pointer-events: none;" class="form-control captcha-value" value="h6APHp">
                                                        <a href="javascript:void(0)" class="refreshcaptcha" onclick="createCaptcha()" style="bottom:40px;">
                                                            <i class="fa-solid fa-rotate-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                    <span id="errorMsg" style="color:red;"></span>
                                    <div class="submitandclear">
                                        <label id="lblMsg" style="color:green;"></label>
                                        <div class="defaultBtn defaultBtncon">
                                            <a href="javascript:void(0)" id="btnSave" onclick="SendContactUsEnquiry()"><span>Get in Touch</span></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact us -->
    <section class="contactUsSection  bg-1  pt-50 pb-50">
        <div class="site-width">
            <div class="contactInfoWrap">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contactInfoCard">
                            <div class="contactinfoIoc">
                                <img src="{{ asset('front') }}/assets/img/icons/calling.png" alt="call icon">
                            </div>
                            <div class="contactinfoContent">
                                <h3>Call Us 24x7</h3>
                                <h3 style="margin-top: 10px;"><a href="tel:+919871923444">+91 9871-92-3444</a>
                                    <a href="tel:+919871743444">+91 9871-74-3444</a>

                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contactInfoCard">
                            <div class="contactinfoIoc">
                                <img src="{{ asset('front') }}/assets/img/icons/location.png" alt="location icon">
                            </div>
                            <div class="contactinfoContent">
                                <h3>Head Office</h3>
                                <h3 style="margin-top: 10px;"><a
                                        href="https://www.google.com/maps/place/GKG+Canvas+Pvt.+Ltd+7%2F26+Kirti+Nagar+Industrial+Area/@28.6479302,77.1329437,15z/data=!4m10!1m2!2m1!1s7%2F25,+Plot-+A,+Kirti+Nagar+Industrial+Area,+Kirti+Nagar,+New+Delhi-+110015!3m6!1s0x390d0304f26ffca1:0x280ae319d351953b!8m2!3d28.6503064!4d77.1460008!15sCko3LzI1LCBQbG90LSBBLCBLaXJ0aSBOYWdhciBJbmR1c3RyaWFsIEFyZWEsIEtpcnRpIE5hZ2FyLCBOZXcgRGVsaGktIDExMDAxNZIBEGNvcnBvcmF0ZV9vZmZpY2XgAQA!16s%2Fg%2F11q84l4p3s?entry=ttu&g_ep=EgoyMDI0MTIxMC4wIKXMDSoASAFQAw%3D%3D"
                                        target="_blank">7/25, Plot- A, Kirti Nagar Industrial Area, Kirti Nagar, New
                                        Delhi- 110015</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contactInfoCard">
                            <div class="contactinfoIoc">
                                <img src="{{ asset('front') }}/assets/img/icons/email.png" alt="email icon">
                            </div>
                            <div class="contactinfoContent">
                                <h3>Write Us</h3>
                                <h3 style="margin-top: 10px;"> <a
                                        href="mailto:contact@occultscience.in">contact@occultscience.in</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class=" bg-1 pt-50 pb-50">
        <div class="site-width">
            <div class="contactInfoWrap">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contactOfferWrap">
                            <div class="contactOfferHeader wow animate__tada">
                                <h2>All India Institute Of Occult Science brings a special offer Live Online Demo Class
                                </h2>
                            </div>
                            <div class="contactOfferContent">
                                <p>
                                    This is to inform you that we are organizing a <a
                                        href="{{ route('home.genral-enquiry') }}">FREE LIVE ONLINE DEMO CLASS</a> Schedule Fixed
                                    for <strong>2nd of June 2:00 PM – 4:00 PM</strong>
                                </p>
                                <p>
                                    Join our Free Online Live Demo Session and Grab the Best Deals
                                </p>
                                <p class="ctofspan"><span>LIMITED OFFER</span><span>LIMITED SEATS</span></p>
                                <h4>Don’t Hesitate to Grab the Amazing opportunity and Gift Yourself a Successful Career
                                </h4>

                            </div>
                            <div class="ctofferbtn text-center">
                                <div class="defaultBtn mt-4"><a href="{{ route('home.genral-enquiry') }}"
                                        class=""><span>Book Your online Class Now</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="FAQsWrapper">
                            <div class="FAQsWrapperCard">
                                <div class="question">
                                    Do you provide online Classes?
                                </div>
                                <div class="answercont">
                                    <div class="answer">
                                        Yes, The Institute has been providing Live Online Interactive Class for 12
                                        years.
                                    </div>
                                </div>
                            </div>

                            <div class="FAQsWrapperCard">
                                <div class="question">
                                    How many students are there in a Batch?
                                </div>
                                <div class="answercont">
                                    <div class="answer">
                                        There are only 10-15 students in a batch. So, that each student can get personal
                                        attention.
                                    </div>
                                </div>
                            </div>

                            <div class="FAQsWrapperCard">
                                <div class="question">
                                    How will I solve my doubts?
                                </div>
                                <div class="answercont">
                                    <div class="answer">
                                        All your doubts will be solved in the class itself. You can also ask your doubts
                                        over the application’s ‘Course discussion section’ where you can ask your doubts
                                        with your faculty and can also discuss with your batchmates
                                    </div>
                                </div>
                            </div>

                            <div class="FAQsWrapperCard">
                                <div class="question">
                                    How are the classes conducted?
                                </div>
                                <div class="answercont">
                                    <div class="answer">
                                        Our class is conducted through our own Mobile Application (Android and iOS) and
                                        Web App.
                                    </div>
                                </div>
                            </div>

                            <div class="FAQsWrapperCard">
                                <div class="question">
                                    What if I miss the class?
                                </div>
                                <div class="answercont">
                                    <div class="answer">
                                        Recording of your live class gets uploaded on mobile application within 4 hours
                                        after the class gets over, so that you can revise it any time.
                                    </div>
                                </div>
                            </div>

                            <div class="FAQsWrapperCard">
                                <div class="question">
                                    Do you provide certificate and is your certificate Valuable?
                                </div>
                                <div class="answercont">
                                    <div class="answer">
                                        Yes, You will be provided certificate after the successful completion of course
                                        (including examination), which is Valuable and recognizable all across the
                                        world.
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="contactUsForm pt-50 pb-50">
        <div class="site-width">
            <div class="contactusFromCard">
                <div class="row">
                    <div class="col-md-6 g-0">
                        <div class="normalImg">
                            <img src="{{ asset('front') }}/assets/img/other/contact-online-payment-img.jpg" alt="contact">
                        </div>
                    </div>
                    <div class="col-md-6 g-0">
                        <div class="onlinePayment">
                            <h3 style="margin-bottom: 12px; margin-top: 0px; text-align: center;">
                                Online Payment
                            </h3>
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th colspan="2">
                                            <p class="call">You can pay us online via Net Banking or
                                                through&nbsp;<strong>RTGS / NEFT</strong>&nbsp;using following details:
                                            </p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p><strong>Pay Account</strong></p>
                                        </td>
                                        <td valign="top">
                                            <p>All India Institute of Occult Science</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p><strong>Account No&nbsp;</strong>&nbsp;</p>
                                        </td>
                                        <td valign="top">
                                            <p>35535803502</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p><strong>RTGS / NEFT IFSC Code</strong></p>
                                        </td>
                                        <td valign="top">
                                            <p>SBIN0017025</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p><strong>Bank Name</strong></p>
                                        </td>
                                        <td valign="top">
                                            <p>State Bank of India</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p><strong>Swift Code</strong></p>
                                        </td>
                                        <td valign="top">
                                            <p>SBININBB550</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <p><strong>Bank Branch</strong></p>
                                        </td>
                                        <td valign="top">
                                            <p>West Patel Nagar New Delhi</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="ctofferbtn ctofferpaybtn text-center">
                                <div class="defaultBtn mt-3"><a href="{{ route('home.payment') }}" class=""><span>Pay
                                            online</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function SendContactUsEnquiry() {
            $('.text-danger').text('');
            var isValid = $('#contactusform').parsley().validate();
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

            var action = $('#contactusform').attr('action');
            var formData = new FormData($('#contactusform')[0]);
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