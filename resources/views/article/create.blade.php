@extends('article.layout')
@section('content')
<h2 style="margin-top: 12px;" class="text-center">Add article</a></h2>
<br>
<form action="{{ route('articles.store') }}" method="POST" name="name_article">
{{ csrf_field() }}
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Title</strong>
            <input type="text" name="title" class="form-control" placeholder="Enter Title">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="form-group">
            <strong>Description</strong>
            <textarea class="form-control" col="4" name="description" placeholder="Enter Description" ></textarea>
            <span class="text-danger">{{ $errors->first('description') }}</span>
        </div>
    </div>
    
<div class="col-md-12">
        <div class="form-group">
            <strong>article Code</strong>
            <input type="text" name="text" class="form-control" placeholder="Enter article Text" >
            <span class="text-danger">{{ $errors->first('text') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
 
</form>
@endsection