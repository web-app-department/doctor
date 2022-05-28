<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="{{ url('storage/app/public/profile/'.Auth::user()->image) }}" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">

                    <li>
                        @if(Auth::user()->role_id == 1)

                        <a href="{{route('admin.settings') }}"><i class="material-icons">settings</i>Settings</a>
                        @elseif (Auth::user()->role_id == 2)
                        <a href="{{ route('author.settings')}}"><i class="material-icons">settings</i>Settings</a>
                        @else{
                             <a href="{{route('user.settings')}}"><i class="material-icons">settings</i>Settings</a>
                        }
                        @endif
                    </li>

                    <li role="seperator" class="divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons">input</i>Sign Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>

            @if(Request::is('admin*'))
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
              
                {{-- <li class="{{ Request::is('admin/pending/post') ? 'active' : '' }}">
                    <a href="{{ route('admin.post.pending') }}">
                        <i class="material-icons">library_books</i>
                        <span>Pending Posts</span>
                    </a>

                </li> --}}

                </li>
                <li class="{{ Request::is('admin/doctor*') ? 'active' : '' }}">
                    <a href="{{ route('admin.doctor.index') }}">
                        <i class="material-icons">medication</i>
                        <span>Doctors</span>
                    </a>
                </li>

                <li class="{{ Request::is('admin/job_circular*') ? 'active' : '' }}">
                    <a href="{{ route('admin.job_circular.index') }}">
                        <i class="material-icons">work</i>
                        <span>Job Posts</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/apply_list*') ? 'active' : '' }}">
                    <a href="{{ route('admin.apply_list') }}">
                        <i class="material-icons">work</i>
                        <span>Job Aplly List</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/tag*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tag.index') }}">
                        <i class="material-icons">label</i>
                        <span>Tag</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                    <a href="{{ route('admin.category.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Category</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/post*') ? 'active' : '' }}">
                    <a href="{{ route('admin.post.index') }}">
                        <i class="material-icons">library_books</i>
                        <span>Posts</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/favorite') ? 'active' : '' }}">
                    <a href="{{ route('admin.favorite.index') }}">
                        <i class="material-icons">favorite</i>
                        <span>Favorite Posts</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/comments') ? 'active' : '' }}">
                    <a href="{{ route('admin.comment.index') }}">
                        <i class="material-icons">comment</i>
                        <span>Comments</span>
                    </a>
                </li>
                {{-- <li class="{{ Request::is('admin/authors') ? 'active' : '' }}">
                    <a href="{{ route('admin.author.index') }}">
                        <i class="material-icons">account_circle</i>
                        <span>User</span>
                    </a>
                </li> --}}
                <li class="{{ Request::is('admin/subscriber') ? 'active' : '' }}">
                    <a href="{{ route('admin.subscriber.index') }}">
                        <i class="material-icons">subscriptions</i>
                        <span>Subscribers</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/contact_message') ? 'active' : '' }}">
                    <a href="{{ route('admin.contact_message') }}">
                        <i class="material-icons">message</i>
                        <span>Contact Message</span>
                    </a>
                </li>
                <li class="header">System</li>

                <li class="{{ Request::is('admin/settings') ? 'active' : '' }}">
                    <a href="{{ route('admin.settings') }}">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/medicine*') ? 'active' : '' }}">
                    <a href="{{ route('admin.medicine.index') }}">
                        <i class="material-icons">medical_services</i>
                        <span>Medicine</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endif
            @if(Request::is('author*'))
                <li class="{{ Request::is('author/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('author.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::is('author/appointment*') ? 'active' : '' }}">
                    {{--  <a href="{{ route('author.appointment.index') }}">
                        <i class="material-icons">library_books</i>
                        <span>Make A Presception</span>
                    </a>  --}}
                </li>
                <li class="{{ Request::is('author/download/prescription') ? 'active' : '' }}">
                    <a href="{{ route('author.prescription.download') }}">
                        <i class="material-icons">download</i>
                        <span>Download Presception</span>
                    </a>
                </li>
                <li class="header">System</li>
                <li class="{{ Request::is('author/settings') ? 'active' : '' }}">
                    <a href="{{ route('author.settings') }}">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endif
            @if( Auth::user()->role_id == 3)
            <li class="{{ Request::is('user/dashboard') ? 'active' : '' }}">
                <a href="{{ route('user.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <span>Dashboard</span>
                </a>
            </li>
            {{-- <li class="{{ Request::is('author/post*') ? 'active' : '' }}">
                <a href="{{ route('author.post.index') }}">
                    <i class="material-icons">library_books</i>
                    <span>Make A Presception</span>
                </a>
            </li> --}}
           
            <li class="header">System</li>
            <li class="{{ Request::is('user/settings') ? 'active' : '' }}">
                <a href="{{ route('user.settings') }}">
                    <i class="material-icons">settings</i>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    <i class="material-icons">input</i>
                    <span>Logout</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endif
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>