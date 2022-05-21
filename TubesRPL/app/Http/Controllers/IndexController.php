<?php

namespace App\Http\Controllers;

use App\Models\playlist;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $latest = playlist::latest()->limit(3)->get();
        // dd($latest);
        return view('landing', [
            'title' => 'Sqeel.io',
            'latest' => $latest

        ]);
    }
}
