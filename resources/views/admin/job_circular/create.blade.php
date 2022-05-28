@extends('layouts.backend.app')
@push('css')
  <style>
    .custom_tinymc #mceu_59 , #mceu_90 ,#mceu_152 ,#mceu_121 {display: none;}

.custom_tinymc div#mceu_64 , #mceu_95 ,#mceu_157 ,#mceu_126{display: none;}

.custom_tinymc div#mceu_73-body , #mceu_104-body , #mceu_166 ,#mceu_135 {display: none;}
  </style>
@endpush
@section('title','Create New Job Post')

@push('css')
<style>
  .ck-editor__editable {
    min-height: 200px;
  }
  .form-group{
    margin-bottom: 0px !important;
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
        <div class="card mt-3">
          <div class="header">
            <h2>Create New Job Post</h2>
        </div>
        <div class="body">
          <form action="{{route('admin.job_circular.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="title">Job Title</label>
                    <input type="text" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Enter Title" required>
                  </div>      
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="text" name="company_name" class="form-control" id="company_name" aria-describedby="company_name" placeholder="Enter Company Name" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="Departmant">Departmant</label>
                    <input type="text" name="departmant" class="form-control" id="Departmant" aria-describedby="Departmant" placeholder="Enter Departmant Name" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="short_des">Location</label>
                    <input name="location" style="resize: vertical;" rows="2" class="form-control" placeholder="Location" >
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group custom_tinymc">
                    <label for="job_resposibilities">Job Resposibilities</label>
                    <textarea  type="text" name="job_resposibilities" class="form-control" rows="6" id="job_resposibilities" aria-describedby="Departmant" placeholder="Job Resposibilities" ></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group custom_tinymc">
                    <label for="job_resposibilities">Education Requirments</label>
                    <textarea type="text" name="education_requirments" class="form-control" rows="6" id="education_requirments" aria-describedby="Departmant" placeholder="Education Requirments" ></textarea>
                  </div>
                </div>
                <div class="col-md-12 ">
                  <div class="form-group custom_tinymc">
                    <label for="additaional_requirments">Experiance</label>
                    <textarea rows="6" type="text" name="additaional_requirments" class="form-control" id="additaional_requirments" aria-describedby="additaional_requirments" placeholder="Experiance" ></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="short_des"> Description</label>
                    <textarea name="des" style="resize: vertical;" id="tinymce" rows="6" class="form-control" placeholder="Full Details (1000 Words)"></textarea><br/> 
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
                      <option value="Work From Office">Work From Office</option>
                      <option value="Work From Home">Work From Home</option>
                    </select> <br/>
                  </div>
                </div>
              
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="short_des">Deadline</label>
                    <input type="date" class="form-control" name="deadline" required/><br/>
                  </div>  
                </div>      
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="vacancy">Vacancy</label>
                    <input type="text" class="form-control" name="vacancy"  placeholder="Vacancy" required/><br/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="text" class="form-control" name="salary"  placeholder="salary" required/><br/>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="short_des">Status</label>
                  <select name="status" class="form-control" required>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                  </select> <br/>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group custom_tinymc">
                    <label for="apply_process">Apply Process</label>
                    <textarea type="text" id="apply_process"  class="form-control" name="apply_process"  placeholder="Apply Process" rows="6" required> </textarea><br/>
                  </div>
                </div>
                  
                  
                  <input type="submit" class='btn btn-primary' value="Post Now" />
            </div>
          </form>
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

        $(function () {
            //TinyMCE
            tinymce.init({
                selector: "textarea#apply_process",
                // theme: "modern",
                height: 150,
                
               
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('assets/backend/plugins/tinymce') }}';
        });
        $(function () {
            //TinyMCE
            tinymce.init({
                selector: "textarea#additaional_requirments",
                // theme: "modern",
                height: 150,
                
               
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('assets/backend/plugins/tinymce') }}';
        });  
           $(function () {
            //TinyMCE
            tinymce.init({
                selector: "textarea#education_requirments",
                // theme: "modern",
                height: 150,
                
               
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('assets/backend/plugins/tinymce') }}';
        }); 
         $(function () {
            //TinyMCE
            tinymce.init({
                selector: "textarea#job_resposibilities",
                // theme: "modern",
                height: 150,
                
               
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('assets/backend/plugins/tinymce') }}';
        });
    </script>

@endpush