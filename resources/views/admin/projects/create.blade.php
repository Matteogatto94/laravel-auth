@extends('layouts.admin')

@section('content')

<h1>Create a new Projects</h1>
<form action="{{route('admin.projects.store')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Type a title" aria-describedby="titleHelper">
    </div>

    <div class="mb-3">
        <div class="mb-3">
            <label for="body" class="form-label"></label>
            <textarea class="form-control" name="body" id="body" rows="5" placeholder="Type a text"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>


</form>
@endsection