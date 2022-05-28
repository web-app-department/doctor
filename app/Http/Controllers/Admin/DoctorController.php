<?php

namespace App\Http\Controllers\Admin;

use App\Doctor;
use App\Notifications\NewPostNotify;
use App\Post;
use App\Subscriber;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use IlluminateAgnostic\Collection\Support\Str;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors=Doctor::all();
       return view('admin.doctor.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return  view('admin.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate($request,[
//          
//            'image' => 'required',
//          
//        ]);
        $image = $request->file('picture');
        $slug = str::slug($request->name);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('profile'))
            {
                Storage::disk('public')->makeDirectory('profile');
            }

            $postImage = Image::make($image)->resize(1600,1066)->stream();
            Storage::disk('public')->put('profile/'.$imageName,$postImage);

        } else {
            $imageName = "default.png";
        }

        $user=new User();
        $user->name=$request->name;
        $user->username=$request->name;
        $user->role_id=2;
        $user->email=$request->email;
        $user->image=$imageName;
        $user->password=bcrypt('123456');
        if ( $user->save()){
            $doctor = new Doctor();
            $doctor->user_id = $user->id;
            $doctor->name = $request->name;
            $doctor->name_bn = $request->name_bn;
            $doctor->educational_qualification = $request->educational_qualification;
            $doctor->educational_qualification_bn = $request->educational_qualification_bn;
            $doctor->phone = $request->phone;
            $doctor->experience = $request->experience;
            $doctor->experience_bn = $request->experience_bn;
            $doctor->email = $request->email;
            $doctor->designation = $request->designation;
            $doctor->designation_bn = $request->designation_bn;
            $doctor->specialist = $request->specialist;
            $doctor->specialist_bn = $request->specialist_bn;
            $doctor->hospital_name = $request->hospital_name;
            $doctor->hospital_name_bn = $request->hospital_name_bn;
            $doctor->old_consultation_fee = $request->old_consultation_fee;
            $doctor->consultation_fee = $request->consultation_fee;
            $doctor->available = $request->available;
            $doctor->chember = $request->chember;
            $doctor->chember_bn = $request->chember_bn;
            $doctor->save();
        }

        Toastr::success('Doctor Successfully Saved :)','Success');
        return redirect()->route('admin.doctor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor=Doctor::where('id',$id)->first();
        return view('admin.doctor.edit',compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::where('id',$id)->first();
        $doctor->name = $request->name;
        $doctor->name_bn = $request->name_bn;
        $doctor->educational_qualification = $request->educational_qualification;
        $doctor->educational_qualification_bn = $request->educational_qualification_bn;
        $doctor->phone = $request->phone;
        $doctor->experience = $request->experience;
        $doctor->experience_bn = $request->experience_bn;
        $doctor->email = $request->email;
        $doctor->designation = $request->designation;
        $doctor->designation_bn = $request->designation_bn;
        $doctor->specialist = $request->specialist;
        $doctor->specialist_bn = $request->specialist_bn;
        $doctor->hospital_name = $request->hospital_name;
        $doctor->hospital_name_bn = $request->hospital_name_bn;
        $doctor->old_consultation_fee = $request->old_consultation_fee;
        $doctor->consultation_fee = $request->consultation_fee;
        $doctor->available = $request->available;
        $doctor->chember = $request->chember;
        $doctor->chember_bn = $request->chember_bn;
        $doctor->save();
        Toastr::success('Doctor Successfully Updated :)','Success');
        return redirect()->route('admin.doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor=Doctor::where('id',$id)->first();
        if (Storage::disk('public')->exists('doctor/'.$doctor->picture))
        {
            Storage::disk('public')->delete('doctor/'.$doctor->picture);
        }
        $doctor=Doctor::where('id',$id)->first();
        $doctor->delete();
        Toastr::success('Doctor Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
