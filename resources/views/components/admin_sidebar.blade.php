 <aside id="sidebar-wrapper">
     <div class="sidebar-brand rounded-l-md ">
         <a href="{{route('dashboard')}}"> <img alt="image" src="{{asset($getImg->image)}}" class="header-logo user-img-radious-style" />
            <span class="logo-name" >{{Str::limit(Auth::user()->name, 6, '')}}</span>
         </a>
     </div>
     <ul class="sidebar-menu">
         <li class="dropdown active">
             <a href="{{ route('dashboard') }}" class="nav-link"><i class="fa fa-gear"></i><span>Dashboard</span></a>
         </li>

         <li class="dropdown">
             <a href="#" class="menu-toggle nav-link has-dropdown"><i class="fa-solid fa-house me-2"></i><span>Home Page
                 </span></a>
             <ul class="dropdown-menu">
                 <li class="dropdown {{ Request::routeIs('admin.slides.*') ? 'active' : '' }}">
                     <a href="{{ route('admin.slides.index') }}" class="nav-link"><i class="fa-solid fa-file-lines"></i><span>Slid Show</span></a>
                 </li>
                 <li class="dropdown {{ Request::routeIs('admin.abouts.*') ? 'active' : '' }}">
                     <a href="{{ route('admin.aboutus.index') }}" class="nav-link"><i class="fa-solid fa-user"></i><span>Aboutus</span></a>
                 </li>

                 <li class="dropdown {{ Request::routeIs('admin.service.*') ? 'active' : '' }}">
                     <a href="{{ route('admin.service.index') }}" class="nav-link"><i class="fa-solid fa-briefcase"></i><span>Service</span></a>
                 </li>
             </ul>
         <li class="dropdown {{ Request::routeIs('admin.template.*') ? 'active' : '' }}">
             <a href="{{ route('admin.template.index') }}" class="nav-link"><i class="fa-solid fa-file-lines"></i><span>Template</span></span></a>
         </li>
         <li class="dropdown {{ Request::routeIs('admin.statement.*') ? 'active' : '' }}">
             <a href="{{ route('admin.statement.index') }}" class="nav-link"><i class="fa-solid fa-chart-bar"></i><span>My
                     Statement</span></span></a>
         </li>

         <li class="dropdown {{ Request::routeIs('admin.video.*') ? 'active' : '' }}">
             <a href="{{ route('admin.video.index') }}" class="nav-link"><i class="fa-solid fa-video"></i></i><span>Videos</span></span></a>
         </li>
              <li class="dropdown {{ Request::routeIs('admin.contact.*') ? 'active' : '' }}">
             <a href="{{ route('admin.contact.index') }}" class="nav-link"><i class="fa-solid fa-address-book"></i><span>Contact</span></span></a>
         </li>

            </li>
              <li class="dropdown {{ Request::routeIs('admin.curriculumvitae.*') ? 'active' : '' }}">
             <a href="{{ route('admin.curriculumvitae.index') }}" class="nav-link"><i class="fa-solid fa-id-card"></i><span>Your  CV</span></span></a>
         </li>
           </li>
              <li class="dropdown {{ Request::routeIs('admin.icon.*') ? 'active' : '' }}">
             <a href="{{ route('admin.icon.index') }}" class="nav-link"><i class="fa-solid fa-id-card"></i><span>Icon</span></span></a>
         </li>




         </li>
         {{-- <li class="dropdown">
             <a href="#" class="menu-toggle nav-link has-dropdown"><i
                     data-feather="command"></i><span>Apps</span></a>
             <ul class="dropdown-menu">
                 <li><a class="nav-link" href="chat.html">Chat</a></li>
                 <li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
                 <li><a class="nav-link" href="blog.html">Blog</a></li>
                 <li><a class="nav-link" href="calendar.html">Calendar</a></li>
             </ul>
         </li> --}}
     </ul>
 </aside>
