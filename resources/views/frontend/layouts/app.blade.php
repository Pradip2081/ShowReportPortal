
<!DOCTYPE html>
<html lang="en">


<!-- datatables.html  21 Nov 2019 03:55:21 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
 <title>{{ $MyName->name }}</title>

 @if(!empty($favicon->image))
        <link rel="icon" href="{{ asset($favicon->image) }}" type="image/png">
    @endif


  <!-- General CSS Files -->
  <link rel="stylesheet" href="/assets/css/app.min.css">
  <link rel="stylesheet" href="/assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/components.css">
  <link rel="stylesheet" href="/assets/bundles/summernote/summernote-bs4.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="/assets/css/custom.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>

  {{-- <link rel="stylesheet" href="/imws_css/imws_main.css"> --}}
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>

            </li>
          </ul>
        </div>

        <ul class="navbar-nav navbar-right">
                  <li class="dropdown">
            <a href="#" data-toggle="dropdown">
              {{-- class="nav-link dropdown-toggle nav-link-lg nav-link-user"> --}}
              {{-- <img alt="image" src="" class="user-img-radious-style"> --}}

 <i class="fa-solid fa-gear"></i>
            </a>



            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello {{Auth::user()->name}}</div>
                 {{-- <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}

                        </x-dropdown-link> --}}

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="dropdown-item has-icon text-danger">
                   <i class="fas fa-sign-out-alt"></i>Log out
                    </x-responsive-nav-link>
                </form>


            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
      <x-admin_sidebar/>
      </div>


      <!-- Main Content -->
      <div class="main-content">
           @include('sweetalert::alert')
        <section class="section">
          <div class="section-body">

          {{$slot}}


 </div>
    </div>
     <footer class="main-footer">
        <div class="footer-left">
          <a href="templateshub.net">Templateshub</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>

  <!-- General JS Scripts -->
  <script src="/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="/assets/bundles/datatables/datatables.min.js"></script>
  <script src="/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="/assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <script src="/assets/bundles/summernote/summernote-bs4.js"></script>
  <!-- Page Specific JS File -->
  <script src="/assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="/assets/js/custom.js"></script>
</body>


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->
</html>
