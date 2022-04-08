<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{

    public function index(){
        $students = User::all()->where('role', '=', 100);
        return view('admin.student.index', compact('students'));
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
                $user->role = 100;

                if($user->save()){
                    return redirect()->route('admin.students')->with('success','New teacher added!');
                }
                dd(122);
            }
            dd(12);
            return redirect()->route('admin.student.index')->with('error','Failed to add teacher!');
        }
        return view('admin.student.create');

    }

    public function view($username)
    {
        $student = User::where('username',$username)->first();
        return view('student.profile', compact('student'));
    }

    public function delete($id){
        User::destroy($id);
        return redirect()->route('admin.student.index')->with('success', 'Teacher has been deleted!');
    }
}
