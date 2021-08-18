@extends('layout.admin')

@section('content')

@section('title','Event SIALBINAS')



<div class="container">
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>  
    @endif

    <div class="row">
        <div class="col-6">
            {{-- <h1>Data Alumni</h1> --}}
        </div>
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-primary float-right mb-2" data-toggle="modal" data-target="#exampleModal">
                Tambah Data
            </button>
        </div>
        
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Event</th>
                <th scope="col">Penyelenggara</th>
                <th scope="col">Tempat</th>
                <th scope="col">Sifat Event</th>
                <th scope="col">Waktu</th>
                <th scope="col">Biaya</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach($data_event as $event )
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $event->nama_event }}</td>
                <td>{{ $event->penyelenggara }}</td>
                <td>{{ $event->tempat }}</td>
                <td>{{ $event->sifat_event }}</td>
                <td>{{ $event->waktu }}</td>
                <td>{{ $event->biaya }}</td>
                <td>
                    <a href="/event/{{ $event->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger delete" event-id="{{ $event->id }}" >Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
    
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Event</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/event/create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Event</label>
                  <input name="nama_event" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Event" >
                  {{-- @if  --}}
                  {{-- <div class="alert alert-danger" role="alert">
                    <span class="help-block danger"></span>
                  </div> --}}
                  {{-- @endif --}}
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Penyelenggara Acara</label>
                    <input name="penyelenggara" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama EO" >
                    {{-- @if  --}}
                    {{-- <div class="alert alert-danger" role="alert">
                      <span class="help-block danger"></span>
                    </div> --}}
                    {{-- @endif --}}
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tempat</label>
                    <textarea name="tempat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group ">
                    <label for="exampleFormControlSelect1">Sifat Event</label>
                    <select name="sifat_event" class="form-control" id="exampleFormControlSelect1">
                      <option value="Umum">UMUM</option>
                      <option value="Internal">Internal Alumni</option>
                    </select>
                      {{-- <div class="alert alert-danger" role="alert">
                        <span class="help-block danger"></span>
                      </div> --}}
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Jam Acara</label>
                    <input name="waktu" type="time" class="form-control" id="exampleInputEmail1" placeholder="Nama Event" >
                    {{-- @if  --}}
                    {{-- <div class="alert alert-danger" role="alert">
                      <span class="help-block danger"></span>
                    </div> --}}
                    {{-- @endif --}}
                </div>

                <div class="form-group ">
                    <label for="exampleFormControlSelect1">Biaya</label>
                    <select name="biaya" class="form-control" id="exampleFormControlSelect1">
                      <option value="Gratis">Gratis</option>
                      <option value="Berbayar">Berbayar</option>
                    </select>
                      {{-- <div class="alert alert-danger" role="alert">
                        <span class="help-block danger"></span>
                      </div> --}}
                </div>

            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection

@section('footer')
<script>
$('.delete').click(function(){
            var event_id = $(this).attr('event-id');
            swal({
              title: "Yakin ?",
              text: "Ingin menghapus data Event dengan id "+ event_id + " ?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              console.log(willDelete);
              if (willDelete) {
                window.location = "/event/"+event_id+"/delete";
              } 
            });
          });
</script>

@endsection