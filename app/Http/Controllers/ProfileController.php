<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function setCookie($nickname)
    {
        $minutes = 60;
        Cookie::queue('USER', $nickname, $minutes);
    }

    public function getCookie(Request $request)
    {
        return request()->cookie('USER');
    }

    public function register(Request $request)
    {
        if (!empty($request['email']) && !empty($request['nickname']) && !empty($request['password'])) {

            $user = new Users;
            $user->email = $request->input('email');
            $user->nickname = $request->input('nickname');
            $user->password = $request->input('password');
            $user->avatar = 'images/avatar.png';
            $user->registration_date = date('d.m.y');
            $user->save();

            ProfileController::setCookie($user->nickname);
            dd($request);
            return redirect('profile', compact('user'));
        } else {
            $error = 'Error of input';
            return view('register', compact('error'));
        }
    }

    public function login(Request $request)
    {
        $user = Users::select()->where('email', '=', $request['email'])->first();
        if (!empty($user)){
            if($user->password == $request['password'] and $user->email == $request['email']){
                ProfileController::setCookie($user->nickname);
                return redirect()->route('profile')->with( ['user' => $user] );
            } else{
                $error = 'Пароль неверный сука. Хули лезешь?!';
                return view('login', compact('error'));
            }
        } else {
            $error = 'User is not registered';
            return redirect()->route('register')->with(['error' => $error]);
        }
    }

    public function settings(Request $request)
    {
        IndexController::checkAuth();
        $user = Users::select()->where('nickname', '=', request()->cookie('USER'))->first();


        if(!empty($request['avatar'])){
            $file = $request->file("avatar");
            $file->move("images/users", $file->getClientOriginalName());
            $user->avatar = 'images/users/' . $file->getClientOriginalName();
        }
        if(!empty($request['email'])){
            $user->email = $request['email'];
        }
        if(!empty($request['password'])){
            $user->password = $request['password'];
        }
        $user->save();
        return redirect()->route('profile')->with(['success' => 'Данные успешно обновлены']);
    }
}
