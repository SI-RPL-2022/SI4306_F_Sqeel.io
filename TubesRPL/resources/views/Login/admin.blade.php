@extends('Layout.loginLayout')

@section('login')
    <form action="/admin" method="POST">
        @if (session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                {{ $errors->first() }}
            </div>
        @endif
        @csrf
        <h4>Admin Log In</h4>
        <div class="mb-3 mt-4 row">
            <div class="col">
                <input type="text" class="form-control" id="email" name="email" placeholder="Email Adress"
                    value="{{ old('email') }}">
            </div>
        </div>
        <div class=" mb-4 row">
            <div class="col">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
        </div>
        <div class="d-grid gap-2 col-12 mx-auto">
            <button type="submit" class="btn ">Login</button>
        </div>
    </form>
@endsection
