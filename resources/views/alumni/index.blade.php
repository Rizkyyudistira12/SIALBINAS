@extends('layout.admin')

@section('content')

@section('title','Data Alumni')

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
                <a href="/alumni/export" class="btn btn-sm btn-success float-right mr-4"><i class="fas fa-print">  Export Excel</i></a>
            </div>
            
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data_alumni as $alumni)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td><a href="/alumni/{{ $alumni->id }}/profil">{{ $alumni->nama }}</a></td>
                    <td>{{ $alumni->gender }}</td>
                    <td>{{ $alumni->pekerjaan }}</td>
                    <td>{{ $alumni->alamat }}</td>
                    <td>
                        <a href="/alumni/{{ $alumni->id }}/profil" class="btn btn-sm btn-warning">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger delete" alumni-id="{{ $alumni->id }}" >Hapus</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Alumni</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/alumni/create" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                      <label for="exampleInputEmail1">Nama</label>
                      <input name="nama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap" value="{{ old('nama') }}">
                      @if ($errors->has('nama'))
                      <div class="alert alert-danger" role="alert">
                        <span class="help-block danger">{{ $errors->first('nama') }}</span>
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

                    <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select name="gender" class="form-control" id="exampleFormControlSelect1">
                          <option value="Pria"{{ (old('gender') == 'Pria') ? 'selected' : '' }}>Pria</option>
                          <option value="Wanita"{{ (old('gender') == 'Wanita') ? 'selected' : '' }}>Wanita</option>
                        </select>
                        @if ($errors->has('email'))
                          <div class="alert alert-danger" role="alert">
                            <span class="help-block danger">{{ $errors->first('email') }}</span>
                          </div>
                      @endif
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Tempat Lahir</label>
                      <input name="tmpt_lahir" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tempat Lahir" value="{{ old('tmpt_lahir') }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Lahir</label>
                      <input name="tgl_lahir" type="date" class="form-control" id="exampleInputEmail1" value="{{ old('tgl_lahir') }}">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">No Telepon</label>
                      <input name="no_tlp" type="text" class="form-control" id="exampleInputEmail1" placeholder="No Telepon" value="{{ old('no_tlp') }}">
                    </div>

                    <div class="form-group {{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
                        <label for="exampleFormControlSelect1">Pekerjaan</label>
                        <select name="pekerjaan" class="form-control" id="exampleFormControlSelect1">
                          <option value="Wiraswasta" {{ (old('pekerjaan') == 'Wiraswasta') ? 'selected' : '' }}>Wiraswasta</option>
                          <option value="Wirausaha" {{ (old('pekerjaan') == 'Wirausaha') ? 'selected' : '' }}>Wirausaha</option>
                          <option value="Mahasiswa" {{ (old('pekerjaan') == 'Mahasiswa') ? 'selected' : '' }}>Mahasiswa</option>
                          <option value="Lainnya" {{ (old('pekerjaan') == 'Lainnya') ? 'selected' : '' }}>Lainnya</option>
                        </select>
                          <span class="help-block" style="color: red">*Diisi bagi yang memilih jenis pekerjaan lainnya</span>
                          <input name="pekerjaan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Pekerjaan saat ini" value="{{ old('pekerjaan') }}">
                        @if ($errors->has('pekerjaan'))
                        <div class="alert alert-danger" role="alert">
                          <span class="help-block danger">{{ $errors->first('pekerjaan') }}</span>
                        </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ old('alamat') }}</textarea>
                    </div>

                    <div class="form-group {{ $errors->has('avatar') ? ' has-error' : '' }}">
                      <label for="">Avatar</label>
                      <input type="file" name="avatar" class="form-control">
                      @if ($errors->has('avatar'))
                        <div class="alert alert-danger" role="alert">
                          <span class="help-block danger">{{ $errors->first('avatar') }}</span>
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
    </div>
@endsection

@section('footer')
<script>
    $('.delete').click(function(){
                var alumni_id = $(this).attr('alumni-id');
                swal({
                  title: "Yakin ?",
                  text: "Ingin menghapus data Alumni dengan id "+ alumni_id + " ?",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  console.log(willDelete);
                  if (willDelete) {
                    window.location = "/alumni/"+alumni_id+"/delete";
                  } 
                });
              });
</script>

@endsection