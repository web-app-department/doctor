@extends('layouts.backend.app')

@section('title','Doctor')

@push('css')
<style>
    label{
        padding: 0px 20px !important;
    }
    .border-control {
        border: 0;
    }
    input[type="number"]::-webkit-outer-spin-button,
    input[type="number"]::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    div#mceu_14 {display: none;}

div#mceu_20-body {display: none;}

div#mceu_19 {display: none;}

div#mceu_28-body {display: none;}

div#mceu_45 {display: none;}

div#mceu_50 {display: none;}
.mce-panel{
    border: none !important;
}
div#mceu_59-body {display: none;}
    input[type=number] {
  -moz-appearance: textfield;
}
</style>
@endpush

@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                           ADD NEW DOCTOR
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin.doctor.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group form-float">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-line">
                                            <input type="text" id="name" class="form-control border-control" name="name">
                                            <label class="form-label">Doctor Name English</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-line">
                                            <input type="text" id="name" class="form-control border-control" name="name_bn">
                                            <label class="form-label">Doctor Name Bangla</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="name" class="form-control border-control" name="educational_qualification">
                                            <label class="form-label">Educational Qualification</label>
                                        </div>
                                    </div>
                               </div>
                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="name" class="form-control border-control" name="educational_qualification_bn">
                                            <label class="form-label">Educational Qualification (Bangla)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="name" class="form-control border-control" name="experience">
                                            <label class="form-label">Additional Qualification</label>
                                        </div>
                                    </div>
                               </div>
                                <div class="col-md-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="name" class="form-control border-control" name="experience_bn">
                                            <label class="form-label">Additional Qualification (Bangla)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-line">
                                            <input type="text" id="specialist" class="form-control border-control" name="specialist">
                                            <label class="form-label">Speciality </label>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-line">
                                            <input type="text" id="specialist" class="form-control border-control" name="specialist_bn">
                                            <label class="form-label">Speciality (Bangla)</label>
                                        </div>
                                   </div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-line">
                                            <input type="text" id="designation" class="form-control border-control" name="designation">
                                            <label class="form-label">Designation </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-line">
                                            <input type="text" id="designation" class="form-control border-control" name="designation_bn">
                                            <label class="form-label">Designation (Bangla)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-line">
                                            <input type="text" id="hospital_name" class="form-control border-control" name="hospital_name">
                                            <label class="form-label">Hospital Name </label>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-line">
                                            <input type="text" id="hospital_name" class="form-control border-control" name="hospital_name_bn">
                                            <label class="form-label">Hospital Name (Bangla)</label>
                                        </div>
                                   </div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-line">
                                            <textarea type="text" id="chember" class="form-control border-control" name="chember"></textarea>
                                            <label class="form-label">Chember Address </label>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-line">
                                            <textarea type="text" id="chember_bn" class="form-control border-control" name="chember_bn"></textarea>
                                            <label class="form-label">Chember Address (Bangla)</label>
                                        </div>
                                   </div>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-line">
                                            <input type="number" id="phone" class="form-control border-control" name="phone">
                                            <label class="form-label">Phone Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-line">
                                            <input type="email" id="email" class="form-control border-control" name="email">
                                            <label class="form-label">Email Address</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            
                           
                            <div class="form-group form-float">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-line">
                                            <input type="number" id="consultation_fee" class="form-control border-control" name="consultation_fee">
                                            <label class="form-label">Consultation Fee</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-line">
                                            <input type="number" id="old_consultation_fee" class="form-control border-control" name="old_consultation_fee">
                                            <label class="form-label">Old Consultation Fee</label>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                           
                            
                            <div class="form-group form-float">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-line">
                                            <input type="text" id="available" class="form-control  border-control" name="available">
                                            <label class="form-label">Available Time</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="picture">Profile Image</label>
                                            <input type="file" id="picture" class="form-control border-control" name="picture">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.doctor.index') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <!-- TinyMCE -->
    <script src="{{ asset('assets/backend/plugins/tinymce/tinymce.js') }}"></script>
    <script>
        $(function () {
            //TinyMCE
            tinymce.init({
                selector: "textarea#tinymce",
                theme: "modern",
                height: 200,
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
                selector: "textarea#chember",
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
                selector: "textarea#chember_bn",
                // theme: "modern",
                height: 150,
                
               
                image_advtab: true
            });
            tinymce.suffix = ".min";
            tinyMCE.baseURL = '{{ asset('assets/backend/plugins/tinymce') }}';
        });
    </script>
@endpush