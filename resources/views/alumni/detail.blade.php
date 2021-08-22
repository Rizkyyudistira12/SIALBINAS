@extends('layout.admin')

@section('content')

@section('title','Profi Alumni')

<div class="card-group">
  <div class="card">
    <img src="{{ $alumni->getAvatar() }}" width="50px" height="auto" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $alumni->nama }}</h5>
      <p class="card-text">{{ $alumni->pekerjaan }}</p>
      <p class="card-text"><small class="text-muted">{{ $alumni->alamat }}</small></p>
      {{-- <div class="card-footer text-center">
        <div class="font-weight-bold mb-2">Sosial Media {{ $alumni->nama }}</div>
        <a href="#" class="btn btn-social-icon btn-facebook mr-1">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="btn btn-social-icon btn-twitter mr-1">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="btn btn-social-icon btn-github mr-1">
          <i class="fab fa-github"></i>
        </a>
        <a href="#" class="btn btn-social-icon btn-instagram">
          <i class="fab fa-instagram"></i>
        </a>
      </div> --}}
    </div>
  </div>
  <div class="card">
    <form>
        <fieldset disabled>
      <div class="card-header text-center">
        <h4>Data Diri {{ $alumni->nama }}</h4>
      </div>
      <div class="card-body">
          <div class="row">
            <div class="form-group col-lg-12">
              <label>Nama</label>
              <input name="nama" type="text" class="form-control" value="{{ $alumni->nama }}">
            </div>
          </div>
          <div class="row">
              <div class="form-group col-md-7 col-12">
                <label>Tempat Lahir</label>
                <input name="tmpt_lahir" type="text" class="form-control" value="{{ $alumni->tmpt_lahir }}">
              </div>
              <div class="form-group col-md-5 col-12">
                  <label>Tanggal Lahir</label>
                  <input name="tgl_lahir" type="date" class="form-control" value="{{ $alumni->tgl_lahir }}">
              </div>
          </div>
          <div class="row">
            <div class="form-group col-md-7 col-12">
              <label>Jenis Kelamin</label>
              <select id="disabledSelect" class="form-control">
                <option>Pria</option>
              </select>
            </div>
            <div class="form-group col-md-5 col-12">
              <label for="exampleFormControlSelect1">No Telepon</label>
              <input name="no_tlp" type="text" class="form-control" value="{{ $alumni->no_tlp }}">
            </div>
            <div class="form-group col-lg-12">
              <label for="exampleFormControlSelect1">Pekerjaan</label>
                  <select name="pekerjaan" class="form-control" id="exampleFormControlSelect1">
                    <option @if($alumni->pekerjaan == 'Wiraswasta') selected @endif value="Wiraswasta">Wiraswasta</option>
                    <option @if($alumni->pekerjaan == 'Wirausaha') selected @endif value="Wirausaha">Wirausaha</option>
                    <option @if($alumni->pekerjaan == 'Mahasiswa') selected @endif value="Mahasiswa">Mahasiswa</option>
                    <option @if($alumni->pekerjaan == 'Lainnya') selected @endif value="Lainnya">Lainnya</option>
                  </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12">
              <label>Alamat</label>
              <textarea class="form-control summernote-simple">{{ $alumni->alamat }}</textarea>
            </div>
          </div>
      </div>
        </fieldset>
        <a href="/daftaralumni" class="btn btn-danger ml-3">Kembali</a>
  </form>
  </div>
</div>
@endsection