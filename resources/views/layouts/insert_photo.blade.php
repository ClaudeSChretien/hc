<form method="post" action="{{url('/books')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    ...
    <div class="form-group">
        <label for="author">Cover:</label>
        <input type="file" class="form-control" name="bookcover"/>
    </div>
    ...
</form>