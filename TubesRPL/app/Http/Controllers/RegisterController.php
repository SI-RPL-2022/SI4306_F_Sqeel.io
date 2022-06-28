<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\role;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = role::all();
        return view('signup.signup', [
            'title' => 'Sqeel.io | Signup',
            'roles' => $roles,
        ]);
    }

    public function signupview(Request $request)
    {
        $role = role::find($request['role_id']);

        return view('signup.form', [
            'title' => $role->namaRole . ' | Signup',
            'role_id' => $request['role_id'],
            'namaRole' => $role->namaRole
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request['password'] != $request['password_confirmation']) {
            return redirect('/signup')->withErrors(['msg' => 'Wrong password confirmation']);
        }
        $users = User::all();
        foreach ($users as $user) {
            if ($user->email == $request['email']) {
                return redirect('/signup')->withErrors(['msg' => 'Email tersebut telah terdaftar']);
            }
        }

        if ($request['role_id'] == 1) {

            $validated = $request->validate([
                'nama' => 'required|max:255',
                'role_id' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
            ]);

            $validated['password'] = Hash::make($validated['password']);

            User::create($validated);
            return redirect('/login')->with('msg', 'Register Success');
        } else {
            $validated = $request->validate([
                'nama' => 'required|max:255',
                'role_id' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed',
            ]);

            $validated['password'] = Hash::make($validated['password']);
            $create = User::create($validated);
            $data = ['user_id' => $create['id']];
            ModelsRequest::create($data);
            return redirect('/login')->with('msg', 'Register Success');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
