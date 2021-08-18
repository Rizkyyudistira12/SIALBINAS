@extends('layout.admin')

@section('content')

@section('title','Event SIALBINAS')

<div class="container pt-3">
  <div class="row">
      <div class="col">
      </div>
  </div>

  <div class="row mt-5">
              <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="img-container">
                        <img src="{{ asset('admin/img/Agenda.jpg') }}" class="card-img-top event-card-img" alt="...">
                    </div>
                    <div class="card-body">
                      @foreach($data_event as $event )
                        <h3 class="card-title mt-3">{{ $event->nama_event }}</h3>
                        <h6 class="card-subtitle mb-2 text-muted">Oleh Admin SMK Nasional Bandung</h6>
                        <a href="/detail" class="btn btn-primary btn-block">Selengkapnya</a>
                    </div>
                    <div class="card-footer bg-lighter">
                        <p class="card-text"><i class="fas fa-fw fa-map-marker-alt"></i> {{ $event->tempat }}| <i class="fas fa-fw fa-calendar-check"></i> {{ $event->waktu }} </p>
                    </div>
                    @endforeach
                </div>
      </div>
              {{-- <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="img-container">
                        <img src="/img/ImageEvent/1620139709_porseni sman2contoh.jpg" class="card-img-top event-card-img" alt="...">
                    </div>
                    <div class="card-body">
                        <span class="badge badge-pill badge-primary">Seminar</span> <span class="badge badge-pill badge-danger badge-primary">private</span>
                        <h3 class="card-title mt-3">Porseni SMAN 2 Contoh</h3>
                        <h6 class="card-subtitle mb-2 text-muted">Oleh Rahman(Operator SMAN 2 Contoh)</h6>
                        
                        <a href="/event/detail/porseni-sman-2-contoh" class="btn btn-primary btn-block">Lihat Selengkapnya</a>
                    </div>
                    <div class="card-footer bg-lighter">
                        <p class="card-text"><i class="fas fa-fw fa-map-marker-alt"></i> Lapangan SMA Negeri 2 Contoh | <i class="fas fa-fw fa-calendar-check"></i> February 10, 2021 </p>
                    </div>
                </div>
              </div> --}}
              {{-- <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="img-container">
                        <img src="/img/ImageEvent/1620138644_Membangun Inkubator Bisnis Digital di Indonesia.jpeg" class="card-img-top event-card-img" alt="...">
                    </div>
                    <div class="card-body">
                        <span class="badge badge-pill badge-primary">Seminar</span> <span class="badge badge-pill badge-success badge-primary">public</span>
                        <h3 class="card-title mt-3">Membangun Inkubator Bisnis Digital di Indonesia</h3>
                        <h6 class="card-subtitle mb-2 text-muted">Oleh Muhamad Rizky(Operator SMAN 1 Contoh)</h6>
                        
                        <a href="/event/detail/membangun-inkubator-bisnis-digital-di-indonesia" class="btn btn-primary btn-block">Lihat Selengkapnya</a>
                    </div>
                    <div class="card-footer bg-lighter">
                        <p class="card-text"><i class="fas fa-fw fa-map-marker-alt"></i> Youtube ARS TV Jl. Sekolah Internasional No.1-2 Antapani Bandung 40282 - Jawa Barat Indonesia | <i class="fas fa-fw fa-calendar-check"></i> August 15, 2020 </p>
                    </div>
                </div>
              </div> --}}
              {{-- <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="img-container">
                        <img src="/img/ImageEvent/1620138348_Build Your Startup and You.jpeg" class="card-img-top event-card-img" alt="...">
                    </div>
                    <div class="card-body">
                        <span class="badge badge-pill badge-primary">Seminar</span> <span class="badge badge-pill badge-success badge-primary">public</span>
                        <h3 class="card-title mt-3">Build Your Startup and You</h3>
                        <h6 class="card-subtitle mb-2 text-muted">Oleh Muhamad Rizky(Operator SMAN 1 Contoh)</h6>
                        
                        <a href="/event/detail/build-your-startup-and-you" class="btn btn-primary btn-block">Lihat Selengkapnya</a>
                    </div>
                    <div class="card-footer bg-lighter">
                        <p class="card-text"><i class="fas fa-fw fa-map-marker-alt"></i> Online Zoom Bandung 40282 - Jawa Barat Indonesia | <i class="fas fa-fw fa-calendar-check"></i> November 8, 2020 </p>
                    </div>
                </div>
              </div> --}}
      
  </div>

</div>

{{-- <div class="container">
    <h1 class="text-center">Informasi Event SIALBINAS</h1>
    <div class="row row-cols-1 row-cols-md-3">
        @foreach($data_event as $event )
        <div class="col mb-4">
          <div class="card h-100">
            <img src="{{ asset('admin/img/Agenda.jpg') }}" width="100px" height="400px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $event->nama_event }}</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam tenetur natus voluptates neque sequi optio aspernatur, incidunt excepturi corporis sunt?</p>
              <a href="/detail" class="btn btn-primary">Selengkapnya</a>
            </div>
          </div>
        </div>      
        @endforeach
    </div>
    
</div> --}}


@endsection

