@extends('layouts.frontend.app')

@section('title','FAQ')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    .body{
        font-size: 15px!important;
    }
    html {
        font-size: 14px !important;
    }
</style>
@endpush
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

@endpush

@section('content')
   <div class="container">
       <div class="accordion" id="accordionPanelsStayOpenExample">
           <div class="accordion-item">
               <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                   <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                       What is w3asolution?
                   </button>
               </h2>
               <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                   <div class="accordion-body">
                       blog.w3asolution is one of the best multi blog site in Bangladesh.Here you can increase your Knowledge about Health, Technology, Nutrition, Website, Digital marketing, Science, News.                   </div>
               </div>
           </div>
           <div class="accordion-item">
               <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                       How can I make money from w3asolution?
                   </button>
               </h2>
               <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                   <div class="accordion-body">
                       You can Easily Register Our Freelance Content writer. And Earn Money By sharing Your content Trough your social media.                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection