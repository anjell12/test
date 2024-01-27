@extends('dashboard.layout.index')
@section('content')
    <main>
        <div class="container-fluid px-4 mt-3">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between">
                    <a href="" class="text-decoration-none text-dark"><i class="fas fa-table me-1"></i>
                        DataTable Transaction</a>
                    <a href="/dashboard/product/create" class="btn btn-primary text-end">Create</a>
                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success" id="notif" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Reference no</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Payment</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Reference no</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Payment</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($transactions as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->reference_no }}</td>
                                    <td>{{ $item->product->name }}</td>
                                    <td>Rp. {{ $item->price }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>Rp. {{ $item->payment_amount }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
