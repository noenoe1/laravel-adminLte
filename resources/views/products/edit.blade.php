@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6 mt-4">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Quick Example</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('products.update', $product->id) }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="productName">Product Name</label>
                            <input type="text" name="name" class="form-control" id="productName" placeholder="Product Name" value="{{ $product->name }}">
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Price</label>
                            <input type="text" name="price" class="form-control" id="productPrice" placeholder="Price" value="{{ $product->price }}">
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Description</label>
                            <textarea class="form-control" name="description" placeholder="Description" rows="3">{{ $product->description }}</textarea>
                        </div>
                 
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

        </div>
          <!--/.col (right) -->
    </div>
        <!-- /.row -->
</div><!-- /.container-fluid -->
@endsection