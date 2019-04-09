@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a photo</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('photos.update', $photo->id) }}" enctype="multipart/form-data">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="photographer">Photographer:</label>
                <input type="text" class="form-control" name="photographer" value={{ $photo->photographer }} />
            </div>

            <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="file" class="form-control" name="photo"/>
                </div>

            <div class="form-group">
                <label for="date">Date (MM/DD):</label>
                <input type="text" class="form-control" name="date" value={{ $photo->date }} />
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" class="form-control" name="location" value={{ $photo->location }} />
            </div>
            <div class="form-group">
                <label for="location_url">location Google Map URL:</label>
                <input type="text" class="form-control" name="location_url" value={{ $photo->location_url }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>


            
        </form>
    </div>
</div>
@endsection