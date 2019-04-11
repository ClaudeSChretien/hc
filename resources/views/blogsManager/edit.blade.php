@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a blog</h1>

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
        <form method="post" action="{{ route('blogsManager.update', $blog->id) }}" enctype="multipart/form-data">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="author">Author:</label>
                <input type="text" class="form-control" name="author" value={{ $blog->author }} />
            </div>

            <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="file" class="form-control" name="photo"/>
                </div>

            <div class="form-group">
                <label for="date">Date (MM/DD):</label>
                <input type="text" class="form-control" name="date" value={{ $blog->date }} />
            </div>
            <div class="form-group">
                <label for="titre">titre:</label>
                <input type="text" class="form-control" name="titre" value={{ $blog->titre }} />
            </div>
            <div class="form-group">
                <label for="paragraphe">paragraphe</label>
                <input type="text" class="form-control" name="paragraphe" value={{ $blog->paragraphe }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>


            
        </form>
    </div>
</div>
@endsection