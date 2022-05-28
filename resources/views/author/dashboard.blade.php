@extends('layouts.backend.app')

@section('title','All Doctor List')


@push('css')
    <!-- JQuery DataTable Css -->
    <link href="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid">
      
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ALL Appointment List
                            <span class="badge bg-blue">{{ $appoinment->count() }}</span>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>View</th>
                                    <th> Name</th>
                                    <th> Age</th>
                                    <th> Phone</th>
                                    <th> Email</th>
                                    <th> Condition </th>
                                    <th> Appointment Id </th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                   <th>Sl No.</th>
                                    <th>View</th>
                                    <th> Name</th>
                                    <th> Age</th>
                                    <th> Phone</th>
                                    <th> Email</th>
                                    <th> Condition </th>
                                    <th> Appointment Id </th>
                                </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($appoinment as $key=>$doctor)
                                        <tr>
                                            <td>{{ $loop->index +1}}</td>
                                            <td class="text-center">
                                                <a href="{{ route('author.appointment.show',$doctor->id) }}" class="btn btn-info waves-effect">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                               
                                            </td>
                                            <td>{{ $doctor->patinet_name  }}</td>
                                            <td>{{ $doctor->patinet_age}}</td>
                                            <td>{{ $doctor->patinet_phone }}</td>
                                            <td>{{ $doctor->patinet_email }}</td>
                                            <td>{{ $doctor->patinet_condition}}</td>
                                            <td>{{ $doctor->appointment_id  }}</td>
                                           
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
@endsection

@push('js')
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <script src="{{ asset('assets/backend/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    
@endpush