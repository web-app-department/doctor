<?php

namespace App\Http\Controllers\user;

use App\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
    //    dd($request) ;

        $this->validate($request,[
            'email' => 'required|email|unique:users',
        ]);
       // $appoinment_id_get=Appointment::all();

       $todayy = strtotime(Carbon::now());
       $Todaydate=date('Y-m-d', $todayy);
        
      // $today=Carbon::now();
       //dd($today);
        $listAppoinment =Appointment::where('doctor_id',$request->doctor_id)->where('today',$Todaydate)->get();
        // foreach ($listAppoinment as $to){
        //     $datee = strtotime($to->created_at);
        //    $date=date('Y-m-d', $datee);
           
        
            
        // }
       // dd($listAppoinment->created_at);

        $appoinment_id     = '#SL00' . (count($listAppoinment)+1);
        $unicode=uniqid($request->name);
       $appointment=new Appointment();

       $appointment->doctor_id=$request->doctor_id;
       $appointment->patinet_name=$request->patient_name;
       $appointment->patinet_age=$request->age;
       $appointment->patinet_phone=$request->number;
       $appointment->patinet_email=$request->email;
       $appointment->patinet_condition=$request->problem;
       $appointment->appointment_id= $appoinment_id;
       $appointment->today= $Todaydate;
       $appointment->save();
       $user=new User();
       $user->name=$request->patient_name;
       $user->username=$unicode;
       $user->role_id=3;
       $user->email=$request->email;
       $user->password=bcrypt('123456789');
       $user->save();
       return redirect()->route('doctor.edit',$appointment->id)->with('message','Your Account And Appointment Create Succesfully , Your Password (123456789)');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
