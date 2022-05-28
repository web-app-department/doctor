@extends('layouts.backend.app')

@section('title')
{{$appointment->patinet_name}}
@endsection
@push('css')

<style>
  .wrap_title {
    margin-bottom: 2%;
  }

  .wrap_body {
    margin-top: 20px;
  }

  /* td {
    margin-right: 22px !important;
    margin-bottom: 10px;
    display: inline-block;
  } */

  .btn.button-warning.submit_buuton {
    padding: 10px 52px;
    font-size: 20px;
    background: #2196f3;
    color: white;
    border: none;
    margin-top: 30px;
  }

  table#\32 stRow td {
    width: 11%;
    margin-left: 8px;
  }

  table.table2 th {
    width: 1px;
  }

  /* table#\31 stRow td {width: 14%;} */
  table#\31 stRow td {
    margin-top: 5px;
    width: 100%;
  }

  .does {
    margin-left: -53px;
    margin-bottom: 20px;
  }

  .right_side_table tr td{
    width: 14.28%;
  }
  .input input {
    width: 95%;
    margin-top: 15px;
  }
  .input button {
    margin-top: 15px;
  }

  @media (max-width:768px) {
    table#\31 stRow td {
      width: 100%;
    }

    table#\32 stRow td {
      width: 85%;
      margin-left: 8px;
      margin-top: 20px;
    }

    .does {
      margin-left: 0px;
      margin-bottom: 0px;
    }
    /* .input label {
      display: none;
    } */
    .right_side_labels {
      display: none;
    }
    .right_side_inputs {
      display: block;
      float: left;
      width: 100%;
    }
    .right_side_inputs td,
    .right_side_inputs th{
      display: block;
      width: 100% !important;
    }
    .right_side_inputs input {
      width: 100%;
    }
  }

  @media (min-width:768px) {
    .add2 {
      display: none;
    }
  }
</style>
@endpush
@php
$type_of_medicine=App\Prescription::distinct()->get(['type_of_medicine']);
$name_of_medicine=App\Prescription::distinct()->get(['name_of_medicine']);
$type_of_exam=App\Prescription::distinct()->get(['type_of_exam']);
$chife_complaint=App\Prescription::distinct()->get(['chife_complaint']);
$history_type_of_exam=App\Prescription::distinct()->get(['history_type_of_exam']);
$diagnosis_type_of_exam=App\Prescription::distinct()->get(['diagnosis_type_of_exam']);
$investigation_type_of_exam=App\Prescription::distinct()->get(['investigation_type_of_exam']);
$strenth_of_medicine=App\Prescription::distinct()->get(['strenth_of_medicine']);
$duration_of_medicine=App\Prescription::distinct()->get(['duration_of_medicine']);
$does_of_medicine=App\Prescription::distinct()->get(['does_of_medicine']);
$suggestion_of_medicine=App\Prescription::distinct()->get(['suggestion_of_medicine']);
@endphp

@section('content')
<datalist id="name_of_medicine">
  @foreach ($name_of_medicine as $medicine)
  <option>{{$medicine->name_of_medicine}}</option>
  @endforeach
</datalist>

<datalist id="type_of_exam">
  @foreach ($type_of_exam as $medicine)
  <option>{{$medicine->type_of_exam}}</option>
  @endforeach
</datalist>

<datalist id="chife_complaint">
  @foreach ($chife_complaint as $medicine)
  @foreach (explode(',' ,$medicine->chife_complaint) as $m)
  <option>{{$m}}</option>
  @endforeach
  @endforeach
</datalist>

<datalist id="history_type_of_exam">
  @foreach ($history_type_of_exam as $medicine)
  @foreach (explode(',' ,$medicine->history_type_of_exam) as $m)
  <option>{{$m}}</option>
  @endforeach
  @endforeach
</datalist>

<datalist id="diagnosis_type_of_exam">
  @foreach ($diagnosis_type_of_exam as $medicine)
  @foreach (explode(',' ,$medicine->diagnosis_type_of_exam) as $m)
  <option>{{$m}}</option>
  @endforeach
  @endforeach
</datalist>

<datalist id="investigation_type_of_exam">
  @foreach ($investigation_type_of_exam as $medicine)
  @foreach (explode(',' ,$medicine->investigation_type_of_exam) as $m)
  <option>{{$m}}</option>
  @endforeach
  @endforeach
</datalist>

<datalist id="type_of_medicine">
  @foreach ($type_of_medicine as $medicine)
  <option>{{$medicine->type_of_medicine}}</option>
  @endforeach
</datalist>

