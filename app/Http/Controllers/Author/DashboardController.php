<?php

namespace App\Http\Controllers\Author;

use App\Appointment;
use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // dd('ok');
        $user = Auth::user();
        $doctor=Doctor::where('user_id',$user->id)->select('id')->first();
        //  dd($doctor);
        if($doctor == null){
            Auth::logout();
            return redirect()->route('home')->with('error','Doctor Not Found');
        }
        $appoinment=Appointment::where('status','0')->where('doctor_id',$doctor['id'])->orderBy('id','DESC')->get();
        // dd($appoinment);
        return view('author.dashboard',compact('appoinment'));
    }

}
