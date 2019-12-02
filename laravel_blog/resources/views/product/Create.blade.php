@extends('product.layout')

@section('content')
<h2>Add Product</a></h2>

<form action="{{ route('products.store') }}" method="post" name="add_product">
{{ csrf_field() }}

    <div class="row"> 
        <div class="col-md-12">
            <strong>Title</strong>
            <input type="text" name="title" class="form-control" placeholde="Enter Title">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
        <div class="col-md-12">
            <strong>Product Code</strong>
            <input type="text" name="product_code" class="form-control" placeholde="Enter Product Code">
            <span class="text-danger">{{$errors->first('product_code')}}</span>
        </div>
        <div class="col-md-12">
            <strong>Description</strong>
            <textarea class="form-control" name="description" col="4" class="form-control" placeholde="Enter Description"></textarea>
            <span class="text-danger">{{$errors->first('description')}}</span>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection