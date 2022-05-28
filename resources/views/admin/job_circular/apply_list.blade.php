@extends('layouts.backend.app')

@section('title','Job Apllay List')

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
                            ALL JOB APPLY LIST
                            <span class="badge bg-blue">{{ $apply_list->count() }}</span>
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table display responsive nowrap table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th >Job Title</th>
                                    <th>Company Name</th>
                                    <th>Apply Starts At</th>
                                    <th>Deadline</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>File</th>
                                    <th >Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                     <th>No.</th>
                                    <th >Job Title</th>
                                    <th>Company Name</th>
                                    <th>Apply Starts At</th>
                                    <th>Deadline</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>File</th>
                                    <th >Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($apply_list as $key=>$post)
                                    @php
                                        $job_id=$post->job_id;
                                         $job=\App\JobCircular::where('id',$job_id)->first();
                                     @endphp
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                       
                                        <td>{{ $job->title }}</td>
                                        <td>{{ $job->company_name }}</td>
                                        <td>{{date('Y-m-d', strtotime($job->created_at))}}</td>
                                        <td>{{ $job->deadline }}</td>
                                        <td>{{ $post->name }}</td>
                                        <td>{{ $post->email }}</td>
                                        <td>{{ $post->number }}</td>
                                        <td>{{ $post->address }}</td>
                                        <td>{{ $post->city }}</td>
                                        <td>
                                            <a href="{{asset('file')}}/{{ $post->file }}" target="_blank" download>{{ $post->file }}</a>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.apply_list_details', $post->id)}}" class="btn btn-info waves-effect">
                                                <i class="material-icons">visibility</i>
                                            </a>
                                          

                                        </td>


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
<script src="{{asset('assets/backend/js/pages/jobs/deleteJobs.js')}}"></script>

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
    <script type="text/javascript">
        function removePost(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('remove-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush