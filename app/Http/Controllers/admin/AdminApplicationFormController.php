<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AddmissionForm;
use Illuminate\Http\Request;

class AdminApplicationFormController extends Controller
{
    public function ApplicationForm(){
        $applicationForm = AddmissionForm::latest()->paginate(50);
        return view('admin.application-form', compact('applicationForm'));
    }
}
