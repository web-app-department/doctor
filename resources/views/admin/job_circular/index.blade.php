@extends('layouts.backend.app')

@section('token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title','Jobs')

@push('css')
<style>
  .table_wrapper {
    overflow-x: scroll;
  }

  table {
    width: auto;
  }
  .table_title {
    width: 10%;
  }
</style>
@endpush

@section('content')

<div class="row clearfix">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="header">
        <h2>All Job Posts  <span class="badge bg-blue">{{ $job_circular->count() }}</span></h2>
      </div>
      <div class="block-header">
        <a href="{{route('admin.job_circular.create')}}" class="btn btn-primary waves-effect">
          <i class="material-icons">add</i>
          <span>Post a New Job </span>
        </a>
      </div>
      <div class="body">
        <div class="table_wrapper">
          <table class="table table-striped table-hover table-responsive">
            <tr class="bg-dark">
              <th>No.</th>
              <th style="width: 20%">Job Title</th>
              <th>Company Name</th>
              <th>Employment Status</th>
              <th>Apply Starts At</th>
              <th>Deadline</th>
              <th>Workplace</th>
              <th>Location</th>
              <th>Status</th>
              <th colspan="3">Actions</th>
            </tr>
            <?php $n = 0; ?>
            @foreach($job_circular as $key => $value)
            <tr id="row-{{$value->id}}">
              <td>{{++$n}}</td>
              <td>{{$value->title}}</td>
              <td>{{$value->company_name}}</td>
              <td>{{$value->type === 'part' ? 'Part Time' : 'Full Time'}}</td>
              <td>{{date('Y-m-d', strtotime($value->created_at))}}</td>
              <td>{{$value->deadline}}</td>
              <td>{{$value->workplace === 'remote' ? "Remote" : "Office"}}</td>
              <td>{{mb_substr($value->location, 0, 20)}}...</td>
              <td>{{$value->status? "Active":"Inactive"}}</td>
              <td><a href="{{route('admin.job_circular.show', $value->id)}}" title="Show Job"><i class="material-icons">preview</i></a></td>
              <td><a href="{{route('admin.job_circular.edit', $value->id)}}" title="Edit"><i class="material-icons">edit</i></a></td>
              <td><a class='link-primary' style="cursor: pointer" onclick="deleteJob('{{route('admin.job_circular.destroy', $value->id)}}', {{$value->id}})"><i class="material-icons" title="Delete">delete</i></a></td>
            </tr>
            @endforeach
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('js')
<script src="{{asset('assets/backend/js/pages/jobs/deleteJobs.js')}}"></script>
@endpush