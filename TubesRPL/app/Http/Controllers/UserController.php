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
        $user = auth()->user();
        $enrolls = Enroll::where('user_id', $user->id)->get();
        return view('Student.Index', [
            'title' => 'Sqeel.io | Index',
            'enrolls' => $enrolls,
        ]);
    }

    public function indexMentor()
    {
        $user =  auth()->user();
        $playlist = $user->playlist;
        // dd(count($playlist[1]->enroll));
        $data = [];
        $count = [];
        $videos = 0;
        $enroll = 0;
        $review = 0;
        $click = 0;
        foreach ($playlist as $list) {
            $data[] = $list->judul;
            $count[] = count($list->enroll);
            $videos += count($list->video);
            $enroll += count($list->enroll);
            $review += count($list->review);
            $click += $list->click;
        }
        // dd($videos, $enroll, count($playlist), $review);
        return view('Mentor.dashboard', [
            'title' => 'Sqeel.io | Mentor Dashboard',
            'playlist' => $playlist,
            'videos' => $videos,
            'enroll' => $enroll,
            'review' => $review,
            'label2' => json_encode($data),
            'count' => json_encode($count),
            'click' => $click,
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

        if (auth()->user->role_id == 2) {
            return redirect('/mentor/dashboard');
        } else {
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->user()->role_id == 3) {
            $user = user::find($id);
            $user->delete();
            return redirect('/admin/users/');
        }
        return redirect()->back();
    }
}
