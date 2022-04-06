@extends('layout.loginLayout')

@section('login')
    <h3>Opps, this email was registred as student</h3>

    <a href="/student/index" class="btn btn-primary mb-3">Continue as Student</a>
    <a href="/logout" class="btn" style="background: rgb(99, 99, 99)">Re-login with another email</a>
@endsection
