@extends('layout.admin')

@section('content')

@section('title','Loker SIALBINAS')

<div class="container">
    <h1 class="text-center">Informasi Lowongan Pekerjaan SIALBINAS</h1>
    <div class="row row-cols-1 row-cols-md-3">
      @foreach($data_loker as $loker)
      <div class="col mb-4">
        <div class="card h-100">
          <br>
          <center>
            <img src="{{ $loker->getAvatar() }}" width="200px" height="auto" alt="">  
          </center>
          <div class="card-body">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nama Perusahaan</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $loker->perusahaan }}" >
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">Posisi Loker</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $loker->posisi_loker }}" >
            </div>

            <div class="form-group">
              <label for="exampleFormControlTextarea1">Jobdesk</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $loker->jobdesk }}</textarea>
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">Alamat Perusahaan</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $loker->alamat }}" >
            </div>

            <div class="form-group">
              <a href="https://forms.gle/aZayuSPH3mtcncdr6" class="btn btn-sm btn-primary">Daftar Pekerjaan</a>
            </div>
            {{-- <a href="/descloker" class="btn btn-primary">Selengkapnya</a> --}}
          </div>
        </div>
      </div>
      @endforeach
    </div>
    
</div>


@endsection

