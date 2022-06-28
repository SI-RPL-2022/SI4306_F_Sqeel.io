<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function download()
    {
        return Storage::download('Pakta Integritas Sqeel.docx');
    }
}
