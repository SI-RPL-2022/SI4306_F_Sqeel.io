<?php

namespace App\Http\Controllers;

use App\Models\playlist;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreplaylistRequest;
use App\Http\Requests\UpdateplaylistRequest;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mentor.createmateri', [
            'title' => 'Create Playlist'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreplaylistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreplaylistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(playlist $playlist)
    {
        $enroll = DB::table('enrolls')
            ->where('playlist_id', '=', $playlist->id)
            ->where('user_id', '=', auth()->user()->id)
            ->exists();;


        return view('Student.indexMateri', [
            'title' => $playlist->judul,
            'playlist' => $playlist,
            'enroll' => $enroll
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateplaylistRequest  $request
     * @param  \App\Models\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateplaylistRequest $request, playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(playlist $playlist)
    {
        //
    }
}
