<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Validator;
use File;
use Str;
use Image;

class AdminTestimonialController extends Controller
{
    public function create(){
        $testimonialList = Testimonial::latest()->get();
        return view('admin.testimonial.index', compact('testimonialList'));
    }


    public function store(Request $req){
        // dd($req->all());
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'destination' => 'required',
            // 'image' => 'required',
            'content' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->with('error',$validator->errors()->first())
        ->withErrors($validator->errors())
        ->withInput($req->all());
        }

        $tesimonialObj = new Testimonial();

        if ($req->hasFile('image')) {
            $image1 = $req->file('image');
            $image = rand(111,999). time() . '_' . $req->file('image')->getClientOriginalName();
            $image_resize = Image::make($req->file('image')->getRealPath());
            $width = Image::make($image1)->width();
            if($width > 165){
                $image_resize->resize(165, 236, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            $image_resize->save(public_path('uploads/testimonial/' . $image));
            $tesimonialObj->image = $image;
        }

         $tesimonialObj->name =$req->name;
         $tesimonialObj->destination =$req->destination;
         $tesimonialObj->content =$req->content;
         $tesimonialObj->status =$req->status;

        $tesimonialObj->save();

        return redirect('admin/testimonial/create')->with(['message' => 'Testimonial Added successfully !','alert-type'=>'success']);

    }

    public function edit($id){
        $data = Testimonial::find($id);
        return view('admin.testimonial.update', compact('data'));
    }

    public function update(Request $req,$id){
        // dd($req->all());
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'destination' => 'required',
            'content' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->with('error',$validator->errors()->first())
        ->withErrors($validator->errors())
        ->withInput($req->all());
        }

        $tesimonialObj = Testimonial::findOrFail($id);
        if ($req->hasFile('image')) {

            $image_path = public_path('uploads/testimonial/'.$tesimonialObj->image);
            if (File::exists($image_path)) {@unlink($image_path); }
            $image1 = $req->file('image');
            $image = rand(111,999). time() . '_' . $req->file('image')->getClientOriginalName();
            $image_resize = Image::make($req->file('image')->getRealPath());
            $width = Image::make($image1)->width();
            if($width > 165){
                $image_resize->resize(165, 236, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            $image_resize->save(public_path('uploads/testimonial/' . $image));
            $tesimonialObj->image = $image;
        }

        $tesimonialObj->name =$req->name;
        $tesimonialObj->destination =$req->destination;
        $tesimonialObj->content =$req->content;
        $tesimonialObj->status =$req->status;

        $tesimonialObj->save();
        return redirect('admin/testimonial/create')->with(['message' => 'Testimonial Updated successfully !','alert-type'=>'success']);
    }

    public function delete($id)
    {
        $tesimonialObj = Testimonial::findOrFail($id);
        $image_path = public_path('uploads/testimonial/'.$tesimonialObj->image);
        if (File::exists($image_path)) {@unlink($image_path); }
        $tesimonialObj->delete();

        return redirect('admin/testimonial/create')->with(['message' => 'Testimonial deleted successfully !','alert-type'=>'success']);
    }

}
