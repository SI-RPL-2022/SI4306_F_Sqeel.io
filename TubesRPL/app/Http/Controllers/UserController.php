<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Student.Index', [
            'title' => 'Sqeel.io | Index'
        ]);
    }

    public function indexMentor()
    {
        $user =  auth()->user();
        $playlist = $user->playlist;
        // dd(count($playlist[1]->enroll));
        $data = [];
        $count = [];
        foreach ($playlist as $list) {
            $data[] = $list->judul;
            $count[] = count($list->enroll);
        }
        return view('Mentor.dashboard', [
            'title' => 'Sqeel.io | Mentor Dashboard',
            'playlist' => $playlist,
            'label2' => json_encode($data),
            'count' => json_encode($count)
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
        //
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
    public function edit(User $user)
    {
        return view('Student.profile', [
            'title' => 'Sqeel.io | Edit Profile',
            'user' => $user
        ]);
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
        if ($request->hasFile('profile')) {
            $filename = $request->nama . '.jpg';
            $request->profile->storeAs('profile', $filename, 'public');
            $data = [
                'nama' => $request->nama,
                'profile' => $filename,
                'bio' => $request->bio,

            ];
            User::where('id', $id)
                ->update($data);
            return redirect('/');
        }
        $data = [
            'nama' => $request->nama,
            'bio' => $request->bio,
        ];
        User::where('id', $id)
            ->update($data);

        return redirect('/');
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
