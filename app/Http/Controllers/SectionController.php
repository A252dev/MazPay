<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function add_section()
    {
        if(!empty($user = IndexController::checkAuth())){
            return view('sections.add', compact('user'));

        } else {
            return redirect('login');
        }
    }
    public function add_confirm(Request $request)
    {
        dd($request);
        return view('sections.add');
    }
}
