@extends('layout.admin')

@section('content')

@section('title','Loker SIALBINAS')



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
                <th scope="col">Nama Perusahaan</th>
                <th scope="col">Posisi Loker</th>
                <th scope="col">Pendidikan</th>
                <th scope="col">Jobdesk</th>
                <th scope="col">Alamat</th>
                <th scope="col">Gaji</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach($data_loker as $loker )
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td><a href="/loker/{{ $loker->id }}/profil">{{ $loker->perusahaan }}</a></td>
                <td>{{ $loker->posisi_loker }}</td>
                <td>{{ $loker->pendidikan }}</td>
                <td>{{ $loker->jobdesk }}</td>
                <td>{{ $loker->alamat }}</td>
                <td>{{ $loker->gaji }}</td>
                <td>
                    <a href="/loker/{{ $loker->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                    <a href="#" class="btn btn-sm btn-danger delete" loker-id="{{ $loker->id }}" >Hapus</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Loker</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/loker/create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Perusahaan</label>
                  <input name="perusahaan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Perusahaan" >
                  {{-- @if  --}}
                  {{-- <div class="alert alert-danger" role="alert">
                    <span class="help-block danger"></span>
                  </div> --}}
                  {{-- @endif --}}
                </div>

                <div class="form-group ">
                    <label for="exampleFormControlSelect1">Posisi Loker</label>
                    <select name="posisi_loker" class="form-control" id="exampleFormControlSelect1">
                      <option value="Teknisi Jaringan">Teknisi Jaringan</option>
                      <option value="Sekretaris">Sekretaris</option>
                      <option value="UI / UX Design">UI / UX Designer</option>
                      <option value="Editor Video">Editor Video</option>
                      <option value="Front End Developer">Front End Developer</option>
                      <option value="Back End Developer">Back End Developer</option>
                      <option value="Full Stack Developer">Full Stack Developer</option>
                    </select>
                      {{-- <div class="alert alert-danger" role="alert">
                        <span class="help-block danger"></span>
                      </div> --}}
                </div>

                <div class="form-group ">
                    <label for="exampleFormControlSelect1">Pendidikan</label>
                    <select name="pendidikan" class="form-control" id="exampleFormControlSelect1">
                      <option value="SMK">SMK</option>
                      <option value="D3 / D4">D3 / D4</option>
                      <option value="S1">S1</option>
                      <option value="S2">S2</option>
                      <option value="S3">S3</option>
                    </select>
                      {{-- <div class="alert alert-danger" role="alert">
                        <span class="help-block danger"></span>
                      </div> --}}
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Jobdesk</label>
                    <textarea name="jobdesk" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group ">
                    <label for="exampleFormControlSelect1">Gaji</label>
                    <select name="gaji" class="form-control" id="exampleFormControlSelect1">
                      <option value="Kurang dari Rp.500.000">Kurang dari Rp.500.000</option>
                      <option value="Rp. 500.000 - Rp. 1.000.000">Rp. 500.000 - Rp. 1.000.000</option>
                      <option value="Rp. 1.000.000 - Rp. 3.000.000">Rp. 1.000.000 - Rp. 3.000.000</option>
                      <option value="Lebih Dari Rp. 3.000.000">Lebih Dari Rp. 3.000.000</option>
                    </select>
                      {{-- <div class="alert alert-danger" role="alert">
                        <span class="help-block danger"></span>
                      </div> --}}
                </div>

                <div class="form-group ">
                  <label for="">Avatar</label>
                  <input type="file" name="avatar" class="form-control">
                  {{-- @if  --}}
                    {{-- <div class="alert alert-danger" role="alert">
                      <span class="help-block danger"></span>
                    </div> --}}
                  {{-- @endif --}}
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
            var loker_id = $(this).attr('loker-id');
            swal({
              title: "Yakin ?",
              text: "Ingin menghapus data Loker dengan id "+ loker_id + " ?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              console.log(willDelete);
              if (willDelete) {
                window.location = "/loker/"+loker_id+"/delete";
              } 
            });
          });
</script>

@endsection