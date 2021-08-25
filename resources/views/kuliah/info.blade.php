@extends('layout.admin')

@section('content')

@section('title','Info Kuliah SIALBINAS')

<div class="container">
    <h1 class="text-center">Informasi Program Kuliah</h1>
    <div class="row row-cols-1 row-cols-md-3">
      @foreach($data_kuliah as $kuliah)
      <div class="col mb-4">
        <div class="card h-100 text-center">
          <br>
          <i class="fas fa-user-graduate" style="font-size: 50px; color:blue"></i>
          <div class="card-body">
            <h5 class="card-title">{{ $kuliah->universitas }}</h5>
            <p class="card-text">{{ $kuliah->jalur_masuk }}</p>
            <div class="form-group">
              <a href="https://forms.gle/XC3mE48tHjEvMRU88" class="btn btn-sm btn-primary">Daftar Kuliah</a>
            </div>
            {{-- <a href="/detailkuliah" class="btn btn-primary">Selengkapnya</a> --}}
          </div>
        </div>
      </div>
      @endforeach
    </div>
    
</div>


@endsection

