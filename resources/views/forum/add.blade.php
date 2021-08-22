@extends('layout.admin')

@section('content')

@section('title','Tambah Postingan')

    <div class="container">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <form action="/forum/create" method="post">
                    @csrf
                    <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}">
                      <label for="exampleInputEmail1">Judul</label>
                      <input name="judul" type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul Forum" value="{{ old('judul') }}">
                      @if ($errors->has('judul'))
                      <div class="alert alert-danger" role="alert">
                        <span class="help-block danger">{{ $errors->first('judul') }}</span>
                      </div>
                      @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Konten Pembahasan</label>
                        <textarea name="konten" class="form-control" id="konten" rows="3">{{ old('konten') }}</textarea>
                    </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
            
        </div>
        
    </div>

@endsection 



