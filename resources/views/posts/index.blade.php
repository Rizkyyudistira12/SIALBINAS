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
                <a href="{{ route('posts.add') }}" class="btn btn-sm btn-primary float-right mb-2">
                    Tambah Posts
                </a>
            </div>
            
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Judul</th>
                    <th scope="col">User</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>
                        <a target="_blank" href="{{ route('site.single.post',$post->slug) }}" class="btn btn-sm btn-info">Lihat</a>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger delete" >Hapus</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
        
    </div>

@endsection

{{-- @section('footer')
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

@endsection --}}