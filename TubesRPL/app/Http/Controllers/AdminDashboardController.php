<?php

namespace App\Http\Controllers;

use App\Models\playlist;
use App\Models\Request as ModelsRequest;
use App\Models\User;
use App\Models\video;
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
    public function videos()
    {
        $video = video::all();
        return view('Admin.videos', [
            'title' => 'Sqeel.io | All Videos',
            'videos' => $video
        ]);
    }
    public function courses()
    {
        $playlist = playlist::all();
        return view('Admin.courses', [
            'title' => 'Sqeel.io | All Courses',
            'courses' => $playlist
        ]);
    }

    public function requests()
    {
        $request = ModelsRequest::where('status', 'onreview')->get();
        return view('Admin.requests', [
            'title' => 'Sqeel.io | All Request',
            'requests' => $request
        ]);
    }
}
