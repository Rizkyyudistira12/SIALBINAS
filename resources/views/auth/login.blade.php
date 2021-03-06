<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Page SIALBINAS</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('adm_login/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  
  <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{ asset('adm_login/css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('frontend/img/logo-smk.png') }}">

</head>

<body class="bg-gradient-info">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-12">

            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                  <div class="col-lg-6 d-none d-lg-block">
                      <br>
                      <br>
                      &nbsp;
                      &nbsp;
                      &nbsp;
                      <img src="{{ asset('adm_login/img/ADM.jpg') }}" width="500px" height="auto" alt="">
                  </div>
                  <div class="col-lg-6">
                    <div class="p-5">
                      <div class="text-center">
                        @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if (session('failed'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('failed') }}
                        </div>
                        @endif

                        <img src="{{ asset('frontend/img/logo-smk.png') }}" width="100px" height="auto" alt="">
                        <br>
                        <br>
                        <h1 class="h4 text-gray-900 mb-4" style="font-family: 'Lexend', sans-serif;">Login Page <i>My Alumni</i> </h1>
                      </div>
                      <form class="user" method="post" action="/postlogin">
                        @csrf
                        <div class="form-group">
                          <input type="text" name="name" class="form-control form-control-user" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                          <input type="password" name="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                          Login
                        </button>
                      </form>
                      <hr>
                      <div class="text-center">
                        <a class="small" href="#">Forgot Password?</a>
                      </div>
                      <div class="text-center">
                        <a class="small" href="/register">Daftar Akun Anda!</a>
                      </div>
                      <div class="text-center mt-3">
                        <a href="/" style="color: black"><i class="fas fa-undo" style="font-size: 20px; color:blue" ></i> Kembali</a>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
        </div>
    
    </div>

</div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('adm_login/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('adm_login/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('adm_login/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('adm_login/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
