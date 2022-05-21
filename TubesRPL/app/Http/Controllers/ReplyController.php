<?php

namespace App\Http\Controllers;

use App\Models\reply;
use App\Http\Requests\StorereplyRequest;
use App\Http\Requests\UpdatereplyRequest;
use Illuminate\Http\Request;

class ReplyController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorereplyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $komentar = reply::create([
            'user_id' => $request->user_id,
            'komentar_id' => $request->komentar_id,
            'isi' => $request->isi,
        ]);

        return redirect('/video/' . $request['idvideo']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(reply $reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(reply $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatereplyRequest  $request
     * @param  \App\Models\reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatereplyRequest $request, reply $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(reply $reply)
    {
        //
    }
}
