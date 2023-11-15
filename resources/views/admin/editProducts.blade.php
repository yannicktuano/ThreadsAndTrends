<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="row">
                    <div class="box">
                        <div class="col-lg-12">


                            <div class="col-md-12">
                                <div class="card">
                                    <h1>Edit Product</h1>
                                    <form method="POST" action="{{url('editProducts/update/'.$products->id)}}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="product_name" class="form-label">Product Name</label>
                                            <input type="text" class="form-control" name="product_name"
                                                id="product_name" value="{{$products->product_name}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="product_brand" class="form-label">Product Brand</label>
                                            <input type="text" class="form-control" name="product_brand"
                                                id="product_brand" value="{{$products->product_brand}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="product_price" class="form-label">Product Price</label>
                                            <input type="text" class="form-control" name="product_price"
                                                id="product_price" value="{{$products->product_price}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="product_size" class="form-label">Product Size</label>
                                            <input type="text" class="form-control" name="product_size"
                                                id="product_size" value="{{$products->product_size}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="product_color" class="form-label">Product Color</label>
                                            <input type="text" class="form-control" name="product_color"
                                                id="product_color" value="{{$products->product_color}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="product_category" class="form-label">Product Category</label>
                                            <input type="text" class="form-control" name="product_category"
                                                id="product_category" value="{{$products->product_category}}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>