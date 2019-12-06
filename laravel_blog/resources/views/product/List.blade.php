@extends('product.layout')
@section('content')
    <a href="{{ route('products.create') }}" class="btn btn-success mb-2">Add</a> <br>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered" id="laravel_crud">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Product Code</th>
                        <th>Description</th>
                        <!-- <th>Created At</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- {{$i=1}} -->
                    @foreach($products as $product)
                    
                    <tr>
                        <!-- <td>{{$i++}}</td> -->
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->product_code }}</td>
                        <td>{{ $product->description }}</td>
                        <!-- <td>{{ date('d-M-Y H:i:s', strtotime($product->create_at)) }}</td> -->
                        <td>
                            <a href="{{ route('products.edit',$product->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('products.destroy',$product->id) }}" method="post">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $products->links() !!}
       </div> 
   </div>
 @endsection