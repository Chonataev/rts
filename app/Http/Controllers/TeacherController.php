<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{

    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function index(){
        $teachers = User::all()->where('role', '=', 12);
        return view('admin.teacher.index', compact('teachers'));
    }

    public function store(StoreRequest $request)
    {
        if ($request->isMethod('post'))
        {
            $request->validate([
            'name'       => 'required|min:2|max:30',
            'surname'    => 'required|min:2|max:30',
            'patronymic' => 'required|min:2|max:30',
            'username'   => 'required|unique:users|min:4|max:255',
            'password'   => 'required|min:4|max:20',
            'psw_repeat' => 'required|same:password'
            ]);
            if($request->password == $request->psw_repeat){
                $user = new User();
                $user->name = $request->name;
                $user->username = $request->username;
                $user->password = Hash::make($request->password);
                $user->surname = $request->surname;
                $user->patronymic = $request->patronymic;
                $user->role = 12;

                if($user->save()){
                    return redirect()->route('admin.teacher')->with('success','New teacher added!');
                }
                dd(122);
            }
            dd(12);
            return redirect()->route('admin.teacher')->with('error','Failed to add teacher!');
        }
        return view('admin.teacher.create');

    }
}
