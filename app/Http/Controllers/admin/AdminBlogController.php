<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use File;
use Str;
// use Image;
use Intervention\Image\Facades\Image;
use App\Models\Blog;

class AdminBlogController extends Controller
{
    public function create()
    {
        $blogList = Blog::latest()->get();
        return view('admin.blog.index', compact('blogList'));
        // dd('blog');
        // return view('admin.blog.index');
    }

    public function store(Request $req){
        // dd($req->all());
        $validator = Validator::make($req->all(), [
            'title' => 'required|unique:blogs',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'full_description' => 'required',
            'short_description' => 'required'

        ]);
        if ($validator->fails()) {
            return back()->with('error',$validator->errors()->first())
        ->withErrors($validator->errors())
        ->withInput($req->all());
        }

        $blogObj = new Blog();

        if ($req->hasFile('image')) {
            $image1 = $req->file('image');
            $image = rand(111,999). time() . '_' . $req->file('image')->getClientOriginalName();
            $image_resize = \Image::make($req->file('image')->getRealPath());
            $width = \Image::make($image1)->width();

            if($width > 852){
                $image_resize->resize(852, 508, function ($constraint) {
                    $constraint->aspectRatio();
                });

            }
            $image_resize->save(public_path('uploads/Blog/LargeImg/' . $image));

            
            if($width >360){

                   $image_resize->resize(360, 230, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            $image_resize->save(public_path('uploads/Blog/SmallImg/' . $image));

            $blogObj->image = $image;

        }



        $blogObj->title  = $req->title;
        $blogObj->slug  = Str::slug($req->title); 
        $blogObj->short_description  = $req->short_description;
        $blogObj->full_description  = $req->full_description;
        $blogObj->status  = $req->status;
        $res = $blogObj->save();
        return redirect('admin/blog/create')->with(['message' => 'Blog Added successfully !','alert-type'=>'success']);
    }

    public function edit($id){
        // dd('kjvdjhvdvdzfbvhjzdfbhjvzdfj');
        $data = Blog::find($id);
        return view('admin.blog.update', compact('data'));
    }

    public function update(Request $req,$id){
        $validator = Validator::make($req->all(), [
            'title' => 'required|unique:blogs,title,'.$id,
            'image' => 'image|mimes:jpeg,png,jpg,gif',
            'full_description' => 'required',
            'short_description' => 'required'
        ]);
        if ($validator->fails()) {
            return back()->with('error',$validator->errors()->first())
        ->withErrors($validator->errors())
        ->withInput($req->all());
        }

        $blogObj = Blog::findOrFail($id);
        if ($req->hasFile('image')) {

            $image_path = public_path('uploads/Blog/LargeImg/'.$blogObj->image);
            if (File::exists($image_path)) {@unlink($image_path); }

            $image_path = public_path('uploads/Blog/SmallImg/'.$blogObj->image);
            if (File::exists($image_path)) {@unlink($image_path); }

            $image1 = $req->file('image');
            $image = rand(111,999). time() . '_' . $req->file('image')->getClientOriginalName();
            $image_resize = \Image::make($req->file('image')->getRealPath());
            $width = \Image::make($image1)->width();

            if($width > 852){
                $image_resize->resize(852, 508, function ($constraint) {
                    $constraint->aspectRatio();
                });

            }
            $image_resize->save(public_path('uploads/Blog/LargeImg/' . $image));

            if($width >360){

                $image_resize->resize(360, 230, function ($constraint) {
                    $constraint->aspectRatio();
                });

            }
            $image_resize->save(public_path('uploads/Blog/SmallImg/' . $image));
           
            $blogObj->image = $image;

        } 
    
        $blogObj->title  = $req->title;
        $blogObj->slug  = Str::slug($req->title); 
        $blogObj->short_description  = $req->short_description;
        $blogObj->full_description  = $req->full_description;
        $blogObj->status  = $req->status;
        $res = $blogObj->save();

        return redirect('admin/blog/create')->with(['message' => 'Blog Updated successfully !','alert-type'=>'success']);
    }

    public function delete($id)
    {

        $blogObj =  Blog::findOrFail($id);
        $image_path = public_path('uploads/Blog/LargeImg'.$blogObj->image);
        if (File::exists($image_path)) {@unlink($image_path); }

        $image_path = public_path('uploads/Blog/SmallImg/'.$blogObj->image);
        if (File::exists($image_path)) {@unlink($image_path); }

        $blogObj->delete();

        return redirect('admin/blog/create')->with(['message' => 'Blog deleted successfully !','alert-type'=>'success']);
    }
}
