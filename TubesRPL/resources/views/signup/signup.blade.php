@extends('Layout.signupLayout')

@section('login')
    <form action="/signup/form" method="POST">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                {{ $errors->first() }}
            </div>
        @endif
        @csrf
        <h4>Sign Up</h4>
        <p>Choose role :</p>
        <div class="content">
            <input type="radio" name="role_id" id="student" value="{{ $roles[0]->id }}" required>
            <input type="radio" name="role_id" id="mentor" value="{{ $roles[1]->id }}">
            <label for="student" class="box first">
                <div class="course">
                    <span class="circle"></span>
                    <span class="subject">{{ $roles[0]->namaRole }}</span>
                </div>
                <span class="gbr"><img src="/images/{{ $roles[0]->namaRole }}.png" alt=""></span>
            </label>
            <label for="mentor" class="box second">
                <div class="course">
                    <span class="circle"></span>
                    <span class="subject">{{ $roles[1]->namaRole }}</span>
                </div>
                <span class="gbr"><img src="/images/{{ $roles[1]->namaRole }}.png" alt=""></span>
            </label>
        </div>


        <div class="d-grid gap-2 col-12 mx-auto">
            <button type="submit" class="btn ">Get Started</button>
        </div>

        <p class="text-center">Already have an account?<a href="/login"> Sign in</a></p>
    </form>
@endsection
