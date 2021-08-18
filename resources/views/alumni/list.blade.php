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
                    <td>{{ $alumni->nama }}</td>
                    <td>{{ $alumni->gender }}</td>
                    <td>{{ $alumni->pekerjaan }}</td>
                    <td>{{ $alumni->alamat }}</td>
                    <td><a href="/alumni/{{ $alumni->id }}/detailalumni" class="btn btn-sm btn-info"><i class="fas fa-search"></i> Lihat</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        
    </div>

    <!-- Modal -->
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