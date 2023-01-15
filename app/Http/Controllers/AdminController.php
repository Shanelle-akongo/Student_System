<?php

namespace App\Http\Controllers;

 use Illuminate\Http\Request;

// use Request;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\graduation;
use App\Models\timetable;
use App\Models\course;

class AdminController extends Controller
{
    

    public function upload(Request $request){
        $user = new user;
        $file = \Request::file('profile_photo_url');
        $destination = 'images';
        $ext= $file->getClientOriginalExtension();
        $mainFilename = Str::random(40).date('h-i-s').".".$ext;
        $file->move($destination, $mainFilename);

        $name = $request->input('name');
        $phone_number = $request->input('phone_number');
        $user_type = $request->input('user_type');
        $email = $request->input('email');
        $department = $request->input('department');
        $unit = $request->input('unit');
        $course = $request->input('course');
        // $password = bcrypt($request->input('password'));
        $password=Hash::make($request->input('password'));

        $user->profile_photo_path=$mainFilename;
        $user->name=$name;
        $user->phone_number=$phone_number;
        $user->user_type=$user_type;
        $user->email=$email;
        $user->department=$department;
        $user->course=$course;
        $user->unit=$unit;
        $user->password=$password;
        // $user->password=Hash::make($request->password);

        $user->save();

        return redirect()->back();
    }

        public function upload1(Request $request){
        $course = new course;

        $name = $request->input('name');
        $code = $request->input('code');
        $year = $request->input('year');
        $status = $request->input('status');

        $course->name=$name;
        $course->code=$code;
        $course->year=$year;
        $course->status=$status;

        $course->save();

        return redirect()->back();
    }

        public function upload2(Request $request){
        $timetable = new timetable;

        $course = $request->input('course');
        $lec = $request->input('lec');
        $unit = $request->input('unit');
        $day = $request->input('day');
        $start_time = $request->input('start_time');
        $finish_time = $request->input('finish_time');

        $timetable->course=$course;
        $timetable->lec=$lec;
        $timetable->unit=$unit;
        $timetable->day=$day;
        $timetable->start_time=$start_time;
        $timetable->finish_time=$finish_time;

        $timetable->save();

        return redirect()->back();
    }

    public function delete_user(Request $request){
        $id = $request->input('uid');
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function delete_timetable(Request $request){
        $timetable = new timetable;
        $id = $request->input('uid');
        $timetable = timetable::find($id);
        $timetable->delete();
        $timetable->save();
        return redirect()->back();
    }

    public function delete_graduation(Request $request){
        $graduation = new graduation;
        $id = $request->input('uid');
        $graduation = graduation::find($id);
        $graduation->delete();
        $graduation->save();
        return redirect()->back();
    }

    public function update_graduation(Request $request){
        $graduation = new graduation;
        $id = $request->input('uid');
        $status = $request->input('status');
        $graduation = graduation::find($id);
        $graduation->status=$status;
        $graduation->save();
        return redirect()->back();
    }

}
