@extends('layouts.frontend.app')
@section('title')
    Appointment Confirmation
@endsection
@push('css')
<style>
    #submit_btn {
	/* margin-top: 30px; */
	font-weight: bold;
	font-size: 18px;
	background-color: #3cc6fa;
	border: none;
	width: 200px;
	color: white;
	padding: 10px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	border-radius: 3px;
	cursor: pointer;
}
.row.patiant_details li {
	padding-bottom: 11px;
	
}
.ok_image{
    width:70%;
}
@media (max-width:768px){
    .ok_image{
        width:20%;
    }
}
</style>
@endpush

@section('content')
    <section id="wrap_details_dr" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 m-auto" >
                    <div class="card p-3" style="box-shadow:0 1rem 2rem hsl(0 0% 0% / 20%);">
                        <div class="card-header bg-white pt-3">
                          <div class="row">
                              <div class="col-md-2  ">
                                  <img style="" class="ok_image" src="https://www.dhakadoctor.live/static/img/GreenTick.svg" alt="">
                              </div>
                              <div class="col-md-10">
                                  <h4 style="margin-bottom: 8px;">Thank you</h4>
                                  <span>Your uploaded images will be with the doctor during your appointment . </span>
                              </div>
                              <h5 style="margin-top: 40px">VIDEO APPOINTMENT DETAILS</h5>
                          </div>
                        </div>
                        <div class="card-body">
                            <div class="row patiant_details pt-5">
                                <div class="col-md-6">
                                    <ul>
                                        <li>Serial No.</li>
                                        <li>Doctor</li>
                                        <li>Patient Name</li>
                                        <li>Appointment Id</li>
                                        <li>Transaction ID</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li><b>{{$appoinment->id}}</b></li>
                                        <li><b>{{$doctor->name}}</b></li>
                                        <li><b>{{$appoinment->patinet_name }}</b></li>
                                        <li><b>{{$appoinment->appointment_id }}</b></li>
                                        <li><b>{{$appoinment->payment_number  }}</b></li>
                                       
                                    </ul>
                                </div>
                                <div class="row p-0 m-0">
                                    <div class="col-md-12 p-0 m-0">
                                        <div class="total_tk p-4" style="background: #3cc6fa">
                                            <span class="text-white">
                                                You will receive a confirmation sms with appointment time and date in your phone number soon. 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
@endsection