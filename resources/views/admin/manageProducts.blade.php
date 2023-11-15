<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product Name</th>
                                            <th>Product Brand</th>
                                            <th>Product Price</th>
                                            <th>Product Size</th>
                                            <th>Product Color</th>
                                            <th>Product Category</th>
                                            <th>Created At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{{ $product->product_brand }}</td>
                                            <td>{{ $product->product_price }}</td>
                                            <td>{{ $product->product_size }}</td>
                                            <td>{{ $product->product_color }}</td>
                                            <td>{{ $product->product_category }}</td>
                                            <td>{{ $product->created_at }}</td>
                                            <td>
                                                <a href="{{ url('editproducts/edit/'.$product->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ url('manageproducts/delete/'.$product->id) }}"
                                                    class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 mt-4">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="card">
                        <div class="card-body">
                            <h1 class="mb-4">Add Product</h1>
                            <form method="POST" action="{{ route('AllProducts') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="product_name" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" name="product_name" id="product_name">
                                </div>
                                <div class="mb-3">
                                    <label for="product_brand" class="form-label">Product Brand</label>
                                    <input type="text" class="form-control" name="product_brand" id="product_brand">
                                </div>
                                <div class="mb-3">
                                    <label for="product_price" class="form-label">Product Price</label>
                                    <input type="text" class="form-control" name="product_price" id="product_price">
                                </div>
                                <div class="mb-3">
                                    <label for="product_size" class="form-label">Product Size</label>
                                    <input type="text" class="form-control" name="product_size" id="product_size">
                                </div>
                                <div class="mb-3">
                                    <label for="product_color" class="form-label">Product Color</label>
                                    <input type="text" class="form-control" name="product_color" id="product_color">
                                </div>
                                <div class="mb-3">
                                    <label for="product_category" class="form-label">Product Category</label>
                                    <input type="text" class="form-control" name="product_category"
                                        id="product_category">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-app-layout>