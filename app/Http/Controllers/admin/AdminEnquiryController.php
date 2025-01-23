<?php

namespace App\Http\Controllers\admin;

use App\Exports\ContactUsExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GenralEnquiry;
use App\Models\ContactUs;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\GenralEnquiryExport;
use App\Models\CouseEnquiry;
use App\Models\DounloadSyllabus;
use App\Models\Enquiry;

class AdminEnquiryController extends Controller
{
    public function CourseEnquiry()
    {
        $courseEnquiry = CouseEnquiry::latest()->paginate(50);
        return view('admin.enquiry.course-enquiry', compact('courseEnquiry'));
    }

    public function DeleteCourceEnquiry($id){
        $courseEnquiry = CouseEnquiry::find($id);
        $courseEnquiry->delete();
        return redirect()->route('admin.enquiry.course_enquiry')->with(['message' => 'Enquiry Delete Succesfully !', 'alert-type' => 'success']);
    }

    public function courseDownloadPdf(){
        $syllbusDounloadPdfEnquiry = DounloadSyllabus::latest()->paginate(50);
        return view('admin.enquiry.course-download-pdf', compact('syllbusDounloadPdfEnquiry'));
    }

    public function DeletecourseDownloadPdf($id){
        $syllbusDounloadPdfEnquiry = DounloadSyllabus::find($id);
        $syllbusDounloadPdfEnquiry->delete();
        return redirect()->route('admin.enquiry.course_download_pdf')->with(['message' => 'Enquiry Delete Succesfully !', 'alert-type' => 'success']);
    }

    public function enquiry(){
        $enquiry = Enquiry::latest()->paginate(50);
        return view('admin.enquiry.enquiry', compact('enquiry'));
    }

    public function deleteEnquiry($id){
        $enquiry = Enquiry::find($id);
        $enquiry->delete();
        return redirect()->route('admin.enquiry.enquiry')->with(['message' => 'Enquiry
        Delete Succesfully !', 'alert-type' => 'success']);
    }

    public function generalEnquiry()
    {
        $genralenquiry = GenralEnquiry::latest()->paginate(50);
        return view('admin.enquiry.genral-enquiry', compact('genralenquiry'));
    }

    public function deletegenralEnquiry($id)
    {
        $genralEnquiryDel = GenralEnquiry::find($id);
        $genralEnquiryDel->delete();
        return redirect()->route('admin.enquiry.generaenquiry')->with(['message' => 'Enquiry Delete Succesfully !', 'alert-type' => 'success']);
    }

    public function generalEnquiryExport(){
        $genralenquiry = GenralEnquiry::all();
        return Excel::download(new GenralEnquiryExport($genralenquiry), 'genral_enquiries.xlsx');
    }


    public function ContactUsEnquiry()
    {
        $contactus = ContactUs::latest()->paginate(50);
        return view('admin.enquiry.contact-us-enquiry', compact('contactus'));
    }

    public function deleteContactUsEnq($id)
    {
        $contactusEnquiry = ContactUs::find($id);
        $contactusEnquiry->delete();
        return redirect()->route('admin.enquiry.contactusenquiry')->with(['message' => 'Enquiry Delete Successfully !', 'alert-type' => 'success']);
    }

    public function ContacutUsEnquiryExport(){
        // dd('d');
        $contactusEnquiries = ContactUs::all();
        return Excel::download(new ContactUsExport($contactusEnquiries), 'contact_us.xlsx');
    }
}
