@extends('layouts.backend.app')

@section('title','Create New Job Post')

@push('css')

@endpush

@section('content')
<div class="block-header">
  <a href="{{route('admin.apply_list')}}" class="btn btn-primary waves-effect">
    <i class="material-icons">arrow_back</i>
    <span>Go Back</span>
  </a>
  
</div>
    <div class="row clearfix">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="header">
        </div>
        <div class="body">
    
          <p><b>Name:</b> {{$job_apply_list->name}}</p>
          <p><b>Email:</b> {{$job_apply_list->email}}</p>
          <p><b>Address:</b> {{$job_apply_list->address}}</p>
          <p><b>City:</b> {{$job_apply_list->city}}</p>
          <p><b>Number:</b> {{$job_apply_list->number}}</p>
          <p><b>File:</b> <a href="{{asset('file')}}/{{ $job_apply_list->file }}" target="_blank" download>{{ $job_apply_list->file }}</a>
          </p>
        </div>
        </div>
      </div>
    </div>
@endsection