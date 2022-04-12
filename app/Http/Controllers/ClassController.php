<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\News;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $classes = Classes::all();
        return view('admin.classes.index', compact('classes'));
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
                'name' => 'required',
                'room' => 'required',
                'teacher_id' => 'required'
            ]);

            $record = new Classes();



            $record->name = $request->name;
            $record->room = $request->room;
            $record->teacher_id = $request->teacher_id;
            $record->students = $request->students;

            $record->save();

            return redirect()->route('admin.classes.index')->with('success', 'Class has been added!');
        }
        else if($request->isMethod('get'))
        {
            return view('admin.classes.create');
        }
    }
}
