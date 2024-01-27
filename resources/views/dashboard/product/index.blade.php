@extends('dashboard.layout.index')
@section('content')
    <main>
        <div class="container-fluid px-4 mt-3">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between">
                    <a href="" class="text-decoration-none text-dark"><i class="fas fa-table me-1"></i>
                        DataTable Product</a>
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
                                <th>Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($products as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>
                                        <a href="/dashboard/product/{{ $item->id }}" class="btn btn-success">Show</a>
                                        <a href="/dashboard/product/{{ $item->id }}/edit"
                                            class="btn btn-warning">Edit</a>
                                        <form action="/dashboard/product/{{ $item->id }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
