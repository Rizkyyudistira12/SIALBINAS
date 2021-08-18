@extends('layout.admin')

@section('content')

@section('title','Forum Diskusi')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="panel">
          <div class="panel-heading">
            <div class="right">
                <a href="" class="btn btn-sm btn-primary float-right">Tambah Forum</a>
            </div>
          </div>
            <div class="panel-body">
            <ul class="list-unstyled activity-list">
              @foreach($forum as $frm)
              <li>
                <img src="{{ $frm->user->alumni->getAvatar() }}" width="5%" style="border-radius: 100%" alt="Avatar" class="img-circle pull-left avatar">
                <p><a href="#">{{ $frm->user->alumni->nama }}</a> 
                 {{$frm->judul}} <span class="timestamp">{{ $frm->created_at->diffForHumans() }}</span></p>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
  </div>
</div>




@endsection