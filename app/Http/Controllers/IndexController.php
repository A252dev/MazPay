<?php

namespace App\Http\Controllers;
use App\Models\Sections;
use App\Models\Users;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    static function checkAuth()
    {
        $user = Users::select('email', 'nickname', 'avatar', 'registration_date')->where('nickname', '=', request()->cookie('USER'))->first();
        if (!empty($user)){
            return $user;
        } else {
            return 0;
        }
    }

    public function index()
    {
        $user = $this->checkAuth();
        if (!empty($user)){
            return view('index', compact('user'));
        } else {
            return view('index');
        }
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }

    public function profile()
    {
        if (!empty($user = $this->checkAuth())){
            return view('profile', compact('user'));
        } else{
            return redirect('login');
        }
    }

    public function sales()
    {
        if (!empty($user = $this->checkAuth())){
            return view('sales', compact('user'));
        } else{
            return redirect('login');
        }
    }

    public function purchases()
    {
        if (!empty($user = $this->checkAuth())){
            return view('purchases', compact('user'));
        } else{
            return redirect('login');
        }
    }

    public function list()
    {
        if (!empty($user = $this->checkAuth())){
            return view('list', compact('user'));
        } else{
            return redirect('login');
        }
    }

    public function edit()
    {
        if (!empty($user = $this->checkAuth())){
            return view('edit', compact('user'));
        } else{
            return redirect('login');
        }
    }

    public function messages()
    {
        if (!empty($user = $this->checkAuth())){
            return view('messages', compact('user'));
        } else{
            return redirect('login');
        }
    }

    public function sections($section)
    {
        if(!empty($section)){
            if(!empty($user = $this->checkAuth())){
                return view('sections.sections', compact('user'));
            } else {
                return redirect('login');
            }
        } else {
            return redirect('/');
        }
    }

    public function settings()
    {
        if (!empty($user = $this->checkAuth())){
            return view('settings', compact('user'));
        } else{
            return redirect('login');
        }
    }

    public function logout()
    {
        Cookie::queue(Cookie::forget('USER'));
        return redirect('/');
    }
}
