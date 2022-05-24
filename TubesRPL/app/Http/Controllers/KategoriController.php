<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Http\Requests\StoreKategoriRequest;
use App\Http\Requests\UpdateKategoriRequest;
use App\Models\playlist;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Student.library', [
            'title' => 'Sqeel.io | Library',
            'kategoris' => kategori::all()
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
     * @param  \App\Http\Requests\StoreKategoriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKategoriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori, Request $request)
    {
        if (isset($request->mentor)) {

            $playlists = DB::table('playlists')
                ->join('users', 'playlists.user_id', '=', 'users.id')
                ->where('kategori_id', '=', $kategori->id)
                ->where('nama', 'like', '%' . $request->mentor . '%')
                ->get();
            return view('Student.kategori', [
                'title' => $kategori->namaKategori,
                'kategori' => $kategori,
                'mentor' => $request->mentor,
                'playlists' => $playlists
            ]);
        }
        $playlists = DB::table('playlists')
            ->join('users', 'playlists.user_id', '=', 'users.id')
            ->where('kategori_id', '=', $kategori->id)
            ->get();
        return view('Student.kategori', [
            'title' => $kategori->namaKategori,
            'kategori' => $kategori,
            'playlists' => $playlists
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKategoriRequest  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKategoriRequest $request, Kategori $kategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        //
    }
}
