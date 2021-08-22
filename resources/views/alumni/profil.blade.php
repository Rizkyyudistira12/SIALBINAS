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
          <i class="fa fa-facebook"></i>
        </a>
        <a href="#" class="btn btn-social-icon btn-twitter mr-1">
          <i class="fas fa-twitter"></i>
        </a>
        <a href="#" class="btn btn-social-icon btn-github mr-1">
          <i class="fas fa-github"></i>
        </a>
        <a href="#" class="btn btn-social-icon btn-instagram">
          <i class="fas fa-instagram"></i>
        </a>
      </div> --}}
    </div>
  </div>
  <div class="card">
    <form method="post" action="/alumni/{{ $alumni->id }}/update" enctype="multipart/form-data" class="needs-validation" novalidate="">
      @csrf
      <div class="card-header">
        <h4>Edit Profile</h4>
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
              <select name="gender" class="form-control" id="exampleFormControlSelect1">
                  <option value="Pria" @if($alumni->gender == 'Pria') selected @endif>Pria</option>
                  <option value="Wanita" @if($alumni->gender == 'Wanita') selected @endif>Wanita</option>
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
                  <span class="help-block" style="color: red">*Diisi bagi yang memilih jenis pekerjaan lainnya</span>
                  <input name="pekerjaan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan saat ini" value="{{ $alumni->pekerjaan }}">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12">
              <label>Alamat</label>
              <textarea class="form-control summernote-simple">{{ $alumni->alamat }}</textarea>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-12">
              <label>Testimoni</label>
              <textarea class="form-control summernote-simple">{{ $alumni->testimoni }}</textarea>
            </div>
          </div>
          <div class="row">
              <div class="form-group col-12">
                <label>Avatar</label>
                <input type="file" name="avatar" class="form-control">
              </div>
          </div>
      </div>
      <button type="submit" class="btn btn-info float-right">Update</button>
  </form>
  </div>
</div>
@endsection