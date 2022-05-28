@extends('layouts.backend.app')

@section('title','Post')

@push('css')
    <!-- JQuery DataTable Css -->
    <link href="{{ asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <a href="{{route('admin.job_circular.create')}}" class="btn btn-primary waves-effect">
              <i class="material-icons">add</i>
              <span>Post a New Job </span>
            </a>
          </div>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ALL JOB POST
                            <span class="badge bg-blue">{{ $job_circular->count() }}</span>
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
                                    <th>Employment Status</th>
                                    <th>Apply Starts At</th>
                                    <th>Deadline</th>
                                    <th>Workplace</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th >Actions</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th >Job Title</th>
                                    <th>Company Name</th>
                                    <th>Employment Status</th>
                                    <th>Apply Starts At</th>
                                    <th>Deadline</th>
                                    <th>Workplace</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                    @foreach($job_circular as $key=>$post)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->company_name }}</td>
                                            <td>{{ $post->type }}</td>
                                            <td>{{date('Y-m-d', strtotime($post->created_at))}}</td>
                                            <td>{{ $post->deadline }}</td>
                                            <td>{{ $post->workplace }}</td>
                                            <td>{{ $post->location }}</td>
                                            <td>
                                                @if($post->status == '1')
                                                    <span class="badge bg-blue">Published</span>
                                                @else
                                                    <span class="badge bg-pink">Pending</span>
                                                @endif
                                            </td>
                                            <td class="text-center">

                                                <a href="{{route('admin.job_circular.show', $post->id)}}" class="btn btn-info waves-effect">
                                                    <i class="material-icons">visibility</i>
                                                </a>
                                                <a href="{{route('admin.job_circular.edit', $post->id)}}" class="btn btn-info waves-effect">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a class="btn btn-danger waves-effect" style="cursor: pointer" onclick="deleteJob('{{route('admin.job_circular.destroy', $post->id)}}', {{$post->id}})"><i class="material-icons" title="Delete">delete</i></a>

                                                
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