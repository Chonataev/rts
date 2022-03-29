<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function login(UserRequest $request)
    {
        $this->middleware('guest');

        if ($request->isMethod('post'))
        {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            {
                $request->session()->regenerate();
                return redirect()->intended('profile');
            }

            return back()->withErrors([
                'email' => 'Неверный пароль или логин',
            ]);
        }

        if(Auth::check())
        {
            return redirect()->route('profile');
        }
        else
        {
            return view('login');
        }
    }

    public function store(StoreRequest $request)
    {
        $this->middleware('guest');

        if ($request->isMethod('post'))
        {
            User::create(
                [
                    'name'=>$request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'surname'=>$request->surname,
                    'patronymic' => $request->patronymic,
                    ]);
            return redirect()->route('main')->with('success','Вы успешно прошли регистрацию');
        }
        return view('register');

    }

    public function profile(){
        return view('profile');
    }
}
