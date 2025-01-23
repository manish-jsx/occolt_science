<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\VideoGallery;
use Illuminate\Http\Request;
use Validator;
use Image;
use File;

class AdminVideoGalleryController extends Controller
{
    public function create()
    {
        $galleryVideoList = VideoGallery::latest()->get();
        return view('admin.gallery.video-gallery.index', compact('galleryVideoList'));
        
    }

    public function store(Request $req){
        // dd($req->all());
        $validator = Validator::make($req->all(), [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'url' => 'required',
            
        ]);
        if ($validator->fails()) {
            return back()->with('error',$validator->errors()->first())
        ->withErrors($validator->errors())
        ->withInput($req->all());
        }

        $videogalleryObj = new VideoGallery();

        if ($req->hasFile('image')) {
            $image1 = $req->file('image');
            $image = rand(111,999). time() . '_' . $req->file('image')->getClientOriginalName();
            $image_resize = \Image::make($req->file('image')->getRealPath());
            $width = \Image::make($image1)->width();

            if($width > 800){
                $image_resize->resize(800, 600, function ($constraint) {
                    $constraint->aspectRatio();
                });

            }
            $image_resize->save(public_path('uploads/video-gallery/' . $image));


            $videogalleryObj->image = $image;

        }



        $videogalleryObj->title  = $req->title;
        $videogalleryObj->url  = $req->url;
        $videogalleryObj->status  = $req->status;
        $res = $videogalleryObj->save();
        return redirect('admin/gallery/video-gallery/create')->with(['message' => 'Gallery Video Added successfully !','alert-type'=>'success']);
    }

    public function edit($id){
        $data = VideoGallery::find($id);
        return view('admin.gallery.video-gallery.update', compact('data'));
    }

    public function update(Request $req,$id){
        $validator = Validator::make($req->all(), [
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
            'url' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->with('error',$validator->errors()->first())
        ->withErrors($validator->errors())
        ->withInput($req->all());
        }

        $videogalleryObj = VideoGallery::findOrFail($id);
        if ($req->hasFile('image')) {

            $image_path = public_path('uploads/video-gallery/'.$videogalleryObj->image);
            if (File::exists($image_path)) {@unlink($image_path); }

           

            $image1 = $req->file('image');
            $image = rand(111,999). time() . '_' . $req->file('image')->getClientOriginalName();
            $image_resize = \Image::make($req->file('image')->getRealPath());
            $width = \Image::make($image1)->width();

            if($width > 800){
                $image_resize->resize(800, 600, function ($constraint) {
                    $constraint->aspectRatio();
                });

            }
            $image_resize->save(public_path('uploads/video-gallery/' . $image));
           
            $videogalleryObj->image = $image;

        } 
    
        $videogalleryObj->title  = $req->title;
        $videogalleryObj->url  = $req->url;
        $videogalleryObj->status  = $req->status;
        $res = $videogalleryObj->save();

        return redirect('admin/gallery/video-gallery/create')->with(['message' => 'Video Gallery Updated successfully !','alert-type'=>'success']);
    }

    public function delete($id)
    {

        $galleryvifroObj =  VideoGallery::findOrFail($id);
        $image_path = public_path('uploads/video-gallery/'.$galleryvifroObj->image);
        if (File::exists($image_path)) {@unlink($image_path); }



        $galleryvifroObj->delete();

        return redirect('admin/gallery/video-gallery/create')->with(['message' => 'Gallery Video deleted successfully !','alert-type'=>'success']);
    }


}
