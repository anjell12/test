@extends('auth.layout.index')
@section('content')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form action="/login" method="post">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('username') is-invalid @enderror"
                                                id="username" type="text" name="username" placeholder="Username" />
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('password') is-invalid @enderror"
                                                id="password" type="password" id="password" name="password"
                                                placeholder="Password" />
                                            <label for="password">Password</label>
                                        </div>

                                        <button class="btn btn-primary w-100" type="submit">Login</button>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="/register">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
