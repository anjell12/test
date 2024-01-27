@extends('dashboard.layout.index')
@section('content')
    <main>
        <div class="container-fluid px-4 mt-3">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="card mb-4 shadow-lg">
                        <div class="card-header">
                            <div class="card-text">
                                <a href="/dashboard/product" class="text-decoration-none">Product</a> / Create product
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="/dashboard/product/{{ $products->id }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Product name :</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $products->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price :</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        value="{{ $products->price }}">
                                </div>
                                <div class="mb-3">
                                    <label for="stock" class="form-label">Stock :</label>
                                    <input type="text" class="form-control" id="stock" name="stock"
                                        value="{{ $products->stock }}">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description :</label>
                                    <textarea class="form-control" id="description" name="description" rows="3">{{ $products->description }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary w-100">Update</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
