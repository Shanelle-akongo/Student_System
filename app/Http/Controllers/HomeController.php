<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){


        if (Auth::id()) {
            if (Auth::user()->user_type=='0') {
                        return view('student.home');
                    }else if (Auth::user()->user_type=='2') {
                        return view('lecturer.home');
                    }else if (Auth::user()->user_type=='3') {
                        return view('staff.home');
                    }
            else if (Auth::user()->user_type=='1'){
                   return view('admin.home');
            } else{
                   return view('users.home');
            }         
        }else{
            return redirect->back();
        }

    }

    public function index(){
        return view('users.home');
    }
}
