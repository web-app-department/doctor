@extends('layouts.frontend.app')

@section('title','All Blog')

@push('css')
    <link href="{{ asset('assets/frontend/css/category/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/category/responsive.css') }}" rel="stylesheet">
    <style>
        .favorite_posts{
            color: blue;
        }
        body{
            height: auto !important;
        }
        article.post_blog.format-standard {background: #fff;border: solid 1px #ddd;padding: 5px;border-radius: 5px;}

h2.post__title {height: 40px;overflow: hidden;}
  .job_short_description.pt-2.pb-2 {height: 58px;overflow: hidden;}
    </style>
@endpush

@section('content')
    {{-- <div class="slider display-table center-text">
        <h1 class="title display-table-cell"><b>ALL POSTS</b></h1>
    </div><!-- slider --> --}}
    <section class="mt-2" data-bg-color="#f4f4f4">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <h1 class="section-page-title text-center" style="font-size:35px; padding: 90px 0px 20px 0px;"><span style="border-bottom:solid 2px tomato;">All Blog</span> </h1>
                </div>
            </div>
        </div>
        </section> 
    <div class="content-block clearfix">
        <div class="inhype-blog-block-wrapper page-container container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-posts-list blog-layout-grid inhype-blog-col-3" id="content">
                        @foreach($posts as $post)
                            @include('layouts.frontend.partial.blog_include')
                        @endforeach
                    </div>
              <div class="paginate text-center">
                  {{ $posts->links() }}
              </div>
                </div>
            </div>
        </div>
    </div>




@endsection

@push('js')

@endpush