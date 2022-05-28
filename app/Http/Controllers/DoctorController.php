<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Doctor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor=Doctor::all();
        return view('doctor.index',compact('doctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        // dd($request);

        $appoinment=Appointment::where('id',$request->appoinment_id)->first();
       
        // dd($appoinment_id);
        $data['payment_number']=$request->pataint_payment;
        $data['amount']=$request->amount;
        DB::table('appointments')->where('id',$request->appoinment_id)->update($data);
        return redirect()->route('doctor.report',$appoinment->id)->with('message','success');
        
    }
public function report($id){
    $appoinment= Appointment::where('id',$id)->first();
    // dd($appoinment);
    $doctor= Doctor::where('id',$appoinment->doctor_id)->first();

    return view('doctor.report_submit',compact('doctor','appoinment'));
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dr=Doctor::where('id',$id)->first();
        return view('doctor.doctor_view',compact('dr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appoinment= Appointment::where('id',$id)->first();
        $doctor= Doctor::where('id',$appoinment->doctor_id)->first();
        
        return view('doctor.payment',compact('doctor','appoinment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       // dd($request);
        $appoinment=Appointment::where('id',$request->appoinment_id)->first();
        $image = $request->file('patinet_previous_test');
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('doctor'))
            {
                Storage::disk('public')->makeDirectory('doctor');
            }

            $postImage = Image::make($image)->resize(1600,1066)->stream();
            Storage::disk('public')->put('doctor/'.$imageName,$postImage);

        } else {
            $imageName = "default.png";
        }
        $data['patinet_previous_test']=$imageName;


        DB::table('appointments')->where('id',$request->appoinment_id)->update($data);
       return redirect()->route('doctor.success',$appoinment->id)->with('message','success');
        
    }
public function success($id){
    $appoinment= Appointment::where('id',$id)->first();
    $doctor= Doctor::where('id',$appoinment->doctor_id)->first();
    // dd( $appoinment);

    return view('doctor.success',compact('doctor','appoinment'));
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
