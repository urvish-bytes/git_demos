
@extends('product.layout')
@section('content')

<h2>Edit Product</a></h2>

<form action="{{ route('products.update', $prodcuct_info->id) }}" method="post" name="update_product">
{{csrf_field()}}
@method('PATCH')

    <div class="row">
        
        <div class="col-md-12">
            <div class="form-group">
                <strong>Title</strong>
                <input type="text" name="title" class="form-control" placehoder="Enter Title" value="{{ $prodcuct_info->title }}">
                <span class="text-danger">{{$errors->first('title')}}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Product Code</strong>
                <input type="text" name="product_code" class="form-control" placehoder="Enter Product Code" value="{{ $prodcuct_info->product_code }}">
                <span class="text-danger">{{$errors->first('product_code')}}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <input type="text" name="description" class="form-control" placehoder="Enter Descitption" value="{{ $prodcuct_info->description }}">
                <span class="text-danger">{{$errors->first('description')}}</span>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

</form>
@endsection

