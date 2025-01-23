<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GenralEnquiry;
use App\Models\ContactUs;
use App\Models\RegistrationForm;
use App\Models\CouseEnquiry;
use App\Models\AddmissionForm;

class AdminDashbordController extends Controller
{
  public function index(){
        $genralenquiry = GenralEnquiry::all()->count();
        $TotalApplicationForms = AddmissionForm::all()->count();
        $TotalCourseEnquiries = CouseEnquiry::all()->count();
        $TotalContactEnquiries = ContactUs::all()->count();
        return view('admin.dashbord.dashbord', compact('genralenquiry', 'TotalApplicationForms', 'TotalCourseEnquiries', 'TotalCourseEnquiries', 'TotalContactEnquiries'));
    }


    public function RegistrationForm(){
        $RegistrationForm = RegistrationForm::latest()->paginate(50);
        return view('admin.registration-form', compact('RegistrationForm'));
    }
}
