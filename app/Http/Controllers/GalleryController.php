<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\gallery;

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
        return view('frontend.gallery', ['portfolio' => $portfolio]);
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
}
