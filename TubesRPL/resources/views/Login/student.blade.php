@extends('Layout.loginLayout')

@section('login')
    <form action="/login" method="post">
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
        <h4>Student Log In</h4>
        <a href="/login/mentor" class="">Sign in as Mentor </a>
        <div class="mb-3 mt-4 row">
            <div class="col">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Adress" autofocus
                    required value="{{ old('email') }}">
            </div>

        </div>
        <div class="mb-4 row">
            <div class="col">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
        </div>
        {{-- <div class="form-check mb-4 ">
            <input class="form-check-input" type="checkbox" value="" id="remember" name="remember" checked>
            <label class="form-check-label" for="flexCheckChecked">
                Remember me
            </label>
        </div> --}}
        <div class="d-grid gap-2 col-12 mx-auto">
            <button type="submit" class="btn">Login</button>
        </div>
        <input type="text" hidden name="role_id" id="role_id" value="1">
        <p class="text-center">Don't Have an account? <a href="/signup">Create For Free</a></p>
    </form>
@endsection
