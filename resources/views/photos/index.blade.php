@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-12">

        @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}  
            </div>
        @endif
    </div>
    <div class="col-sm-12">
        <h1 class="display-3">Contacts</h1>    
    <table class="table table-striped">
        <thead>
            <tr>
            <td>ID</td>
            <td>date added</td>
            <td>Email</td>
            <td>Photographer</td>
            <td>Location</td>
            <td>image</td>
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($photos as $photo)
            <tr>
                <td>{{$photo->id}}</td>
                <td>{{$photo->date}}</td>
                <td>{{$photo->photographer}}</td>
                <td>{{$photo->location}}</td>
                <td><a href="{{$photo->location_url}}" target="_blank">{{$photo->location_url}}</a></td>
                <td><a href="{{ route('photos.show',$photo->id)}}"><img src="photo/{{$photo->filename}}" alt="" style="width: 80px;"></a></td>
 


                <td>
                    <a href="{{ route('photos.edit',$photo->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('photos.destroy', $photo->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
    <div>
        <a style="margin: 19px;" href="{{ route('photos.create')}}" class="btn btn-primary">Add new photo</a>
    </div> 
</div>
@endsection