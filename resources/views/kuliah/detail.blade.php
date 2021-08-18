@extends('layout.admin')

@section('content')

@section('title','Detail Lowongan Pekerjaan')

<div class="card-group">
  <div class="card">
    <img src="{{ asset('admin/img/Secretary.jpg') }}" width="50px" height="auto" class="card-img-top" alt="...">
    <div class="card-body">+
      <h1 class="card-title"></h1>
      <p class="card-text"></p>
      <p class="card-text"><small class="text-muted"></small></p>
    </div>
  </div>
  <div class="card">
    <form>
        <fieldset disabled>
      <div class="card-header text-center">
        <h4>Deskripsi Informasi Kuliah </h4>
      </div>

      <div class="card-body">
          <div class="row">
            <div class="form-group col-lg-12">
              <label>Nama Universitas</label>
              <input name="universitas" type="text" class="form-control" value="{{ $kuliah->universitas }}">
            </div>
          </div>
          <div class="row">
              <div class="form-group col-md-7 col-12">
                <label>Jalur Masuk</label>
                <input name="jalur_masuk" type="text" class="form-control" value="SJ">
              </div>
              <div class="form-group col-md-5 col-12">
                  <label>Pendaftaran</label>
                  <input name="pendaftaran" type="text" class="form-control" value="ONLINE">
              </div>
          </div>
      </div>
        </fieldset>
        <a href="/infokuliah" class="btn btn-danger ml-3">Kembali</a>
  </form>
  </div>
</div>
@endsection