<datalist id="strenth_of_medicine">
  @foreach ($strenth_of_medicine as $medicine)
  <option>{{$medicine->strenth_of_medicine}}</option>
  @endforeach
</datalist>

<datalist id="duration_of_medicine">
  @foreach ($duration_of_medicine as $medicine)
  <option>{{$medicine->duration_of_medicine}}</option>
  @endforeach
</datalist>

<datalist id="does_of_medicine">
  @foreach ($does_of_medicine as $medicine)
  <option>{{$medicine->does_of_medicine}}</option>
  @endforeach
</datalist>

<datalist id="suggestion_of_medicine">
  @foreach ($suggestion_of_medicine as $medicine)
  <option>{{$medicine->suggestion_of_medicine}}</option>
  @endforeach
</datalist>

{{-- <datalist id="languagess">
  <option>{{$name_of_medicine->type_of_medicine}}</option>

</datalist> --}}
<div class="container-fluid">
  <div class="wrap_details">
    <div class="wrap_title ">
      <h4>
        {{$appointment->patinet_name}} Details

      </h4>
    </div>
    <hr style="border: solid 1px ">
    <div class="wrap_body">

      <div class="form-group" style="padding-bottom:10px">
        <label style="display: block" for="exampleInputEmail1">Patient Name</label>
        <span>{{ $appointment->patinet_name }}</span>
      </div>

      <div class="form-group" style="padding-bottom:10px">
        <label style="display: block" for="exampleInputEmail1">Patient Age</label>
        <span>{{ $appointment->patinet_age }}</span>
      </div>
      <div class="form-group" style="padding-bottom:10px">
        <label style="display: block" for="exampleInputEmail1">Patient Phone Number</label>
        <span>{{ $appointment->patinet_phone }}</span>
      </div>
      <div class="form-group" style="padding-bottom:10px">
        <label style="display: block" for="exampleInputEmail1">Patient Phone Email</label>
        <span>{{ $appointment->patinet_email }}</span>
      </div>
      <div class="form-group" style="padding-bottom:10px">
        <label style="display: block" for="exampleInputEmail1">Patient Condition</label>
        <span>{{ $appointment->patinet_condition }}</span>
      </div>
      @if ($appointment->patinet_previous_test !=null)
      <div class="form-group" style="padding-bottom:10px">
        <label style="display: block" for="exampleInputEmail1">Patient Previous Test</label>
        <span><a target="_blank" href="{{ url('storage/doctor/'.$appointment->patinet_previous_test) }}">{{
            $appointment->patinet_previous_test }}</a></span>
      </div>
      @endif
      <div class="form-group" style="padding-bottom:10px">
        <label style="display: block" for="exampleInputEmail1">Patient Serial Id</label>
        <span>{{ $appointment->appointment_id }}</span>
      </div>
      {{-- <div class="form-group" style="padding-bottom:10px">
        <label style="display: block" for="exampleInputEmail1">Patient Payment Number</label>
        <span>{{ $appointment->payment_number }}</span>
      </div>
      <div class="form-group" style="padding-bottom:10px">
        <label style="display: block" for="exampleInputEmail1">Patient Payment Amount</label>
        <span>{{ $appointment->amount }}</span>
      </div> --}}
      <hr style="border: solid 1px ">
      <div class="presception">
        <div class="presception_title" style="margin-bottom: 15px;">
          <i class="fas fa-plus fa-md float-end btn btn-success text-white" aria-hidden="true">
            <span style="font-family: 'Kalpurush'; margin-left: 8px;margin-bottom:20px">
              Make The Presception
            </span>
          </i>
          <h4 style="font-family: 'Kalpurush'; margin-left: 8px">Left Side</h4>
        </div>
        <div class="presception_form">
          <form action="{{route('author.appointment.store')}}" method="POST">
            @csrf
            <input type="hidden" value="{{ $appointment->id  }}" name="appointment_id">
            <input type="hidden" value="{{ $appointment->user_id  }}" name="user_id">
            <input type="hidden" value="{{ $appointment->patinet_name  }}" name="name">
            <input type="hidden" value="{{ $appointment->patinet_age  }}" name="age">
            <hr>
            <div class="row mt-4 d-block" style="margin-bottom: 15px;">
              {{-- <div class="col-md-12" style="margin-bottom: 15px !important">
                <div class="form-grop">
                  <label style="margin-right:20px;" for="">Type Of Exam</label>
                </div>
              </div> --}}
              <div class="col-md-12" style="margin-bottom: 15px !important">
                <div class="form-grop">
                  <div class="row">
                    <div class="col-md-3">
                      <label style="margin-right:20px;" for="">Chief Complaint</label>

                    </div>
                    <div class="col-md-3">
                      <input type="hidden" class="form-control" placeholder="Chief Complaint" list="chife_complaint"
                        data-live-search="true" name="chife_complaint[]">
                      <div class="chife_complaint"></div>
                    </div>
                    <div class="col-md-2">
                      <button class='btn btn-success btn-sm add_chife_complaint' style="margin-left: 10px"
                        type="button">ADD</a></button>

                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-12" style="margin-bottom: 15px !important">
                <div class="form-grop">
                  <div class="row">
                    <div class="col-md-3">
                      <label style="margin-right:20px;" for="">History</label>

                    </div>
                    <div class="col-md-3">
                      <input type="hidden" class="form-control" placeholder="History " list="history_type_of_exam"
                        data-live-search="true" name="history_type_of_exam[]">
                      <div class="history_type_of_exam"></div>

                    </div>
                    <div class="col-md-2">
                      <button class='btn btn-success btn-sm add_history_type_of_exam' style="margin-left: 10px"
                        type="button">ADD</a></button>

                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-12" style="margin-bottom: 15px !important">
                <div class="form-grop">
                  <div class="row">
                    <div class="col-md-3">
                      <label style="margin-right:20px;" for="">Diagnosis</label>

                    </div>
                    <div class="col-md-3">
                      <input type="hidden" class="form-control" list="diagnosis_type_of_exam" placeholder="Diagnosis "
                        data-live-search="true" name="diagnosis_type_of_exam[]">
                      <div class="diagnosis_type_of_exam"></div>
                    </div>
                    <div class="col-md-2">
                      <button class='btn btn-success btn-sm add_diagnosis_type_of_exam' style="margin-left: 10px"
                        type="button">ADD</a></button>

                    </div>
                  </div>

                </div>
              </div>
              <div class="col-md-12" style="margin-bottom: 15px !important">
                <div class="form-grop">
                  <div class="row">
                    <div class="col-md-3">
                      <label style="margin-right:20px;" for="">investigation</label>

                    </div>
                    <div class="col-md-3">
                      <input type="hidden" class="form-control" list="investigation_type_of_exam"
                        placeholder="Investigation " data-live-search="true" name="investigation_type_of_exam[]">
                      <div class="investigation_type_of_exam"></div>
                    </div>
                    <div class="col-md-2">
                      <button class='btn btn-success btn-sm add_investigation_type_of_exam' style="margin-left: 10px"
                        type="button">ADD</a></button>

                    </div>
                  </div>

                </div>
              </div>

            </div>



            <hr>
            <h4 style="font-family: 'Kalpurush'; margin-left: 8px">Right Side (RX)</h4>
            <button class='btn btn-success btn-sm add add2' type="button">ADD Medicine</a></button>
            <table style="margin-bottom: 15px; width: 100%;" class="right_side_table">
              <tbody class="input">
              <tr class="right_side_labels">
                <td>
                    <label for="">Type Of Medicine</label>
                </td>
                <td >
                  <div>
                    <label for="">Name Of Medicine</label>
                  </div>
                </td>
                <td>
                  <div>
                    <label for="">Strenth</label>
                  </div>
                </td>
                <td>
                  <div>
                    <label for="">Does</label>
                  </div>
                </td>
                <td >
                  <div>
                    <label for="">Duration</label>
                  </div>
                </td>
                <td >
                  <div>
                    <label for="">Suggestion</label>
                  </div>
                </td>
                <td>
                  <div>
                    <button class='btn btn-success btn-sm add' type="button">ADD</a></button>
                  </div>
                </td>
              </tr>
              </tbody>
              {{-- <tr> --}}
                {{-- <div class="col">
                  <div class="form-group">


                    <div class="input"></div>
                  </div>
                </div> --}}
              {{-- </tr> --}}
            </table>

            <div class="form-group">
              <label for="">Days Come After</label>
              <input type="text" class="form-control" name="come_after" placeholder=" (in Bengali)">
            </div>
        </div>
        <div class="form-group" style="padding-bottom:10px">
          <button type="submit" class="btn button-warning submit_buuton">Save</button>
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
  $(document).ready(function () {
    const maxField = 10;
    const warpper = $('.chife_complaint');
    const addField = $('.add_chife_complaint');
    var i = 1;
    addField.click(function () {
      if (i < maxField) {
        i++;
        warpper.append('' +
          '<table id="1stRow">' +
          '<tr  id="row">' +
          '<td class="pb-3">' +
          '<input type="text" class="form-control me-3" placeholder="Chief Complaint" list="chife_complaint" data-live-search="true" name="chife_complaint[]">' +
          '</td>' +
          '<td class="pb-3">' +
          '<button class="btn btn-danger btn-sm remove_field delete-row1" type="button">Remove</i>' +
          '</button>' +
          '</td>' +
          '</tr>' +
          '</table>');
      }
    });
  });
  $(document).ready(function () {
    const maxField = 10;
    const warpper = $('.history_type_of_exam');
    const addField = $('.add_history_type_of_exam');
    var i = 1;
    addField.click(function () {
      if (i < maxField) {
        i++;
        warpper.append('' +
          '<table id="1stRow">' +
          '<tr  id="row">' +
          '<td class="pb-3">' +
          '<input type="text" class="form-control" placeholder="History " list="history_type_of_exam" data-live-search="true" name="history_type_of_exam[]">' +
          '</td>' +
          '<td class="pb-3">' +
          '<button class="btn btn-danger btn-sm remove_field delete-row1" type="button">Remove</i>' +
          '</button>' +
          '</td>' +

          '</tr>' +
          '</table>');
      }
    });
  });
  $(document).ready(function () {
    const maxField = 10;
    const warpper = $('.diagnosis_type_of_exam');
    const addField = $('.add_diagnosis_type_of_exam');
    var i = 1;
    addField.click(function () {
      if (i < maxField) {
        i++;
        warpper.append('' +
          '<table id="1stRow">' +
          '<tr  id="row">' +
          '<td class="pb-3">' +
          '<input type="text" class="form-control" list="diagnosis_type_of_exam" placeholder="Diagnosis " data-live-search="true" name="diagnosis_type_of_exam[]">' +
          '</td>' +
          '<td class="pb-3">' +
          '<button class="btn btn-danger btn-sm remove_field delete-row1" type="button">Remove</i>' +
          '</button>' +
          '</td>' +
          '</tr>' +
          '</table>');
      }
    });
  });
  $(document).ready(function () {
    const maxField = 10;
    const warpper = $('.investigation_type_of_exam');
    const addField = $('.add_investigation_type_of_exam');
    var i = 1;
    addField.click(function () {
      if (i < maxField) {
        i++;
        warpper.append('' +
          '<table id="1stRow">' +
          '<tr  id="row">' +
          '<td class="pb-3">' +
          '<input type="text" class="form-control" list="investigation_type_of_exam" placeholder="Investigation " data-live-search="true" name="investigation_type_of_exam[]">' +
          '</td>' +
          '<td class="pb-3">' +
          '<button class="btn btn-danger btn-sm remove_field delete-row1" type="button">Remove</i>' +
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
          '<tr id="row" class="right_side_inputs">' +
          '<td>' +
          '<input class="form-control" id="educationDate" list="type_of_medicine" placeholder="Type Of Medicine" data-live-search="true" name="type_of_medicine[]" type="text">' +
          '</td>' +
          '<td>' +
          '<input class="form-control" list="name_of_medicine" placeholder="Name Of Medicine" data-live-search="true" name="name_of_medicine[]" type="text">' +
          '</td>' +
          '<td>' +
          '<input class="form-control" list="strenth_of_medicine" placeholder="Strenth" data-live-search="true" name="strenth_of_medicine[]" type="text">' +
          '</td>' +
          '<td>' +
          '<input type="text" class="form-control" list="duration_of_medicine" placeholder="Dose" data-live-search="true" name="duration_of_medicine[]">' +
          '</td>' +
          '<td>' +
          '<input type="text" class="form-control" list="does_of_medicine" placeholder="Duration" data-live-search="true" name="does_of_medicine[]">' +
          '</td>' +

          '<td>' +
          '<input type="text" class="form-control" list="suggestion_of_medicine" placeholder="Suggestiones"  data-live-search="true" name="suggestion_of_medicine[]">' +
          '</td>' +
          '<td>' +
          '<button class="btn btn-danger btn-sm remove_field delete-row"  id="removeField" type="button">Remove</i>' +
          '</button>' +
          '</td>'
          + '</tr>'
          );
      }
    });
  })
  $(document).ready(function () {
    //var removeField = 
    $("#removeField").click(function () {

      $('.remove_field').remove();
    });
  })


  // Remove criterion
  $(document).on("click", ".delete-row", function () {
    //  alert("deleting row#"+row);
    $(this).closest('tr').remove();
    return false;
  });

  // Remove criterion
  $(document).on("click", ".delete-row1", function () {
    //alert("deleting row#"+row);

    $(this).closest('tr').remove();
    return false;
  });
</script>

@endpush