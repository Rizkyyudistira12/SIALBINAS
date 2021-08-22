<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('admin2/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('admin2/css/components.css') }}">
  <style>
    .ck-editor__editable_inline {
    min-height: 500px;
    }
  </style>
  
  @if (auth()->user()->role == 'admin')
  <link rel="shortcut icon" href="{{ asset('admin/img/LOGO BIRU baru.png') }}">
  @endif

  @if (auth()->user()->role == 'alumni')
  <link rel="shortcut icon" href="{{ asset('frontend/img/logo-smk.png') }}">
  @endif
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
          </div>
        </form>

        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="@if (auth()->user()->role == 'alumni')
            {{ auth()->user()->alumni->getAvatar() }}
            @else
            /images/default.png
            @endif" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><?php
              date_default_timezone_set('Asia/Jakarta');
              $jam=date("G");
              if($jam>=0&&$jam<=11)
              $sapa="Selamat Pagi.";
              else if($jam>=12&&$jam<=15)
              $sapa="Selamat Siang.";
              else if($jam>=16&&$jam<=18)
              $sapa="Selamat Sore.";
              else if($jam>=19&&$jam<=23)
              $sapa="Selamat Malam.";
              ?>
                 <div class="sapaan">
                  <?php echo $sapa; ?>  {{ auth()->user()->name }} 
                  </div>
            </div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="/profilsaya" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profil
              </a>
              <div class="dropdown-divider"></div>
              <a href="/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>

      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <br>
          @if (auth()->user()->role == 'admin')
          <div class="sidebar-brand">
            <img src="{{ asset('admin/img/LOGO BIRU baru.png') }}" width="80px" height="auto" alt="">
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <img src="{{ asset('admin/img/LOGO BIRU baru.png') }}" width="40px" height="auto" alt="">
          </div>
          @endif

          @if (auth()->user()->role == 'alumni')
          <div class="sidebar-brand">
            <img src="{{ asset('frontend/img/logo-smk.png') }}" width="80px" height="auto" alt="">
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <img src="{{ asset('frontend/img/logo-smk.png') }}" width="40px" height="auto" alt="">
          </div>
          @endif

          <ul class="sidebar-menu">
              <li class="menu-header">Admin</li>
              <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
              </li>
              @if (auth()->user()->role == 'admin')
              <hr class="sidebar-divider">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="fas fa-fw fa-user"></i>
                  <span>My Profile</span></a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link" href="/alumni">
                  <i class="fas fa-fw fa-clipboard-list"></i>
                  <span>Data Alumni</span></a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link" href="/kuliah">
                  <i class="fas fa-graduation-cap"></i>
                  <span>Info Kuliah (Admin)</span></a>
              </li>
        
              
              <li class="nav-item">
                <a class="nav-link" href="/loker">
                  <i class="fas fa-user-tie"></i>
                  <span>Info Loker (Admin)</span></a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link" href="/event">
                  <i class="fas fa-fw fa-bullhorn"></i>
                  <span>Info Event (Admin)</span></a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link" href="/posts">
                  <i class="fas fa-pen-square"></i>
                  <span>Posts (Admin)</span>
                </a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link" href="/forum">
                  <i class="far fa-comments"></i>
                  <span>Forum Diskusi</span></a>
              </li>
              @endif
              <!-- Divider -->
              
              <li class="menu-header">Alumni</li>
        
              <li class="nav-item">
                <a class="nav-link" href="/profilsaya">
                  <i class="fas fa-fw fa-user"></i>
                  <span>Profilku</span></a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link" href="/daftaralumni">
                  <i class="fas fa-fw fa-user-graduate"></i>
                  <span>Daftar Alumni</span></a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="/infoloker">
                  <i class="fas fa-fw fa-user-md"></i>
                  <span>Info Lowongan Kerja</span></a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link" href="/infokuliah">
                  <i class="fas fa-graduation-cap"></i>
                  <span>Info Kuliah</span></a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link" href="/agenda">
                  <i class="fas fa-fw fa-calendar-alt"></i>
                  <span>Agenda & Event</span></a>
              </li>
        
              <li class="nav-item">
                <a class="nav-link" href="/forum">
                  <i class="far fa-comments"></i>
                  <span>Forum Diskusi</span></a>
              </li>
              
              <!-- Nav Item - Tables -->
        
              <li class="nav-item">
                <a class="nav-link" href="/logout">
                  <i class="fas fa-fw fa-sign-out-alt"></i>
                  <span>Keluar</span></a>
              </li>
            </ul>

        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('title')</h1>
          </div>

          @yield('content')
            
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by SIALBINAS</a>
        </div>
        <div class="footer-right">
          1.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('admin2/js/stisla.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{ asset('admin2/js/scripts.js') }}"></script>
  <script src="{{ asset('admin2/js/custom.js') }}"></script>
  <script src="{{ asset('frontend/js/ckeditor.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('admin2/js/page/index-0.js') }}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script>
    @if(Session::has('success'))
      toastr.success("{{ Session::get('success') }}", "Success")
    @endif
  </script>
@yield('footer')
</body>
</html>
