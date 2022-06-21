<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\video;
use App\Http\Requests\StorevideoRequest;
use App\Http\Requests\UpdatevideoRequest;
use App\Models\playlist;
use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\Enroll;

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
    public function create(playlist $playlist)
    {

        return view('Mentor.createvideo', [
            'title' => 'Create Video',
            'playlist' => $playlist
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

    public function simpan(Request $request)
    {
        $data = [
            'idvideo' => $request['idvideo'],
            'playlist_id' => $request['playlist_id'],
            'judulVideo' => $request['judulVideo'],
            'deskripsi' => $request['deskripsi']
        ];

        video::create($data);
        return redirect('/create/' . $request['judul'] . '/video')->with('msg', 'Berhasil Membuat video ' . $request['judulVideo']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(video $video)
    {
        // menambahkan data transaksi video

        $data = [
            'video_id' => $video->id,
            'user_id' => auth()->user()->id,
            'playlist_id' => $video->playlist->id

        ];
        $ada = false;
        $transaction = transaksi::all();
        foreach ($transaction as $tran) {
            if ($tran->video_id == $data['video_id'] && $tran->user_id == $data['user_id']) {
                $ada = true;
            }
        }
        if (!$ada) {
            transaksi::create($data);
        }
        // dd($video->playlist->transaksi);
        //Menghitung progress
        $a = transaksi::where('playlist_id', $video->playlist->id)
            ->where('user_id', auth()->user()->id)
            ->get();
        $progress = ((count($a) / count($video->playlist->video)) * 100);
        $progress = round($progress);
        Enroll::where('playlist_id', $video->playlist->id)
            ->where('user_id',  auth()->user()->id)
            ->update(['progress' => $progress]);

        // dd(round($progress));
        // membuka halaman video
        return view('Student.materi', [
            'title' => $video->judulVideo,
            'video' => $video,
            'playlist' => $video->playlist,
            'transaksi' => $a,
            'progress' => $progress
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
        return view('Mentor.editvideo', [
            'title' => 'Sqeel.io | Edit Video',
            'video' => $video
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevideoRequest  $request
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, video $video)
    {
        $data = [
            'idvideo' => $request['idvideo'],
            'judulVideo' => $request['judulVideo'],
            'deskripsi' => $request['deskripsi']
        ];
        video::where('id', $video->id)
            ->update($data);
        return redirect('/mentor/myvideos/' . $video->playlist->judul);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(video $video)
    {
        transaksi::where('video_id', $video->id)->delete();
        $video->delete();
        return redirect('/mentor/myvideos/' . $video->playlist->judul);
    }
}
