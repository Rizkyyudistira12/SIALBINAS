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
            <div class="col-md-6">
                <form action="{{ route('posts.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                      <label for="exampleInputEmail1">Judul</label>
                      <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul Postingan" value="{{ old('title') }}">
                      @if ($errors->has('title'))
                      <div class="alert alert-danger" role="alert">
                        <span class="help-block danger">{{ $errors->first('title') }}</span>
                      </div>
                      @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Content</label>
                        <textarea name="content" class="form-control" id="content" rows="3"></textarea>
                    </div>
            </div>

            <div class="col-md-6">
              <label for="exampleFormControlTextarea1">Thumbnail</label>
              <div class="input-group">
                <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary" style="color: #fff">
                    <i class="fa fa-picture-o"></i> Choose
                  </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="thumbnail">
              </div>
              <img id="holder" style="margin-top:15px;max-height:100px;">
              <div class="input-group">
                <input type="submit" class="btn btn-info" value="submit">
              </div>
            </div>
            
        </div>
        
    </div>

@endsection 

@section('footer')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
  ClassicEditor
      .create( document.querySelector( '#content' ) )
      .catch( error => {
          console.error( error );
      } );
      $(document).ready(function(){
        $('#lfm').filemanager('image');
      });
</script>

@endsection