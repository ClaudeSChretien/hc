@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a photo</h1>
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
      <form method="post" action="{{ route('photos.store') }}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">    
              <label for="photographer">Photographer:</label>
              <input type="text" class="form-control" name="photographer"/>
          </div>
          <div class="form-group">
              <label for="photo">Photo:</label>
              <input type="file" class="form-control" name="photo"/>
          </div>
          <div class="form-group">
              <label for="date">Date (MM/DD):</label>
              <input type="text" class="form-control" name="date"/>
          </div>
          <div class="form-group">
              <label for="location">Location:</label>
              <input type="text" class="form-control" name="location"/>
          </div>
          <div class="form-group">
              <label for="location_url">location Google Map URL:</label>
              <input type="text" class="form-control" name="location_url"/>
          </div>                         
          <button type="submit" class="btn btn-primary-outline">Add photo</button>
      </form>
  </div>
</div>
</div>
@endsection