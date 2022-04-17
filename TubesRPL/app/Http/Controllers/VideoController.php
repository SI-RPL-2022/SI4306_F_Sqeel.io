<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\video;
use App\Http\Requests\StorevideoRequest;
use App\Http\Requests\UpdatevideoRequest;
use App\Models\playlist;

class VideoController extends Controller
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
        return view('Mentor.createvideo',[
            'title'=>'Create Video'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorevideoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevideoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(video $video)
    {


        // dd($video->created_at->format('l, d F Y'));
        return view('Student.materi', [
            'title' => $video->judulVideo,
            'video' => $video,
            'playlist' => $video->playlist
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevideoRequest  $request
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevideoRequest $request, video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(video $video)
    {
        //
    }
}
