<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi Akun SIALBINAS</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-dark">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <br>
                        <img src="{{ asset('frontend/img/Register.jpg') }}" width="500px" height="auto" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <img src="{{ asset('frontend/img/logo-smk.png') }}" width="100px" height="auto" alt="">
                                <br>
                                <br>
                                <h1 class="h4 text-gray-900 mb-4" style="font-family: 'Lexend', sans-serif;">Registrasi Akun SIALBINAS</h1>
                            </div>
                            {!! Form::open(['url' => '/postregister']) !!}
                                <div class="form-group">
                                    {!! Form::text('nama','',['class' => 'form-control','placeholder' => 'Nama Lengkap']) !!}
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            {!! Form::text('email','',['class' => 'form-control','placeholder' => 'Email Anda']) !!}
                                        </div>
                                    </div>

                                    <div class="col-sm-6">                                      
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                            <select name="gender" class="form-control">
                                                <option class="select-option" disabled> Pilih Jenis Kelamin </option>
                                                <option class="select-option" value=Pria> Pria </option>
                                                <option class="select-option" value=Wanita> Wanita </option>
                                            </select>
                                        </div> 
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tempat Lahir</label>
                                            {!! Form::text('tmpt_lahir','',['class' => 'form-control','placeholder' => 'Kota Kelahiran']) !!}
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                                            {!! Form::date('tgl_lahir','',['class' => 'form-control','placeholder' => 'Nama Lengkap']) !!}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No Telepon</label>
                                            {!! Form::text('no_tlp','',['class' => 'form-control','placeholder' => 'Nomor Telepon Anda']) !!}
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Pekerjaan</label>
                                            <select name="pekerjaan" class="form-control">
                                                <option class="select-option" disabled> Pilih Pekerjaan </option>
                                                <option class="select-option" value=Wiraswasta> Wiraswasta </option>
                                                <option class="select-option" value=Wirausaha> Wirausaha </option>
                                                <option class="select-option" value=Mahasiswa> Mahasiswa </option>
                                                <option class="select-option" value=Lainnya> Lainnya </option>
                                            </select>
                                        </div> 
                                    </div>
                                </div>

                                

                        
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Alamat</label>
                                        {!! Form::textarea('alamat','',['class' => 'form-control']) !!}
                                    </div>

                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Testimoni Tentang SMK Nasional</label>
                                            {!! Form::text('testimoni','',['class' => 'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Password</label>
                                            {!!Form::password('password',['class'=>'form-control','placeholder'=>'Password']) !!}
                                        </div>
                                    </div>
                                   
                                </div>
                            
                              

                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Register">
                           {!! Form::close() !!}
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/login">Sudah Punya Akun ? Login!</a>
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

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>