<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\AddmissionForm;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\ContactUs;
use App\Models\Specification;
use Validator;
use Mail;
use App\Models\Banner;
use App\Models\DounloadSyllabus;
use App\Models\GenralEnquiry;
use App\Models\ImageGallery;
use App\Models\VideoGallery;
use App\Models\CouseEnquiry;
use App\Models\Enquiry;
use App\Models\RegistrationForm;
use App\Models\Syllabus;

class HomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::where('status', 1)->latest()->get();
        $blogs = Blog::where('status', 1)->get();
        $homebanner = Banner::where('status', 1)->latest()->get();
        return view('front.index', compact('testimonials', 'blogs', 'homebanner'));
    }

    public function aboutUs()
    {
        return view('front.about-us');
    }






    // Gallery 
    public function GalleryImage()
    {
        $galleeryImage = ImageGallery::latest()->get();
        return view('front.gallery-image', compact('galleeryImage'));
    }
    public function galleryVideo()
    {
        $galleryvideo = VideoGallery::where('status', 1)->latest()->get();
        return view('front.gallery-video', compact('galleryvideo'));
    }


    public function NumerologyCulator()
    {
        return view('front.numerology-culator');
    }
    // All Cources
    public function Allcourses()
    {
        return view('front.all-courses');
    }




    public function whyUs()
    {
        return view('front.why-us');
    }

    public function ourInfra()
    {
        return view('front.our-infra');
    }
    public function blog()
    {
        $blogs = Blog::where('status', 1)->paginate(9);
        // dd($blogs);
        return view('front.blog', compact('blogs'));
    }

    public function blogDatels($blog_slug)
    {
        // dd('hi');
        $blogDat = Blog::where('slug', $blog_slug)->first();
        $blogs = Blog::where('status', 1)->get();

        return view('front.blog-datels', compact('blogDat', 'blogs'));
    }
    public function contactUs()
    {
        return view('front.contact-us');
    }
    public function contactUsStore(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|digits:10',
            'email' => 'required|email',
            'course_name' => 'required',
            // 'message' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if ($request->maincaptha != $request->captha) {
            return response()->json(['error' => 'Captcha does not match !!'], 422);
        }
        // dd($request->all());
        $contactUs = new ContactUs();
        $contactUs->name = $request->name;
        $contactUs->email = $request->email;
        $contactUs->phone = $request->phone;
        $contactUs->course_name = $request->course_name;
        $contactUs->message = $request->message;
        $contactUs->save();



        return response()->json(['status' => 'true', 'message' => 'Enquiry send successful !']);
    }




    public function generalEnquiry()
    {
        return view('front.genral-enquiry');
    }


    public function savegenralEnquiry(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer|digits:10',
        ]);


        $genralEnquiry = new GenralEnquiry();
        $genralEnquiry->name = $request->name;
        $genralEnquiry->email = $request->email;
        $genralEnquiry->phone = $request->phone;
        $genralEnquiry->save();
        return response()->json(['status' => 'true', 'message' => 'Enquiry send successful !']);
    }




    public function Disclaimer()
    {
        return view('front.disclaimer');
    }


    public function CourseDounloadPdf()
    {
        return view('front.course-dounload-pdf');
    }



    public function DounloadSyllabusEnqury(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer|digits:10',
            'course' => 'required',
        ]);


        $downlodSyllbusEnquiry = new DounloadSyllabus();
        $downlodSyllbusEnquiry->name = $request->name;
        $downlodSyllbusEnquiry->email = $request->email;
        $downlodSyllbusEnquiry->phone = $request->phone;
        $downlodSyllbusEnquiry->course = $request->course;
        $downlodSyllbusEnquiry->save();
        return response()->json(['status' => 'true', 'message' => 'Enquiry send successful !']);
    }


    public function allSyllabusPdf()
    {
        // dd('hello');
        $syllabusData = Syllabus::where('status', 1)->latest()->get();
        return view('front.all-syllabus-pdf', compact('syllabusData'));
    }


    public function admissionform()
    {
        return view('front.admissionform');
    }



    public function SaveAdmissionForm(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'course' => 'required',
            'subcourse' => 'required',
            'name' => 'required',
            'guardians' => 'required',
            'guardians_name' => 'required',
            'correspondence_address' => 'required',
            'phone' => 'required|integer|digits:10',
            'Whatsapp_number' => 'required|integer|digits:10',
            'alternate_phone' => 'required|integer|digits:10',
            'date_of_birth' => 'required',
            'email' => 'required|email',
            'education_qualification' => 'required',
            'terms_and_conditions' => 'required',
            'adhar_card_front' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'adhar_card_back' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'signature' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'adhar_card_front.required' => 'Please upload the Aadhaar card front image.',
            'adhar_card_front.image' => 'The file must be an image.',
            'adhar_card_front.mimes' => 'The image must be in JPG, JPEG, or PNG format.',
            'adhar_card_front.max' => 'The image size must not be larger than 2MB.',

            'adhar_card_back.required' => 'Please upload the Aadhaar card Back image.',
            'adhar_card_back.image' => 'The file must be an image.',
            'adhar_card_back.mimes' => 'The image must be in JPG, JPEG, or PNG format.',
            'adhar_card_back.max' => 'The image size must not be larger than 2MB.',

            'photo.required' => 'Please upload the Passport Size Photograph.',
            'photo.image' => 'The file must be an image.',
            'photo.mimes' => 'The image must be in JPG, JPEG, or PNG format.',
            'photo.max' => 'The image size must not be larger than 2MB.',

            'signature.required' => 'Please upload the Signature Image.',
            'signature.image' => 'The file must be an image.',
            'signature.mimes' => 'The image must be in JPG, JPEG, or PNG format.',
            'signature.max' => 'The image size must not be larger than 2MB.',
        ]);


        $AddmistionForm = new AddmissionForm();
        if ($request->hasFile('adhar_card_front')) {
            $image1 = $request->file('adhar_card_front');
            $image = rand(111, 999) . time() . '_' . $request->file('adhar_card_front')->getClientOriginalName();
            $image_resize = \Image::make($request->file('adhar_card_front')->getRealPath());
            $width = \Image::make($image1)->width();
            // if($width > 852){
            //     $image_resize->resize(852, 508, function ($constraint) {
            //         $constraint->aspectRatio();
            //     });
            // }
            $image_resize->save(public_path('uploads/addmission-form/adhar-card/' . $image));
            $AddmistionForm->adhar_card_front = $image;
        }

        if ($request->hasFile('adhar_card_back')) {
            $image1 = $request->file('adhar_card_back');
            $image = rand(111, 999) . time() . '_' . $request->file('adhar_card_back')->getClientOriginalName();
            $image_resize = \Image::make($request->file('adhar_card_back')->getRealPath());
            $width = \Image::make($image1)->width();
            // if($width > 852){
            //     $image_resize->resize(852, 508, function ($constraint) {
            //         $constraint->aspectRatio();
            //     });
            // }
            $image_resize->save(public_path('uploads/addmission-form/adhar-card/' . $image));
            $AddmistionForm->adhar_card_back = $image;
        }

        if ($request->hasFile('photo')) {
            $image1 = $request->file('photo');
            $image = rand(111, 999) . time() . '_' . $request->file('photo')->getClientOriginalName();
            $image_resize = \Image::make($request->file('photo')->getRealPath());
            $width = \Image::make($image1)->width();
            // if($width > 852){
            //     $image_resize->resize(852, 508, function ($constraint) {
            //         $constraint->aspectRatio();
            //     });
            // }
            $image_resize->save(public_path('uploads/addmission-form/foto/' . $image));
            $AddmistionForm->photo = $image;
        }

        if ($request->hasFile('signature')) {
            $image1 = $request->file('signature');
            $image = rand(111, 999) . time() . '_' . $request->file('signature')->getClientOriginalName();
            $image_resize = \Image::make($request->file('signature')->getRealPath());
            $width = \Image::make($image1)->width();
            // if($width > 852){
            //     $image_resize->resize(852, 508, function ($constraint) {
            //         $constraint->aspectRatio();
            //     });
            // }
            $image_resize->save(public_path('uploads/addmission-form/signature/' . $image));
            $AddmistionForm->signature = $image;
        }
        $AddmistionForm->course = $request->course;
        $AddmistionForm->subcourse = $request->subcourse;
        $AddmistionForm->name = $request->name;
        $AddmistionForm->guardians = $request->guardians;
        $AddmistionForm->guardians_name = $request->guardians_name;
        $AddmistionForm->correspondence_address = $request->correspondence_address;
        $AddmistionForm->phone = $request->phone;
        $AddmistionForm->Whatsapp_number = $request->Whatsapp_number;
        $AddmistionForm->alternate_phone = $request->alternate_phone;
        $AddmistionForm->date_of_birth = $request->date_of_birth;
        $AddmistionForm->email = $request->email;
        $AddmistionForm->education_qualification = $request->education_qualification;
        $AddmistionForm->terms_and_conditions = $request->terms_and_conditions;
        $AddmistionForm->save();
        return response()->json(['status' => 'true', 'message' => 'Submit Successful !']);
    }


    public function ThankYou()
    {
        return view('front.thank-you');
    }





    // our courcess
    public function AstrologyCourse()
    {
        return view('front.astrology-course');
    }

    public function VastuCouse()
    {
        return view('front.vastu-course');
    }
    public function NumerologyCourse()
    {
        return view('front.numerology-course');
    }

    public function palmistryCourse()
    {
        return view('front.palmistry-course');
    }

    public function GraphologyCourse()
    {
        return view('front.graphology-course');
    }

    public function TarotCardCourse()
    {
        return view('front.tarot-course');
    }
    public function ReikiCourse()
    {
        return view('front.reiki-course');
    }
    public function YogaCourse()
    {
        return view('front.yoga-course');
    }

    public function CourseEnquiries(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'cource_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer|digits:10',
            'name' => 'required',
        ]);

        $courseEnquiry = new CouseEnquiry();
        $courseEnquiry->cource_name = $request->cource_name;
        $courseEnquiry->eamil = $request->email;
        $courseEnquiry->phone = $request->phone;
        $courseEnquiry->name = $request->name;
        $courseEnquiry->save();
        return response()->json(['status' => 'true', 'message' => 'Enquiry send successful !']);
    }


    public function termsCondition()
    {
        return view('front.terms-condition');
    }
    public function privacyPolicy()
    {
        return view('front.privacy-policy');
    }
    public function refundPolicy()
    {
        return view('front.refund-policy');
    }

    public function payment(){
        return view('front.payment');
    }

    public function PaymentPage(){
        return view('front.payment-page');
    }

    public function RegistrationForm(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|integer|digits:10',
            'cource' => 'required',
            'term_and_conditions' => 'required',
        ]);

        $ragistrionForm = new RegistrationForm();
        $ragistrionForm->name = $request->name;
        $ragistrionForm->email = $request->email;
        $ragistrionForm->phone = $request->phone;
        $ragistrionForm->cource = $request->cource;
        $ragistrionForm->term_and_conditions = $request->term_and_conditions;
        $ragistrionForm->save();
        return response()->json(['status' => 'true', 'message' => 'Registration form save
        successful !']);
    }


    public function enquiry(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'phone' => 'required|integer|digits:10',
            'course' => 'required',
        ]);
        $enquiry = new Enquiry();
        $enquiry->name = $request->name;
        $enquiry->phone = $request->phone;
        $enquiry->course = $request->course;
        $enquiry->save();
        return response()->json(['status' => 'true', 'message' => 'Enquiry form
        submitted successfully !']);
    }
}
