<?php

use App\Http\Controllers\admin\AdminApplicationFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

// admin
use App\Http\Controllers\admin\AdminAuthController;
use App\Http\Controllers\admin\AdminDashbordController;
use App\Http\Controllers\admin\AdminCagtegoryController;
use App\Http\Controllers\admin\AdminSubcategoryController;
use App\Http\Controllers\admin\AdminBlogController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminTestimonialController;
use App\Http\Controllers\admin\AdminContactUsController;
use App\Http\Controllers\admin\AdminEnquiryController;
use App\Http\Controllers\admin\AdminHomeBannerController;
use App\Http\Controllers\admin\adminSyllabusController;
use App\Http\Controllers\admin\AdminImageGalleryController;
use App\Http\Controllers\admin\AdminVideoGalleryController;


// front
use App\Http\Controllers\front\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/************************************************* ADMIN PANEL *********************************************/

Route::get('admin-login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('custom-login', [AdminAuthController::class, 'customLogin'])->name('custom_login');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'AdminMiddleware'], function () {
    Route::get('dashbord', [AdminDashbordController::class, 'index'])->name('dashbord');
    Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::get('change-password', [AdminAuthController::class, 'changePassword'])->name('change_password');
    Route::post('new-password', [AdminAuthController::class, 'NewPassword'])->name('new_password');



    // blog
    Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
        Route::get('/create', [AdminBlogController::class, 'create'])->name('create');
        Route::post('/store', [AdminBlogController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [AdminBlogController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [AdminBlogController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [AdminBlogController::class, 'delete'])->name('delete');
    });


    // testimonial
    Route::group(['prefix' => 'testimonial', 'as' => 'testimonial.'], function () {
        Route::get('/create', [AdminTestimonialController::class, 'create'])->name('create');
        Route::post('/store', [AdminTestimonialController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [AdminTestimonialController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [AdminTestimonialController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [AdminTestimonialController::class, 'delete'])->name('delete');
    });




    //  Home Banner
    Route::group(['prefix' => 'banner', 'as' => 'banner.'], function () {
        Route::get('/create', [AdminHomeBannerController::class, 'create'])->name('create');
        Route::post('/store', [AdminHomeBannerController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [AdminHomeBannerController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [AdminHomeBannerController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [AdminHomeBannerController::class, 'delete'])->name('delete');
    });


    // Upload Syllabus
    Route::group(['prefix' => 'syllabus', 'as' => 'syllabus.'], function () {
        Route::get('/create', [adminSyllabusController::class, 'create'])->name('create');
        Route::post('/store', [adminSyllabusController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [adminSyllabusController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [adminSyllabusController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [adminSyllabusController::class, 'delete'])->name('delete');
    });



    // Gallery

    Route::group(['prefix' => 'gallery', 'as' => 'gallery.'], function () {
        // Image Gallery
        Route::group(['prefix' => 'image-gallery', 'as' => 'imagegallery.'], function () {
            Route::get('/create', [AdminImageGalleryController::class, 'create'])->name('create');
            Route::post('/store', [AdminImageGalleryController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [AdminImageGalleryController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [AdminImageGalleryController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [AdminImageGalleryController::class, 'delete'])->name('delete');
        });

        // Video Gallery
        Route::group(['prefix' => 'video-gallery', 'as' => 'videogallery.'], function () {
            Route::get('/create', [AdminVideoGalleryController::class, 'create'])->name('create');
            Route::post('/store', [AdminVideoGalleryController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [AdminVideoGalleryController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [AdminVideoGalleryController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [AdminVideoGalleryController::class, 'delete'])->name('delete');
        });
    });



    
    // Enquiry
    Route::group(['prefix' => 'enquiry', 'as' => 'enquiry.'], function () {
        // Course Enquiries
        Route::get('course-enquiry', [AdminEnquiryController::class, 'CourseEnquiry'])->name('course_enquiry');
        Route::get('delete-cource-enquiry/{id}', [AdminEnquiryController::class, 'DeleteCourceEnquiry'])->name('delete_cource_enquiry');

        Route::get('course-download-enquiry', [AdminEnquiryController::class, 'courseDownloadPdf'])->name('course_download_pdf');
        Route::get('delete-course-download-enquiry/{id}', [AdminEnquiryController::class, 'DeletecourseDownloadPdf'])->name('delete_course_download_pdf');

        Route::get('enquiry', [AdminEnquiryController::class, 'enquiry'])->name('enquiry');
        Route::get('delete-enquiry/{id}', [AdminEnquiryController::class, 'deleteEnquiry'])->name('delete_enquiry');
        // General Enquiries
        Route::get('general-enquiry', [AdminEnquiryController::class, 'generalEnquiry'])->name('generaenquiry');
        Route::get('delete-general-enquiry/{id}', [AdminEnquiryController::class, 'deletegenralEnquiry'])->name('deletegenralenquiry');
        Route::get('general-enquiry-export', [AdminEnquiryController::class, 'generalEnquiryExport'])->name('gernralenquiryexport');

        // Contact Enquiries
        Route::get('contact-us-enquiry', [AdminEnquiryController:: class, 'ContactUsEnquiry'])->name('contactusenquiry');
        Route::get('delete-contact-us-enquiry/{id}', [AdminEnquiryController::class, 'deleteContactUsEnq'])->name('deleteconatactus-enquiry');
        Route::get('contact-us-export', [AdminEnquiryController::class, 'ContacutUsEnquiryExport'])->name('contactus.enquiry.export');
    });


    // Application Form
    Route::get('application-form', [AdminApplicationFormController::class, 'ApplicationForm'])->name('applicationform');
    Route::get('registration-form', [AdminDashbordController::class, 'RegistrationForm'])->name('registration_form');
});




// home
Route::get('/', [HomeController::class, 'index'])->name('home');

// about us
Route::get('about-us', [HomeController::class, 'aboutUs'])->name('home.about-us');

// why-us
Route::get('why-us', [HomeController::class, 'whyUs'])->name('home.why-us');

// our infra
Route::get('our-infra', [HomeController::class, 'ourInfra'])->name('home.our-infra');

// blogs
Route::get('blog', [HomeController::class, 'blog'])->name('home.blog');
Route::get('blog-datels/{blog_slug}', [HomeController::class, 'blogDatels'])->name('home.blog-datels');

// contact-us
Route::get('contact', [HomeController::class, 'contactUs'])->name('home.contact-us');
Route::post('contact-us/store', [HomeController::class, 'contactUsStore'])->name('send_enquiry');

// Genral Enquiry 
Route::get('enquiry-form-home/', [HomeController::class, 'generalEnquiry'])->name('home.enquiry');
Route::post('save-general-enquiry', [HomeController::class, 'savegenralEnquiry'])->name('home.genral-enquiry');


// All courses
Route::get('courses', [HomeController::class, 'Allcourses'])->name('home.all-courses');

// Cources
//Vastu Course 
Route::get('vastu-course/', [HomeController::class, 'VastuCouse'])->name('home.vastu-course');
// Astrology Course
Route::get('astrology-course/', [HomeController::class, 'AstrologyCourse'])->name('home.astrology-course');
// Tarot Card
Route::get('tarot-course/', [HomeController::class, 'TarotCardCourse'])->name('home.tarot-card-course');
// Yoga Course
Route::get('yoga-course/', [HomeController::class, 'YogaCourse'])->name('home.yoga-course');
// Numerology
Route::get('numerology-course/', [HomeController::class, 'NumerologyCourse'])->name('home.numerology');
// Palmistry
Route::get('palmistry-course/', [HomeController::class, 'palmistryCourse'])->name('home.palmistry');
// Reiki
Route::get('reiki-course/', [HomeController::class, 'ReikiCourse'])->name('home.reiki-course');
// Graphology
Route::get('graphology-course/', [HomeController::class, 'GraphologyCourse'])->name('home.graphology-course');

Route::post('course-enquiries', [HomeController::class, 'CourseEnquiries'])->name('home.course-enquiries');

// Gallery
Route::get('gallery-images', [HomeController::class, 'GalleryImage'])->name('home.gallery-images');
Route::get('gallery-videos', [HomeController::class, 'galleryVideo'])->name('home.gallery-video');


// toles Numerology Calculator
Route::get('tools/numerology-calculator', [HomeController::class, 'NumerologyCulator'])->name('home.numerologyculator');

// disclaimer
Route::get('disclaimer', [HomeController::class, 'Disclaimer'])->name('home.disclaimer');


// course-download-pdf/
Route::get('course-download-pdf', [HomeController::class, 'CourseDounloadPdf'])->name('home.course_dounbload_pdf');
Route::post('download-syllabus', [HomeController::class, 'DounloadSyllabusEnqury'])->name('home.download_syllabus_enquiry');


Route::get('all-syllabus-pdf/', [HomeController::class, 'allSyllabusPdf'])->name('home.all_syllabus_pdf');
Route::get('admissionform', [HomeController::class, 'admissionform'])->name('home.admissionform');
Route::post('save-admissionform', [HomeController::class, 'SaveAdmissionForm'])->name('save_addmission_form');

Route::get('thank-you', [HomeController::class, 'ThankYou'])->name('home.thank_you');

Route::get('terms-condition', [HomeController::class, 'termsCondition'])->name('home.terms_condition');
Route::get('privacy-policy', [HomeController::class, 'privacyPolicy'])->name('home.privacy_policy');
Route::get('refund-policy', [HomeController::class, 'refundPolicy'])->name('home.refund_policy');


Route::get('payment', [HomeController::class, 'payment'])->name('home.payment');
Route::get('payment-page/', [HomeController::class, 'PaymentPage'])->name('home.payment_page');
Route::post('registration-form', [HomeController::class, 'RegistrationForm'])->name('home.registration_form');



Route::post('enquiry', [HomeController::class, 'enquiry'])->name('home.enquiry_form');