@extends('layouts.backend.app')

@section('title')
Make A Presception
@endsection
@push('css')
<script src="{{ asset('assets/backend/plugins/jquery/jquery.min.js') }}"></script>

<link href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
<style>

.wrap_title {
  margin-bottom: 2%;
}
td {margin-right: 22px !important;margin-bottom: 10px; display: inline-block;}

.wrap_body{
    margin-top: 20px;
}
.btn.button-warning.submit_buuton {
	padding: 10px 52px;
	font-size: 20px;
	background: #2196f3;
	color: white;
	border: none;
	margin-top: 30px;
}

</style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="wrap_details">
            <div class="wrap_title ">
                <h4>Make A Presception111</h4>
            </div>
            <hr style="border: solid 1px ">
            <div class="wrap_body">
          
                    
                      <div class="presception">
                          
                          <div class="presception_form">
                        <form action="{{route('author.appointment.store')}}"  method="POST">
                            @csrf
                            <div class="body">
                                <div class="form-group">
                                    <label for="">Patient Name</label>
                                    <input type="text" class="form-control"  name="name" required placeholder="Enter Patient Name">
                                </div>
                                 <div class="form-group">
                                    <label for="">Patient Age</label>
                                    <input type="number" class="form-control" name="age" required placeholder="Enter Patient Age">
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                      <table class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th>Type Of Exam</th>
                                            <th>Chife Complaint</th>
                                            <th>History</th>
                                            <th>Diagnosis</th>
                                            <th> <button class='btn btn-success btn-sm add_field' type="button">ADD</a></button></th>
                                          </tr>
                                        </thead>
                                      </table>
                                    </div>
                                </div>
  
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <div class="input_field"></div>
                                </div>
                            </div>
                        </div>
  
                  <div class="col-md-12">
                      <table class="table table-bordered table-striped">
                        <h3>Right Side Text</h3>
                        <thead>
                          <tr>
                            <th>Type Of Medicine</th>
                            <th>Name Of Medicine</th>
                            <th>Strenth</th>
                            <th>Duration</th>
                            <th>Does</th>
                            <th>Suggestion</th>
                            <th> <button class='btn btn-success btn-sm add' type="button">ADD</a></button></th>
                          </tr>
                        </thead>
                    
                      </table>
                    <div class="row">
                          <div class="col">
                              <div class="form-group">
                              
                          
                                  <div class="input"></div>
                              </div>
                          </div>
                      </div>
                                    {{--  <label for="">Right Side Text</label>
                                    <textarea id="tinymce" name="presception"></textarea>  --}}
                                  
                                </div>
                                <div class="form-group">
                                    <label for="">Patient Come After</label>
                                    <input type="text" class="form-control" name="come_after"  placeholder=" Patient Come After ">
                                </div>
                            </div>
                                <div class="form-group" style="padding-bottom:10px">
                                <button  type="submit" class="btn button-warning submit_buuton">Save</button>
                              </div>  
                              
                        </form>
                          </div>
                        
                      </div>
                
            </div>
        </div>
    </div>
@endsection

