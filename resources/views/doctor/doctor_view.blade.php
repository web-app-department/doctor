@extends('layouts.frontend.app')
@section('title')
    {{$dr->name}}
@endsection
@push('css')
<style>
    #submit_btn {
	margin-top: 30px;
	font-weight: bold;
	font-size: 18px;
	background-color: #3cc6fa;
	border: none;
	width: 200px;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	border-radius: 3px;
	cursor: pointer;
}
.col-md-6.doctor_view .col-md-4 {width: 60% !important;    margin-top: 20px;}
@media (max-width:575px){
    .col-md-6.doctor_view .col-md-4 {width: 100% !important; margin-top: 20px;}
}
</style>
@endpush

@section('content')
    <section id="wrap_details_dr" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 m-auto">
                            <div class="appoinment_wrap">
                                <div class="appioinment_head">
                                    <h4>Make Appointment</h4>
                                </div>
                                <div class="dr_details_form">
                                    <form action="{{route('appoinment.store')}}" method="POST">
                                        @method('post')
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-12">
                                              <input type="text" name="patient_name" required class="form-control" placeholder="Patint Name * " aria-label="Patint Name ">
                                              <input type="hidden" name="doctor_id" required class="form-control" value="{{$dr->id}}">
                                            </div>
                                            <div class="col-12">
                                              <input type="number" name="age" required class="form-control" placeholder="Age (Year) * " aria-label="Age (Year)">
                                            </div> 
                                            <div class="col-12">
                                              <input type="number" name="number" required class="form-control" placeholder="Phone * " aria-label="Phone">
                                            </div> 
                                            <div class="col-12">
                                              <input type="email" name="email" required class="form-control" placeholder="Email * " aria-label="Email">
                                            </div> 
                                            <div class="col-12">
                                                <textarea class="form-control" name="problem" required placeholder="Condition in brief: e.g. headache. সংক্ষেপে সমস্যা: যেমন মাথাব্যাথা ( optional )" id="floatingTextarea2" style="height: 100px"></textarea>                                            </div>
                                            </div>
                                            <div class="col-12">
                                                <p style="font-size: 12px;text-align: left;margin: 0;line-height: 15px;">You can upload your previous test results/prescriptions after making payment on the next page.</p>
                                            </div>
                                            <div class="col-12">
                                                <section class="doctor-fee mt-3">
                                                    <span>Consultation Fee</span><br>
                                                    <b style="display: block; color: red;" id="discounted_fee"><span style="text-decoration: line-through;color:gray">BDT {{$dr->old_consultation_fee}}</span> BDT
                                                        {{$dr->consultation_fee}}</b>
                                                    <br>
                                                    <button class="submit" id="submit_btn">SUBMIT</button>
                                                </section>
                                            </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 doctor_view">
                   <div class="row">
                            
@php
$user=\App\User::where('id',$dr->user_id)->select('image')->first();
@endphp

{{-- href="{{route('doctor.show',$dr->id)}}" --}}
<div class="col-md-4 mb-5">
<div class="card shadow border-0">
    <div style="display: flex; height: 100%; flex-direction: column;">


        <div class="doctor_avatar" style="background-image: url('{{ url('storage/app/public/profile/'.$user->image) }}');"></div>
        {{-- <img style="cursor: pointer; max-height: 200px;height: 100%;width: 100%;}" onclick="createAppointment(32);" src="{{ url('storage/app/public/profile/'.$user->image) }}" alt="{{$dr->name}}" /> --}}



        <div class="card-body p-3" onclick="createAppointment(32);" style="cursor: pointer;">
            <b class="speciality">{{$dr->specialist}}</b>
            <b class="speciality">{{$dr->specialist_bn}}</b>
            <div class="post-name mb-4"><b>{{$dr->name}} <br></b></div>
            <div class="work">
                <p id="credentials32">
                    <span class="mb-3">{{$dr->educational_qualification}}</span><br/>
                    <span>{{$dr->experience}}</span>
                </p>
            </div>
            @if ($dr->experience)
            {{-- <div class="qualifications">
                <b></b><br />
            </div> --}}
            @endif
            <div class="designation">
            @if ($dr->designation)
                <b>{{$dr->designation}}</b><br/>
               
                @endif 
             @if ($dr->hospital_name)
                <b>{{$dr->hospital_name}}</b><br />
               
                @endif
            </div>
            
            <div id="doctor-availability-badge" style="margin-bottom: 10px;">
                <div class="availability-today-div">
                    Next Serial Available  &nbsp: {{$dr->available}} <br />
                    <span class="badge" style="background-color: #1dc468;"></span><b style="color: #1dc468;">Today</b>
                </div>
            </div>
            {{-- <div class="cta">
                <a style="text-decoration: none;" href="{{route('doctor.show',$dr->id)}}">
                    <button class="cta-select2"><b>Make Appointment</b></button>
                </a>
            </div> --}}
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