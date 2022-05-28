<header class="header header-default site-header  overflow-hidden">
   <div class="header__outer">
       <div class="header__inner header--fixed">
           <div class="container">
               <div class="header__main">
                   <div class="header__col header__left" style="width:0%">
                       <a href="{{route('home')}}" class="logo">
                           <figure class="logo--normal">
                               <img src="{{asset('assets/assets/static')}}/img/logo.png" alt="Logo">
                           </figure>
                           <figure class="logo--transparency">
                               <img src="{{asset('assets/assets/static')}}/img/logo.png" alt="Logo">
                           </figure>
                       </a>
                   </div>
                   <div class="header__col header__center">
                       <nav class="main-navigation d-none d-lg-block" style="border-bottom:none !important;">
                           <ul class="mainmenu">
                               <li class="mainmenu__item menu-item-has-children position-relative">
                                   <a href="{{route('home')}}" class="menuList">Home</a>
                                   
                               </li>
                               <li class="mainmenu__item menu-item-has-children position-static">
                                   <a href="{{route('doctorindex')}}"  class="menuList">Doctor</a>
                                   
                               </li>
                               <li class="mainmenu__item menu-item-has-children position-relative">
                                   <a href="{{route('post.index')}}"   class="menuList">Blog</a>
                                  
                               </li>
                               <li class="mainmenu__item menu-item-has-children position-relative">
                                   <a href="{{route('job.index')}}"  class="menuList">Jobs</a>
                                   
                               </li>
                               
                           </ul>
                       </nav>
                   </div>
               <div class="header__col header__right" style="overflow: hidden;height: 34px;">

            @guest
            <li
            class="toolbar-item d-none d-lg-block icon-signup lrm-register lrm-hide-if-logged-in pull-right last-element menu-item menu-item-type-custom menu-item-object-custom menu-item-390"><a
            href=#register>Register</a></li>
            <li
            class="toolbar-item d-none d-lg-block icon-signin lrm-login lrm-hide-if-logged-in pull-right menu-item menu-item-type-custom menu-item-object-custom menu-item-951"><a
            href=#login>Login</a></li>
            @else
            @if(Auth::user()->role_id == 1)
            <li  class="toolbar-item d-none d-lg-block menu-item menu-item-type-post_type menu-item-object-page menu-item-763"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            @endif
            @if(Auth::user()->role_id == 2)
            <li  class="toolbar-item d-none d-lg-block menu-item menu-item-type-post_type menu-item-object-page menu-item-763"><a href="{{ route('author.dashboard') }}">Dashboard</a></li>
            @endif
            @if(Auth::user()->role_id == 3)
            <li  class="toolbar-item d-none d-lg-block menu-item menu-item-type-post_type menu-item-object-page menu-item-763"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
            @endif
            <li
            class="toolbar-item d-none d-lg-block  pull-right last-element menu-item menu-item-type-custom menu-item-object-custom menu-item-390">
            <a
               href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
            </form>
            </li>
            @endguest


                       <div class="toolbar-item d-block d-lg-none" style="height: 35px;">
                           <a href="#offcanvasnav" class="hamburger-icon js-toolbar menu-btn">
                               <span></span>
                               <span></span>
                               <span></span>
                               <span></span>
                               <span></span>
                               <span></span>
                           </a>
                       </div>
                     
                   </div>
               </div>
           </div>
       </div>
       <div class="header-sticky-height"></div>
   </div>
</header>
<!-- Header End -->
<!-- OffCanvas Menu Start -->
<aside class="offcanvas-navigation" id="offcanvasnav">
   <div class="offcanvas-navigation__inner">
       {{-- <a href="#" class="btn-close">
       </a> --}}
       <div class="offcanvas-navigation__top">
           <ul class="offcanvas-menu">
            
               <li class="has-children">
                  <a href="{{route('home')}}">
                      <span class="mm-text">Home</span>
                  </a>
              </li>
              <li class="has-children">
                  <a href="{{route('doctorindex')}}">
                      <span class="mm-text">Doctor</span>
                  </a>
              </li>
              <li class="has-children">
                  <a href="{{route('post.index')}}">
                     <span class="mm-text">Blog</span>
                  </a>
               </li>
               <li class="has-children">
                  <a href="{{route('job.index')}}">
                     <span class="mm-text">Job</span>
                  </a>
               </li>
               @guest
               <li class="has-children">
                  <a href="#register">
                     <span class="mm-text lrm-register">Register</span>
                  </a>
               </li>
               <li class="has-children">
                  <a href="#login">
                     <span class="mm-text lrm-login">Login</span>
                  </a>
               </li>
               @else
               @if(Auth::user()->role_id == 1)
               <li class="has-children">
                  <a href="{{ route('admin.dashboard') }}">
                     <span class="mm-text">Dashboard</span>
                  </a>
               </li>
               @endif
               @if(Auth::user()->role_id == 2)
               <li class="has-children">
                  <a href="{{ route('author.dashboard') }}">
                     <span class="mm-text">Dashboard</span>
                  </a>
               </li>
               @endif
               @if(Auth::user()->role_id == 3)
               <li class="has-children">
                  <a href="{{ route('user.dashboard') }}">
                     <span class="mm-text">Dashboard</span>
                  </a>
               </li>
                @endif
                <li class="has-children">
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                     <span class="mm-text">Logout</span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                  </form>
               </li>
               @endguest
           </ul>
       </div>
   </div>
</aside>
<!-- OffCanvas Menu End -->