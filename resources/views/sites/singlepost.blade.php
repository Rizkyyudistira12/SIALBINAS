@extends('layout.frontend')

@section('content')

@section('title','Event SIALBINAS')

    <!-- Hero -->
    <section class="wall">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col">
                    <br>
                    <br>
                    <br>
                    <h2 style="font-family: 'Source Sans Pro', sans-serif; color: #fff; font-size: 80px;">{{ $post->title }}</h2>
                    <p><a href="/index.html" style="font-family: 'Work Sans', sans-serif; color: #fff; font-size: 15px;" >Beranda</a> <i class="fas fa-arrow-right" style="font-size: 15px; color: #fff;"></i> <a href="/about.html" style="font-family: 'Work Sans', sans-serif; color: #fff; font-size: 15px;" > Tentang Kami</a></p>
                  </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,64L48,64C96,64,192,64,288,85.3C384,107,480,149,576,165.3C672,181,768,171,864,144C960,117,1056,75,1152,64C1248,53,1344,75,1392,85.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
<!-- End of Hero -->


<div class="container my-5">
    <div class="row">
        <div class="col-md-4 col-lg-8">
                        <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h1 class="card-title">{{ $post->title }}</h1>
                            <h5 class="card-subtitle">Diposting Oleh : {{ $post->user->name }} </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('admin/img/Agenda.jpg') }}" class="card-img" alt="Responsive image">
                        </div>
                    </div>

                    <div class="row my-5">
                        <div class="col">
                            <h2>Deskripsi</h2>
                            <p class="card-text">{!! $post->content !!}</p>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
        <div class="col-md-4 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h2>Keterangan</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- <div class="col">
                            <a href="https://wa.me/098765672517" class="btn btn-block btn-primary ">Daftar</a>
                                                    </div> --}}
                    </div>
                    <div class="row my-5">
                        <div class="col">
                            <h4 class="card-title">Diposting Oleh</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>:</td>
                                        <td>{{ $post->created_at->format('D,d M Y') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Oleh</td>
                                        <td>:</td>
                                        <td>{{ $post->user->name }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="/" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>


</div>


@endsection