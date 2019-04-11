@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a blog</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('blogsManager.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">    
              <label for="author">Author:</label>
              <input type="text" class="form-control" name="author"/>
          </div>
          <div class="form-group">    
            <label for="titre">Titre:</label>
            <input type="text" class="form-control" name="titre"/>
          </div>
          <div class="form-group">    
            <label for="paragraphe">Paragraphe:</label>
            <input type="text" class="form-control" name="paragraphe"/>
          </div>
          <div class="form-group">
              <label for="photo">Photo:</label>
              <input type="file" class="form-control" name="photo"/>
          </div>
                               
          <button type="submit" class="btn btn-primary-outline">Add photo</button>
      </form>
  </div>
</div>
</div>
@endsection