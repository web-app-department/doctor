<?php

namespace App\Http\Controllers\admin;

use App\contact;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact_message(){
        $posts = contact::latest()->get();
        return view('admin.contact_message',compact('posts'));
    }

    public function contact_message_stor(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $post = new contact();
        $post->name = $request->name;
        $post->email =$request->email;
        $post->phone = $request->phone;
        $post->subject = $request->subject;
        $post->message = $request->message;
        $post->save();
        Toastr::success(' Successfully Send Message :)','Success');
        return redirect()->route('contact');
    }
}
