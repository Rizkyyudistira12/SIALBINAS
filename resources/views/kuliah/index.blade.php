@extends('layout.admin')

@section('content')

@section('title','Info Kuliah')



<div class="container">
    {{-- @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>  
    @endif --}}

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
                <th scope="col">Nama Perguruan Tinggi</th>
                <th scope="col">Seleksi Masuk</th>
                <th scope="col">Pendaftaran</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach($data_kuliah as $kuliah )
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td><a href="#">{{ $kuliah->universitas }}</a></td>
                <td>{{ $kuliah->jalur_masuk }}</td>
                <td>
                  @if ('ONLINE')
                    <span class="badge badge-success">{{ $kuliah->pendaftaran }}</span>
                  @else 
                    <span class="badge badge-danger"> {{ $kuliah->pendaftaran }}</span>
                  @endif
                 </td>
                <td>
                    <a href="/kuliah/{{ $kuliah->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger delete" kuliah-id="{{ $kuliah->id }}" >Hapus</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kuliah</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/kuliah/create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Perguruan Tinggi</label>
                  <input name="universitas" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Perguruan Tinggi" >
                  {{-- @if  --}}
                  {{-- <div class="alert alert-danger" role="alert">
                    <span class="help-block danger"></span>
                  </div> --}}
                  {{-- @endif --}}
                </div>

                <div class="form-group ">
                    <label for="exampleFormControlSelect1">Seleksi Masuk</label>
                    <select name="jalur_masuk" class="form-control" id="exampleFormControlSelect1">
                      <option value="SNMPTN">SNMPTN</option>
                      <option value="SBMPTN">SBMPTN</option>
                      <option value="SM">Seleksi Mandiri</option>
                      <option value="Semua Jalur">Semua Jalur</option>
                    </select>
                      {{-- <div class="alert alert-danger" role="alert">
                        <span class="help-block danger"></span>
                      </div> --}}
                </div>

                <div class="form-group ">
                    <label for="exampleFormControlSelect1">Pendaftaran</label>
                    <select name="pendaftaran" class="form-control" id="exampleFormControlSelect1">
                      <option value="ONLINE">ONLINE</option>
                      <option value="OFFLINE">OFFLINE</option>
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
            var kuliah_id = $(this).attr('kuliah-id');
            swal({
              title: "Yakin ?",
              text: "Ingin menghapus data Kuliah dengan id "+ kuliah_id + " ?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              console.log(willDelete);
              if (willDelete) {
                window.location = "/kuliah/"+kuliah_id+"/delete";
              } 
            });
          });
</script>

@endsection