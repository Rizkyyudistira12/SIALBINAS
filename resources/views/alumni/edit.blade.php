@extends('layout.admin')

@section('content')

@section('title','Edit Data Alumni')
    <div class="container">
        <h1>Edit Data Alumni</h1>
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <form action="/alumni/{{ $alumni->id }}/update" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input name="nama" type="text" class="form-control" id="exampleInputEmail1" value="{{ $alumni->nama }}">
                    </div>
    
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select name="gender" class="form-control" id="exampleFormControlSelect1">
                          <option value="Pria" @if($alumni->gender == 'Pria') selected @endif>Pria</option>
                          <option value="Wanita" @if($alumni->gender == 'Wanita') selected @endif>Wanita</option>
                        </select>
                    </div>
    
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pekerjaan</label>
                        <select name="pekerjaan" class="form-control" id="exampleFormControlSelect1">
                          <option @if($alumni->pekerjaan == 'Wiraswasta') selected @endif value="Wiraswasta">Wiraswasta</option>
                          <option @if($alumni->pekerjaan == 'Wirausaha') selected @endif value="Wirausaha">Wirausaha</option>
                          <option @if($alumni->pekerjaan == 'Mahasiswa') selected @endif value="Mahasiswa">Mahasiswa</option>
                          <option @if($alumni->pekerjaan == 'Lainnya') selected @endif value="Lainnya">Lainnya</option>
                        </select>
                    </div>
    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $alumni->alamat }}</textarea>
                      </div>
    
                    </div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
            </div>
            
        </div>

@endsection