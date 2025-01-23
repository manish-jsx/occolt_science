<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Syllabus;
use Illuminate\Http\Request;
use Validator;
use File;
use Image;

class adminSyllabusController extends Controller
{
    public function create()
    {
        $syllabusList = Syllabus::latest()->get();
        return view('admin.syllabus.index', compact('syllabusList'));
        
    }

    public function store(Request $req){
        // dd($req->all());
        $validator = Validator::make($req->all(), [
            'course_name' => 'required',
            'file' => 'required|mimes:doc,docx,pdf',
            'image' => 'required|mimes:jpg,jpeg,png|max:6144', // 6 MB = 6144 KB
        ], [
            'course_name.required' => 'Course name is required.',
            'file.mimes' => 'Only DOC, DOCX, and PDF files are allowed.',
            'image.required' => 'Image is required.',
            'image.mimes' => 'Only JPG, JPEG, and PNG images are allowed.',
            'image.max' => 'The image size must not exceed 6 MB.',
        ]);
        if ($validator->fails()) {
            return back()->with('error',$validator->errors()->first())
        ->withErrors($validator->errors())
        ->withInput($req->all());
        }

        $syllabusObj = new Syllabus();
        if ($req->hasFile('image')) {
            $image1 = $req->file('image');
            $image = rand(111,999). time() . '_' . $req->file('image')->getClientOriginalName();
            $image_resize = \Image::make($req->file('image')->getRealPath());
            $width = \Image::make($image1)->width();

            if($width > 150){
                $image_resize->resize(150, 150, function ($constraint) {
                    $constraint->aspectRatio();
                });

            }
            $image_resize->save(public_path('uploads/syllabus/image/' . $image));
            $syllabusObj->image = $image;
        }

        if ($req->hasFile('file')) {
            $file = $req->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/syllabus/'), $filename);

            $syllabusObj->file = $filename;

        }

       
        $syllabusObj->course_name  = $req->course_name;
        $syllabusObj->status  = $req->status;
        $res = $syllabusObj->save();
        return redirect('admin/syllabus/create')->with(['message' => 'Syllabus Added successfully !','alert-type'=>'success']);
    }

    public function edit($id){
        // dd('kjvdjhvdvdzfbvhjzdfbhjvzdfj');
        $data = Syllabus::find($id);
        return view('admin.syllabus.update', compact('data'));
    }

    public function update(Request $req,$id){
        $validator = Validator::make($req->all(), [
            'course_name' => 'required',
            'file' => 'mimes:doc,docx,pdf',
            'image' => 'mimes:jpg,jpeg,png|max:6144', // 6 MB = 6144 KB
        ], [
            'course_name.required' => 'Course name is required.',
            'file.mimes' => 'Only DOC, DOCX, and PDF files are allowed.',
            'image.mimes' => 'Only JPG, JPEG, and PNG images are allowed.',
            'image.max' => 'The image size must not exceed 6 MB.',
        ]);
        if ($validator->fails()) {
            return back()->with('error',$validator->errors()->first())
        ->withErrors($validator->errors())
        ->withInput($req->all());
        }

        $SyllabusObj = Syllabus::findOrFail($id);
        if ($req->hasFile('file')) {

            $file_path = public_path('uploads/syllabus/' . $SyllabusObj->file);
            if (File::exists($file_path)) {@unlink($file_path); }

           
            $file = $req->file('file');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/syllabus/'), $filename);
            $SyllabusObj->file = $filename;

        } 

        if ($req->hasFile('image')) {

            $image_path = public_path('uploads/syllabus/image/'.$SyllabusObj->image);
            if (File::exists($image_path)) {@unlink($image_path); }

            $image1 = $req->file('image');
            $image = rand(111,999). time() . '_' . $req->file('image')->getClientOriginalName();
            $image_resize = \Image::make($req->file('image')->getRealPath());
            $width = \Image::make($image1)->width();

            if($width > 150){
                $image_resize->resize(150, 150, function ($constraint) {
                    $constraint->aspectRatio();
                });

            }
            $image_resize->save(public_path('uploads/syllabus/image/' . $image));
            $SyllabusObj->image = $image;
        } 
        $SyllabusObj->course_name  = $req->course_name;
        $SyllabusObj->status  = $req->status;
        $res = $SyllabusObj->save();

        return redirect('admin/syllabus/create')->with(['message' => 'Syllabus Updated successfully !','alert-type'=>'success']);
    }

    public function delete($id)
    {

        $syllabusObj =  Syllabus::findOrFail($id);
        $image_path = public_path('uploads/syllabus/'.$syllabusObj->file);
        if (File::exists($image_path)) {@unlink($image_path); }

        $syllabusObj->delete();

        return redirect('admin/syllabus/create')->with(['message' => 'Syllabus deleted successfully !','alert-type'=>'success']);
    }

}
