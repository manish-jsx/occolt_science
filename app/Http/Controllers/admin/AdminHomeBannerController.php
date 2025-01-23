<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Validator;
use Image;
use File;

class AdminHomeBannerController extends Controller
{
    public function create()
    {
        $bannerList = Banner::latest()->get();
        return view('admin.banner.index', compact('bannerList'));
        
    }

    public function store(Request $req){
        // dd($req->all());
        $validator = Validator::make($req->all(), [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        if ($validator->fails()) {
            return back()->with('error',$validator->errors()->first())
        ->withErrors($validator->errors())
        ->withInput($req->all());
        }

        $bannerObj = new Banner();

        if ($req->hasFile('image')) {
            $image1 = $req->file('image');
            $image = rand(111,999). time() . '_' . $req->file('image')->getClientOriginalName();
            $image_resize = \Image::make($req->file('image')->getRealPath());
            $width = \Image::make($image1)->width();

            if($width > 1880){
                $image_resize->resize(1880, 712, function ($constraint) {
                    $constraint->aspectRatio();
                });

            }
            $image_resize->save(public_path('uploads/banner/' . $image));


            $bannerObj->image = $image;

        }



        $bannerObj->title  = $req->title;
        $bannerObj->status  = $req->status;
        $res = $bannerObj->save();
        return redirect('admin/banner/create')->with(['message' => 'Home Banner Added successfully !','alert-type'=>'success']);
    }

    public function edit($id){
        // dd('kjvdjhvdvdzfbvhjzdfbhjvzdfj');
        $data = Banner::find($id);
        return view('admin.banner.update', compact('data'));
    }

    public function update(Request $req,$id){
        $validator = Validator::make($req->all(), [
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
        if ($validator->fails()) {
            return back()->with('error',$validator->errors()->first())
        ->withErrors($validator->errors())
        ->withInput($req->all());
        }

        $bannerObj = Banner::findOrFail($id);
        if ($req->hasFile('image')) {

            $image_path = public_path('uploads/banner/'.$bannerObj->image);
            if (File::exists($image_path)) {@unlink($image_path); }

           

            $image1 = $req->file('image');
            $image = rand(111,999). time() . '_' . $req->file('image')->getClientOriginalName();
            $image_resize = \Image::make($req->file('image')->getRealPath());
            $width = \Image::make($image1)->width();

            if($width > 1880){
                $image_resize->resize(1880, 712, function ($constraint) {
                    $constraint->aspectRatio();
                });

            }
            $image_resize->save(public_path('uploads/banner/' . $image));
           
            $bannerObj->image = $image;

        } 
    
        $bannerObj->title  = $req->title;
        $bannerObj->status  = $req->status;
        $res = $bannerObj->save();

        return redirect('admin/banner/create')->with(['message' => 'Home Blog Updated successfully !','alert-type'=>'success']);
    }

    public function delete($id)
    {

        $bannerObj =  Banner::findOrFail($id);
        $image_path = public_path('uploads/banner/'.$bannerObj->image);
        if (File::exists($image_path)) {@unlink($image_path); }

        $image_path = public_path('uploads/banner/'.$bannerObj->image);
        if (File::exists($image_path)) {@unlink($image_path); }

        $bannerObj->delete();

        return redirect('admin/banner/create')->with(['message' => 'Home Banner deleted successfully !','alert-type'=>'success']);
    }

}
