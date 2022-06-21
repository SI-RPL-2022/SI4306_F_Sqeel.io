<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function users()
    {
        $user = User::all();
        return view('Admin.users', [
            'title' => 'Sqeel.io | All Users',
            'users' => $user
        ]);
    }
}
