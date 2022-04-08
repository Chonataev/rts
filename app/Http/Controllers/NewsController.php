<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'image' => 'required'
            ]);

            $record = new News();

            $image = $request->image;

            $image->move('image',$image->getClientOriginalName());

            $record->title = $request->title;
            $record->description = $request->description;
            $record->image = 'image/' .$image->getClientOriginalName();

            $record->save();

            return redirect()->route('admin.news.index')->with('success', 'News has been added!');
        }
        else if($request->isMethod('get'))
        {
            return view('admin.news.create');
        }
    }

    public function destroy($id){
        Image::destroy($id);
        return redirect()->route('admin.news.index')->with('success', 'Image has been delete!');
    }
}
