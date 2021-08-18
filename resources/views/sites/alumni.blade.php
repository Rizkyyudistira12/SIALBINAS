@extends('layout.frontend')

@section('content')

@section('title','Testimoni Alumni SMK Nasional Bandung ')

    <!-- Hero -->
    <section class="alumni">
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
            <h2 style="font-family: 'Source Sans Pro', sans-serif;">Testimoni SIALBINAS</h2>
          </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-center m-auto">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel -->
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="img-box"><img src="https://i.ibb.co/d5DY64w/img1.jpg" alt=""></div>
                                <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                                <p class="overview"><b>Jennifer Smith</b>, Office Worker</p>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box"><img src="https://i.ibb.co/5FF1vqz/img2.jpg" alt=""></div>
                                <p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                                <p class="overview"><b>Dauglas McNun</b>, Financial Advisor</p>
                            </div>
                            <div class="item carousel-item">
                                <div class="img-box"><img src="https://i.ibb.co/Trv7hDv/img3.jpg" alt=""></div>
                                <p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
                                <p class="overview"><b>Hellen Wright</b>, Athelete</p>
                            </div>
                        </div>
                        <!-- Carousel Controls -->
                        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,96L48,106.7C96,117,192,139,288,154.7C384,171,480,181,576,170.7C672,160,768,128,864,128C960,128,1056,160,1152,165.3C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
<!--End Of Ikhtisar-->
@endsection