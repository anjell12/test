@extends('dashboard.layout.index')
@section('content')
    <main>
        <div class="container-fluid px-4 mt-3">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4">
                    <div class="card mb-4 shadow-lg">
                        <div class="card-header">
                            <div class="card-text">
                                <a href="/dashboard/product" class="text-decoration-none">Product</a> / Show product
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-muted mb-2">Product name : {{ $products->name }}</p>
                            <p class="text-muted mb-2">Price : Rp. {{ $products->price }} </p>
                            <p class="text-muted mb-2">Stock : {{ $products->stock }}</p>
                            <p class="text-muted mb-2">Description : {{ $products->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
