@extends('layout.admin')

@section('content')

@section('title','Edit Data Event')
    <div class="container">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <form action="/event/{{ $event->id }}/update" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Event</label>
                        <input name="nama_event" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Event" value="{{ $event->nama_event }}" >
                        {{-- @if  --}}
                        {{-- <div class="alert alert-danger" role="alert">
                          <span class="help-block danger"></span>
                        </div> --}}
                        {{-- @endif --}}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Penyelenggara</label>
                        <input name="penyelenggra" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Penyelenggara" value="{{ $event->penyelenggara }}" >
                        {{-- @if  --}}
                        {{-- <div class="alert alert-danger" role="alert">
                          <span class="help-block danger"></span>
                        </div> --}}
                        {{-- @endif --}}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat</label>
                        <input name="tempat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Tempat" value="{{ $event->tempat }}" >
                        {{-- @if  --}}
                        {{-- <div class="alert alert-danger" role="alert">
                          <span class="help-block danger"></span>
                        </div> --}}
                        {{-- @endif --}}
                    </div>
    
                    <div class="form-group ">
                        <label for="exampleFormControlSelect1">Sifat Event</label>
                        <select name="sifat_event" class="form-control" id="exampleFormControlSelect1">
                          <option value="Umum" @if($event->sifat_event == 'Umum') selected @endif>UMUM</option>
                          <option value="Internal" @if($event->sifat_event == 'Internal') selected @endif>Internal Alumni</option>
                        </select>
                          {{-- <div class="alert alert-danger" role="alert">
                            <span class="help-block danger"></span>
                          </div> --}}
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Jam Acara</label>
                        <input name="waktu" type="time" class="form-control" id="exampleInputEmail1" placeholder="Nama Tempat" value="{{ $event->waktu }}" >
                        {{-- @if  --}}
                        {{-- <div class="alert alert-danger" role="alert">
                          <span class="help-block danger"></span>
                        </div> --}}
                        {{-- @endif --}}
                    </div>
    
                    <div class="form-group ">
                        <label for="exampleFormControlSelect1">Biaya</label>
                        <select name="biaya" class="form-control" id="exampleFormControlSelect1">
                          <option value="Gratis" @if($event->biaya == 'Gratis') selected @endif>Gratis</option>
                          <option value="Berbayar" @if($event->biaya == 'Berbayar') selected @endif>Berbayar</option>
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