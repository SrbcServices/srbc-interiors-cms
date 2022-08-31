<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\gallery;
// use App\Models\User;
// use Illuminate\Foundation\Auth\RegisterUsers;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{

    public function index() {

        $gallery = gallery::latest()->get();

        // return $gallery;
        
        return view('admin.gallery', ['gallery'=>$gallery]);
    }

    public function loop() {
        $portfolio = gallery::latest()->get();

        $main = [];
        $array = [];
        foreach($portfolio as $img){
            array_push($array,$img->gallery_image);
        }
        $gh =  array_chunk($array,4);
        foreach ($gh as $item){
        array_push($main,array_chunk($item,2));
        }

        
        // return $main;
        return view('frontend.gallery', ['portfolio' => $main]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'galleryimage' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->getMessageBag()->toarray()
            ]);
        }
        $gallery = new gallery();
        // if ($request->hasFile('galleryimage')) {
            $file = $request->file('galleryimage');
            $filename = $file->getClientOriginalName();
            $image_name = time() . str_replace(' ', '_', $filename);
            //move file to the folder
            $file->move(public_path('uploads/gallery_images'), $image_name);
            $gallery->gallery_image = $image_name;
        // }
        $gallery->save();

        return response()->json([
            'status' => 'success',
            'messages' => 'Successfully added new Image'
        ]);
    }

    public function delete($id) {
        $deleted = gallery::find($id)->delete();

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

    public function login()
    {
        return view('auth.login');
    }

    public function userLogin(Request $request){

        $validated = validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if($validated->fails()){
            return response()->json([
                'status' => 'error',
                'message' => 'Email or Password is required'
            ]);
        }
        if(Auth::attempt($request->only('email','password'))){
            return response()->json([
                'status' => 'success',
                'message' => 'Login Successfully'
            ]);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'Email and Password do not match'
        ]);
        
    }

    public function logout()
    {
        Auth::logout();      
        return view('auth.login');
    }   
}
