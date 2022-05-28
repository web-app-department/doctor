@extends('layouts.frontend.app')
@section('title')
    {{$post->title}}
@endsection
@push('css')
    <style>
      body{
          background: #F6F7FA;
      }  
.job_sarch_title {
  font-size: 15px;
  font-weight: 200;
  margin-bottom: 10px;
}
.search-form__input {
  width: 100%;
  padding-left: 15%;
  border: solid blue;
}
.search_form_details {
  position: relative;
}
.search_form_details i {
  position: absolute;
  top: 17px;
  left: 20px;
  color: #8a8080;
}
.fade.in {
 
  visibility: visible;
}
    </style>
@endpush

@section('content')
<div id="job_details" class="pt-5" style="padding-top:  5% !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class="job_sarch_title" style="color: #383838"><i class="fas fa-briefcase"></i> &nbsp; আপনার স্বপ্নের চাকরি খুঁজুন</h2>
                <div class="search_form_details">
                    <i aria-hidden="true" class="fas fa-search"></i>
                     <input placeholder="জব টাইটেল, কিওয়ার্ড বা কোম্পানি..." class="search-form__input" type="search" name="search" title="Search" value="">
         
                </div>

                <div class="add_wrap mt-4">
                    <img src="https://tpc.googlesyndication.com/sadbundle/$csp%3Der3$/11481848807124956750/300x600.jpg" alt="">
                </div>
            </div>

            <div class="col-md-9">
                <div class="job_details_body_wrap">
                    <div class="job_wraps">
                        <div class="job_title_details">
                            <span class="h2">{{$post->title}}</span>
                        </div>
                        @if ($post->company_name !=null)
                
                        <div class="job_tagm mt-2" style="color: blue">
                            <span>
                                {{$post->company_name}}
                            </span>
                        </div>
                        @endif
                        <div class="job_create_time_wrap overflow-hidden mb-2">
                            <div class="crated_time">
                                <span>{{$post->created_at->diffForHumans()}}</span>
                            </div>
                            @if ($post->tags !=null)
                            <div class="crated_time">
                                <span> {{$post->tags}}</span>
                            </div>
                            @endif
                           
                        </div>
                        <hr>
                       
                        <div class="deadline_job mb-4">
                            <h3 class="m-0" style="color: #383838">  Employement Status </h3> 
                            <span>{{$post->type}}
                            </span>
                        </div> 
                        @if ($post->departmant !=null)
                        <div class="deadline_job mb-4">
                            <h3 class="m-0" style="color: #383838">  Departmant</h3> 
                            <span>{{$post->departmant}}
                            </span>
                        </div>  
                        @endif  

                         @if ($post->job_resposibilities !=null)
                        <div class="deadline_job mb-4">
                            <h3 class="m-0" style="color: #383838">  Job Resposibilities</h3> 
                            <span>{{$post->job_resposibilities}}
                            </span>
                        </div>  
                        @endif    

                         @if ($post->education_requirments !=null)
                        <div class="deadline_job mb-4">
                            <h3 class="m-0" style="color: #383838">  Education Requirments</h3> 
                            <span>{{$post->education_requirments}}
                            </span>
                        </div>  
                        @endif

                         @if ($post->additaional_requirments !=null)
                        <div class="deadline_job mb-4">
                            <h3 class="m-0" style="color: #383838">  Experiance</h3> 
                            <span>{{$post->additaional_requirments}}
                            </span>
                        </div>  
                        @endif

                         @if ($post->vacancy !=null)
                        <div class="deadline_job mb-4">
                            <h3 class="m-0" style="color: #383838"> Vacancy</h3> 
                            <span>{{$post->vacancy}} 
                            </span>
                        </div>  
                        @endif
                         @if ($post->salary !=null)
                        <div class="deadline_job mb-4">
                            <h3 class="m-0" style="color: #383838"> Salary</h3> 
                            <span>{{$post->salary}} 
                            </span>
                        </div>  
                        @endif
                        
                        <div class="deadline_job mb-4">
                            <h3 class="m-0" style="color: #383838">  Workplace </h3> 
                            <span>{{$post->workplace}}
                            </span>
                        </div> 
                        <div class="deadline_job mb-4">
                            <h3 class="m-0" style="color: #383838"> Published Date </h3> 
                            <span>{{$post->created_at->diffForHumans()}}
                            </span>
                        </div>
                        <div class="deadline_job mb-4">
                            <h3 class="m-0" style="color: #383838"> Published Date </h3> 
                            <span>{{\Carbon\Carbon::createFromFormat('Y-m-d', $post->deadline)->format('d-m-Y')}}
                            </span>
                        </div>
                        <div class="job_short_description pt-2 pb-2">
                          <h3 class="m-0" style="color: #383838"> Description </h3> 

                          <p>
                              {!! $post->des !!}
                          </p>
                        </div>
                        @if ($post->apply_process !=null)
                        <div class="deadline_job mb-4">
                            <h3 class="m-0" style="color: #383838"> Apply Process</h3> 
                            <span>{{$post->apply_process}} 
                            </span>
                        </div>  
                        @endif
                       <div class="apply_btn">
                           <button type="button" data-toggle="modal" data-target="#applay" class="btn btn-md bnt-warning" style="background: blue;border:none">Apply Now</button>
                       </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="applay" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">{{$post->title}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('apply_list_submit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Full Name" required>
              </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Enter Address" required>
              </div> 
              <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Enter City" required>
              </div> 
                <div class="form-group">
                <label for="number">Number</label>
                <input type="number" class="form-control" name="number" id="number" placeholder="Enter Number" required>
              </div>  
              <div class="form-group">
                <label for="file">Attach File</label>
                <input type="file" class="form-control" name="file" id="file" placeholder="Enter file" >
              </div>
              <input type="hidden" name="job_id" value="{{$post->id}}" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Full Name" required>

              {{-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div> --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" style="background: blue;border:none">Send</button>
        </div>
        </form>
      </div>
    </div>
  </div>

    </div>
</div>
@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endpush