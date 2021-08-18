@extends('layout.frontend')

@section('content')

@section('title','Tentang SIALBINAS')

    <!-- Hero -->
    <section class="wall">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <br>
                    <br>
                    <br>
                    <h2 style="font-family: 'Source Sans Pro', sans-serif; color: #fff; font-size: 80px;">Tentang SIALBINAS</h2>
                    <p><a href="/index.html" style="font-family: 'Work Sans', sans-serif; color: #fff; font-size: 15px;" >Beranda</a> <i class="fas fa-arrow-right" style="font-size: 15px; color: #fff;"></i> <a href="/about.html" style="font-family: 'Work Sans', sans-serif; color: #fff; font-size: 15px;" > Tentang Kami</a></p>
                  </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L48,64C96,64,192,64,288,85.3C384,107,480,149,576,165.3C672,181,768,171,864,144C960,117,1056,75,1152,64C1248,53,1344,75,1392,85.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
<!-- End of Hero -->

<!--Ikhtisar-->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2 style="font-family: 'Source Sans Pro', sans-serif;">Tentang SIALBINAS</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5">
            <div class="col-md-4">
              <p style="font-family: 'Lora', serif;">Seiring perkembangan jaman, penyebaran informasi sangat luas dan cepat.
                Oleh karena itu, SMK Nasional Bandung bersama dengan BKK SMK Nasional Bandung berinisiatif membuat
                suatu sistem informasi yang mana akan menaungi perihal Peluang Usaha dan Kerja serta masih banyak lagi.
              </p>
            </div>
            <div class="col-md-4">
              <p style="font-family: 'Lora', serif;">SIALBINAS juga merupakan <i>platform</i> untuk menampung aspirasi alumni, baik kritik atau saran
                yang membangun untuk sekolah. selain itu juga, mempermudah komunikasi sekolah dengan alumni sehingga
                tercipta komunikasi yang <i>intens</i> dalam hal baik di bidang pendidikan maupun pekerjaan.
              </p>
            </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,96L48,106.7C96,117,192,139,288,154.7C384,171,480,181,576,170.7C672,160,768,128,864,128C960,128,1056,160,1152,165.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
<!--End Of Ikhtisar-->

<!--Services-->
<section id="services">
  <div class="container">
    <div class="row text-center mb-4">
      <div class="col">
        <h2>Tim SIALBINAS</h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col-md-4">
            <div class="card text-center">
              <br>
              <center>
                  <img src="{{ asset('frontend/img/Iki2.png') }}" width="200px" alt="">
              </center>
              <div class="card-body">
                <h5 class="card-title">Rizky Yudistira</h5>
                <p><i>Full Stack Developer SIALBINAS</i></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center">
              <br>
                <center>
                  <img src="{{ asset('frontend/img/PaDwiky.png') }}" width="200px" alt="">
                </center>
                <div class="card-body">
                <h5 class="card-title">Dwiky Maulana Putra</h5>
                <p><i>Ketua BKK SMK Nasional Bandung</i></p>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center">
              <br>
              <center>
                <img src="{{ asset('frontend/img/Piman.png') }}" width="200px" alt="">
            </center>
            <div class="card-body">
              <h5 class="card-title">Firman M Muhidin</h5>
              <p><i>Art Creator SMK Nasional Bandung</i></p>
            </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center">
              <br>
                <center>
                  <img src="{{ asset('frontend/img/Cacing.png') }}" width="200px" alt="">
                </center>
                <div class="card-body">
                <h5 class="card-title">M Rizky Novaldi S</h5>
                <p><i>Laboran SMK Nasional Bandung</i></p>
                </div>
            </div>
          </div>
          {{-- <div class="col-md-4">
            <div class="card text-center">
              <br>
                <center>
                  <img src="img/Iki2.png" width="200px" alt="">
                </center>
                <div class="card-body">
                <h5 class="card-title">Akses <i>Platform</i> Gratis</h5>
                </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center">
              <br>
                <center>
                  <img src="img/Iki2.png" width="200px" alt="">
                </center>
                <div class="card-body">
                <h5 class="card-title">Akses <i>Platform</i> Gratis</h5>
                </div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,32L48,74.7C96,117,192,203,288,218.7C384,235,480,181,576,144C672,107,768,85,864,106.7C960,128,1056,192,1152,197.3C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>
<!--End Of Services-->


@endsection