<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use App\Image;
Use App\Photo;
use Intervention\Image\Exception\NotReadableException;

class ImagesController extends Controller
{
    //
    public function index()
    {
        return view('image');
    }

    public function save(Request $request)
    {
       request()->validate([
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('fileUpload')) {
           $destinationPath = 'public/images/'; // upload path
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
        }
        $check = Image::insertGetId($insert);
 
        return Redirect::to("image")
        ->withSuccess('Great! Image has been successfully uploaded.');
 
    }

    public function indexView()
    {
        return view('image-view');
    }

    public function store(Request $request)
    {
 
        request()->validate([
 
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
 
        ]);
 
        if ($image = $request->file('image')) {
            foreach ($image as $files) {
            $destinationPath = 'public/images/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $insert[]['image'] = "$profileImage";
            }
        }
       
        $check = Image::insert($insert);
 
        return Redirect::to("image")->withSuccess('Great! Image has been successfully uploaded.');
    }

 

    public function indexPhoto()
    {
      return view('photo');
    }

    public function photoStore(Request $request)
    {
     request()->validate([
          'photo_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     ]);
     
     if ($files = $request->file('photo_name')) {
         
        // for save original image
        $ImageUpload = Image::make($files);
        $originalPath = 'public/images/';
        $ImageUpload->save($originalPath.time().$files->getClientOriginalName());
         
        // for save thumnail image
        $thumbnailPath = 'public/thumbnail/';
        $ImageUpload->resize(250,125);
        $ImageUpload = $ImageUpload->save($thumbnailPath.time().$files->getClientOriginalName());
     
      $photo = new Photo();
      $photo->photo_name = time().$files->getClientOriginalName();
      $photo->save();
      }
     
      $image = Photo::latest()->first(['photo_name']);
      return Response()->json($image);
     
     
    }


}