@push('js')

    <!-- Select Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>
    <!-- TinyMCE -->
    <script src="{{ asset('assets/backend/plugins/tinymce/tinymce.js') }}"></script>

    <script>
        // In your Javascript (external .js resource or <script> tag)
            var type_of_exam_left_room = 1;
            function type_of_exam_left_education_fields() {
             
                type_of_exam_left_room++;
                var type_of_exam_left_objTo = document.getElementById('type_of_exam_left_education_fields')
                var divtest = document.createElement("div");
                divtest.setAttribute("class", "form-group left_removeclass"+type_of_exam_left_room);
                var rdiv = 'left_removeclass'+type_of_exam_left_room;
                divtest.innerHTML = '<div class="col-12 nopadding"><div class="form-group"><div class="input-group"><select class="form-control" id="educationDate" name="type_of_exam[]"><option value="">Type Of Exam</option><option value="X-Ray">X-Ray</option></select></div></div></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="type_of_exam_left_remove_education_fields('+ type_of_exam_left_room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div><div class="clear"></div>';
                
                type_of_exam_left_objTo.appendChild(divtest)
            }
               function type_of_exam_left_remove_education_fields(rid) {
                   $('.left_removeclass'+rid).remove();
               }

            var left_room = 1;
                        function left_education_fields() {
                        
                            left_room++;
                            var left_objTo = document.getElementById('left_education_fields')
                            var divtest = document.createElement("div");
                            divtest.setAttribute("class", "form-group left_removeclass"+left_room);
                            var rdiv = 'left_removeclass'+left_room;
                            divtest.innerHTML = '<div class="col-12 nopadding"><div class="form-group"><div class="input-group"><select class="form-control" id="educationDate" name="chife_complaint[]"><option value="">Type Of Exam</option><option value="X-Ray">X-Ray</option></select></div></div></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="left_remove_education_fields('+ left_room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div><div class="clear"></div>';
                            
                            left_objTo.appendChild(divtest)
                        }
                        function left_remove_education_fields(rid) {
                            $('.left_removeclass'+rid).remove();
                        }

            var history_left_room = 1;
                    function history_left_education_fields() {
                    
                        history_left_room++;
                        var history_left_objTo = document.getElementById('history_left_education_fields')
                        var divtest = document.createElement("div");
                        divtest.setAttribute("class", "form-group left_removeclass"+history_left_room);
                        var rdiv = 'left_removeclass'+history_left_room;
                        divtest.innerHTML = '<div class="col-12 nopadding"><div class="form-group"><div class="input-group"><select class="form-control" id="educationDate" name="history_type_of_exam[]"><option value="">History</option><option value="X-Ray">X-Ray</option></select></div></div></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="history_left_remove_education_fields('+ history_left_room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div><div class="clear"></div>';
                        
                        history_left_objTo.appendChild(divtest)
                    }
                    function history_left_remove_education_fields(rid) {
                        $('.left_removeclass'+rid).remove();
                    }



            var diagnosis_left_room = 1;
                    function diagnosis_left_education_fields() {
                    
                        diagnosis_left_room++;
                        var diagnosis_left_objTo = document.getElementById('diagnosis_left_education_fields')
                        var divtest = document.createElement("div");
                        divtest.setAttribute("class", "form-group left_removeclass"+diagnosis_left_room);
                        var rdiv = 'left_removeclass'+diagnosis_left_room;
                        divtest.innerHTML = '<div class="col-12 nopadding"><div class="form-group"><div class="input-group"><select class="form-control" id="educationDate" name="diagnosis_type_of_exam[]"><option value="">diagnosis</option><option value="X-Ray">X-Ray</option></select></div></div></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="diagnosis_left_remove_education_fields('+ diagnosis_left_room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div><div class="clear"></div>';
                        
                        diagnosis_left_objTo.appendChild(divtest)
                    }
                    function diagnosis_left_remove_education_fields(rid) {
                        $('.left_removeclass'+rid).remove();
                    }


            var investigation_left_room = 1;
                    function investigation_left_education_fields() {
                    
                        investigation_left_room++;
                        var investigation_left_objTo = document.getElementById('investigation_left_education_fields')
                        var divtest = document.createElement("div");
                        divtest.setAttribute("class", "form-group left_removeclass"+investigation_left_room);
                        var rdiv = 'left_removeclass'+investigation_left_room;
                        divtest.innerHTML = '<div class="col-12 nopadding"><div class="form-group"><div class="input-group"><select class="form-control" id="educationDate" name="investigation_type_of_exam[]"><option value="">investigation</option><option value="X-Ray">X-Ray</option></select></div></div></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="investigation_left_remove_education_fields('+ investigation_left_room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div><div class="clear"></div>';
                        
                        investigation_left_objTo.appendChild(divtest)
                    }
                    function investigation_left_remove_education_fields(rid) {
                        $('.left_removeclass'+rid).remove();
                    }



            var room = 1;
            function education_fields() {
             
                room++;
                var objTo = document.getElementById('education_fields')
                var divtest = document.createElement("div");
                divtest.setAttribute("class", "form-group removeclass"+room);
                var rdiv = 'removeclass'+room;
                divtest.innerHTML = '<div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"><select class="form-control" id="educationDate" name="type_of_medicine[]"><option value="">Type Of Medicine</option><option value="Liquid">Liquid</option><option value="Tablet">Tablet</option><option value="Capsules">Capsules</option><option value="Drops">Drops</option><option value="Injections">Injections</option></select></div></div></div><div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"><select class="form-control" id="educationDate" name="name_of_medicine[]"><option value="">Name Of Medicine</option> <option value="Rupa">Rupa</option><option value="Alectro">Alectro</option></select></div></div></div><div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"><select class="form-control" id="educationDate" name="strenth_of_medicine[]"><option value="">Strenth</option><option value="500 mg">500 mg</option><option value="250 mg">250 mg</option>  </select></div>  </div> </div><div class="col-sm-3 nopadding"><div class="form-group"> <div class="input-group"><select class="form-control" id="educationDate" name="duration_of_medicine[]"><option value="">Duration</option><option value="১+১+১">১+১+১</option><option value="১+১+০">১+১+০</option><option value="০+১+১">০+১+১</option><option value="১+০+১">১+০+১</option> <option value="০+০+১">০+০+১</option><option value="১+০+০">১+০+০</option> </select></div></div></div><div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"><select class="form-control" id="educationDate" name="does_of_medicine[]"><option value="">Does</option><option value="৫ দিন">৫ দিন</option><option value="১০ দিন">১০ দিন</option> </select></div></div> </div><div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"><select class="form-control" id="educationDate" name="suggestion_of_medicine[]"><option value="">Suggestion</option><option value="খাবার আগে">খাবার আগে</option> <option value="খাবার পরে">খাবার পরে</option></select></div> </div></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div><div class="clear"></div>';
                
                objTo.appendChild(divtest)
            }
               function remove_education_fields(rid) {
                   $('.removeclass'+rid).remove();
               }
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
    <script>
        $(document).ready(function () {
            const maxField = 10;
            const warpper = $('.input_field');
            const addField = $('.add_field');
            var i = 1;
            addField.click(function () {
                if (i < maxField) {
                    i++;
                    warpper.append('' +
                        '<table>' +
                        '<tr>' +
                        '<td>' +
                        '<select class="form-control" id="educationDate" name="type_of_exam[]"><option value="">Type Of Exam</option><option value="X-Ray">X-Ray</option></select>' +
                        '</td>' +
                        '<td>' +
                        '<select class="form-control" id="educationDate" name="chife_complaint[]"><option value="">Chife Complaint</option><option value="X-Ray">X-Ray</option></select>' +
                        '</td>' +
                        '<td>' +
                        '<select class="form-control" id="educationDate" name="history_type_of_exam[]"><option value="">History</option><option value="X-Ray">X-Ray</option></select>' +
                        '</td>' +
                        
                        '<td>' +
                        '<select class="form-control" id="educationDate" name="diagnosis_type_of_exam[]"><option value="">Diagnosis</option><option value="X-Ray">X-Ray</option></select>' +
                        '</td>' +
                        '<td>' +
                          '<select class="form-control" id="educationDate" name="investigation_type_of_exam[]"><option value="">investigation</option><option value="X-Ray">X-Ray</option></select>' +
                          '</td>' +
                        '<td>' +
                        '<button class="btn btn-danger btn-sm remove_field" type="button">Remove</i>' +
                        '</button>' +
                        '</td>' +
                        '</tr>' +
                        '</table>');
                }
            });
        });
        $(document).ready(function () {
            const maxField = 10;
            const warpper = $('.input');
            const addField = $('.add');
            var i = 1;
            addField.click(function () {
                if (i < maxField) {
                    i++;
                    warpper.append('' +
                        '<table>' +
                        '<tr>' +
                        '<td>' +
                        '<select class="form-control" id="educationDate" name="type_of_medicine[]"><option value="">Type Of Medicine</option><option value="Liquid">Liquid</option><option value="Tablet">Tablet</option><option value="Capsules">Capsules</option><option value="Drops">Drops</option><option value="Injections">Injections</option></select>' +
                        '</td>' +
                        '<td>' +
                        '<select class="form-control" id="educationDate" name="name_of_medicine[]"><option value="">Name Of Medicine</option><option value="Rupa">Rupa</option><option value="Alctro">Alctro</option></select>' +
                        '</td>' +
                        '<td>' +
                        '<select class="form-control" id="educationDate" name="strenth_of_medicine[]"><option value="">Strenth</option><option value="500 mg"> 500 mg</option><option value="250 mg">250 mg</option></select>' +
                        '</td>' +
                        '<td>' +
                        '<select class="form-control" id="educationDate" name="duration_of_medicine[]"><option value="">Duration</option><option value="১+১+১">১+১+১</option><option value="১+১+০">১+১+০</option><option value="০+১+১">০+১+১</option><option value="১+০+১">১+০+১</option><option value="০+০+১">০+০+১</option><option value="১+০+০">১+০+০</option></select>' +
                        '</td>' +
                        '<td>' +
                        '<select class="form-control" id="educationDate" name="does_of_medicine[]"><option value="">Does</option><option value="৫ দিন">৫ দিন</option><option value="১০ দিন">১০ দিন</option><option value="চলবে ">চলবে </option></select>' +
                        '</td>' +
                        
                        '<td>' +
                        '<select class="form-control" id="educationDate" name="suggestion_of_medicine[]"><option value="">Suggestion</option><option value="খাবার আগে">খাবার আগে</option><option value="খাবার পরে">খাবার পরে</option></select>' +
                        '</td>' +
                        '<td>' +
                        '<button class="btn btn-danger btn-sm remove_field"  type="button">Remove</i>' +
                        '</button>' +
                        '</td>' +
                        '</tr>' +
                        '</table>');
                }
            });
        })
        $(document).ready(function () {
    
            removeField.click(function () {
                
                $('.remove_field').remove(); 
            });
        })
    </script>
@endpush