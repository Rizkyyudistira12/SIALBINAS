<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('frontend/img/logo-smk.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!--CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

    <title>@yield('title')</title>
  </head>
  <body>
      <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="/" style="font-family: 'Viga', sans-serif;"><img src="{{ asset('frontend/img/logo-smk.png') }}" alt="" width="50px" height="auto"> SIALBINAS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" style="font-family: 'Raleway', sans-serif;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Alumni">Alumni</a></li>
              <div class="my-2 my-lg-0 mr-2">
                <a class="nav-link btn btn-outline-navbar btn-sm rounded-pill px-4" href="/login">Login</a>
              </div>
            &nbsp;
            &nbsp;
            <div class="my-2 my-lg-0">
                <a class="nav-link btn btn-navbar btn-sm rounded-pill px-4" href="/register">Registrasi</a>
            </div>
            </ul>
          </div>
        </div>
    </nav>
      <!--End Of Navbar-->

      @yield('content')

   
<!--Footer-->
<footer class="footer" id="footer">
  <div class="container">
      <div class="row">
          <div class="col-md-4 col-lg-4 mt-5 mr-5 text-white">
              <h1 style="font-family: 'Viga', sans-serif;"><img src="{{ asset('frontend/img/logo-smk.png') }}"alt="..." height="100" class="mb-2" > SIALBINAS </h1>
          </div>
          <div class="col-md-4 col-lg-4 col-xs-12 mt-5 text-white">
              <h5>Informasi</h5>
              <ul class="footer-link">
                  <li><i class="fas fa-map-marker-alt" style="font-size: 20px;"></i><a href="#" style="font-family: 'Crimson Text', serif; font-size: 20px;"> &nbsp; Jl. Sadang Serang No. 64 Bandung</a></li>
                  <li><i class="fas fa-phone-volume" style="font-size: 20px;"></i><a href="#" style="font-family: 'Crimson Text', serif; font-size: 20px;"> &nbsp; (022) 20458616</a></li>
                  <li><i class="far fa-envelope" style="font-size: 20px;"></i><a href="#" style="font-family: 'Crimson Text', serif; font-size: 20px;" > &nbsp; smknasbdg@gmail.com</a></li>
                  <li><i class="fas fa-globe" style="font-size: 20px;"></i><a href="www.smknasionalbandung.com" style="font-family: 'Crimson Text', serif; font-size: 20px;">&nbsp; &nbsp;smknasionalbandung.com</a></li>
              </ul>
          </div>
          
          <div class="col-md-3 col-lg-3 col-xs-12 mt-5 text-white">
            <div class="single-footer-widget">
              <h4><i>Scan Me</i></h4>
                <img src="http://smknasionalbandung.sch.id/frontend/img/PPDB.png" width="100px" height="auto" alt="">
                &nbsp;
                &nbsp;
                <img src="http://smknasionalbandung.sch.id/frontend/img/Gmaps.png" width="100px" height="auto" alt="">
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-12">
              <br>
              <br>
              <br>
                <a href="https://www.facebook.com/groups/1909354909138693" target="_blank">
                    <img src="{{ asset('frontend/img/FB.png') }}" width="80" alt="..." />
                </a>
                &nbsp;
                <a href="https://www.instagram.com/smknasionalbandung/" target="_blank">
                  <img src="{{ asset('frontend/img/Instagram.png') }}" width="80" alt="..." />
              </a>
              &nbsp;
              <a href="https://www.youtube.com/channel/UCtwMIlaH08cca4_jcM-af-w" target="_blank">
                <img src="{{ asset('frontend/img/YT.png') }}" width="80" alt="..." />
            </a>
            </div>
        </div>
        </div>
      </div>
  </div>
</footer>
<div class="footer-bottom">
  <div class="container">
      <div class="row">
          <div class="col-md-12 col-lg-10 mt-2 text-white">
              <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> - <a><b>SIALBINAS</b></a> All rights reserved.</p>
          </div>
      </div>
  </div>
</div>
<!--End Of Footer-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/fontawesome.min.js"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>