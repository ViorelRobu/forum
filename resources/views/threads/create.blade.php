@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a New Thread</div>
                <div class="panel-body">
                    <form action="/threads" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label for="body">Body:</label>
                            <textarea name="body" class="form-control" id="body" rows="10"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Publish">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
