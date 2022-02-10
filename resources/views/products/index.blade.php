@extends('layouts.app')

@section('content')

<div class="table-responsive animated fadeInRight">
    <a class="btn btn-link float-end" href="{{ route('products.create') }}">Create Product</a>
    <div class="col-md-7 offset-3 mt-4">
        @include('flash-message')
        @yield('content')
    </div>
	<table class="table m-0 table-striped">
		<tr>
			<th>Product ID</th>
			<th>Product Name</th>
            <th>Product Price</th>
            <th>Action</th>
		</tr>
        @if(count($products)>0)
        @foreach($products as $product)
			
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('products.edit', $product->id) }}">
                            <button type="button" class="btn btn-success">Edit</button>
                        </a>
                        <a href="{{ route('products.destroy', $product->id) }}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </div>
                </td>

			</tr>

        @endforeach
        @endif
</table>
</div>

@endsection