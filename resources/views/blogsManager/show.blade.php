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
            <td>author</td>
            <td>titre</td>
            <td>paragraphe</td>
            <td>image</td>
            <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->date}}</td>
                <td>{{$blog->author}}</td>
                <td>{{$blog->titre}}</td>
                <td>{{$blog->paragraphe}}</td>
                <td><img src="/blog/{{$blog->filename}}" alt="" style="width: 80px;"></td>
 


                <td>
                    <a href="{{ route('blogsManager.edit',$blog->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('blogsManager.destroy', $blog->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            
        </tbody>
    </table>
    <div>
    <div>
        <a style="margin: 19px;" href="{{ route('blogsManager.create')}}" class="btn btn-primary">Add new photo</a>
    </div> 
</div>
@endsection