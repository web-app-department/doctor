<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('/favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('W3aSolution', 'DoctorInfoPateint') }}</title>
    <!-- Font -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <!-- Stylesheets -->
  <!-- Vendor CSS -->
  {{-- <link rel="stylesheet" href="{{asset('assets/assets/css')}}/bootstrap.css"> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" type="text/css"/>

  <link rel="stylesheet" href="{{asset('assets/assets/css')}}/vendor.css">

  <!-- style css -->
  <link rel="stylesheet" href="{{asset('assets/assets/css')}}/main.css">

  <!-- Job Css -->

  <style type="text/css">

  body{
    font-family: 'Hind Siliguri', sans-serif !important;
    overflow: hidden;
  }
  a{
      text-decoration: none !important;
  }
  .menuList {
      color: #222;
font-size: 18px;
font-weight: 400;
text-transform: capitalize;
position: relative;
display: block;
line-height: 30px;
padding: 5px 16px;
-webkit-transition: background 0.3s ease-in-out, color 0.3s ease-in-out, border-color 0.3s ease-in-out;
-moz-transition: background 0.3s ease-in-out, color 0.3s ease-in-out, border-color 0.3s ease-in-out;
-ms-transition: background 0.3s ease-in-out, color 0.3s ease-in-out, border-color 0.3s ease-in-out;
-o-transition: background 0.3s ease-in-out, color 0.3s ease-in-out, border-color 0.3s ease-in-out;
transition: background 0.3s ease-in-out, color 0.3s ease-in-out, border-color 0.3s ease-in-out;
padding: 5px 22px;
  }

.banner_text_wrap h1 {
padding: 20px;
font-size: 30px;
font-family: revert;
letter-spacing: 3px;
line-height: 45px;
}
.banner_text_wrap p {
padding: 0px 20px;
color: #554949;
}
.banner_text_wrap {
margin-top: 15%;
}
.header__inner ,nav {

background-color: #EAF2FD !important;}

    article#post-1833 {
  width: 48%;
  float: left;
  background: #fff;
  box-shadow: 0px 6px 8px 0px #979191;
  border: solid 1px #ddd;
  padding: 20px;
  margin: 10px;
}
article#post-1833:hover {
  border: solid 2px blue;
}

h3.elementor-heading-title.elementor-size-default {
  font-size: 20px;
  color: blue;
}

h6.elementor-heading-title.elementor-size-default {
  font-size: 15px;
  font-weight: 400;
}



.elementor-element.elementor-element-059a90f.elementor-widget__width-auto.elementor-widget.elementor-widget-heading h6.elementor-heading-title.elementor-size-default {
  width: 25%;
  float: left;
  font-size: 12px !important;
  padding: 5px 15px 5px 15px;
  background-color: #136EFF29;
  border-radius: 50px 50px 50px 50px;
  margin-right: 20px;
}

.elementor-element.elementor-element-1399cb8.elementor-widget__width-auto.elementor-widget.elementor-widget-heading h6.elementor-heading-title.elementor-size-default {
  /* width: 25%; */
  overflow: hidden;
  float: left;
  font-size: 12px !important;
  padding: 5px 15px 5px 15px;
  background-color: #136EFF29;
  border-radius: 50px 50px 50px 50px;
  margin-right: 20px;
}


.elementor-element.elementor-element-0923c8d.cjob.elementor-widget.elementor-widget-heading {
  overflow: hidden;
  display: block;
}

.elementor-element.elementor-element-1399cb8.elementor-widget__width-auto.elementor-widget.elementor-widget-heading {
  overflow: hidden;
}  

@media (max-width: 768px){
  .header__col.header__left{
      width: 25% !important;
  }
     article#post-1833 {
  width: 100%;}
  .elementor-element.elementor-element-059a90f.elementor-widget__width-auto.elementor-widget.elementor-widget-heading h6.elementor-heading-title.elementor-size-default {
  width: auto !important;
  float: left;
  font-size: 12px !important;
  padding: 5px 15px 5px 15px;
  background-color: #136EFF29;
  border-radius: 50px 50px 50px 50px;
  margin-right: 20px;
}
section#doctor-profile-list{
  padding: 20px !important;
}
.job_search_iput {
  position: absolute;
  top: 15% !important;
  width: 100%;
}
}
  </style>
  
