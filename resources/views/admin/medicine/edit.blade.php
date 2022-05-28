@extends('layouts.backend.app')

@section('title','Medicine')

@push('css')

@endpush

@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                           ADD NEW Medicine
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin.medicine.update',$medicines->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                    <div class="  col-md-6">
                                    <div class="form-group form-float">
                                                <div class="form-line">
                                                      <input type="text" id="name" class="form-control p-2" name="name" value="{{$medicines->name}}">
                                                      <label class="form-label">Medicine Name</label>
                                                </div>
                                          </div>
                                     </div>
                                     
                                     
                                   
                                    <div class="col-md-6">
                                          <div class="form-group form-float">
                                                <div class="form-line">
                                                      <input type="text" id="name" class="form-control p-2" name="type" value="{{$medicines->type}}">
                                                      <label class="form-label">Medicine Type</label>
                                                </div>
                                          </div>
                                  </div>
                            </div>

                            <!-- <div class="form-group">
                                <input type="file" name="image">
                            </div> -->

                            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.medicine.index') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')

@endpush