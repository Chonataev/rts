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
            if (Auth::attempt(['username' => $request->username, 'password' => $request->password]))
            {
                $request->session()->regenerate();
                return redirect()->intended('profile');
            }

            return back()->withErrors([
                'username' => 'Неверный пароль или логин',
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

    public function join(StoreRequest $request)
    {
        $this->middleware('guest');

        if ($request->isMethod('post'))
        {
            User::create(
                [
                    'name'=>$request->name,
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'surname'=>$request->surname,
                    'patronymic' => $request->patronymic,
                    ]);
            return redirect()->route('main')->with('success','Вы успешно прошли регистрацию');
        }
        return view('register');

    }

    public function profile()
    {
        $id = Auth::id();
        $user = User::query()->find($id);
        return view('profile',compact('user'));
    }

    public function logout(StoreRequest $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

}
