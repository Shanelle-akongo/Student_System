<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Models\resource;
use App\Models\message_class;

class LecController extends Controller
{
        public function add_resource(Request $request){
        $resource = new resource;
        $file = \Request::file('pdf_path');
        $destination = 'images';
        $ext= $file->getClientOriginalExtension();
        $mainFilename = Str::random(40).date('h-i-s')." ".$ext;
        $file->move($destination, $mainFilename);

        $name = $request->input('name');
        $status = $request->input('status');
        $course = $request->input('course');

        $resource->pdf_path=$mainFilename;
        $resource->name=$name;
        $resource->course=$course;
        $resource->status=$status;

        $resource->save();

        return redirect()->back();
    }

        public function send_message(Request $request){
        $message_class = new message_class;

        $name = $request->input('name');
        $title = $request->input('title');
        $message = $request->input('message');
        $course = $request->input('course');

        $message_class->name=$name;
        $message_class->title=$title;
        $message_class->message=$message;
        $message_class->course=$course;

        $message_class->save();

        return redirect()->back();
    }

    public function delete_resource(Request $request){
        $id = $request->input('uid');
        $data = resource::find($id);
        $data->delete();
        return redirect()->back();
    }

}
