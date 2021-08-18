@extends('layout.admin')

@section('content')

@section('title','Edit Data Loker')
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <form action="/kuliah/{{ $kuliah->id }}/update" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Perguruan Tinggi</label>
                        <input name="universitas" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Universitas" value="{{ $kuliah->universitas }}" >
                        {{-- @if  --}}
                        {{-- <div class="alert alert-danger" role="alert">
                          <span class="help-block danger"></span>
                        </div> --}}
                        {{-- @endif --}}
                      </div>
    
                      <div class="form-group ">
                        <label for="exampleFormControlSelect1">Posisi Loker</label>
                        <select name="posisi_loker" class="form-control" id="exampleFormControlSelect1">
                          <option value="SNMPTN" @if($kuliah->jalur_masuk == 'SNMPTN') selected @endif>SNMPTN</option>
                          <option value="SBMPTN" @if($kuliah->jalur_masuk == 'SBMPTN') selected @endif>SBMPTN</option>
                          <option value="SM" @if($kuliah->jalur_masuk == 'SM') selected @endif>Seleksi Mandiri</option>
                          <option value="Semua Jalur" @if($kuliah->jalur_masuk == 'Semua Jalur') selected @endif>Semua Jalur</option>
                        </select>
                          {{-- <div class="alert alert-danger" role="alert">
                            <span class="help-block danger"></span>
                          </div> --}}
                    </div>
    
                    <div class="form-group ">
                        <label for="exampleFormControlSelect1">Pendaftaran</label>
                        <select name="pendidikan" class="form-control" id="exampleFormControlSelect1">
                          <option value="ONLINE" @if($kuliah->pendaftaran == 'ONLINE') selected @endif>ONLINE</option>
                          <option value="OFFLINE" @if($kuliah->pendaftaran == 'OFFLINE') selected @endif>OFFLINE</option>
                        </select>
                          {{-- <div class="alert alert-danger" role="alert">
                            <span class="help-block danger"></span>
                          </div> --}}
                    </div>
    
            </div>
                        <button type="submit" class="btn btn-info ml-2">Update</button>
                    </form>
            </div>
            
    </div>

@endsection