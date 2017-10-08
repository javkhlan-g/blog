@extends('welcome')
@section('content')
    <form action="/post" method="post" class="form-horizontal">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="" class="col-md-4">Name:</label>
            <div class="input-group col-md-6">
                <input type="text" class="form-control" required name="title">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-md-4">Content:</label>
            <div class="input-group col-md-6">
                <textarea class="form-control" name="content" id="" cols="30" rows="6" required></textarea>
            </div>
        </div>
        <div class="col-md-4">
            <input type="submit" value="Save" class="btn btn-success">
        </div>
    </form>
@endsection