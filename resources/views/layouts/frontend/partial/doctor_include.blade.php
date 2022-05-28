
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
                <div class="cta">
                    <a style="text-decoration: none;" href="{{route('doctor.show',$dr->id)}}">
                        <button class="cta-select2"><b>Make Appointment</b></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>