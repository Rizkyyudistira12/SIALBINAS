@extends('layout.admin')

@section('content')

@section('title','Forum Diskusi')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="panel">
          <div class="panel-heading">
            <div class="right">
              <a href="{{ route('forum.add') }}" class="btn btn-sm btn-primary float-right mb-2">
                Tambah Posts
            </a>
            </div>
          </div>
            <div class="panel-body">
            <ul class="list-unstyled activity-list">
              @foreach($forum as $frm)
              <li>
                <img src="{{ $frm->user->alumni->getAvatar() }}" width="5%" style="border-radius: 100%" alt="Avatar" class="img-circle pull-left avatar">
                <p><a href="/forum/{{ $frm->id }}/view">{{ $frm->user->alumni->nama }}</a> 
                 {{$frm->judul}} <span class="timestamp">{{ $frm->created_at->diffForHumans() }}</span></p>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
  </div>
</div>


  {{-- <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data Alumni</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
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

                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                    <div class="alert alert-danger" role="alert">
                      <span class="help-block danger">{{ $errors->first('email') }}</span>
                    </div>
                    @endif
                  </div>

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
          </div>
      </div>
      </div>
  </div> --}}




@endsection