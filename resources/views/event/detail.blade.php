@extends('layout.admin')

@section('content')

@section('title','Event SIALBINAS')

<div class="container my-5">
    <div class="row">
        <div class="col-md-4 col-lg-8">
                        <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h1 class="card-title">Tepang Sono Barudak Alumni TA 2020 / 2021</h1>
                            <h5 class="card-subtitle">Diselenggarakan oleh SMK Nasional Bandung </h5>
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
                            <p class="card-text"></p><p>Pertemuan akan dilaksanakan pada tanggal 01 Desember 2040</p><p></p>
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
                        <div class="col">
                            <a href="https://wa.me/098765672517" class="btn btn-block btn-primary ">Daftar</a>
                                                    </div>
                    </div>
                    <div class="row my-5">
                        <div class="col">
                            <h4 class="card-title">Jadwal Pelaksanaan</h4>
                            <table>
                                <tbody><tr>
                                    <td>Tanggal</td>
                                    <td>:</td>
                                    <td>01 Desember 2040</td>
                                </tr>
                                <tr>
                                    <td>Mulai</td>
                                    <td>:</td>
                                    <td>17:00 PM </td>
                                </tr>
                                <tr>
                                    <td>Selesai</td>
                                    <td>:</td>
                                    <td> 18:00 PM</td>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>
               
                    <div class="row my-5">
                        <div class="col">
                            <h4 class="card-title">Lokasi</h4>
                            <p class="card-text">
                                <i class="fas fa-fw fa-map-marker-alt"></i>
                                ZOOM Meetings
                            </p>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col">
                            <h4 class="card-title">Status Acara</h4>
                            <p class="card-text">Internal</p>
                        </div>
                    </div>
                    <a href="/agenda" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row mt-5">
        <div class="col">
            <h2>Event seru lainnya</h2>
        </div>
    </div>

    <div class="row my-3">
                <div class="col-md-4 col-lg-4">
            <a href="/event/detail/porseni-sman-2-contoh">
                </a><div class="card"><a href="/event/detail/porseni-sman-2-contoh">
                    <img src="/img/ImageEvent/1620139709_porseni sman2contoh.jpg" class="card-img-top" alt="...">
                    </a><div class="card-body"><a href="/event/detail/porseni-sman-2-contoh">
                        <span class="badge badge-pill badge-primary my-3">Seminar</span>
                        </a><a class="card-link">
                            </a><a href="/event/detail/porseni-sman-2-contoh">
                                <h3 class="card-title">Porseni SMAN 2 Contoh</h3>
                            </a>
                        
                        <p class="card-text mb-4">
                            <i class="fas fa-calendar"></i> February 10, 2021
                        </p>
                    </div>
                </div>
            
        </div>

                <div class="col-md-4 col-lg-4">
            <a href="/event/detail/membangun-inkubator-bisnis-digital-di-indonesia">
                </a><div class="card"><a href="/event/detail/membangun-inkubator-bisnis-digital-di-indonesia">
                    <img src="/img/ImageEvent/1620138644_Membangun Inkubator Bisnis Digital di Indonesia.jpeg" class="card-img-top" alt="...">
                    </a><div class="card-body"><a href="/event/detail/membangun-inkubator-bisnis-digital-di-indonesia">
                        <span class="badge badge-pill badge-primary my-3">Seminar</span>
                        </a><a class="card-link">
                            </a><a href="/event/detail/membangun-inkubator-bisnis-digital-di-indonesia">
                                <h3 class="card-title">Membangun Inkubator Bisnis Digital di Indonesia</h3>
                            </a>
                        
                        <p class="card-text mb-4">
                            <i class="fas fa-calendar"></i> August 15, 2020
                        </p>
                    </div>
                </div>
            
        </div>

                <div class="col-md-4 col-lg-4">
            <a href="/event/detail/build-your-startup-and-you">
                </a><div class="card"><a href="/event/detail/build-your-startup-and-you">
                    <img src="/img/ImageEvent/1620138348_Build Your Startup and You.jpeg" class="card-img-top" alt="...">
                    </a><div class="card-body"><a href="/event/detail/build-your-startup-and-you">
                        <span class="badge badge-pill badge-primary my-3">Seminar</span>
                        </a><a class="card-link">
                            </a><a href="/event/detail/build-your-startup-and-you">
                                <h3 class="card-title">Build Your Startup and You</h3>
                            </a>
                        
                        <p class="card-text mb-4">
                            <i class="fas fa-calendar"></i> November 8, 2020
                        </p>
                    </div>
                </div>
            
        </div>

    </div> --}}


</div>

@endsection