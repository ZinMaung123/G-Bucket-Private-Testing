<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    function index(){
        $images = Image::all();

        return view('images.index', compact("images"));
    }

    function uploadForm(){
        return view('images.upload');
    }

    function upload(Request $request){
        $image = $request->image;
        $file = file_get_contents($image);

        $fileName = now(). "-" . uniqid("TESTING", true) ."-". $image->getClientOriginalExtension();
        $disk = Storage::disk('gcs');
        $disk->put('/images/'. $fileName, $file);
        $completeUrl = $disk->url('images/'. $fileName);

        Image::create([
            'url' => $completeUrl
        ]);

        return redirect('/images');
    }
}
