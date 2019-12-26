@extends('product.layout')

@section('content')
<h2>Add Product</a></h2>

    <form action="{{ url('product_store') }}" method="post" name="add_product">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Title</strong>
                <input type="text" name="title" class="form-control">
                <span class="text-danger">{{ $errors->first('title') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Product Code</strong>
                <input type="text" name="product_code" class="form-control">
                <span class="text-danger">{{ $errors->first('product_code') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <textarea name="description" cols="4" class="form-control"></textarea>
                <span class="text-danger">{{ $errors->first('description') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
            <!-- <a href="{{ url('product_create') }}" class="btn btn-primary">Submit</a> -->
        </div>
    </div>
</form>
@endsection