<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ImageGallery;
use Illuminate\Http\Request;
use Validator;
use Image;
use File;

class AdminImageGalleryController extends Controller
{
    public function create()
    {
        $galleryImageList = ImageGallery::latest()->get();
        return view('admin.gallery.image-gallery.index', compact('galleryImageList'));
        
    }

    public function store(Request $req){
        // dd($req->all());
        $validator = Validator::make($req->all(), [
            'image_section' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        if ($validator->fails()) {
            return back()->with('error',$validator->errors()->first())
        ->withErrors($validator->errors())
        ->withInput($req->all());
        }

        $imagegalleryObj = new ImageGallery();

        if ($req->hasFile('image')) {
            $image1 = $req->file('image');
            $image = rand(111,999). time() . '_' . $req->file('image')->getClientOriginalName();
            $image_resize = \Image::make($req->file('image')->getRealPath());
            $width = \Image::make($image1)->width();

            if($width > 1280){
                $image_resize->resize(1280, 960, function ($constraint) {
                    $constraint->aspectRatio();
                });

            }
            $image_resize->save(public_path('uploads/image-gallery/' . $image));


            $imagegalleryObj->image = $image;

        }



        $imagegalleryObj->image_section  = $req->image_section;
        $imagegalleryObj->status  = $req->status;
        $res = $imagegalleryObj->save();
        return redirect('admin/gallery/image-gallery/create')->with(['message' => 'Gallery Image Added successfully !','alert-type'=>'success']);
    }

    public function edit($id){
        // dd('kjvdjhvdvdzfbvhjzdfbhjvzdfj');
        $data = ImageGallery::find($id);
        return view('admin.gallery.image-gallery.update', compact('data'));
    }

    public function update(Request $req,$id){
        $validator = Validator::make($req->all(), [
            'image_section' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
        if ($validator->fails()) {
            return back()->with('error',$validator->errors()->first())
        ->withErrors($validator->errors())
        ->withInput($req->all());
        }

        $galleryImageObj = ImageGallery::findOrFail($id);
        if ($req->hasFile('image')) {

            $image_path = public_path('uploads/image-gallery/'.$galleryImageObj->image);
            if (File::exists($image_path)) {@unlink($image_path); }

           

            $image1 = $req->file('image');
            $image = rand(111,999). time() . '_' . $req->file('image')->getClientOriginalName();
            $image_resize = \Image::make($req->file('image')->getRealPath());
            $width = \Image::make($image1)->width();

            if($width > 1280){
                $image_resize->resize(1280, 960, function ($constraint) {
                    $constraint->aspectRatio();
                });

            }
            $image_resize->save(public_path('uploads/image-gallery/' . $image));
           
            $galleryImageObj->image = $image;

        } 
    
        $galleryImageObj->image_section  = $req->image_section;
        $galleryImageObj->status  = $req->status;
        $res = $galleryImageObj->save();

        return redirect('admin/gallery/image-gallery/create')->with(['message' => 'Gallery Image Updated successfully !','alert-type'=>'success']);
    }

    public function delete($id)
    {

        $galleryImageObj =  ImageGallery::findOrFail($id);
        $image_path = public_path('uploads/image-gallery/'.$galleryImageObj->image);
        if (File::exists($image_path)) {@unlink($image_path); }



        $galleryImageObj->delete();

        return redirect('admin/gallery/image-gallery/create')->with(['message' => 'Gallery Image deleted successfully !','alert-type'=>'success']);
    }

}
