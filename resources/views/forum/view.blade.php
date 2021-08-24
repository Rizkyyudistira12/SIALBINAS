@extends('layout.admin')

@section('content')

@section('title','Forum Diskusi')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="panel">
            <div class="panel-body">
                <div class="col-md-12">
                    <!-- PANEL HEADLINE -->
                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ $forum->judul }}e</h3>
                            <p class="panel-subtitle">{{ $forum->created_at->diffForHumans() }}</p>
                        </div>
                        <div class="panel-body">
                            {{ $forum->konten }}
                            <hr>
                            <div class="btn-group">
                                <button class="btn btn-default"><i class="far fa-thumbs-up"> Suka</i></button>
                                <button class="btn btn-default" id="btn-komentar-utama"><i class="far fa-comment"> Komentar</i></button>
                            </div>
                            <form action="" style="margin-top: 10px; display:none" id="komentar-utama" method="POST">
                              @csrf
                              <input type="hidden" name="forum_id" value="{{ $forum->id }}">
                              <input type="hidden" name="parent" value="0">
                              <textarea name="konten" class="form-control" id="komentar-utama" rows="4"></textarea>
                              <input type="submit" class="btn btn-primary" value="Kirim">
                            </form>
                        </div>
                        <h1>Komentar</h1>
                        <div class="card">
                          <div class="card-header">
                            <h4>Recent Activities</h4>
                          </div>
                          <div class="card-body">
                            <ul class="list-unstyled list-unstyled-border">
                              <li class="media">
                                <img class="mr-3 rounded-circle" width="50" src="{{ $forum->user->alumni->getAvatar() }}" alt="avatar">
                                <div class="media-body">
                                  <div class="float-right text-primary">{{ $forum->created_at->diffForHumans() }}</div>
                                  <div class="media-title">{{ $forum->user->alumni->nama }}</div>
                                  <span class="text-small text-muted">Baru di print halaman belakang, rencana nya awal bulan september akan dilaksanakan cap 3 jari katanya</span>
                                </div>
                              </li>
                              <li class="media">
                                <img class="mr-3 rounded-circle" width="50" src="{{ $forum->user->alumni->getAvatar() }}" alt="avatar">
                                <div class="media-body">
                                  <div class="float-right">{{ $forum->created_at->diffForHumans() }}</div>
                                  <div class="media-title">Febryan Setia Pratama</div>
                                  <span class="text-small text-muted">Ok Danu</span>
                                </div>
                              </li>
                              <li class="media">
                                <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-3.png" alt="avatar">
                                <div class="media-body">
                                  <div class="float-right">17m</div>
                                  <div class="media-title">Rizal Fakhri</div>
                                  <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                </div>
                              </li>
                              <li class="media">
                                <img class="mr-3 rounded-circle" width="50" src="../assets/img/avatar/avatar-4.png" alt="avatar">
                                <div class="media-body">
                                  <div class="float-right">21m</div>
                                  <div class="media-title">Alfa Zulkarnain</div>
                                  <span class="text-small text-muted">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</span>
                                </div>
                              </li>
                            </ul>
                            <div class="text-center pt-1 pb-1">
                              <a href="#" class="btn btn-primary btn-lg btn-round">
                                View All
                              </a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <!-- END PANEL HEADLINE -->
                </div>
          </div>
        </div>
      </div>
  </div>
</div>

@endsection

@section('footer')
<script>
  $(document).ready(function(){
    $('#btn-komentar-utama').click(function(){
        $('#komentar-utama').show();
    });
  });
</script>

@endsection