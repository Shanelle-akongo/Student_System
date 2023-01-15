<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\message_staff;

class StaffController extends Controller
{
        public function send_message1(Request $request){
        $message_staff = new message_staff;

        $name = $request->input('name');
        $title = $request->input('title');
        $message = $request->input('message');
        $department = $request->input('department');

        $message_staff->name=$name;
        $message_staff->title=$title;
        $message_staff->message=$message;
        $message_staff->department=$department;

        $message_staff->save();

        return redirect()->back();
    }
}
