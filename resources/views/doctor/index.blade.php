@extends('layouts.frontend.app')

@section('title','All Doctors')

@push('css')
  <style>
      section#doctor-profile-list {padding: 0px 80px;}
  </style>
@endpush

@section('content')

<section id="job_body" >
    <div class="row">
        <div class="col-md-9 m-auto">
            <div class="job_title mt-4 mb-3 text-center" style="padding: 90px 0px 20px 0px;">
                <h3 style="color: #383838 ; padding-left:10px"> 
                    
                শুধুমাত্র নামকরা হাসপাতালের
                <br>
                বিশেষজ্ঞদের প্রাইভেট চেম্বার
                    </h3>
            </div>
            @foreach ($doctor as $dr)
                @include('layouts.frontend.partial.doctor_include')
            @endforeach
        </div>
    </div>
</section>
       


@endsection

@push('js')

@endpush