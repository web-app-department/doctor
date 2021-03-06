@extends('layouts.frontend.app')

@section('title')
{{ $query }}
@endsection

@push('css')
<link href="{{ asset('assets/frontend/css/category/styles.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/category/responsive.css') }}" rel="stylesheet">
<style>
    body{
        background: white !important;
    }
    .favorite_posts{
        color: blue;
    }

    .job_image_search img{
        width: 20%;
    }
    article.post_blog.format-standard {background: #fff;border: solid 1px #ddd;padding: 5px;border-radius: 5px;}

h2.post__title {height: 25px;overflow: hidden;}
.job_short_description.pt-2.pb-2 {height: 58px;overflow: hidden;}

.job_search_iput {
position: absolute;
top: 44%;

width: 100%
}
.job_search_wrap {
position: relative;
overflow: hidden;
}

.job_search_iput input {
width: 50%;
padding: 17px;
font-size: 18px;

}
.input_search {
margin: auto;
display: block;
text-align: center;
position: relative;
}

.input_search h5 {
margin-left: -36%;
}

.input_search button {
position: absolute;
left: ;
right: 26%;
background: #1660d6;
padding: 10px 43px;
border: navajowhite;
border-radius: 5px;
color: white;
font-weight: 500;
top: 42%;
}
@media (max-width:991px){
.job_search_iput input {
width: 56%;
padding: 17px;
font-size: 18px;
}
.input_search button {
position: absolute;
left: ;
right: 23%;
background: #1660d6;
padding: 10px 43px;
border: navajowhite;
border-radius: 5px;
color: white;
font-weight: 500;
top: 42%;
}
}

@media (max-width:768px){
.job_search_iput input {
width: 90%;
padding: 17px;
font-size: 18px;
}
.input_search button {
position: absolute;
left: ;
right: 6%;
background: #1660d6;
padding: 10px 43px;
border: navajowhite;
border-radius: 5px;
color: white;
font-weight: 500;
top: 42%;
}
.input_search h5 {
text-align: left;
margin-left: 5%;
}
.job_image_search img {
width: 30%;
margin: auto;
}
}
.job_section {
width: 100% !important;
float: left;
padding-right: 20px;
}
#job_body a{
width: 100%;
}
</style>
@endpush

@section('content')
    <div class="slider display-table center-text">
        <h1 class="title display-table-cell"><b>{{ $job->count() }} Results for {{ $query }}</b></h1>
    </div><!-- slider -->


    <section id="job_body" >
        <div class="row">
            <div class="col-md-7 m-auto">
                <div class="job_title mt-4 mb-3">
                    <h3 style="color: #383838 ; padding-left:10px"> 
                        ?????????????????????????????? ???????????????????????????
                        </h3>
                </div>
                @foreach ($job as $post)
                    @include('layouts.frontend.partial.job_include')
                @endforeach
            </div>
            <div class="paginate text-center">
              {{ $job->links() }}
          </div>
        </div>
    </section>

@endsection

@push('js')

@endpush