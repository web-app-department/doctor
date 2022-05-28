@extends('layouts.backend.app')

@section('title','Create New Job Post')

@push('css')

@endpush

@section('content')
<div class="block-header">
  <a href="{{route('admin.job_circular.index')}}" class="btn btn-primary waves-effect">
    <i class="material-icons">arrow_back</i>
    <span>Go Back</span>
  </a>
  <a href="{{route('admin.job_circular.edit', $showJobCircular->id)}}" class="btn btn-primary waves-effect">
    <i class="material-icons">edit</i>
    <span>Edit Job Circular</span>
  </a>
</div>
    <div class="row clearfix">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="header">
            <h2>Looking For {{$showJobCircular->title}}</h2>
        </div>
        <div class="body">
          <h4>{{$showJobCircular->company_name}}</h4>
          <p class="text-secondary"><b>Employment Status:</b> {{$showJobCircular->type === 'full' ? "Full Time" : "Part Time"}}</p>
          <p><b>Availability: </b>{{$showJobCircular->status ? "Available" : "Not Available"}}</p>
          <p><b>Job Resposibilities:</b><br/> <?php echo $showJobCircular->job_resposibilities; ?></p>
          <p><b>Education Requirments:</b><br/> <?php echo $showJobCircular->education_requirments; ?></p>
          <p><b>Experiance:</b><br/> <?php echo $showJobCircular->additaional_requirments; ?></p>
          <p><b>Job Details:</b><br/> <?php echo $showJobCircular->des; ?></p>
          <p><b>Departmant:</b><br/> <?php echo $showJobCircular->departmant; ?></p>
          <p><b>Location:</b> {{$showJobCircular->location}}</p>
          <p><b>Workplace:</b> {{$showJobCircular->workplace === "office" ? "Office" : "Remote"}}</p>
          <p><b>Apply Starts From:</b> {{date('Y-m-d', strtotime($showJobCircular->created_at))}}</p>
          <p><b>Deadline:</b> {{$showJobCircular->deadline}}</p>
          <p><b>Vacancy:</b> {{$showJobCircular->vacancy}}</p>
          <p><b>Salary:</b> {{$showJobCircular->salary}}</p>
          <p><b>Apply Process:</b> {{$showJobCircular->apply_process}}</p>
        </div>
        </div>
      </div>
    </div>
@endsection