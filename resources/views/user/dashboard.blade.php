@extends('layouts.backend.app')

@section('title','Dashboard')

@push('css')
<style>
  .page-loader-wrapper{
    display: none;
  }
</style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

   

    </div>
@endsection

@push('js')
    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('assets/backend/plugins/jquery-countto/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pages/index.js') }}"></script>
@endpush