<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\graduation;

class StudController extends Controller
{
        public function reg_grad(Request $request){
        $graduation = new graduation;

        $student = $request->input('uid');
        $course = $request->input('course');

        $graduation->student=$student;
        $graduation->course=$course;

        $graduation->save();

        return redirect()->back();
    }

        public function get_course(Request $request){
        $user = new user;
        $id = $request->input('uid');
        $course = $request->input('course');
        $user = user::find($id);
        $user->course=$course;
        $user->save();
        return redirect()->back();
    }

}
