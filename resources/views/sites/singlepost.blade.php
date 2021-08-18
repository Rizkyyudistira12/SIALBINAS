@extends('layout.frontend')

@section('content')

@section('title','Event SIALBINAS')

<section class="popular-courses-area section-padding-100-0" style="background-image: url(img/core-img/texture.png);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h1></h1>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Popular Course -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                    <img src="{{ asset('frontend/img/PPDB.jpeg') }}" alt="">
                    <!-- Course Content -->
                    <div class="course-content">
                        <h4>{{ $post->title }}</h4>
                        <div class="meta d-flex align-items-center">
                            <a href="#">Admin</a>
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                        </div>
                        <p>Pendaftaran Siswa/i SMK Nasional Bandung T.A 2021-2022 Telah Dibuka</p>
                    </div>
                    <!-- Seat Rating Fee -->
                    <div class="seat-rating-fee d-flex justify-content-between">
                        <div class="course-fee h-100">
                            <a href="#" class="free">Detail</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Popular Course -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <img src="{{asset('frontend/img/Japan.jpg')}}" alt="">
                    <!-- Course Content -->
                    <div class="course-content">
                        <h4>Siswa/i SMK Nasional Ke Jepang</h4>
                        <div class="meta d-flex align-items-center">
                            <a href="#">Admin</a>
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                        </div>
                        <p>SMK Nasional bekerja sama dengan PT Keiga Indonesia</p>
                    </div>
                    <!-- Seat Rating Fee -->
                    <div class="seat-rating-fee d-flex justify-content-between">
                        <div class="course-fee h-100">
                            <a href="#" class="free">Detail</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Popular Course -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="750ms">
                    <img src="{{ asset('frontend/img/Alumni.jpg') }}" alt="">
                    <!-- Course Content -->
                    <div class="course-content">
                        <h4>Bincang Alumni SMK Nasional Bandung</h4>
                        <div class="meta d-flex align-items-center">
                            <a href="#">Admin</a>
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                        </div>
                        <p>Acara ini diselenggarakan oleh NVS Media Edutaiment</p>
                    </div>
                    <!-- Seat Rating Fee -->
                    <div class="seat-rating-fee d-flex justify-content-between">
                        <div class="course-fee h-100">
                            <a href="#" class="free">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection