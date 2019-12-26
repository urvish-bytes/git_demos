@extends('product.layout')

@section('content')

<a href="{{ url('product_create') }}" class="btn btn-success mb-2">Add</a>
<!-- <a href="{{ url('product_create') }}"></a> -->
<br>
<div class="row">
    <div class="col-12">
        <table class="table table-borderd" id="laravel_crud">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Prodcut Code</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->product_code }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ date('d-M-Y h:i:s A', strtotime($product->created_at)) }}</td>
                    <!-- <td>{{ date('d-M-Y h:i:s A', strtotime($product->updated_at)) }}</td> -->
                    <td><a href="{{ url('product_edit',[$product->id]) }}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ url('product_destroy',[$product->id]) }}" method="post">
                            {{ csrf_field() }}
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure want to delete?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- {{ !!$products->links() }} -->
    </div>
</div>
@endsection