<!-- Job Css End -->


      <link rel="stylesheet" href="{{asset('assets/assets/static')}}/css/doctor_all1bce.css?v=6" />
      <link rel="stylesheet" href="{{asset('assets/assets/static')}}/css/doctor_card7b30.css?v=4" />
      <link rel="stylesheet" href="{{asset('assets/assets/static')}}/css/search30f4.css?v=3" />
      <link rel="stylesheet" href="{{asset('assets/assets/static')}}/css/doctor_search_card3860.css?v=1" />
      <link rel="stylesheet" href="{{asset('assets/assets/static')}}/css/grt-youtube-popupd41d.css?" />

{{-- theme css start  --}}
<style>
.btn{
  min-width: auto !important;
}
    img.wp-smiley,img.emoji{display:inline !important;border:none !important;box-shadow:none !important;height:1em !important;width:1em !important;margin:0
    .07em !important;vertical-align:-0.1em !important;background:none !important;padding:0
    !important}
    .footermenu ul li {
        display: inline!important;
        list-style: none;
        padding: 0px 7px;
    }

    .footermenu ul {
        padding: 0;
        margin: 0;
    }

    .footermenu {
        width: 70%;
        float: left;
        margin-top: 10px;
    }
 </style>
 <link
    rel=stylesheet href={{asset('assets/theme/assets/minify')}}/8bd16.css media=all>
 <link
    rel=stylesheet href="{{asset('assets/theme/wp-content')}}/plugins/woocommerce/assets/css/woocommerce-smallscreen3fd0.css?ver=3.8.2" media="only screen and (max-width: 768px)">
 <link
    rel=stylesheet href={{asset('assets/theme/assets/minify')}}/485c3.css media=all>
 <style id=woocommerce-inline-inline-css>
     .woocommerce form .form-row
    .required{visibility:visible}
 </style>
 <link
    rel=stylesheet href={{asset('assets/theme/assets/minify')}}/db2db.css media=all>
 <script>(function(a,d){if(a._nsl===d){a._nsl=[];var c=function(){if(a.jQuery===d)setTimeout(c,33);else{for(var b=0;b<a._nsl.length;b++)a._nsl[b].call(a,a.jQuery);a._nsl={push:function(b){b.call(a,a.jQuery)}}}};c()}})(window);</script><script src={{asset('assets/theme/assets/minify')}}/46fcb.js></script> <script>var rlArgs = {"script":"swipebox","selector":"lightbox","customEvents":"","activeGalleries":"1","animation":"1","hideCloseButtonOnMobile":"0","removeBarsOnMobile":"0","hideBars":"1","hideBarsDelay":"5000","videoMaxWidth":"1080","useSVG":"1","loopAtEnd":"0","woocommerce_gallery":"0","ajaxurl":"https:\/\/wp.wp-preview.com\/inhype\/inhype-2\/wp-admin\/admin-ajax.php","nonce":"cad091c345"};</script> <script src={{asset('assets/theme/assets/minify')}}/4768c.js></script> 
 <link
    rel=https://api.w.org/ href=wp-json/index.html >

 <link
    rel=wlwmanifest type=application/wlwmanifest+xml href=wp-includes/wlwmanifest.xml>

 <style id=ctcc-css media=screen>
     #catapult-cookie-bar{box-sizing:border-box;max-height:0;opacity:0;z-index:99999;overflow:hidden;color:#ddd;position:fixed;left:20px;bottom:6%;width:300px;background-color:#464646}#catapult-cookie-bar



    a{color:#fff}#catapult-cookie-bar .x_close
    span{background-color: }button#catapultCookie{background:;color:;border:0;padding:6px
    9px;border-radius:3px}#catapult-cookie-bar
    h3{color:#ddd}.has-cookie-bar #catapult-cookie-bar{opacity:1;max-height:999px;min-height:30px}
 </style>
 <noscript>
    <style>.woocommerce-product-gallery{opacity:1 !important}</style>
 </noscript>
 <style>div.nsl-container[data-align="left"]{text-align:left}div.nsl-container[data-align="center"]{text-align:center}div.nsl-container[data-align="right"]{text-align:right}div.nsl-container .nsl-container-buttons
    a{text-decoration:none !important;box-shadow:none !important;border:0}div.nsl-container .nsl-container-buttons{display:flex;padding:5px
    0}div.nsl-container-block .nsl-container-buttons{flex-flow:column;align-items:center}div.nsl-container-block .nsl-container-buttons
    a{flex:1 1 auto;display:block;margin:5px
    0;max-width:280px;width:100%}div.nsl-container-inline{margin:-5px;text-align:left}div.nsl-container-inline .nsl-container-buttons{justify-content:center}div.nsl-container-inline .nsl-container-buttons
    a{margin:5px;display:inline-block}div.nsl-container-grid .nsl-container-buttons{flex-flow:row;align-items:center;flex-wrap:wrap}div.nsl-container-grid .nsl-container-buttons
    a{flex:1 1 auto;display:block;margin:5px;max-width:280px;width:100%}@media only screen and (min-width: 650px){div.nsl-container-grid .nsl-container-buttons
    a{width:auto}}div.nsl-container .nsl-button{cursor:pointer;vertical-align:top;border-radius:4px}div.nsl-container .nsl-button-default{color:#fff;display:flex}div.nsl-container .nsl-button-icon{display:inline-block}div.nsl-container .nsl-button-svg-container{flex:0 0 auto;padding:8px;display:flex}div.nsl-container
    span{display:inline-block}div.nsl-container
    svg{height:24px;width:24px;vertical-align:top}div.nsl-container .nsl-button-default span.nsl-button-label-container{margin:0
    24px 0 12px;padding:10px
    0;font-family:Helvetica,Arial,sans-serif;font-size:16px;line-height:20px;letter-spacing: .25px;overflow:hidden;text-align:center;text-overflow:clip;white-space:nowrap;flex:1 1 auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}div.nsl-container .nsl-button-google[data-skin="dark"] .nsl-button-svg-container{margin:1px;padding:7px;border-radius:3px;background:#fff}div.nsl-container .nsl-button-google[data-skin="light"]{border-radius:1px;box-shadow:0 1px 5px 0 rgba(0, 0, 0, .25);color:RGBA(0, 0, 0, 0.54)}div.nsl-container-block[data-align="left"] .nsl-container-buttons{align-items:flex-start}div.nsl-container-block[data-align="center"] .nsl-container-buttons{align-items:center}div.nsl-container-block[data-align="right"] .nsl-container-buttons{align-items:flex-end}div.nsl-container-inline[data-align="left"] .nsl-container-buttons{justify-content:flex-start}div.nsl-container-inline[data-align="center"] .nsl-container-buttons{justify-content:center}div.nsl-container-inline[data-align="right"] .nsl-container-buttons{justify-content:flex-end}div.nsl-container-grid[data-align="left"] .nsl-container-buttons{justify-content:flex-start}div.nsl-container-grid[data-align="center"] .nsl-container-buttons{justify-content:center}div.nsl-container-grid[data-align="right"] .nsl-container-buttons{justify-content:flex-end}div.nsl-container-grid[data-align="space-around"] .nsl-container-buttons{justify-content:space-around}div.nsl-container-grid[data-align="space-between"] .nsl-container-buttons{justify-content:space-between}
 </style>
 
<style>

  .job_section{
      width: 50%;
      float: left;
      padding-right: 20px;
      padding-left: 20px;
  }
  .job_wrap {
background: #fff;
border: solid 1px #ddd;
margin: 20px 0px;
box-shadow: 1px 3px 9px 1px #ddd !important;
padding: 10px 0px 10px 15px;
}
.job_title span {
color: #0084ff;
font-size: 20px;
font-family: ;
font-weight: 700;
}
.crated_time {
width: 25%;
float: left;
padding: 1px 10px;
background: #D9E8FF;
border-radius: 33px;
text-align: center;
font-size: 13px;
margin-right: 10px;
margin-top: 10px;
}
@media (max-width:768px){
  .job_section{
      width: 100%;
  }
  .crated_time {
width: 35%;
float: left;
padding: 1px 10px;
background: #D9E8FF;
border-radius: 33px;
text-align: center;
font-size: 13px;
margin-right: 10px;
margin-top: 10px;
}
}
</style>
 <style id=kirki-inline-styles>@font-face{font-display:swap;font-family:'Cormorant Garamond';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/cormorantgaramond/v10/co3bmX5slCNuHLi8bLeY9MK7whWMhyjorQ.woff) format('woff')}@font-face{font-display:swap;font-family:'Heebo';font-style:normal;font-weight:700;src:url(https://fonts.gstatic.com/s/heebo/v10/NGSpv5_NC0k9P_v6ZUCbLRAHxK1Ebiusd0mg.woff) format('woff')}@font-face{font-display:swap;font-family:'Lato';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/lato/v20/S6uyw4BMUTPHjxAwWA.woff) format('woff')}</style>
{{-- toastr --}}
<link rel="stylesheet" type="text/css"
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {{-- theme css end --}}

    {{-- <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet"> --}}

    <link href="{{ asset('assets/frontend/css/swiper.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/ionicons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script>
        $(document).ready(function(){
            var maxLength = 100;
            $(".show-read-more").each(function(){
                var myStr = $(this).text();
                if($.trim(myStr).length > maxLength){
                    var newStr = myStr.substring(0, maxLength);
                    var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
                    $(this).empty().html(newStr);
                    $(this).append('');
                    $(this).append('<span class="more-text">' + removedStr + '</span>');
                }
            });
            $(".read-more").click(function(){
                $(this).siblings(".more-text").contents().unwrap();
                $(this).remove();
            });
        });
    </script>
    <style>
        .show-read-more .more-text{
            display: none;
        }
b.speciality {
  overflow: hidden;
  /* text-overflow: ellipsis; */
  height: 20px;
  display: block;
}
.availability-today-div,
.designation {
  overflow: hidden;
  /* text-overflow: ellipsis; */
  height: 20px;
  display: block;
}
.availability-today-div {
  height: 45px;
}

.post-name {height: 40px;overflow: hidden;}

.work {height: 45px;overflow: hidden;}

.qualifications {height: 40px;overflow: hidden;}

div#doctor-availability-badge {height: 45px;overflow: hidden;}
    </style>
    @stack('css')

</head>
<body
data-rsssl=1 class="home blog theme-inhype woocommerce-no-js blog-post-transparent-header-disable blog-slider-disable blog-enable-images-animations blog-enable-sticky-sidebar blog-enable-sticky-header blog-style-corners-rounded blog-home-block-title-left blog-home-block-title-style-doubleborder blog-home-block-subtitle-style-uppercase">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0" nonce="TTNyNmMr"></script>
@include('layouts.frontend.partial.header')

@yield('content')

@include('layouts.frontend.partial.footer')

<!-- SCIPTS -->
{{-- <script src="{{ asset('assets/frontend/js/jquery-3.1.1.min.js') }}"></script> --}}

<script src="{{ asset('assets/frontend/js/tether.min.js') }}"></script>

{{-- <script src="{{ asset('assets/frontend/js/bootstrap.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/frontend/js/swiper.js') }}"></script>
{{-- <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{!! Toastr::message() !!}
<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}','Error',{
        closeButton:true,
        progressBar:true,
    });
    @endforeach
    @endif
</script>

<script type="text/javascript">
  @if(Session::has('message'))
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
        toastr.success("{{ session('message') }}");
    @endif
    @if(Session::has('error'))
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
        toastr.error("{{ session('error') }}");
    @endif
    @if(Session::has('info'))
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
        toastr.info("{{ session('info') }}");
    @endif
    @if(Session::has('warning'))
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
        toastr.warning("{{ session('warning') }}");
    @endif
  </script>

    <!-- Main JS -->
    <script src="{{asset('assets/assets/js')}}/main.js"></script>
@stack('js')
</body>
</html>
