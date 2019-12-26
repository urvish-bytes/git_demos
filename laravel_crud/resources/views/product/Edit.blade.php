@extends('product.layout')

@section('content')
<h2>Edit Product</h2>

<form action="{{ url('product_update',$product_info->id) }}" method="post" name="update_product">
    {{ csrf_field() }}
    <!-- @method('PATCH') -->

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Title</strong>
                <input type="text" name="title" class="form-control" value="{{old('title',$product_info->title)}}">
                <span class="danger">{{ $errors->first('title') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Product Code</strong>
                <input type="text" name="product_code" class="form-control" value="{{old('product_code',$product_info->product_code)}}" readonly="readonly">
                <span class="danger">{{ $errors->first('product_code') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <strong>Description</strong>
                <textarea name="description" rows="5" class="form-control">{{ old('description',$product_info->description) }}</textarea>
                <!-- <textarea class="form-control" rows="12" id="body" name="body" >{{Request::old('body')}} </textarea> -->
                <span class="danger">{{ $errors->first('description') }}</span>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection