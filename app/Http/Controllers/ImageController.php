<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){
        $images = Image::all();
        return view('admin.gallery.index', compact('images'));
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'type' => 'required',
                'image' => 'required'
            ]);

            $record = new Image();
            $image = $request->image;
            list($width, $height) = getimagesize($image);

            $record->type = $request->type;
            $record->size = $width . 'X' . $height;

            $record->path = $image->getClientOriginalName();

            $image ->move('image',$record->path);
            $record->image = 'image/' .$record->path;
            $record->save();

            return redirect()->route('admin.gallery.index')->with('success', 'Image was uploaded');
        }
        else if($request->isMethod('get'))
        {
            return view('admin.gallery.create');
        }
    }

    public function destroy($id){
        Image::destroy($id);
        return redirect()->route('admin.gallery.index')->with('success', 'Image has been delete!');
    }
}
