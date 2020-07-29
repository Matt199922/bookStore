<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Images;
use Image;

class StoreImageController extends Controller
{
    function index()
    {
     $data = Images::latest()->paginate(5);
     return view('store_image', compact('data'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    function insert_image(Request $request)
    {
     $request->validate([
      'image_path' => 'required|image|max:2048'
     ]);

     $image_file = $request->image_path;

     $image = Image::make($image_path);

     Response::make($image->encode('jpeg'));

     $form_data = array(
      'image_path' => $image
     );

     Images::create($form_data);

     return redirect()->back()->with('success', 'Image store in database successfully');
    }

    function fetch_image($image_id)
    {
     $image = Images::findOrFail($image_path);

     $image_file = Image::make($image->image_path);

     $response = Response::make($image_path->encode('jpeg'));

     $response->header('Content-Type', 'image/jpeg');

     return $response;
    }
}
