@extends('layouts.frontend.app')

@section('title','Home')

@push('css')
    <link href="{{ asset('assets/frontend/css/home/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/home/responsive.css') }}" rel="stylesheet">
    <style>
        .favorite_posts{
            color: blue;
        }
        article.post_blog.format-standard {background: #fff;border: solid 1px #ddd;padding: 5px;border-radius: 5px;}

h2.post__title {height: 53px;overflow: hidden;padding-top: 5px;}
  .job_short_description.pt-2.pb-2 {height: 58px;overflow: hidden;}
  .job_title {
    height: 25px;
    overflow: hidden;
}
section#doctor-profile-list {padding: 0px 80px;}

    </style>
@endpush

@section('content')

<section id="homebanner" style="background: #F6F9FF;overflow: hidden;">
   <div class="container">
         <div class="row">
             <div class="col-md-6" style="position:relative;">
                 <div class="banner_text_wrap">
                     <h1>Feel Better About Finding Healthcare</h1>
                     <p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                     
                      </p>
                     <a href="{{route('about')}}" class="btn btn-primary border-0 btn-sm" style="margin-left: 20px; background: #0084ff">About Us</a>   
                </div>
             </div>
             <div class="col-md-6">
                 <div class="banner_img">
                     <img src="{{asset('assets/assets/img')}}//banner.png">
                 </div>
             </div>

         </div>
   </div>

</section>


@if ($doctor->count()>0)

    <section class="my-5 pt-5" data-bg-color="#f4f4f4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-page-title text-center" style="font-size:25px"><span style="border-bottom:solid 2px tomato;">Meet Our Specialist</span> </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="container" id="doctor-profile-list">
        <div class="row">
            @php
                $i=0;
            @endphp
            @foreach ($doctor as $dr)
                @php
                    $i++;
                @endphp
                @include('layouts.frontend.partial.doctor_include')
                @php
                    if($i >= 4) {
                        break;
                    }
                @endphp
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{route('doctorindex')}}" class="d-inline-block mx-auto btn border-0 fw-bold mt-5" style="background: #3cc6fa; padding: 15px 50px;">All Doctors</a>
        </div>
    </section>

@endif

@if ($job->count()>0)

<!--   Breadcrumb area Start -->
    <section class="mt-5 pt-5" data-bg-color="#f4f4f4">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h1 class="section-page-title text-center" style="font-size:35px"><span style="border-bottom:solid 2px tomato;">Our Jobs</span> </h1>
            </div>
        </div>
    </div>
    </section> 
@endif
<!-- Breadcrumb area End --> 

    <section id="jobs" class="overflow-hidden mb-3 mt-3">
        <div class="container">
            <div class="ecs-posts elementor-posts-container elementor-posts   elementor-grid elementor-posts--skin-custom" data-settings="{&quot;current_page&quot;:1,&quot;max_num_pages&quot;:5,&quot;load_method&quot;:&quot;numbers_and_prev_next&quot;,&quot;widget_id&quot;:&quot;34385b6&quot;,&quot;post_id&quot;:7,&quot;theme_id&quot;:7,&quot;change_url&quot;:false,&quot;reinit_js&quot;:false}">
               @foreach ($job as $post)
                 @include('layouts.frontend.partial.job_include')

               @endforeach
            </div>
        </div>
    </section>



<div
class="content-block clearfix">
<div
   class="inhype-showcase5-block-wrapper inhype-showcase5-block-wrapper-490762 inhype-block">
   <div
      class=inhype-block-wrapper-bg>
      <div
         class="container container-content">
         @if ($posts->count()>0)

         <!--   Breadcrumb area Start -->
             <section class="mt-2" style="padding: 20px 0px;" data-bg-color="#f4f4f4">
             <div class="container">
                 <div class="row">
                     <div class="col-12 ">
                         <h1 class="section-page-title text-center" style="font-size:35px"><span style="border-bottom:solid 2px tomato;">Our Blog</span> </h1>
                     </div>
                 </div>
             </div>
             </section> 
         @endif
         <!-- Breadcrumb area End --> 
         <div
            class=row>
            @foreach($posts as $post)
          
            @include('layouts.frontend.partial.blog_include')

            @endforeach
         </div>
      </div>
   </div>

@endsection

@push('js')

@endpush