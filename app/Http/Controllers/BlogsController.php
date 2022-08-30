<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\blogs;

class BlogsController extends Controller
{
    public function index() {
        $blogs = blogs::latest()->get();
      
        return view('admin.blogs', ['blogs'=>$blogs]);
    }

    public function loop() {
        $blogs = blogs::latest()->get();
        return view('frontend.blogs', ['blogs'=>$blogs]);
    }

    public function upload(Request $request) {

        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
       
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
    
            $extension = $request->file('upload')->getClientOriginalExtension();
       
            $fileName = $fileName.'_'.time().'.'.$extension;
       
            $request->file('upload')->move(public_path('uploads/ckeditor'), $fileName);
     
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');

            $url = asset('/uploads/ckeditor/'.$fileName); 
            $msg = 'Image successfully uploaded'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }


    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'BlogHeding' => 'required',
            'subHeading' => 'required',
            'Blog' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->getMessageBag()->toarray()
            ]);
        }

        // return $request->all();

            $blog = new blogs();
            $blog->Heading = $request->BlogHeding;
            $blog->Subheading = $request->subHeading;
            $blog->Image_name = $request->blogimage;
            $blog->blog = $request->Blog;

            if ($request->hasFile('blogimage')) {
                $file = $request->file('blogimage');
                $filename = $file->getClientOriginalName();
                $image_name = time() . str_replace(' ', '_', $filename);
                //move file to the folder
                $file->move(public_path('uploads/blog_images'), $image_name);
                $blog->Image_name = $image_name;
            }

            $blog->save();

            return response()->json([
                'status'=>'success',
                'messages'=>'Successfully added new blog'
            ]);
    }

    public function edit($id) {

        $blog = blogs::where('id', $id)->first();

        return view('admin.edit-blog', ['blog'=>$blog]);
    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'BlogHeding' => 'required',
            'subHeading' => 'required',
            'Blog' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->getMessageBag()->toarray()
            ]);
        }

        $blog = blogs::find($request->id);
        $blog->Heading = $request->BlogHeding;
        $blog->Subheading = $request->subHeading;
        $blog->blog = $request->Blog;
        if ($request->hasFile('blogimage')) {
            $file = $request->file('blogimage');
            $filename = $file->getClientOriginalName();
            $image_name = time() . str_replace(' ', '_', $filename);
            //move file to the folder
            $file->move(public_path('uploads/blog_images'), $image_name);
            $blog->Image_name = $image_name;
        }
        $blog->save();

        return response()->json([
            'status' => 'success',
            'messages' => 'Successfully Updated Product'
        ]);

    }
    public function delete($id) {

        $deleted = blogs::find($id)->delete();

        if($deleted){
            return response()->json([
                'status'=>'success',
                'message'=>'deleted'
            ]);
        }
        return response()->json([
            'status'=>'error',
            'message'=>'error'
        ]);

    }

    public function individual($heading) {

        $blogss = blogs::where('heading', $heading)->first();

        // return $blogss;

        return view('frontend.blog', ['blogss'=>$blogss]);
    } 
}
