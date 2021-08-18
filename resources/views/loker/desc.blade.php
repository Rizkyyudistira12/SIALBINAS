@extends('layout.admin')

@section('content')

@section('title','Detail Loker')

<div class="card-group">
  <div class="card">
    <img src="{{ $loker->getAvatar() }}" width="50px" height="auto" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $loker->perusahaan }}</h5>
      <p class="card-text">{{ $loker->posisi_loker }}</p>
      <p class="card-text"><small class="text-muted">{{ $loker->alamat }}</small></p>

    </div>
  </div>
  <div class="card">
    <form method="post" action="/loker/{{ $loker->id }}/update" enctype="multipart/form-data" class="needs-validation" novalidate="">
      @csrf
      <div class="card-header">
        <h4>Edit Deskripsi Loker</h4>
      </div>
      <div class="card-body">
          <div class="row">
            <div class="form-group col-lg-12">
              <label>Nama Perusahaan</label>
              <input name="perusahaan" type="text" class="form-control" value="{{ $loker->perusahaan }}">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-7 col-12">
              <label>Posisi Lowongan Pekerjaan</label>
              <select name="posisi_loker" class="form-control" id="exampleFormControlSelect1">
                  <option value="Sekretaris" @if($loker->posisi_loker == 'Sekretaris') selected @endif>Sekretaris</option>
                  <option value="Teknisi Jaringan" @if($loker->posisi_loker == 'Teknisi Jaringan') selected @endif>Teknisi Jaringan</option>
                  <option value="Front End Developer" @if($loker->posisi_loker == 'Front End Developer') selected @endif>Front End Developer</option>
                  <option value="Back End Developer" @if($loker->posisi_loker == 'Back End Developer') selected @endif>Back End Developer</option>
                  <option value="UI / UX Designer" @if($loker->posisi_loker == 'UI / UX Designer') selected @endif>UI / UX Designer</option>
                  <option value="Editor Video" @if($loker->posisi_loker == 'Editor Video') selected @endif>Editor Video</option>
              </select>
            </div>

            <div class="form-group col-lg-12">
              <label for="exampleFormControlSelect1">Pendidikan</label>
                  <select name="pekerjaan" class="form-control" id="exampleFormControlSelect1">
                    <option @if($loker->pendidikan == 'SMK') selected @endif value="SMK">SMK</option>
                    <option @if($loker->pendidikan == 'S1') selected @endif value="S1">S1</option>
                    <option @if($loker->pendidikan == 'S2') selected @endif value="S2">S2</option>
                    <option @if($loker->pendidikan == 'S3') selected @endif value="SMK">S3</option>
                  </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-12">
              <label>Alamat</label>
              <textarea class="form-control summernote-simple">{{ $loker->alamat }}</textarea>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-12">
              <label>Jobdesk</label>
              <textarea class="form-control summernote-simple">{{ $loker->jobdesk }}</textarea>
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