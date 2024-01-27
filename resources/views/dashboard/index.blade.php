@extends('dashboard.layout.index')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Welcome, {{ auth()->user()->name }}</li>
            </ol>
        </div>
    </main>
@endsection
