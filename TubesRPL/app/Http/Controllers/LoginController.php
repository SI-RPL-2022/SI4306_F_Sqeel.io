<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\role;
use App\Models\User;
use Illuminate\Auth\Events\Login;

class LoginController extends Controller
{
    //
    public function loginMentor()
    {
        return view('Login.mentor', [
            'title' => 'Login | Mentor'
        ]);
    }

    public function loginStudent()
    {
        return view('Login.student', [
            'title' => 'Login | Student'
        ]);
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
            // 'role_id' => 'required'
        ]);


        if (Auth::attempt($credentials)) {



            if ($request['role_id'] == '1') {

                return redirect()->intended('/student/index');
            } elseif ($request['role_id'] == '2') {

                return redirect()->intended('/mentor/index');
            }
        }
        return redirect('/login')->withErrors(['msg' => 'Email atau Password salah']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
