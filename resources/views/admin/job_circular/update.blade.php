@extends('layouts.backend.app')

@section('title','Create New Job Post')

@push('css')
<style>
  .ck-editor__editable {
    min-height: 200px;
  }
</style>
@endpush

@section('content')
<div class="block-header">
  <a href="{{route('admin.job_circular.index')}}" class="btn btn-primary waves-effect">
    <i class="material-icons">arrow_back</i>
    <span>Go Back</span>
  </a>
</div>
<div class="row clearfix">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="header">
        <h2>Edit Job Posts</h2>
      </div>
      <div class="body">
        {{
            Form::model($editCircular, ['route'=>['admin.job_circular.update', $editCircular->id], 'method'=>'PATCH'])
          }}
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="title">Job Title</label>
              <input type="text" name="title" class="form-control" value="{{$editCircular->title}}" id="title"  aria-describedby="title" placeholder="Enter Title" required>
            </div>      
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="company_name">Company Name</label>
              <input type="text" name="company_name" class="form-control" value="{{$editCircular->company_name}}" id="company_name" aria-describedby="company_name" placeholder="Enter Company Name" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="Departmant">Departmant</label>
              <input type="text" name="departmant" class="form-control" value="{{$editCircular->departmant}}"  id="Departmant" aria-describedby="Departmant" placeholder="Enter Departmant Name" >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="short_des">Location</label>
              <input name="location" style="resize: vertical;" rows="2" value="{{$editCircular->location}}" class="form-control" placeholder="Location" >
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="job_resposibilities">Job Resposibilities</label>
              <textarea type="text" name="job_resposibilities" class="form-control" rows="6" id="job_resposibilities" aria-describedby="Departmant" placeholder="Job Resposibilities" > {{$editCircular->job_resposibilities}}</textarea>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="job_resposibilities">Education Requirments</label>
              <textarea type="text" name="education_requirments" class="form-control" rows="6" id="education_requirments" aria-describedby="Departmant" placeholder="Education Requirments" >{{$editCircular->education_requirments}} </textarea>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="additaional_requirments">Experiance</label>
              <textarea rows="6" type="text" name="additaional_requirments" class="form-control" id="additaional_requirments" aria-describedby="additaional_requirments" placeholder="Experiance" >{{$editCircular->additaional_requirments}} </textarea>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="short_des"> Description</label>
              <textarea name="des" style="resize: vertical;" id="tinymce" rows="6" class="form-control" placeholder="Full Details (1000 Words)"> {{$editCircular->des}}</textarea><br/> 
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="Type">Employment Status</label>
              <select name="type" class="form-control" required>
                <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
              </select><br/>
            </div>
          </div>
          {{-- <div class="form-group">
            <label for="short_des">Short Description</label>
            <textarea name="short_des" style="resize: vertical;" rows="4" class="form-control" placeholder="Short Details (255 Words)" required></textarea><br/>
          </div> --}}
        
          <div class="col-md-6">
            <div class="form-group">
              <label for="short_des">Workplace</label>
              <select name="workplace" class="form-control" required>
                @if($editCircular->workplace =='Work From Office')
                <option selected value="Work From Office">Work From Office</option>
                <option value="Work From Home">Work From Home</option>
    
                @else
                <option value="Work From Office">Work From Office</option>
                <option selected value="Work From Home">Work From Home</option>
                @endif
              </select> <br/>
            </div>
          </div>
        
          
          <div class="col-md-6">
            <div class="form-group">
              <label for="short_des">Deadline</label>
              <input type="date" value="{{$editCircular->deadline}}" class="form-control" name="deadline"  required/><br/>
            </div>  
          </div>      
          <div class="col-md-6">
            <div class="form-group">
              <label for="vacancy">Vacancy</label>
              <input type="text" class="form-control" value="{{$editCircular->vacancy}}" name="vacancy"   placeholder="Vacancy" required/><br/>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="salary">Salary</label>
              <input type="text" class="form-control" name="salary" value="{{$editCircular->salary}}"   placeholder="salary" required/><br/>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="short_des">Status</label>
            <select name="status" class="form-control" required>
              @if($editCircular->status =='1')
              <option selected value="1">Active</option>
              <option value="0">Inactive</option>

              @else
              <option value="1">Active</option>
              <option selected value="0">Inactive</option>
              @endif
            </select> 
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="apply_process">Apply Process</label>
              <textarea type="text" class="form-control" name="apply_process"   placeholder="Apply Process" rows="6" required> {{$editCircular->apply_process}} </textarea><br/>
            </div>
          </div>
            
            
      </div>
        <input type="submit" class='btn btn-primary' value="Update" />
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
@endsection


@push('js')
    <!-- Select Plugin Js -->
    <!-- TinyMCE -->
    <script src="{{ asset('assets/backend/plugins/tinymce/tinymce.js') }}"></script>
    <script>
        $(function () {
            //TinyMCE
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 300,
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools'
                ],
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons',
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('assets/backend/plugins/tinymce') }}';
        });
    </script>

@endpush