@extends('layout.frontend')

@section('content')

@section('title','Sistem Informasi Alumni Bicara Nasional (SIALBINAS)')

    <!-- Hero -->
    <section class="jumbotron">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-5">
                    <h1 class="h1 font-weight-bold" style="font-family: 'Poppins', sans-serif; color: #fff;">Selamat Datang Di SIALBINAS</h1>
                    <p class="lead mt-3 text-light" style="font-family: 'Playfair Display', serif;">Raih Peluang Karirmu Disini</p>
                    <a class="btn btn-hero btn-md rounded-pill px-4 mt-2" href="#intro" role="button">Lihat Selengkapnya</a>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="hero-img">
                        <img src="{{ asset('frontend/img/Home.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
      
    </section>
<!-- End of Hero -->

<!--Ikhtisar-->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2 style="font-family: 'Source Sans Pro', sans-serif;">Apa Itu SIALBINAS ?</h2>
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
        <br>
        <div class="col">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-md-4">
              <div class="card ">
                <img src="{{ asset('frontend/img/graduate.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Terbuka untuk seluruh alumni SMK Nasional Bandung</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card ">
                <img src="{{ asset('frontend/img/Teamwork.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Memperluas Relasi Pertemanan dan Lapangan Kerja</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card ">
                <img src="{{ asset('frontend/img/classroom.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Meningkatkan Kualitas Program Sekolah Ke depan nya</p>
                </div>
              </div>
            </div>
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
        <h2><i>Services For You</i></h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col-md-4">
            <div class="card text-center">
              <br>
                <i class="fas fa-database" style="font-size: 100px; color: #1E90FF;"></i>
              <div class="card-body">
                <h5 class="card-title">Akses <i>Platform</i> Gratis</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center">
              <br>
              <i class="far fa-comments" style="font-size: 100px; color: #1E90FF;"></i>
              <div class="card-body">
                <h5 class="card-title">Forum Diskusi</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center">
              <br>
              <i class="fas fa-briefcase" style="font-size: 100px; color: #1E90FF;"></i>
              <div class="card-body">
                <h5 class="card-title">Informasi <i>Internship</i></h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center">
              <br>
              <i class="fas fa-graduation-cap" style="font-size: 100px; color: #1E90FF;"></i>
              <div class="card-body">
                <h5 class="card-title">Informasi pendidikan</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center">
              <br>
              <i class="far fa-handshake" style="font-size: 100px; color: #1E90FF;"></i>
              <div class="card-body">
                <h5 class="card-title">Ruang Konsultasi</h5>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center">
              <br>
              <i class="far fa-calendar-alt" style="font-size: 100px; color: #1E90FF;"></i>
              <div class="card-body">
                <h5 class="card-title"><i>Event</i> Terbaru</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,32L48,74.7C96,117,192,203,288,218.7C384,235,480,181,576,144C672,107,768,85,864,106.7C960,128,1056,192,1152,197.3C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>
<!--End Of Services-->

<!--Berita-->
<section id="news">
  <div class="container">
    <div class="row text-center mb-4">
      <div class="col">
        <h2>Berita SIALBINAS</h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col-md-4">
            <div class="card text-center">
              <br>
              <center>
                <img src="{{ asset('frontend/img/collabs.jpg') }}" width="250px" alt="">
              </center>
              <div class="card-body">
                <h5 class="card-title">Apa Sih Itu <i>Collaborative Study</i> SMK Nasional Bandung ?</h5>
                <p class="card-text">Pada era sekarang, di mana perubahan semakin cepat, 
                  termasuk di bidang IT
                </p>
                <a class="badge rounded-pill bg-primary" style="color: #fff">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center">
              <br>
              <center>
                <img src="{{ asset('frontend/img/Japan.png') }}" width="250px" alt="">
              </center>
              <div class="card-body">
                <h5 class="card-title">Lulus Sekolah Binggung Mau Ngapain ?</h5>
                <p class="card-text">Mau Kuliah, Biaya nya mahal. Mau kerja, lowongan lagi sedikit karena pandemi.
                  Sekarang, Kami Punya Solusi Untuk Anda.
                </p>
                <a class="badge rounded-pill bg-primary" style="color: #fff">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center">
              <br>
              <center>
                <img src="{{ asset('frontend/img/PPDB2122.jpeg') }}" width="250px" alt="">
              </center>
              <div class="card-body">
                <h5 class="card-title">PPDB SMK Nasional Bandung TA 2021/2022</h5>
                <a class="badge rounded-pill bg-primary" style="color: #fff">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <center>
      <br>
      <a href="" class="btn btn-primary" style="border-radius: 5%;">Muat Lebih Banyak</a>
    </center>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,0L48,21.3C96,43,192,85,288,101.3C384,117,480,107,576,90.7C672,75,768,53,864,74.7C960,96,1056,160,1152,181.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>
<!--End Of Berita-->

<!--Event-->
<section id="services">
  <div class="container">
    <div class="row text-center mb-4">
      <div class="col">
        <h2><i>Event</i> yang akan datang</h2>
      </div>
    </div>
    <div class="row">
      @foreach($posts as $post)
      <div class="col">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col-md-8">
            <div class="card text-center">
              <br>
              <center>
                <img src="{{ $post->thumbnail()}}" width="250px" alt="">
              </center>
              <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p> {{ $post->created_at->format('d M Y') }} Diposting Oleh | {{ $post->user->name }} </p>
                {!! $post->content !!}
                <a href="{{ route('site.single.post',$post->slug) }}" class="badge badge-pill badge-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <center>
      <br>
      <a href="" class="btn btn-primary" style="border-radius: 5%;">Muat Lebih Banyak</a>
    </center>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,32L48,74.7C96,117,192,203,288,218.7C384,235,480,181,576,144C672,107,768,85,864,106.7C960,128,1056,192,1152,197.3C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>
<!--End Of Event-->

@endsection